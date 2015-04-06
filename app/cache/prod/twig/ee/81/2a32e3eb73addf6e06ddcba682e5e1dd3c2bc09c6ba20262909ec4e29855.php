<?php

/* sprint2RealEstateAdminBundle:Pages:offres.html.twig */
class __TwigTemplate_ee812a32e3eb73addf6e06ddcba682e5e1dd3c2bc09c6ba20262909ec4e29855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("sprint2RealEstateAdminBundle::admin_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'offreActive' => array($this, 'block_offreActive'),
            'offreCore' => array($this, 'block_offreCore'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sprint2RealEstateAdminBundle::admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_offreActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 6
    public function block_offreCore($context, array $blocks = array())
    {
        // line 7
        echo "       
       <section class=\"content\">
        <div class=\"row\">
            
              <!-- USERS Offre -->
              <div class=\"col-md-12\">
                <ul class=\"offre-list\">
                    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["offre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            echo "                   
                        <li style=\"list-style-type: none;\">
                            <div class=\"small-box bg-red\">
                                <div class=\"inner\">
                                    <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "urlimage", array()), "html", null, true);
            echo "\"  height=\"150\"/>                                  
                                  <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "typeimmob", array()), "html", null, true);
            echo "</h3>
                                  <p> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nbrpiece", array()), "html", null, true);
            echo " Piece, ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "surface", array()), "html", null, true);
            echo " Metre, Tunisie ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo ", A ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "nature", array()), "html", null, true);
            echo " </p>
                                </div>

                                <a href=\"#\" class=\"small-box-footer\">
                                  More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </ul>
              </div>
        </div>
       </section>       
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  74 => 20,  70 => 19,  66 => 18,  57 => 14,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
