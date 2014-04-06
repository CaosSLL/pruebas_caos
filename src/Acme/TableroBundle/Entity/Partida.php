<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partida
 *
 * @ORM\Table(name="partida", indexes={@ORM\Index(name="turno_jugador", columns={"turno_jugador"})})
 * @ORM\Entity
 */
class Partida
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="jugadores", type="integer", nullable=false)
     */
    private $jugadores;

    /**
     * @var integer
     *
     * @ORM\Column(name="bote", type="integer", nullable=false)
     */
    private $bote;

    /**
     * @var \Jugador
     *
     * @ORM\ManyToOne(targetEntity="Jugador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turno_jugador", referencedColumnName="id")
     * })
     */
    private $turnoJugador;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Partida
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set jugadores
     *
     * @param integer $jugadores
     * @return Partida
     */
    public function setJugadores($jugadores)
    {
        $this->jugadores = $jugadores;

        return $this;
    }

    /**
     * Get jugadores
     *
     * @return integer 
     */
    public function getJugadores()
    {
        return $this->jugadores;
    }

    /**
     * Set bote
     *
     * @param integer $bote
     * @return Partida
     */
    public function setBote($bote)
    {
        $this->bote = $bote;

        return $this;
    }

    /**
     * Get bote
     *
     * @return integer 
     */
    public function getBote()
    {
        return $this->bote;
    }

    /**
     * Set turnoJugador
     *
     * @param \Acme\TableroBundle\Entity\Jugador $turnoJugador
     * @return Partida
     */
    public function setTurnoJugador(\Acme\TableroBundle\Entity\Jugador $turnoJugador = null)
    {
        $this->turnoJugador = $turnoJugador;

        return $this;
    }

    /**
     * Get turnoJugador
     *
     * @return \Acme\TableroBundle\Entity\Jugador 
     */
    public function getTurnoJugador()
    {
        return $this->turnoJugador;
    }
}
