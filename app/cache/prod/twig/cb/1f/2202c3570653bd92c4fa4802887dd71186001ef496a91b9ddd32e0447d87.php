<?php

/* DvdWorldWebsiteBundle:Default:index.html.twig */
class __TwigTemplate_cb1f2202c3570653bd92c4fa4802887dd71186001ef496a91b9ddd32e0447d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'movieBlock' => array($this, 'block_movieBlock'),
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
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 7
                echo "        <div class=\"row\">
    ";
            }
            // line 9
            echo "    <div class=\"col-sm-4 col-lg-4 col-md-4\">
        <div class=\"thumbnail\">
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($context["movie"], "getId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getImgUrl", array()), "html", null, true);
            echo "\" alt=\"\"></a>
            <div class=\"caption\">
                <h4 class=\"pull-right\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getPrice", array()), "html", null, true);
            echo " zł </h4>
                <h4><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($context["movie"], "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getTitle", array()), "html", null, true);
            echo "</a>
                </h4>
                <p>";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["movie"], "getDescription", array()), 0, 100), "html", null, true);
            echo "...</p>
            </div>
        </div>
    </div>
            ";
            // line 20
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 21
                echo "            </div>
                ";
            }
            // line 23
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " </div>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  93 => 23,  89 => 21,  87 => 20,  80 => 16,  73 => 14,  69 => 13,  62 => 11,  58 => 9,  54 => 7,  51 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
