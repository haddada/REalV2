<?php

/* realEstateBundle:administrateur:ajouterAdmin.html.twig */
class __TwigTemplate_75eb9ae6a0d84a368c58fc5237904660283a50147d9f32bf9b84bfe0c5957c3a extends Twig_Template
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
            'ajoutAdmin' => array($this, 'block_ajoutAdmin'),
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

    // line 2
    public function block_ajoutAdmin($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"box box-info\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\">Input Addon</h3>
                </div>
                <div class=\"box-body\">
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">@</span>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\">
                  </div>
                  <br>
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"input-group-addon\">.00</span>
                  </div>
                  <br>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\">\$</span>
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"input-group-addon\">.00</span>
                  </div>

                  <h4>With icons</h4>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                  </div>
                  <br>
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-check\"></i></span>
                  </div>
                  <br>
                  <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-dollar\"></i></span>
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"input-group-addon\"><i class=\"fa fa-ambulance\"></i></span>
                  </div>

                  <h4>With checkbox and radio inputs</h4>
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                          <input type=\"checkbox\">
                        </span>
                        <input type=\"text\" class=\"form-control\">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class=\"col-lg-6\">
                      <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                          <input type=\"radio\">
                        </span>
                        <input type=\"text\" class=\"form-control\">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->

                  <h4>With buttons</h4>
                  <p class=\"margin\">Large: <code>.input-group.input-group-lg</code></p>
                  <div class=\"input-group input-group-lg\">
                    <div class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-warning dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">Action <span class=\"fa fa-caret-down\"></span></button>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input type=\"text\" class=\"form-control\">
                  </div><!-- /input-group -->
                  <p class=\"margin\">Normal</p>
                  <div class=\"input-group\">
                    <div class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-danger\">Action</button>
                    </div><!-- /btn-group -->
                    <input type=\"text\" class=\"form-control\">
                  </div><!-- /input-group -->
                  <p class=\"margin\">Small <code>.input-group.input-group-sm</code></p>
                  <div class=\"input-group input-group-sm\">
                    <input type=\"text\" class=\"form-control\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-info btn-flat\" type=\"button\">Go!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.box-body -->
              </div>

";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:administrateur:ajouterAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
