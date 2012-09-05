<?php

namespace Uvmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Uvmedia\EncuestaBundle\Entity\Respuesta
 * 
 * @ORM\Table()
 * @ORM\Entity
 */
class Respuesta
{
    /**
     * @var integer $id
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     * 
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $valor
     * 
     * @ORM\Column(name="valor", type="string", length=255)
     */
    private $valor;
    
    /**
     * @var ArrayCollection pregunta 
     * 
     * @ORM\ManyToMany(targetEntity="Pregunta")
     */
    private $preguntas;
    
    public function __construct()
    {
        $this->preguntas = new ArrayCollection();
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
     * Set valor
     *
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }
}