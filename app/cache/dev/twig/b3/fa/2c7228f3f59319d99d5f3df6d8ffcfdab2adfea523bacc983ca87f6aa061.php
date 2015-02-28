<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b3fa2c7228f3f59319d99d5f3df6d8ffcfdab2adfea523bacc983ca87f6aa061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'genreList' => array($this, 'block_genreList'),
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

    // line 3
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 4
    public function block_carousel($context, array $blocks = array())
    {
    }

    // line 5
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        .fos_user_registration_register {
            margin: 2.5%;
        }
        .fos_user_registration_register div {
            display: block;
            margin: 0px;
         }
        .fos_user_registration_register div>label {
            float: left;
            width: 30%;
            text-align: right;
            padding-right: 10px;
            margin-top: 10px;
        }
        .fos_user_registration_register div>input {
            border: 1px solid #DADADA;
            height: 30px;
            margin-bottom: 16px;
            margin-right: 6px;
            margin-top: 2px;
            outline: 0 none;
            padding: 3px 3px 3px 5px;
            width: 30%;
            font-size: 12px;
            line-height:15px;
            box-shadow: inset 0px 1px 4px #ECECEC;
            -moz-box-shadow: inset 0px 1px 4px #ECECEC;
            -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
        }
        .fos_user_registration_register div>input:focus {
            box-shadow: 0 0 5px #e6c100;
        }
        .fos_user_registration_register div>input[type=\"submit\"] {
            margin-left: 320px;
            width: 10%;
        }
    </style>
    ";
        // line 44
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  43 => 6,  40 => 5,  35 => 4,  30 => 3,);
    }
}
