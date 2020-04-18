<?php

namespace FormationBundle\Controller;

use EntitiesBundle\Entity\Formation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormationBundle:Default:index.html.twig');
    }





}


