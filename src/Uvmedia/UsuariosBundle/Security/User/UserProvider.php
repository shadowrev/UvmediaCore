<?php

namespace Uvmedia\UsuariosBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

/**
 * Clase UserProvider
 *
 * @author uvmedia
 */
class UserProvider implements UserProviderInterface
{
    public function loadUserByUsername($username) 
    {
        // TODO buscar un usuario por login
        if(true) // TODO sustituir true por una condición
        {
            // TODO cargar la información de usuario
            return new WebserviceUser();
        }
        
        throw new UsernameNotFoundException(sprintf('El usuario "%s" no existe en la aplicación', $username));
    }

    public function refreshUser(UserInterface $user) {
        if(!$user instanceof WebserviceUser)
        {
            throw new UnsupportedUserException(sprintf('No se pueden crear instancias de la clase "%s"', get_class($user)));
        }
        
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        
    }
}