<?php

namespace Acme\TableroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsuParJug
 * @ORM\Table(name="usu_par_jug", indexes={@ORM\Index(name="id_partida", columns={"id_partida"}), @ORM\Index(name="id_jugador", columns={"id_jugador"}), @ORM\Index(name="IDX_34DC8107FCF8192D", columns={"id_usuario"})})
 * @ORM\Entity(repositoryClass="Acme\TableroBundle\Entity\Repository\UsuParJugRepository")
 */
class UsuParJug
{
    /**
     * @var \Jugador
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Jugador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jugador", referencedColumnName="id")
     * })
     */
    private $jugador;

    /**
     * @var \Usuario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @var \Partida
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Partida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partida", referencedColumnName="id")
     * })
     */
    private $partida;



    /**
     * Set jugador
     *
     * @param \Acme\TableroBundle\Entity\Jugador $jugador
     * @return UsuParJug
     */
    public function setJugador(\Acme\TableroBundle\Entity\Jugador $jugador)
    {
        $this->jugador = $jugador;

        return $this;
    }

    /**
     * Get jugador
     *
     * @return \Acme\TableroBundle\Entity\Jugador 
     */
    public function getJugador()
    {
        return $this->jugador;
    }

    /**
     * Set usuario
     *
     * @param \Acme\TableroBundle\Entity\Usuario $usuario
     * @return UsuParJug
     */
    public function setUsuario(\Acme\TableroBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Acme\TableroBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set partida
     *
     * @param \Acme\TableroBundle\Entity\Partida $partida
     * @return UsuParJug
     */
    public function setPartida(\Acme\TableroBundle\Entity\Partida $partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return \Acme\TableroBundle\Entity\Partida 
     */
    public function getPartida()
    {
        return $this->partida;
    }
}
