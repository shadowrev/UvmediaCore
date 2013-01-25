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
use Uvmedia\UsuariosBundle\Form\GrupoType;
use Uvmedia\UsuariosBundle\Form\AplicacionType;
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
        $eliminacion_confirmada = $this->deleteEntity($id_usuario, 'UsuariosBundle:Usuario');

        if (!$eliminacion_confirmada) 
        {
            throw $this->createNotFoundException('No existe el usuario');
        }
        
        return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
    }
    
    public function newGrupoAction()
    {
        $grupo = new Grupo();
        $form_grupo = $this->createForm(new GrupoType, $grupo);
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST')
        {
            $form_grupo->bind($request);

            if($form_grupo->isValid())
            {
                $grupo_manager = $this->getDoctrine()->getEntityManager();
                $grupo_manager->persist($grupo);
                $grupo_manager->flush();
                
                return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
            }
        }
        
        return $this->render('UsuariosBundle:UserAdmin:new_group.html.twig', array(
            'form' => $form_grupo->createView(),
            'accion' => 'Ingresar Nuevo Grupo'
        ));
    }
    
    public function editGrupoAction($id_grupo)
    {
        $grupo_entmanager = $this->getDoctrine()->getEntityManager();
        $grupo = $grupo_entmanager->getRepository('UsuariosBundle:Grupo')->find($id_grupo);
        
        if(!$grupo)
        {
            throw $this->createNotFoundException(sprintf('El grupo con identificador %s no existe', $id_grupo));
        }
        
        $request = $this->getRequest();
        $form_grupo = $this->createForm(new GrupoType(), $grupo);
        
        if($request->isMethod('POST'))
        {
            $form_grupo->bind($request);
            if($form_grupo->isValid())
            {
                $grupo_entmanager->persist($grupo);
                $grupo_entmanager->flush();
                
                return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
            }
        }
        
        return $this->render('UsuariosBundle:UserAdmin:new_group.html.twig', array(
            'form' => $form_grupo ->createView(),
            'accion' => 'Modificar Grupo'
        ));
    }
    
    public function deleteGrupoAction($id_grupo)
    {
        $confirmacion_eliminado = $this->deleteEntity($id_grupo, 'UsuariosBundle:Grupo');

        if (!$confirmacion_eliminado)
        {
            throw $this->createNotFoundException('No existe el grupo');
        }

        return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
    }
    
    public function newAplicacionAction()
    {
        $aplicacion = new Aplicacion();
        $form_aplicacion = $this->createForm(new AplicacionType, $aplicacion);
        $request = $this->getRequest();
        
        if($request->getMethod() == 'POST')
        {
            $form_aplicacion->bind($request);

            if($form_aplicacion->isValid())
            {
                $aplicacion_manager = $this->getDoctrine()->getEntityManager();
                $aplicacion_manager->persist($aplicacion);
                $aplicacion_manager->flush();
                
                return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
            }
        }
        
        return $this->render('UsuariosBundle:UserAdmin:new_app.html.twig', array(
            'form' => $form_aplicacion->createView(),
            'accion' => 'Ingresar Nueva Aplicación'
        ));
    }
    
    public function editAplicacionAction()
    {
        
    }
    
    public function deleteAplicacionAction($id_aplicacion)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $borrado_confirmado = $this->deleteEntity($id_aplicacion, 'UsuariosBundle:Aplicacion');

        if (!$borrado_confirmado) 
        {
            throw $this->createNotFoundException('No existe la aplicación');
        }

        return $this->redirect($this->generateUrl('UsuariosBundle_homepage'));
    }
    
    /**
     * Genera el hash de la contraseña para el nuevo usuario.
     * @param type $usuario Entidad de clase Usuario. Parametro pasado por referencia
     * @param type $contrasenha La contraseña a la que se va a generar el hash
     */
    protected function generarContrasenhaUsuario(&$usuario, $contrasenha)
    {
        $usuario->setSalt(uniqid() . rand(0, 10000));
        $usuario->setContrasenha(md5($usuario->getSalt() . $contrasenha));
    }
    
    /**
     * Elimina un objeto de la base de datos
     * @param type $id_entity Identificador de la entidad
     * @param type $entity_name Nombre de la clase de la entidad, en la forma nombrebundle:entidad
     * @return boolean true si la entidad existe, false si no existe.
     */
    private function deleteEntity($id_entity, $entity_name)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository($entity_name)->find($id_entity);

        if (!$entity) 
        {
            return false;
        }
        
        $em->remove($entity);
        $em->flush();
        return true;
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
