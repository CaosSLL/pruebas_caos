<?php

/* AcmeTableroBundle:Tablero:casillaJSON.html.twig */
class __TwigTemplate_11215e6b06cd77e80373a6bcf46ec3e10582656196d561d6bb6a53647dfb7e75 extends Twig_Template
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
        echo "{
    \"casilla\": ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casilla"]) ? $context["casilla"] : $this->getContext($context, "casilla")), "getCasilla"), "html", null, true);
        echo ",
    \"nombre\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["casilla"]) ? $context["casilla"] : $this->getContext($context, "casilla")), "getNombre"), "html", null, true);
        echo "\"
}";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Tablero:casillaJSON.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
