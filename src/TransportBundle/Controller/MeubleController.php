<?php

namespace TransportBundle\Controller;

use EntitiesBundle\Entity\Meuble;
use EntitiesBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TransportBundle\Entity\quantite;

/**
 * Meuble controller.
 *
 */
class MeubleController extends Controller
{
    /**
     * Lists all meuble entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meubles = $em->getRepository('EntitiesBundle:Meuble')->findAll();

        return $this->render('meuble/index.html.twig', array(
            'meubles' => $meubles,
        ));
    }

    /**
     * Creates a new meuble entity.
     *
     */
    public function newAction(Request $request)
    {
        $meuble = new Meuble();
        $form = $this->createForm('TransportBundle\Form\MeubleType', $meuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meuble);
            $em->flush();

            return $this->redirectToRoute('meuble_show', array('id' => $meuble->getId()));
        }

        return $this->render('meuble/new.html.twig', array(
            'meuble' => $meuble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new meuble entity for reservation.
     *
     */
    public function newResAction(Request $request, Reservation $res)
    {
        $quantite = new quantite();
        $form = $this->createForm('TransportBundle\Form\quantiteType', $quantite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            for ($i = 0; $i < $quantite->getG();$i++ )
            {
                $meuble = new Meuble();
                $meuble->setIdReservation($res);
                $meuble->setPrix(50);
                $meuble->setTaille('Grande');
                $em->persist($meuble);
                $em->flush();

                $res->setTarif($res->getTarif()+50);
                $em->persist($res);
                $em->flush();
            }

            for ($i = 0; $i < $quantite->getM();$i++ )
            {
                $meuble = new Meuble();
                $meuble->setIdReservation($res);
                $meuble->setPrix(25);
                $meuble->setTaille('Moyenne');
                $em->persist($meuble);
                $em->flush();

                $res->setTarif($res->getTarif()+25);
                $em->persist($res);
                $em->flush();
            }

            for ($i = 0; $i < $quantite->getS();$i++ )
            {
                $meuble = new Meuble();
                $meuble->setIdReservation($res);
                $meuble->setPrix(10);
                $meuble->setTaille('Petite');
                $em->persist($meuble);
                $em->flush();

                $res->setTarif($res->getTarif()+10);
                $em->persist($res);
                $em->flush();
            }


            return $this->redirectToRoute('reservation_index');
        }

        return $this->render('meuble/newM_Res.html.twig', array(
            'quantite' => $quantite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a meuble entity.
     *
     */
    public function showAction(Meuble $meuble)
    {
        $deleteForm = $this->createDeleteForm($meuble);

        return $this->render('meuble/show.html.twig', array(
            'meuble' => $meuble,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing meuble entity.
     *
     */
    public function editAction(Request $request, Meuble $meuble)
    {
        $deleteForm = $this->createDeleteForm($meuble);
        $editForm = $this->createForm('TransportBundle\Form\MeubleType', $meuble);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meuble_edit', array('id' => $meuble->getId()));
        }

        return $this->render('meuble/edit.html.twig', array(
            'meuble' => $meuble,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a meuble entity.
     *
     */
    public function deleteAction(Request $request, Meuble $meuble)
    {
        $form = $this->createDeleteForm($meuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meuble);
            $em->flush();
        }

        return $this->redirectToRoute('meuble_index');
    }

    /**
     * Creates a form to delete a meuble entity.
     *
     * @param Meuble $meuble The meuble entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Meuble $meuble)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meuble_delete', array('id' => $meuble->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

