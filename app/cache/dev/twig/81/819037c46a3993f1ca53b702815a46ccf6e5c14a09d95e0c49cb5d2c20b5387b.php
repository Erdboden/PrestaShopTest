<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_1606e2f57368cc23c235a4889b813698ce6a654234280d4b6fade4a388dd2a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
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
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c28e7a418ad0219e931526d01b18420e31f12e16f412e6c45ea37094c7d8e822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28e7a418ad0219e931526d01b18420e31f12e16f412e6c45ea37094c7d8e822->enter($__internal_c28e7a418ad0219e931526d01b18420e31f12e16f412e6c45ea37094c7d8e822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 51
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 58
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 63
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 71
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 114
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 120
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 125
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 138
        $this->displayBlock('date_widget', $context, $blocks);
        // line 152
        $this->displayBlock('time_widget', $context, $blocks);
        // line 163
        $this->displayBlock('number_widget', $context, $blocks);
        // line 169
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 174
        $this->displayBlock('money_widget', $context, $blocks);
        // line 178
        $this->displayBlock('url_widget', $context, $blocks);
        // line 183
        $this->displayBlock('search_widget', $context, $blocks);
        // line 188
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 193
        $this->displayBlock('password_widget', $context, $blocks);
        // line 198
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 203
        $this->displayBlock('email_widget', $context, $blocks);
        // line 208
        $this->displayBlock('button_widget', $context, $blocks);
        // line 222
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 227
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 234
        $this->displayBlock('form_label', $context, $blocks);
        // line 269
        $this->displayBlock('button_label', $context, $blocks);
        // line 273
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 281
        $this->displayBlock('form_row', $context, $blocks);
        // line 289
        $this->displayBlock('button_row', $context, $blocks);
        // line 295
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 301
        $this->displayBlock('form', $context, $blocks);
        // line 307
        $this->displayBlock('form_start', $context, $blocks);
        // line 321
        $this->displayBlock('form_end', $context, $blocks);
        // line 328
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 332
        $this->displayBlock('form_errors', $context, $blocks);
        // line 342
        $this->displayBlock('form_rest', $context, $blocks);
        // line 349
        echo "
";
        // line 352
        $this->displayBlock('form_rows', $context, $blocks);
        // line 358
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 375
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 403
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_c28e7a418ad0219e931526d01b18420e31f12e16f412e6c45ea37094c7d8e822->leave($__internal_c28e7a418ad0219e931526d01b18420e31f12e16f412e6c45ea37094c7d8e822_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_51c86009b33aee6348540a014506443be8488f43085ed02eddde762a77094d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c86009b33aee6348540a014506443be8488f43085ed02eddde762a77094d6b->enter($__internal_51c86009b33aee6348540a014506443be8488f43085ed02eddde762a77094d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_51c86009b33aee6348540a014506443be8488f43085ed02eddde762a77094d6b->leave($__internal_51c86009b33aee6348540a014506443be8488f43085ed02eddde762a77094d6b_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c094d1c09d48652059eff3a7489ddaf80cf66465a95f1cb2309e15767f3bc5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c094d1c09d48652059eff3a7489ddaf80cf66465a95f1cb2309e15767f3bc5ec->enter($__internal_c094d1c09d48652059eff3a7489ddaf80cf66465a95f1cb2309e15767f3bc5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
  ";
        // line 38
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 38)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_c094d1c09d48652059eff3a7489ddaf80cf66465a95f1cb2309e15767f3bc5ec->leave($__internal_c094d1c09d48652059eff3a7489ddaf80cf66465a95f1cb2309e15767f3bc5ec_prof);

    }

    // line 41
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_da672867be29406f2234c61f3e71bbeb287d74124b44d2c765284fd1d610901b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da672867be29406f2234c61f3e71bbeb287d74124b44d2c765284fd1d610901b->enter($__internal_da672867be29406f2234c61f3e71bbeb287d74124b44d2c765284fd1d610901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 42
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 43
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 46
        $this->displayBlock("form_rows", $context, $blocks);
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 48
        echo "</div>";
        
        $__internal_da672867be29406f2234c61f3e71bbeb287d74124b44d2c765284fd1d610901b->leave($__internal_da672867be29406f2234c61f3e71bbeb287d74124b44d2c765284fd1d610901b_prof);

    }

    // line 51
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_b7c6b83aaf3b5162fd882c56f94687369158ca5240b92392fa3f352b1fdff93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c6b83aaf3b5162fd882c56f94687369158ca5240b92392fa3f352b1fdff93e->enter($__internal_b7c6b83aaf3b5162fd882c56f94687369158ca5240b92392fa3f352b1fdff93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 52
        if (array_key_exists("prototype", $context)) {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 55
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_b7c6b83aaf3b5162fd882c56f94687369158ca5240b92392fa3f352b1fdff93e->leave($__internal_b7c6b83aaf3b5162fd882c56f94687369158ca5240b92392fa3f352b1fdff93e_prof);

    }

    // line 58
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3a6bba2c6b3c6e79dad167c0a5e6e32d3931926f3a07264ae17ca968c509f031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6bba2c6b3c6e79dad167c0a5e6e32d3931926f3a07264ae17ca968c509f031->enter($__internal_3a6bba2c6b3c6e79dad167c0a5e6e32d3931926f3a07264ae17ca968c509f031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 59
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
  ";
        // line 60
        $this->loadTemplate("PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", 60)->display(array_merge($context, array("attr" => ($context["attr"] ?? $this->getContext($context, "attr")))));
        
        $__internal_3a6bba2c6b3c6e79dad167c0a5e6e32d3931926f3a07264ae17ca968c509f031->leave($__internal_3a6bba2c6b3c6e79dad167c0a5e6e32d3931926f3a07264ae17ca968c509f031_prof);

    }

    // line 63
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_46706c4ca794f7c3c6dc38b9af035bd8d424ca22f05f443940e68585d92b0b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46706c4ca794f7c3c6dc38b9af035bd8d424ca22f05f443940e68585d92b0b28->enter($__internal_46706c4ca794f7c3c6dc38b9af035bd8d424ca22f05f443940e68585d92b0b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 64
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 65
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 67
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_46706c4ca794f7c3c6dc38b9af035bd8d424ca22f05f443940e68585d92b0b28->leave($__internal_46706c4ca794f7c3c6dc38b9af035bd8d424ca22f05f443940e68585d92b0b28_prof);

    }

    // line 71
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_954d85e46534f918f6c35c984e78511c8795c1dbda3b7c1d3929f8cb1acd1557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954d85e46534f918f6c35c984e78511c8795c1dbda3b7c1d3929f8cb1acd1557->enter($__internal_954d85e46534f918f6c35c984e78511c8795c1dbda3b7c1d3929f8cb1acd1557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 72
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</div>";
        
        $__internal_954d85e46534f918f6c35c984e78511c8795c1dbda3b7c1d3929f8cb1acd1557->leave($__internal_954d85e46534f918f6c35c984e78511c8795c1dbda3b7c1d3929f8cb1acd1557_prof);

    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_76fd922a696e6cf6efd29de094aa317bfa816ba8fcff50fb5d37337e88a57654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fd922a696e6cf6efd29de094aa317bfa816ba8fcff50fb5d37337e88a57654->enter($__internal_76fd922a696e6cf6efd29de094aa317bfa816ba8fcff50fb5d37337e88a57654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 81
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 82
            $context["required"] = false;
        }
        // line 84
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 85
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 86
            echo "<option
        value=\"\"";
            // line 87
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 89
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 91
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 92
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 93
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 96
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 97
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 98
        echo "</select>";
        
        $__internal_76fd922a696e6cf6efd29de094aa317bfa816ba8fcff50fb5d37337e88a57654->leave($__internal_76fd922a696e6cf6efd29de094aa317bfa816ba8fcff50fb5d37337e88a57654_prof);

    }

    // line 101
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_5c75443cfa29273e086bc36772d532f2a9d59a475c454aa372211a21b90027ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c75443cfa29273e086bc36772d532f2a9d59a475c454aa372211a21b90027ad->enter($__internal_5c75443cfa29273e086bc36772d532f2a9d59a475c454aa372211a21b90027ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
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
            // line 103
            if (twig_test_iterable($context["choice"])) {
                // line 104
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 105
                $context["options"] = $context["choice"];
                // line 106
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 107
                echo "</optgroup>";
            } else {
                // line 109
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
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
        
        $__internal_5c75443cfa29273e086bc36772d532f2a9d59a475c454aa372211a21b90027ad->leave($__internal_5c75443cfa29273e086bc36772d532f2a9d59a475c454aa372211a21b90027ad_prof);

    }

    // line 114
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_41214d53cda2c730459ded613434246f6bafa9e13461010e4adb8604d0a42e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41214d53cda2c730459ded613434246f6bafa9e13461010e4adb8604d0a42e28->enter($__internal_41214d53cda2c730459ded613434246f6bafa9e13461010e4adb8604d0a42e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 115
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter(($context["switch"] ?? $this->getContext($context, "switch")), "")) : (""));
        // line 116
        echo "<input type=\"checkbox\"
         ";
        // line 117
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if (($context["switch"] ?? $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["switch"] ?? $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_41214d53cda2c730459ded613434246f6bafa9e13461010e4adb8604d0a42e28->leave($__internal_41214d53cda2c730459ded613434246f6bafa9e13461010e4adb8604d0a42e28_prof);

    }

    // line 120
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_87d4f39f05647dd02591d8c5cd6b79e5c9fb09a350f468b3a60fee1ffaf33031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d4f39f05647dd02591d8c5cd6b79e5c9fb09a350f468b3a60fee1ffaf33031->enter($__internal_87d4f39f05647dd02591d8c5cd6b79e5c9fb09a350f468b3a60fee1ffaf33031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 121
        echo "<input
    type=\"radio\" ";
        // line 122
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_87d4f39f05647dd02591d8c5cd6b79e5c9fb09a350f468b3a60fee1ffaf33031->leave($__internal_87d4f39f05647dd02591d8c5cd6b79e5c9fb09a350f468b3a60fee1ffaf33031_prof);

    }

    // line 125
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c41914777bcc3c0c9d1d04c4689969335a17d16d843aac4711dd352971bdebb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41914777bcc3c0c9d1d04c4689969335a17d16d843aac4711dd352971bdebb9->enter($__internal_c41914777bcc3c0c9d1d04c4689969335a17d16d843aac4711dd352971bdebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 126
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 127
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 129
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 131
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 134
            echo "</div>";
        }
        
        $__internal_c41914777bcc3c0c9d1d04c4689969335a17d16d843aac4711dd352971bdebb9->leave($__internal_c41914777bcc3c0c9d1d04c4689969335a17d16d843aac4711dd352971bdebb9_prof);

    }

    // line 138
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4a85a00da2987629de456b1303b88776ecac00c286d28d849b56c5b7ad6796b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a85a00da2987629de456b1303b88776ecac00c286d28d849b56c5b7ad6796b0->enter($__internal_4a85a00da2987629de456b1303b88776ecac00c286d28d849b56c5b7ad6796b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 139
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 140
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 144
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 145
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 146
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 148
            echo "</div>";
        }
        
        $__internal_4a85a00da2987629de456b1303b88776ecac00c286d28d849b56c5b7ad6796b0->leave($__internal_4a85a00da2987629de456b1303b88776ecac00c286d28d849b56c5b7ad6796b0_prof);

    }

    // line 152
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9fc5c6377d5936bef20030df7c7d9e8ea3b40b3d3c3c8765bccbda5e9da06c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc5c6377d5936bef20030df7c7d9e8ea3b40b3d3c3c8765bccbda5e9da06c9f->enter($__internal_9fc5c6377d5936bef20030df7c7d9e8ea3b40b3d3c3c8765bccbda5e9da06c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 153
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 154
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 156
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 157
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
      ";
            // line 158
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 159
            echo "    </div>";
        }
        
        $__internal_9fc5c6377d5936bef20030df7c7d9e8ea3b40b3d3c3c8765bccbda5e9da06c9f->leave($__internal_9fc5c6377d5936bef20030df7c7d9e8ea3b40b3d3c3c8765bccbda5e9da06c9f_prof);

    }

    // line 163
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_c4d4666cb517a0d26079460f1433c10e8c6027d8882391c9cfb5ac09f306553b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d4666cb517a0d26079460f1433c10e8c6027d8882391c9cfb5ac09f306553b->enter($__internal_c4d4666cb517a0d26079460f1433c10e8c6027d8882391c9cfb5ac09f306553b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c4d4666cb517a0d26079460f1433c10e8c6027d8882391c9cfb5ac09f306553b->leave($__internal_c4d4666cb517a0d26079460f1433c10e8c6027d8882391c9cfb5ac09f306553b_prof);

    }

    // line 169
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_45ab92b036d8f8028f3ff0c2f203820b8339782783356b53515785b529a65458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ab92b036d8f8028f3ff0c2f203820b8339782783356b53515785b529a65458->enter($__internal_45ab92b036d8f8028f3ff0c2f203820b8339782783356b53515785b529a65458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_45ab92b036d8f8028f3ff0c2f203820b8339782783356b53515785b529a65458->leave($__internal_45ab92b036d8f8028f3ff0c2f203820b8339782783356b53515785b529a65458_prof);

    }

    // line 174
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e825b66b1458c46c1046b7019cd44f565d218fa231ddc2ea2b99f00f9b214839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e825b66b1458c46c1046b7019cd44f565d218fa231ddc2ea2b99f00f9b214839->enter($__internal_e825b66b1458c46c1046b7019cd44f565d218fa231ddc2ea2b99f00f9b214839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 175
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_e825b66b1458c46c1046b7019cd44f565d218fa231ddc2ea2b99f00f9b214839->leave($__internal_e825b66b1458c46c1046b7019cd44f565d218fa231ddc2ea2b99f00f9b214839_prof);

    }

    // line 178
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_837b3967da3c7f744576e934770a962ed4dddde85fe3eec0565721a61239b933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837b3967da3c7f744576e934770a962ed4dddde85fe3eec0565721a61239b933->enter($__internal_837b3967da3c7f744576e934770a962ed4dddde85fe3eec0565721a61239b933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_837b3967da3c7f744576e934770a962ed4dddde85fe3eec0565721a61239b933->leave($__internal_837b3967da3c7f744576e934770a962ed4dddde85fe3eec0565721a61239b933_prof);

    }

    // line 183
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_eb34152a0dc065a84947dfa1fe534243f1a2e0b9897ddda17bb4412234f36bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb34152a0dc065a84947dfa1fe534243f1a2e0b9897ddda17bb4412234f36bb1->enter($__internal_eb34152a0dc065a84947dfa1fe534243f1a2e0b9897ddda17bb4412234f36bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_eb34152a0dc065a84947dfa1fe534243f1a2e0b9897ddda17bb4412234f36bb1->leave($__internal_eb34152a0dc065a84947dfa1fe534243f1a2e0b9897ddda17bb4412234f36bb1_prof);

    }

    // line 188
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_cbe6cae6359aede089f6456a9247c83a1c2e1a5341c3fd70275bef7e8080287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe6cae6359aede089f6456a9247c83a1c2e1a5341c3fd70275bef7e8080287f->enter($__internal_cbe6cae6359aede089f6456a9247c83a1c2e1a5341c3fd70275bef7e8080287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_cbe6cae6359aede089f6456a9247c83a1c2e1a5341c3fd70275bef7e8080287f->leave($__internal_cbe6cae6359aede089f6456a9247c83a1c2e1a5341c3fd70275bef7e8080287f_prof);

    }

    // line 193
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_604b0dd2eb646fde8f45b2fe5c329afdc4b5f7a4944fec80bee51b5ff1186416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604b0dd2eb646fde8f45b2fe5c329afdc4b5f7a4944fec80bee51b5ff1186416->enter($__internal_604b0dd2eb646fde8f45b2fe5c329afdc4b5f7a4944fec80bee51b5ff1186416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_604b0dd2eb646fde8f45b2fe5c329afdc4b5f7a4944fec80bee51b5ff1186416->leave($__internal_604b0dd2eb646fde8f45b2fe5c329afdc4b5f7a4944fec80bee51b5ff1186416_prof);

    }

    // line 198
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_ac693cef46ebf80efc35598e0a5df28abe0f323c72cbf30d776893620c888782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac693cef46ebf80efc35598e0a5df28abe0f323c72cbf30d776893620c888782->enter($__internal_ac693cef46ebf80efc35598e0a5df28abe0f323c72cbf30d776893620c888782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ac693cef46ebf80efc35598e0a5df28abe0f323c72cbf30d776893620c888782->leave($__internal_ac693cef46ebf80efc35598e0a5df28abe0f323c72cbf30d776893620c888782_prof);

    }

    // line 203
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_c205a9df9dee4c44406e2e1d8a1d72fc41da3531990172820419c5ff9bffe3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c205a9df9dee4c44406e2e1d8a1d72fc41da3531990172820419c5ff9bffe3f9->enter($__internal_c205a9df9dee4c44406e2e1d8a1d72fc41da3531990172820419c5ff9bffe3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c205a9df9dee4c44406e2e1d8a1d72fc41da3531990172820419c5ff9bffe3f9->leave($__internal_c205a9df9dee4c44406e2e1d8a1d72fc41da3531990172820419c5ff9bffe3f9_prof);

    }

    // line 208
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1c6b41c9da3ff28a43b7e3d0cca178e398402549b207c2d868fdb01cbaeba5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6b41c9da3ff28a43b7e3d0cca178e398402549b207c2d868fdb01cbaeba5db->enter($__internal_1c6b41c9da3ff28a43b7e3d0cca178e398402549b207c2d868fdb01cbaeba5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 209
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 210
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 211
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 213
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 216
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 219
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_1c6b41c9da3ff28a43b7e3d0cca178e398402549b207c2d868fdb01cbaeba5db->leave($__internal_1c6b41c9da3ff28a43b7e3d0cca178e398402549b207c2d868fdb01cbaeba5db_prof);

    }

    // line 222
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_275b9e611df9b1c3fec37fb65abbf6b32b18a52717cf67409e14915ca37d2e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275b9e611df9b1c3fec37fb65abbf6b32b18a52717cf67409e14915ca37d2e0a->enter($__internal_275b9e611df9b1c3fec37fb65abbf6b32b18a52717cf67409e14915ca37d2e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 223
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 224
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_275b9e611df9b1c3fec37fb65abbf6b32b18a52717cf67409e14915ca37d2e0a->leave($__internal_275b9e611df9b1c3fec37fb65abbf6b32b18a52717cf67409e14915ca37d2e0a_prof);

    }

    // line 227
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_356a5636ba6afbecb228d7cdfa5d9279629c53fa085770cb78bda0c27fb975b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356a5636ba6afbecb228d7cdfa5d9279629c53fa085770cb78bda0c27fb975b3->enter($__internal_356a5636ba6afbecb228d7cdfa5d9279629c53fa085770cb78bda0c27fb975b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 228
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 229
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_356a5636ba6afbecb228d7cdfa5d9279629c53fa085770cb78bda0c27fb975b3->leave($__internal_356a5636ba6afbecb228d7cdfa5d9279629c53fa085770cb78bda0c27fb975b3_prof);

    }

    // line 234
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bbadfe92005d05252e35cdaefdc4d99de1c41bc5d1835273da18193f0395a80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbadfe92005d05252e35cdaefdc4d99de1c41bc5d1835273da18193f0395a80b->enter($__internal_bbadfe92005d05252e35cdaefdc4d99de1c41bc5d1835273da18193f0395a80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 235
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 236
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 237
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 239
            echo "    ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 240
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 242
            echo "    ";
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 243
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 244
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 245
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 246
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 249
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 252
            echo "<label";
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
            echo (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))));
            echo "
      ";
            // line 253
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", array(), "array", true, true)) {
                // line 254
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 255
                echo "        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           title=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 258
            echo "
      ";
            // line 259
            if ($this->getAttribute(($context["label_attr"] ?? null), "popover", array(), "array", true, true)) {
                // line 260
                echo "        ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", array(), "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover_placement", array(), "array")) : ("top"));
                // line 261
                echo "        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? $this->getContext($context, "placement")), "html", null, true);
                echo "\"
           data-content=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? $this->getContext($context, "label_attr")), "popover", array(), "array"), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 264
            echo "    </label>";
        }
        
        $__internal_bbadfe92005d05252e35cdaefdc4d99de1c41bc5d1835273da18193f0395a80b->leave($__internal_bbadfe92005d05252e35cdaefdc4d99de1c41bc5d1835273da18193f0395a80b_prof);

    }

    // line 269
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_fcacae54a1b471584e1887ac488e2e1da82d07770668893eaf0e19a77354344b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcacae54a1b471584e1887ac488e2e1da82d07770668893eaf0e19a77354344b->enter($__internal_fcacae54a1b471584e1887ac488e2e1da82d07770668893eaf0e19a77354344b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_fcacae54a1b471584e1887ac488e2e1da82d07770668893eaf0e19a77354344b->leave($__internal_fcacae54a1b471584e1887ac488e2e1da82d07770668893eaf0e19a77354344b_prof);

    }

    // line 273
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_eeae881745ef424a0fb585c822813ee5b69724f6fa524ac139287eb6a30eb441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeae881745ef424a0fb585c822813ee5b69724f6fa524ac139287eb6a30eb441->enter($__internal_eeae881745ef424a0fb585c822813ee5b69724f6fa524ac139287eb6a30eb441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 278
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_eeae881745ef424a0fb585c822813ee5b69724f6fa524ac139287eb6a30eb441->leave($__internal_eeae881745ef424a0fb585c822813ee5b69724f6fa524ac139287eb6a30eb441_prof);

    }

    // line 281
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fc3fef6704759ac3c247a49053ca598210c9872a788c3f57a40f839494b4b938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3fef6704759ac3c247a49053ca598210c9872a788c3f57a40f839494b4b938->enter($__internal_fc3fef6704759ac3c247a49053ca598210c9872a788c3f57a40f839494b4b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 282
        echo "<div>";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 286
        echo "</div>";
        
        $__internal_fc3fef6704759ac3c247a49053ca598210c9872a788c3f57a40f839494b4b938->leave($__internal_fc3fef6704759ac3c247a49053ca598210c9872a788c3f57a40f839494b4b938_prof);

    }

    // line 289
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e687e723fe7b71d6d94ce6f01273932cf070b1dba1a6c6addb82307530041799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e687e723fe7b71d6d94ce6f01273932cf070b1dba1a6c6addb82307530041799->enter($__internal_e687e723fe7b71d6d94ce6f01273932cf070b1dba1a6c6addb82307530041799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 290
        echo "<div>";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 292
        echo "</div>";
        
        $__internal_e687e723fe7b71d6d94ce6f01273932cf070b1dba1a6c6addb82307530041799->leave($__internal_e687e723fe7b71d6d94ce6f01273932cf070b1dba1a6c6addb82307530041799_prof);

    }

    // line 295
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_492ad28c132c7f9868e9e6fc1cbbf40ae894b5dfb74cd71880fda9fdf9f8c7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492ad28c132c7f9868e9e6fc1cbbf40ae894b5dfb74cd71880fda9fdf9f8c7c3->enter($__internal_492ad28c132c7f9868e9e6fc1cbbf40ae894b5dfb74cd71880fda9fdf9f8c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 296
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_492ad28c132c7f9868e9e6fc1cbbf40ae894b5dfb74cd71880fda9fdf9f8c7c3->leave($__internal_492ad28c132c7f9868e9e6fc1cbbf40ae894b5dfb74cd71880fda9fdf9f8c7c3_prof);

    }

    // line 301
    public function block_form($context, array $blocks = array())
    {
        $__internal_0c59c4da6a3caa0733076b292fe96435cc48b776fdc897046168b2c6accd226f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c59c4da6a3caa0733076b292fe96435cc48b776fdc897046168b2c6accd226f->enter($__internal_0c59c4da6a3caa0733076b292fe96435cc48b776fdc897046168b2c6accd226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 302
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 304
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_0c59c4da6a3caa0733076b292fe96435cc48b776fdc897046168b2c6accd226f->leave($__internal_0c59c4da6a3caa0733076b292fe96435cc48b776fdc897046168b2c6accd226f_prof);

    }

    // line 307
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_bdeff5bfe14f5aebed84400db61a9b4c949a2ee3589a335b94d89e8ee0b306b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdeff5bfe14f5aebed84400db61a9b4c949a2ee3589a335b94d89e8ee0b306b5->enter($__internal_bdeff5bfe14f5aebed84400db61a9b4c949a2ee3589a335b94d89e8ee0b306b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 308
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 309
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 310
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 312
            $context["form_method"] = "POST";
        }
        // line 314
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\"
        method=\"";
        // line 315
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
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
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 316
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 317
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\"/>";
        }
        
        $__internal_bdeff5bfe14f5aebed84400db61a9b4c949a2ee3589a335b94d89e8ee0b306b5->leave($__internal_bdeff5bfe14f5aebed84400db61a9b4c949a2ee3589a335b94d89e8ee0b306b5_prof);

    }

    // line 321
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b5bca813df32076c4a4d5a78980e3b35bc7a599b79fc0448f04b965c5111a3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bca813df32076c4a4d5a78980e3b35bc7a599b79fc0448f04b965c5111a3af->enter($__internal_b5bca813df32076c4a4d5a78980e3b35bc7a599b79fc0448f04b965c5111a3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 322
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 323
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 325
        echo "</form>";
        
        $__internal_b5bca813df32076c4a4d5a78980e3b35bc7a599b79fc0448f04b965c5111a3af->leave($__internal_b5bca813df32076c4a4d5a78980e3b35bc7a599b79fc0448f04b965c5111a3af_prof);

    }

    // line 328
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_76e15f74181454873a3a5aed86bbc631515b82da81db7ccbdad0b32dc55b3ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e15f74181454873a3a5aed86bbc631515b82da81db7ccbdad0b32dc55b3ba1->enter($__internal_76e15f74181454873a3a5aed86bbc631515b82da81db7ccbdad0b32dc55b3ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 329
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_76e15f74181454873a3a5aed86bbc631515b82da81db7ccbdad0b32dc55b3ba1->leave($__internal_76e15f74181454873a3a5aed86bbc631515b82da81db7ccbdad0b32dc55b3ba1_prof);

    }

    // line 332
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_92fa6b5d623d7d9a976fc7a2d0103044760e93dc838a36e69b4a99eb6342fc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fa6b5d623d7d9a976fc7a2d0103044760e93dc838a36e69b4a99eb6342fc9f->enter($__internal_92fa6b5d623d7d9a976fc7a2d0103044760e93dc838a36e69b4a99eb6342fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 333
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 334
            echo "<ul>";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 336
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "</ul>";
        }
        
        $__internal_92fa6b5d623d7d9a976fc7a2d0103044760e93dc838a36e69b4a99eb6342fc9f->leave($__internal_92fa6b5d623d7d9a976fc7a2d0103044760e93dc838a36e69b4a99eb6342fc9f_prof);

    }

    // line 342
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_81eb52fa78ed1ca7e6e7bb31f7356c91dba0b4e5676ab2422c13bcc074cbd245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81eb52fa78ed1ca7e6e7bb31f7356c91dba0b4e5676ab2422c13bcc074cbd245->enter($__internal_81eb52fa78ed1ca7e6e7bb31f7356c91dba0b4e5676ab2422c13bcc074cbd245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 344
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 345
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_81eb52fa78ed1ca7e6e7bb31f7356c91dba0b4e5676ab2422c13bcc074cbd245->leave($__internal_81eb52fa78ed1ca7e6e7bb31f7356c91dba0b4e5676ab2422c13bcc074cbd245_prof);

    }

    // line 352
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_bef4700ccb86843c8fcfc148909cbe0511d8d09c3f258fbfba800016a9e65959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef4700ccb86843c8fcfc148909cbe0511d8d09c3f258fbfba800016a9e65959->enter($__internal_bef4700ccb86843c8fcfc148909cbe0511d8d09c3f258fbfba800016a9e65959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 354
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bef4700ccb86843c8fcfc148909cbe0511d8d09c3f258fbfba800016a9e65959->leave($__internal_bef4700ccb86843c8fcfc148909cbe0511d8d09c3f258fbfba800016a9e65959_prof);

    }

    // line 358
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_8486e3aa4a51ff6144dfeb51f14e9bc7047b4731bb7b0adc8d847f6be2ba7a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8486e3aa4a51ff6144dfeb51f14e9bc7047b4731bb7b0adc8d847f6be2ba7a8b->enter($__internal_8486e3aa4a51ff6144dfeb51f14e9bc7047b4731bb7b0adc8d847f6be2ba7a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 359
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 360
        if ((($context["read_only"] ?? $this->getContext($context, "read_only")) &&  !$this->getAttribute(($context["attr"] ?? null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 361
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 362
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 364
            echo " ";
            // line 365
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 367
$context["attrvalue"] === true)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 369
$context["attrvalue"] === false)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8486e3aa4a51ff6144dfeb51f14e9bc7047b4731bb7b0adc8d847f6be2ba7a8b->leave($__internal_8486e3aa4a51ff6144dfeb51f14e9bc7047b4731bb7b0adc8d847f6be2ba7a8b_prof);

    }

    // line 375
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_44d028b8bac013b12aa37753514af68d95ab0e62183dfc51e9fa9b09daf682e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d028b8bac013b12aa37753514af68d95ab0e62183dfc51e9fa9b09daf682e6->enter($__internal_44d028b8bac013b12aa37753514af68d95ab0e62183dfc51e9fa9b09daf682e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 376
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 378
            echo " ";
            // line 379
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 380
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 381
$context["attrvalue"] === true)) {
                // line 382
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 383
$context["attrvalue"] === false)) {
                // line 384
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_44d028b8bac013b12aa37753514af68d95ab0e62183dfc51e9fa9b09daf682e6->leave($__internal_44d028b8bac013b12aa37753514af68d95ab0e62183dfc51e9fa9b09daf682e6_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_ad16736fd5818c53cf8f73f2929f38d960f994a592464f39cac84cad0bb45fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad16736fd5818c53cf8f73f2929f38d960f994a592464f39cac84cad0bb45fe1->enter($__internal_ad16736fd5818c53cf8f73f2929f38d960f994a592464f39cac84cad0bb45fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 392
            echo " ";
            // line 393
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 394
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 395
$context["attrvalue"] === true)) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 397
$context["attrvalue"] === false)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ad16736fd5818c53cf8f73f2929f38d960f994a592464f39cac84cad0bb45fe1->leave($__internal_ad16736fd5818c53cf8f73f2929f38d960f994a592464f39cac84cad0bb45fe1_prof);

    }

    // line 403
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_942cb2665c105f1bb3d051f64d583553e0c1cbd22edaaa5cab631302c5a373ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942cb2665c105f1bb3d051f64d583553e0c1cbd22edaaa5cab631302c5a373ff->enter($__internal_942cb2665c105f1bb3d051f64d583553e0c1cbd22edaaa5cab631302c5a373ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 405
            echo " ";
            // line 406
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 407
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 408
$context["attrvalue"] === true)) {
                // line 409
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 410
$context["attrvalue"] === false)) {
                // line 411
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_942cb2665c105f1bb3d051f64d583553e0c1cbd22edaaa5cab631302c5a373ff->leave($__internal_942cb2665c105f1bb3d051f64d583553e0c1cbd22edaaa5cab631302c5a373ff_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1335 => 411,  1333 => 410,  1328 => 409,  1326 => 408,  1321 => 407,  1319 => 406,  1317 => 405,  1313 => 404,  1307 => 403,  1292 => 398,  1290 => 397,  1285 => 396,  1283 => 395,  1278 => 394,  1276 => 393,  1274 => 392,  1270 => 391,  1261 => 390,  1255 => 389,  1240 => 384,  1238 => 383,  1233 => 382,  1231 => 381,  1226 => 380,  1224 => 379,  1222 => 378,  1218 => 377,  1212 => 376,  1206 => 375,  1191 => 370,  1189 => 369,  1184 => 368,  1182 => 367,  1177 => 366,  1175 => 365,  1173 => 364,  1169 => 363,  1165 => 362,  1161 => 361,  1157 => 360,  1151 => 359,  1145 => 358,  1134 => 354,  1130 => 353,  1124 => 352,  1112 => 345,  1110 => 344,  1106 => 343,  1100 => 342,  1092 => 338,  1084 => 336,  1080 => 335,  1078 => 334,  1076 => 333,  1070 => 332,  1061 => 329,  1055 => 328,  1048 => 325,  1045 => 323,  1043 => 322,  1037 => 321,  1027 => 317,  1025 => 316,  1004 => 315,  999 => 314,  996 => 312,  993 => 310,  991 => 309,  989 => 308,  983 => 307,  976 => 304,  974 => 303,  972 => 302,  966 => 301,  959 => 296,  953 => 295,  946 => 292,  944 => 291,  942 => 290,  936 => 289,  929 => 286,  927 => 285,  925 => 284,  923 => 283,  921 => 282,  915 => 281,  908 => 278,  902 => 273,  891 => 269,  883 => 264,  878 => 262,  873 => 261,  870 => 260,  868 => 259,  865 => 258,  860 => 256,  855 => 255,  852 => 254,  850 => 253,  832 => 252,  828 => 249,  825 => 246,  824 => 245,  823 => 244,  821 => 243,  818 => 242,  815 => 240,  812 => 239,  809 => 237,  807 => 236,  805 => 235,  799 => 234,  792 => 229,  790 => 228,  784 => 227,  777 => 224,  775 => 223,  769 => 222,  756 => 219,  752 => 216,  749 => 213,  748 => 212,  747 => 211,  745 => 210,  743 => 209,  737 => 208,  730 => 205,  728 => 204,  722 => 203,  715 => 200,  713 => 199,  707 => 198,  700 => 195,  698 => 194,  692 => 193,  684 => 190,  682 => 189,  676 => 188,  669 => 185,  667 => 184,  661 => 183,  654 => 180,  652 => 179,  646 => 178,  639 => 175,  633 => 174,  626 => 171,  624 => 170,  618 => 169,  611 => 166,  609 => 165,  603 => 163,  595 => 159,  585 => 158,  580 => 157,  578 => 156,  575 => 154,  573 => 153,  567 => 152,  559 => 148,  557 => 146,  556 => 145,  555 => 144,  554 => 143,  550 => 142,  547 => 140,  545 => 139,  539 => 138,  531 => 134,  529 => 133,  527 => 132,  525 => 131,  523 => 130,  519 => 129,  516 => 127,  514 => 126,  508 => 125,  491 => 122,  488 => 121,  482 => 120,  455 => 117,  452 => 116,  450 => 115,  444 => 114,  411 => 109,  408 => 107,  406 => 106,  404 => 105,  399 => 104,  397 => 103,  380 => 102,  374 => 101,  367 => 98,  365 => 97,  363 => 96,  357 => 93,  355 => 92,  353 => 91,  351 => 90,  349 => 89,  341 => 87,  338 => 86,  336 => 85,  329 => 84,  326 => 82,  324 => 81,  318 => 80,  311 => 77,  305 => 75,  303 => 74,  299 => 73,  295 => 72,  289 => 71,  281 => 67,  278 => 65,  276 => 64,  270 => 63,  263 => 60,  256 => 59,  250 => 58,  243 => 55,  240 => 53,  238 => 52,  232 => 51,  225 => 48,  223 => 47,  221 => 46,  218 => 44,  216 => 43,  212 => 42,  206 => 41,  199 => 38,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 403,  150 => 389,  148 => 375,  146 => 358,  144 => 352,  141 => 349,  139 => 342,  137 => 332,  135 => 328,  133 => 321,  131 => 307,  129 => 301,  127 => 295,  125 => 289,  123 => 281,  121 => 273,  119 => 269,  117 => 234,  115 => 227,  113 => 222,  111 => 208,  109 => 203,  107 => 198,  105 => 193,  103 => 188,  101 => 183,  99 => 178,  97 => 174,  95 => 169,  93 => 163,  91 => 152,  89 => 138,  87 => 125,  85 => 120,  83 => 114,  81 => 101,  79 => 80,  77 => 71,  75 => 63,  73 => 58,  71 => 51,  69 => 41,  67 => 35,  65 => 27,);
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
{# Widgets #}

{%- block form_widget -%}
  {% if compound %}
    {{- block('form_widget_compound') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {%- set type = type|default('text') -%}
  <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
  {% include \"PrestaShopBundle:Admin/Product/Include:form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
  <div {{ block('widget_container_attributes') }}>
    {%- if form.parent is empty -%}
      {{ form_errors(form) }}
    {%- endif -%}
    {{- block('form_rows') -}}
    {{- form_rest(form) -}}
  </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
  {% if prototype is defined %}
    {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
  {% endif %}
  {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
  <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
  {% include \"PrestaShopBundle:Admin:Product/Include/form_max_length.html.twig\" with {\"attr\": attr} %}
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
  {% if expanded %}
    {{- block('choice_widget_expanded') -}}
  {% else %}
    {{- block('choice_widget_collapsed') -}}
  {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      {{- form_widget(child) -}}
      {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
  </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
  {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
    {% set required = false %}
  {%- endif -%}
  <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
    {%- if placeholder is not none -%}
      <option
        value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
    {%- endif -%}
    {%- if preferred_choices|length > 0 -%}
      {% set options = preferred_choices %}
      {{- block('choice_widget_options') -}}
      {%- if choices|length > 0 and separator is not none -%}
        <option disabled=\"disabled\">{{ separator }}</option>
      {%- endif -%}
    {%- endif -%}
    {%- set options = choices -%}
    {{- block('choice_widget_options') -}}
  </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
  {% set switch = switch|default('') -%}
  <input type=\"checkbox\"
         {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
  <input
    type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date) -}}
      {{- form_widget(form.time) -}}
    </div>
  {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {{- date_pattern|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
      })|raw -}}
    </div>
  {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
  {%- if widget == 'single_text' -%}
    {{ block('form_widget_simple') }}
  {%- else -%}
    {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
    <div {{ block('widget_container_attributes') }}>
      {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
    </div>
  {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
  {# type=\"number\" doesn't work with floats #}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
  {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
  {%- set type = type|default('search') -%}
  {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
  {%- set type = type|default('text') -%}
  {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
  {%- set type = type|default('password') -%}
  {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
  {%- set type = type|default('hidden') -%}
  {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
  {%- if label is empty -%}
    {%- if label_format is not empty -%}
      {% set label = label_format|replace({
      '%name%': name,
      '%id%': id,
      }) %}
    {%- else -%}
      {% set label = name|humanize %}
    {%- endif -%}
  {%- endif -%}
  <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
  {%- set type = type|default('submit') -%}
  {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
  {%- set type = type|default('reset') -%}
  {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
        '%name%': name,
        '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}
      {% if label_attr['tooltip'] is defined %}
        {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
        <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
           title=\"{{ label_attr['tooltip'] }}\"></i>
      {% endif %}

      {% if label_attr['popover'] is defined %}
        {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
        <span class=\"help-box\" data-toggle=\"popover\" data-placement=\"{{ placement }}\"
           data-content=\"{{ label_attr['popover'] }}\"></span>
      {% endif %}
    </label>

  {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
  {#
  No need to render the errors here, as all errors are mapped
  to the first child (see RepeatedTypeValidatorExtension).
  #}
  {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
  <div>
    {{- form_label(form) -}}
    {{- form_errors(form) -}}
    {{- form_widget(form) -}}
  </div>
{%- endblock form_row -%}

{%- block button_row -%}
  <div>
    {{- form_widget(form) -}}
  </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
  {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
  {{ form_start(form) }}
  {{- form_widget(form) -}}
  {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
  {% set method = method|upper %}
  {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
  {%- else -%}
    {% set form_method = \"POST\" %}
  {%- endif -%}
  <form name=\"{{ name }}\"
        method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
  {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\"/>
  {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
  {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
  {%- endif -%}
  </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
  {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
  {%- if errors|length > 0 -%}
    <ul>
      {%- for error in errors -%}
        <li>{{ error.message }}</li>
      {%- endfor -%}
    </ul>
  {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
  {% for child in form -%}
    {% if not child.rendered %}
      {{- form_row(child) -}}
    {% endif %}
  {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
  {% for child in form %}
    {{- form_row(child) -}}
  {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"
  {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
  {%- if disabled %} disabled=\"disabled\"{% endif -%}
  {%- if required %} required=\"required\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
  {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
  id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
  {%- for attrname, attrvalue in attr -%}
    {{- \" \" -}}
    {%- if attrname in ['placeholder', 'title'] -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- elseif attrvalue is same as(true) -%}
      {{- attrname }}=\"{{ attrname }}\"
    {%- elseif attrvalue is not same as(false) -%}
      {{- attrname }}=\"{{ attrvalue }}\"
    {%- endif -%}
  {%- endfor -%}
{%- endblock attributes -%}
", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_div_layout.html.twig");
    }
}
