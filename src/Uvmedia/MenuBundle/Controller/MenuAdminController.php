<?php
/**
 * Clase MenuAdminController
 *
 * @author uvmedia
 */

namespace Uvmedia\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uvmedia\MenuBundle\Entity\MenuItem;
use Uvmedia\MenuBundle\Form\MenuItemType;

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
        $nuevo_menu = new MenuItem();
        $form_nuevo_menu = $this->createForm(new MenuItemType(), $nuevo_menu);
        
        return $this->render('MenuBundle:MenuAdmin:new.html.twig', array(
            'nuevo_menu' => $nuevo_menu,
            'form' => $form_nuevo_menu->createView()
        ));
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

