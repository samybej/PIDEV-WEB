<?php

namespace ApiBundle\Controller;

use EntitiesBundle\Entity\Chauffeur;
use EntitiesBundle\Entity\Client;
use EntitiesBundle\Entity\Note;
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

class ApiNoteController extends Controller
{
    public function addNoteAction($note,$idClient,$idChauffeur)
    {
        $em = $this->getDoctrine()->getManager();

        $client = $this->getDoctrine()->getRepository(Client::class)->find($idClient);
        $chauffeur = $this->getDoctrine()->getRepository(Chauffeur::class)->find($idChauffeur);

        $type = new Note();
        $type->setNote($note);
        $type->setIdClient($client);
        $type->setIdChauffeur($chauffeur);


        $em->persist($type);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($type);

        return new JsonResponse($formatted);
    }
}