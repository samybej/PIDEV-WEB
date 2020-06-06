<?php


namespace ApiBundle\Controller;


use FOS\UserBundle\Util\UserManipulator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use EntitiesBundle\Entity\Client;
use UserBundle\Entity\User;


class ApiLoginController extends Controller
{
    public function loginAction($email,$password)
    {
        $client = $this->getDoctrine()->getManager()
            ->getRepository(Client::class)
            ->checkLoginMobile($email,$password);

        $user = $client[0]->getIdFOS();

        $encoder_service = $this->get('security.encoder_factory');
        $encoder = $encoder_service->getEncoder($user);
        $encoded_pass = $encoder->encodePassword($password, $user->getSalt());

        $true = 'NO';
        if ($encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt() ))
        {
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($client[0]->getId());
            return new JsonResponse($formatted);
        }


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($true);
        return new JsonResponse($formatted);
    }
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
        $userManager = new UserManipulator();

        $user = new User();
        $user = $userManager->create($mail,$mdp,$mail,true,false);
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setTel($tel);
        $user->setAdresse($adresse);

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