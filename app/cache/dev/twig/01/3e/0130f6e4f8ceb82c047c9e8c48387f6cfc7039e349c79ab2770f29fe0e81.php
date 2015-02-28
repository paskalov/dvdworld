<?php

/* DvdWorldWebsiteBundle:Default:contact.html.twig */
class __TwigTemplate_013e0130f6e4f8ceb82c047c9e8c48387f6cfc7039e349c79ab2770f29fe0e81 extends Twig_Template
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
        echo "Kontakt";
    }

    // line 4
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        #map-canvas {
            width: 500px;
            height: 400px;
        }
    </style>
    <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id=\"map-canvas\"></div>

";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:contact.html.twig";
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
