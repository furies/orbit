<?php

/* furiesorbitBundle:Secured:login.html.twig */
class __TwigTemplate_3346ecb95cb6a0140ad17090c4a2f9d3e001513312e85fc25309e01a3dc1f940 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html class=\"bg-black\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Furies Orbit Server | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- font Awesome -->
         <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Theme style -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/AdminLTE.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
 </head>
 <body class=\"bg-blue\">

        <div class=\"form-box\" id=\"login-box\">
            <div class=\"header\">Sign In</div>
            <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_orbit_security_check");
        echo "\" method=\"post\" id=\"login\">
                <div class=\"body bg-gray\">
                    <div class=\"form-group\">
                        <input type=\"text\"  class=\"form-control\" placeholder=\"User ID\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
                    </div>          
                    <div class=\"form-group\">
                        <input type=\"checkbox\" name=\"remember_me\"/> Remember me
                    </div>
                </div>
                <div class=\"footer\">                                                               
                    <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>  
                    
                                  
                </div>
            </form>

            <div class=\"margin text-center\">
              
                <br/>
                         </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <!-- Bootstrap -->
";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe17ce1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_0") : $this->env->getExtension('assets')->getAssetUrl("js/fe17ce1_part_1_bootstrap_1.js");
            // line 54
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
        // line 56
        echo "      
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 75,  297 => 8,  293 => 7,  289 => 6,  284 => 5,  281 => 4,  225 => 77,  223 => 74,  879 => 609,  865 => 607,  861 => 606,  857 => 604,  843 => 602,  839 => 601,  835 => 599,  821 => 597,  817 => 596,  814 => 595,  800 => 593,  796 => 592,  793 => 591,  779 => 589,  775 => 588,  772 => 587,  758 => 585,  754 => 584,  751 => 583,  737 => 581,  733 => 580,  730 => 579,  716 => 577,  712 => 576,  709 => 575,  689 => 573,  685 => 572,  682 => 571,  668 => 569,  664 => 568,  661 => 567,  647 => 565,  643 => 564,  639 => 562,  625 => 560,  621 => 559,  618 => 558,  604 => 556,  600 => 555,  218 => 176,  190 => 150,  58 => 20,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 74,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 56,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 27,  47 => 9,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 24,  56 => 9,  50 => 10,  28 => 8,  43 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 16,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 7,  29 => 3,  21 => 1,  38 => 12,  26 => 6,  24 => 3,  35 => 14,  31 => 13,  25 => 4,  19 => 1,  98 => 31,  93 => 28,  88 => 53,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 133,  176 => 64,  173 => 126,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 54,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
