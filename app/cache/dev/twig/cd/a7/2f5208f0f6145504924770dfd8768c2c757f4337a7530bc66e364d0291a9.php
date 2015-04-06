<?php

/* realEstateBundle:Offre:index.html.twig */
class __TwigTemplate_cda72f5208f0f6145504924770dfd8768c2c757f4337a7530bc66e364d0291a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formSearch' => array($this, 'block_formSearch'),
            'filtreTypeImmob' => array($this, 'block_filtreTypeImmob'),
            'formChambre' => array($this, 'block_formChambre'),
            'formEtat' => array($this, 'block_formEtat'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>

<!--[if lt IE 8]>

<html lang=\"fr\"
      
      xmlns:fb=\"http://ogp.me/ns/fb#\"
      class=\"ie\">

<![endif]-->

<!--[if IE 8]>

<html lang=\"fr\"
      
      xmlns:fb=\"http://ogp.me/ns/fb#\"
      class=\"ie ie8\">

<![endif]-->

<!--[if IE 9]>

  <html lang=\"fr\"
      
      xmlns:fb=\"http://ogp.me/ns/fb#\"
      class=\"ie ie9\">

<![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->
<html lang=\"fr\"
      
      xmlns:fb=\"http://ogp.me/ns/fb#\">

<!--<![endif]-->

  <head>
    <link rel=\"dns-prefetch\" href=\"//maps.googleapis.com\">
    <link rel=\"dns-prefetch\" href=\"//maps.gstatic.com\">
    <link rel=\"dns-prefetch\" href=\"//mts0.googleapis.com\">
    <link rel=\"dns-prefetch\" href=\"//mts1.googleapis.com\">

    <!--[if IE]><![endif]-->
    <meta charset=\"utf-8\">

  
      <link href=\"https://a0.muscache.com/airbnb/static/packages/common_o2.1-1699f01de9b9752b9bbf01de246dd944.css\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
   

    <link href=\"https://a0.muscache.com/airbnb/static/packages/map_search-8417e512f93f6a06f2fc15374325ce74.css\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    

    <meta id=\"csrf-param-meta-tag\" name=\"csrf-param\" content=\"authenticity_token\"/>
    <meta id=\"csrf-token-meta-tag\" name=\"csrf-token\" content=\"\"/>

    <script>

      var sherlock_firstbyte = Number(new Date());
</script>

    <title>Locations de vacances et locations de courte durée à New York - Airbnb</title>

    




      <meta property=\"og:image\" content=\"https://a0.muscache.com/airbnb/static/logos/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png\">

    <meta name=\"twitter:widgets:csp\" content=\"on\">




    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"image_src\" href=\"https://a0.muscache.com/airbnb/static/logos/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png\">
    <link rel=\"search\" type=\"application/opensearchdescription+xml\" href=\"/opensearch.xml\" title=\"Airbnb\">

    <!--[if lte IE 9]>
      <script src=\"https://a0.muscache.com/airbnb/static/packages/libs_ie_support-b79daf6f8ced9b9ee1d841fbcc88d2a7.js\" type=\"text/javascript\"></script>
      <link href=\"https://a0.muscache.com/airbnb/respond-proxy.html\" id=\"respond-proxy\" rel=\"respond-proxy\" />
      <link href=\"/respond.proxy.gif\" id=\"respond-redirect\" rel=\"respond-redirect\" />
      <script src=\"/respond.proxy.js?cb=1\"></script>
    <![endif]-->

    <link rel=\"apple-touch-icon\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-76x76-29b6a802ddcbcada3e98c1336b078985.png\" />
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-76x76-29b6a802ddcbcada3e98c1336b078985.png\" />
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-120x120-f755fee8bec28959299b265351f0dee2.png\" />
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-152x152-51479ae43400e03b95a33f5119c65262.png\" />
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-180x180-830c8479ce4d0a3c9df95fdfeddf6faa.png\" />
<link rel=\"icon\" sizes=\"180x180\" href=\"https://a0.muscache.com/airbnb/static/icons/apple-touch-icon-180x180-830c8479ce4d0a3c9df95fdfeddf6faa.png\" />
<link rel=\"shortcut icon\" sizes=\"76x76\" type=\"image/x-icon\" href=\"https://a0.muscache.com/airbnb/static/logotype_favicon-21cc8e6c6a2cca43f061d2dcabdf6e58.ico\" />


  </head>
  <body class=\"\">
    <noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-46MK\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>



    <meta content=\"{&quot;flags&quot;:{&quot;name&quot;:&quot;flags&quot;,&quot;value&quot;:{&quot;can_see_community&quot;:2,&quot;og_publish&quot;:16,&quot;has_wishlisted&quot;:32,&quot;update_cached&quot;:64,&quot;revert_to_admin&quot;:128,&quot;facebook_connected&quot;:256,&quot;erf_override&quot;:512,&quot;has_search&quot;:1024,&quot;search_help_dropdown&quot;:2048,&quot;has_dates&quot;:4096,&quot;can_see_help_panel&quot;:8192,&quot;can_send_profile_messages&quot;:32768,&quot;just_logged_in&quot;:65536,&quot;has_been_host&quot;:131072,&quot;should_drop_pellet&quot;:262144,&quot;is_active_host&quot;:1048576,&quot;can_see_meetups&quot;:134217728,&quot;should_drop_sift_pellet&quot;:268435456,&quot;can_see_groups&quot;:536870912,&quot;has_verified_phone&quot;:1073741824,&quot;has_profile_pic&quot;:2147483648}},&quot;roles&quot;:{&quot;name&quot;:&quot;roles&quot;,&quot;value&quot;:{&quot;is_aircrew&quot;:8,&quot;is_content_manager&quot;:1048576,&quot;is_stats_admin&quot;:16777216}},&quot;user_attributes&quot;:{&quot;name&quot;:&quot;_user_attributes&quot;}}\" id=\"_bootstrap-user-attr-cookies\" />
<meta content=\"{&quot;inspectlet_on_guest&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:1,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;inspectlet_active&quot;,&quot;buckets&quot;:null}]},&quot;p2_room_types_checked&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;checked&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null}]},&quot;p2_remarketing_test&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:2,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;show_remarketing_ad&quot;,&quot;buckets&quot;:null}]},&quot;p2_map_marker_variants&quot;:{&quot;subject&quot;:&quot;bev&quot;,&quot;buckets&quot;:3,&quot;percent_exposed&quot;:100,&quot;treatments&quot;:[{&quot;name&quot;:&quot;control&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;number&quot;,&quot;buckets&quot;:null},{&quot;name&quot;:&quot;price&quot;,&quot;buckets&quot;:null}]}}\" id=\"_bootstrap-erf\" />


    <div class=\"smart-banner\">
  <a href=\"#\" class=\"icon icon-remove icon-size-1 pull-left link-reset banner-close\"></a>
  <a href=\"#\" data-href=\"http://r.airbnb.com/l.c.hsjS\" class=\"pull-left app-icon install-link action-link\"></a>
  <div class=\"banner-content\">
    <div class=\"banner-title\">
      <strong class=\"icon-dark-gray ios-item\">
        Airbnb pour iOS
      </strong>
      <strong class=\"icon-dark-gray android-item hide\">
        Airbnb pour Android
      </strong>
      <br class=\"android-item hide\">
      <div class=\"star-rating\">
        <i class=\"icon icon-beach icon-star\"></i>
        <i class=\"icon icon-beach icon-star\"></i>
        <i class=\"icon icon-beach icon-star\"></i>
        <i class=\"icon icon-beach icon-star\"></i>
        <i class=\"icon icon-star icon-light-gray\"></i>
      </div>
      <small class=\"banner-reviews icon-gray ios-item\">(4,920)</small>
      <small class=\"banner-reviews icon-gray android-item hide\">(45,686)</small>
    </div>
    <div class=\"banner-buttons text-right\">
      <a class=\"link-reset btn btn-primary btn-small banner-button install-link action-link\"
         href=\"#\" data-href=\"http://r.airbnb.com/l.c.hsjS\">
        Installer
      </a>
      <a class=\"btn btn-small banner-button open-in-app-button action-link\"
         href=\"airbnb://\"
         data-href=\"airbnb://\"
         data-backup-href=\"http://r.airbnb.com/l.c.hsjS\">
         Ouvrir
      </a>
    </div>
  </div>
</div>


    <div id=\"header\" class=\"airbnb-header\">

  <div class=\"header--sm show-sm\">
  <a href=\"#\" data-prevent-default class=\"link-reset burger--sm\">
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

  <ul class=\"nav pull-left hide-sm list-unstyled search-form-container\"
    id=\"search-form-header\">
  <li id=\"header-search\" class=\"search-bar-wrapper pull-left medium-right-margin\">
   ";
        // line 171
        $this->displayBlock('formSearch', $context, $blocks);
        // line 173
        echo "

  </li>
    <li class=\"browse-container pull-left hide-md\">
      <a class=\"link-reset header-browse-trigger\"
   href=\"#\"
   data-prevent-default
   id=\"header-browse-trigger\">
  Naviguer
   <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
</a>
<ul role=\"tooltip\"
    class=\"tooltip tooltip-top-left dropdown-menu list-unstyled\"
    data-trigger=\"#header-browse-trigger\"
    aria-hidden=\"true\"
    data-sticky=\"true\">
  <li>
    <a href=\"/wishlists/popular\"
       class=\"link-reset menu-item header-browse-popular\">
      Wish Lists populaires
    </a>
  </li>
  <li>
    <a href=\"/wishlists/friends\"
       class=\"link-reset menu-item header-browse-friends\">
      Amis
    </a>
  </li>
  <li>
    <a href=\"/locations\"
       class=\"link-reset menu-item header-browse-neighborhoods\">
      Guide des Quartiers
    </a>
  </li>
  <li class=\"groups hide\">
    <a href=\"#\"
       data-href=\"/groups\"
       rel=\"nofollow\"
       class=\"no-crawl link-reset menu-item header-browse-groups\">
      Groupes
    </a>
  </li>
</ul>

    </li>
</ul>


  <ul class=\"nav pull-right help-menu list-unstyled\">
  <li id='header-help-menu' class=\"help-menu-container pull-left large-right-margin hide-md\" data-dropdown-sticky=\"true\">
    <a id=\"header-help-trigger\"
       class=\"help-toggle link-reset header-help-trigger\"
       href=\"/help\">
      Aide
      <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
    </a>
    <div role=\"tooltip\"
         class=\"tooltip tooltip-top-right dropdown-menu help-dropdown\"
         aria-hidden=\"true\"
         data-trigger=\"#header-help-trigger\"
         data-sticky=\"true\">
      <ul class=\"list-layout\">
        <li class=\"search-bar--help hide\">
          <form action=\"/help/search\" class=\"search-form--help menu-item\">
            <div class=\"input-addon\">
              <input type=\"text\"
                     placeholder=\"Rechercher dans le Centre d'aide\"
                     autocomplete=\"off\"
                     name=\"q\"
                     class=\"input-stem\" />
              <input type=\"hidden\" name=\"search_from\" value=\"hdr\" />
              <i class=\"btn btn-primary icon icon-search input-suffix form-submit--help\"></i>
            </div>
          </form>
        </li>
        <li class=\"visit-helpcenter-cta hide\">
          <a href=\"/help\" class=\"help-center-link menu-item\">
            Visitez le Centre d'aide &#187;
          </a>
        </li>
        <li class=\"loading\"></li>
        <li class=\"all_faqs hide\">
          <a href=\"/help\" class=\"link-reset menu-item\">
            Voir toutes les FAQ
          </a>
        </li>
      </ul>
    </div>
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
    <a data-signup-modal
       data-header-view=\"true\"
       href=\"/signup_login?redirect_params[action]=index&amp;redirect_params[controller]=search&amp;redirect_params[guests]=2&amp;redirect_params[location]=New+York%2C+NY&amp;redirect_params[ne_lat]=40.74806499382262&amp;redirect_params[ne_lng]=-73.86441276903406&amp;redirect_params[path_location]=New-York--NY&amp;redirect_params[price_min]=45&amp;redirect_params[search_by_map]=true&amp;redirect_params[ss_id]=56kqlda2&amp;redirect_params[sw_lat]=40.57834400473412&amp;redirect_params[sw_lng]=-74.06148002977625&amp;redirect_params[zoom]=12\"
       class=\"link-reset\"
       rel=\"nofollow\">
      Inscription
    </a>
  </li>
  <li id=\"login\" class=\"pull-left\">
    <a data-login-modal
       href=\"/login?redirect_params[action]=index&amp;redirect_params[controller]=search&amp;redirect_params[guests]=2&amp;redirect_params[location]=New+York%2C+NY&amp;redirect_params[ne_lat]=40.74806499382262&amp;redirect_params[ne_lng]=-73.86441276903406&amp;redirect_params[path_location]=New-York--NY&amp;redirect_params[price_min]=45&amp;redirect_params[search_by_map]=true&amp;redirect_params[ss_id]=56kqlda2&amp;redirect_params[sw_lat]=40.57834400473412&amp;redirect_params[sw_lng]=-74.06148002977625&amp;redirect_params[zoom]=12\"
       class=\"link-reset\"
       rel=\"nofollow\">
      Connexion
    </a>
  </li>
</ul>


  <ul class=\"nav pull-right logged-in list-unstyled medium-right-margin\">
  <li class=\"user-item pull-left medium-right-margin\">
    <a class=\"link-reset header-avatar-trigger\"
       id=\"header-avatar-trigger\"
       href=\"#\">
      <div class=\"media-photo media-round user-profile-image\"></div>
      <span class=\"value_name\">
        Utilisateur
      </span>
      <i class=\"icon icon-caret-down icon-light-gray h5\"></i>
    </a>
    <ul role=\"tooltip\"
        class=\"tooltip tooltip-top-right dropdown-menu list-unstyled header-dropdown\"
        data-trigger=\"#header-avatar-trigger\"
        aria-hidden=\"true\"
        data-sticky=\"true\">
      <li>
        <a href=\"#\"
           data-href=\"/home/dashboard\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-dashboard\">
          Tableau de bord
        </a>
      </li>
      <li class=\"listings\">
        <a href=\"#\"
           data-href=\"/rooms\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-listing\">
          <span class=\"singular\" style=\"display: none;\">
            Votre annonce
          </span>
          <span class=\"plural\">
            Mes annonces
          </span>
        </a>
      </li>
      <li class=\"reservations\" style=\"display: none;\">
        <a href=\"#\"
           data-href=\"/my_listings\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-reservation\">
           Mes réservations
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/trips/upcoming\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-trips\">
          Mes voyages
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/wishlists/my\"
           id=\"wishlists\"
           class=\"no-crawl link-reset menu-item item-wishlists\">
          Wish Lists
        </a>
      </li>
      <li class=\"groups\">
        <a href=\"#\"
           data-href=\"/groups\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-groups\">
          Groupes
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/invite?r=3\"
           class=\"no-crawl link-reset menu-item item-invite-friends\">
          Inviter des amis
          <span class=\"label label-pink label-new\">
            Nouveau
          </span>
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/users/edit\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-user-edit\">
          Modifier le profil
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/account\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item item-account\">
          Compte
        </a>
      </li>
      <li>
        <a href=\"#\"
           data-href=\"/logout\"
           rel=\"nofollow\"
           class=\"no-crawl link-reset menu-item header-logout\">
          Déconnexion
        </a>
      </li>
    </ul>
  </li>
  <li id=\"inbox-item\" class=\"inbox-item pull-left\">
    <a href=\"#\"
       data-href=\"/inbox\"
       rel=\"nofollow\"
       class=\"no-crawl link-reset inbox-icon\">
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


    <script src=\"https://a0.muscache.com/airbnb/static/packages/header_cookie-5313609f9ee6ea14365f07a773ed7195.js\" type=\"text/javascript\"></script>


      <div class=\"flash-container\"></div>

    







<div class=\"map-search\" data-bootstrap-data=\"\">
  <div class=\"sidebar\">
    <div class=\"hide js-map-list-mode-toggle\">
      <a href=\"#map-view\" class=\"link-reset js-map-toggle\">
        <i class=\"icon icon-map-marker icon-size-2 icon-rausch\"></i>
      </a>

      <a href=\"#list-view\" class=\"link-reset hide js-list-toggle\">
        <i class=\"icon icon icon-list-ul icon-size-2 icon-rausch\"></i>
      </a>
    </div>

    <div class=\"filters collapse\">
     

  <div class=\"filters-section room-type-group intro-filter panel-body panel-light\">
    <div class=\"row\">
      <div class=\"col-lg-2 col-md-12 text-center-sm text-center-md filter-label\">
        <label>
          Type de logement
          <i class=\"icon icon-question hide-sm hide-md\" id=\"room-type-tooltip\"></i>
        </label>

        <div class=\"tooltip tooltip-left-middle show-lg\" role=\"tooltip\" data-trigger=\"#room-type-tooltip\"
             data-sticky=\"true\">
          <dl class=\"panel-body\">
            <dt>Appartement</dt>
            <dt>Villa</dt>
            <dd>Des logements où vous disposerez de votre propre chambre, mais partagerez les espaces communs.</dd>
            <dt>Studio</dt>
            <dd>Logements où vous partagerez votre chambre ou dont votre chambre est un espace commun.</dd>
          </dl>
        </div>
      </div>
      ";
        // line 465
        $this->displayBlock('filtreTypeImmob', $context, $blocks);
        // line 467
        echo "    </div>
  </div>

  <div class=\"filters-section intro-filter panel-body panel-light\">
    <div class=\"row\">
      <div class=\"col-lg-2 col-md-12 text-center-sm text-center-md filter-label\">
        <label>Fourchette de prix</label>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"price-range-slider progress\"
             data-currency-symbol-left=\"\"
             data-currency-symbol-right=\"&amp;euro;\"
             data-min-price-daily=\"9\"
             data-max-price-daily=\"1000\"
             >

          <div class=\"\">
            <i class=\"icon icon-reorder icon-light-gray icon-handle-draggable\"></i>
          </div>
          <div class=\"\">
            <i class=\"icon icon-reorder icon-light-gray icon-handle-draggable\"></i>
          </div>

          <p class=\"min-price\">
            <span class=\"price\"></span>&euro;
          </p>

          <p class=\"max-price\">
            <span class=\"price\"></span>&euro;
          </p>
        </div>
      </div>
    </div>
  </div>

<form class=\"formPrice\">
  <input type=\"text\" value=\"100000\" name=\"maxprice\" class=\"maxprice hide\"></input>
  <input type=\"text\" value=\"0\"  name=\"minprice\" class=\"minprice hide\"></input>
</form>

  <div class=\"filters-section size-group panel-body panel-light\">
    <div class=\"row\">
      <div class=\"col-lg-2 col-md-12 text-center-sm text-center-md filter-label\">
        <label>Taille</label>
      </div>

      ";
        // line 513
        $this->displayBlock('formChambre', $context, $blocks);
        // line 515
        echo "      
    </div>
  </div>

  <div class=\"filters-section panel-body panel-light\">
    <div class=\"row\">
        <div class=\"col-lg-2 col-md-12 filter-label\">
          <label>Etat</label>
        </div>
         
         ";
        // line 525
        $this->displayBlock('formEtat', $context, $blocks);
        // line 527
        echo "    </div>
  </div>

  <div class=\"checkbox-group neighborhoods filters-section panel-body panel-light\"
       data-name=\"neighborhoods\">
   
       <div>



      <div class=\"col-md-1\">
        <label class=\"show-more\">
          <span>
            <i class=\"icon icon-caret-down hide-sm\"></i>
            <strong class=\"text-muted show-sm\">+ Plus</strong>
          </span>
          <span class=\"hide\"><i class=\"icon icon-caret-up\"></i></span>
        </label>
      </div>
    </div>
  </div>

  <div class=\"checkbox-group hosting_amenities filters-section panel-body panel-light\"
       data-name=\"hosting_amenities\">
   
  </div>

  <div class=\"checkbox-group property_type_id filters-section panel-body panel-light\"
       data-name=\"property_type_id\">
    <div class=\"row\">
      <div class=\"col-lg-2 col-md-12 filter-label\">
        <label>Type de propriété</label>
      </div>

      

      



  

      <div class=\"col-md-1\">
        <label class=\"show-more\">
          <span>
            <i class=\"icon icon-caret-down hide-sm\"></i>
            <strong class=\"text-muted show-sm\">+ Plus</strong>
          </span>
          <span class=\"hide\"><i class=\"icon icon-caret-up\"></i></span>
        </label>
      </div>
    </div>
  </div>

 

      <div class=\"panel-btn-sm panel-light filters-footer\">
        <button class=\"btn btn-block btn-large btn-primary search-button row-space-4-sm filter-button\">
          Afficher les logements
        </button>
      </div>
    </div>
    <div class=\"filters-placeholder hide hide-sm\"></div>
    <div class=\"sidebar-header panel-body panel-bg-medium hide-sm clearfix\">
      <button class=\"btn show-filters pull-left\">
        <span class=\"text-more-filters\">Plus de filtres</span><span class=\"text-filters\">Filtres</span>
      </button>
    
      <ul class=\"applied-filters list-unstyled\">
        <li class=\"hide btn search-tag\" data-applied-filter=\"room_types\">
          Type de logement <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"price\">
          Prix <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"size\">
          Taille <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"connected\">
          Connexions sociales <i class=\"icon icon-remove
            search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"empHost\">
          Hébergements de nos équipes <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"ib\">
          Réservation instantanée <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"neighborhoods\">
          Quartiers <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"hosting_amenities\">
          Équipements <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"property_type_id\">
          Type de propriété <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"languages\">
          Langue de l'hôte <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
        <li class=\"hide btn search-tag\" data-applied-filter=\"keywords\">
          Mots-clés <i class=\"icon icon-remove search-tag-remove\"></i>
        </li>
      </ul>
    
      
    </div>
    <div class=\"sidebar-header-placeholder\"></div>
    <div class=\"search-results\">
     
        
      <div class=\"alert alert-block alert-with-icon disaster-rooster hide row-space-4 row-space-0-sm\">
        <i class=\"icon icon-comment alert-icon\"></i>
        <a href=\"#\" class=\"alert-close close\"></a>
        <div class=\"h4 row-space-2\">
          Hébergements d'urgence pour ceux qui ont dû quitter leur logement à cause de <span class='disaster-name'></span>
        </div>
        <a class=\"btn btn-primary disaster-guest row-space-1-sm\" data-url-prefix=\"/s?\">
          J'ai besoin d'un endroit où séjourner
        </a>
        <a class=\"btn btn-host disaster-host row-space-1-sm\" data-url-prefix=\"/disaster/\" >
          Je peux mettre à disposition gratuitement mon logement
        </a>
      </div>












      <div class = \"outer-listings-container row-space-5 row-space-2-sm\">
        <div class=\"row listings-container\">

        
         
        ";
        // line 668
        $this->env->loadTemplate("realEstateBundle:Offre:offreCards.html.twig")->display(array_merge($context, array("entites" => (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))));
        // line 669
        echo "    

        </div>
        </div>

  

    <div class=\"panel-btn-sm panel-btn-fixed-sm show-sm\">
      <button class=\"js-small-filter-toggle btn btn-large btn-block btn-primary\">Filtres</button>
    </div>
  </div>

  <div class=\"map hide-sm\">
  
    <div id=\"map\" class=\"map-canvas\"></div>
  
    <div class=\"map-refresh-controls Google\">
      <a class=\"map-manual-refresh btn btn-primary hide\">
        Relancer la recherche ici <i class=\"icon icon-refresh icon-space-left\"></i>
      </a>
      <div class=\"panel map-auto-refresh hide\">
        <label class=\"checkbox\">
          <input class=\"map-auto-refresh-checkbox\" type=\"checkbox\" checked=\"checked\">
          <small>Rechercher quand je déplace la carte</small>
        </label>
      </div>
    </div>
  
  </div>

</div>



      <div id=\"footer\" class=\"container-brand-dark footer-surround footer-container\">
        <div class=\"footer-content-container page-container-responsive\">
  <div class=\"row row-condensed\">

    <div class=\"col-md-3 col-md-offset-1\">
      <div class=\"language-curr-picker clearfix\">
        <div class=\"language-picker\"></div>
          <div class=\"currency-picker\"></div>
        <div class=\"cx-number\"></div>
      </div>
    </div>

   

 

  
  </div>

  

  <hr class=\"footer-divider row-space-top-8 row-space-4 hide-sm\">

  <div class=\"social-media text-center\">
    <h5 class=\"row-space-4 hide-sm\">Rejoignez-nous sur</h5>
    <ul class=\"unstyled list-layout list-inline\" itemscope itemtype=\"http://schema.org/Organization\">
     
    </ul>
    <div id=\"copyright\" class=\"row-space-top-2 text-muted\">
      &copy; Airbnb, Inc.
    </div>
  </div>
</div>

      </div>
 <meta content=\"{&quot;priv.everyone&quot;:&quot;Tout le monde&quot;,&quot;priv.only_me&quot;:&quot;Seulement moi&quot;,&quot;priv.description&quot;:&quot;Qui peut la voir ?&quot;,&quot;priv.everyone_description&quot;:&quot;Visible par tous, y compris sur votre profil public Airbnb.&quot;,&quot;priv.only_me_description&quot;:&quot;Visible par vous uniquement et publiée nulle part.&quot;,&quot;save_to_wish_list&quot;:&quot;Enregistrer dans une Wish List&quot;,&quot;save_to_wish_list_and_fb&quot;:&quot;Enregistrer dans une Wish List et sur le journal Facebook&quot;,&quot;wl_modal.create_new&quot;:&quot;Créer une nouvelle Wish List&quot;,&quot;wl_modal.make_a_new&quot;:&quot;Faire une nouvelle Wish List&quot;,&quot;wl_modal.create&quot;:&quot;Créer&quot;,&quot;wl_modal.add_note&quot;:&quot;Ajouter une note&quot;,&quot;wl_modal.add_to_timeline&quot;:&quot;Ajouter au journal&quot;,&quot;wl_modal.done&quot;:&quot;Terminé&quot;,&quot;wl_modal.save&quot;:&quot;Enregistrer&quot;,&quot;wl_modal.change_sharing&quot;:&quot;Vous pouvez toujours changer vos options de partage dans les paramètres du compte.&quot;,&quot;refresh_list&quot;:&quot;Rafraîchir la liste&quot;,&quot;who_can_see_new_wishlist&quot;:&quot;Qui peut voir votre nouvelle Wish List ?&quot;,&quot;where_are_you_going&quot;:&quot;Où allez-vous ?&quot;,&quot;tour_alert_title&quot;:&quot;Vivez %{location} comme un local&quot;,&quot;tour_alert_title_general&quot;:&quot;Vivez comme les habitants du coin lorsque vous voyagez&quot;,&quot;tour_alert_text&quot;:&quot;Réservez des hébergements uniques auprès d&#x27;hôtes locaux sur Airbnb.  %{link_start}Comment ça marche%{link_end}&quot;,&quot;tour_calendar_title&quot;:&quot;Fixez vos dates&quot;,&quot;tour_calendar_text&quot;:&quot;Vous choisissez vos dates et nous vous montrerons ce qui est disponible&quot;,&quot;tour_listing_type_title&quot;:&quot;Choisissez l&#x27;hébergement&quot;,&quot;tour_listing_type_text&quot;:&quot;Vous pouvez louer la totalité d&#x27;un logement ou le partager avec votre hôte.&quot;,&quot;tour_host_title&quot;:&quot;Rencontrer l&#x27;hôte&quot;,&quot;tour_host_text&quot;:&quot;Faites-vous une idée plus précise des hôtes à travers leurs profils et commentaires avant d&#x27;envoyer une demande de réservation.&quot;,&quot;next&quot;:&quot;Suivant&quot;,&quot;tour_finish&quot;:&quot;J&#x27;ai compris !&quot;,&quot;Password&quot;:&quot;Mot de passe&quot;,&quot;users.Confirm_Password_to_Continue&quot;:&quot;Confirmer le mot de passe pour continuer&quot;,&quot;users.Confirm_Password&quot;:&quot;Confirmer le mot de passe&quot;,&quot;users.Cancel&quot;:&quot;Annuler&quot;,&quot;users.Please_enter_your_Airbnb_password_to_continue.&quot;:&quot;Pour votre sécurité, veuillez saisir votre mot de passe Airbnb avant de poursuivre.&quot;,&quot;user.signup.forgot_password&quot;:&quot;Mot de passe oublié ?&quot;,&quot;users.Confirm_Facebook_Password&quot;:&quot;Confirmer le mot de passe Facebook&quot;,&quot;home&quot;:&quot;Page d&#x27;accueil&quot;,&quot;download_the_app&quot;:&quot;Télécharger l&#x27;application&quot;,&quot;sign_up&quot;:&quot;Inscription&quot;,&quot;log_in&quot;:&quot;Connexion&quot;,&quot;alerts&quot;:&quot;Alertes&quot;,&quot;inbox&quot;:&quot;Boîte de réception&quot;,&quot;discover&quot;:&quot;Découvrir&quot;,&quot;search&quot;:&quot;Rechercher&quot;,&quot;how_it_works&quot;:&quot;Mode d&#x27;emploi&quot;,&quot;help&quot;:&quot;Aide&quot;,&quot;invite_friends&quot;:&quot;Inviter des amis&quot;,&quot;logout&quot;:&quot;Déconnexion&quot;,&quot;name&quot;:&quot;Utilisateur&quot;,&quot;photography&quot;:&quot;Photo&quot;,&quot;where_are_you_going&quot;:&quot;Où allez-vous ?&quot;,&quot;checkin&quot;:&quot;Arrivée&quot;,&quot;checkout&quot;:&quot;Départ&quot;,&quot;room_type_0&quot;:&quot;Logement entier&quot;,&quot;room_type_1&quot;:&quot;Chambre privée&quot;,&quot;room_type_2&quot;:&quot;Chambre partagée&quot;,&quot;find_a_place&quot;:&quot;Trouver un logement&quot;,&quot;shared.x guests&quot;:&quot;%{smart_count} voyageur |||| %{smart_count} voyageurs&quot;,&quot;guests&quot;:&quot;Voyageurs&quot;,&quot;room_type&quot;:&quot;Type de logement&quot;,&quot;choose_language&quot;:&quot;Choisir la langue&quot;,&quot;choose_currency&quot;:&quot;Choisir la devise&quot;,&quot;clear_dates&quot;:&quot;Effacer les dates&quot;,&quot;datepicker_updated_years_ago&quot;:&quot;Mis à jour il y a %{smart_count} an |||| Mis à jour il y a %{smart_count} années&quot;,&quot;datepicker_updated_months_ago&quot;:&quot;Mis à jour il y a %{smart_count} mois |||| Mis à jour il y a %{smart_count} mois&quot;,&quot;datepicker_updated_days_ago&quot;:&quot;Mis à jour il y a %{smart_count} jour |||| Mis à jour il y a %{smart_count} jours&quot;,&quot;datepicker_updated_today&quot;:&quot;Mis à jour aujourd&#x27;hui&quot;,&quot;datepicker_never_updated&quot;:&quot;Jamais mis à jour&quot;,&quot;datepicker_min_nights&quot;:&quot;Séjour minimum de %{smart_count} nuit |||| Séjour minimum de %{smart_count} nuits&quot;,&quot;datepicker_min_nights_this_month&quot;:&quot;%{smart_count} nuit min. ce mois |||| %{smart_count} nuits min. ce mois&quot;,&quot;datepicker_min_nights_varies&quot;:&quot;La durée minimum de séjour peut varier&quot;}\" id=\"_bootstrap-phrases\" />
<meta content=\"{&quot;canonical_host&quot;:&quot;www.airbnb.fr&quot;,&quot;canonical_url&quot;:&quot;https://www.airbnb.fr/s&quot;,&quot;language&quot;:&quot;fr&quot;,&quot;locale&quot;:&quot;fr&quot;,&quot;api_config&quot;:{&quot;baseUrl&quot;:&quot;https://www.airbnb.fr/api&quot;,&quot;key&quot;:&quot;d306zoyjsyarp7ifhu67rjxn52tv0t20&quot;},&quot;deep_link&quot;:null,&quot;tracking_context&quot;:{&quot;source&quot;:&quot;monorail&quot;,&quot;platform&quot;:&quot;js&quot;,&quot;version&quot;:&quot;93790b12dee38f2bb0b767193ace017c8bb070be&quot;,&quot;controller&quot;:&quot;search&quot;,&quot;action&quot;:&quot;index&quot;,&quot;req_uuid&quot;:&quot;5684b0ad-66cb-4750-bc68-51f50bb80ad8&quot;,&quot;shardset&quot;:&quot;a0&quot;},&quot;no_flash_alerts&quot;:null,&quot;google_maps_url&quot;:&quot;//maps.googleapis.com/maps/api/js?language=fr&amp;region=FR&amp;sensor=false&amp;v=3.13&amp;libraries=places&amp;client=gme-airbnbinc&amp;channel=monorail-prod&quot;,&quot;open_street_map_url&quot;:&quot;https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js&quot;}\" id=\"_bootstrap-layout-init\" />
<meta content=\"{&quot;data&quot;:{&quot;country&quot;:&quot;FR&quot;,&quot;tld_country&quot;:&quot;FR&quot;,&quot;currencies&quot;:{&quot;AED&quot;:{&quot;symbol&quot;:&quot;&amp;#1583;.&amp;#1573;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;ﺩ.ﺇ&quot;}},&quot;ARS&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;AUD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;BRL&quot;:{&quot;symbol&quot;:&quot;R\$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;space_between_price_and_symbol&quot;:true}},&quot;CAD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;CHF&quot;:{&quot;symbol&quot;:&quot;CHF&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;CNY&quot;:{&quot;symbol&quot;:&quot;&amp;yen;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;¥&quot;}},&quot;CRC&quot;:{&quot;symbol&quot;:&quot;&amp;#8353;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₡&quot;}},&quot;CZK&quot;:{&quot;symbol&quot;:&quot;&amp;#75;&amp;#269;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;Kč&quot;}},&quot;DKK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;EUR&quot;:{&quot;symbol&quot;:&quot;&amp;euro;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;€&quot;,&quot;position&quot;:&quot;special&quot;}},&quot;GBP&quot;:{&quot;symbol&quot;:&quot;&amp;pound;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;£&quot;}},&quot;HKD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;HRK&quot;:{&quot;symbol&quot;:&quot;kn&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;HUF&quot;:{&quot;symbol&quot;:&quot;Ft&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;IDR&quot;:{&quot;symbol&quot;:&quot;Rp&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;ILS&quot;:{&quot;symbol&quot;:&quot;&amp;#8362;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₪&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;INR&quot;:{&quot;symbol&quot;:&quot;&amp;#8377;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₹&quot;}},&quot;JPY&quot;:{&quot;symbol&quot;:&quot;&amp;yen;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;¥&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;KRW&quot;:{&quot;symbol&quot;:&quot;&amp;#8361;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₩&quot;}},&quot;MAD&quot;:{&quot;symbol&quot;:&quot;MAD&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;MYR&quot;:{&quot;symbol&quot;:&quot;&amp;#82;&amp;#77;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;RM&quot;}},&quot;MXN&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;NOK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;NZD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;PEN&quot;:{&quot;symbol&quot;:&quot;&amp;#83;&amp;#47;&amp;#46;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;S/.&quot;}},&quot;PHP&quot;:{&quot;symbol&quot;:&quot;&amp;#8369;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₱&quot;}},&quot;PLN&quot;:{&quot;symbol&quot;:&quot;z&amp;#22;&amp;#322;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;zł&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;RON&quot;:{&quot;symbol&quot;:&quot;lei&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;RUB&quot;:{&quot;symbol&quot;:&quot;&amp;#1088;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;р&quot;,&quot;position&quot;:&quot;after&quot;}},&quot;SEK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;SGD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;THB&quot;:{&quot;symbol&quot;:&quot;&amp;#3647;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;฿&quot;}},&quot;TRY&quot;:{&quot;symbol&quot;:&quot;&amp;#84;&amp;#76;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;TL&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;TWD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null},&quot;USD&quot;:{&quot;symbol&quot;:&quot;\$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:null},&quot;VND&quot;:{&quot;symbol&quot;:&quot;&amp;#8363;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₫&quot;}},&quot;ZAR&quot;:{&quot;symbol&quot;:&quot;R&quot;,&quot;code_required&quot;:true,&quot;options&quot;:null}},&quot;current_locale_name&quot;:&quot;Français&quot;,&quot;languages&quot;:[{&quot;locale_name&quot;:&quot;Bahasa Indonesia&quot;,&quot;locale&quot;:&quot;id&quot;},{&quot;locale_name&quot;:&quot;Bahasa Melayu&quot;,&quot;locale&quot;:&quot;ms&quot;},{&quot;locale_name&quot;:&quot;Català&quot;,&quot;locale&quot;:&quot;ca&quot;},{&quot;locale_name&quot;:&quot;Dansk&quot;,&quot;locale&quot;:&quot;da&quot;},{&quot;locale_name&quot;:&quot;Deutsch&quot;,&quot;locale&quot;:&quot;de&quot;},{&quot;locale_name&quot;:&quot;English&quot;,&quot;locale&quot;:&quot;en&quot;},{&quot;locale_name&quot;:&quot;Español&quot;,&quot;locale&quot;:&quot;es&quot;},{&quot;locale_name&quot;:&quot;Eλληνικά&quot;,&quot;locale&quot;:&quot;el&quot;},{&quot;locale_name&quot;:&quot;Français&quot;,&quot;locale&quot;:&quot;fr&quot;},{&quot;locale_name&quot;:&quot;Italiano&quot;,&quot;locale&quot;:&quot;it&quot;},{&quot;locale_name&quot;:&quot;Magyar&quot;,&quot;locale&quot;:&quot;hu&quot;},{&quot;locale_name&quot;:&quot;Nederlands&quot;,&quot;locale&quot;:&quot;nl&quot;},{&quot;locale_name&quot;:&quot;Norsk&quot;,&quot;locale&quot;:&quot;no&quot;},{&quot;locale_name&quot;:&quot;Polski&quot;,&quot;locale&quot;:&quot;pl&quot;},{&quot;locale_name&quot;:&quot;Português&quot;,&quot;locale&quot;:&quot;pt&quot;},{&quot;locale_name&quot;:&quot;Suomi&quot;,&quot;locale&quot;:&quot;fi&quot;},{&quot;locale_name&quot;:&quot;Svenska&quot;,&quot;locale&quot;:&quot;sv&quot;},{&quot;locale_name&quot;:&quot;Türkçe&quot;,&quot;locale&quot;:&quot;tr&quot;},{&quot;locale_name&quot;:&quot;Íslenska&quot;,&quot;locale&quot;:&quot;is&quot;},{&quot;locale_name&quot;:&quot;Čeština&quot;,&quot;locale&quot;:&quot;cs&quot;},{&quot;locale_name&quot;:&quot;Русский&quot;,&quot;locale&quot;:&quot;ru&quot;},{&quot;locale_name&quot;:&quot;ภาษาไทย&quot;,&quot;locale&quot;:&quot;th&quot;},{&quot;locale_name&quot;:&quot;中文 (简体)&quot;,&quot;locale&quot;:&quot;zh&quot;},{&quot;locale_name&quot;:&quot;中文 (繁體)&quot;,&quot;locale&quot;:&quot;zh-TW&quot;},{&quot;locale_name&quot;:&quot;日本語&quot;,&quot;locale&quot;:&quot;ja&quot;},{&quot;locale_name&quot;:&quot;한국어&quot;,&quot;locale&quot;:&quot;ko&quot;}]}}\" id=\"_bootstrap-i18n-init\" />
<meta content=\"{&quot;enabled&quot;:true,&quot;appId&quot;:&quot;138566025676&quot;,&quot;scope&quot;:&quot;email,user_birthday,user_likes,user_education_history,user_hometown,user_location,user_friends&quot;,&quot;sdkUrl&quot;:&quot;https://connect.facebook.net/fr_FR/sdk.js&quot;}\" id=\"_bootstrap-facebook-init\" />
<meta content=\"{&quot;packages/field_guide.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/field_guide.bundle-de6844313464e5042105a6c0051d5f01.js&quot;}\" id=\"_bootstrap-javascript_paths\" />
<meta content=\"{&quot;map_search/markers.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/markers-2bc70cc8c077435bef3fcc75e427849d.png&quot;,&quot;map_search/blank_markers.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/blank_markers-02db6302f63f21c90f1ea7ccc2914b7a.png&quot;,&quot;map_search/address_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/address_pin-afe611fc31d51fc079f16e55448b8a22.png&quot;,&quot;map_search/current_primary_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/current_primary_pin-bd3b90aa252c58c54356ee2582a88fb5.png&quot;,&quot;map_search/current_wish_list_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/current_wish_list_pin-d869957cf606426938fc8517bf71d62f.png&quot;,&quot;map_search/primary_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/primary_pin-2d5185c4bbdd7e4aa25d04915cc2f0a3.png&quot;,&quot;map_search/viewed_primary_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/viewed_primary_pin-65e1729ea31d2e896dd4739381d76841.png&quot;,&quot;map_search/wish_list_pin.png&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/wish_list_pin-56ed85cf95cc8e94792f9004df50d67f.png&quot;,&quot;map_search/pois/ny1.svg&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/pois/ny1-423b3532c6cf97c0dcfec9e9713a4a4d.svg&quot;,&quot;map_search/pois/ny2.svg&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/pois/ny2-23125fa6190291a5edbbd00ac7f6dc61.svg&quot;,&quot;map_search/pois/ny3.svg&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/pois/ny3-e1b4edf4c87241f2f33488c099ffc9e5.svg&quot;,&quot;map_search/pois/ny4.svg&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/pois/ny4-d27df866320bec383382aa758f30c07f.svg&quot;,&quot;map_search/pois/ny5.svg&quot;:&quot;https://a0.muscache.com/airbnb/static/map_search/pois/ny5-42508913e0e7ecd97b821a7d86d05c13.svg&quot;}\" id=\"_bootstrap-p2_marker_image_path\" />
<meta content=\"&quot;Google&quot;\" id=\"_bootstrap-map_provider\" />
<meta content=\"&quot;&quot;\" id=\"_bootstrap-canonical_remarketing_location\" />
<meta content=\"{&quot;p3_map_css&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/p3-adc0d0efaf4c46d4c80eaa3d16b46b65.css&quot;,&quot;p3_map_templates&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/p3_template_manifest-acb7d3aa2db65aea1fa0b922352c31c9.js&quot;,&quot;p3_map_js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/p3.bundle-e7e292e4c7e24826ff0765f4c3947ecd.js&quot;}\" id=\"_bootstrap-p2_preload\" />
<meta content=\"{&quot;p2_nyc_pois&quot;:false}\" id=\"_bootstrap-trebuchet\" />
<meta content=\"false\" id=\"_bootstrap-saved_search_kill\" />
<meta content=\"false\" id=\"_bootstrap-saved_search_kill_sync\" />

    <div id=\"gmap-preload\" class=\"hide\"></div>
    <!--[if lt IE 9]>
      <script src=\"https://a0.muscache.com/airbnb/static/packages/libs_jquery_1x-39cf57d7094331dece0901a673582d68.js\" type=\"text/javascript\"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
      <script src=\"https://a0.muscache.com/airbnb/static/packages/libs_jquery_2x-d1d044282823177ce96ce5f9f96896ae.js\" type=\"text/javascript\"></script>
    <!--<![endif]-->
    <script src=\"https://a0.muscache.com/airbnb/static/packages/o2.1-032e4d142bfba16b9e35e9de3160c666.js\" type=\"text/javascript\"></script>
    <script src=\"https://a0.muscache.com/airbnb/static/packages/core-a0070981dd2b4e6840a4313ed925613a.js\" type=\"text/javascript\"></script>

    <script>

      Airbnb.init();
</script>
      <script>
         \$(document).ready(function(){
              
                 var str = \"\";
                 var strP=\"\";
          \$(\".filtre-select\").change(function(){ 
              str =\$( \".form-select\" ).serialize() ;
              if(strP!=\"\")
                  str=str+\"&\"+strP;
                  console.log(str);  
              \$.get(\"";
        // line 775
        echo $this->env->getExtension('routing')->getPath("offre_search_ajax");
        echo "?\"+str+\"&ss_id=b66045u7\",function( data ) {
                    \$( \".search-results\" ).html( data );           
                   })
                         
          });
                        
          \$(\".filter-button\").click(function(){
               str =\$( \".form-select\" ).serialize() ;  
               if(strP!=\"\")
                  str=str+\"&\"+strP;
               console.log(str);                        
                  \$.get(\"";
        // line 786
        echo $this->env->getExtension('routing')->getPath("offre_search_ajax");
        echo "?\"+str+\"&ss_id=b66045u7\",function( data ) {
                        \$( \".search-results\" ).html( data );           
                  })
                         
          })

          
          \$(\".ui-slider\").click(function(){
               pricemax=\$(\".max-price .price\").html();
               pricemin=\$(\".min-price .price\").html();
             \$(\"input.maxprice\").val(pricemax);
             \$(\"input.minprice\").val(pricemin);
              
                 strP=\$(\".formPrice :input[value!='']\").serialize() ;
                 console.log(str+\"&\"+strP);
              \$.get(\"";
        // line 801
        echo $this->env->getExtension('routing')->getPath("offre_search_ajax");
        echo "?\"+str+\"&\"+strP+\"&ss_id=b66045u7\",function( data ) {
                          \$( \".search-results\" ).html( data );           
                         })
                         
                        })

         
          });
 


    




      </script>

    <div id=\"fb-root\"></div>

      <script>

    if (!require('o2').matchMedia.is('sm')) {
      Airbnb.Utils.preloadGoogleMapsCommon();
    }
</script>
    <script src=\"https://a0.muscache.com/airbnb/static/packages/p2.bundle-1b1255b32db4b8119c0d6f46e5dbe76a.js\" type=\"text/javascript\"></script>
    

  </body>
  <script>
 
  </script>
  <div class=\"modal\" aria-hidden=\"true\"><div class=\"modal-table\"><div class=\"modal-cell\"></div></div></div>
  </body>
</html>
<!-- ver. 4b463595021ae9d56d957c4f3680cf2a584ba4a1 -->
";
    }

    // line 171
    public function block_formSearch($context, array $blocks = array())
    {
        // line 172
        echo "   ";
    }

    // line 465
    public function block_filtreTypeImmob($context, array $blocks = array())
    {
        // line 466
        echo "      ";
    }

    // line 513
    public function block_formChambre($context, array $blocks = array())
    {
        // line 514
        echo "      ";
    }

    // line 525
    public function block_formEtat($context, array $blocks = array())
    {
        // line 526
        echo "         ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 526,  905 => 525,  901 => 514,  898 => 513,  894 => 466,  891 => 465,  887 => 172,  884 => 171,  842 => 801,  824 => 786,  810 => 775,  702 => 669,  700 => 668,  557 => 527,  555 => 525,  543 => 515,  541 => 513,  493 => 467,  491 => 465,  197 => 173,  195 => 171,  23 => 1,);
    }
}
