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
        return array (  99 => 34,  94 => 32,  84 => 24,  74 => 20,  70 => 19,  66 => 18,  63 => 17,  59 => 16,  51 => 12,  48 => 11,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
