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
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Open Deal!!";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/css/deal.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/js/jquery-1.9.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"main\">

        <div class=\"chart\">
            <canvas id=\"chartCanvas\" style=\"width:400px;height:200px;\"></canvas>
        </div>
        <div class=\"buttonList\">
            ";
        // line 28
        echo "            ";
        // line 29
        echo "            ";
        // line 30
        echo "            <button type=\"button\" class=\"buyButton\">Buy</button>
            <button type=\"button\" class=\"sellButton\">Sell</button>
        </div>
        ";
        // line 34
        echo "        <div class=\"price\">9,800</div>
        <!--売買商品一覧 -->
        <div class=\"commodity\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/deal/image/blueDrink.png"), "html", null, true);
        echo "\"/>
            <br/>
            数量：<span id=\"buyPositionCount\">0</span><br/>
            Hello ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
            ";
        // line 42
        echo "                ";
        // line 43
        echo "                ";
        // line 44
        echo "                    ";
        // line 45
        echo "                    ";
        // line 46
        echo "                    ";
        // line 47
        echo "                ";
        // line 48
        echo "                ";
        // line 49
        echo "                ";
        // line 50
        echo "                ";
        // line 51
        echo "                    ";
        // line 52
        echo "                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "                ";
        // line 56
        echo "            ";
        // line 57
        echo "        </div>
        <div class=\"money\">
            <img src=\"";
        // line 59
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
        return array (  141 => 59,  137 => 57,  135 => 56,  133 => 55,  131 => 54,  129 => 53,  127 => 52,  125 => 51,  123 => 50,  121 => 49,  119 => 48,  117 => 47,  115 => 46,  113 => 45,  111 => 44,  109 => 43,  107 => 42,  103 => 40,  97 => 37,  92 => 34,  87 => 30,  85 => 29,  83 => 28,  75 => 21,  72 => 20,  65 => 17,  62 => 16,  56 => 13,  51 => 12,  48 => 11,  42 => 9,  35 => 4,  32 => 3,);
    }
}
