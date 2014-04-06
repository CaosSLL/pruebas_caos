<?php

/* ::base.html.twig */
class __TwigTemplate_a146ed0ffc74242bd9ff003062496ea62b37b787fb0c59530360f3ee42e4b9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <h1>Monopoly de <span>El Señor de los Anillos</span></h1>
        </header>

        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
        <div class=\"panel_usuario\">
            <div class=\"usuario\">
            ";
        // line 21
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 22
            echo "                <span class=\"nombre_usuario\">Usuario: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</span><br>
                <button class=\"boton_salir\"><a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getUrl("logout");
            echo "\" style=\"text-decoration: none; color: #000000;\">Salir</a></button>
            ";
        } else {
            // line 25
            echo "                <span class=\"nombre_usuario\">Usuario: Anónimo</span><br>
            ";
        }
        // line 27
        echo "            </div>
        </div>
        
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Monopoly de El Señor de los Anillos";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/css/jqueryui/base/jquery-ui.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/css/principal.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmetablero/js/principal.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  115 => 32,  110 => 31,  107 => 30,  102 => 17,  96 => 8,  91 => 7,  88 => 6,  82 => 5,  76 => 35,  74 => 30,  69 => 27,  65 => 25,  60 => 23,  55 => 22,  53 => 21,  48 => 18,  46 => 17,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
