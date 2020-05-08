<?php


namespace ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use EntitiesBundle\Entity\Client;


class ApiLoginController extends Controller
{
    public function listClientAction($id)
    {
        $tasks = $this->getDoctrine()->getManager()
            ->getRepository(Client::class)
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($tasks);
        return new JsonResponse($formatted);
    }

    public function addClientAction($nom, $prenom, $tel, $mail, $mdp, $adresse)
    {
        $em = $this->getDoctrine()->getManager();

        $client = new Client();
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setTel($tel);
        $client->setMail($mail);
        $client->setMdp($mdp);
        $client->setAdresse($adresse);

        $em->persist($client);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($client);
        return new JsonResponse($formatted);
    }

}