<?php

/* ::base.html.twig */
class __TwigTemplate_ee50af7a986f02a4e3e89e4241d6cd1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
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
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 6
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  78 => 12,  73 => 11,  68 => 7,  57 => 5,  46 => 11,  39 => 8,  37 => 7,  30 => 5,  24 => 1,  140 => 59,  136 => 57,  134 => 56,  132 => 55,  130 => 54,  128 => 53,  126 => 52,  124 => 51,  122 => 50,  120 => 49,  118 => 48,  116 => 47,  114 => 46,  112 => 45,  110 => 44,  108 => 43,  106 => 42,  100 => 38,  95 => 35,  90 => 31,  88 => 30,  86 => 29,  75 => 21,  72 => 20,  65 => 17,  62 => 6,  56 => 13,  51 => 13,  48 => 12,  42 => 9,  35 => 4,  32 => 6,);
    }
}
