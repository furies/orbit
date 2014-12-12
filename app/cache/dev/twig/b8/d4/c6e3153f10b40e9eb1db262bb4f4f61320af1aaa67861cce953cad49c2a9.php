<?php

/* furiesorbitBundle::formfields.html.twig */
class __TwigTemplate_b8d4c6e3153f10b40e9eb1db262bb4f4f61320af1aaa67861cce953cad49c2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field_row', $context, $blocks);
    }

    public function block_field_row($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"form-group\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle::formfields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  29 => 3,  20 => 1,  160 => 72,  156 => 71,  149 => 67,  145 => 66,  138 => 62,  134 => 61,  127 => 57,  123 => 56,  116 => 52,  112 => 51,  105 => 47,  101 => 46,  94 => 42,  90 => 41,  83 => 37,  79 => 36,  70 => 30,  66 => 29,  58 => 24,  45 => 13,  42 => 12,  34 => 4,  31 => 3,  26 => 2,);
    }
}
