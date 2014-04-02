<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table(name="jugador")
 * @ORM\Entity
 */
class Jugador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="personaje", type="string", length=30, nullable=false)
     */
    private $personaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="dinero", type="integer", nullable=false)
     */
    private $dinero;

    /**
     * @var integer
     *
     * @ORM\Column(name="casilla_actual", type="integer", nullable=false)
     */
    private $casillaActual;



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
     * @return Jugador
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
     * Set personaje
     *
     * @param string $personaje
     * @return Jugador
     */
    public function setPersonaje($personaje)
    {
        $this->personaje = $personaje;

        return $this;
    }

    /**
     * Get personaje
     *
     * @return string 
     */
    public function getPersonaje()
    {
        return $this->personaje;
    }

    /**
     * Set dinero
     *
     * @param integer $dinero
     * @return Jugador
     */
    public function setDinero($dinero)
    {
        $this->dinero = $dinero;

        return $this;
    }

    /**
     * Get dinero
     *
     * @return integer 
     */
    public function getDinero()
    {
        return $this->dinero;
    }

    /**
     * Set casillaActual
     *
     * @param integer $casillaActual
     * @return Jugador
     */
    public function setCasillaActual($casillaActual)
    {
        $this->casillaActual = $casillaActual;

        return $this;
    }

    /**
     * Get casillaActual
     *
     * @return integer 
     */
    public function getCasillaActual()
    {
        return $this->casillaActual;
    }
}
