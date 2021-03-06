<?php
/**
 * Clase UserAdminController
 *
 * @author uvmedia
 */
namespace Uvmedia\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Uvmedia\UsuariosBundle\Entity\Usuario;
use Uvmedia\UsuariosBundle\Form\UsuarioType;
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
        
        var_dump($lista_usuarios[0]->getGrupos());
        
        return $this->render('UsuariosBundle:UserAdmin:index.html.twig', array(
            'lista_usuarios' => $lista_usuarios,
            'lista_grupos' => $lista_grupos,
            'lista_aplicaciones' => $lista_aplicaciones
        ));
    }
    
    public function newUsuarioAction(Request $request)
    {
        $usuario = new Usuario();
        $form_usuario = $this->createForm(new UsuarioType, $usuario);
        
        if($request->getMethod() == 'POST')
        {
            $form_usuario->bindRequest($request);

            if($form_usuario->isValid())
            {
                $usuario->setSalt(uniqid() . rand(0, 10000));
                $usuario->setContrasenha(md5($usuario->getSalt() . $form_usuario->getData()->getContrasenha()));
                
                $usuario_manager = $this->getDoctrine()->getEntityManager();
                $usuario_manager->persist($usuario);
                $usuario_manager->flush();
                
                return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
            }
        }
        
        return $this->render('UsuariosBundle:UserAdmin:new_user.html.twig', array(
            'form' => $form_usuario->createView(),
            'accion' => 'Ingresar Nuevo Usuario'
        ));
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
