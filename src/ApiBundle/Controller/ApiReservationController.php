<?php


namespace ApiBundle\Controller;


use EntitiesBundle\Entity\Chauffeur;
use EntitiesBundle\Entity\Client;
use EntitiesBundle\Entity\Reservation;

use EntitiesBundle\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiReservationController extends Controller
{
// 01 05 2020 VERSION

    public function getReservationAction($id)
    {
        $utilisateur = $this->getUser();

        //$client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);
        //$reservation = $this->getDoctrine()->getRepository(Reservation::class)->recupererReservation($client[0]);
        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findByIdClient($client);
        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($reservation,'json');

        return new Response($formatted);
    }

    public function addReservationAction($depart,$arrive,$id_chauffeur,$idClient)
    {
        $em = $this->getDoctrine()->getManager();

        $reservation = new Reservation();
        $date = new \DateTime();

        $reservation->setDepart($depart);
        $reservation->setArrive($arrive);
        $reservation->setDate($date);


        $chauffeur = $this->getDoctrine()->getRepository(Chauffeur::class)->find($id_chauffeur);
        $reservation->setType("Taxi");
        if ($depart == "tunis" && $arrive = "mannouba")
        {
            $reservation->setDistance(11);
            $reservation->setTarif(20);
        }
        else if ($depart == "menzah" && $arrive == "ariana")
        {
            $reservation->setDistance(5);
            $reservation->setTarif(9);
        }
        else if ($depart == "nasser" && $arrive == "lac")
        {
            $reservation->setDistance(9);
            $reservation->setTarif(12);
        }
        $reservation->setDistance(10);
        $reservation->setTarif(15);
        $reservation->setIdChauffeur($chauffeur);

        $client = $this->getDoctrine()->getRepository(Client::class)->find($idClient);
        $reservation->setIdClient($client);


        $em->persist($reservation);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reservation);

        return new JsonResponse($formatted);
    }


}