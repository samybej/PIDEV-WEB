<?php


namespace ReclamationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use EntitiesBundle\Entity\Reclamation;
use EntitiesBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EntitiesBundle\Entity\Client;


class ReclamationController extends Controller
{
    function addAction(Request  $request) {

        $reclamation=new Reclamation();
        $utilisateur = $this->getUser();
        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);
        $reclamation->setIdClient($client[0]);

        $form=$this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form -> isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em-> persist($reclamation);
            $em-> flush();
            //return $this->redirectToRoute("club_list1");

        }
        return  $this->render('@Reclamation/Reclamation/add.html.twig', array("f"=>$form->createView()));

    }
    function listAction() {
        $reclamation=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('@Reclamation/Reclamation/list.html.twig', array('list'=>$reclamation));

    }

    public function updateAction(Request $request, $id)
    {
        $reclamation  = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);

        $form = $this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute("reclamation_list");
        }

        return $this->render('@Reclamation/Reclamation/update.html.twig',array('f'=>$form->createView()));
    }

    public function deleteAction(Request $request, $id)
    {
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();

        $listeReclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('@Reclamation/Reclamation/list.html.twig',array("list"=>$listeReclamation));
    }



}