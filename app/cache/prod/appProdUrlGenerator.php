<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'acme_tablero_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'acme_tablero' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::mostrarTableroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tablero',    ),  ),  4 =>   array (  ),),
        'acme_casilla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::datosCasillaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/casilla',    ),  ),  4 =>   array (  ),),
        'acme_casillaJSON' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\TableroBundle\\Controller\\TableroController::datosCasillaJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/casillaJSON',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
