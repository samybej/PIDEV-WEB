<?php


namespace VehiculeBundle\Controller;
use EntitiesBundle\Entity\Vehicule;
use EntitiesBundle\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class VehiculeController extends Controller
{
    function addAction(Request  $request) {

        $vehicule=new Vehicule();

        $form=$this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        if ($form -> isSubmitted()) {
            $em=$this->getDoctrine()->getManager();
            $em-> persist($vehicule);
            $em-> flush();
            //return $this->redirectToRoute("club_list1");

        }
        return  $this->render('@Vehicule/Vehicule/add.html.twig', array("f"=>$form->createView()));

    }

    function listVehiculeAction() {
        $vehicule=$this->getDoctrine()->getRepository(Vehicule::class)->findAll();
        return $this->render('@Vehicule/Vehicule/list.html.twig', array('list'=>$vehicule));

    }

}