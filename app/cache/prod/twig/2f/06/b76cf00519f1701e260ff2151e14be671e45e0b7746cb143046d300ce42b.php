<?php

/* realEstateBundle:administrateur:adminTable.html.twig */
class __TwigTemplate_2f06b76cf00519f1701e260ff2151e14be671e45e0b7746cb143046d300ce42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("realEstateBundle:administrateur:dashboard.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'tableau' => array($this, 'block_tableau'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "realEstateBundle:administrateur:dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tableau($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Responsive Hover Table</h3>
                  <div class=\"box-tools\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"table_search\" class=\"form-control input-sm pull-right\" style=\"width: 150px;\" placeholder=\"Search\">
                      <div class=\"input-group-btn\">
                        <button class=\"btn btn-sm btn-default\"><i class=\"fa fa-search\"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class=\"box-body table-responsive no-padding\">
                  <table class=\"table table-hover\">
                    <tbody><tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["administrateurs"]) ? $context["administrateurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["administrateur"]) {
            // line 26
            echo "                    <tr>
                      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["administrateur"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["administrateur"], "nom", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["administrateur"], "prenom", array()), "html", null, true);
            echo "</td>
                      <td><span class=\"label label-success\">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['administrateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>

";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:administrateur:adminTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  77 => 29,  73 => 28,  69 => 27,  66 => 26,  62 => 25,  39 => 4,  36 => 3,  11 => 1,);
    }
}
