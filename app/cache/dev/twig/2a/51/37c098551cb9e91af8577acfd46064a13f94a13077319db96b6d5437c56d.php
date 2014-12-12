<?php

/* furiesorbitBundle:customers:newcustomercreated.html.twig */
class __TwigTemplate_2a5137c098551cb9e91af8577acfd46064a13f94a13077319db96b6d5437c56d extends Twig_Template
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
                    
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo " \t<div class=\"col-md-6\">
\t\t\t <div class=\"box box-info\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-bullhorn\"></i>
                                    <h3 class=\"box-title\">Status Message</h3>
                                </div><!-- /.box-header -->
 \t\t\t\t\t<div class=\"callout callout-info\">
                                        \t<h4>Customer Created!</h4>
                                       \t\t<h5>New Customer created succesfully. Customer id is : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["customerid"]) ? $context["customerid"] : $this->getContext($context, "customerid")), "html", null, true);
        echo "</h5>
\t                                </div>
\t\t\t</div>
\t</div>
\t\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle:customers:newcustomercreated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  41 => 12,  38 => 11,  32 => 5,  29 => 4,);
    }
}
