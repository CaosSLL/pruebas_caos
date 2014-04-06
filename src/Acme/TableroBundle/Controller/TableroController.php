<?php

namespace Acme\TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TableroBundle\Entity\Tierra;

class TableroController extends Controller {

    public function indexAction() {

        if ($this->get("security.context")->isGranted("ROLE_USER")) {
            return $this->redirect($this->generateUrl("acme_tablero", array("id_partida" => 0)));
        }

        return $this->render('AcmeTableroBundle:Tablero:index.html.twig');
    }

    public function mostrarTableroAction($id_partida = 0) {
        if ($id_partida) {
            $usuario = $this->get("security.context")->getToken()->getUser();

            $datos = $this->getDoctrine()->getRepository("AcmeTableroBundle:UsuParJug")
                    ->findDatosPartida($usuario->getId(),$id_partida);
        }else{
            $datos = new \Acme\TableroBundle\Entity\UsuParJug();
        }
        return $this->render("AcmeTableroBundle:Tablero:tablero.html.twig", array("datos" => $datos));
    }

    public function datosCasillaJSONAction($id) {
        $casilla = $this->getDoctrine()->getRepository("AcmeTableroBundle:Tierra")->findOneByCasilla($id);
        if (!$casilla) {
            $casilla = $this->getDoctrine()->getRepository("AcmeTableroBundle:Propiedad")->findOneByCasilla($id);
        }
        if (!$casilla) {
            $casilla = new Tierra();
        }
        return $this->render("AcmeTableroBundle:Tablero:casillaJSON.html.twig", array("casilla" => $casilla));
    }

}
