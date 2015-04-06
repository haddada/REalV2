<?php

/* realEstateBundle:Offre:Filtres/Chambre.html.twig */
class __TwigTemplate_ad540de489a5481b1237fbe67ba0f3ba84c72ffd63129a244ff6c9bd992beb57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formChambre' => array($this, 'block_formChambre'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('formChambre', $context, $blocks);
    }

    public function block_formChambre($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"col-3 text-right col-middle\">
            <div class=\"h4 text-light\">
                  Chambres
            </div>
  </div>

  <div class=\"col-lg-9 col-middle\">
        <div class=\"row row-condensed \">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"nbrpiece\" >
                <option value=\"-1\">Chambres</option>
                  <option value=\"1\">1 chambre</option>
                  <option value=\"2\">2 chambres</option>
                  <option value=\"3\">3 chambres</option>
                  <option value=\"4\">4 chambres</option>
                  <option value=\"5\">5 chambres</option>
                  <option value=\"6\">6 chambres</option>
                  <option value=\"7\">7 chambres</option>
                  <option value=\"8\">8 chambres</option>
                  <option value=\"9\">9 chambres</option>
                  <option value=\"10\">10 chambres</option>
              </select>
            </div>
          </div>
        </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:Filtres/Chambre.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
