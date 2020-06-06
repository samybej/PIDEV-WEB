<?php

namespace ApiBundle\Controller;

use EntitiesBundle\Entity\Client;
use EntitiesBundle\Entity\InscriOffre;
use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiController extends Controller
{
    
    public function getOffresDuClientAction($id)
    {
        //$utilisateur = $this->getUser();

        $client = $this->getDoctrine()->getRepository(Client::class)->find($id);
        $offre = $this->getDoctrine()->getRepository(Offre::class)->recupererCovoiturage($client);

        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($offre,'json');

        return new Response($formatted);
    }

    public function addCovoiturageAction($nbPlace,$depart,$arrive,$date,$time,$tarif,$idOffreur,$vehicule,$bagage)
    {
        $date_conv = \DateTime::createFromFormat("Y-m-d", $date);
        $em = $this->getDoctrine()->getManager();

        $client = $this->getDoctrine()->getRepository(Client::class)->find($idOffreur);
        $offre = new Offre();

        $offre->setNbPlace($nbPlace);
        $offre->setDepart($depart);
        $offre->setArrive($arrive);
        $offre->setDate($date_conv);
        $offre->setTime($time);
        $offre->setTarif($tarif);
        $offre->setIdOffreur($client);
        $offre->setIdClient($client);
        $offre->setVehicule($vehicule);
        $offre->setBagage($bagage);

        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }

    public function rechercherCovoiturageAction($date,$depart,$arrive)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->rechercherCovoiturage($depart,$arrive,$date);

        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($offre,'json');

        return new Response($formatted);
    }

    public function InscriptionCovoiturageAction($idOffre,$idClient,$idOffreur)
    {
        $em = $this->getDoctrine()->getManager();

        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($idOffre);
        $client = $this->getDoctrine()->getRepository(Client::class)->find($idClient);
        $offreur = $this->getDoctrine()->getRepository(Client::class)->find($idOffreur);

        $inscriOffre = new InscriOffre($client,$offre,$offreur);


        $em->persist($inscriOffre);
        $em->flush();

        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($inscriOffre,'json');

        return new Response($formatted);

    }

    public function statistiquesAction()
    {
        $mois = '04';
        $year = '2020';

        for ($i=0; $i < 30; $i++)
        {
            $day=$i + 1;
            $date = $year.'-'.$mois.'-'.$day;
            $nbr = $this->getDoctrine()->getRepository(Offre::class)->getStatistiques($date);
            $array[] = $nbr;
        }


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($array);

        return new JsonResponse($formatted);

    }




}