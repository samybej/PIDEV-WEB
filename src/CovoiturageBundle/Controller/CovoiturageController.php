<?php

namespace CovoiturageBundle\Controller;

use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Form\OffreType;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CovoiturageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Covoiturage/Covoiturage/index.html.twig');
    }

    public function AjoutAction(Request $request)
    {
        $offre = new Offre();
        $form = $this->createForm(OffreType::class,$offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute("readpage");
        }

        return $this->render('@Covoiturage/Covoiturage/ajout_offre.html.twig',array('form'=>$form->createView()));
    }

    public function ReadAction()
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        return $this->render('@Covoiturage/Covoiturage/liste_offres.html.twig');
    }

    public function ModifierAction(Request $request, $id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $form = $this->createForm(OffreType::class,$offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute("readpage");
        }

        return $this->render('@Covoiturage/Covoiturage/ajout_offre.html.twig',array('form'=>$form->createView()));
    }

    public function SupprimerAction(Request $request, $id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($offre);
        $em->flush();

        $listeOffres = $this->getDoctrine()->getRepository(Offre::class)->findAll();
        return $this->render('@Covoiturage/Covoiturage/liste_offres.html.twig',array("offreliste"=>$offre));
    }


}
