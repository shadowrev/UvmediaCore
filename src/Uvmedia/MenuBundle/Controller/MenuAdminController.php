<?php
/**
 * Clase MenuAdminController
 *
 * @author uvmedia
 */

namespace Uvmedia\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuAdminController extends Controller
{
    public function indexAction()
    {
        $ent_manager = $this->getDoctrine()->getEntityManager();
        $menues = $ent_manager->getRepository('MenuBundle:MenuItem')->findAll();
        
        return $this->render('MenuBundle:MenuAdmin:index.html.twig', array(
            'lista_menues' => $menues
        ));
    }
    
    public function newAction()
    {
        
    }
    
    public function createAction()
    {
        
    }
    
    public function editAction()
    {
        
    }
    
    public function updateAction()
    {
        
    }
    
    public function removeAction()
    {
        
    }
}

