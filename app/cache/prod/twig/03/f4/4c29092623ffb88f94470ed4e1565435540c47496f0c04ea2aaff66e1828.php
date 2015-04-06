<?php

/* sprint2RealEstateAdminBundle:Pages:gerants.html.twig */
class __TwigTemplate_03f44c29092623ffb88f94470ed4e1565435540c47496f0c04ea2aaff66e1828 extends Twig_Template
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
            'gerantsActive' => array($this, 'block_gerantsActive'),
            'gerantsCore' => array($this, 'block_gerantsCore'),
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
    public function block_gerantsActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 6
    public function block_gerantsCore($context, array $blocks = array())
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
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th>Status Matrimonial</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 35
            echo "                            <tr>

                                <td><a href = \"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint2_real_estate_admin_gerants_supp", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></a>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "mail", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "numfix", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nummobile", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "statusMatrimonial", array()), "html", null, true);
            echo "</td>
                              

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th>Status Matrimonial</th>
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
            <form method=\"POST\">
            <div class=\"box-body\">
                
                <table id=\"mytab\" class=\"table table-bordered table-striped\">
                    <thead>
                      <tr>                     
                        <th>Mail</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Password</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th>Status Matrimonial</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type=\"text\" name=\"mail\"/></td>
                            <td><input type=\"text\" name=\"nom\"/></td>
                            <td><input type=\"text\" name=\"prenom\"/></td>
                            <td><input type=\"text\" name=\"pass\"/></td>
                            <td><input type=\"text\" name=\"fixe\"/></td>
                            <td><input type=\"text\" name=\"mobil\"/></td>
                            <td><input type=\"text\" name=\"statmatri\"/></td>                             
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
                
          </div><!--/.direct-chat -->
           </form>
            </div>
            ";
        // line 117
        echo "\t\t
          </div><!-- /.row -->
        </section><!-- /.content -->
      
        
       <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sprint2realestateadmin//js/demo.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
    <!-- page script --> 
    <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
      });
    </script>
    <script type=\"text/javascript\">
      function submitForm()
\t{
\t\txmlhttp=getXMLHttpRequest();//appel de fonction
\t\txmlhttp.onreadystatechange=function(){
\t\t\tif (xmlhttp.readyState==4 && xmlhttp.status==200){
\t\t\t\tdocument.getElementById(\"example1\").innerHTML=xmlhttp.responseText;}   
\t\t\t}   
\t\txmlhttp.open(\"GET\",\"http://localhost/fichier.txt\",true);
\t\txmlhttp.send();
\t}
            function getXMLHttpRequest() {
                    var xhr = null;
                    if (window.XMLHttpRequest || window.ActiveXObject) {
                            if (window.ActiveXObject) {
                                    try {
                                            xhr = new ActiveXObject(\"Msxml2.XMLHTTP\");
                                    } catch(e) {
                                            xhr = new ActiveXObject(\"Microsoft.XMLHTTP\");
                                    }
                            } else {
                                    xhr = new XMLHttpRequest(); 
                            }
                    } else {
                            alert(\"Votre navigateur ne supporte pas l'objet XMLHTTPRequest...\");
                            return null;
                    }
                    return xhr;
}
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:gerants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 136,  229 => 134,  224 => 132,  219 => 130,  214 => 128,  210 => 127,  205 => 125,  200 => 123,  192 => 117,  122 => 48,  111 => 43,  107 => 42,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  85 => 37,  81 => 35,  77 => 34,  48 => 7,  45 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
