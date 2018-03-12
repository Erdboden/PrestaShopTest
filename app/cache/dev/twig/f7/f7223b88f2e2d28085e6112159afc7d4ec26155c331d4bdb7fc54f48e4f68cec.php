<?php

/* @AdvancedParameters/performance.html.twig */
class __TwigTemplate_1d4c055d1a1ef0ab0c411dc3acdb7f0161a3a723bd49673e281e7a5f193b18ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@AdvancedParameters/performance.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'perfs_form_smarty_cache' => array($this, 'block_perfs_form_smarty_cache'),
            'perfs_form_debug_mode' => array($this, 'block_perfs_form_debug_mode'),
            'perfs_form_optional_features' => array($this, 'block_perfs_form_optional_features'),
            'perfs_form_ccc' => array($this, 'block_perfs_form_ccc'),
            'perfs_form_media_servers' => array($this, 'block_perfs_form_media_servers'),
            'perfs_form_caching' => array($this, 'block_perfs_form_caching'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_996deb6693d02fedaa0f3ce940e3fe43a20c50d9cf855c74bfa8952bb2562398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996deb6693d02fedaa0f3ce940e3fe43a20c50d9cf855c74bfa8952bb2562398->enter($__internal_996deb6693d02fedaa0f3ce940e3fe43a20c50d9cf855c74bfa8952bb2562398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdvancedParameters/performance.html.twig"));

        // line 29
        list($context["smartyForm"], $context["debugModeForm"], $context["optionalFeaturesForm"], $context["combineCompressCacheForm"], $context["mediaServersForm"], $context["cachingForm"], $context["memcacheForm"]) =         array($this->getAttribute(        // line 30
($context["form"] ?? $this->getContext($context, "form")), "smarty", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "debug_mode", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optional_features", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ccc", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "media_servers", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "caching", array()), $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "add_memcache_server", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996deb6693d02fedaa0f3ce940e3fe43a20c50d9cf855c74bfa8952bb2562398->leave($__internal_996deb6693d02fedaa0f3ce940e3fe43a20c50d9cf855c74bfa8952bb2562398_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_5efcf304ec51623707105c058e4c675024a775f00e1fb694d14a3c6dac01bebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efcf304ec51623707105c058e4c675024a775f00e1fb694d14a3c6dac01bebc->enter($__internal_5efcf304ec51623707105c058e4c675024a775f00e1fb694d14a3c6dac01bebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    <div class=\"container\">
        ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form")));
        echo "
        <div class=\"row\">
            ";
        // line 37
        $this->displayBlock('perfs_form_smarty_cache', $context, $blocks);
        // line 78
        echo "
            ";
        // line 79
        $this->displayBlock('perfs_form_debug_mode', $context, $blocks);
        // line 110
        echo "        </div>

        <div class=\"row\">
            ";
        // line 113
        $this->displayBlock('perfs_form_optional_features', $context, $blocks);
        // line 152
        echo "
            ";
        // line 153
        $this->displayBlock('perfs_form_ccc', $context, $blocks);
        // line 187
        echo "        </div>

        <div class=\"row\">
            ";
        // line 190
        $this->displayBlock('perfs_form_media_servers', $context, $blocks);
        // line 224
        echo "
            ";
        // line 225
        $this->displayBlock('perfs_form_caching', $context, $blocks);
        // line 252
        echo "        </div>
        ";
        // line 253
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_5efcf304ec51623707105c058e4c675024a775f00e1fb694d14a3c6dac01bebc->leave($__internal_5efcf304ec51623707105c058e4c675024a775f00e1fb694d14a3c6dac01bebc_prof);

    }

    // line 37
    public function block_perfs_form_smarty_cache($context, array $blocks = array())
    {
        $__internal_25a8c26bf732149489ec9e2b687f3b7e10f0cfedbe62bd994ab5912b2c34fe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a8c26bf732149489ec9e2b687f3b7e10f0cfedbe62bd994ab5912b2c34fe54->enter($__internal_25a8c26bf732149489ec9e2b687f3b7e10f0cfedbe62bd994ab5912b2c34fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_smarty_cache"));

        // line 38
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">business_center</i> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smarty", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Template compilation", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "template_compilation", array()), 'errors');
        echo "
                                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "template_compilation", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cache", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled except for debugging.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "cache", array()), 'errors');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "cache", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Multi-front optimizations", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Should be enabled if you want to avoid to store the smarty cache on NFS.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "multi_front_optimization", array()), 'errors');
        echo "
                                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "multi_front_optimization", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching type", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "caching_type", array()), 'errors');
        echo "
                                ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "caching_type", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Clear cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "clear_cache", array()), 'errors');
        echo "
                                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["smartyForm"] ?? $this->getContext($context, "smartyForm")), "clear_cache", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_25a8c26bf732149489ec9e2b687f3b7e10f0cfedbe62bd994ab5912b2c34fe54->leave($__internal_25a8c26bf732149489ec9e2b687f3b7e10f0cfedbe62bd994ab5912b2c34fe54_prof);

    }

    // line 79
    public function block_perfs_form_debug_mode($context, array $blocks = array())
    {
        $__internal_f0ea89f2d034936af98e46e6e1dd50b60b91af2bf34b60ace71be8909c1fbeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ea89f2d034936af98e46e6e1dd50b60b91af2bf34b60ace71be8909c1fbeff->enter($__internal_f0ea89f2d034936af98e46e6e1dd50b60b91af2bf34b60ace71be8909c1fbeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_debug_mode"));

        // line 80
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">bug_report</i> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable non PrestaShop modules", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable non PrestaShop Modules.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_non_native_modules", array()), 'errors');
        echo "
                                ";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_non_native_modules", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable all overrides", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable all classes and controllers overrides.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "
                                ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_overrides", array()), 'errors');
        echo "
                                ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "disable_overrides", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Debug mode", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable debug mode.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "debug_mode", array()), 'errors');
        echo "
                                ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["debugModeForm"] ?? $this->getContext($context, "debugModeForm")), "debug_mode", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_f0ea89f2d034936af98e46e6e1dd50b60b91af2bf34b60ace71be8909c1fbeff->leave($__internal_f0ea89f2d034936af98e46e6e1dd50b60b91af2bf34b60ace71be8909c1fbeff_prof);

    }

    // line 113
    public function block_perfs_form_optional_features($context, array $blocks = array())
    {
        $__internal_da4e40a618f976d0ce9a84ea8639e2ddf66681c7411771566b616ec579e10162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e40a618f976d0ce9a84ea8639e2ddf66681c7411771566b616ec579e10162->enter($__internal_da4e40a618f976d0ce9a84ea8639e2ddf66681c7411771566b616ec579e10162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_optional_features"));

        // line 114
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">extension</i> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional features", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some features can be disabled in order to improve performance.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Combinations.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), 'errors');
        echo "
                                ";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), 'widget');
        echo "
                            </div>

                            ";
        // line 130
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "combinations", array()), "vars", array()), "disabled", array())) {
            // line 131
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "warningtip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You cannot set this parameter to No when combinations are already used by some of your products", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
            echo "
                            ";
        }
        // line 133
        echo "
                            <div class=\"form-group\">
                                ";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Product Features.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "features", array()), 'errors');
        echo "
                                ";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "features", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer groups", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose \"No\" to disable Customer Groups.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "customer_groups", array()), 'errors');
        echo "
                                ";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["optionalFeaturesForm"] ?? $this->getContext($context, "optionalFeaturesForm")), "customer_groups", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_da4e40a618f976d0ce9a84ea8639e2ddf66681c7411771566b616ec579e10162->leave($__internal_da4e40a618f976d0ce9a84ea8639e2ddf66681c7411771566b616ec579e10162_prof);

    }

    // line 153
    public function block_perfs_form_ccc($context, array $blocks = array())
    {
        $__internal_56d7d1aebcf23e14f14563f760d0fe53ce8d94b40daa6754fb54ed93df0b5775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d7d1aebcf23e14f14563f760d0fe53ce8d94b40daa6754fb54ed93df0b5775->enter($__internal_56d7d1aebcf23e14f14563f760d0fe53ce8d94b40daa6754fb54ed93df0b5775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_ccc"));

        // line 154
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">zoom_out_map</i> ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC (Combine, Compress and Cache)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for CSS", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", array()), 'errors');
        echo "
                                ";
        // line 167
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_css", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Smart cache for JavaScript", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", array()), 'errors');
        echo "
                                ";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "smart_cache_js", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apache optimization", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will add directives to your .htaccess file, which should improve caching and compression.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", array()), 'errors');
        echo "
                                ";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["combineCompressCacheForm"] ?? $this->getContext($context, "combineCompressCacheForm")), "apache_optimization", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_56d7d1aebcf23e14f14563f760d0fe53ce8d94b40daa6754fb54ed93df0b5775->leave($__internal_56d7d1aebcf23e14f14563f760d0fe53ce8d94b40daa6754fb54ed93df0b5775_prof);

    }

    // line 190
    public function block_perfs_form_media_servers($context, array $blocks = array())
    {
        $__internal_e8d1c22737d3efc43d74ee399c079f3acd38dec904673c63f855481062fff264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d1c22737d3efc43d74ee399c079f3acd38dec904673c63f855481062fff264->enter($__internal_e8d1c22737d3efc43d74ee399c079f3acd38dec904673c63f855481062fff264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_media_servers"));

        // line 191
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media servers (use only with CCC)", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            ";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "infotip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You must enter another domain, or subdomain, in order to use cookieless static content.", array(), "Admin.Advparameters.Feature")), "method"), "html", null, true);
        echo "

                            <div class=\"form-group\">
                                ";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #1", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_one", array()), 'errors');
        echo "
                                ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_one", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #2", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_two", array()), 'errors');
        echo "
                                ";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_two", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Media server #3", array(), "Admin.Advparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.", array(), "Admin.Advparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_three", array()), 'errors');
        echo "
                                ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["mediaServersForm"] ?? $this->getContext($context, "mediaServersForm")), "media_server_three", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_e8d1c22737d3efc43d74ee399c079f3acd38dec904673c63f855481062fff264->leave($__internal_e8d1c22737d3efc43d74ee399c079f3acd38dec904673c63f855481062fff264_prof);

    }

    // line 225
    public function block_perfs_form_caching($context, array $blocks = array())
    {
        $__internal_5988f850ac580c558b6dbdc41cf882eaa5f681056d9371b3470d17488da4e1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5988f850ac580c558b6dbdc41cf882eaa5f681056d9371b3470d17488da4e1b0->enter($__internal_5988f850ac580c558b6dbdc41cf882eaa5f681056d9371b3470d17488da4e1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "perfs_form_caching"));

        // line 226
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> ";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use cache", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "use_cache", array()), 'errors');
        echo "
                                ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "use_cache", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group memcache\" id=\"caching_systems\">
                                <label class=\"form-control-label\">";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Caching system", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "caching_system", array()), 'errors');
        echo "
                                ";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["cachingForm"] ?? $this->getContext($context, "cachingForm")), "caching_system", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 243
        echo twig_include($this->env, $context, "@AdvancedParameters/memcache_servers.html.twig", array("form" => ($context["memcacheForm"] ?? $this->getContext($context, "memcacheForm"))));
        echo "
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_5988f850ac580c558b6dbdc41cf882eaa5f681056d9371b3470d17488da4e1b0->leave($__internal_5988f850ac580c558b6dbdc41cf882eaa5f681056d9371b3470d17488da4e1b0_prof);

    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43e18f5185f1b6aabc73d12f9cc5704c739dd2eaac5d3ce7e66d902cc578223e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e18f5185f1b6aabc73d12f9cc5704c739dd2eaac5d3ce7e66d902cc578223e->enter($__internal_43e18f5185f1b6aabc73d12f9cc5704c739dd2eaac5d3ce7e66d902cc578223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePage.js"), "html", null, true);
        echo "\"></script>
    <script>
        var configuration = {
            'addServerUrl': '";
        // line 262
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_add"), "js"), "html", null, true);
        echo "',
            'removeServerUrl': '";
        // line 263
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_delete"), "js"), "html", null, true);
        echo "',
            'testServerUrl': '";
        // line 264
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_servers_test"), "js"), "html", null, true);
        echo "'
        };
        var app = new PerformancePage(
            configuration.addServerUrl,
            configuration.removeServerUrl,
            configuration.testServerUrl
        );

        window.addEventListener('load', function() {
            var addServerBtn = document.getElementById('add-server-btn');
            var testServerBtn = document.getElementById('test-server-btn');

            addServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.addServer();
            });

            testServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.testServer();
            });
        });
    </script>

    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/admin_parameters/performancePageUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_43e18f5185f1b6aabc73d12f9cc5704c739dd2eaac5d3ce7e66d902cc578223e->leave($__internal_43e18f5185f1b6aabc73d12f9cc5704c739dd2eaac5d3ce7e66d902cc578223e_prof);

    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/performance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 288,  626 => 264,  622 => 263,  618 => 262,  612 => 259,  607 => 258,  601 => 257,  589 => 247,  582 => 243,  577 => 241,  573 => 240,  569 => 239,  563 => 236,  559 => 235,  555 => 234,  547 => 229,  542 => 226,  536 => 225,  524 => 219,  516 => 214,  512 => 213,  508 => 212,  502 => 209,  498 => 208,  494 => 207,  488 => 204,  484 => 203,  480 => 202,  474 => 199,  466 => 194,  461 => 191,  455 => 190,  443 => 182,  435 => 177,  431 => 176,  427 => 175,  421 => 172,  417 => 171,  413 => 170,  407 => 167,  403 => 166,  399 => 165,  393 => 162,  385 => 157,  380 => 154,  374 => 153,  362 => 147,  354 => 142,  350 => 141,  346 => 140,  340 => 137,  336 => 136,  332 => 135,  328 => 133,  322 => 131,  320 => 130,  314 => 127,  310 => 126,  306 => 125,  300 => 122,  292 => 117,  287 => 114,  281 => 113,  269 => 105,  261 => 100,  257 => 99,  253 => 98,  247 => 95,  243 => 94,  239 => 93,  233 => 90,  229 => 89,  225 => 88,  217 => 83,  212 => 80,  206 => 79,  194 => 73,  186 => 68,  182 => 67,  178 => 66,  172 => 63,  168 => 62,  164 => 61,  158 => 58,  154 => 57,  150 => 56,  144 => 53,  140 => 52,  136 => 51,  130 => 48,  126 => 47,  122 => 46,  114 => 41,  109 => 38,  103 => 37,  93 => 253,  90 => 252,  88 => 225,  85 => 224,  83 => 190,  78 => 187,  76 => 153,  73 => 152,  71 => 113,  66 => 110,  64 => 79,  61 => 78,  59 => 37,  54 => 35,  51 => 34,  45 => 33,  38 => 25,  36 => 30,  35 => 29,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{%
    set smartyForm, debugModeForm, optionalFeaturesForm, combineCompressCacheForm, mediaServersForm, cachingForm, memcacheForm =
    form.smarty, form.debug_mode, form.optional_features, form.ccc, form.media_servers, form.caching, form.add_memcache_server
%}

{% block content %}
    <div class=\"container\">
        {{ form_start(form, {'attr' : {'class': 'form'} }) }}
        <div class=\"row\">
            {% block perfs_form_smarty_cache %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">business_center</i> {{ 'Smarty'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">{{ 'Template compilation'|trans }}</label>
                                {{ form_errors(smartyForm.template_compilation) }}
                                {{ form_widget(smartyForm.template_compilation) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Cache'|trans), ('Should be enabled except for debugging.'|trans)) }}
                                {{ form_errors(smartyForm.cache) }}
                                {{ form_widget(smartyForm.cache) }}
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                {{ ps.label_with_help(('Multi-front optimizations'|trans), ('Should be enabled if you want to avoid to store the smarty cache on NFS.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(smartyForm.multi_front_optimization) }}
                                {{ form_widget(smartyForm.multi_front_optimization) }}
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">{{ 'Caching type'|trans }}</label>
                                {{ form_errors(smartyForm.caching_type) }}
                                {{ form_widget(smartyForm.caching_type) }}
                            </div>
                            <div class=\"form-group smarty-cache-option\">
                                <label class=\"form-control-label\">{{ 'Clear cache'|trans }}</label>
                                {{ form_errors(smartyForm.clear_cache) }}
                                {{ form_widget(smartyForm.clear_cache) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}

            {% block perfs_form_debug_mode %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">bug_report</i> {{ 'Debug mode'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Disable non PrestaShop modules'|trans), ('Enable or disable non PrestaShop Modules.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                                {{ form_errors(debugModeForm.disable_non_native_modules) }}
                                {{ form_widget(debugModeForm.disable_non_native_modules) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Disable all overrides'|trans), ('Enable or disable all classes and controllers overrides.'|trans({}, 'Admin.Advparameters.Feature'))) }}
                                {{ form_errors(debugModeForm.disable_overrides) }}
                                {{ form_widget(debugModeForm.disable_overrides) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Debug mode'|trans), ('Enable or disable debug mode.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(debugModeForm.debug_mode) }}
                                {{ form_widget(debugModeForm.debug_mode) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}
        </div>

        <div class=\"row\">
            {% block perfs_form_optional_features %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">extension</i> {{ 'Optional features'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            {{ ps.infotip('Some features can be disabled in order to improve performance.'|trans({}, 'Admin.Advparameters.Help')) }}

                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Combinations'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Combinations.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(optionalFeaturesForm.combinations) }}
                                {{ form_widget(optionalFeaturesForm.combinations) }}
                            </div>

                            {% if optionalFeaturesForm.combinations.vars.disabled %}
                                {{ ps.warningtip('You cannot set this parameter to No when combinations are already used by some of your products'|trans({}, 'Admin.Advparameters.Help')) }}
                            {% endif %}

                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Features'|trans({}, 'Admin.Global')), ('Choose \"No\" to disable Product Features.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(optionalFeaturesForm.features) }}
                                {{ form_widget(optionalFeaturesForm.features) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Customer groups'|trans), ('Choose \"No\" to disable Customer Groups.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(optionalFeaturesForm.customer_groups) }}
                                {{ form_widget(optionalFeaturesForm.customer_groups) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}

            {% block perfs_form_ccc %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">zoom_out_map</i> {{ 'CCC (Combine, Compress and Cache)'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            {{ ps.infotip('CCC allows you to reduce the loading time of your page. With these settings you will gain performance without even touching the code of your theme. Make sure, however, that your theme is compatible with PrestaShop 1.4+. Otherwise, CCC will cause problems.'|trans({}, 'Admin.Advparameters.Help')) }}

                            <div class=\"form-group\">
                                <label class=\"form-control-label\">{{ 'Smart cache for CSS'|trans }}</label>
                                {{ form_errors(combineCompressCacheForm.smart_cache_css) }}
                                {{ form_widget(combineCompressCacheForm.smart_cache_css) }}
                            </div>
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">{{ 'Smart cache for JavaScript'|trans }}</label>
                                {{ form_errors(combineCompressCacheForm.smart_cache_js) }}
                                {{ form_widget(combineCompressCacheForm.smart_cache_js) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Apache optimization'|trans), ('This will add directives to your .htaccess file, which should improve caching and compression.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(combineCompressCacheForm.apache_optimization) }}
                                {{ form_widget(combineCompressCacheForm.apache_optimization) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}
        </div>

        <div class=\"row\">
            {% block perfs_form_media_servers %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> {{ 'Media servers (use only with CCC)'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">

                            {{ ps.infotip('You must enter another domain, or subdomain, in order to use cookieless static content.'|trans({}, 'Admin.Advparameters.Feature')) }}

                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Media server #1'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the second domain of your shop, (e.g. myshop-media-server-1.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(mediaServersForm.media_server_one) }}
                                {{ form_widget(mediaServersForm.media_server_one) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Media server #2'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the third domain of your shop, (e.g. myshop-media-server-2.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(mediaServersForm.media_server_two) }}
                                {{ form_widget(mediaServersForm.media_server_two) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Media server #3'|trans({}, 'Admin.Advparameters.Feature')), ('Name of the fourth domain of your shop, (e.g. myshop-media-server-3.com). If you do not have another domain, leave this field blank.'|trans({}, 'Admin.Advparameters.Help'))) }}
                                {{ form_errors(mediaServersForm.media_server_three) }}
                                {{ form_widget(mediaServersForm.media_server_three) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}

            {% block perfs_form_caching %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">link</i> {{ 'Caching'|trans }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                <label class=\"form-control-label\">{{ 'Use cache'|trans }}</label>
                                {{ form_errors(cachingForm.use_cache) }}
                                {{ form_widget(cachingForm.use_cache) }}
                            </div>
                            <div class=\"form-group memcache\" id=\"caching_systems\">
                                <label class=\"form-control-label\">{{ 'Caching system'|trans }}</label>
                                {{ form_errors(cachingForm.caching_system) }}
                                {{ form_widget(cachingForm.caching_system) }}
                            </div>
                            {{ include('@AdvancedParameters/memcache_servers.html.twig', {'form': memcacheForm}) }}
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                    </div>
                </div>
            </div>
            {% endblock %}
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePage.js') }}\"></script>
    <script>
        var configuration = {
            'addServerUrl': '{{ url('admin_servers_add')|e('js') }}',
            'removeServerUrl': '{{ url('admin_servers_delete')|e('js') }}',
            'testServerUrl': '{{ url('admin_servers_test')|e('js') }}'
        };
        var app = new PerformancePage(
            configuration.addServerUrl,
            configuration.removeServerUrl,
            configuration.testServerUrl
        );

        window.addEventListener('load', function() {
            var addServerBtn = document.getElementById('add-server-btn');
            var testServerBtn = document.getElementById('test-server-btn');

            addServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.addServer();
            });

            testServerBtn.addEventListener('click', function(event) {
                event.preventDefault();
                app.testServer();
            });
        });
    </script>

    <script src=\"{{ asset('themes/default/js/bundle/admin_parameters/performancePageUI.js') }}\"></script>
{% endblock %}
", "@AdvancedParameters/performance.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/performance.html.twig");
    }
}
