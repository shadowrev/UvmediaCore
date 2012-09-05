<?php

namespace Uvmedia\EncuestaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PreguntaController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EncuestaBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function randomAction()
    {
        $value = rand(1, 20);
        return $this->render('EncuestaBundle:Pregunta:random.html.twig', array('pregunta' => $value));
    }
}
