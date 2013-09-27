<?php

/* EhrgeizDealBundle:Deal:Deal.html.twig */
class __TwigTemplate_ef540585dfc94266f383e3c5dec6b8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
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
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Open Deal!!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/css/deal.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/js/jquery-1.9.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "     Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
    <div class=\"main\">

        <div class=\"chart\">
            <canvas id=\"chartCanvas\" style=\"width:400px;height:200px;\"></canvas>
        </div>
        <div class=\"buttonList\">
            ";
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "            <button type=\"button\" class=\"buyButton\">Buy</button>
            <button type=\"button\" class=\"sellButton\">Sell</button>
        </div>
        ";
        // line 33
        echo "        <div class=\"price\">9,800</div>
        <!--売買商品一覧 -->
        <div class=\"commodity\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/image/blueDrink.png"), "html", null, true);
        echo "\"/>
            <br/>
            数量：<span id=\"buyPositionCount\">0</span><br/>
            ";
        // line 40
        echo "                ";
        // line 41
        echo "                ";
        // line 42
        echo "                    ";
        // line 43
        echo "                    ";
        // line 44
        echo "                    ";
        // line 45
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "                ";
        // line 48
        echo "                ";
        // line 49
        echo "                    ";
        // line 50
        echo "                    ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "                ";
        // line 54
        echo "            ";
        // line 55
        echo "        </div>
        <div class=\"money\">
            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/image/gold.png"), "html", null, true);
        echo "\"/>
            <span class=\"gold\">1,000,000</span><br/>
            (評価:+<span>123,456,789</span>)
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EhrgeizDealBundle:Deal:Deal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 57,  134 => 55,  132 => 54,  130 => 53,  128 => 52,  126 => 51,  124 => 50,  122 => 49,  120 => 48,  118 => 47,  116 => 46,  114 => 45,  112 => 44,  110 => 43,  108 => 42,  106 => 41,  104 => 40,  98 => 36,  93 => 33,  88 => 29,  86 => 28,  84 => 27,  73 => 19,  70 => 18,  63 => 15,  60 => 14,  54 => 11,  49 => 10,  46 => 9,  40 => 7,  35 => 4,  32 => 3,);
    }
}
