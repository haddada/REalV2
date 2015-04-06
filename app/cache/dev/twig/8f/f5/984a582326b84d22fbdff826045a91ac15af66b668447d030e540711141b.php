<?php

/* DCSRatingBundle:Rating:rating.html.twig */
class __TwigTemplate_8ff5984a582326b84d22fbdff826045a91ac15af66b668447d030e540711141b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:showRate", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
