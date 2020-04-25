<?php

namespace ApiBundle\Controller;

use EntitiesBundle\Entity\Client;
use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiController extends Controller
{

    public function getOffresDuClientAction()
    {
        $utilisateur = $this->getUser();

        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

        $offre = $this->getDoctrine()->getRepository(Offre::class)->recupererCovoiturage($client[0]);
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }

    public function addCovoiturage(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $offre = new Offre();

        $offre->setNbPlace($request->get('nbPlace'));
        $offre->setDepart($request->get('depart'));
        $offre->setArrive($request->get('arrive'));
        $offre->setDate($request->get('date'));
        $offre->setTime($request->get('time'));
        $offre->setTarif($request->get('tarif'));
        $offre->setIdOffreur($request->get('idOffreur'));
        $offre->setIdClient($request->get('idClient'));
        $offre->setVehicule($request->get('vehicule'));
        $offre->setBagage($request->get('bagage'));

        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }


}