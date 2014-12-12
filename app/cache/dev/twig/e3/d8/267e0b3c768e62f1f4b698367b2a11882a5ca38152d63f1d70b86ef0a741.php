<?php

/* furiesorbitBundle:Default:index.html.twig */
class __TwigTemplate_e3d8267e0b3c768e62f1f4b698367b2a11882a5ca38152d63f1d70b86ef0a741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("furiesorbitBundle::baselayout.html.twig");

        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "furiesorbitBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
