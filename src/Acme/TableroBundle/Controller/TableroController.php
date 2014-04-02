<?php

namespace Acme\TableroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TableroBundle\Entity\Tierra;

class TableroController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeTableroBundle:Tablero:index.html.twig');
    }
    
    public function mostrarTableroAction(){
        $jugador = $this->getDoctrine()->getRepository("AcmeTableroBundle:Jugador")->find(1);
        return $this->render("AcmeTableroBundle:Tablero:tablero.html.twig",array("jugador"=>$jugador));
    }
    
    public function datosCasillaAction($id){
        $casilla = $this->getDoctrine()->getRepository("AcmeTableroBundle:Propiedad")->findOneByCasilla($id);
        return $this->render("AcmeTableroBundle:Tablero:casilla.html.twig",array("casilla"=>$casilla));
    }
    
    public function datosCasillaJSONAction($id){
        $casilla = $this->getDoctrine()->getRepository("AcmeTableroBundle:Tierra")->findOneByCasilla($id);
        if(!$casilla){
            $casilla = $this->getDoctrine()->getRepository("AcmeTableroBundle:Propiedad")->findOneByCasilla($id);
        }
        if(!$casilla){
            $casilla = new Tierra();                    
        }
        return $this->render("AcmeTableroBundle:Tablero:casillaJSON.html.twig",array("casilla"=>$casilla));
    }
    
}
