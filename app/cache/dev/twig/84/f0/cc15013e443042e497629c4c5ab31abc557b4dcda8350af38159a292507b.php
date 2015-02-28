<?php

/* DvdWorldWebsiteBundle:Default:user_orders.html.twig */
class __TwigTemplate_84f0cc15013e443042e497629c4c5ab31abc557b4dcda8350af38159a292507b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
    }

    // line 4
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 5
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 6
        echo "    <style xmlns=\"http://www.w3.org/1999/html\">
        .order-table {
            display: table;
            margin-left: 32%;
        }
        .order-row {
            display: table-row;
        }
        .order-cell {
            display: table-cell;
            border-width: thin;
            padding-left: 5px;
            padding-right: 5px;
        }
        .order-movie-img {
            width: 150px;
            height: 222px;
        }

        .image-block {
            position:relative;
            display:block;
            overflow:hidden;
            float:left;
        }

        .description {
            background-color:#e6651d;
            position:absolute;
            top:-222px;
            width: 150px;
            left:0;
            color:black;
            padding:10%;
            height:100%;
            transition: all 0.5s ease-in-out;
        }
        .description .date u{
            margin-left: 25px;
        }

        .description span {
            display:block;
        }
        .image-block:hover .description, .image-block:focus .description{
            top:0;
        }
        a {
            color: black;
        }
        #container_button {
            background-color: #252525;
            width: 60px;
            height: 60px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 0px;
            margin-top: 50px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            -webkit-box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
            -moz-box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
            box-shadow: inset 0px 2px 0px #585858, 1px 1px 0px #000, 2px 2px 5px #000;
        }
        #hole {
            background-color: #151515;
            width: 46.5px;
            height: 46.5px;
            margin-left: auto;
            margin-right: auto;
            top: 7.5px;
            position: relative;
            -webkit-border-radius: 23.25px;
            -moz-border-radius: 23.25px;
            border-radius: 23.25px;
            -webkit-box-shadow: 1px 1px 0px #5d5d5d;
            -moz-box-shadow: 1px 1px 0px #5d5d5d;
            box-shadow: 1px 1px 0px #5d5d5d;
        }
        #button {
            width: 45px;
            height: 45px;
            margin-left: auto;
            margin-right: auto;
            overflow: auto;
            cursor: pointer;
            top: -5px;
            position: relative;
            background-image: linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
            background-image: -o-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
            background-image: -moz-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
            background-image: -webkit-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
            background-image: -ms-linear-gradient(bottom, rgb(82,79,82) 0%, rgb(134,134,134) 57%);
            -webkit-border-radius: 150px;
            -moz-border-radius: 150px;
            border-radius: 150px;
            -webkit-box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
            -moz-box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
            box-shadow: inset 0px 2px 0px #a8a8a8, 0px 2px 0px #2a2a2a, 0px 3px 0px #2a2a2a, 0px 4px 0px #2a2a2a, 0px 5px 0px #2a2a2a, 0px 6px 0px #2a2a2a, 0px 7px 0px #2a2a2a, 0px 8px 0px #2a2a2a, 0px 9px 0px #2a2a2a, 0px 10px 0px #2a2a2a, 10px 20px 10px #000;
            -webkit-transition: all .2s;
            -moz-transition: all .2s;
            transition: all .2s;
        }
        #button:active {
            top: 5px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: inset 0px 2px 0px #a8a8a8;
        }
        #triangle {
            width: 0px;
            height: 0px;
            margin-left: 50%;
            margin-top: 50%;
            left: -4px;
            top: -7px;
            position: relative;
            border-top: 7.5px solid transparent;
            border-bottom: 7.5px solid transparent;
            border-left: 12px solid #22a9db;
            z-index: 2;
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            transition: all .3s;
        }
        #button:hover #triangle { border-left: 12px solid #45bde9 }
        #button:active #triangle { border-left: 12px solid #e94545 }
        #lighter_triangle {
            width: 0px;
            height: 0px;
            margin-left: 50%;
            margin-top: 50%;
            left: -3.6px;
            top: -6.4px;
            position: absolute;
            border-top: 7.5px solid transparent;
            border-bottom: 7.5px solid transparent;
            border-left: 7.5px solid #43c0ee;
            z-index: 1;
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            transition: all .3s;
        }
        #button:hover #lighter_triangle { border-left: 7.5px solid #8bdaf7 }
        #button:active #lighter_triangle { border-left: 7.5px solid #f78b8b }
        #darker_triangle {
            width: 0px;
            height: 0px;
            margin-left: 50%;
            margin-top: 50%;
            left: -3.6px;
            top: -7.06px;
            position: absolute;
            border-top: 7.5px solid transparent;
            border-bottom: 7.5px solid transparent;
            border-left: 12px solid #0a7da7;
            z-index: 1;
            -webkit-transition: all .3s;
            -moz-transition: all .3s;
            transition: all .3s;
        }
        #button:hover #darker_triangle { border-left: 12px solid #1d98c5 }
        #button:active #darker_triangle { border-left: 12px solid #c51d1d }
    </style>
    <div class=\"tableArea\">
    <div class=\"order-table\">
        <div class=\"order-row\">
        ";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 175
            echo "            ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 4) == 0)) {
                // line 176
                echo "                </div>
                <br />
                <div class=\"order-row\">
            ";
            }
            // line 180
            echo "            <div class=\"order-cell\">
                <div class=\"image-block\">
                <img class=\"order-movie-img\" src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getImgUrl", array())), "html", null, true);
            echo "\">
                <div class=\"description\">
                    <span class=\"title\" align=\"center\"><b>
                            <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getTitle", array()), "html", null, true);
            echo "</a>
                        </b></span>
                    <span class=\"date\">Data zwrotu:<br />
                        <u>";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDateOfReturn", array()), "h:i:s"), "html", null, true);
            echo "</u><br />
                        <u>";
            // line 189
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDateOfReturn", array()), "d-m-Y"), "html", null, true);
            echo "</u></span>
                    <div id=\"container_button\">
                        <div id=\"hole\">
                            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getVidUrl", array()), "html", null, true);
            echo "\"
                               class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getTitle", array()), "html", null, true);
            echo "\">
                            <div id=\"button\">
                                <div id=\"triangle\"></div>
                                <div id=\"lighter_triangle\"></div>
                                <div id=\"darker_triangle\"></div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            ";
            // line 205
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 206
                echo "                </div>
            ";
            }
            // line 208
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "    </div>
    </div>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/html5lightbox/html5lightbox.js"), "html", null, true);
        echo "\"></script>
    <button class=\"internalButton\" style=\"margin-left: 60%; margin-top: 50px;\">Historia wypożyczeń</button>
    <script>
        \$(document).ready(function(){
            \$(\".table\").hide();
            \$(\".internalButton\").click(function(){
                \$(\".table\").slideDown(\"slow\");
                \$('html, body').animate({
                    scrollTop: \$(\".table\").offset().top
                }, 1500);
            });
        });
    </script>
            <div class=\"container\" style=\"margin-top: 15%\">
                <table class=\"table\" >
                    <thead>
                    <tr>
                        <th></th>
                        <th>Nazwa filmu</th>
                        <th>Data wypożyczenia</th>
                        <th>Data wzrotu</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiredOrders"]) ? $context["expiredOrders"] : $this->getContext($context, "expiredOrders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 236
            echo "                            <tr>
                            <td><img width=\"50\" height=\"75\"src=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getImgUrl", array())), "html", null, true);
            echo "\"/></td>
                            <td><a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getMovie", array()), "getTitle", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDateOfOrder", array()), "h:i:s d-m-Y"), "html", null, true);
            echo "</td>
                            <td style=\"color: red\">";
            // line 240
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDateOfReturn", array()), "h:i:s d-m-Y"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                    </tbody>
                </table>
        </div>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:user_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 243,  358 => 240,  354 => 239,  348 => 238,  344 => 237,  341 => 236,  337 => 235,  310 => 211,  306 => 209,  292 => 208,  288 => 206,  286 => 205,  271 => 193,  267 => 192,  261 => 189,  257 => 188,  249 => 185,  243 => 182,  239 => 180,  233 => 176,  230 => 175,  213 => 174,  43 => 6,  40 => 5,  35 => 4,  30 => 3,);
    }
}
