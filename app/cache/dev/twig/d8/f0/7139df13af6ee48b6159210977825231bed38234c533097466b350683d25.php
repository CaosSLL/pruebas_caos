<?php

/* AcmeTableroBundle:Security:login.html.twig */
class __TwigTemplate_d8f07139df13af6ee48b6159210977825231bed38234c533097466b350683d25 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<h1>Introduzca su usuario y contraseña:</h1>
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Usuario:</label>
    <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    <label for=\"password\">Contraseña:</label>
    <input id=\"password\" type=\"password\" name=\"_password\" /> <input type=\"submit\" name=\"login\" />
";
        // line 12
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 8,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
