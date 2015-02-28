<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ffff85fea4898fa9c482b2476dbca8aad1edb9395d8d7750a4820198c1e4220c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        form {
            margin: 2.5%;
        }
        form div {
            display: block;
            margin: 0px;
        }
        form div>label {
            float: left;
            width: 20%;
        }
        form div input {
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
        form div>input:focus {
            box-shadow: 0 0 5px #e6c100;
        }
        form div>input[type=\"submit\"] {
            margin-left: 222px;
            width: 15%;
        }
    </style>
";
        // line 39
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  31 => 4,  28 => 3,);
    }
}
