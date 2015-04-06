<?php

/* realEstateBundle:Default:header.html.twig */
class __TwigTemplate_5cdcb42e33b88a30a268ab3ee6f32113b6345b05aa1db76093581e4ba0b1baa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'offreCard8' => array($this, 'block_offreCard8'),
            'offreCard' => array($this, 'block_offreCard'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"airbnb-header shift-with-hiw\" id=\"header\">

<div class=\"regular-header clearfix hide-sm\">


  <ul class=\"nav pull-right list-unstyled\">
    
    <li class=\"list-your-space pull-left\">
      <a id=\"list-your-space\" class=\"btn btn-special\" href=\"/#\">
        Publiez votre annonce
      </a>
    </li>
  </ul>

 <ul class=\"nav pull-right logged-out list-unstyled medium-right-margin\">
    <li id=\"sign_up\" class=\"pull-left medium-right-margin\">
      <a data-signup-modal=\"\" data-header-view=\"true\" href=\"/#\" class=\"link-reset\" rel=\"nofollow\">
        Inscription
      </a>
    </li>
    <li id=\"login\" class=\"pull-left\">
      <a data-login-modal=\"\" href=\"/#\" class=\"link-reset\" rel=\"nofollow\">
        Connexion
      </a>
    </li>
  </ul>

</div>
</div>


 

<div class=\"p1-hero-wrapper shift-with-hiw\">
  <div id=\"hero\" data-native-currency=\"EUR\">
    <ul class=\"list-unstyled hide\" id=\"slideshow\">
      <li class=\"active\">
        <img alt=\"Croatia-887a17b9994536f0d95bfd3f43ed664c\" src=\"https://a2.muscache.com/airbnb/static/landing_pages/pretzel/stills/croatia-887a17b9994536f0d95bfd3f43ed664c.jpg\" width=\"100%\">
      </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero1-a68542704634a6f7594b158aa8d4a0cd.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero2-414b89b87b11fb3fbaa3915810bf6a72.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a1.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero3-5064a585b15385b2b1d15a3fb682e722.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a2.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero4-3862c8fa8ac2925dd1ce76a9bc6c4962.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero5-662b34b371029c13f549a2e554b8a046.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero6-1b571925beb84a386bd4873a41992f21.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero7-118352cd807abf230459940cc8246f91.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero8-7187849aff939a535678d94c25d3c88c.jpg\" width=\"100%\">
        </li>
        <li>
          <img data-image-url=\"https://a1.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero9-211ff1a336a72c0eadaa9d1ba1ab7828.jpg\" width=\"100%\">
        </li>
    </ul>
      <video class=\"video-playing\" loop=\"loop\" preload=\"auto\" id=\"pretzel-video\">
        <source src=\"//a0.muscache.com/airbnb/static/Croatia-P1-1.mp4\" type=\"video/mp4\">
        <source src=\"//a0.muscache.com/airbnb/static/Croatia-P1-0.webm\" type=\"video/webm\">
      </video>
  </div>

  <div class=\"search-area text-center\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"intro-area va-middle\">
        <h1 id=\"tagline\" class=\"uppercase text-jumbo text-contrast row-space-1\">Bienvenue à la maison</h1>
        <div class=\"col-sm-12 col-center\">
          <div id=\"subtitle\" class=\"h4 text-contrast row-space-4\">
            Louez des logements uniques auprès d'hôtes locaux dans plus de 190 pays.
          </div>

          <div class=\"show-sm\">
            <div class=\"input-addon\" id=\"sm-search-field\">
              <span class=\"input-stem input-large fake-search-field\">
                Où voulez-vous aller&nbsp;?
              </span>
              <i class=\"input-suffix btn btn-primary icon icon-full icon-search\"></i>
            </div>
          </div>

          <a href=\"#\" class=\"btn hide-sm btn-contrast btn-large btn-semi-transparent how-it-works\">
            Mode d'emploi
          </a>
          <a href=\"#discovery-container\" class=\"mobile-discovery-arrow row-space-top-2 hide-md hide-lg\">
            <i class=\"icon icon-chevron-down icon-white icon-size-2\"></i>
          </a>
        </div>
        <div class=\"p1-hero-search-form hide-sm\">
          <div class=\"col-12\">

          <form id=\"search_form\" method=\"Post\" action=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("offre_search");
        echo "\" >
          <div class=\"search-form-input-wrapper\" data-reactid=\".0.0\">
          <div class=\"location-wrapper\" data-reactid=\".0.0.0\">
          <span class=\"input-placeholder-group\" data-reactid=\".0.0.0.0\">

          <input class=\"form-inline location input-large input-contrast\" aria-autocomplete=\"both\" aria-owns=\"menu-1\" autocomplete=\"off\" value=\"\" placeholder=\"Où voulez-vous aller&nbsp;?\" name=\"gouvernorat\" id=\"location\"  type=\"text\">

          </span>

          <p id=\"enter_location_error_message\" class=\"bad hide\" >Merci d'entrer une gouvernorat</p>
          </div><span class=\"input-placeholder-group\" >

          </span>

         <button type=\"submit\" class=\"search-button form-inline btn btn-primary btn-large\" id=\"submit_location\" data-reactid=\".0.2\" >Rechercher</button></form></div>
        </div>
      </div>

    </div>
  </div>
</div>

</section>
</div>

";
    }

    // line 136
    public function block_content($context, array $blocks = array())
    {
        // line 137
        echo "<div class=\"panel panel-dark\">
  <div id=\"discovery-container\">
    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"upcoming-trips\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Votre voyage à venir
        </h2>
      </div>
      <div class=\"discovery-tiles\">
        <div class=\"homepage-module\"></div>
      </div>
    </div>

    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"discovery-saved-searches\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Démarrez votre nouvelle aventure
        </h2>
      </div>
      <div class=\"discovery-tiles\">
        <div class=\"homepage-module\"></div>
      </div>
    </div>

    <div class=\"discovery-section hide page-container-responsive page-container-no-padding\" id=\"weekend-recommendations\">
    </div>

    <div class=\"discovery-section page-container-responsive page-container-no-padding row-space-6\" id=\"discover-recommendations\">
      <div class=\"section-intro text-center row-space-6 row-space-top-8\">
        <h2 class=\"row-space-1 strong\">
          Explorez le monde
        </h2>
        <p class=\"text-lead\">
          Découvrez où voyagent les gens, à travers le monde entier.
        </p>
      </div>
      <div class=\"discovery-tiles\">
        
<div class=\"row\">
";
        // line 176
        $this->displayBlock('offreCard8', $context, $blocks);
        // line 178
        echo "
";
        // line 179
        $this->displayBlock('offreCard', $context, $blocks);
        // line 181
        echo "

  <div class=\"col-sm-12 text-center row-space-4 row-space-top-4 hide-sm\">
    <a class=\"btn btn-large show-more hide\">En voir plus</a>
  </div>
</div>



       

";
    }

    // line 176
    public function block_offreCard8($context, array $blocks = array())
    {
    }

    // line 179
    public function block_offreCard($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 179,  241 => 176,  226 => 181,  224 => 179,  221 => 178,  219 => 176,  178 => 137,  175 => 136,  145 => 106,  42 => 5,  39 => 4,  11 => 2,);
    }
}
