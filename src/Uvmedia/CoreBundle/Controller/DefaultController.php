<?php

namespace Uvmedia\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uvmedia\MenuBundle\Entity\MenuItem;

class DefaultController extends Controller
{
    
    public function indexAction($name = null)
    {
        return $this->render('UvmediaCoreBundle:Default:index.html.twig', array(
            'name' => $name, 
            'titulo' => 'Aqui va el titulo', 
            'menu' => $this->getMenuItems(),
            'contenido' => 'Aqui están mis nueces'));
    }
    
    protected function getMenuItems()
    {
        $controlador_menues = $this->getDoctrine()->getEntityManager();
        $lista_menues = $controlador_menues->getRepository('MenuBundle:MenuItem')->findAll();
        
        return $lista_menues;
    }
}
