<?php

/* AcmeTableroBundle:Tablero:tablero.html.twig */
class __TwigTemplate_90ca8828ed32c6c7ec10e2b06f614cd6daca3c570a8b8d29cd6ab8b8474f103e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Tablero!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/css/tablero.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/clases.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/tablero.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
<h3>Esto es el tablero...</h3>
<h4>Hola ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "getNombre"), "html", null, true);
        echo " digooo ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jugador"]) ? $context["jugador"] : $this->getContext($context, "jugador")), "getPersonaje"), "html", null, true);
        echo "</h4>


<div id=\"ficha\"></div>

<div id=\"tablero\">
    ";
        // line 61
        echo "    <table>
        <tr>
            <td id=\"casilla8\">5</td>
            <td id=\"casilla9\">6</td>
            <td id=\"casilla10\">Personajes</td>
            <td id=\"casilla11\">7</td>
            <td id=\"casilla12\">8</td>
        </tr>
        <tr>
            <td id=\"casilla7\">Mazmorra</td>
            ";
        // line 74
        echo "            <td colspan=\"3\"></td>
            <td id=\"casilla13\">9</td>
        </tr>
        <tr>
            <td id=\"casilla6\">4</td>
            ";
        // line 82
        echo "            <td colspan=\"3\"></td>
            <td id=\"casilla14\">10</td>
        </tr>
        <tr>
            <td id=\"casilla5\">3</td>
            ";
        // line 90
        echo "            <td colspan=\"3\"></td>
            <td id=\"casilla15\">11</td>
        </tr>
        <tr>
            <td id=\"casilla4\">Mira el Palantir</td>
            <td id=\"casilla3\">2</td>
            <td id=\"casilla2\">Eventos</td>
            <td id=\"casilla1\">1</td>
            <td id=\"casilla0\">Salida</td>
        </tr>
    </table>
</div>

<div id=\"dado\">Tira!</div>

<div style=\"clear: both\"></div>
<div id=\"infoPartida\">
    
</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Tablero:tablero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 90,  101 => 82,  94 => 74,  82 => 61,  71 => 18,  67 => 16,  64 => 15,  58 => 12,  54 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,);
    }
}
