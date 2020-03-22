<?php

namespace CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CovoiturageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Covoiturage/Covoiturage/index.html.twig');
    }


}
