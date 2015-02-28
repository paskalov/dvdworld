<?php

/* DvdWorldWebsiteBundle:Default:confirmation.html.twig */
class __TwigTemplate_64142a6c708bffac8151e211949ac069a3ab6dd02f1df99b738a93bb0c513f07 extends Twig_Template
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
        echo "Dziękujemy";
    }

    // line 4
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Dziękujemy za dokonanie zakupów.</h2>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  41 => 5,  36 => 4,  30 => 3,);
    }
}
