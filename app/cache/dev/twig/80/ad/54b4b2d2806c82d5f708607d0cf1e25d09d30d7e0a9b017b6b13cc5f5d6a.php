<?php

/* AcmeTableroBundle:Tablero:listaPartidas.html.twig */
class __TwigTemplate_80ad54b4b2d2806c82d5f708607d0cf1e25d09d30d7e0a9b017b6b13cc5f5d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<h1>Bienvenido: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username"), "html", null, true);
        echo "!</h1>

<div class=\"listado_partidas\">
    <ul>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partidas"]) ? $context["partidas"] : $this->getContext($context, "partidas")));
        foreach ($context['_seq'] as $context["_key"] => $context["partida"]) {
            // line 17
            echo "        <li>
            <div class=\"partida\" onclick=\"cargarUsuarios(";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "partida"), "getId"), "html", null, true);
            echo ");\">
                <span>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "partida"), "getFecha"), "j - F - Y"), "html", null, true);
            echo "</span>
                <div class=\"usuarios\" id=\"usuarios";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "partida"), "getId"), "html", null, true);
            echo "\"></div>
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partida'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
</div>

<script type=\"text/javascript\">

    function cargarUsuarios(id) {
        var usuario = \"#usuarios\" + id;
        if (\$(usuario).text() === \"\") {
            \$(usuario).load(\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("acme_lista_usuarios", array("id" => 0));
        echo "\" + id, null, function() {
                \$(usuario).prepend(\"<h3>Usuarios de la partida:</h3>\");
                var url = \"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("acme_tablero", array("id_partida" => 0));
        echo "\" + id;
                \$(usuario).append(\"<a href=\"+url+\">Ir a la partida</a>\");
            });
        } else {
            \$(usuario).slideToggle()();
        } 
    }

</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Tablero:listaPartidas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  70 => 19,  110 => 31,  76 => 35,  53 => 21,  23 => 1,  65 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 30,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 33,  102 => 17,  71 => 19,  67 => 15,  63 => 17,  59 => 16,  38 => 7,  94 => 32,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 18,  87 => 25,  21 => 3,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 17,  27 => 5,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 7,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 27,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 32,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 8,  83 => 25,  74 => 20,  66 => 18,  55 => 22,  52 => 21,  50 => 15,  43 => 8,  41 => 8,  35 => 10,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 34,  95 => 28,  92 => 21,  86 => 28,  82 => 5,  80 => 19,  73 => 19,  64 => 17,  60 => 23,  57 => 11,  54 => 10,  51 => 12,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
