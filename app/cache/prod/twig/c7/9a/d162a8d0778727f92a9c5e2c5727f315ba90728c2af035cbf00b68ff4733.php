<?php

/* sprint2RealEstateAdminBundle:Default:ajax.html.twig */
class __TwigTemplate_c79ad162a8d0778727f92a9c5e2c5727f315ba90728c2af035cbf00b68ff4733 extends Twig_Template
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
        echo "<h1>symfony Apple store demo</h1>
<div id=\"shopping_cart\">
<h2>Products:</h2>
<div id=\"product_list\">
<?php foreach (\$products as \$id => \$title): ?>
<?php echo image_tag('product'.\$id, array('id' => 'product_'.\$id, 'class' => 'products' )) ?>
<?php endforeach; ?>
</div>
<h2>Cart:</h2>
<div id=\"cart\" class=\"cart\">
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "sprint2RealEstateAdminBundle:Default:ajax.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
