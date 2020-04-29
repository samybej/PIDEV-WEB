<?php

namespace ApiBundle\Controller;


use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiTypeController extends Controller
{
    public function addTypeAction($vitesse,$nbrArrets,$tmpArret,$idOffre)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($idOffre);

        $type = new Type();
        $type->setVitesse($vitesse);
        $type->setNbrArrets($nbrArrets);
        $type->setTmpArret($tmpArret);
        $type->setIdOffre($offre);

        $em = $this->getDoctrine()->getManager();

        $em->persist($type);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($type);

        return new JsonResponse($formatted);
    }
}