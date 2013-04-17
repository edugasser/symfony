<?php

namespace Gestor\PersonaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 */
class Persona
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $paisOrigen;

    /**
     * @var string
     */
    private $poblacionActual;

    /**
     * @var string
     */
    private $dni;


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
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
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
     * Set apellido
     *
     * @param string $apellido
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Persona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set paisOrigen
     *
     * @param string $paisOrigen
     * @return Persona
     */
    public function setPaisOrigen($paisOrigen)
    {
        $this->paisOrigen = $paisOrigen;
    
        return $this;
    }

    /**
     * Get paisOrigen
     *
     * @return string 
     */
    public function getPaisOrigen()
    {
        return $this->paisOrigen;
    }

    /**
     * Set poblacionActual
     *
     * @param string $poblacionActual
     * @return Persona
     */
    public function setPoblacionActual($poblacionActual)
    {
        $this->poblacionActual = $poblacionActual;
    
        return $this;
    }

    /**
     * Get poblacionActual
     *
     * @return string 
     */
    public function getPoblacionActual()
    {
        return $this->poblacionActual;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Persona
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    
        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }
}
