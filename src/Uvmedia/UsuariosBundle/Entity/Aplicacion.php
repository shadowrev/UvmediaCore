<?php

namespace Uvmedia\UsuariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Uvmedia\CoreBundle\Entity\CoreEntity;

/**
 * Uvmedia\UsuariosBundle\Entity\Aplicacion
 */
class Aplicacion extends CoreEntity
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
     * @var Uvmedia\UsuariosBundle\Entity\Grupo
     */
    private $grupos;

    public function __construct()
    {
        $this->grupos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->nombre;
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
}