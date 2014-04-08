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
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["dato"]) {
            // line 20
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "getUsuario"), "getId") == $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "getId"))) {
                // line 21
                echo "        <p><b>Bienvenido amo: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "getUsuario"), "getUsername"), "html", null, true);
                echo ", tu ficha es: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "getJugador"), "getPersonaje"), "html", null, true);
                echo "</b></p>
    ";
            } else {
                // line 23
                echo "        <p>Bienvenido: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "getUsuario"), "getUsername"), "html", null, true);
                echo ", tu ficha es: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dato"]) ? $context["dato"] : $this->getContext($context, "dato")), "getJugador"), "getPersonaje"), "html", null, true);
                echo "</p>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dato'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
<div id=\"infoPartida\">
    Información general.
</div>

<div id=\"tablero\">
    <div class=\"ficha\">
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/images/frodo2.png"), "html", null, true);
        echo "\" style=\"width: 100%\">
    </div>
    
    <table>
    <tbody>
        <tr>
            <td id=\"casilla20\">20</td>
            <td id=\"casilla21\">21</td>
            <td id=\"casilla22\">22</td>
            <td id=\"casilla23\">23</td>
            <td id=\"casilla24\">24</td>
            <td id=\"casilla25\">25</td>
            <td id=\"casilla26\">26</td>
            <td id=\"casilla27\">27</td>
            <td id=\"casilla28\">28</td>
            <td id=\"casilla29\">29</td>
            <td id=\"casilla30\">30</td>
        </tr>
        <tr>
            <td id=\"casilla19\">19</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla31\">31</td>
        </tr>
        <tr>
            <td id=\"casilla18\">18</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla32\">32</td>
        </tr>
        <tr>
            <td id=\"casilla17\">17</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla33\">33</td>
        </tr>
        <tr>
            <td id=\"casilla16\">16</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla34\">34</td>
        </tr>
        <tr>
            <td id=\"casilla15\">15</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla35\">35</td>
        </tr>
        <tr>
            <td id=\"casilla14\">14</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla36\">36</td>
        </tr>
        <tr>
            <td id=\"casilla13\">13</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla37\">37</td>
        </tr>
        <tr>
            <td id=\"casilla12\">12</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla38\">38</td>
        </tr>
        <tr>
            <td id=\"casilla11\">11</td>
            <td colspan=\"9\"></td>
            <td id=\"casilla39\">39</td>
        </tr>
        <tr>
            <td id=\"casilla10\">10</td>
            <td id=\"casilla9\">9</td>
            <td id=\"casilla8\">8</td>
            <td id=\"casilla7\">7</td>
            <td id=\"casilla6\">6</td>
            <td id=\"casilla5\">5</td>
            <td id=\"casilla4\">4</td>
            <td id=\"casilla3\">3</td>
            <td id=\"casilla2\">2</td>
            <td id=\"casilla1\">1</td>
            <td id=\"casilla0\">0</td>
        </tr>
    </tbody>
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
        return array (  81 => 21,  127 => 46,  113 => 39,  97 => 34,  84 => 24,  70 => 17,  110 => 33,  76 => 35,  53 => 11,  23 => 1,  65 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 33,  102 => 17,  71 => 19,  67 => 16,  63 => 17,  59 => 16,  38 => 7,  94 => 33,  89 => 23,  85 => 25,  75 => 17,  68 => 14,  56 => 18,  87 => 31,  21 => 3,  26 => 3,  93 => 28,  88 => 6,  78 => 20,  46 => 17,  27 => 5,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 45,  117 => 44,  105 => 40,  91 => 32,  62 => 23,  49 => 15,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 27,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 32,  111 => 37,  108 => 36,  101 => 26,  98 => 31,  96 => 8,  83 => 25,  74 => 19,  66 => 18,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 8,  35 => 10,  32 => 4,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 34,  95 => 28,  92 => 21,  86 => 28,  82 => 5,  80 => 19,  73 => 19,  64 => 17,  60 => 23,  57 => 12,  54 => 10,  51 => 12,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 11,  33 => 10,  30 => 3,);
    }
}
