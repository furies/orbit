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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_bootstrap_1.js");
            // line 54
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_bootstrap.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_charisma_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_init-chart_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_init_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery-ui-1.10.3_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery-ui-1.10.3.min_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.autogrow-textarea_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.cookie_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.dataTables.min_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.history_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.iphone.toggle_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.min_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.noty_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.raty.min_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.scrolly.min_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.scrollzer.min_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_17") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_jquery.uploadify-3.1.min_18.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_18") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_skel-layers.min_19.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "fe17ce1_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1_19") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1_part_1_skel.min_20.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fe17ce1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe17ce1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe17ce1.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        return array (  220 => 56,  92 => 54,  88 => 53,  59 => 27,  53 => 24,  38 => 12,  33 => 10,  28 => 8,  19 => 1,);
    }
}
