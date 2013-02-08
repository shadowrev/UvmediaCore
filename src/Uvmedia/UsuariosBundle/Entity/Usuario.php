<?php

namespace Uvmedia\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * Uvmedia\UsuariosBundle\Entity\Usuario
 */
class Usuario implements UserInterface, EquatableInterface
{
    /**
     * @var string $login
     */
    private $login;

    /**
     * @var string $nombres
     */
    private $nombres;

    /**
     * @var string $apellidos
     */
    private $apellidos;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $contrasenha
     */
    private $contrasenha;

    /**
     * @var string $salt
     */
    private $salt;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Uvmedia\UsuariosBundle\Entity\Grupo
     */
    private $grupos;

    public function __construct()
    {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->nombres;
    }
    
    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contrasenha
     *
     * @param string $contrasenha
     */
    public function setContrasenha($contrasenha)
    {
        $this->contrasenha = $contrasenha;
    }

    /**
     * Get contrasenha
     *
     * @return string 
     */
    public function getContrasenha()
    {
        return $this->contrasenha;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add grupos
     *
     * @param Uvmedia\UsuariosBundle\Entity\Grupo $grupos
     */
    public function addGrupo(\Uvmedia\UsuariosBundle\Entity\Grupo $grupos)
    {
        $this->grupos[] = $grupos;
    }

    /**
     * Get grupos
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGrupos()
    {
        return $this->grupos;
    }

    public function eraseCredentials() {
        
    }

    /**
     * Funciones especificas para usar como entorno seguro
     */
    public function getPassword() {
        return $this->getContrasenha();
    }

    public function getRoles() {
        return $this->getGrupos();
    }

    public function getUsername() {
        return $this->getLogin();
    }
    
    public function isEqualTo(UserInterface $user)
    {
        return $this->id === $user->getId();
    }
}