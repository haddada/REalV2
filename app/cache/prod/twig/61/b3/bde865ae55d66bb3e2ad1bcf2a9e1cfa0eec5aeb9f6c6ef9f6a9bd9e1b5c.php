<?php

/* realEstateBundle:Offre:shortHeader.html.twig */
class __TwigTemplate_61b3bde865ae55d66bb3e2ad1bcf2a9e1cfa0eec5aeb9f6c6ef9f6a9bd9e1b5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Offre:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"header\" class=\"airbnb-header\">

  <div class=\"header--sm show-sm\">
  <a href=\"#\" data-prevent-default=\"\" class=\"link-reset burger--sm\">
    <i class=\"icon icon-reorder icon-rausch\"></i>
  </a>
  <div class=\"title--sm text-center\">
      <button class=\"btn btn-block search-btn--sm search-modal-trigger\">
        <i class=\"icon icon-search icon-gray\"></i>
        <span class=\"search-placeholder--sm\">
          Où allez-vous ?
        </span>
      </button>
  </div>
  <div class=\"action--sm\"></div>
  <nav class=\"nav--sm\"></nav>
  <div class=\"search-modal-container\"></div>
</div>


  <div class=\"regular-header clearfix hide-sm\">
  <a href=\"/\" class=\"header-belo pull-left\"></a>

  <ul class=\"nav pull-left hide-sm list-unstyled search-form-container\" id=\"search-form-header\">
  <li id=\"header-search\" class=\"search-bar-wrapper pull-left medium-right-margin\">
    <form action=\"/s\" id=\"search-form\" class=\"search-form\">
      <div class=\"search-bar\">
        <i class=\"icon icon-search icon-gray h4\"></i>
        <input placeholder=\"Où allez-vous ?\" autocomplete=\"off\" name=\"location\" class=\"location\" type=\"text\">
        <input name=\"source\" value=\"hdr\" type=\"hidden\">
      </div>
    </form>
  </li>
    <li class=\"browse-container pull-left hide-md\">
      <a class=\"link-reset header-browse-trigger\" href=\"#\" data-prevent-default=\"\" id=\"header-browse-trigger\">
  Naviguer
   <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
</a>


    </li>
</ul>


  <ul class=\"nav pull-right help-menu list-unstyled\">
  <li id=\"header-help-menu\" class=\"help-menu-container pull-left large-right-margin hide-md\" data-dropdown-sticky=\"true\">
    <a id=\"header-help-trigger\" class=\"help-toggle link-reset header-help-trigger\" href=\"/help\">
      Aide
      <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
    </a>
    
  </li>
    <li class=\"list-your-space pull-left\">
      <a id=\"list-your-space\" class=\"btn btn-special list-your-space-btn\" href=\"/rooms/new\">
        Publiez votre annonce
      </a>
    </li>
</ul>
<div id=\"help-panel-modal\">
</div>


  <ul class=\"nav pull-right logged-out list-unstyled medium-right-margin\">
  <li id=\"sign_up\" class=\"pull-left medium-right-margin\">
    <a data-signup-modal=\"\" data-header-view=\"true\" href=\"/signup_login?redirect_params[action]=index&amp;redirect_params[controller]=search&amp;redirect_params[guests]=2&amp;redirect_params[location]=New+York%2C+NY&amp;redirect_params[ne_lat]=40.74806499382262&amp;redirect_params[ne_lng]=-73.86441276903406&amp;redirect_params[path_location]=New-York--NY&amp;redirect_params[price_min]=45&amp;redirect_params[search_by_map]=true&amp;redirect_params[ss_id]=56kqlda2&amp;redirect_params[sw_lat]=40.57834400473412&amp;redirect_params[sw_lng]=-74.06148002977625&amp;redirect_params[zoom]=12\" class=\"link-reset\" rel=\"nofollow\">
      Inscription
    </a>
  </li>
  <li id=\"login\" class=\"pull-left\">
    <a data-login-modal=\"\" href=\"/login?redirect_params[action]=index&amp;redirect_params[controller]=search&amp;redirect_params[guests]=2&amp;redirect_params[location]=New+York%2C+NY&amp;redirect_params[ne_lat]=40.74806499382262&amp;redirect_params[ne_lng]=-73.86441276903406&amp;redirect_params[path_location]=New-York--NY&amp;redirect_params[price_min]=45&amp;redirect_params[search_by_map]=true&amp;redirect_params[ss_id]=56kqlda2&amp;redirect_params[sw_lat]=40.57834400473412&amp;redirect_params[sw_lng]=-74.06148002977625&amp;redirect_params[zoom]=12\" class=\"link-reset\" rel=\"nofollow\">
      Connexion
    </a>
  </li>
</ul>


  <ul class=\"nav pull-right logged-in list-unstyled medium-right-margin\">
  <li class=\"user-item pull-left medium-right-margin\">
    <a class=\"link-reset header-avatar-trigger\" id=\"header-avatar-trigger\" href=\"#\">
      <div class=\"media-photo media-round user-profile-image\"></div>
      <span class=\"value_name\">
        Utilisateur
      </span>
      <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
    </a>
    
  </li>
  <li id=\"inbox-item\" class=\"inbox-item pull-left\">
    <a href=\"#\" data-href=\"/inbox\" rel=\"nofollow\" class=\"no-crawl link-reset inbox-icon\">
      <i class=\"alert-count fade text-center\">0</i>
      <i class=\"icon icon-envelope icon-gray\">
        <span class=\"text-hide hide\">
          Boîte de réception
        </span>
      </i>
    </a>
  </li>
</ul>

</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:shortHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  11 => 1,);
    }
}
