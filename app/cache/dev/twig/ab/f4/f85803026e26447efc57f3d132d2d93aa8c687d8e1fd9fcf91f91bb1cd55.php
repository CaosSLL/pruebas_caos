<?php

/* AcmeTableroBundle:Tablero:tablero.html_1.twig */
class __TwigTemplate_abf4f85803026e26447efc57f3d132d2d93aa8c687d8e1fd9fcf91f91bb1cd55 extends Twig_Template
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
        return "AcmeTableroBundle:Tablero:tablero.html_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  127 => 62,  113 => 39,  97 => 33,  84 => 24,  70 => 17,  110 => 33,  76 => 35,  53 => 11,  23 => 1,  65 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 33,  102 => 17,  71 => 19,  67 => 16,  63 => 17,  59 => 16,  38 => 7,  94 => 33,  89 => 23,  85 => 25,  75 => 19,  68 => 14,  56 => 18,  87 => 31,  21 => 3,  26 => 3,  93 => 28,  88 => 6,  78 => 20,  46 => 17,  27 => 5,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 44,  105 => 40,  91 => 32,  62 => 23,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 27,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 32,  111 => 37,  108 => 36,  101 => 26,  98 => 31,  96 => 8,  83 => 21,  74 => 19,  66 => 18,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 8,  35 => 10,  32 => 4,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 34,  95 => 28,  92 => 28,  86 => 28,  82 => 5,  80 => 19,  73 => 18,  64 => 17,  60 => 23,  57 => 12,  54 => 10,  51 => 12,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 11,  33 => 10,  30 => 3,);
    }
}
