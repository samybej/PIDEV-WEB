<?php

namespace FormationBundle\Controller;

use EntitiesBundle\Entity\Theemes;
use EntitiesBundle\Form\TheemesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TheemesController extends Controller
{
    function listFormationAction() {
        $theemes=$this->getDoctrine()->getRepository(Theemes::class)->findAll();
        return $this->render('@Formation/Formation/listthemes.html.twig', array('list'=>$theemes));

    }




    function addAction(Request  $request) {

        $theemes=new Theemes();

        $form=$this->createForm(TheemesType::class, $theemes);
        $form->handleRequest($request);
        if ($form -> isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em-> persist($theemes);
            $em-> flush();
            //return $this->redirectToRoute("club_list1");

        }
        return  $this->render('@Formation/Formation/addtheemes.html.twig', array("f"=>$form->createView()));

    }





    public function updateAction(Request $request, $id)
    {
        $theemes  = $this->getDoctrine()->getRepository(Theemes::class)->find($id);
        $form = $this->createForm(TheemesType::class,$theemes);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($theemes);
            $em->flush();
            return $this->redirectToRoute("theemes_list");
        }

        return $this->render('@Formation/Formation/updatetheemes.html.twig',array('f'=>$form->createView()));
    }

    public function deleteAction(Request $request, $id)
    {
        $theemes = $this->getDoctrine()->getRepository(Theemes::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($theemes);
        $em->flush();

        $listetheemes = $this->getDoctrine()->getRepository(Theemes::class)->findAll();
        return $this->render('@Formation/Formation/listthemes.html.twig',array("list"=>$listetheemes));
    }




}
