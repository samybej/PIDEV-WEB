<?php

namespace TypeBundle\Controller;

use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Type;
use EntitiesBundle\Form\TypeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TypeController extends Controller
{
    public function AjoutAction(Request $request,$id)
    {
        $type = new Type();
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $type->setIdOffre($offre);
        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nbrarret = $form->get('nbrArrets')->getData();
            if ($nbrarret == 0)
            {
                $type->setTmpArret(0);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute("covoiturage_liste");
        }
        return $this->render('@Type/Type/ajout_type.html.twig',array('form'=>$form->createView()));
    }

    public function ModifierAction(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $type = $this->getDoctrine()->getRepository(Type::class)->findOneByIdOffre($id);
        $form = $this->createForm(TypeType::class,$type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();
            return $this->redirectToRoute("covoiturage_liste");
        }

        return $this->render('@Type/Type/modifier_type.html.twig',array('form'=>$form->createView()));
    }
}
