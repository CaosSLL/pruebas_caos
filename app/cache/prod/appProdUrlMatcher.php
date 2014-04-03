<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // acme_tablero_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_tablero_homepage');
            }

            return array (  '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::indexAction',  '_route' => 'acme_tablero_homepage',);
        }

        // acme_tablero
        if ($pathinfo === '/tablero') {
            return array (  '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::mostrarTableroAction',  '_route' => 'acme_tablero',);
        }

        if (0 === strpos($pathinfo, '/casilla')) {
            // acme_casilla
            if (preg_match('#^/casilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_casilla')), array (  '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::datosCasillaAction',));
            }

            // acme_casillaJSON
            if (0 === strpos($pathinfo, '/casillaJSON') && preg_match('#^/casillaJSON/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_casillaJSON')), array (  '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::datosCasillaJSONAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
