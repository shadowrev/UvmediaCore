<?php
/**
 * Clase UserAdminController
 *
 * @author uvmedia
 */
namespace Uvmedia\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Uvmedia\UsuariosBundle\Entity\Usuario;
use Uvmedia\UsuariosBundle\Entity\Aplicacion;
use Uvmedia\UsuariosBundle\Entity\Grupo;

class UserLoginController extends Controller 
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $error = '';
        
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
        {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        $form_login = $this->createFormBuilder()
                ->add('_username', 'text', array('label' => 'Login: '))
                ->add('_password', 'password', array('label' => 'Contraseña: '))
                ->getForm();
        
        return $this->render('UsuariosBundle:UserLogin:login.html.twig', array(
            'form' => $form_login->createView(),
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        ));
    }
    
    public function logoutAction()
    {
        
    }
}
