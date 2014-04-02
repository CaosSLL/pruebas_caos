<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarjetaEvento
 *
 * @ORM\Table(name="tarjeta_evento", indexes={@ORM\Index(name="id_jugador", columns={"id_jugador"})})
 * @ORM\Entity
 */
class TarjetaEvento
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
     * @ORM\Column(name="texto", type="string", length=255, nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="beneficio", type="string", length=255, nullable=true)
     */
    private $beneficio;

    /**
     * @var string
     *
     * @ORM\Column(name="penalizacion", type="string", length=255, nullable=true)
     */
    private $penalizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=true)
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
     * Set texto
     *
     * @param string $texto
     * @return TarjetaEvento
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set beneficio
     *
     * @param string $beneficio
     * @return TarjetaEvento
     */
    public function setBeneficio($beneficio)
    {
        $this->beneficio = $beneficio;

        return $this;
    }

    /**
     * Get beneficio
     *
     * @return string 
     */
    public function getBeneficio()
    {
        return $this->beneficio;
    }

    /**
     * Set penalizacion
     *
     * @param string $penalizacion
     * @return TarjetaEvento
     */
    public function setPenalizacion($penalizacion)
    {
        $this->penalizacion = $penalizacion;

        return $this;
    }

    /**
     * Get penalizacion
     *
     * @return string 
     */
    public function getPenalizacion()
    {
        return $this->penalizacion;
    }

    /**
     * Set idJugador
     *
     * @param integer $idJugador
     * @return TarjetaEvento
     */
    public function setIdJugador($idJugador)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get idJugador
     *
     * @return integer 
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }
}
