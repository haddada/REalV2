<?php

/* realEstateBundle:Adresse:index.html.twig */
class __TwigTemplate_e0bcab61aa09883e947c1268e7b92f346e42638f7c87438196bfc64a97fc0923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Adresse list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Gouvernorat</th>
                <th>Codepostal</th>
                <th>Ville</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gouvernorats"]) ? $context["gouvernorats"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gouvernorat"]) {
            // line 18
            echo "            <tr>
            
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["gouvernorat"], "gouvernorat", array()), "html", null, true);
            echo "</td>
               
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gouvernorat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("adresse_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Adresse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  72 => 24,  62 => 20,  58 => 18,  54 => 17,  39 => 4,  36 => 3,  11 => 1,);
    }
}
