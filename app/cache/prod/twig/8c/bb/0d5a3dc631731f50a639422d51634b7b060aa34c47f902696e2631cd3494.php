<?php

/* realEstateBundle:Default:index.html.twig */
class __TwigTemplate_8cbb0d5a3dc631731f50a639422d51634b7b060aa34c47f902696e2631cd3494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
<head>   
    <link href=\"https://a0.muscache.com/airbnb/static/packages/common_o2.1-ec3a181fa47f7eeeccce237530c4bdf9.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://a2.muscache.com/airbnb/static/p1/main-pretzel-d13973fd70f8c67a5804eef0ff3f7513.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
</head>

<body class=\"home_view v2 simple-header p1\">

";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "</body>
</html>";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  44 => 10,  39 => 15,  37 => 13,  34 => 12,  32 => 10,  21 => 1,);
    }
}
