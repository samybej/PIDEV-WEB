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
            $immatriculation = $form->get('vehicule')->getData();
            var_dump($immatriculation);
            $vehicule = $this->getDoctrine()->getRepository(Garage::class)->getVehiculeGarage($immatriculation-> getImmatriculation());
           var_dump($vehicule);
            $vehicule[0]->setEtat(0);
            $em=$this->getDoctrine()->getManager();
            $em->persist($garage);
            $em->flush();
            return $this->redirectToRoute("vehicule_list");

        }
        return  $this->render('@Garage/Garage/addVtoG.html.twig', array("f"=>$form->createView()));

    }
}