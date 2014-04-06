<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tierra
 *
 * @ORM\Table(name="tierra", indexes={@ORM\Index(name="id_jugador", columns={"id_jugador"})})
 * @ORM\Entity
 */
class Tierra
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
     * @var integer
     *
     * @ORM\Column(name="casilla", type="integer", nullable=false)
     */
    private $casilla;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=40, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="cabanas", type="integer", nullable=true)
     */
    private $cabanas;

    /**
     * @var integer
     *
     * @ORM\Column(name="castillos", type="integer", nullable=true)
     */
    private $castillos;

    /**
     * @var \Jugador
     *
     * @ORM\ManyToOne(targetEntity="Jugador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jugador", referencedColumnName="id")
     * })
     */
    private $idJugador;



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
     * Set casilla
     *
     * @param integer $casilla
     * @return Tierra
     */
    public function setCasilla($casilla)
    {
        $this->casilla = $casilla;

        return $this;
    }

    /**
     * Get casilla
     *
     * @return integer 
     */
    public function getCasilla()
    {
        return $this->casilla;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tierra
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
     * Set cabanas
     *
     * @param integer $cabanas
     * @return Tierra
     */
    public function setCabanas($cabanas)
    {
        $this->cabanas = $cabanas;

        return $this;
    }

    /**
     * Get cabanas
     *
     * @return integer 
     */
    public function getCabanas()
    {
        return $this->cabanas;
    }

    /**
     * Set castillos
     *
     * @param integer $castillos
     * @return Tierra
     */
    public function setCastillos($castillos)
    {
        $this->castillos = $castillos;

        return $this;
    }

    /**
     * Get castillos
     *
     * @return integer 
     */
    public function getCastillos()
    {
        return $this->castillos;
    }

    /**
     * Set idJugador
     *
     * @param \Acme\TableroBundle\Entity\Jugador $idJugador
     * @return Tierra
     */
    public function setIdJugador(\Acme\TableroBundle\Entity\Jugador $idJugador = null)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get idJugador
     *
     * @return \Acme\TableroBundle\Entity\Jugador 
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }
}
