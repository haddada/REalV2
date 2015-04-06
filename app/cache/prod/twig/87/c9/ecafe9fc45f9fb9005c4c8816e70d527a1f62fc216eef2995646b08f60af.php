<?php

/* realEstateBundle:administrateur:dashboard.html.twig */
class __TwigTemplate_87c9ecafe9fc45f9fb9005c4c8816e70d527a1f62fc216eef2995646b08f60af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tableau' => array($this, 'block_tableau'),
            'ajoutAdmin' => array($this, 'block_ajoutAdmin'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/realestate/css/AdminLTE.min.css"), "html", null, true);
        echo " \"rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/realestate/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the 
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |  
  |---------------------------------------------------------|
  
  -->
  <body class=\"skin-blue\">
    <div class=\"wrapper\">

      <!-- Main Header -->
      <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\"><b>Admin</b>LTE</a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
              <li class=\"dropdown messages-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-envelope-o\"></i>
                  <span class=\"label label-success\">4</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class=\"menu\">
                      <li><!-- start message -->
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <!-- User Image -->
                            <img src=\"bundles/realestate/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>                            
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->                      
                    </ul><!-- /.menu -->
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class=\"dropdown notifications-menu\">
                <!-- Menu toggle button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class=\"menu\">
                      <li><!-- start notification -->
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->                      
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class=\"dropdown tasks-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-flag-o\"></i>
                  <span class=\"label label-danger\">9</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class=\"menu\">
                      <li><!-- Task item -->
                        <a href=\"#\">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class=\"pull-right\">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class=\"progress xs\">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                              <span class=\"sr-only\">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->                      
                    </ul>
                  </li>
                  <li class=\"footer\">
                    <a href=\"#\">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class=\"dropdown user user-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <!-- The user image in the navbar-->
                  <img src=\"bundles/realestate/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- The user image in the menu -->
                  <li class=\"user-header\">
                    <img src=\"bundles/realestate/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"bundles/realestate/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"active\"><a href=\"#\"><span>Link</span></a><</li>
            <li><a href=\"#\"><span>Another Link</span></a></li>
            <li class=\"treeview\">
              <a href=\"#\"><span>Administrateur</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"/admins\">tous les administrateurs</a></li>
                <li><a href=\"/addAdmin\">ajouter administrateur</a></li>
                <li><a href=\"#\">modifier profile</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
            <li class=\"active\">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          
          ";
        // line 270
        $this->displayBlock('tableau', $context, $blocks);
        // line 272
        echo "          ";
        $this->displayBlock('ajoutAdmin', $context, $blocks);
        // line 274
        echo "
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
          Anything you want
        </div>
        <!-- Default to the left --> 
        <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/realestate/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>";
    }

    // line 270
    public function block_tableau($context, array $blocks = array())
    {
        // line 271
        echo "          ";
    }

    // line 272
    public function block_ajoutAdmin($context, array $blocks = array())
    {
        // line 273
        echo "          ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:administrateur:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 273,  355 => 272,  351 => 271,  348 => 270,  337 => 297,  332 => 295,  327 => 293,  306 => 274,  303 => 272,  301 => 270,  51 => 23,  43 => 18,  34 => 12,  21 => 1,);
    }
}
