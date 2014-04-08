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
        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div style=\"color: red;\">Ha habido un error: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" name=\"formulario_login\">
        <label for=\"username\">Usuario:</label>
        <input id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /><br>
        <label for=\"password\">Contraseña:</label>
        <input id=\"password\" type=\"password\" name=\"_password\" /><br> 
";
        // line 11
        echo "        <input type=\"hidden\" name=\"_target_path\" value=\"/listaPartidas\">
    </form>
";
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
        return array (  39 => 11,  33 => 7,  27 => 5,  21 => 3,  19 => 2,);
    }
}
