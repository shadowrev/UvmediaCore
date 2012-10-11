<?php

namespace Uvmedia\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uvmedia\UsuariosBundle\Entity\Grupo
 */
class Grupo
{
    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Uvmedia\UsuariosBundle\Entity\Aplicacion
     */
    private $aplicacion;

    /**
     * @var Uvmedia\UsuariosBundle\Entity\Usuario
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * Set aplicacion
     *
     * @param Uvmedia\UsuariosBundle\Entity\Aplicacion $aplicacion
     */
    public function setAplicacion(\Uvmedia\UsuariosBundle\Entity\Aplicacion $aplicacion)
    {
        $this->aplicacion = $aplicacion;
    }

    /**
     * Get aplicacion
     *
     * @return Uvmedia\UsuariosBundle\Entity\Aplicacion 
     */
    public function getAplicacion()
    {
        return $this->aplicacion;
    }

    /**
     * Add usuarios
     *
     * @param Uvmedia\UsuariosBundle\Entity\Usuario $usuarios
     */
    public function addUsuario(\Uvmedia\UsuariosBundle\Entity\Usuario $usuarios)
    {
        $this->usuarios[] = $usuarios;
    }

    /**
     * Get usuarios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}