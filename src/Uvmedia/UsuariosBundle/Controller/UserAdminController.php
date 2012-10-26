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
        
        return $this->render('UsuariosBundle:UserAdmin:index.html.twig', array(
            'lista_usuarios' => $lista_usuarios,
            'lista_grupos' => $lista_grupos,
            'lista_aplicaciones' => $lista_aplicaciones,
            'array_lst' => array(
                'tingle' => 'zelda',
                'chozo' => 'metroid',
                'goomba' => 'mario'
            )
        ));
    }
    
    public function newUsuarioAction()
    {
        $usuario = new Usuario();
        $form_usuario = $this->createForm(new UsuarioType, $usuario);
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST')
        {
            $form_usuario->bind($request);

            if($form_usuario->isValid())
            {
//                $usuario->setSalt(uniqid() . rand(0, 10000));
//                $usuario->setContrasenha(md5($usuario->getSalt() . $form_usuario->getData()->getContrasenha()));
                $this->generarContrasenhaUsuario($usuario, $form_usuario->getData()->getContrasenha());
                
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
    
    public function editUsuarioAction($id_usuario)
    {
        $usuario_manager = $this->getDoctrine()->getEntityManager();
        $usuario = $usuario_manager->getRepository('UsuariosBundle:Usuario')->find($id_usuario);
        
        if(!$usuario)
        {
            throw $this->createNotFoundException(sprintf('El usuario con identificador %s no existe', $id_usuario));
        }
        
        $request = $this->getRequest();
        $form_usuario = $this->createForm(new UsuarioType(), $usuario);
        
        if($request->isMethod('POST'))
        {
            $form_usuario->bind($request);
            if($form_usuario->isValid())
            {
//                $usuario->setSalt(uniqid() . rand(0, 10000));
//                $usuario->setContrasenha(md5($usuario->getSalt() . $form_usuario->getData()->getContrasenha()));
                $this->generarContrasenhaUsuario($usuario, $form_usuario->getData()->getContrasenha());
                
                $usuario_manager->persist($usuario);
                $usuario_manager->flush();
                
                return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
            }
        }
        
        return $this->render('UsuariosBundle:UserAdmin:new_user.html.twig', array(
            'form' => $form_usuario->createView(),
            'accion' => 'Modificar Usuario'
        ));
    }
    
    public function deleteUsuarioAction($id_usuario)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('UsuariosBundle:Usuario')->find($id_usuario);

        if (!$entity) 
        {
            throw $this->createNotFoundException('No existe el usuario');
        }
        $em->remove($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
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
    
    protected function generarContrasenhaUsuario(&$usuario, $contrasenha)
    {
        $usuario->setSalt(uniqid() . rand(0, 10000));
        $usuario->setContrasenha(md5($usuario->getSalt() . $contrasenha));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
