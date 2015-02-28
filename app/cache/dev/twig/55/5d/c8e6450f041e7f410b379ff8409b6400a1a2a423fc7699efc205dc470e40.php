<?php

/* DvdWorldWebsiteBundle:Default:movie_not_found.html.twig */
class __TwigTemplate_555dc8e6450f041e7f410b379ff8409b6400a1a2a423fc7699efc205dc470e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle:Default:movies_by_genre.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'movieBlock' => array($this, 'block_movieBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DvdWorldWebsiteBundle:Default:movies_by_genre.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Brak rezultatów wyszukiwania";
    }

    // line 4
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 5
        echo "   <font color=\"red\"><h4 align=\"center\" >Brak rezultatów wyszukiwania</h4></font>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:movie_not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 3,);
    }
}
