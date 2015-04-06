<?php

/* realEstateBundle:Offre:Filtres/code.html.twig */
class __TwigTemplate_c92c125f5e82377cbea1b9f5f08f8233e7c6227844261f3d89510087f0b382db extends Twig_Template
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

  
<div class=\"col-3 text-right col-middle\">
    <div class=\"h4 text-light\">
          Code postal
    </div>
</div>

<div class=\"col-lg-9 form-code col-middle\">
      <div class=\"row row-condensed\">
        <div class=\"col-md-4 col-sm-12 row-space-1\">
          <div class=\"select select-block\">
            <select name=\"code\" required >
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["codes"]) ? $context["codes"] : $this->getContext($context, "codes")));
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 16
            echo "              <option value=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "codepostal", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["code"], "codepostal", array()), "html", null, true);
            echo "</option>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
            </select>
          </div>
        </div>
      </div>
</div>

<script>
/*
  \$(\".form-code\").click(function(){
     str =\$( \".form-code\" ).serialize() ;

      \$.get(\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("offre_search_code");
        echo "?\"+str,function( data ) {
           \$( \".id\" ).html( data );           
      })

  })
*/
</script>";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  50 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}
