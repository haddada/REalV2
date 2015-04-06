<?php

/* sprint2RealEstateAdminBundle:Pages:agence.html.twig */
class __TwigTemplate_c16677be890608810765a41d481ebec3f15552a0084c6f95c1ce373924b9998d extends Twig_Template
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
            'AganceActive' => array($this, 'block_AganceActive'),
            'AganceCore' => array($this, 'block_AganceCore'),
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
    public function block_AganceActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 6
    public function block_AganceCore($context, array $blocks = array())
    {
        // line 7
        echo "       
        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
             

              <div class=\"box\">
                <div class=\"box-header\">
                  <h3 class=\"box-title\"></h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                  <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["agance"]);
        foreach ($context['_seq'] as $context["_key"] => $context["agance"]) {
            // line 35
            echo "                            <tr>
                                <td><a href = \"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_agence_supp", array("id" => $this->getAttribute($context["agance"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "id", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "nom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idGerant", array()), "prenom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "gouvernorat", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "ville", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agance"], "idAdresse", array()), "codepostal", array()), "html", null, true);
            echo "</td>
                              <td> <textarea>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["agance"], "description", array()), "html", null, true);
            echo "</textarea></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Description</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <!-- Ajout des gerant   -->
            <div class=\"col-xs-12\">
            <!--                                                                         -->
            <div class=\"box box-danger direct-chat direct-chat-danger\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Ajout</h3>
              <div class=\"box-tools pull-right\">
                
                  <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
               
              </div>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                <form method=\"POST\">
                <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>                     
                        <th>Nom</th>
                        <th>Agant</th>
                        <th>Gouvernorat / Ville / Code postal</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"nom\"/></td>
                            <td><select name=\"agant\">
                            ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 90
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                           
                            </select></td>

                            <td><select name=\"adresse\">
                            ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["adresse"]);
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 96
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "gouvernorat", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "codepostal", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                           
                            </select></td>   
                            <td> <textarea name=\"description\"></textarea></td>
                        </tr>
                    </tbody>
                  </table>
                    <div class=\"box-footer\">
                      <div class=\"pull-right\">
                        <span class=\"input-group-btn\">
                          <input type=\"submit\" name=\"Submit\" value=\"Ajouter\" class=\"btn btn-danger btn-flat\"/>
                        </span>
                      <div class=\"with-border \"></div>
                    </div><!-- /.box-footer-->
                    </div>
                </form>
          </div><!--/.direct-chat -->
            </div>
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <!-- page script --> 
      <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
      });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:agence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 132,  262 => 130,  257 => 128,  252 => 126,  247 => 124,  243 => 123,  238 => 121,  233 => 119,  209 => 97,  194 => 96,  190 => 95,  184 => 91,  171 => 90,  167 => 89,  121 => 45,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  94 => 38,  90 => 37,  84 => 36,  81 => 35,  77 => 34,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
