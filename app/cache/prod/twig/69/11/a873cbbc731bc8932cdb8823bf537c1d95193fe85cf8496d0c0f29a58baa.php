<?php

/* furiesorbitBundle::layout.html.twig */
class __TwigTemplate_6911a873cbbc731bc8932cdb8823bf537c1d95193fe85cf8496d0c0f29a58baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 4
        echo "     ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe17ce1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_0") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_bootstrap_1.js");
            // line 14
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_1") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_2") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_charisma_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_3") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_init-chart_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_4") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_init_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_5") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery-ui-1.10.3_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_6") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery-ui-1.10.3.min_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_7") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.autogrow-textarea_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_8") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.cookie_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_9") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.dataTables.min_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_10") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.history_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_11") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.iphone.toggle_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_12") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.min_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_13") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.noty_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_14") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.raty.min_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_15") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.scrolly.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_16") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.scrollzer.min_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_17") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_jquery.uploadify-3.1.min_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_18") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_skel-layers.min_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_19") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_skel.min_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fe17ce1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
\t<body>

\t\t<!-- Header -->
\t\t\t<div id=\"header\" class=\"skel-layers-fixed\">

\t\t\t\t<div class=\"top\">

\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t<span class=\"image avatar48\"><img src=\"images/avatar.jpg\" alt=\"\" /></span>
\t\t\t\t\t\t\t<h1 id=\"title\">Furies Orbit Server</h1>
\t\t\t\t\t\t</div>

\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tPrologue's nav expects links in one of two formats:
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t1. Hash link (scrolls to a different section within the page)
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t   <li><a href=\"#foobar\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want skel-layers-ignoreHref\"><span class=\"label\">Foobar</span></a></li>

\t\t\t\t\t\t\t\t2. Standard link (sends the user to another page/site)

\t\t\t\t\t\t\t\t   <li><a href=\"http://foobar.tld\" id=\"foobar-link\" class=\"icon fa-whatever-icon-you-want\"><span class=\"label\">Foobar</span></a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#top\" id=\"top-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-home\">Home</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#portfolio\" id=\"portfolio-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-th\">Portfolio</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#about\" id=\"about-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-user\">About Me</span></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#contact\" id=\"contact-link\" class=\"skel-layers-ignoreHref\"><span class=\"icon fa-envelope\">Contact</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"bottom\">

\t\t\t\t\t<!-- Social Icons -->
\t\t\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t</div>

\t\t<!-- Main -->
\t\t\t<div id=\"main\">

\t\t\t\t<!-- Intro -->
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"container\">
                                                      <div class=\"4u\">
</br>
                                                     ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "\t\t\t\t\t\t      </div>   
\t\t\t\t\t\t</div>

\t\t\t\t
\t\t\t\t<!-- Contact -->
\t\t\t\t\t<section id=\"contact\" class=\"four\">
\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t<h2>Contact</h2>
\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t<p>Elementum sem parturient nulla quam placerat viverra 
\t\t\t\t\t\t\tmauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
\t\t\t\t\t\t\tdonec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
\t\t\t\t\t\t\torci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form method=\"post\" action=\"#\">
\t\t\t\t\t\t\t\t<div class=\"row 50%\">
\t\t\t\t\t\t\t\t\t<div class=\"6u\"><input type=\"text\" name=\"name\" placeholder=\"Name\" /></div>
\t\t\t\t\t\t\t\t\t<div class=\"6u\"><input type=\"text\" name=\"email\" placeholder=\"Email\" /></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row 50%\">
\t\t\t\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Message\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Message\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t
\t\t\t</div>

\t\t<!-- Footer -->
\t\t\t<div id=\"footer\">
\t\t\t\t
\t\t\t\t<!-- Copyright -->
\t\t\t\t\t<ul class=\"copyright\">
\t\t\t\t\t\t<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div>

\t</body>
</html>
</html>
";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "                <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/skel.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/style-wide.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<!--[if lte IE 9]><link rel=\"stylesheet\" href=\"css/ie/v9.css\" /><![endif]-->
\t\t<!--[if lte IE 8]><link rel=\"stylesheet\" href=\"css/ie/v8.css\" /><![endif]-->
            ";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "
\t\t\t\t\t\t\t ";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 75,  297 => 8,  293 => 7,  289 => 6,  284 => 5,  281 => 4,  225 => 77,  223 => 74,  879 => 609,  865 => 607,  861 => 606,  857 => 604,  843 => 602,  839 => 601,  835 => 599,  821 => 597,  817 => 596,  814 => 595,  800 => 593,  796 => 592,  793 => 591,  779 => 589,  775 => 588,  772 => 587,  758 => 585,  754 => 584,  751 => 583,  737 => 581,  733 => 580,  730 => 579,  716 => 577,  712 => 576,  709 => 575,  689 => 573,  685 => 572,  682 => 571,  668 => 569,  664 => 568,  661 => 567,  647 => 565,  643 => 564,  639 => 562,  625 => 560,  621 => 559,  618 => 558,  604 => 556,  600 => 555,  218 => 176,  190 => 150,  58 => 20,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 14,  47 => 9,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 24,  56 => 9,  50 => 10,  28 => 12,  43 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 16,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 7,  29 => 3,  21 => 1,  38 => 12,  26 => 6,  24 => 3,  35 => 14,  31 => 13,  25 => 4,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 133,  176 => 64,  173 => 126,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
