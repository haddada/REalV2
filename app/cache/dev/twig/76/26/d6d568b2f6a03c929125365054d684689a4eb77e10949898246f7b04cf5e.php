<?php

/* realEstateBundle:Offre:searchForm.html.twig */
class __TwigTemplate_7626d6d568b2f6a03c929125365054d684689a4eb77e10949898246f7b04cf5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formSearch' => array($this, 'block_formSearch'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
  
  ";
        // line 3
        $this->displayBlock('formSearch', $context, $blocks);
    }

    public function block_formSearch($context, array $blocks = array())
    {
        // line 4
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
               value=\"\"
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

    public function getTemplateName()
    {
        return "realEstateBundle:Offre:searchForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 3,  20 => 1,);
    }
}
