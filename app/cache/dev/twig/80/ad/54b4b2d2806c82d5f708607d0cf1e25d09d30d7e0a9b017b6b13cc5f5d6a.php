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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), 0, array(), "array"), "getUsuario"), "username"), "html", null, true);
        echo "!</h1>

<div class=\"listado_partidas\">
    <ul>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")));
        foreach ($context['_seq'] as $context["_key"] => $context["partida"]) {
            // line 17
            echo "        <li>
            <div class=\"partida\" id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getPartida"), "getId"), "html", null, true);
            echo "\" onclick=\"cargarUsuarios(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getPartida"), "getId"), "html", null, true);
            echo ")\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("acme_tablero", array("id_partida" => $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getPartida"), "getId"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getPartida"), "getFecha"), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getJugador"), "getPersonaje"), "html", null, true);
            echo "</a>
                <div class=\"usuarios\" id=\"usuarios";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["partida"]) ? $context["partida"] : $this->getContext($context, "partida")), "getPartida"), "getId"), "html", null, true);
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
";
        // line 31
        echo "        \$(\"#usuarios\" + id).load(\"";
        echo $this->env->getExtension('routing')->getUrl("acme_lista_usuarios", array("id" => 0));
        echo "\" + id, null, function() {
            \$(\"#usuarios\" + id).prepend(\"Usuarios de la partida:\");
        });
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
        return array (  98 => 31,  90 => 24,  80 => 20,  72 => 19,  66 => 18,  63 => 17,  59 => 16,  51 => 12,  48 => 11,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
