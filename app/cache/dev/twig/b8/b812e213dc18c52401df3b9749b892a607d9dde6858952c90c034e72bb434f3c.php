<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig */
class __TwigTemplate_8371377da3c59eae80688ec8ffff8c2c16c3e8f158a93ac50f0628f5b18ae0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f3b61f9ccccb53b7bafcae33ef1b85ebff8aff7b827f1b782b664f82f531ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3b61f9ccccb53b7bafcae33ef1b85ebff8aff7b827f1b782b664f82f531ddf->enter($__internal_1f3b61f9ccccb53b7bafcae33ef1b85ebff8aff7b827f1b782b664f82f531ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('date_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('time_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 213
        echo "
";
        // line 214
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 288
        echo "
";
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('form_label', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('choice_label', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('radio_label', $context, $blocks);
        // line 309
        echo "
";
        // line 310
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 328
        echo "
";
        // line 330
        echo "
";
        // line 331
        $this->displayBlock('form_row', $context, $blocks);
        // line 338
        echo "
";
        // line 339
        $this->displayBlock('button_row', $context, $blocks);
        // line 344
        echo "
";
        // line 345
        $this->displayBlock('choice_row', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('date_row', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('time_row', $context, $blocks);
        // line 359
        echo "
";
        // line 360
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 371
        echo "
";
        // line 372
        $this->displayBlock('radio_row', $context, $blocks);
        // line 378
        echo "
";
        // line 380
        echo "
";
        // line 381
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1f3b61f9ccccb53b7bafcae33ef1b85ebff8aff7b827f1b782b664f82f531ddf->leave($__internal_1f3b61f9ccccb53b7bafcae33ef1b85ebff8aff7b827f1b782b664f82f531ddf_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ecbfa9bd8b0d8eca7ac49908cf90bff57a18f39995a37b4b88bbf15d88dc580b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbfa9bd8b0d8eca7ac49908cf90bff57a18f39995a37b4b88bbf15d88dc580b->enter($__internal_ecbfa9bd8b0d8eca7ac49908cf90bff57a18f39995a37b4b88bbf15d88dc580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ecbfa9bd8b0d8eca7ac49908cf90bff57a18f39995a37b4b88bbf15d88dc580b->leave($__internal_ecbfa9bd8b0d8eca7ac49908cf90bff57a18f39995a37b4b88bbf15d88dc580b_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4f0fa10b811008041abcdcd0f554b5978e1ad08b26cbbbba8590c70509adddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0fa10b811008041abcdcd0f554b5978e1ad08b26cbbbba8590c70509adddbf->enter($__internal_4f0fa10b811008041abcdcd0f554b5978e1ad08b26cbbbba8590c70509adddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4f0fa10b811008041abcdcd0f554b5978e1ad08b26cbbbba8590c70509adddbf->leave($__internal_4f0fa10b811008041abcdcd0f554b5978e1ad08b26cbbbba8590c70509adddbf_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9dab883b797bce1baa457941058bac5c1a8d2ab6a65e5e4234185a7b5227f128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dab883b797bce1baa457941058bac5c1a8d2ab6a65e5e4234185a7b5227f128->enter($__internal_9dab883b797bce1baa457941058bac5c1a8d2ab6a65e5e4234185a7b5227f128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9dab883b797bce1baa457941058bac5c1a8d2ab6a65e5e4234185a7b5227f128->leave($__internal_9dab883b797bce1baa457941058bac5c1a8d2ab6a65e5e4234185a7b5227f128_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a8323ab1ad52118cfae4d4085f64144374120c81ed5cef9cf3bdd3e9da364782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8323ab1ad52118cfae4d4085f64144374120c81ed5cef9cf3bdd3e9da364782->enter($__internal_a8323ab1ad52118cfae4d4085f64144374120c81ed5cef9cf3bdd3e9da364782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 53
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 54
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 55
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 57
        echo "    </div>";
        
        $__internal_a8323ab1ad52118cfae4d4085f64144374120c81ed5cef9cf3bdd3e9da364782->leave($__internal_a8323ab1ad52118cfae4d4085f64144374120c81ed5cef9cf3bdd3e9da364782_prof);

    }

    // line 60
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2ea9953eae84f708f910b767da1bfa35c4e89102ac63de5610e6df62925a1460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea9953eae84f708f910b767da1bfa35c4e89102ac63de5610e6df62925a1460->enter($__internal_2ea9953eae84f708f910b767da1bfa35c4e89102ac63de5610e6df62925a1460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 61
        echo "<div class=\"input-group\">";
        // line 62
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 63
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_2ea9953eae84f708f910b767da1bfa35c4e89102ac63de5610e6df62925a1460->leave($__internal_2ea9953eae84f708f910b767da1bfa35c4e89102ac63de5610e6df62925a1460_prof);

    }

    // line 67
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_391ff30efdf239bfc9d1a630adceea200b833aa5db6d703e7d2d589010193c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391ff30efdf239bfc9d1a630adceea200b833aa5db6d703e7d2d589010193c2c->enter($__internal_391ff30efdf239bfc9d1a630adceea200b833aa5db6d703e7d2d589010193c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 68
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 69
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 71
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 72
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 77
            echo "</div>";
        }
        
        $__internal_391ff30efdf239bfc9d1a630adceea200b833aa5db6d703e7d2d589010193c2c->leave($__internal_391ff30efdf239bfc9d1a630adceea200b833aa5db6d703e7d2d589010193c2c_prof);

    }

    // line 81
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3a7986b7c6d4d3bad1cf602a2cb60aa98df9018a0a3d74ceb5c25f98a7370c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7986b7c6d4d3bad1cf602a2cb60aa98df9018a0a3d74ceb5c25f98a7370c93->enter($__internal_3a7986b7c6d4d3bad1cf602a2cb60aa98df9018a0a3d74ceb5c25f98a7370c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 82
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 83
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 85
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 86
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 87
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 89
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 95
                echo "</div>";
            }
        }
        
        $__internal_3a7986b7c6d4d3bad1cf602a2cb60aa98df9018a0a3d74ceb5c25f98a7370c93->leave($__internal_3a7986b7c6d4d3bad1cf602a2cb60aa98df9018a0a3d74ceb5c25f98a7370c93_prof);

    }

    // line 100
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_08bd6f0137729f5997f812cfd36a3bbdd1b38b02617f07d37ab6948df4046c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bd6f0137729f5997f812cfd36a3bbdd1b38b02617f07d37ab6948df4046c7a->enter($__internal_08bd6f0137729f5997f812cfd36a3bbdd1b38b02617f07d37ab6948df4046c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 101
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 105
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 106
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 109
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 110
                echo "</div>";
            }
        }
        
        $__internal_08bd6f0137729f5997f812cfd36a3bbdd1b38b02617f07d37ab6948df4046c7a->leave($__internal_08bd6f0137729f5997f812cfd36a3bbdd1b38b02617f07d37ab6948df4046c7a_prof);

    }

    // line 115
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_45c7cdb224ba3a41dd0e1f8b1904832478087b65714fd88e7db97873a4e40763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c7cdb224ba3a41dd0e1f8b1904832478087b65714fd88e7db97873a4e40763->enter($__internal_45c7cdb224ba3a41dd0e1f8b1904832478087b65714fd88e7db97873a4e40763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 116
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 117
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_45c7cdb224ba3a41dd0e1f8b1904832478087b65714fd88e7db97873a4e40763->leave($__internal_45c7cdb224ba3a41dd0e1f8b1904832478087b65714fd88e7db97873a4e40763_prof);

    }

    // line 120
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1ef090a6ef655bffdda5e762785778b27adde4010836e8a32fc7d89e9733b6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef090a6ef655bffdda5e762785778b27adde4010836e8a32fc7d89e9733b6fe->enter($__internal_1ef090a6ef655bffdda5e762785778b27adde4010836e8a32fc7d89e9733b6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 121
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 122
            echo "<div class=\"control-group\">";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "</div>";
        } else {
            // line 131
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 134
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        }
        
        $__internal_1ef090a6ef655bffdda5e762785778b27adde4010836e8a32fc7d89e9733b6fe->leave($__internal_1ef090a6ef655bffdda5e762785778b27adde4010836e8a32fc7d89e9733b6fe_prof);

    }

    // line 142
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1fecfed0757c699d4ae5581174e8170df10d11d2e887811dac836908d7aad0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fecfed0757c699d4ae5581174e8170df10d11d2e887811dac836908d7aad0f5->enter($__internal_1fecfed0757c699d4ae5581174e8170df10d11d2e887811dac836908d7aad0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 143
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 144
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 147
            echo "<div class=\"checkbox\">";
            // line 148
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 149
            echo "</div>";
        }
        
        $__internal_1fecfed0757c699d4ae5581174e8170df10d11d2e887811dac836908d7aad0f5->leave($__internal_1fecfed0757c699d4ae5581174e8170df10d11d2e887811dac836908d7aad0f5_prof);

    }

    // line 153
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1f680a3263196c3d44ffb3ce7d6d9cdba7e3adbb20319cbc16418736fea2afa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f680a3263196c3d44ffb3ce7d6d9cdba7e3adbb20319cbc16418736fea2afa8->enter($__internal_1f680a3263196c3d44ffb3ce7d6d9cdba7e3adbb20319cbc16418736fea2afa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 155
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"radio\">";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_1f680a3263196c3d44ffb3ce7d6d9cdba7e3adbb20319cbc16418736fea2afa8->leave($__internal_1f680a3263196c3d44ffb3ce7d6d9cdba7e3adbb20319cbc16418736fea2afa8_prof);

    }

    // line 164
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_ba3a460387d69df54e32aa42fdf41caee9e0005f02ffb858b6569eafc98bd29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3a460387d69df54e32aa42fdf41caee9e0005f02ffb858b6569eafc98bd29d->enter($__internal_ba3a460387d69df54e32aa42fdf41caee9e0005f02ffb858b6569eafc98bd29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 165
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 169
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "</ul>
    </div>";
        
        $__internal_ba3a460387d69df54e32aa42fdf41caee9e0005f02ffb858b6569eafc98bd29d->leave($__internal_ba3a460387d69df54e32aa42fdf41caee9e0005f02ffb858b6569eafc98bd29d_prof);

    }

    // line 175
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_a7e0cd7c4f960c19bb5cd677729f4ed393ef967b46804acd78847dc51765fbf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e0cd7c4f960c19bb5cd677729f4ed393ef967b46804acd78847dc51765fbf6->enter($__internal_a7e0cd7c4f960c19bb5cd677729f4ed393ef967b46804acd78847dc51765fbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 176
        echo "<li>
        ";
        // line 177
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 178
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 179
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 182
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 183
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 187
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 188
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 190
            echo "                </label>
            </div>";
        } else {
            // line 193
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "
                    ";
            // line 197
            if (array_key_exists("defaultCategory", $context)) {
                // line 198
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 200
            echo "                </label>
            </div>";
        }
        // line 203
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 204
            echo "            <ul>
                ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 206
                echo "                    ";
                $context["child"] = $context["item"];
                // line 207
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "</ul>
        ";
        }
        // line 211
        echo "    </li>";
        
        $__internal_a7e0cd7c4f960c19bb5cd677729f4ed393ef967b46804acd78847dc51765fbf6->leave($__internal_a7e0cd7c4f960c19bb5cd677729f4ed393ef967b46804acd78847dc51765fbf6_prof);

    }

    // line 214
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_bbeca20ec398f86dcd4cc71645d72a2c8cf32bd1345388f2bd1a12f009fbc9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeca20ec398f86dcd4cc71645d72a2c8cf32bd1345388f2bd1a12f009fbc9f2->enter($__internal_bbeca20ec398f86dcd4cc71645d72a2c8cf32bd1345388f2bd1a12f009fbc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 215
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 217
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 218
            echo "        <ul class=\"translationsLocales nav nav-tabs\">
            ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 220
                echo "                <li class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 222
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "        </ul>
        ";
        }
        // line 228
        echo "
        <div class=\"translationsFields\">
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 231
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " translation-field ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "visible";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 232
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 233
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        </div>
    </div>
";
        
        $__internal_bbeca20ec398f86dcd4cc71645d72a2c8cf32bd1345388f2bd1a12f009fbc9f2->leave($__internal_bbeca20ec398f86dcd4cc71645d72a2c8cf32bd1345388f2bd1a12f009fbc9f2_prof);

    }

    // line 240
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_4a1de3403fbd4d7bc12cf900123849665b96cac8a48e068f79990aa220720139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1de3403fbd4d7bc12cf900123849665b96cac8a48e068f79990aa220720139->enter($__internal_4a1de3403fbd4d7bc12cf900123849665b96cac8a48e068f79990aa220720139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 241
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 242
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 244
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_4a1de3403fbd4d7bc12cf900123849665b96cac8a48e068f79990aa220720139->leave($__internal_4a1de3403fbd4d7bc12cf900123849665b96cac8a48e068f79990aa220720139_prof);

    }

    // line 247
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_c267cee8fc82a4e4c678fc01564c39636f0e0e102c856b55fda2433b1f0b4bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c267cee8fc82a4e4c678fc01564c39636f0e0e102c856b55fda2433b1f0b4bb8->enter($__internal_c267cee8fc82a4e4c678fc01564c39636f0e0e102c856b55fda2433b1f0b4bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 248
        echo "    ";
        ob_start();
        // line 249
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 250
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 251
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c267cee8fc82a4e4c678fc01564c39636f0e0e102c856b55fda2433b1f0b4bb8->leave($__internal_c267cee8fc82a4e4c678fc01564c39636f0e0e102c856b55fda2433b1f0b4bb8_prof);

    }

    // line 259
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_59f0e74edf3ed025ed4e6d0d09333c1c68c644ade67555f36c64ca6844388be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f0e74edf3ed025ed4e6d0d09333c1c68c644ade67555f36c64ca6844388be5->enter($__internal_59f0e74edf3ed025ed4e6d0d09333c1c68c644ade67555f36c64ca6844388be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 260
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 264
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 276
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 277
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_59f0e74edf3ed025ed4e6d0d09333c1c68c644ade67555f36c64ca6844388be5->leave($__internal_59f0e74edf3ed025ed4e6d0d09333c1c68c644ade67555f36c64ca6844388be5_prof);

    }

    // line 291
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bd4c2cf2722cd754af19dff2dd1ec98b60134ace2825598cc9ed776c4ae71e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4c2cf2722cd754af19dff2dd1ec98b60134ace2825598cc9ed776c4ae71e89->enter($__internal_bd4c2cf2722cd754af19dff2dd1ec98b60134ace2825598cc9ed776c4ae71e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 292
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 293
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_bd4c2cf2722cd754af19dff2dd1ec98b60134ace2825598cc9ed776c4ae71e89->leave($__internal_bd4c2cf2722cd754af19dff2dd1ec98b60134ace2825598cc9ed776c4ae71e89_prof);

    }

    // line 296
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_25ee52a5282485674b7a1663f785b4f6cd6bfecb252c409de587841db42b8202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ee52a5282485674b7a1663f785b4f6cd6bfecb252c409de587841db42b8202->enter($__internal_25ee52a5282485674b7a1663f785b4f6cd6bfecb252c409de587841db42b8202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 298
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 299
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_25ee52a5282485674b7a1663f785b4f6cd6bfecb252c409de587841db42b8202->leave($__internal_25ee52a5282485674b7a1663f785b4f6cd6bfecb252c409de587841db42b8202_prof);

    }

    // line 302
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2ea0ba9d8ec03e0df568ab5692676b7fd989d8b3ff22b87382542cb9f80f500c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea0ba9d8ec03e0df568ab5692676b7fd989d8b3ff22b87382542cb9f80f500c->enter($__internal_2ea0ba9d8ec03e0df568ab5692676b7fd989d8b3ff22b87382542cb9f80f500c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 303
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_2ea0ba9d8ec03e0df568ab5692676b7fd989d8b3ff22b87382542cb9f80f500c->leave($__internal_2ea0ba9d8ec03e0df568ab5692676b7fd989d8b3ff22b87382542cb9f80f500c_prof);

    }

    // line 306
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7b0739b7e4be677e46f2a6193fb5f8c46ed0a20972a5f344db0c0611e1def7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0739b7e4be677e46f2a6193fb5f8c46ed0a20972a5f344db0c0611e1def7c0->enter($__internal_7b0739b7e4be677e46f2a6193fb5f8c46ed0a20972a5f344db0c0611e1def7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 307
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7b0739b7e4be677e46f2a6193fb5f8c46ed0a20972a5f344db0c0611e1def7c0->leave($__internal_7b0739b7e4be677e46f2a6193fb5f8c46ed0a20972a5f344db0c0611e1def7c0_prof);

    }

    // line 310
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5dd383f5dac3bf04dceac9d64af6e9dea07a9397d8655e6f9ad5005bf6a5394e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd383f5dac3bf04dceac9d64af6e9dea07a9397d8655e6f9ad5005bf6a5394e->enter($__internal_5dd383f5dac3bf04dceac9d64af6e9dea07a9397d8655e6f9ad5005bf6a5394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 311
        echo "    ";
        // line 312
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 313
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 314
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 316
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 317
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 319
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 320
                echo "    ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
            // line 322
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
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
            // line 323
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 324
            echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
            // line 325
            echo "</label>
    ";
        }
        
        $__internal_5dd383f5dac3bf04dceac9d64af6e9dea07a9397d8655e6f9ad5005bf6a5394e->leave($__internal_5dd383f5dac3bf04dceac9d64af6e9dea07a9397d8655e6f9ad5005bf6a5394e_prof);

    }

    // line 331
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ca76add2e1f4b30e40094cadb19af0bd2b78bf85694c8e0726e1b03e595d1fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca76add2e1f4b30e40094cadb19af0bd2b78bf85694c8e0726e1b03e595d1fac->enter($__internal_ca76add2e1f4b30e40094cadb19af0bd2b78bf85694c8e0726e1b03e595d1fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 332
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 333
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 334
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 335
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 336
        echo "</div>";
        
        $__internal_ca76add2e1f4b30e40094cadb19af0bd2b78bf85694c8e0726e1b03e595d1fac->leave($__internal_ca76add2e1f4b30e40094cadb19af0bd2b78bf85694c8e0726e1b03e595d1fac_prof);

    }

    // line 339
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_db6006eb2740653c22cf8c93a6bad2babb5e0634a414ab300ec6f30ce62f22bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6006eb2740653c22cf8c93a6bad2babb5e0634a414ab300ec6f30ce62f22bb->enter($__internal_db6006eb2740653c22cf8c93a6bad2babb5e0634a414ab300ec6f30ce62f22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 340
        echo "<div class=\"form-group\">";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 342
        echo "</div>";
        
        $__internal_db6006eb2740653c22cf8c93a6bad2babb5e0634a414ab300ec6f30ce62f22bb->leave($__internal_db6006eb2740653c22cf8c93a6bad2babb5e0634a414ab300ec6f30ce62f22bb_prof);

    }

    // line 345
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_fba13cc6e2bb1d294a77dd86b691365b5f5c80585207a76ac12f25b5256017a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba13cc6e2bb1d294a77dd86b691365b5f5c80585207a76ac12f25b5256017a5->enter($__internal_fba13cc6e2bb1d294a77dd86b691365b5f5c80585207a76ac12f25b5256017a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 346
        $context["force_error"] = true;
        // line 347
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fba13cc6e2bb1d294a77dd86b691365b5f5c80585207a76ac12f25b5256017a5->leave($__internal_fba13cc6e2bb1d294a77dd86b691365b5f5c80585207a76ac12f25b5256017a5_prof);

    }

    // line 350
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_10aa1f2787cab433ee25be0f3ac6f4d4d416eed5667d115710327c4e997ea4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aa1f2787cab433ee25be0f3ac6f4d4d416eed5667d115710327c4e997ea4c9->enter($__internal_10aa1f2787cab433ee25be0f3ac6f4d4d416eed5667d115710327c4e997ea4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 351
        $context["force_error"] = true;
        // line 352
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_10aa1f2787cab433ee25be0f3ac6f4d4d416eed5667d115710327c4e997ea4c9->leave($__internal_10aa1f2787cab433ee25be0f3ac6f4d4d416eed5667d115710327c4e997ea4c9_prof);

    }

    // line 355
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e0ce9b9b67f252fabc9c4ba497b643361a750b56edea34ced67973c301bb8046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ce9b9b67f252fabc9c4ba497b643361a750b56edea34ced67973c301bb8046->enter($__internal_e0ce9b9b67f252fabc9c4ba497b643361a750b56edea34ced67973c301bb8046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 356
        $context["force_error"] = true;
        // line 357
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e0ce9b9b67f252fabc9c4ba497b643361a750b56edea34ced67973c301bb8046->leave($__internal_e0ce9b9b67f252fabc9c4ba497b643361a750b56edea34ced67973c301bb8046_prof);

    }

    // line 360
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_7b9ebd63c5b7a69bb411eb232e3381738531a80544108ab6adc3cf2f6ab7d254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9ebd63c5b7a69bb411eb232e3381738531a80544108ab6adc3cf2f6ab7d254->enter($__internal_7b9ebd63c5b7a69bb411eb232e3381738531a80544108ab6adc3cf2f6ab7d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 361
        $context["force_error"] = true;
        // line 362
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7b9ebd63c5b7a69bb411eb232e3381738531a80544108ab6adc3cf2f6ab7d254->leave($__internal_7b9ebd63c5b7a69bb411eb232e3381738531a80544108ab6adc3cf2f6ab7d254_prof);

    }

    // line 365
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_81efb86c9f653b780b4976c0127026abcd0b544894aed040f74c059676afca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81efb86c9f653b780b4976c0127026abcd0b544894aed040f74c059676afca00->enter($__internal_81efb86c9f653b780b4976c0127026abcd0b544894aed040f74c059676afca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 366
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 367
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 368
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 369
        echo "</div>";
        
        $__internal_81efb86c9f653b780b4976c0127026abcd0b544894aed040f74c059676afca00->leave($__internal_81efb86c9f653b780b4976c0127026abcd0b544894aed040f74c059676afca00_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1c43da49658f1d1986e2870b39e887399998cd4b5d894df6077a1e7bccd1ac40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c43da49658f1d1986e2870b39e887399998cd4b5d894df6077a1e7bccd1ac40->enter($__internal_1c43da49658f1d1986e2870b39e887399998cd4b5d894df6077a1e7bccd1ac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 374
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 375
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 376
        echo "</div>";
        
        $__internal_1c43da49658f1d1986e2870b39e887399998cd4b5d894df6077a1e7bccd1ac40->leave($__internal_1c43da49658f1d1986e2870b39e887399998cd4b5d894df6077a1e7bccd1ac40_prof);

    }

    // line 381
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_15b9240641396303020bf9876b5d94def17cba425def55c0c6df8b74a7a1eafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b9240641396303020bf9876b5d94def17cba425def55c0c6df8b74a7a1eafb->enter($__internal_15b9240641396303020bf9876b5d94def17cba425def55c0c6df8b74a7a1eafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 382
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 383
            echo "<div class=\"alert alert-danger\">";
            // line 384
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                // line 385
                echo "<ul class=\"alert-text\">";
                // line 386
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 387
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 388
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 389
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 390
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 391
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                echo "</ul>";
            } else {
                // line 396
                echo "<div class=\"alert-text\">";
                // line 397
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 398
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 399
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 400
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 401
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 402
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "</div>";
            }
            // line 407
            echo "</div>";
        }
        
        $__internal_15b9240641396303020bf9876b5d94def17cba425def55c0c6df8b74a7a1eafb->leave($__internal_15b9240641396303020bf9876b5d94def17cba425def55c0c6df8b74a7a1eafb_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1336 => 407,  1333 => 405,  1326 => 402,  1324 => 401,  1323 => 400,  1322 => 399,  1320 => 398,  1316 => 397,  1314 => 396,  1311 => 394,  1304 => 391,  1302 => 390,  1301 => 389,  1300 => 388,  1298 => 387,  1294 => 386,  1292 => 385,  1290 => 384,  1288 => 383,  1286 => 382,  1280 => 381,  1273 => 376,  1271 => 375,  1269 => 374,  1263 => 373,  1257 => 372,  1250 => 369,  1248 => 368,  1246 => 367,  1240 => 366,  1234 => 365,  1227 => 362,  1225 => 361,  1219 => 360,  1212 => 357,  1210 => 356,  1204 => 355,  1197 => 352,  1195 => 351,  1189 => 350,  1182 => 347,  1180 => 346,  1174 => 345,  1167 => 342,  1165 => 341,  1163 => 340,  1157 => 339,  1150 => 336,  1148 => 335,  1146 => 334,  1144 => 333,  1138 => 332,  1132 => 331,  1123 => 325,  1121 => 324,  1119 => 323,  1104 => 322,  1100 => 320,  1097 => 319,  1093 => 317,  1090 => 316,  1086 => 314,  1083 => 313,  1080 => 312,  1078 => 311,  1072 => 310,  1065 => 307,  1059 => 306,  1052 => 303,  1046 => 302,  1039 => 299,  1037 => 298,  1031 => 296,  1024 => 293,  1022 => 292,  1016 => 291,  1004 => 282,  987 => 279,  983 => 278,  979 => 277,  976 => 276,  959 => 275,  953 => 271,  949 => 270,  945 => 269,  937 => 264,  931 => 261,  926 => 260,  920 => 259,  900 => 251,  897 => 250,  894 => 249,  891 => 248,  885 => 247,  878 => 244,  875 => 242,  873 => 241,  867 => 240,  858 => 236,  849 => 233,  845 => 232,  826 => 231,  822 => 230,  818 => 228,  814 => 226,  804 => 222,  800 => 221,  793 => 220,  789 => 219,  786 => 218,  784 => 217,  780 => 216,  775 => 215,  769 => 214,  762 => 211,  758 => 209,  741 => 207,  738 => 206,  721 => 205,  718 => 204,  715 => 203,  711 => 200,  705 => 198,  703 => 197,  699 => 196,  691 => 195,  687 => 193,  683 => 190,  677 => 188,  674 => 187,  669 => 185,  664 => 183,  662 => 182,  654 => 181,  650 => 179,  647 => 178,  645 => 177,  642 => 176,  636 => 175,  628 => 171,  611 => 169,  594 => 168,  591 => 167,  585 => 165,  579 => 164,  571 => 160,  569 => 159,  567 => 158,  564 => 156,  562 => 155,  560 => 154,  554 => 153,  546 => 149,  544 => 148,  542 => 147,  539 => 145,  537 => 144,  535 => 143,  529 => 142,  521 => 138,  515 => 135,  514 => 134,  513 => 133,  509 => 132,  505 => 131,  502 => 129,  496 => 126,  495 => 125,  494 => 124,  490 => 123,  488 => 122,  486 => 121,  480 => 120,  473 => 117,  471 => 116,  465 => 115,  456 => 110,  453 => 109,  445 => 108,  440 => 106,  438 => 105,  436 => 104,  433 => 102,  431 => 101,  425 => 100,  416 => 95,  414 => 94,  412 => 92,  411 => 91,  410 => 90,  409 => 89,  404 => 87,  402 => 86,  400 => 85,  397 => 83,  395 => 82,  389 => 81,  381 => 77,  379 => 76,  377 => 75,  375 => 74,  373 => 73,  369 => 72,  367 => 71,  364 => 69,  362 => 68,  356 => 67,  348 => 63,  346 => 62,  344 => 61,  338 => 60,  331 => 57,  325 => 55,  323 => 54,  321 => 53,  315 => 51,  312 => 50,  310 => 49,  307 => 48,  301 => 47,  294 => 44,  292 => 43,  286 => 42,  279 => 39,  277 => 38,  271 => 37,  264 => 34,  261 => 32,  259 => 31,  253 => 30,  246 => 381,  243 => 380,  240 => 378,  238 => 372,  235 => 371,  233 => 365,  230 => 364,  228 => 360,  225 => 359,  223 => 355,  220 => 354,  218 => 350,  215 => 349,  213 => 345,  210 => 344,  208 => 339,  205 => 338,  203 => 331,  200 => 330,  197 => 328,  195 => 310,  192 => 309,  190 => 306,  187 => 305,  185 => 302,  182 => 301,  180 => 296,  177 => 295,  175 => 291,  172 => 290,  169 => 288,  167 => 259,  164 => 258,  162 => 247,  159 => 246,  157 => 240,  154 => 239,  152 => 214,  149 => 213,  147 => 175,  144 => 174,  142 => 164,  139 => 163,  137 => 153,  134 => 152,  132 => 142,  129 => 141,  127 => 120,  124 => 119,  122 => 115,  119 => 114,  117 => 100,  114 => 99,  112 => 81,  109 => 80,  107 => 67,  104 => 66,  102 => 60,  99 => 59,  97 => 47,  94 => 46,  92 => 42,  89 => 41,  87 => 37,  84 => 36,  82 => 30,  79 => 29,  76 => 27,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig\" %}
{% use 'PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-tabs\">
            {% for translationsFields in form %}
                <li class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields\">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}visible{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-addon\">
                <i class=\"material-icons\">date_range</i>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
{% endif %}
        {% if parent_label_class is defined %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
{% endif %}
        {% if label is not same as(false) and label is empty %}
    {% set label = name|humanize %}
{% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_3_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_3_layout.html.twig");
    }
}
