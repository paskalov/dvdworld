<?php

/* DvdWorldWebsiteBundle:Default:about.html.twig */
class __TwigTemplate_8bfc32574a85744a1cde7312ff628f21d201f5641947cfeff55600103657aa4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'genreList' => array($this, 'block_genreList'),
            'carousel' => array($this, 'block_carousel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DvdWorldWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "O nas";
    }

    // line 4
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  36 => 4,  30 => 3,);
    }
}
