<?php

namespace Uvmedia\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uvmedia\MenuBundle\Entity\MenuItem
 */
class MenuItem
{
    /**
     * @var string $mei_nombre
     */
    private $mei_nombre;

    /**
     * @var string $mei_enlace
     */
    private $mei_enlace;

    /**
     * @var string $mei_group_id
     */
    private $mei_group_id;

    /**
     * @var integer $mei_id
     */
    private $mei_id;

    /**
     * @var Uvmedia\MenuBundle\Entity\MenuItem
     */
    private $mei_children;

    /**
     * @var Uvmedia\MenuBundle\Entity\MenuItem
     */
    private $mei_parent;

    public function __construct()
    {
        $this->mei_children = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set mei_nombre
     *
     * @param string $meiNombre
     */
    public function setMeiNombre($meiNombre)
    {
        $this->mei_nombre = $meiNombre;
    }

    /**
     * Get mei_nombre
     *
     * @return string 
     */
    public function getMeiNombre()
    {
        return $this->mei_nombre;
    }

    /**
     * Set mei_enlace
     *
     * @param string $meiEnlace
     */
    public function setMeiEnlace($meiEnlace)
    {
        $this->mei_enlace = $meiEnlace;
    }

    /**
     * Get mei_enlace
     *
     * @return string 
     */
    public function getMeiEnlace()
    {
        return $this->mei_enlace;
    }

    /**
     * Set mei_group_id
     *
     * @param string $meiGroupId
     */
    public function setMeiGroupId($meiGroupId)
    {
        $this->mei_group_id = $meiGroupId;
    }

    /**
     * Get mei_group_id
     *
     * @return string 
     */
    public function getMeiGroupId()
    {
        return $this->mei_group_id;
    }

    /**
     * Get mei_id
     *
     * @return integer 
     */
    public function getMeiId()
    {
        return $this->mei_id;
    }

    /**
     * Add mei_children
     *
     * @param Uvmedia\MenuBundle\Entity\MenuItem $meiChildren
     */
    public function addMenuItem(\Uvmedia\MenuBundle\Entity\MenuItem $meiChildren)
    {
        $this->mei_children[] = $meiChildren;
    }

    /**
     * Get mei_children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMeiChildren()
    {
        return $this->mei_children;
    }

    /**
     * Set mei_parent
     *
     * @param Uvmedia\MenuBundle\Entity\MenuItem $meiParent
     */
    public function setMeiParent(\Uvmedia\MenuBundle\Entity\MenuItem $meiParent)
    {
        $this->mei_parent = $meiParent;
    }

    /**
     * Get mei_parent
     *
     * @return Uvmedia\MenuBundle\Entity\MenuItem 
     */
    public function getMeiParent()
    {
        return $this->mei_parent;
    }
    
    /**
     * Mascaras para la generación de plantillas en CRUD
     */
    
    /**
     * Set id
     * @return integer
     */
    public function getId()
    {
        return $this->getMeiId();
    }
    
    /**
     * Magic method __toString 
     */
    
    public function __toString()
    {
        return $this->getMeiNombre();
    }
}