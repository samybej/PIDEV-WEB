<?php

namespace BackBundle\Controller;

use EntitiesBundle\Entity\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
    public function reservations_allAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('EntitiesBundle:Reservation')->findAll();

        return $this->render('BackBundle:Default:index.html.twig', array(
            'reservations' => $reservations,
        ));
    }
    public function taxisAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('EntitiesBundle:Reservation')->findAll();

        return $this->render('BackBundle:Default:taxis.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    public function taxiAction(Reservation $reservation)
    {

        return $this->render('BackBundle:Default:taxi.html.twig', array(
            'reservation' => $reservation
        ));
    }

    public function transportsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('EntitiesBundle:Reservation')->findAll();

        return $this->render('BackBundle:Default:transports.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    public function transportAction(Reservation $reservation)
    {
        $em = $this->getDoctrine()->getManager();
        $meubles = $em->getRepository('EntitiesBundle:Meuble')->findBy(['idReservation' => $reservation->getId()]);

        return $this->render('BackBundle:Default:transport.html.twig', array(
            'reservation' => $reservation,
            'meubles' => $meubles
        ));
    }


}
