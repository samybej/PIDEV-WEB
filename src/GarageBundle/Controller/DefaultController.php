<?php

namespace GarageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GarageBundle:Default:index.html.twig');
    }
}
