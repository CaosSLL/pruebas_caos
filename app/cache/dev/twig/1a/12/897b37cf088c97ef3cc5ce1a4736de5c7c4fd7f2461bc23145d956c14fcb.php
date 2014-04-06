<?php

/* AcmeTableroBundle:Tablero:index.html.twig */
class __TwigTemplate_1a12897b37cf088c97ef3cc5ce1a4736de5c7c4fd7f2461bc23145d956c14fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"opciones\">
    <ul>
        <li class=\"opcion\">
            <a id=\"logearse\" href=\"#\">Iniciar partida</a>
        </li>
        <li class=\"opcion\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("acme_tablero", array("id_partida" => 0));
        echo "\">Iniciar partida rapida y anónima</a>
        </li>
        <li class=\"opcion\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("acme_usuario_registrar");
        echo "\">Registrarte</a>
        </li>
    </ul>
</div>

<div class=\"dialog_logearse\" title=\"Logeate!\" style=\"display: none;\">
    <form name=\"formulario_login\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Usuario:</label>
        <input id=\"username\" type=\"text\" name=\"_username\" />
        <label for=\"password\">Contraseña:</label>
        <input id=\"password\" type=\"password\" name=\"_password\" /> 
        <input type=\"hidden\" name=\"_target_path\" value=\"/listaPartidas\">
";
        // line 31
        echo "    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeTableroBundle:Tablero:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  65 => 24,  56 => 18,  50 => 15,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
