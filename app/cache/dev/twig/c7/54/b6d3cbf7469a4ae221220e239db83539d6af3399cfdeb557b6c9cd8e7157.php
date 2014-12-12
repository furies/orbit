<?php

/* furiesorbitBundle:customers:newcustomer.html.twig */
class __TwigTemplate_c754b6d3cbf7469a4ae221220e239db83539d6af3399cfdeb557b6c9cd8e7157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("furiesorbitBundle::baselayout.html.twig");

        $this->blocks = array(
            'pageheading' => array($this, 'block_pageheading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "furiesorbitBundle::baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageheading($context, array $blocks = array())
    {
        // line 5
        echo "
                    <h1>
                        New Customer
                    </h1>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t\t <div class=\"row\">
                        <!-- left column -->
                        <div class=\"col-md-6\">
                            <!-- general form elements -->
                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Customer Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
";
        // line 23
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "furiesorbitBundle::bootstrap_3_layout.html.twig"));
        // line 24
        echo "                              




";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "doe"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "doe"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>



                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "doorno"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "doorno"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address1"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address1"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pin"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pin"), 'widget');
        echo "
                                        \t \t </div>

                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "custType"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "custType"), 'widget');
        echo "
                                        \t \t </div>
                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mobile"), 'widget');
        echo "
                                        \t \t </div>
                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget');
        echo "
                                        \t \t </div>
                                  \t         \t<div class=\"form-group\">
    \t\t\t\t\t\t\t   \t\t ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cust_category"), 'label');
        echo "
   \t\t\t\t\t\t\t\t\t ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cust_category"), 'widget');
        echo "
                                        \t \t </div>
                                  \t         \t<div class=\"form-group\">
   \t\t\t\t\t\t\t\t\t ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "savec"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                                        \t \t </div>


";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                            </div><!-- /.box -->
\t\t\t</div><!--/.col-md-6>
\t\t</div><!--row>
\t\t";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle:customers:newcustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 100,  211 => 96,  205 => 93,  201 => 92,  195 => 89,  191 => 88,  185 => 85,  181 => 84,  175 => 81,  171 => 80,  164 => 76,  160 => 75,  153 => 71,  149 => 70,  142 => 66,  138 => 65,  131 => 61,  127 => 60,  120 => 56,  116 => 55,  109 => 51,  105 => 50,  98 => 46,  94 => 45,  85 => 39,  81 => 38,  74 => 34,  70 => 33,  63 => 29,  56 => 24,  54 => 23,  43 => 14,  40 => 13,  32 => 5,  29 => 4,);
    }
}
