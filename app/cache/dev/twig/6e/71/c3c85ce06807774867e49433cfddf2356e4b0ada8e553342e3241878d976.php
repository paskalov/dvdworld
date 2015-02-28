<?php

/* DvdWorldWebsiteBundle:Default:movie.html.twig */
class __TwigTemplate_6e71c3c85ce06807774867e49433cfddf2356e4b0ada8e553342e3241878d976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'carousel' => array($this, 'block_carousel'),
            'genreList' => array($this, 'block_genreList'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array()), "html", null, true);
    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
    }

    // line 6
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 8
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 9
        echo "    <link href=\"http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css\" rel=\"stylesheet\">
    <style>
        #cartButton {
            background: url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/btn_koszyk.png"), "html", null, true);
        echo ");
            border: 0;
            margin-left: 110%;
            display: block;
            height: 22px;
            width: 120px;
        }
        .ui-widget-header,.ui-state-default {
            background: #000000;
            border: 1px solid black;
            color:  #e6651d;
            font-weight: bold;
        }
        .ui-widget-content {
            background: #C0C0C0;
        }
        .ui-dialog-titlebar-close {
            visibility: hidden;
        }
        textarea, h4 {
            margin-left: 35%;
        }
        #add-review-button  {
            margin-left: 67%;
        }
        textarea#styled {
            width: 600px;
            height: 120px;
            border: 3px solid #cccccc;
            padding: 5px;
            font-family: Tahoma, sans-serif;
            background-position: bottom right;
            background-repeat: no-repeat;
        }
        .hiddenFrame {
            margin: 0;
            margin-left: 25%;
            padding: 0;
            border: none;
            width: 90%;
            height: 50px;
        }
    </style>
    <script>
        \$(function() {
            \$( \"#dialog\" ).dialog({
                autoOpen: false,
                buttons: {
                    OK: function(event, ui) { window.location.href = \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"; }
                },
                title: \"Koszyk\"
            });
            \$( \"#cartButton\" ).click(function() {
                \$( \"#dialog\" ).dialog( \"open\" );
            });
            \$('#add-review-button').click(function() {
                \$('#review').hide();
            });
        });
        function setbg(color) {
            document.getElementById(\"styled\").style.background=color;
        }

    </script>
    <table class=\"tg\" width=\"1000\">
        <tr>
            <td><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getImgUrl", array())), "html", null, true);
        echo "\">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </td>
            <td align=\"left\">
               <font size=\"15\">
                   <p align=\"center\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array()), "html", null, true);
        echo "</p>
               </font>
                <b>Сena: </b> ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getPrice", array()), "html", null, true);
        echo " zł <br />
                <b>Aktorzy: </b>
                ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getFullname", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 88
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "getFullname", array()), "html", null, true);
            echo "
                    ";
            // line 89
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                // line 90
                echo "                        ,
                    ";
            }
            // line 92
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                <br />
                <b>Długość filmu: </b>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getLength", array()), "html", null, true);
        echo " min <br />
                <b>Rok: </b>";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["movieReleaseYear"]) ? $context["movieReleaseYear"] : $this->getContext($context, "movieReleaseYear")), "html", null, true);
        echo " <br />
                <b>Gatunek: </b>
                ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getGenre", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 98
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moviesByGenre", array("genre" => $this->getAttribute($context["genre"], "getGenre", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["genre"], "getGenre", array())), "html", null, true);
            echo "</a>
                    ";
            // line 99
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                // line 100
                echo "                        ,
                    ";
            }
            // line 102
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </br>
                </br>
                <b>Opis: </b><br />
                ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getDescription", array()), "html", null, true);
        echo "
                <br />
                <br />
            </td>
        </tr>
    </table>

    ";
        // line 113
        if ((isset($context["doesUserHavePermissionToWatch"]) ? $context["doesUserHavePermissionToWatch"] : $this->getContext($context, "doesUserHavePermissionToWatch"))) {
            // line 114
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/html5lightbox/html5lightbox.js"), "html", null, true);
            echo "\"></script>
        <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getVidUrl", array()), "html", null, true);
            echo "\" style=\"margin-left: 100%\"
            class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getTitle", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/play.png"), "html", null, true);
            echo "\" height=\"50\" width=\"50\">Oglądaj online!
        </a>
    ";
        } else {
            // line 120
            echo "        <button  id=\"cartButton\" align=\"right\" onclick=\"createCookie(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getId", array()), "html", null, true);
            echo ", 7)\"></button>
    ";
        }
        // line 122
        echo "    <div id=\"dialog\">Film został dodany do koszyka</div>

    ";
        // line 125
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 126
            echo "    <div id=\"review\">
        <form action=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("addReview");
            echo "\" method=\"post\" target=\"hiddenFrame\">
            <h4>Zostaw recenzję:</h4>
            <textarea name=\"review\" id=\"styled\"  onfocus=\"setbg('#e5fff3');\" onblur=\"setbg('white')\"></textarea>
            <input type=\"hidden\" name=\"movieId\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "getId", array()), "html", null, true);
            echo "\">
            <input id=\"add-review-button\" class=\"internalButton\" type=\"submit\" value=\"Dodaj\">
        </form>
     </div>
        <iframe name=\"hiddenFrame\" class=\"hiddenFrame\"></iframe>
    ";
        }
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 130,  295 => 127,  292 => 126,  289 => 125,  285 => 122,  279 => 120,  273 => 117,  269 => 116,  265 => 115,  260 => 114,  258 => 113,  248 => 106,  243 => 103,  229 => 102,  225 => 100,  223 => 99,  216 => 98,  199 => 97,  194 => 95,  190 => 94,  187 => 93,  173 => 92,  169 => 90,  167 => 89,  162 => 88,  145 => 87,  140 => 85,  135 => 83,  127 => 78,  106 => 60,  55 => 12,  50 => 9,  47 => 8,  42 => 6,  37 => 5,  31 => 4,);
    }
}
