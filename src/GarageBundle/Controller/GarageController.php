<?php


namespace GarageBundle\Controller;


use EntitiesBundle\Entity\Garage;
use EntitiesBundle\Form\GarageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GarageController extends Controller
{
    function addAction(Request $request) {

        $garage =new Garage();

        $form=$this->createForm(GarageType::class, $garage);
        $form->handleRequest($request);
        if ($form ->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($garage);
            $em->flush();
           // return $this->redirectToRoute("vehicule_list");

        }
        return  $this->render('@Garage/Garage/addVtoG.html.twig', array("f"=>$form->createView()));

    }
}