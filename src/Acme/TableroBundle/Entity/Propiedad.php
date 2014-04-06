<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propiedad
 *
 * @ORM\Table(name="propiedad", indexes={@ORM\Index(name="id_jugador", columns={"id_jugador"}), @ORM\Index(name="casilla", columns={"casilla"})})
 * @ORM\Entity
 */
class Propiedad
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
     * @return Propiedad
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
     * @return Propiedad
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
     * Set idJugador
     *
     * @param \Acme\TableroBundle\Entity\Jugador $idJugador
     * @return Propiedad
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
