<?php

/* realEstateBundle:Default:offreCard.html.twig */
class __TwigTemplate_0a743a3b0a1a3842b9625090419cc41eb617cb7caf5390943532d4ffcac218ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:Default:header.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(4);

            throw $e;
        }

        $this->blocks = array(
            'offreCard' => array($this, 'block_offreCard'),
            'offreCard8' => array($this, 'block_offreCard8'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:Default:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_offreCard($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "    <div class=\"col-lg-4 col-md-6 col-sm-12 rm-padding-sm \">
      <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');\" sm-img-url=\"https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6\">
    <a href=\"/offre/search?gouvernorat=";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "gouvernorat", array()), "html", null, true);
            echo "\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "gouvernorat", array()), "html", null, true);
            echo "
          </div>
      </div>
    </div>
    </a>
</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "




";
    }

    // line 30
    public function block_offreCard8($context, array $blocks = array())
    {
        // line 31
        echo "
  <div class=\"col-lg-8 col-md-12 rm-padding-sm\">
    <div class=\"discovery-card rm-padding-sm row-space-4 darken-on-hover \" style=\"background-image:url('https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');\" sm-img-url=\"https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px\">
    <a href=\"/offre/search?\" class=\"link-reset\" data-hook=\"discovery-card\" data-id=\"New York\">
    <div class=\"va-container va-container-v va-container-h\">
      <div class=\"va-middle text-center text-contrast\">
          <div class=\"h2 strong\">
            New York
          </div>
      </div>
    </div>
    </a>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Default:offreCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  80 => 30,  71 => 23,  56 => 14,  49 => 10,  45 => 8,  40 => 7,  37 => 6,  11 => 4,);
    }
}
