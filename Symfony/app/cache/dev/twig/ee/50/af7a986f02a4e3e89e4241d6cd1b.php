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
        return array (  78 => 12,  68 => 7,  62 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  37 => 7,  30 => 5,  24 => 1,  135 => 59,  133 => 58,  131 => 57,  129 => 56,  127 => 55,  125 => 54,  123 => 53,  121 => 52,  119 => 51,  117 => 50,  115 => 49,  113 => 48,  111 => 47,  109 => 46,  107 => 45,  105 => 44,  93 => 33,  88 => 29,  86 => 28,  84 => 27,  73 => 11,  70 => 18,  63 => 15,  60 => 14,  54 => 11,  49 => 10,  46 => 11,  40 => 7,  35 => 4,  32 => 6,);
    }
}
