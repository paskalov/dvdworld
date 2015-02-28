<?php

/* DvdWorldWebsiteBundle::base.html.twig */
class __TwigTemplate_f8827db32d202bb1f3f7a8bcc722255716f0afc34ec7257d088afe9845334b74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'genreList' => array($this, 'block_genreList'),
            'carousel' => array($this, 'block_carousel'),
            'movieBlock' => array($this, 'block_movieBlock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/js/cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://code.jquery.com/jquery-1.10.2.js\"></script>
    <script src=\"http://code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#counter\").text(getNumberOfCookies());
        });
    </script>

</head>

<body>

<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Strona domowa</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li id=\"shopping_cart_circle\">
                    <div id=\"counter\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\">0</a></div>
                </li>
                <li id=\"shopping_cart_image\">
                    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\">
                    <img height=\"32\" width=\"32\"
                         src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/shopping-cart-icon.png"), "html", null, true);
        echo "\"/>
                    </a>
                </li>
                    ";
        // line 65
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 66
            echo "                        <li>
                            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\">Moje filmy</a>
                        </li>
                         <li>
                            <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj</a>
                        </li>
                    ";
        } else {
            // line 76
            echo "                      <li>
                        <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Rejestracja</a>
                      </li>
                      <li>
                        <a href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a>
                      </li>
                ";
        }
        // line 83
        echo "            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">

    <div class=\"row\">
        ";
        // line 94
        $this->displayBlock('genreList', $context, $blocks);
        // line 106
        echo "
        <div class=\"col-md-9\">
            ";
        // line 108
        $this->displayBlock('carousel', $context, $blocks);
        // line 144
        echo "        ";
        $this->displayBlock('movieBlock', $context, $blocks);
        // line 145
        echo "
        </div>
    </div>

</div>
<!-- /.container -->

<div class=\"container\">

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; www.dvdworld.com</p>
            </div>
        </div>
    </footer>

</div>

<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Strona domowa";
    }

    // line 94
    public function block_genreList($context, array $blocks = array())
    {
        // line 95
        echo "                <div class=\"col-md-3\">
                    <p class=\"lead\">Wybierz gatunek:</p>
                    <div class=\"list-group\">
                        <select class=\"list-group-item\"  onchange='window.location.href=this.value'>
                            ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 100
            echo "                                <option value=\"http://localhost/website/web/app_dev.php/genres/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "getGenre", array()), "html", null, true);
            echo "/movies\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "getGenre", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                        </select>
                    </div>
                </div>
        ";
    }

    // line 108
    public function block_carousel($context, array $blocks = array())
    {
        // line 109
        echo "            <div class=\"row carousel-holder\">
                <div class=\"col-md-12\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("singleMovie", array("id" => 5));
        echo "\">
                                    <img class=\"slide-image\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/carousel/rocky.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"item\">
                                <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("singleMovie", array("id" => 8));
        echo "\">
                                    <img class=\"slide-image\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/carousel/the_illusionist.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"item\">
                                <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("singleMovie", array("id" => 2));
        echo "\">
                                    <img class=\"slide-image\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/carousel/the_last_samurai.jpeg"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"glyphicon glyphicon-chevron-left\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"glyphicon glyphicon-chevron-right\"></span>
                        </a>
                    </div>
                </div>
            </div>
            ";
    }

    // line 144
    public function block_movieBlock($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 144,  298 => 130,  294 => 129,  287 => 125,  283 => 124,  276 => 120,  272 => 119,  260 => 109,  257 => 108,  250 => 102,  239 => 100,  235 => 99,  229 => 95,  226 => 94,  220 => 14,  210 => 170,  183 => 145,  180 => 144,  178 => 108,  174 => 106,  172 => 94,  159 => 83,  153 => 80,  147 => 77,  144 => 76,  138 => 73,  132 => 70,  124 => 67,  121 => 66,  119 => 65,  113 => 62,  108 => 60,  102 => 57,  93 => 51,  60 => 21,  56 => 20,  50 => 17,  44 => 14,  39 => 12,  35 => 11,  23 => 1,);
    }
}
