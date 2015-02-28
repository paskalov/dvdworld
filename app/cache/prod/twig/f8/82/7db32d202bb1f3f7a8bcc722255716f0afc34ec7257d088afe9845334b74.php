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
                <li>
                    <a href=\"#\" onclick=\"getNumberOfCookies()\">Services</a>
                <li>
                    <a href=\"#\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class=\"container\">

    <div class=\"row\">
        ";
        // line 81
        $this->displayBlock('genreList', $context, $blocks);
        // line 93
        echo "
        <div class=\"col-md-9\">
            ";
        // line 95
        $this->displayBlock('carousel', $context, $blocks);
        // line 125
        echo "        ";
        $this->displayBlock('movieBlock', $context, $blocks);
        // line 126
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
<!-- /.container -->

<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 152
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

    // line 81
    public function block_genreList($context, array $blocks = array())
    {
        // line 82
        echo "                <div class=\"col-md-3\">
                    <p class=\"lead\">Wybierz gatunek:</p>
                    <div class=\"list-group\">
                        <select class=\"list-group-item\"  onchange='window.location.href=this.value'>
                            ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 87
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
        // line 89
        echo "                        </select>
                    </div>
                </div>
        ";
    }

    // line 95
    public function block_carousel($context, array $blocks = array())
    {
        // line 96
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
                                <img class=\"slide-image\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/step-pic-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/step-pic-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img class=\"slide-image\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/step-pic-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
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

    // line 125
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
        return array (  265 => 125,  248 => 112,  242 => 109,  236 => 106,  224 => 96,  221 => 95,  214 => 89,  203 => 87,  199 => 86,  193 => 82,  190 => 81,  184 => 14,  174 => 152,  146 => 126,  143 => 125,  141 => 95,  137 => 93,  135 => 81,  113 => 62,  108 => 60,  102 => 57,  93 => 51,  60 => 21,  56 => 20,  50 => 17,  44 => 14,  39 => 12,  35 => 11,  23 => 1,);
    }
}
