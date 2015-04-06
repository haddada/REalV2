<?php

/* realEstateBundle:Offre:Filtres/ville.html.twig */
class __TwigTemplate_bab3173f1f52fbd2ebb3d0e05ad591f34213775760c101bc1918b49370e45e58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'filterQuartier' => array($this, 'block_filterQuartier'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  

";
        // line 3
        $this->displayBlock('filterQuartier', $context, $blocks);
    }

    public function block_filterQuartier($context, array $blocks = array())
    {
        // line 4
        echo " <div class=\"col-3 text-right col-middle\">
            <div class=\"h4 text-light\">
                  Villes
            </div>
  </div>

<div class=\"col-lg-9 form-gouvern col-middle\">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
               <select name=\"Villes\" required>
              ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 16
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
            </select>
            </div>
          </div>
        </div>
</div>


<script>

\$(\".form-ville\").click(function(){
   str =\$( \".form-ville\" ).serialize() ;

    \$.get(\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("offre_search_code");
        echo "?\"+str,function( data ) {
         \$( \".code\" ).html( data );           
    })

})

</script>

   
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/ville.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  58 => 17,  47 => 16,  43 => 15,  30 => 4,  24 => 3,  20 => 1,);
    }
}
