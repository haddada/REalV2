<?php

/* realEstateBundle:administrateur:login.html.twig */
class __TwigTemplate_a6f58cb01db4fbd3b4a51332be2796ba569630f30fb9427e888c0c38e0eb80a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>Bootstrap 101 Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/alertify.bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/alertify.core.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/alertify.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
  

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 16
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 17
        echo "
</head>

<body>
<div class=\"container\">
        <div class=\"wrapper\">
            <!--<h1>Connexion</h1>-->
            <div class=\"content\">
                <div id=\"form_wrapper\" class=\"form_wrapper\">
                    <form class=\"login active\" action='<?php echo base_url(); ?>admin/' method='post'>
                        <h3>Connexion</h3>
                        <div>
                            <label>Username:</label>
                            <input type=\"text\" name=\"login\" required/>
                        </div>
                        <div>
                            <label>Password:
                            <!--<a href=\"forgot_password.html\" rel=\"forgot_password\" class=\"forgot linkform\">
                            Forgot your password?</a>--></label>
                            <input type=\"password\" name=\"pass\" required/>
                        </div>
                        <div class=\"bottom\">
                            <div class=\"remember\"><input type=\"checkbox\" /><span>Keep me logged in</span></div>
                            <input type=\"submit\" value=\"Login\">
                            <!--<a href=\"register.html\" rel=\"register\" class=\"linkform\">You don't have an account yet?
                            Register here</a>-->
                            <div class=\"clear\"></div>
                        </div>
                    </form>
                   <!-- <form class=\"forgot_password\">
                        <h3>Forgot Password</h3>
                        <div>
                            <label>Username or Email:</label>
                            <input type=\"text\" />
                            <span class=\"error\">This is an error</span>
                        </div>
                        <div class=\"bottom\">
                            <input type=\"submit\" value=\"Send reminder\">
                            <!--<a href=\"index.html\" rel=\"login\" class=\"linkform\">Suddenly remebered? Log in here</a>
                            <div class=\"clear\"></div>
                        </div>
                    </form>-->
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>


        <!--<input type=\"text\" class=\"form-control\" placeholder=\"Login\" name=\"login\" required autofocus>
        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"pass\" required>

        <label class=\"checkbox\">
            <input type=\"checkbox\" value=\"remember-me\">Remember me
        </label>

        <input type=\"submit\" value=\"Sign in\" class=\"btn btn-lg btn-primary btn-block\">
    </form>-->

</div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:administrateur:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 80,  116 => 78,  53 => 17,  51 => 16,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
