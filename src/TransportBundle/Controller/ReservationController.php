<?php

namespace TransportBundle\Controller;

use EntitiesBundle\EntitiesBundle;
use EntitiesBundle\Entity\Chauffeur;
use EntitiesBundle\Entity\Reservation;
use http\Client\Curl\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reservation controller.
 *
 */
class ReservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('EntitiesBundle:Reservation')->findAll();

        return $this->render('reservation/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Creates a new reservation entity.
     *
     */
    public function newAction(Request $request)
    {
        $reservation = new Reservation();
        $form = $this->createForm('TransportBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /**** Edheya bech tetbadel ki taamlou user bel user connected tawa bech nhot client par defaut ***/
            $client1 = $em->getRepository('EntitiesBundle:Client')->find(48);
            $reservation->setIdClient($client1);

            /********* *****/

            $chauffeur_par_defaut = $em->getRepository('EntitiesBundle:Chauffeur')->findOneBy(['etatCompte' => 0]);

            /*** Hedhi nhotou feha el distance mel map ken mouch naamlouha bel javascript**/
            $reservation->setDistance(60);
            $reservation->setTarif(45);

            /****** ***/
            $reservation->setIdChauffeur($chauffeur_par_defaut);

            $reservation->setDate(new \DateTime());
            $reservation->setEtat(1);
            $reservation->setType("Transporteur");
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('meuble_newRes', array('res' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     */
    public function showAction(Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     */
    public function editAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('TransportBundle\Form\ReservationType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meuble_newRes', array('res' => $reservation->getId()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservation entity.
     *
     */
    public function deleteAction(Request $request, Reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param Reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
