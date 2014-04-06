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
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/css/tablero.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/clases.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/tablero.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
";
        // line 18
        if (($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "getUsuario") != null)) {
            // line 19
            echo "    <h4>Hola ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "getUsuario"), "getUsername"), "html", null, true);
            echo " digooo ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "getJugador"), "getPersonaje"), "html", null, true);
            echo "</h4>
";
        }
        // line 21
        echo "    
<div id=\"infoPartida\">
    Información general.
</div>

<div id=\"tablero\">
    <div class=\"ficha\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/images/frodo2.png"), "html", null, true);
        echo "\" style=\"width: 100%\">
    </div>
    ";
        // line 33
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
            <td colspan=\"3\"></td>
            <td id=\"casilla13\">9</td>
        </tr>
        <tr>
            <td id=\"casilla6\">4</td>
            <td colspan=\"3\"></td>
            <td id=\"casilla14\">10</td>
        </tr>
        <tr>
            <td id=\"casilla5\">3</td>
            <td colspan=\"3\"></td>
            <td id=\"casilla15\">11</td>
        </tr>
        <tr>
            <td id=\"casilla4\">Mira el Palantir</td>
            <td id=\"casilla3\">2</td>
            <td id=\"casilla2\">Eventos</td>
            <td id=\"casilla1\">
";
        // line 62
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/images/casilla1.png"), "html", null, true);
        echo "\">
            </td>
            <td id=\"casilla0\">Salida</td>
        </tr>
    </table>
    <div id=\"dado\">Tira!</div>
</div>

<div style=\"clear: both\"></div>

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
        return array (  127 => 62,  97 => 33,  92 => 28,  83 => 21,  75 => 19,  73 => 18,  70 => 17,  67 => 16,  61 => 13,  57 => 12,  53 => 11,  50 => 10,  44 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
