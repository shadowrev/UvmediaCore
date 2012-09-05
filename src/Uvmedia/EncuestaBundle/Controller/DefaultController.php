<?php

namespace Uvmedia\EncuestaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EncuestaBundle:Default:index.html.twig', array('name' => $name));
    }
}
