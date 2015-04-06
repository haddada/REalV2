<?php

/* realEstateBundle:Offre:offreCards.html.twig */
class __TwigTemplate_21ffc1e9b34e6baf2488d1ce67bd572db633f11445fbd9f5e56c389b3361a14f extends Twig_Template
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
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "<div class=\"col-sm-12 col-md-6 row-space-2\">

  
      <div data-lat=\"40.684013166194646\"
           data-lng=\"-73.98322038869327\"
           data-name=\"Sun-filled room in Boerum Hill\"
           data-url=\"/rooms/4540756?guests=2&amp;s=eNQN\"
           data-user=\"1243559\"
           data-price=\"71&euro;\"
           class=\"listing\"
           itemscope itemtype=\"http://schema.org/Enumeration\">
      
        <div class=\"panel-image listing-img\">
          <a href=\"/offre/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "/show\" class=\"media-photo media-cover\">
            <div class=\"listing-img-container media-cover text-center\">
                                                                  
                                                          
              <img itemprop=\"image\" data-current=\"0\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "urlImage", array()), "html", null, true);
            echo "?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\" class=\"img-responsive-height\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "\"  >
            </div>
          </a>
      
      
          <div class=\"panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label\">
            <div>
              <sup class=\"h6 text-contrast\"></sup>
              <span class=\"h3 price-amount\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "payement", array()), "html", null, true);
            echo "</span>
              <sup class=\"h6 text-contrast\">&euro;</sup>
               
            </div>
      
          </div>
      
            
      
          <div class=\"panel-overlay-top-right wl-social-connection-panel\">
            <span class=\"rich-toggle wish_list_button wishlist-button\"
                  data-img=\"https://a0.muscache.com/ic/pictures/66670616/6a2e75e7_original.jpg?interpolation=lanczos-none&amp;size=x_medium&amp;output-format=jpg&amp;output-quality=70\"
                  data-name=\"Sun-filled room in ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
                  data-address=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\"
                  data-hosting_id=\"4540756\">
              <input type=\"checkbox\"
                     id=\"wishlist-widget-4540756\"
                     name=\"wishlist-widget-4540756\"
                     data-for-hosting=\"4540756\">
              <label for=\"wishlist-widget-4540756\" class=\"hide-sm\">
                <i class=\"icon icon-heart icon-rausch icon-size-2 rich-toggle-checked\"></i>
                <i class=\"icon icon-heart wishlist-heart-unchecked icon-size-2 rich-toggle-unchecked\"></i>
                <i class=\"icon icon-heart-alt icon-white icon-size-2\"></i>
              </label>
            </span>
      
      
          </div>
      
        </div>
      
        <div class=\"panel-body panel-card-section\">
          <div class=\"media\">
              <a href=\"/users/show/1243559\"
                 class=\"pull-right media-photo media-round card-profile-picture card-profile-picture-offset\">
                <img src=\"https://a2.muscache.com/ic/users/1243559/profile_pic/1417104530/original.jpg?interpolation=lanczos-none&amp;crop=w:w;*,*&amp;crop=h:h;*,*&amp;resize=68:*&amp;output-format=jpg&amp;output-quality=70\" alt=\"\">
              </a>
            <a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" target=\"listing_4540756\" class=\"text-normal\">
              <div title=\"Sun-filled room in ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "\" class=\"h5 listing-name text-truncate row-space-top-1\">
                Sun-filled room in ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "Adresse", array()), "ville", array()), "html", null, true);
            echo "
              </div>
            </a>
            <div class=\"text-muted listing-location text-truncate\"><a href=\"/rooms/4540756?guests=2&amp;s=eNQN\" class=\"text-normal link-reset\">
  ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "
</a>
</div>
          </div>
      
        </div>
    </div>
    
    </div>

  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    

";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:offreCards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 83,  119 => 71,  112 => 67,  108 => 66,  80 => 41,  76 => 40,  61 => 28,  48 => 20,  41 => 16,  26 => 3,  22 => 2,  19 => 1,);
    }
}
