<?php

/* realEstateBundle:Offre:OffreCard.html.twig */
class __TwigTemplate_48995d83a2f5260287dd7099465a00bc1cdf980d9ebc6a9361e0bdb88c5ab495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Offre:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'filtreTypeImmob' => array($this, 'block_filtreTypeImmob'),
            'filterQuartier' => array($this, 'block_filterQuartier'),
            'formSearch' => array($this, 'block_formSearch'),
            'formChambre' => array($this, 'block_formChambre'),
            'formEtat' => array($this, 'block_formEtat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Offre:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_filtreTypeImmob($context, array $blocks = array())
    {
        // line 5
        echo "
  <form class=\"col-lg-9 form-select\">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"room_types\" class=\"filtre-select\">
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
      </form>
      
";
    }

    // line 34
    public function block_filterQuartier($context, array $blocks = array())
    {
        // line 35
        echo "
    <div class=\"row\">
            <div class=\"col-lg-2 col-md-12 filter-label\">
              <label>Villes</label>
            </div>
            <div class=\"col-lg-9 col-md-11\">
            <div class=\"row row-condensed filters-columns\">



          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 0, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 1, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>

          <div class=\"col-md-4\">
            <label class=\"media checkbox text-truncate\" title=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\">
              <input type=\"checkbox\" name=\"neighborhood\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "\" class=\"pull-left\">
              ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["villes"]) ? $context["villes"] : null), 2, array(), "array"), "ville", array()), "html", null, true);
        echo "
            </label>
          </div>
        
          </div>
        <div class=\"filters-more collapse\">
          <hr>
          <div class=\"row row-condensed filters-columns\">

          ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 72
            echo "
            <div class=\"col-md-4\">
              <label class=\"media checkbox text-truncate\" title=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\">
                <input type=\"checkbox\" name=\"neighborhood\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "\" class=\"pull-left\">
                ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo "
              </label>
            </div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "          </div>
          </div>
    </div>
  ";
    }

    // line 88
    public function block_formSearch($context, array $blocks = array())
    {
        // line 89
        echo "    <style>
    .airbnb-header .search-form1 .search-bar {
  position: relative;
  }
    .airbnb-header .search-form1 {
        margin: 0;
        position: relative;
        z-index: 2;
      }
    .airbnb-header .search-form1 .location{
        width: 249px;
        padding: 4px 4px 4px 30px;
        line-height: 21px;
        height: 21px;
        box-sizing: content-box;

    }
    .airbnb-header .search-form1 .search-bar .icon-search {
        position: absolute;
        top: 4px;
        left: 9px;
}
        
    </style>
   <form action=\"/search\" id=\"search-form\" class=\"search-form1\" method=\"Post\">
      <div class=\"search-bar\">
        <i class=\"icon icon-search icon-gray h4\"></i>
        <input type=\"text\"
               placeholder=\"Où allez-vous ?\"
               autocomplete=\"off\"
               name=\"gouvernorat\"
               value=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["gouvernorat"]) ? $context["gouvernorat"] : null), "html", null, true);
        echo "\"
               class=\"location\" 
               onkeypress=\"return runScript(event)\"/>
       
      </div>
    </form>

    <script>

    function runScript(e) {
    url=\"/offre/search?gouvernorat=\"+\$('.location').val();
    if (e.keyCode == 13) {
         window.location = url;
        return false;
      }
    }
    </script>
  ";
    }

    // line 139
    public function block_formChambre($context, array $blocks = array())
    {
        // line 140
        echo "  <form class=\"col-lg-9 \">
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"min_bedrooms\" >
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
      </form>
      ";
    }

    // line 166
    public function block_formEtat($context, array $blocks = array())
    {
        // line 167
        echo "      <form class=\"col-lg-9 form-select\" >
        <div class=\"row row-condensed\">
          <div class=\"col-md-4 col-sm-12 row-space-1\">
            <div class=\"select select-block\">
              <select name=\"Etat\">
                <option value=\"-1\">Etat</option>
                <option value=\"Mauvai\">mauvaise</option>
                <option value=\"Bon\">bonne</option>
                <option value=\"Nouveau\">Nouveau</option>
                <option value=\"ancien\">ancienne</option>
              </select>
            </div>
          </div>

          
          
        </div>
      </form>
      ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:OffreCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 167,  256 => 166,  228 => 140,  225 => 139,  203 => 120,  170 => 89,  167 => 88,  160 => 81,  149 => 76,  145 => 75,  141 => 74,  137 => 72,  133 => 71,  121 => 62,  117 => 61,  113 => 60,  105 => 55,  101 => 54,  97 => 53,  89 => 48,  85 => 47,  81 => 46,  68 => 35,  65 => 34,  43 => 5,  40 => 4,  11 => 2,);
    }
}
