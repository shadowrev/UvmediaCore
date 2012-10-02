<?php
/**
 * Clase MenuAdminController
 *
 * @author uvmedia
 */

namespace Uvmedia\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uvmedia\MenuBundle\Entity\MenuItem;
use Uvmedia\MenuBundle\Repository\MenuItemRepository;
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
            'titulo' => 'Nuevo Item de Menú',
            'accion' => 'Crear Nuevo Menú',
            'form' => $form_nuevo_menu->createView()
        ));
    }
    
    public function crearAction()
    {
        $menu_nuevo = new MenuItem();
        $request = $this->getRequest();
        $formulario = $this->createForm(new MenuItemType(), $menu_nuevo);
        
        $formulario->bindRequest($request);
        if($formulario->isValid())
        {
            $ent_manager = $this->getDoctrine()->getEntityManager();
            $ent_manager->persist($menu_nuevo);
            $ent_manager->flush();
            
            return $this->redirect($this->generateUrl('MenuBundle_homepage'));
        }
        
        return $this->render('MenuBundle:MenuAdmin:new.html.twig', array(
            'nuevo_menu' => $menu_nuevo,
            'titulo' => 'Nuevo Item de Menú',
            'accion' => 'Crear Nuevo Menú',
            'form' => $formulario->createView()
        ));
    }
    
    public function editarAction($id_menu)
    {
        $ent_manager = $this->getDoctrine()->getEntityManager();
        $menu_editar = $ent_manager->getRepository('MenuBundle:MenuItem')->find($id_menu);
        
        $form_nuevo_menu = $this->createForm(new MenuItemType(), $menu_editar);
        
        return $this->render('MenuBundle:MenuAdmin:new.html.twig', array(
            'nuevo_menu' => $menu_editar,
            'titulo' => 'Nuevo Item de Menú',
            'accion' => 'Crear Nuevo Menú',
            'form' => $form_nuevo_menu->createView()
        ));
    }
    
    public function modificarAction()
    {
        
    }
    
    public function removeAction()
    {
        
    }
}

