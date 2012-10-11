<?php
/**
 * Clase UserAdminController
 *
 * @author uvmedia
 */
namespace Uvmedia\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uvmedia\UsuariosBundle\Entity\Usuario;
use Uvmedia\UsuariosBundle\Entity\Aplicacion;
use Uvmedia\UsuariosBundle\Entity\Grupo;

class UserAdminController extends Controller 
{
    public function indexAction()
    {
        $controlador_bd = $this->getDoctrine()->getEntityManager();
        $lista_usuarios = $controlador_bd->getRepository('UsuariosBundle:Usuario')->findAll();
        $lista_grupos = $controlador_bd->getRepository('UsuariosBundle:Grupo')->findAll();
        $lista_aplicaciones = $controlador_bd->getRepository('UsuariosBundle:Aplicacion')->findAll();
        
        return $this->render('UsuariosBundle:UserAdmin:index.html.twig', array(
            'lista_usuarios' => $lista_usuarios,
            'lista_grupos' => $lista_grupos,
            'lista_aplicaciones' => $lista_aplicaciones
        ));
    }
    
    public function newUsuarioAction()
    {
        
    }
    
    public function editUsuarioAction()
    {
        
    }
    
    public function deleteUsuarioAction()
    {
        
    }
    
    public function newGrupoAction()
    {
        
    }
    
    public function editGrupoAction()
    {
        
    }
    
    public function deleteGrupoAction()
    {
        
    }
}