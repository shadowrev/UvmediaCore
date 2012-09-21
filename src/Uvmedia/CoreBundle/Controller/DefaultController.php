<?php

namespace Uvmedia\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name = null)
    {
        return $this->render('UvmediaCoreBundle:Default:index.html.twig', array(
            'name' => $name, 
            'titulo' => 'Aqui va el titulo', 
            'menu' => null,
            'contenido' => 'Aqui están mis nueces'));
    }
}
