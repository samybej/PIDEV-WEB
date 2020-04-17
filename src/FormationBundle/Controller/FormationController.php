<?php

namespace FormationBundle\Controller;

use EntitiesBundle\Entity\Formation;
use EntitiesBundle\Form\FormationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FormationController extends Controller
{

    function listFormationAction()
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->recupererCovoiturage();
        return $this->render('@Formation/Formation/list.html.twig', array('list' => $formation));

    }





    function addAction(Request  $request) {

        $formation=new Formation();

        $form=$this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form -> isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em-> persist($formation);
            $em-> flush();
            //return $this->redirectToRoute("club_list1");

        }
        return  $this->render('@Formation/Formation/add.html.twig', array("f"=>$form->createView()));

    }





    public function updateAction(Request $request, $id)
    {
        $formation  = $this->getDoctrine()->getRepository(Formation::class)->find($id);
        $form = $this->createForm(FormationType::class,$formation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            return $this-redirectToRoute("formation_list");
        }

        return $this->render('@Formation/Formation/update.html.twig',array('f'=>$form->createView()));
    }








    public function deleteAction(Request $request, $id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($formation);
        $em->flush();

        $listeformation = $this->getDoctrine()->getRepository(formation::class)->findAll();
        return $this->render('@Formation/Formation/list.html.twig',array("list"=>$listeformation));
    }



    function listFormation1Action() {
        $formation=$this->getDoctrine()->getRepository(Formation::class)->recupererCovoiturage();
        return $this->render('@Formation/FormationFront/listFormation.html.twig', array('list'=>$formation));

    }





}
