<?php

namespace TaxiBundle\Controller;

use EntitiesBundle\Entity\Chauffeur;
use EntitiesBundle\Entity\Reservation;
use EntitiesBundle\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('EntitiesBundle:Reservation')->findAll();

        return $this->render('TaxiBundle:Default:index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    public function modifierAction(Request $request, Reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('TaxiBundle\Form\ReservationType', $reservation);
        $editForm->add('idChauffeur', EntityType::class, [
            'class' => Chauffeur::class,
            'choice_label' => function ($category) {
                $noms = $category->getIdVehicule();
                if ($noms == null)
                {
                    return 'On ne connait pas cette Marque';
                }
                return $noms->getMarque();
            },
            'label' => 'Choisissez la Marque de la voiture'
        ]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('taxi_homepage');
        }

        return $this->render('TaxiBundle:Default:edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function ajoutAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = new Reservation();
        $form = $this->createForm('TaxiBundle\Form\ReservationType', $reservation);

        $form->add('idChauffeur', EntityType::class, [
            'class' => Chauffeur::class,
            'choice_label' => function ($category) {
                $noms = $category->getIdVehicule();
                if ($noms == null)
                {
                    return 'On ne connait pas cette Marque';
                }
                return $noms->getMarque();
            },
            'label' => 'Choisissez la Marque de la voiture'
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /**** Edheya bech tetbadel ki taamlou user bel user connected tawa bech nhot client par defaut ***/
            $client1 = $em->getRepository('EntitiesBundle:Client')->find(48);
            $reservation->setIdClient($client1);

            /********* *****/

            /*** Hedhi nhotou feha el distance mel map ken mouch naamlouha bel javascript**/
            $reservation->setDistance(60);
            $reservation->setTarif(45);


            /****** ***/

            $reservation->setDate(new \DateTime());
            $reservation->setEtat(1);
            $reservation->setType("Taxi");

            $em->persist($reservation);
            $em->flush();


            return $this->redirectToRoute('taxi_homepage');
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

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
