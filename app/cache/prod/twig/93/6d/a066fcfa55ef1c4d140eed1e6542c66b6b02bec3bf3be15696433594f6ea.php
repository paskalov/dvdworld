<?php

/* DvdWorldWebsiteBundle:Default:movies_by_genre.html.twig */
class __TwigTemplate_936da066fcfa55ef1c4d140eed1e6542c66b6b02bec3bf3be15696433594f6ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'carousel' => array($this, 'block_carousel'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["chosenGenre"]) ? $context["chosenGenre"] : null), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_carousel($context, array $blocks = array())
    {
        // line 9
        echo "    <h3 align=\"center\">Wybrany gatunek: ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["chosenGenre"]) ? $context["chosenGenre"] : null)), "html", null, true);
        echo "</h3>
    <br />
    <br />
";
    }

    // line 14
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row\">
        ";
        // line 16
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
            // line 17
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 18
                echo "                <div class=\"row\">
            ";
            }
            // line 20
            echo "            <div class=\"col-sm-4 col-lg-4 col-md-4\">
                <div class=\"thumbnail\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($context["movie"], "getId", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getImgUrl", array()), "html", null, true);
            echo "\" alt=\"\"></a>
                    <div class=\"caption\">
                        <h4 class=\"pull-right\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getPrice", array()), "html", null, true);
            echo " zł </h4>
                        <h4><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($context["movie"], "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "getTitle", array()), "html", null, true);
            echo "</a>
                        </h4>
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["movie"], "getDescription", array()), 0, 100), "html", null, true);
            echo "...</p>
                    </div>
                </div>
            </div>
            ";
            // line 31
            if ((($this->getAttribute($context["loop"], "index", array()) % 3) == 0)) {
                // line 32
                echo "                </div>
            ";
            }
            // line 34
            echo "        ";
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
        // line 35
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:movies_by_genre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  117 => 34,  113 => 32,  111 => 31,  104 => 27,  97 => 25,  93 => 24,  86 => 22,  82 => 20,  78 => 18,  75 => 17,  58 => 16,  55 => 15,  52 => 14,  43 => 9,  40 => 8,  33 => 6,  30 => 5,);
    }
}
