<?php

/* BraincraftedBootstrapBundle:Form:bootstrap.html.twig */
class __TwigTemplate_2a18da1e74b50dbcdfc2e7876bb37c07be2ea88da948086721f1f2d3c2efd1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'collection_widget' => array($this, 'block_collection_widget'),
                'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'file_widget' => array($this, 'block_file_widget'),
                'choice_widget' => array($this, 'block_choice_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_options' => array($this, 'block_choice_widget_options'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'integer_widget' => array($this, 'block_integer_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'url_widget' => array($this, 'block_url_widget'),
                'search_widget' => array($this, 'block_search_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'password_widget' => array($this, 'block_password_widget'),
                'hidden_widget' => array($this, 'block_hidden_widget'),
                'email_widget' => array($this, 'block_email_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'form_actions_widget' => array($this, 'block_form_actions_widget'),
                'bs_static_widget' => array($this, 'block_bs_static_widget'),
                'form_label' => array($this, 'block_form_label'),
                'button_label' => array($this, 'block_button_label'),
                'repeated_row' => array($this, 'block_repeated_row'),
                'form_row' => array($this, 'block_form_row'),
                'form_input_group' => array($this, 'block_form_input_group'),
                'form_help' => array($this, 'block_form_help'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_actions_row' => array($this, 'block_form_actions_row'),
                'form' => array($this, 'block_form'),
                'form_start' => array($this, 'block_form_start'),
                'form_end' => array($this, 'block_form_end'),
                'form_enctype' => array($this, 'block_form_enctype'),
                'global_form_errors' => array($this, 'block_global_form_errors'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_rest' => array($this, 'block_form_rest'),
                'form_rows' => array($this, 'block_form_rows'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
                'button_attributes' => array($this, 'block_button_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('bootstrap_collection_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('file_widget', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 215
        echo "
";
        // line 216
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 302
        echo "
";
        // line 303
        $this->displayBlock('radio_row', $context, $blocks);
        // line 369
        echo "
";
        // line 370
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 375
        echo "
";
        // line 376
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 381
        echo "
";
        // line 382
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('date_widget', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('time_widget', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('number_widget', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 445
        echo "
";
        // line 446
        $this->displayBlock('money_widget', $context, $blocks);
        // line 457
        echo "
";
        // line 458
        $this->displayBlock('url_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('search_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 481
        echo "
";
        // line 482
        $this->displayBlock('password_widget', $context, $blocks);
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 495
        echo "
";
        // line 496
        $this->displayBlock('email_widget', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('button_widget', $context, $blocks);
        // line 520
        echo "
";
        // line 521
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 527
        echo "
";
        // line 528
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('form_actions_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('bs_static_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 547
        echo "
";
        // line 548
        $this->displayBlock('form_label', $context, $blocks);
        // line 590
        echo "
";
        // line 591
        $this->displayBlock('button_label', $context, $blocks);
        // line 592
        echo "
";
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 604
        echo "
";
        // line 605
        $this->displayBlock('form_row', $context, $blocks);
        // line 648
        echo "
";
        // line 649
        $this->displayBlock('form_input_group', $context, $blocks);
        // line 683
        echo "
";
        // line 684
        $this->displayBlock('form_help', $context, $blocks);
        // line 695
        echo "
";
        // line 696
        $this->displayBlock('button_row', $context, $blocks);
        // line 730
        echo "
";
        // line 731
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('form_actions_row', $context, $blocks);
        // line 738
        echo "
";
        // line 740
        echo "
";
        // line 741
        $this->displayBlock('form', $context, $blocks);
        // line 748
        echo "
";
        // line 749
        $this->displayBlock('form_start', $context, $blocks);
        // line 794
        echo "
";
        // line 795
        $this->displayBlock('form_end', $context, $blocks);
        // line 819
        echo "
";
        // line 820
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 825
        echo "
";
        // line 826
        $this->displayBlock('global_form_errors', $context, $blocks);
        // line 832
        echo "
";
        // line 833
        $this->displayBlock('form_errors', $context, $blocks);
        // line 857
        echo "
";
        // line 858
        $this->displayBlock('form_rest', $context, $blocks);
        // line 867
        echo "
";
        // line 869
        echo "
";
        // line 870
        $this->displayBlock('form_rows', $context, $blocks);
        // line 893
        echo "
";
        // line 894
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 900
        echo "
";
        // line 901
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 911
        echo "
";
        // line 912
        $this->displayBlock('button_attributes', $context, $blocks);
    }

    // line 5
    public function block_form_widget($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 8
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 12
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 18
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 19
        echo "
        ";
        // line 20
        if (( !array_key_exists("simple_col", $context) && $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol())) {
            // line 21
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol();
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array())))) {
            // line 24
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 27
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
            // line 30
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if ((array_key_exists("simple_col", $context) && (isset($context["simple_col"]) ? $context["simple_col"] : null))) {
            // line 34
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "
        ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 38
        echo "
        ";
        // line 39
        if (((((isset($context["style"]) ? $context["style"] : null) == "inline") && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array(), "any", true, true) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array())))) &&  !((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 40
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 41
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null))));
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("placeholder" => (isset($context["label"]) ? $context["label"] : null)));
                // line 44
                echo "            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ((array_key_exists("static_control", $context) && ((isset($context["static_control"]) ? $context["static_control"] : null) == true))) {
            // line 48
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control-static"))));
            // line 49
            echo "            <p id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</p>";
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 52
            echo "            <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" ";
            }
            echo ">";
        }
        // line 54
        echo "        ";
        if (array_key_exists("simple_col", $context)) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 63
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 64
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 66
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 72
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        ob_start();
        // line 74
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 75
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
            // line 76
            echo "        ";
        }
        // line 77
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 84
            echo "            ";
            $context["prototype_vars"] = array();
            // line 85
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 86
                echo "                ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) ? $context["prototype_vars"] : null), array("style" => (isset($context["style"]) ? $context["style"] : null)));
                // line 87
                echo "            ";
            }
            // line 88
            echo "            ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'widget', (isset($context["prototype_vars"]) ? $context["prototype_vars"] : null))) . "</div>");
            // line 89
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_delete", array())) {
                // line 90
                echo "                ";
                $context["prototype_html"] = ((((((isset($context["prototype_html"]) ? $context["prototype_html"] : null) . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"__id__\">") . $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true))) . "</a></div>");
                // line 91
                echo "            ";
            }
            // line 92
            echo "            ";
            $context["prototype_html"] = (("<div class=\"row\">" . (isset($context["prototype_html"]) ? $context["prototype_html"] : null)) . "</div>");
            // line 93
            echo "
            ";
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => (isset($context["prototype_html"]) ? $context["prototype_html"] : null)));
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype-name" => (isset($context["prototype_name"]) ? $context["prototype_name"] : null)));
            // line 96
            echo "        ";
        }
        // line 97
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
                                ";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                            </div>
                            ";
            // line 106
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_delete", array())) {
                // line 107
                echo "                                <div class=\"col-xs-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-sm\" data-removefield=\"collection\" data-field=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true));
                echo "</a>
                                </div>
                            ";
            }
            // line 111
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </ul>
            ";
        // line 115
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "allow_add", array())) {
            // line 116
            echo "                <a href=\"#\" class=\"btn btn-primary btn-sm\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "add_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true));
            echo "</a>
            ";
        }
        // line 118
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 122
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 123
        echo "    ";
        ob_start();
        // line 124
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 125
        echo "
        ";
        // line 126
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array())))) {
            // line 127
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 128
            echo "        ";
        }
        // line 129
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 130
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 131
            echo "        ";
        }
        // line 132
        echo "
        ";
        // line 133
        if (array_key_exists("simple_col", $context)) {
            // line 134
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 138
        echo "
        <textarea ";
        // line 139
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

        ";
        // line 141
        if (array_key_exists("simple_col", $context)) {
            // line 142
            echo "            </div>
        ";
        }
        // line 144
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 147
    public function block_file_widget($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        ob_start();
        // line 149
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 150
        echo "
        ";
        // line 151
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array())))) {
            // line 152
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array());
            // line 153
            echo "        ";
        }
        // line 154
        echo "
        ";
        // line 155
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 156
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 159
        if (array_key_exists("simple_col", $context)) {
            // line 160
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : null), "html", null, true);
            echo "\">
        ";
        }
        // line 162
        echo "
        <input type=\"file\" ";
        // line 163
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">

        ";
        // line 165
        if (array_key_exists("simple_col", $context)) {
            // line 166
            echo "            </div>
        ";
        }
        // line 168
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 172
        echo "    ";
        ob_start();
        // line 173
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 174
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 176
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 178
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 181
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 182
        echo "    ";
        ob_start();
        // line 183
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 184
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 185
            echo "                ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 186
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array())), "label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
                echo "
                ";
            } else {
                // line 188
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array())), "label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : null)));
                echo "
                ";
            }
            // line 190
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 195
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 196
        echo "    ";
        ob_start();
        // line 197
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 198
        echo "
        <select ";
        // line 199
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 200
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) {
            // line 201
            echo "                <option ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 203
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 204
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 205
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 206
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 207
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 209
            echo "            ";
        }
        // line 210
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 211
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 216
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 217
        echo "    ";
        ob_start();
        // line 218
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 219
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 220
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\">
                    ";
                // line 221
                $context["options"] = $context["choice"];
                // line 222
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 225
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "</option>
            ";
            }
            // line 227
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 231
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 232
        echo "    ";
        ob_start();
        // line 233
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 234
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 235
        echo "
        ";
        // line 236
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())))) {
            // line 237
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 238
            echo "        ";
        }
        // line 239
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())))) {
            // line 240
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 241
            echo "        ";
        }
        // line 242
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 243
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 244
            echo "        ";
        }
        // line 245
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
            // line 246
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 247
            echo "        ";
        }
        // line 248
        echo "
        ";
        // line 249
        $context["class"] = "";
        // line 250
        echo "        ";
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 251
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 252
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 253
            echo "            ";
            $context["class"] = ((((((("col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 254
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 255
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 256
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 257
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        ob_start();
        // line 261
        echo "        ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 262
            echo "            ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 263
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 264
                echo "            ";
            }
            // line 265
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
                // line 266
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " checkbox-inline"))));
                // line 267
                echo "            ";
            }
            // line 268
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 269
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 270
                echo "            ";
            }
            // line 271
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 272
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 273
                echo "            ";
            }
            // line 274
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 275
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
            ";
            // line 276
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            // line 277
            echo "</label>
        ";
        } else {
            // line 279
            echo "            ";
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
        ";
        }
        // line 281
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 283
        echo "
        ";
        // line 284
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
            // line 285
            echo "            ";
            echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : null);
            echo "
        ";
        } else {
            // line 287
            echo "            <div class=\"checkbox\">";
            echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : null);
            echo "</div>
        ";
        }
        // line 289
        echo "
        ";
        // line 290
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 292
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 293
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 295
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 296
            echo "            </div>
        ";
        }
        // line 298
        echo "
        ";
        // line 299
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        // line 300
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 303
    public function block_radio_row($context, array $blocks = array())
    {
        // line 304
        echo "    ";
        ob_start();
        // line 305
        echo "        ";
        $context["class"] = "";
        // line 306
        echo "
        ";
        // line 307
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 308
        echo "
        ";
        // line 309
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())))) {
            // line 310
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 311
            echo "        ";
        }
        // line 312
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())))) {
            // line 313
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 314
            echo "        ";
        }
        // line 315
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 316
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 317
            echo "        ";
        }
        // line 318
        echo "
        ";
        // line 319
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 320
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 321
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 322
            echo "            ";
            $context["class"] = (((((((" col-" . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : null)) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : null));
            // line 323
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 324
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 325
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 326
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 328
        echo "
        ";
        // line 329
        ob_start();
        // line 330
        echo "        ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 331
            echo "            ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 332
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 333
                echo "            ";
            }
            // line 334
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
                // line 335
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " radio-inline"))));
                // line 336
                echo "            ";
            }
            // line 337
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 338
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 339
                echo "            ";
            }
            // line 340
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 341
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 342
                echo "            ";
            }
            // line 343
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 344
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 345
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            // line 346
            echo "</label>
        ";
        } else {
            // line 348
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 350
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 352
        echo "
        ";
        // line 353
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
            // line 354
            echo "            ";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : null);
            echo "
        ";
        } else {
            // line 356
            echo "            <div class=\"radio\">";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : null);
            echo "</div>
        ";
        }
        // line 358
        echo "
        ";
        // line 359
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 361
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 362
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 364
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : null) == false))) {
            // line 365
            echo "            </div>
        ";
        }
        // line 367
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 370
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 371
        echo "    ";
        ob_start();
        // line 372
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 376
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 377
        echo "    ";
        ob_start();
        // line 378
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 382
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 383
        echo "    ";
        ob_start();
        // line 384
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 385
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 387
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-datetime"));
            // line 388
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 389
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget');
            echo "
                ";
            // line 390
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget');
            echo "
                ";
            // line 391
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            echo "
                ";
            // line 392
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 395
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 398
    public function block_date_widget($context, array $blocks = array())
    {
        // line 399
        echo "    ";
        ob_start();
        // line 400
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 401
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 403
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-date"));
            // line 404
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 405
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 406
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 407
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 408
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 409
            echo "
            </div>
        ";
        }
        // line 412
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_time_widget($context, array $blocks = array())
    {
        // line 416
        echo "    ";
        ob_start();
        // line 417
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 418
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 420
            echo "            ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : null) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 421
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => "bootstrap-time"));
            // line 422
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 423
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            echo "
                ";
            // line 424
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 425
            echo "                ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : null));
            }
            // line 426
            echo "            </div>
        ";
        }
        // line 428
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 431
    public function block_number_widget($context, array $blocks = array())
    {
        // line 432
        echo "    ";
        ob_start();
        // line 433
        echo "        ";
        // line 434
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 435
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 439
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 440
        echo "    ";
        ob_start();
        // line 441
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 442
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 446
    public function block_money_widget($context, array $blocks = array())
    {
        // line 447
        echo "    ";
        ob_start();
        // line 448
        echo "        <div class=\"input-group\">
            ";
        // line 449
        echo strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 453
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 458
    public function block_url_widget($context, array $blocks = array())
    {
        // line 459
        echo "    ";
        ob_start();
        // line 460
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "url")) : ("url"));
        // line 461
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 465
    public function block_search_widget($context, array $blocks = array())
    {
        // line 466
        echo "    ";
        ob_start();
        // line 467
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "search")) : ("search"));
        // line 468
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 472
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 473
        echo "    ";
        ob_start();
        // line 474
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 475
        echo "        <div class=\"input-group\">
            ";
        // line 476
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 482
    public function block_password_widget($context, array $blocks = array())
    {
        // line 483
        echo "    ";
        ob_start();
        // line 484
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "password")) : ("password"));
        // line 485
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 489
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 490
        echo "    ";
        ob_start();
        // line 491
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 492
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 496
    public function block_email_widget($context, array $blocks = array())
    {
        // line 497
        echo "    ";
        ob_start();
        // line 498
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "email")) : ("email"));
        // line 499
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 503
    public function block_button_widget($context, array $blocks = array())
    {
        // line 504
        echo "    ";
        ob_start();
        // line 505
        echo "        ";
        if ((twig_test_empty((isset($context["label"]) ? $context["label"] : null)) &&  !((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 506
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            // line 507
            echo "        ";
        }
        // line 508
        echo "        ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "submit"))) {
            // line 509
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) ? $context["button_class"] : null), "primary")) : ("primary"))))));
            // line 510
            echo "        ";
        } else {
            // line 511
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) ? $context["button_class"] : null), "default")) : ("default"))))));
            // line 512
            echo "        ";
        }
        // line 513
        echo "        ";
        if ((array_key_exists("as_link", $context) && ((isset($context["as_link"]) ? $context["as_link"] : null) == true))) {
            // line 514
            echo "            <a ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array()) != ""))) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 516
            echo "            <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array()) != ""))) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array()));
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</button>
        ";
        }
        // line 518
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 521
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 522
        echo "    ";
        ob_start();
        // line 523
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 524
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 528
    public function block_reset_widget($context, array $blocks = array())
    {
        // line 529
        echo "    ";
        ob_start();
        // line 530
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "reset")) : ("reset"));
        // line 531
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 535
    public function block_form_actions_widget($context, array $blocks = array())
    {
        // line 536
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 537
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 538
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 541
    public function block_bs_static_widget($context, array $blocks = array())
    {
        // line 542
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control-static"))));
        // line 543
        echo "    <p id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</p>
";
    }

    // line 548
    public function block_form_label($context, array $blocks = array())
    {
        // line 549
        echo "    ";
        ob_start();
        // line 550
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 551
        echo "
        ";
        // line 552
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())))) {
            // line 553
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 554
            echo "        ";
        }
        // line 555
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())))) {
            // line 556
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 557
            echo "        ";
        }
        // line 558
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 559
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 560
            echo "        ";
        }
        // line 561
        echo "
        ";
        // line 562
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 563
            echo "            ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
            // line 564
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 565
            echo "
            ";
            // line 566
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
                // line 567
                echo "                ";
                $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
                // line 568
                echo "            ";
            }
            // line 569
            echo "
            ";
            // line 570
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 571
            echo "            ";
            if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
                // line 572
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim((((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : null)) . "-") . (isset($context["label_col"]) ? $context["label_col"] : null)))));
                // line 573
                echo "            ";
            } elseif (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
                // line 574
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " sr-only"))));
                // line 575
                echo "            ";
            }
            // line 576
            echo "
            ";
            // line 577
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 578
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 579
                echo "            ";
            }
            // line 580
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 581
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 582
                echo "            ";
            }
            // line 583
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 584
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 585
                echo "            ";
            }
            // line 586
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
            echo "</label>
        ";
        }
        // line 588
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 591
    public function block_button_label($context, array $blocks = array())
    {
    }

    // line 595
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 596
        echo "    ";
        ob_start();
        // line 597
        echo "        ";
        // line 601
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 605
    public function block_form_row($context, array $blocks = array())
    {
        // line 606
        echo "    ";
        ob_start();
        // line 607
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 608
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 609
        echo "
        ";
        // line 610
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())))) {
            // line 611
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 612
            echo "        ";
        }
        // line 613
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())))) {
            // line 614
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 615
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : null) === false) && array_key_exists("label_col", $context))) {
                // line 616
                echo "                ";
                $context["widget_col"] = ((isset($context["widget_col"]) ? $context["widget_col"] : null) + (isset($context["label_col"]) ? $context["label_col"] : null));
                // line 617
                echo "            ";
            }
            // line 618
            echo "        ";
        }
        // line 619
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 620
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 621
            echo "        ";
        }
        // line 622
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
            // line 623
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 624
            echo "        ";
        }
        // line 625
        echo "
        ";
        // line 626
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 627
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 628
        echo "
        <div class=\"form-group";
        // line 629
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 630
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 631
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
                <div class=\"col-";
            // line 632
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
                    ";
            // line 633
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 634
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 635
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 638
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
            echo "
                ";
            // line 639
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 640
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 641
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
            ";
        }
        // line 643
        echo "        </div>

        ";
        // line 645
        if (((isset($context["style"]) ? $context["style"] : null) == "inline")) {
            echo "&nbsp;";
        }
        // line 646
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 649
    public function block_form_input_group($context, array $blocks = array())
    {
        // line 650
        echo "    ";
        ob_start();
        // line 651
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array())))) {
            // line 652
            echo "            ";
            $context["input_group"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array());
            // line 653
            echo "        ";
        }
        // line 654
        echo "        ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter((isset($context["input_group"]) ? $context["input_group"] : null), array())) : (array()));
        // line 655
        echo "        ";
        if ( !twig_test_empty((isset($context["input_group"]) ? $context["input_group"] : null))) {
            // line 656
            echo "            ";
            $context["ig_size_class"] = "";
            // line 657
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array()) == "large"))) {
                // line 658
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 659
                echo "            ";
            }
            // line 660
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array()) == "small"))) {
                // line 661
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 662
                echo "            ";
            }
            // line 663
            echo "            <div class=\"input-group";
            echo twig_escape_filter($this->env, (isset($context["ig_size_class"]) ? $context["ig_size_class"] : null), "html", null, true);
            echo "\">
                ";
            // line 664
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array())))) {
                // line 665
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array()));
                echo "</span>
                ";
            }
            // line 667
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_prepend", array())))) {
                // line 668
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_prepend"]) ? $context["input_group_button_prepend"] : null), 'widget');
                echo "</span>
                ";
            }
            // line 670
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                ";
            // line 671
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_append", array())))) {
                // line 672
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_append"]) ? $context["input_group_button_append"] : null), 'widget');
                echo "</span>
                ";
            }
            // line 674
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array())))) {
                // line 675
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array()));
                echo "</span>
                ";
            }
            // line 677
            echo "            </div>
        ";
        } else {
            // line 679
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
        ";
        }
        // line 681
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 684
    public function block_form_help($context, array $blocks = array())
    {
        // line 685
        echo "    ";
        ob_start();
        // line 686
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array())))) {
            // line 687
            echo "            ";
            $context["help_text"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array());
            // line 688
            echo "        ";
        }
        // line 689
        echo "        ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) ? $context["help_text"] : null), "")) : (""));
        // line 690
        echo "        ";
        if ( !twig_test_empty((isset($context["help_text"]) ? $context["help_text"] : null))) {
            // line 691
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_text"]) ? $context["help_text"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</span>
        ";
        }
        // line 693
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 696
    public function block_button_row($context, array $blocks = array())
    {
        // line 697
        echo "    ";
        ob_start();
        // line 698
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 699
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 700
        echo "
        ";
        // line 701
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())))) {
            // line 702
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array());
            // line 703
            echo "        ";
        }
        // line 704
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())))) {
            // line 705
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array());
            // line 706
            echo "        ";
        }
        // line 707
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())))) {
            // line 708
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array());
            // line 709
            echo "        ";
        }
        // line 710
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
            // line 711
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 712
            echo "        ";
        }
        // line 713
        echo "
        ";
        // line 714
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 715
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 716
        echo "
        <div class=\"form-group\">
            ";
        // line 718
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 719
            echo "                <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, (isset($context["label_col"]) ? $context["label_col"] : null), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : null), "html", null, true);
            echo "\">
            ";
        }
        // line 721
        echo "
            ";
        // line 722
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

            ";
        // line 724
        if (((isset($context["style"]) ? $context["style"] : null) == "horizontal")) {
            // line 725
            echo "                </div>
            ";
        }
        // line 727
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 731
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 732
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
    }

    // line 735
    public function block_form_actions_row($context, array $blocks = array())
    {
        // line 736
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
    }

    // line 741
    public function block_form($context, array $blocks = array())
    {
        // line 742
        echo "    ";
        ob_start();
        // line 743
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 744
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        ";
        // line 745
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 749
    public function block_form_start($context, array $blocks = array())
    {
        // line 750
        echo "    ";
        ob_start();
        // line 751
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->backupFormSettings(), "html", null, true);
        echo "
        ";
        // line 752
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 753
        echo "        ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 754
            echo "            ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
            // line 755
            echo "        ";
        } else {
            // line 756
            echo "            ";
            $context["form_method"] = "POST";
            // line 757
            echo "        ";
        }
        // line 758
        echo "
        ";
        // line 759
        if (array_key_exists("style", $context)) {
            // line 760
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-") . (isset($context["style"]) ? $context["style"] : null)))));
            // line 761
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle((isset($context["style"]) ? $context["style"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 763
        echo "
        ";
        // line 764
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            // line 765
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 766
            echo "        ";
        }
        // line 767
        echo "
        ";
        // line 768
        if (array_key_exists("col_size", $context)) {
            // line 769
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize((isset($context["col_size"]) ? $context["col_size"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 771
        echo "
        ";
        // line 772
        if (array_key_exists("widget_col", $context)) {
            // line 773
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol((isset($context["widget_col"]) ? $context["widget_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 775
        echo "
        ";
        // line 776
        if (array_key_exists("label_col", $context)) {
            // line 777
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol((isset($context["label_col"]) ? $context["label_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 779
        echo "
        ";
        // line 780
        if (array_key_exists("simple_col", $context)) {
            // line 781
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol((isset($context["simple_col"]) ? $context["simple_col"] : null)), "html", null, true);
            echo "
        ";
        }
        // line 783
        echo "
        ";
        // line 784
        if (( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array(), "any", true, true) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array())))) {
            // line 785
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("role" => "form"));
            // line 786
            echo "        ";
        }
        // line 787
        echo "
        <form  name=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 789
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 790
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
        ";
        }
        // line 792
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 795
    public function block_form_end($context, array $blocks = array())
    {
        // line 796
        echo "    ";
        ob_start();
        // line 797
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 798
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
        ";
        }
        // line 800
        echo "        </form>
        ";
        // line 801
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()) {
            // line 802
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 804
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()) {
            // line 805
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 807
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()) {
            // line 808
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 810
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()) {
            // line 811
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 813
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol()) {
            // line 814
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 816
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->restoreFormSettings(), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 820
    public function block_form_enctype($context, array $blocks = array())
    {
        // line 821
        echo "    ";
        ob_start();
        // line 822
        echo "        ";
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 823
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 826
    public function block_global_form_errors($context, array $blocks = array())
    {
        // line 827
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 828
            echo "        ";
            $context["global_errors"] = true;
            // line 829
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
    }

    // line 833
    public function block_form_errors($context, array $blocks = array())
    {
        // line 834
        echo "    ";
        ob_start();
        // line 835
        echo "        ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter((isset($context["global_errors"]) ? $context["global_errors"] : null), false)) : (false));
        // line 836
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : null), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 837
        echo "
        ";
        // line 838
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())))) {
            // line 839
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array());
            // line 840
            echo "        ";
        }
        // line 841
        echo "
        ";
        // line 842
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 843
            echo "            ";
            if ((isset($context["global_errors"]) ? $context["global_errors"] : null)) {
                // line 844
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 846
            echo "            <ul";
            if ( !(isset($context["global_errors"]) ? $context["global_errors"] : null)) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 847
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 848
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 850
            echo "            </ul>
            ";
            // line 851
            if (((isset($context["global_errors"]) ? $context["global_errors"] : null) == true)) {
                // line 852
                echo "                </div>
            ";
            }
            // line 854
            echo "        ";
        }
        // line 855
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 858
    public function block_form_rest($context, array $blocks = array())
    {
        // line 859
        echo "    ";
        ob_start();
        // line 860
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 861
            echo "            ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 862
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 864
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 865
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 870
    public function block_form_rows($context, array $blocks = array())
    {
        // line 871
        echo "    ";
        ob_start();
        // line 872
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 873
            echo "            ";
            $context["childAttr"] = array();
            // line 874
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true)) {
                // line 875
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("col_size" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array())));
                // line 876
                echo "            ";
            }
            // line 877
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true)) {
                // line 878
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("widget_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array())));
                // line 879
                echo "            ";
            }
            // line 880
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true)) {
                // line 881
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("label_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array())));
                // line 882
                echo "            ";
            }
            // line 883
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true)) {
                // line 884
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("simple_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array())));
                // line 885
                echo "            ";
            }
            // line 886
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) {
                // line 887
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : null), array("style" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())));
                // line 888
                echo "            ";
            }
            // line 889
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', (isset($context["childAttr"]) ? $context["childAttr"] : null));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 891
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 894
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 895
        echo "    ";
        ob_start();
        // line 896
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : null)) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : null)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : null)) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "html", null, true);
            echo "\"";
        }
        // line 897
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($context["attrname"], array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 901
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 902
        echo "    ";
        ob_start();
        // line 903
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()) == "inline") || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()) == "horizontal")))) {
            // line 904
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((("form-" . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array())) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 905
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("style" => null));
            // line 906
            echo "        ";
        }
        // line 907
        echo "        ";
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        // line 908
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (( !(null === $context["attrvalue"]) &&  !twig_test_iterable($context["attrvalue"]))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 909
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 912
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 913
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo " disabled=\"disabled\"";
        }
        // line 914
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Form:bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3047 => 914,  3038 => 913,  3035 => 912,  3030 => 909,  3015 => 908,  3008 => 907,  3005 => 906,  3002 => 905,  2999 => 904,  2996 => 903,  2993 => 902,  2990 => 901,  2985 => 898,  2964 => 897,  2939 => 896,  2936 => 895,  2933 => 894,  2928 => 891,  2919 => 889,  2916 => 888,  2913 => 887,  2910 => 886,  2907 => 885,  2904 => 884,  2901 => 883,  2898 => 882,  2895 => 881,  2892 => 880,  2889 => 879,  2886 => 878,  2883 => 877,  2880 => 876,  2877 => 875,  2874 => 874,  2871 => 873,  2866 => 872,  2863 => 871,  2860 => 870,  2855 => 865,  2849 => 864,  2843 => 862,  2840 => 861,  2835 => 860,  2832 => 859,  2829 => 858,  2824 => 855,  2821 => 854,  2817 => 852,  2815 => 851,  2812 => 850,  2803 => 848,  2799 => 847,  2792 => 846,  2788 => 844,  2785 => 843,  2783 => 842,  2780 => 841,  2777 => 840,  2774 => 839,  2772 => 838,  2769 => 837,  2766 => 836,  2763 => 835,  2760 => 834,  2757 => 833,  2749 => 829,  2746 => 828,  2743 => 827,  2740 => 826,  2735 => 823,  2730 => 822,  2727 => 821,  2724 => 820,  2716 => 816,  2710 => 814,  2707 => 813,  2701 => 811,  2698 => 810,  2692 => 808,  2689 => 807,  2683 => 805,  2680 => 804,  2674 => 802,  2672 => 801,  2669 => 800,  2663 => 798,  2660 => 797,  2657 => 796,  2654 => 795,  2649 => 792,  2643 => 790,  2641 => 789,  2617 => 788,  2614 => 787,  2611 => 786,  2608 => 785,  2606 => 784,  2603 => 783,  2597 => 781,  2595 => 780,  2592 => 779,  2586 => 777,  2584 => 776,  2581 => 775,  2575 => 773,  2573 => 772,  2570 => 771,  2564 => 769,  2562 => 768,  2559 => 767,  2556 => 766,  2553 => 765,  2551 => 764,  2548 => 763,  2542 => 761,  2539 => 760,  2537 => 759,  2534 => 758,  2531 => 757,  2528 => 756,  2525 => 755,  2522 => 754,  2519 => 753,  2517 => 752,  2512 => 751,  2509 => 750,  2506 => 749,  2499 => 745,  2495 => 744,  2490 => 743,  2487 => 742,  2484 => 741,  2477 => 736,  2474 => 735,  2467 => 732,  2464 => 731,  2458 => 727,  2454 => 725,  2452 => 724,  2447 => 722,  2444 => 721,  2432 => 719,  2430 => 718,  2426 => 716,  2423 => 715,  2421 => 714,  2418 => 713,  2415 => 712,  2412 => 711,  2409 => 710,  2406 => 709,  2403 => 708,  2400 => 707,  2397 => 706,  2394 => 705,  2391 => 704,  2388 => 703,  2385 => 702,  2383 => 701,  2380 => 700,  2377 => 699,  2374 => 698,  2371 => 697,  2368 => 696,  2363 => 693,  2357 => 691,  2354 => 690,  2351 => 689,  2348 => 688,  2345 => 687,  2342 => 686,  2339 => 685,  2336 => 684,  2331 => 681,  2325 => 679,  2321 => 677,  2315 => 675,  2312 => 674,  2306 => 672,  2304 => 671,  2299 => 670,  2293 => 668,  2290 => 667,  2284 => 665,  2282 => 664,  2277 => 663,  2274 => 662,  2271 => 661,  2268 => 660,  2265 => 659,  2262 => 658,  2259 => 657,  2256 => 656,  2253 => 655,  2250 => 654,  2247 => 653,  2244 => 652,  2241 => 651,  2238 => 650,  2235 => 649,  2230 => 646,  2226 => 645,  2222 => 643,  2217 => 641,  2213 => 640,  2209 => 639,  2204 => 638,  2198 => 635,  2194 => 634,  2190 => 633,  2184 => 632,  2179 => 631,  2177 => 630,  2171 => 629,  2168 => 628,  2165 => 627,  2163 => 626,  2160 => 625,  2157 => 624,  2154 => 623,  2151 => 622,  2148 => 621,  2145 => 620,  2142 => 619,  2139 => 618,  2136 => 617,  2133 => 616,  2130 => 615,  2127 => 614,  2124 => 613,  2121 => 612,  2118 => 611,  2116 => 610,  2113 => 609,  2110 => 608,  2107 => 607,  2104 => 606,  2101 => 605,  2093 => 601,  2091 => 597,  2088 => 596,  2085 => 595,  2080 => 591,  2075 => 588,  2056 => 586,  2053 => 585,  2050 => 584,  2047 => 583,  2044 => 582,  2041 => 581,  2038 => 580,  2035 => 579,  2032 => 578,  2030 => 577,  2027 => 576,  2024 => 575,  2021 => 574,  2018 => 573,  2015 => 572,  2012 => 571,  2010 => 570,  2007 => 569,  2004 => 568,  2001 => 567,  1999 => 566,  1996 => 565,  1993 => 564,  1990 => 563,  1988 => 562,  1985 => 561,  1982 => 560,  1979 => 559,  1976 => 558,  1973 => 557,  1970 => 556,  1967 => 555,  1964 => 554,  1961 => 553,  1959 => 552,  1956 => 551,  1953 => 550,  1950 => 549,  1947 => 548,  1925 => 543,  1922 => 542,  1919 => 541,  1911 => 538,  1907 => 537,  1902 => 536,  1899 => 535,  1891 => 531,  1888 => 530,  1885 => 529,  1882 => 528,  1874 => 524,  1871 => 523,  1868 => 522,  1865 => 521,  1860 => 518,  1847 => 516,  1836 => 514,  1833 => 513,  1830 => 512,  1827 => 511,  1824 => 510,  1821 => 509,  1818 => 508,  1815 => 507,  1812 => 506,  1809 => 505,  1806 => 504,  1803 => 503,  1795 => 499,  1792 => 498,  1789 => 497,  1786 => 496,  1778 => 492,  1775 => 491,  1772 => 490,  1769 => 489,  1761 => 485,  1758 => 484,  1755 => 483,  1752 => 482,  1743 => 476,  1740 => 475,  1737 => 474,  1734 => 473,  1731 => 472,  1723 => 468,  1720 => 467,  1717 => 466,  1714 => 465,  1706 => 461,  1703 => 460,  1700 => 459,  1697 => 458,  1690 => 453,  1688 => 449,  1685 => 448,  1682 => 447,  1679 => 446,  1671 => 442,  1668 => 441,  1665 => 440,  1662 => 439,  1654 => 435,  1651 => 434,  1649 => 433,  1646 => 432,  1643 => 431,  1638 => 428,  1634 => 426,  1628 => 425,  1623 => 424,  1619 => 423,  1614 => 422,  1611 => 421,  1608 => 420,  1602 => 418,  1599 => 417,  1596 => 416,  1593 => 415,  1588 => 412,  1583 => 409,  1581 => 408,  1580 => 407,  1579 => 406,  1578 => 405,  1573 => 404,  1570 => 403,  1564 => 401,  1561 => 400,  1558 => 399,  1555 => 398,  1550 => 395,  1544 => 392,  1540 => 391,  1536 => 390,  1532 => 389,  1527 => 388,  1524 => 387,  1518 => 385,  1515 => 384,  1512 => 383,  1509 => 382,  1493 => 378,  1490 => 377,  1487 => 376,  1471 => 372,  1468 => 371,  1465 => 370,  1460 => 367,  1456 => 365,  1454 => 364,  1450 => 362,  1448 => 361,  1443 => 359,  1440 => 358,  1434 => 356,  1428 => 354,  1426 => 353,  1423 => 352,  1417 => 350,  1411 => 348,  1407 => 346,  1405 => 345,  1401 => 344,  1385 => 343,  1382 => 342,  1379 => 341,  1376 => 340,  1373 => 339,  1370 => 338,  1367 => 337,  1364 => 336,  1361 => 335,  1358 => 334,  1355 => 333,  1352 => 332,  1349 => 331,  1346 => 330,  1344 => 329,  1341 => 328,  1333 => 326,  1331 => 325,  1327 => 324,  1320 => 323,  1317 => 322,  1314 => 321,  1311 => 320,  1309 => 319,  1306 => 318,  1303 => 317,  1300 => 316,  1297 => 315,  1294 => 314,  1291 => 313,  1288 => 312,  1285 => 311,  1282 => 310,  1280 => 309,  1277 => 308,  1275 => 307,  1272 => 306,  1269 => 305,  1266 => 304,  1263 => 303,  1258 => 300,  1254 => 299,  1251 => 298,  1247 => 296,  1245 => 295,  1241 => 293,  1239 => 292,  1234 => 290,  1231 => 289,  1225 => 287,  1219 => 285,  1217 => 284,  1214 => 283,  1208 => 281,  1202 => 279,  1198 => 277,  1196 => 276,  1192 => 275,  1176 => 274,  1173 => 273,  1170 => 272,  1167 => 271,  1164 => 270,  1161 => 269,  1158 => 268,  1155 => 267,  1152 => 266,  1149 => 265,  1146 => 264,  1143 => 263,  1140 => 262,  1137 => 261,  1135 => 260,  1132 => 259,  1124 => 257,  1122 => 256,  1118 => 255,  1111 => 254,  1108 => 253,  1105 => 252,  1102 => 251,  1099 => 250,  1097 => 249,  1094 => 248,  1091 => 247,  1088 => 246,  1085 => 245,  1082 => 244,  1079 => 243,  1076 => 242,  1073 => 241,  1070 => 240,  1067 => 239,  1064 => 238,  1061 => 237,  1059 => 236,  1056 => 235,  1053 => 234,  1050 => 233,  1047 => 232,  1044 => 231,  1039 => 228,  1025 => 227,  1013 => 225,  1006 => 222,  1004 => 221,  999 => 220,  996 => 219,  978 => 218,  975 => 217,  972 => 216,  963 => 211,  960 => 210,  957 => 209,  951 => 207,  949 => 206,  944 => 205,  941 => 204,  938 => 203,  925 => 201,  923 => 200,  916 => 199,  913 => 198,  910 => 197,  907 => 196,  904 => 195,  898 => 191,  892 => 190,  886 => 188,  880 => 186,  877 => 185,  873 => 184,  868 => 183,  865 => 182,  862 => 181,  857 => 178,  851 => 176,  845 => 174,  842 => 173,  839 => 172,  836 => 171,  831 => 168,  827 => 166,  825 => 165,  820 => 163,  817 => 162,  809 => 160,  807 => 159,  804 => 158,  801 => 157,  798 => 156,  796 => 155,  793 => 154,  790 => 153,  787 => 152,  785 => 151,  782 => 150,  779 => 149,  776 => 148,  773 => 147,  768 => 144,  764 => 142,  762 => 141,  755 => 139,  752 => 138,  750 => 137,  747 => 136,  739 => 134,  737 => 133,  734 => 132,  731 => 131,  728 => 130,  725 => 129,  722 => 128,  719 => 127,  717 => 126,  714 => 125,  711 => 124,  708 => 123,  705 => 122,  699 => 118,  689 => 116,  687 => 115,  684 => 114,  676 => 111,  668 => 108,  663 => 107,  661 => 106,  656 => 104,  652 => 103,  648 => 102,  644 => 100,  640 => 99,  634 => 97,  631 => 96,  628 => 95,  626 => 94,  623 => 93,  620 => 92,  617 => 91,  614 => 90,  611 => 89,  608 => 88,  605 => 87,  602 => 86,  599 => 85,  596 => 84,  593 => 83,  590 => 82,  587 => 81,  579 => 77,  576 => 76,  573 => 75,  570 => 74,  567 => 73,  564 => 72,  556 => 67,  551 => 66,  545 => 64,  543 => 63,  538 => 62,  535 => 61,  532 => 60,  527 => 57,  523 => 55,  520 => 54,  507 => 52,  505 => 51,  485 => 49,  482 => 48,  480 => 47,  477 => 46,  474 => 45,  471 => 44,  468 => 43,  465 => 42,  462 => 41,  459 => 40,  457 => 39,  454 => 38,  452 => 37,  449 => 36,  441 => 34,  439 => 33,  436 => 32,  433 => 31,  430 => 30,  427 => 29,  424 => 28,  421 => 27,  418 => 26,  415 => 25,  412 => 24,  409 => 23,  406 => 22,  403 => 21,  401 => 20,  398 => 19,  395 => 18,  392 => 17,  389 => 16,  386 => 15,  381 => 12,  375 => 10,  369 => 8,  366 => 7,  363 => 6,  360 => 5,  356 => 912,  353 => 911,  351 => 901,  348 => 900,  346 => 894,  343 => 893,  341 => 870,  338 => 869,  335 => 867,  333 => 858,  330 => 857,  328 => 833,  325 => 832,  323 => 826,  320 => 825,  318 => 820,  315 => 819,  313 => 795,  310 => 794,  308 => 749,  305 => 748,  303 => 741,  300 => 740,  297 => 738,  295 => 735,  292 => 734,  290 => 731,  287 => 730,  285 => 696,  282 => 695,  280 => 684,  277 => 683,  275 => 649,  272 => 648,  270 => 605,  267 => 604,  265 => 595,  262 => 594,  259 => 592,  257 => 591,  254 => 590,  252 => 548,  249 => 547,  246 => 545,  244 => 541,  241 => 540,  239 => 535,  236 => 534,  234 => 528,  231 => 527,  229 => 521,  226 => 520,  224 => 503,  221 => 502,  219 => 496,  216 => 495,  214 => 489,  211 => 488,  209 => 482,  206 => 481,  204 => 472,  201 => 471,  199 => 465,  196 => 464,  194 => 458,  191 => 457,  189 => 446,  186 => 445,  184 => 439,  181 => 438,  179 => 431,  176 => 430,  174 => 415,  171 => 414,  169 => 398,  166 => 397,  164 => 382,  161 => 381,  159 => 376,  156 => 375,  154 => 370,  151 => 369,  149 => 303,  146 => 302,  144 => 231,  141 => 230,  139 => 216,  136 => 215,  134 => 195,  131 => 194,  129 => 181,  126 => 180,  124 => 171,  121 => 170,  119 => 147,  116 => 146,  114 => 122,  111 => 121,  109 => 81,  106 => 80,  104 => 72,  101 => 71,  99 => 60,  96 => 59,  94 => 15,  91 => 14,  89 => 5,  86 => 4,  83 => 2,  14 => 1,);
    }
}
