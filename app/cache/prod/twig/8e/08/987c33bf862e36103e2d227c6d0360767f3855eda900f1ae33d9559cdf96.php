<?php

/* DvdWorldWebsiteBundle:Default:cart.html.twig */
class __TwigTemplate_8e08987c33bf862e36103e2d227c6d0360767f3855eda900f1ae33d9559cdf96 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Koszyk";
    }

    // line 4
    public function block_carousel($context, array $blocks = array())
    {
        // line 5
        echo "    <h3>Moje zakupy</h3>
    <br />
    <br />
";
    }

    // line 9
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 10
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 11
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/css/form/view.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/js/form/view.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
        .tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse; }
        .tftable th {font-size:12px;background-color:#e6983b;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:center;}
        .tftable tr {background-color:#ffffff;}
        .tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a; text-align: center}
        .tftable tr:hover {background-color:#ffff99;}


        #orderButton:hover {
            background: #e6983b;
            background-image: -webkit-linear-gradient(top, #e6983b, #f5cc9d);
            background-image: -moz-linear-gradient(top, #e6983b, #f5cc9d);
            background-image: -ms-linear-gradient(top, #e6983b, #f5cc9d);
            background-image: -o-linear-gradient(top, #e6983b, #f5cc9d);
            background-image: linear-gradient(to bottom, #e6983b, #f5cc9d);
            text-decoration: none;
        }

        #contactForm {
            display: none;
        }
        .wrapper {
            text-align: right;
        }

        .button {
            position: absolute;
            top: 50%;
        }

    </style>
    <script>
        \$(document).ready(function(){
            \$(\"#orderButton\").click(function(){
                \$(\"#contactForm\").slideDown(\"slow\");
                \$('html, body').animate({
                    scrollTop: \$(\"#contactForm\").offset().top
                }, 1500);
            });
        });
    </script>
    <table class=\"tftable\" border=\"1\" >
        <tr>
            <th>Obrazek</th>
            <th>Nazwa filmu</th>
            <th>Data dodania <br />
                do koszyka</th>
            <th>Cena</th>
        </tr>
        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieSets"]) ? $context["movieSets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["movieSet"]) {
            // line 63
            echo "             <tr>
                 <td>
                     <img width=\"50\" height=\"75\" src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getImgUrl", array()), "html", null, true);
            echo "\">
                 </td>
                 <td>
                     <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getTitle", array()), "html", null, true);
            echo "</a>
                 </td>
                 <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["movieSet"], "orderTime", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getPrice", array()), "html", null, true);
            echo " zł</td>
                 <td>
                    <a href=\"#\"><img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/delete-item.png"), "html", null, true);
            echo "\"
                         onclick=\"eraseCookie('";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["movieSet"], "nameOfCookie", array()), "html", null, true);
            echo "')\"
                            width=\"28\" height=\"28\"/></a>
                 </td>
             </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        <tr>
            <td colspan=\"3\"><b>Razem: </b></td>
            <td><b>";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo " zł</b></td>
        </tr>
    </table>
    <br />
    <div class=\"wrapper\">
        <button id=\"orderButton\" type=\"button\" ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["orderButtonStatus"]) ? $context["orderButtonStatus"] : null), "html", null, true);
        echo " >Kupuję</button>
    </div>



    <div id=\"contactForm\">
    <img id=\"top\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/form/top.png"), "html", null, true);
        echo "\" alt=\"\">
    <div id=\"form_container\">

        <form method=\"POST\" action=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("movieOrder");
        echo "\">
            <div class=\"form_description\">
                <h2>Forma kontaktowa</h2>
                <p>Proszę wpisać swoje dane personalne dla nawiązywania kontaktu przez pracownika firmy</p>
            </div>
            <ul >

                <li id=\"li_1\" >
                    <label class=\"description\" for=\"element_1\">Imię i nazwisko: </label>
\t\t<span>
\t\t\t<input id=\"element_1_1\" name= \"name\" class=\"element text\" maxlength=\"255\" size=\"8\" value=\"\"/>
\t\t\t<label>Imię</label>
\t\t</span>
\t\t<span>
\t\t\t<input id=\"element_1_2\" name= \"surname\" class=\"element text\" maxlength=\"255\" size=\"14\" value=\"\"/>
\t\t\t<label>Nazwisko</label>
\t\t</span>
                </li>\t\t<li id=\"li_2\" >
                    <label class=\"description\" for=\"element_2\">Email: </label>
                    <div>
                        <input id=\"element_2\" name=\"email\" class=\"element text medium\" type=\"text\" maxlength=\"255\"  value=\"\"/>
                    </div>
                </li>\t\t<li id=\"li_3\" >
                    <label class=\"description\" for=\"element_3\">Telefon komórkowy: </label>
                    <div>
                        <input id=\"element_3\" name=\"phoneNumber\" class=\"element text medium\" type=\"text\" maxlength=\"255\" value=\"\"/>
                    </div>
                </li>\t\t<li id=\"li_4\" >
                    <label class=\"description\" for=\"element_4\">Komentarz: </label>
                    <div>
                        <textarea id=\"element_4\" name=\"comment\" class=\"element textarea medium\"></textarea>
                    </div>
                </li>

                <li class=\"buttons\">
                    <input type=\"hidden\" name=\"movies_id\" value=\"
                    ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieSets"]) ? $context["movieSets"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["movieSet"]) {
            // line 132
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getId", array()), "html", null, true);
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo ";";
            }
            // line 133
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    \" />

                    <input id=\"saveForm\" class=\"button_text\" type=\"submit\" name=\"submit\" value=\"Płacę\" onclick=\"deleteAllCookies()\" />
                </li>
            </ul>
        </form>
    </div>
    <img id=\"bottom\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/form/bottom.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>

";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 141,  261 => 134,  247 => 133,  241 => 132,  224 => 131,  185 => 95,  179 => 92,  170 => 86,  162 => 81,  158 => 79,  147 => 74,  143 => 73,  138 => 71,  134 => 70,  127 => 68,  121 => 65,  117 => 63,  113 => 62,  60 => 12,  55 => 11,  52 => 10,  47 => 9,  40 => 5,  37 => 4,  31 => 3,);
    }
}
