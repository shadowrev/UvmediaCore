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

class UserLoginController extends Controller 
{
    public function loginAction()
    {
        $form_login = $this->createFormBuilder()
                ->add('login', 'text')
                ->add('contrasenha', 'password')
                ->getForm();
        
        return $this->render('UsuariosBundle:UserLogin:login.html.twig', array(
            'form' => $form_login->createView()
        ));
    }
    
    public function logoutAction()
    {
        
    }
}
