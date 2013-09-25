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
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
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
        <div class=\"money\">
            <!-- <img src=\"image/money.gif\"/> -->
            保有資産：<span id=\"fund\">1000000</span><br/>
            (評価損益:<span>1000</span>)<br/>
        </div>
        <!--売買商品一覧 -->
        <div class=\"commodity\">
            平均単価：<span id=\"buyPositionData\">00</span><br/>
            数量：<span id=\"buyPositionCount\">0</span><br/>
            ";
        // line 44
        echo "                ";
        // line 45
        echo "                ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                    ";
        // line 49
        echo "                ";
        // line 50
        echo "                ";
        // line 51
        echo "                ";
        // line 52
        echo "                ";
        // line 53
        echo "                    ";
        // line 54
        echo "                    ";
        // line 55
        echo "                    ";
        // line 56
        echo "                ";
        // line 57
        echo "                ";
        // line 58
        echo "            ";
        // line 59
        echo "        </div>
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
        return array (  135 => 59,  133 => 58,  131 => 57,  129 => 56,  127 => 55,  125 => 54,  123 => 53,  121 => 52,  119 => 51,  117 => 50,  115 => 49,  113 => 48,  111 => 47,  109 => 46,  107 => 45,  105 => 44,  93 => 33,  88 => 29,  86 => 28,  84 => 27,  73 => 19,  70 => 18,  63 => 15,  60 => 14,  54 => 11,  49 => 10,  46 => 9,  40 => 7,  35 => 4,  32 => 3,);
    }
}
