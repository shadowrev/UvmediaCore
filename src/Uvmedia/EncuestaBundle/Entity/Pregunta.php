<?php

namespace Uvmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Uvmedia\EncuestaBundle\Entity\Pregunta
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pregunta
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
     * @var string $tipo_pregunta
     *
     * @ORM\Column(name="tipo_pregunta", type="string", length=255)
     */
    private $tipo_pregunta;
    
    /**
     * @var ArrayCollection $respuestas
     * 
     * @ORM\ManyToMany(targetEntity="Respuesta")
     */
    private $respuestas;
    
    /**
     * Constructor
     */    
    public function __construct()
    {
        $this->respuestas = new ArrayCollection();
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
     * Set tipo_pregunta
     *
     * @param string $tipoPregunta
     */
    public function setTipoPregunta($tipoPregunta)
    {
        $this->tipo_pregunta = $tipoPregunta;
    }

    /**
     * Get tipo_pregunta
     *
     * @return string 
     */
    public function getTipoPregunta()
    {
        return $this->tipo_pregunta;
    }
    
    /**
     * Get respuestas
     * @return type 
     */
    public function getRespuestas()
    {
        return $this->respuestas;
    }
    
    /**
     * Add respuesta
     *
     * @param Uvmedia\MenuBundle\Entity\MenuItem $respuesta
     */
    public function addMenuItem(\Uvmedia\EncuestaBundle\Entity\Respuesta $respuesta) {
        $this->respuestas[] = $respuesta;
    }
}