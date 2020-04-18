<?php

namespace FormationBundle\Controller;

use EntitiesBundle\Entity\Postulation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostulationController extends Controller
{
    function listPostulationAction() {
        $Postulation=$this->getDoctrine()->getRepository(Postulation::class)->findAll();
        return $this->render('@Formation/Default/Postulation/listPostulation.html.twig', array('list'=>$Postulation));
    }


}
