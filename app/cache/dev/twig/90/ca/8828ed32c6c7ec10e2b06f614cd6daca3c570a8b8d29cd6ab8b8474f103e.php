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
        return array (  110 => 33,  101 => 26,  89 => 23,  81 => 21,  78 => 20,  74 => 19,  70 => 17,  67 => 16,  61 => 13,  57 => 12,  53 => 11,  50 => 10,  44 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
