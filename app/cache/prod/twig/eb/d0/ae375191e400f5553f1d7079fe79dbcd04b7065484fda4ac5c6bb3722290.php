<?php

/* realEstateBundle:Offre:offreQuartier.html.twig */
class __TwigTemplate_ebd0ae375191e400f5553f1d7079fe79dbcd04b7065484fda4ac5c6bb3722290 extends Twig_Template
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
        echo "

    <div class=\"row\">
            <div class=\"col-lg-2 col-md-12 filter-label\">
              <label>Villes</label>
            </div>
            <div class=\"col-lg-9 col-md-11\">
            <div class=\"row row-condensed filters-columns\">



          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>
        
          </div>
        <div class=\"filters-more collapse\">
          <hr>
          <div class=\"row row-condensed filters-columns\">

          ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 39
            echo "
            <div class=\"col-md-4\">
              <label class=\"media checkbox text-truncate\" title=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\">
                <input type=\"checkbox\" name=\"neighborhood\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\" class=\"pull-left\">
                ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "
              </label>
            </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </div>
          </div>
          </div>
   
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:offreQuartier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  101 => 43,  97 => 42,  93 => 41,  89 => 39,  85 => 38,  73 => 29,  69 => 28,  65 => 27,  57 => 22,  53 => 21,  49 => 20,  41 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
