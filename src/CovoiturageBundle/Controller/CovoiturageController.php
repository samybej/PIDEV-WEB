<?php

namespace CovoiturageBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use EntitiesBundle\Entity\Offre;
use EntitiesBundle\Entity\Client;
use EntitiesBundle\Form\OffreType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\Date;

class CovoiturageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Covoiturage/Covoiturage/index.html.twig');
    }

    public function AjoutAction(Request $request)
    {

        $offre = new Offre();
        $utilisateur = $this->getUser();


        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);


        $offre->setIdOffreur($client[0]);
        $offre->setIdClient($client[0]);

        $form = $this->createForm(OffreType::class,$offre);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {

            $offres = $this->getDoctrine()->getRepository(Offre::class)->CheckOffre($client[0],$form->get('date')->getData());
            $inscriptions = $this->getDoctrine()->getRepository(Offre::class)->CheckInscription($client[0],$form->get('date')->getData());

            foreach ($offres as $offre1)
            {
                $time = \DateTime::createFromFormat('H:i',$offre1->getTime());
                $time_actuel = new \DateTime();
                $time_form = $form->get('time')->getData();
                $time2 = \DateTime::createFromFormat('H:i',$time_form);
                $interval = $time->diff($time_actuel);
                $interval2 = $time2->diff($time_actuel);
                $interval3 = $time->diff($time2);
                if (   $interval3->h < 4 && $interval3->d == 0)
                {
                    return $this->render('@Covoiturage/Covoiturage/erreur_ajout.html.twig');
                }

            }
            foreach ($inscriptions as $inscription1)
            {
                $time = \DateTime::createFromFormat('H:i',$inscription1->getIdOffre()->getTime());
                $time_actuel = new \DateTime();
                $time_form = $form->get('time')->getData();
                $time2 = \DateTime::createFromFormat('H:i',$time_form);
                $interval = $time->diff($time_actuel);
                $interval3 = $time->diff($time2);
                if ($interval3->h < 4 && $interval3->d == 0)
                {
                    return $this->render('@Covoiturage/Covoiturage/erreur_ajout.html.twig');
                }
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($offre);
            $em->flush();

            return $this->redirectToRoute("type_ajout",array('id'=>$offre->getId()));
        }

        return $this->render('@Covoiturage/Covoiturage/ajout_offre.html.twig',array('form'=>$form->createView()));
    }

    public function ReadAction(Request $request)
    {
        $utilisateur = $this->getUser();


        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

        $offre = $this->getDoctrine()->getRepository(Offre::class)->recupererCovoiturage($client[0]);

        $paginator  = $this->get('knp_paginator');
       $result = $paginator->paginate(
            $offre,
           $request->query->getInt('page', 1),
           $request->query->getInt('limit', 6)
        );
        return $this->render('@Covoiturage/Covoiturage/liste_offre.html.twig',array("offreList"=>$result));
    }

    public function ModifierAction(Request $request, $offree,$i)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($offree);

        $form = $this->createForm(OffreType::class,$offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($offre);
            $em->flush();
            return $this->redirectToRoute("type_modifier", array('id' => $offre->getId()));
        }

        return $this->render('@Covoiturage/Covoiturage/modifier_offre.html.twig',array('offre' => $offre,'form'=>$form->createView(),'i'=>$i));
    }

    public function SupprimerAction(Request $request, $id,$i)
    {
        $offre = $this->getDoctrine()->getRepository(Offre::class)->find($id);
        $date= $offre->getDate();
        $date_actuelle = new \DateTime();
        $date_actuelle->format('Y-m-d');
        $difference = date_diff($date , $date_actuelle);


        $diff_days = $difference->days;
        $invert = $difference->invert;


        if ($diff_days < 2 and $offre->getNbPlace() < 2 && $i == 0 )
        {
                return $this->render('@Covoiturage/Covoiturage/supprimer_offre.html.twig',array('id'=>$id));
        }

        else
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($offre);
            $em->flush();

            $utilisateur = $this->getUser();


            $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);


            $listeOffres = $this->getDoctrine()->getRepository(Offre::class)->recupererCovoiturage($client[0]);

            $paginator  = $this->get('knp_paginator');
            $result = $paginator->paginate(
                $listeOffres,
                $request->query->getInt('page', 1),
                $request->query->getInt('limit', 6)
            );
        }

        return $this->redirectToRoute('covoiturage_liste');
    }

    public function setAvertissementAction(Request $request,$offree)
    {
        $utilisateur = $this->getUser();
        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

      //  var_dump($client);
        if ($client[0]->getAvertissement() == 0)
        {
            $client[0]->setAvertissement(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client[0]);
            $em->flush();
        }
        else
        {
            $client[0]->setEtatCompte(0);
            $utilisateur->setEnabled(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client[0]);
            $em->flush();
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('fos_user_security_logout');
        }

        $listeOffres = $this->getDoctrine()->getRepository(Offre::class)->recupererCovoiturage($client[0]);

        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listeOffres,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 6)
        );

        return $this->redirectToRoute('covoiturage_modifier',array("offree"=>$offree,"i"=>1));
    }

    public function setAvertissementDeleteAction(Request $request,$id)
    {
        $utilisateur = $this->getUser();
        $client = $this->getDoctrine()->getRepository(Client::class)->getIdClient($utilisateur);

        //  var_dump($client);
        if ($client[0]->getAvertissement() == 0)
        {
            $client[0]->setAvertissement(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client[0]);
            $em->flush();
        }
        else
        {
            $client[0]->setEtatCompte(0);
            $utilisateur->setEnabled(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($client[0]);
            $em->flush();
            $em->persist($utilisateur);
            $em->flush();
            return $this->redirectToRoute('fos_user_security_logout');
        }


        return $this->redirectToRoute('covoiturage_supprimer',array("id"=>$id,"i"=>1));

    }

    public function StatistiquesAction(Request $request)
    {
        $line = new ColumnChart();

        $mois = '04';
        $year = '2020';

        $array[] = [['Nombre du jour', 'type'=>'number'],['Covoiturages','type'=>'number']];
       for ($i=0; $i < 30; $i++)
       {
            $day=$i + 1;
            $date = $year.'-'.$mois.'-'.$day;
           $nbr = $this->getDoctrine()->getRepository(Offre::class)->getStatistiques($date);
           $array[] = [$i,$nbr];
       }
       $line->getData()->setArrayToDataTable($array
       );

        $line->getOptions()->setTitle('Nombre de covoiturages du dernier mois');
        $line->getOptions()->getHAxis()->setTitle("numero du jour");
        $line->getOptions()->setWidth(1550);
        $line->getOptions()->setHeight(1000);
        $line->getOptions()->getVAxis()->setTitle("nombre de covoiturages");
        $line->getOptions()->getTitleTextStyle()->setBold(true);
        $line->getOptions()->getTitleTextStyle()->setFontSize(32);
        $line->getOptions()->getAnnotations()->getTextStyle()->setFontSize(14);
        $line->getOptions()->getHAxis()->getViewWindow()->setMin(0);
        $line->getOptions()->getHAxis()->getViewWindow()->setMax(30);
        $line->getOptions()->getHAxis()->setFormat('#');
        $line->getOptions()->getHAxis()->getGridlines()->setCount(30);
        $line->getOptions()->getLegend()->setPosition('none');

        return $this->render('@Covoiturage/Covoiturage/statistiques_offre.html.twig', array('bar' => $line));
    }


}
