<?php

/* realEstateBundle:Offre:Filtres/typeLogement.html.twig */
class __TwigTemplate_81d484b491990d888092b301eb896968b2fca9fb739cba91e6be7e346ca9cc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'filtreTypeImmob' => array($this, 'block_filtreTypeImmob'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('filtreTypeImmob', $context, $blocks);
    }

    public function block_filtreTypeImmob($context, array $blocks = array())
    {
        // line 2
        echo "  <div class=\"col-3 text-right col-middle\">
            <div class=\"h4 text-light\">
                  Type de propriété
            </div>
  </div>

  <div class=\"col-lg-9 form-select col-middle\">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"typeimmob\" class=\"filtre-select\">
                  <option value=\"-1\">type immobilier</option>
                  <option value=\"Appartement\">Appartement</option>
                  <option value=\"Villa\">Villa</option>
                  <option value=\"Studio\">Studio</option>
                  <option value=\"Maison\">Maison</option>
                  <option value=\"Entrepot\">Entrepot</option>              
              </select>
            </div>
          </div> 
        </div>
  </div>
      
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/typeLogement.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
