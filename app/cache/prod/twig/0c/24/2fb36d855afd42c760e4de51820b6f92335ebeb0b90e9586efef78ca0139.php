<?php

/* sprint2RealEstateAdminBundle:Pages:mail.html.twig */
class __TwigTemplate_0c242fb36d855afd42c760e4de51820b6f92335ebeb0b90e9586efef78ca0139 extends Twig_Template
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
            'MailboxActive' => array($this, 'block_MailboxActive'),
            'MailboxEtra' => array($this, 'block_MailboxEtra'),
            'MailboxEtra2' => array($this, 'block_MailboxEtra2'),
            'MailCore' => array($this, 'block_MailCore'),
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
    public function block_MailboxActive($context, array $blocks = array())
    {
        // line 3
        echo "        class=\"active treeview\"
    ";
    }

    // line 5
    public function block_MailboxEtra($context, array $blocks = array())
    {
        // line 6
        echo "        <i class=\"fa fa-angle-left pull-right\"></i>
    ";
    }

    // line 8
    public function block_MailboxEtra2($context, array $blocks = array())
    {
        // line 9
        echo "        <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"MailBox\">Inbox <span class=\"label label-primary pull-right\">13</span></a></li>
            <li><a href=\"ComposeMail\">Compose</a></li>   
        </ul>
    ";
    }

    // line 14
    public function block_MailCore($context, array $blocks = array())
    {
        // line 15
        echo "        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-3\">
              <a href=\"ComposeMail\" class=\"btn btn-primary btn-block margin-bottom\">Compose</a>
              <div class=\"box box-solid\">
                
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\"><a href=\"MailBox\"><i class=\"fa fa-inbox\"></i> Inbox <span class=\"label label-primary pull-right\">12</span></a></li>
                    <li><a href=\"SentMail\"><i class=\"fa fa-envelope-o\"></i> Sent</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
  
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Inbox</h3>
                  <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                      <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\"/>
                      <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class=\"table-responsive mailbox-messages\">
                    <table class=\"table table-hover table-striped\">
                      <tbody>
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                        
                        <tr>
                          <td> <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                       
                      </tbody>
                    </table><!-- /.table -->
                    
                  </div><!-- /.mail-box-messages -->
                  
                </div><!-- /.box-body -->
                <div class=\"box-footer no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                     <div class=\"overlay\">
                  <i class=\"fa fa-refresh fa-spin\"></i>
                </div>
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->
        </section><!-- /.content -->
    ";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Pages:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  58 => 9,  55 => 8,  50 => 6,  47 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
