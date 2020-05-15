<?php

namespace ApiBundle\Controller;

use EntitiesBundle\Entity\Chauffeur;
use EntitiesBundle\Entity\Client;
use EntitiesBundle\Entity\Formation;
use EntitiesBundle\Entity\Participation;
use EntitiesBundle\Entity\Postulation;
use EntitiesBundle\Entity\Theemes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use EntitiesBundle\Entity\Type;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class FormationController extends Controller
{
    public function getlistFormationByClientAction($id)
    {



        $Chauffeur = $this->getDoctrine()->getRepository(Chauffeur::class)->find($id);

        $offre = $this->getDoctrine()->getRepository(Formation::class)->Mesparticipation($Chauffeur);

        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($offre,'json');

        return new Response($formatted);
    }


    public function getlistFormationAction()
    {

        $offre = $this->getDoctrine()->getRepository(Formation::class)->findAll();

        $normalizer = array(new DateTimeNormalizer("yy-m-d") ,new ObjectNormalizer());
        $normalizer[1]->setCircularReferenceLimit(2);

        $normalizer[1]->setCircularReferenceHandler(function ($object){
            return $object->getId();
        });


        $serializer = new Serializer($normalizer,array(new JsonEncoder()));
        $formatted = $serializer->serialize($offre,'json');

        return new Response($formatted);
    }






    public function addParticipationAction($idChauffeur,$idFormation)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $this->getDoctrine()->getRepository(Chauffeur::class)->find($idChauffeur);
        $client2 = $this->getDoctrine()->getRepository(Formation::class)->find($idFormation);
        $offre = new Participation();

        $offre->setIdChauffeur($client);
        $offre->setIdFormation($client2);

        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }



    public function addPostulationAction($nom,$prenom,$cin,$numPermis,$experience,$tel,$langue,$idClient,$sexe)
    {

        $date = new \DateTime();

        $em = $this->getDoctrine()->getManager();
        $client = $this->getDoctrine()->getRepository(Client::class)->find($idClient);
        $offre = new Postulation();

        $offre->setNom($nom);
        $offre->setPrenom($prenom);
        $offre->setCin($cin);
        $offre->setNumPermis($numPermis);
        $offre->setExperience($experience);
        $offre->setTel($tel);
        $offre->setLangue($langue);
        $offre->setIdClient($client);
        $offre->setSexe($sexe);
        $offre->setDateDemande($date);
        $em->persist($offre);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($offre);

        return new JsonResponse($formatted);
    }





}
