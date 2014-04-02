<?php

/* AcmeTableroBundle:Tablero:casilla.html.twig */
class __TwigTemplate_eb8d1c74389261451751b5b48e61b8f31d8778a87cbc02e58495ebaa57640043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casilla"]) ? $context["casilla"] : $this->getContext($context, "casilla")), "getNombre"), "html", null, true);
        echo "</h2>";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Tablero:casilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
