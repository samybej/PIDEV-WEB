<?php

namespace InscriptionsCovoiturageBundle\Controller;

use Doctrine\DBAL\Types\TextType;
use EntitiesBundle\Entity\InscriOffre;
use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Client;
use EntitiesBundle\Form\OffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class InscriptionsCovoiturageController extends Controller
{
    public function RechercherAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('depart', \Symfony\Component\Form\Extension\Core\Type\TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Lieu de depart',
                )))
            ->add('arrive', \Symfony\Component\Form\Extension\Core\Type\TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Lieu d arrivee',
                )))
            ->add('date', DateType::class , ['widget' => 'single_text',  'html5' => false, 'format' => 'MM/dd/yyyy',])
            ->add('rechercher',SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $dateInit = $form->get('date')->getData();
            $dateString = $dateInit->format('Y-m-d');
            $newDate = date("Y-m-d", strtotime($dateString));
            $departLower = strtolower($form->get('depart')->getData());
            $arriveLower = strtolower($form->get('arrive')->getData());
            return $this->redirectToRoute("inscriptions_covoiturage_resultat",array('departLower'=>$departLower, 'arriveLower'=>$arriveLower, 'newDate' =>$newDate));


        }

        return $this->render('@InscriptionsCovoiturage/InscriptionsCovoiturage/rechercherCovoiturage.html.twig',array('form'=>$form->createView()));
    }
    public function ResultatAction(Request $request,$departLower,$arriveLower,$newDate)
    {
        $resultatRecherche=$this->getDoctrine()->getManager()->getRepository(Offre::class)->rechercherCovoiturage($departLower,$arriveLower,$newDate);
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $resultatRecherche,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );
        return $this->render('@InscriptionsCovoiturage/InscriptionsCovoiturage/resultatRecherche.html.twig',array("ListeRecherche"=>$result));
    }

    public function AjoutAction(Request $request,Offre $id_offre,Client $id_conducteur)
    {
        $utilisateur = $this->getUser();


        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

        $inscriptionCovoiturage = new InscriOffre($client[0],$id_offre,$id_conducteur);
        $offres = $this->getDoctrine()->getRepository(Offre::class)->CheckOffre($client[0],$id_offre->getDate());
        $inscriptions = $this->getDoctrine()->getRepository(Offre::class)->CheckInscription($client[0],$id_offre->getDate());
        //var_dump($offres);
        //var_dump($inscriptions);
        $doubleInscri = $this->getDoctrine()->getRepository(Offre::class)->CheckDoubleIncri($client[0],$id_offre);
        var_dump($doubleInscri);
        if ($doubleInscri != 0 && $doubleInscri != -1)
        {
            var_dump($doubleInscri);

            return $this->render('@Covoiturage/Covoiturage/erreur_ajout.html.twig');
        }

        foreach ($offres as $offre1)
        {

            $time = \DateTime::createFromFormat('H:i',$offre1->getTime());
            $time2 = $id_offre->getTime();
            $time2_act = \DateTime::createFromFormat('H:i',$time2);
           // $time_actuel = new \DateTime();
            $interval3 = $time->diff($time2_act);
            if ($interval3->h < 4)
            {
                return $this->render('@Covoiturage/Covoiturage/erreur_ajout.html.twig');
            }
        }
        foreach ($inscriptions as $inscription1)
        {
            $time = \DateTime::createFromFormat('H:i',$offre1->getTime());
            $time2 = $id_offre->getTime();
            $time2_act = \DateTime::createFromFormat('H:i',$time2);
          //  $time_actuel = new \DateTime();
            $interval3 = $time->diff($time2_act);
            if ($interval3->h < 4)
            {
                return $this->render('@Covoiturage/Covoiturage/erreur_ajout.html.twig');
            }
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($inscriptionCovoiturage);
        $em->flush();
       /* $form = $this->createForm(::class ,$inscriptionCovoiturage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($inscriptionCovoiturage);
            $em->flush();
            return $this->redirectToRoute("readpage");
        }*/
        return $this->redirectToRoute('inscriptions_covoiturage_mesinscriptions');
    }

    public function ListInscriptionsAction(Request $request)
    {
        $utilisateur = $this->getUser();


        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

        $resultatRecherche = $this->getDoctrine()->getManager()->getRepository(InscriOffre::class)->findByIdClient($client[0]);
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $resultatRecherche,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 4)
        );
        return $this->render('@InscriptionsCovoiturage/InscriptionsCovoiturage/mesInscriptions.html.twig',array("mesInscriptions"=>$result));
    }


    public function SupprimerAction(Request $request, $id)
    {
        $inscriptionCovoiturage = $this->getDoctrine()->getRepository(InscriOffre::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($inscriptionCovoiturage);
        $em->flush();


        return $this->redirectToRoute('inscriptions_covoiturage_homepage');
    }

    public function DetailsAction($id)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);

        return $this->render('@InscriptionsCovoiturage/InscriptionsCovoiturage/details.html.twig',array("offre"=>$offre));
    }
}