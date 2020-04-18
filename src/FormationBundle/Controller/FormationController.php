<?php

namespace FormationBundle\Controller;

use EntitiesBundle\Entity\Formation;
use EntitiesBundle\Entity\Theemes;
use EntitiesBundle\Form\FormationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
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


    function addAction(Request $request)
    {

        $formation = new Formation();

        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            //return $this->redirectToRoute("club_list1");

        }
        return $this->render('@Formation/Formation/add.html.twig', array("f" => $form->createView()));

    }


    public function updateAction(Request $request, $id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($id);
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formation);
            $em->flush();
            return $this - redirectToRoute("formation_list");
        }

        return $this->render('@Formation/Formation/update.html.twig', array('f' => $form->createView()));
    }


    public function deleteAction(Request $request, $id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($formation);
        $em->flush();

        $listeformation = $this->getDoctrine()->getRepository(formation::class)->findAll();
        return $this->render('@Formation/Formation/list.html.twig', array("list" => $listeformation));
    }


    function listFormation1Action(Request $request, $id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->participantparFormation($id);
        return $this->render('@Formation/Formation/ParticipantsFormation.html.twig', array('list' => $formation));

    }

    public function pdfAction($id)
    {
        $Evenement = $this->getDoctrine()->getManager()->getRepository(Formation::class)->participantparFormation($id);
        $html = $this->renderView('@Formation/Formation/pdf.html.twig', array('Evenement' =>
            $Evenement));

        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'file.pdf'
        );

    }
}
