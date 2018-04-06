<?php

/* @PrestaShop/Admin/Product/form.html.twig */
class __TwigTemplate_3e03a7961ebbee4b6ebbde755789d340c23043c97165822f20094a5c5cbbc887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            '__internal_f51471a8fdcfdacfd4d2bf5c89eb294ff34c2be649ffc7b9a98adafa1486f129' => array($this, 'block___internal_f51471a8fdcfdacfd4d2bf5c89eb294ff34c2be649ffc7b9a98adafa1486f129'),
            '__internal_50e276c6f0432358c7d385f620a758406112f58fade1b9872d104fcdd70ae55d' => array($this, 'block___internal_50e276c6f0432358c7d385f620a758406112f58fade1b9872d104fcdd70ae55d'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea4a09492e7e8ac6091e91943bbebb09f86589a87223c8ae845d5c8368234ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea4a09492e7e8ac6091e91943bbebb09f86589a87223c8ae845d5c8368234ab->enter($__internal_2ea4a09492e7e8ac6091e91943bbebb09f86589a87223c8ae845d5c8368234ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/form.html.twig"));

        // line 1253
        $context["js_translatable"] = twig_array_merge(array("Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", array(), "Admin.Catalog.Notification")),         // line 1255
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 1257
        $context["js_translatable"] = twig_array_merge(array("Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", array(), "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", array(), "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", array(), "Admin.Notifications.Error"), array("[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}")), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", array(), "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", array(), "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", array(), "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", array(), "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", array(), "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", array(), "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", array(), "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", array(), "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", array(), "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1274
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 1275
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Are you sure to disable variations ? they will all be deleted", array(), "array"))),         // line 1276
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea4a09492e7e8ac6091e91943bbebb09f86589a87223c8ae845d5c8368234ab->leave($__internal_2ea4a09492e7e8ac6091e91943bbebb09f86589a87223c8ae845d5c8368234ab_prof);

    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        $__internal_630c747e0ecd954297fbd1e0c0b74464810db7d430eca065229458a83bcc38ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630c747e0ecd954297fbd1e0c0b74464810db7d430eca065229458a83bcc38ef->enter($__internal_630c747e0ecd954297fbd1e0c0b74464810db7d430eca065229458a83bcc38ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 31
        if ( !($context["editable"] ?? $this->getContext($context, "editable"))) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 32
        echo "    ";
        // line 33
        echo "    <div class=\"product-header col-md-12\">
      <div class=\"row justify-content-md-center\">
      ";
        // line 35
        if (($context["is_multishop_context"] ?? $this->getContext($context, "is_multishop_context"))) {
            // line 36
            echo "        <div class=\"col-md-10\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
          </div>
        </div>
      ";
        }
        // line 42
        echo "
      <div class=\"col-md-10\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input ";
        // line 45
        echo ((($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) ? ("friendly-url-force-update") : (""));
        echo "\" id=\"form_step1_names\">
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "name", array()), 'widget');
        echo "
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), 'widget');
        echo "
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"";
        // line 54
        echo (((twig_length_filter($this->env, ($context["languages"] ?? $this->getContext($context, "languages"))) == 1)) ? ("hide") : (""));
        echo "\">
              <select id=\"form_switch_language\" class=\"custom-select\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 57
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "\" ";
            if ((($context["default_language_iso"] ?? $this->getContext($context, "default_language_iso")) == $this->getAttribute($context["language"], "iso_code", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "iso_code", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </select>
            </div>
          </div>
          <div class=\"toolbar col-md-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["stats_link"] ?? $this->getContext($context, "stats_link")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sales", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", array(), "Admin.Global"), "html", null, true);
        echo "\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_list", array("limit" => "last", "offset" => "last", "view" => "quicknav")), "html", null, true);
        echo "\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product list", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"";
        // line 86
        echo twig_escape_filter($this->env, ($context["help_link"] ?? $this->getContext($context, "help_link")), "html", null, true);
        echo "\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Help", array(), "Admin.Global"), "html", null, true);
        echo "</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "name", array()), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), 'errors');
        echo "
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
      </div>
    </div>

    ";
        // line 111
        echo "    <div id=\"form-loading\" class=\"col-md-10\">
      <div class=\"tabs js-tabs\">
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Basic settings", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pricing", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Options", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
          ";
        // line 120
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 121
            echo "            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modules", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</a></li>
          ";
        }
        // line 123
        echo "        </ul>
        <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 134
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 141
        echo "                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "inputPackItems", array()), 'errors');
        echo "
                      ";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "inputPackItems", array()), 'widget');
        echo "
                    </div>

                    <div id=\"product-images-container\" class=\"mb-4\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_upload", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\"
                           url-position=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_positions");
        echo "\"
                           data-max-size=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE"), "html", null, true);
        echo "\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "Drop images here", array(), "array"), "html", null, true);
        echo "<br/>
                            <a>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "or select files", array(), "array"), "html", null, true);
        echo "</a><br/>
                            <small>
                                ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "files recommandations", array(), "array"), "html", null, true);
        echo "<br/>
                                ";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")), "files recommandations2", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </div>
                        ";
        // line 164
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "images", array(), "any", true, true)) {
            // line 165
            echo "                            ";
            if (($context["editable"] ?? $this->getContext($context, "editable"))) {
                // line 166
                echo "                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            ";
            }
            // line 170
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 171
                echo "                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\"
                                 url-delete=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_delete", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                                 url-update=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_form", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "base_image_url", array()), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "format", array()), "html", null, true);
                echo "');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              ";
                // line 185
                if ($this->getAttribute($context["image"], "cover", array())) {
                    // line 186
                    echo "                                <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>
                              ";
                }
                // line 188
                echo "                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                        ";
        }
        // line 191
        echo "                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-sm-center col-md-12\">
                        <span class=\"expand\">";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                        <span class=\"compress\">";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View less", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                      </div>

                    </div>

                    <div class=\"summary-description-container\">
                      <ul class=\"nav nav-tabs bordered\">
                        <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
                        <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
                      </ul>

                      <div class=\"tab-content bordered\">
                        <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                          ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "description_short", array()), 'widget');
        echo "
                        </div>
                        <div class=\"tab-pane panel panel-default \" id=\"description\">
                          ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "description", array()), 'widget');
        echo "
                        </div>
                      </div>
                    </div>

                    ";
        // line 218
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnMiddle", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                    <div id=\"features\" class=\"mb-3\">
                      <div id=\"features-content\" class=\"content ";
        // line 221
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array())) == 0)) ? ("hide") : (""));
        echo "\">
                        <h2>";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        ";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()), 'errors');
        echo "
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"";
        // line 226
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_f51471a8fdcfdacfd4d2bf5c89eb294ff34c2be649ffc7b9a98adafa1486f129", $context, $blocks));
        // line 228
        echo "\"
                        >
                          ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 231
            echo "                            ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $context["feature"]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> ";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a feature", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"mb-3\">
                      ";
        // line 243
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "id_manufacturer", array())));
        echo "
                    </div>

                    <div id=\"related-product\" class=\"mb-3\">
                      ";
        // line 247
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "related_products", array())));
        echo "
                    </div>

                    ";
        // line 250
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                  </div>

                  ";
        // line 255
        echo "                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          ";
        // line 260
        if (($context["is_combination_active"] ?? $this->getContext($context, "is_combination_active"))) {
            // line 261
            echo "                            <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                              <h2>
                                ";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" ";
            // line 269
            if ( !($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Simple product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" ";
            // line 275
            if (($context["has_combinations"] ?? $this->getContext($context, "has_combinations"))) {
                echo "checked=\"checked\"";
            }
            echo ">
                                  ";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product with combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    ";
            // line 281
            echo "                                    ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Combinations[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                                  </span>
                                </div>
                              </div>
                            </div>
                          ";
        }
        // line 287
        echo "
                          <div class=\"form-group mb-4\">
                            <h2>
                              ";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your reference code for this product. Allowed special characters: .-_#.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            ";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "reference", array()), 'errors');
        echo "
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  ";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "reference", array()), 'widget');
        echo "
                              </div>
                            </div>
                          </div>

                          ";
        // line 302
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 303
            echo "                            <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                ";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many products should be available for sale?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                              </h2>
                              ";
            // line 309
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "qty_0_shortcut", array()), 'errors');
            echo "
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  ";
            // line 312
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "qty_0_shortcut", array()), 'widget');
            echo "
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                ";
            // line 317
            echo "                                ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Quantities[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                              </span>
                            </div>
                          ";
        }
        // line 321
        echo "
                          <div class=\"form-group mb-4\">
                            <h2>
                              ";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 331
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_shortcut", array()), 'widget');
        echo "
                                ";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 336
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_ttc_shortcut", array()), 'widget');
        echo "
                                ";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "price_ttc_shortcut", array()), 'errors');
        echo "
                              </div>
                              <div class=\"col-md-12 mt-1\">
                                <label class=\"form-control-label\">";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                                ";
        // line 341
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin/Product:renderField", array("productId" => ($context["id_product"] ?? $this->getContext($context, "id_product")), "step" => "step2", "fieldName" => "id_tax_rules_group")));
        echo "
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  ";
        // line 346
        echo "                                  ";
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Pricing[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
        echo "
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group mb-4\" id=\"categories\">
                            ";
        // line 362
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form-categories.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "productId" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "
                          </div>

                          ";
        // line 365
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepRightColumnBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 377
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"";
        // line 385
        if ((($context["has_combinations"] ?? $this->getContext($context, "has_combinations")) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), "vars", array()), "value", array()) != "0"))) {
            echo "display: none;";
        }
        echo "\">
                      <h2>";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          ";
        // line 389
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 390
            echo "                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">";
            // line 391
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</label>
                              ";
            // line 392
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), 'errors');
            echo "
                              ";
            // line 393
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "qty_0", array()), 'widget');
            echo "
                            </div>
                          ";
        }
        // line 396
        echo "                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">";
        // line 397
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 400
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), 'errors');
        echo "
                            ";
        // line 401
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "minimal_quantity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </fieldset>

                      <h2>";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock alerts", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">";
        // line 410
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "low_stock_threshold", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 411
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "low_stock_threshold", array()), 'errors');
        echo "
                            ";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "low_stock_threshold", array()), 'widget');
        echo "
                          </div>
                          <div class=\"col-md-8\">
                            <label class=\"form-control-label\">&nbsp;</label>
                            <div class=\"widget-checkbox-inline\">
                              ";
        // line 417
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "low_stock_alert", array()), 'errors');
        echo "
                              ";
        // line 418
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "low_stock_alert", array()), 'widget');
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", array("[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"), "Admin.Catalog.Help");
        echo "\" ></span>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"";
        // line 426
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_save_action", array("idProduct" => 1));
        echo "\" data-action-remove=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_action", array("idProduct" => 1));
        echo "\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>";
        // line 430
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            ";
        // line 434
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "is_virtual_file", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        ";
        // line 440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), 'errors');
        echo "
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "file", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a file from your computer (%maxUploadSize% max.)", array("%maxUploadSize%" => ($context["max_upload_size"] ?? $this->getContext($context, "max_upload_size"))), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 446
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("hide") : ("show"));
        echo "\">
                              ";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "file", array()), 'widget');
        echo "
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 449
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "filename", array(), "any", true, true)) ? ("show") : ("hide"));
        echo "\">
                              <a href=\"";
        // line 450
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "virtual_product", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "file_download_link", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "vars", array()), "value", array()), "file_download_link", array())) : ("")), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                              <a href=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_virtual_remove_file_action", array("idProduct" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete this file", array(), "Admin.Actions"), "html", null, true);
        echo "</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 457
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The full filename with its extension (e.g. Book.pdf)", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), 'errors');
        echo "
                            ";
        // line 461
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "name", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 466
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 469
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'errors');
        echo "
                            ";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_downloadable", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 478
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'errors');
        echo "
                            ";
        // line 479
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "expiration_date", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 484
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            ";
        // line 487
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), 'errors');
        echo "
                            ";
        // line 488
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "nb_days", array()), 'widget');
        echo "
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          ";
        // line 492
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "virtual_product", array()), "save", array()), 'widget');
        echo "
                        </div>
                      </div>
                    </div>

                    ";
        // line 497
        if ((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"))) {
            // line 498
            echo "                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 501
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), 'errors');
            echo "
                          ";
            // line 502
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), 'widget');
            echo "
                          ";
            // line 503
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) == "1")) {
                // line 504
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", array(), "Admin.Catalog.Notification"), "html", null, true);
                echo "
                          ";
            }
            // line 506
            echo "                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 508
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array())) {
                echo "display: none;";
            }
            echo "\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          ";
            // line 511
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), 'errors');
            echo "
                          ";
            // line 512
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "depends_on_stock", array()), 'widget');
            echo "
                        </div>
                      </div>
                    ";
        }
        // line 516
        echo "                    ";
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 517
            echo "                      <div id=\"pack_stock_type\">
                        <h2>";
            // line 518
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            ";
            // line 521
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), 'errors');
            echo "
                            ";
            // line 522
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "pack_stock_type", array()), 'widget');
            echo "
                          </fieldset>
                        </div>
                      </div>
                    ";
        }
        // line 527
        echo "                    ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "form_combination_bulk" => ($context["formCombinations"] ?? $this->getContext($context, "formCombinations"))));
        echo "

                    ";
        // line 529
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsQuantitiesStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 539
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  ";
        // line 544
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", array("form" => $this->getAttribute(        // line 545
($context["form"] ?? $this->getContext($context, "form")), "step4", array()), "asm_globally_activated" =>         // line 546
($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 547
($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 548
($context["form"] ?? $this->getContext($context, "form")), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array()), "warehouses" =>         // line 549
($context["warehouses"] ?? $this->getContext($context, "warehouses"))));
        // line 550
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 558
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retail price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 575
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 576
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), 'errors');
        echo "
                        ";
        // line 577
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">";
        // line 580
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 581
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), 'errors');
        echo "
                        ";
        // line 582
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "price_ttc", array()), 'widget');
        echo "
                      </div>

                      <div class=\"col-xl-4 col-lg-6 mx-auto\">
                        <label class=\"form-control-label\">
                          ";
        // line 587
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            ";
        // line 593
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), 'errors');
        echo "
                            ";
        // line 594
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unit_price", array()), 'widget');
        echo "
                          </div>
                          <div class=\"col-md-6\">
                            ";
        // line 597
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unity", array()), 'errors');
        echo "
                            ";
        // line 598
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "unity", array()), 'widget');
        echo "
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 ";
        // line 602
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <label class=\"form-control-label\">";
        // line 603
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 604
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), 'errors');
        echo "
                        ";
        // line 605
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "ecotax", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">";
        // line 613
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                        ";
        // line 614
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), 'errors');
        echo "
                        ";
        // line 615
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "id_tax_rules_group", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\">
                          ";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Manage tax rules", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                      </div>
                      <div class=\"col-md-12 pt-1\">
                        ";
        // line 624
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "on_sale", array()), 'widget');
        echo "
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info mt-2\" role=\"alert\">
                              <p class=\"alert-text\">
                                ";
        // line 631
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", array(), "Admin.Catalog.Feature"), array("[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"));
        echo "
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cost price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">";
        // line 650
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), "vars", array()), "label", array());
        echo "</label>
                        ";
        // line 651
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), 'errors');
        echo "
                        ";
        // line 652
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "wholesale_price", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific prices", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"mb-2\">
                          <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a specific price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"";
        // line 672
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_list", array("idProduct" => 1));
        echo "\" data-action-delete=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_specific_price", array("idSpecificPrice" => 1));
        echo "\">
                            <thead class=\"thead-default\">
                            <tr>
                              <th>";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Country", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fixed price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th>";
        // line 683
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Period", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                              <th>";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 691
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_specific_price_add");
        echo "\">
                          ";
        // line 692
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specific_price", array()), "is_multishop_context" => ($context["is_multishop_context"] ?? $this->getContext($context, "is_multishop_context"))));
        echo "
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          ";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priority management", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Priorities", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                          ";
        // line 710
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_0", array()), 'errors');
        echo "
                          ";
        // line 711
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_0", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 717
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_1", array()), 'errors');
        echo "
                          ";
        // line 718
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_1", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 724
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_2", array()), 'errors');
        echo "
                          ";
        // line 725
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_2", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          ";
        // line 731
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_3", array()), 'errors');
        echo "
                          ";
        // line 732
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriority_3", array()), 'widget');
        echo "
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        ";
        // line 736
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step2", array()), "specificPricePriorityToAll", array()), 'widget');
        echo "
                      </div>
                    </div>
                  </div>

                  ";
        // line 741
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsPriceStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 750
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  ";
        // line 756
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step5", array())));
        echo "

                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 765
        echo "        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    ";
        // line 773
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepTop", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 777
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Visibility", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Where do you want your product to appear?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        ";
        // line 784
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "visibility", array()), 'errors');
        echo "
                        ";
        // line 785
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "visibility", array()), 'widget');
        echo "
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          ";
        // line 791
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), 'errors');
        echo "
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              ";
        // line 794
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "available_for_order", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              ";
        // line 797
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "show_price", array()), 'widget');
        echo "
                            </div>
                            <div class=\"col-md-5\">
                              ";
        // line 800
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "display_options", array()), "online_only", array()), 'widget');
        echo "
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">";
        // line 807
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                        ";
        // line 808
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "tags", array()), 'errors');
        echo "
                        ";
        // line 809
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "tags", array()), 'widget');
        echo "
                        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                            ";
        // line 812
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
        echo "
                          </button>
                          <p class=\"alert-text\">";
        // line 814
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags are meant to help your customers find your products via the search bar.", array(), "Admin.Catalog.Help");
        echo "</p>
                          <div class=\"alert-more collapse\" id=\"tagsInfo\">
                            <p>
                              ";
        // line 817
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", array(), "Admin.Catalog.Help");
        echo "<br>
                              ";
        // line 818
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.", array(), "Admin.Catalog.Help"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"));
        // line 823
        echo "
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>";
        // line 832
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Condition & References", array(), "Admin.Catalog.Feature");
        echo "</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 839
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 843
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), 'errors');
        echo "
                        ";
        // line 844
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "condition", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        ";
        // line 848
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "show_condition", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 854
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISBN is used internationally to identify books and their various editions.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 858
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), 'errors');
        echo "
                        ";
        // line 859
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "isbn", array()), 'widget');
        echo "
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 863
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 865
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 867
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), 'errors');
        echo "
                        ";
        // line 868
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "ean13", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          ";
        // line 874
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                        </label>
                        ";
        // line 878
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), 'errors');
        echo "
                        ";
        // line 879
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "upc", array()), 'widget');
        echo "
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"mt-3\">
                          <h2>";
        // line 886
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
                          <p class=\"subtitle\">";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customers can personalize the product by entering some text or by providing custom image files.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                          ";
        // line 888
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), 'errors');
        echo "
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      ";
        // line 890
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_50e276c6f0432358c7d385f620a758406112f58fade1b9872d104fcdd70ae55d", $context, $blocks));
        // line 892
        echo "\">
                            ";
        // line 893
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 894
            echo "                              <li>
                                ";
            // line 895
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $context["field"]));
            echo "
                              </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 898
        echo "                          </ul>
                          <a href=\"#\" class=\"btn btn-outline-secondary add\">
                            <i class=\"material-icons\">add_circle</i>
                            ";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a customization field", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row mt-4\">
                      <div class=\"col-md-8\">
                        <h2>";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attached files", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
                        <p class=\"subtitle\">";
        // line 910
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
                        ";
        // line 911
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachments", array()), 'widget');
        echo "
                      </div>
                    </div>
                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-outline-secondary mb-3\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          ";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Attach a new file", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          ";
        // line 927
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), 'errors');
        echo "
                          <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "vars", array()), "attr", array()), "data-action", array(), "array"), "html", null, true);
        echo "\">
                            <div class=\"form-group\">";
        // line 929
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "file", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 930
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "name", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">";
        // line 931
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "description", array()), 'widget');
        echo "</div>
                            <div class=\"form-group\">
                              ";
        // line 933
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "add", array()), 'widget');
        echo "
                              ";
        // line 934
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "attachment_product", array()), "cancel", array()), 'widget');
        echo "
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        ";
        // line 943
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig", array("form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array())));
        echo "
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_supplier_refresh_product_supplier_combination_form", array("idProduct" => 1, "supplierIds" => 1)), "html", null, true);
        echo "\">
                        ";
        // line 948
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig", array("suppliers" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "suppliers", array()), "vars", array()), "value", array()), "form" => $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array())));
        echo "
                      </div>
                    </div>

                    ";
        // line 952
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsOptionsStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 962
        echo "        ";
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 963
            echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    ";
            // line 970
            echo "                    <div class=\"col-md-12\">
                      ";
            // line 971
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
            // line 972
            echo "
                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          ";
            // line 975
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 976
                echo "                            <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">
                              <div>
                                <img class=\"top-logo\" src=\"";
                // line 978
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  ";
                // line 980
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                </h2>
                                <div class=\"text-ellipsis small-text module-version\">
                                  ";
                // line 983
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                ";
                // line 987
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 991
            echo "                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>";
            // line 993
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            ";
            // line 995
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 996
                echo "                              <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 998
            echo "                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>";
            // line 1004
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                          ";
            // line 1005
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                          ";
            // line 1006
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"));
            echo "
                        </p>
                        <div class=\"row\">
                          ";
            // line 1009
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 1010
                echo "                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"";
                // line 1013
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 1015
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                  </h3>
                                  <div class=\"text-ellipsis small-text module-version-author-grid\">
                                    ";
                // line 1018
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  ";
                // line 1022
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 1026
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\">
                                      ";
                // line 1027
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
                echo "
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1034
            echo "                        </div>
                      </div>

                      ";
            // line 1037
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? $this->getContext($context, "hooks")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 1038
                echo "                        <div
                          id=\"module_";
                // line 1039
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\"
                          class=\"module-render-container module-";
                // line 1040
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\"
                          style=\"display: none;\"
                        >
                          <div>
                            ";
                // line 1044
                echo $this->getAttribute($context["module"], "content", array());
                echo "
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1048
            echo "                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        // line 1056
        echo "
      </div>

      ";
        // line 1059
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_product", array()), 'widget');
        echo "
      ";
        // line 1060
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

    </div>
    ";
        // line 1064
        echo "    <div class=\"product-footer justify-content-md-center\">
      <div class=\"col-lg-5\">
        <a
          href=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "delete", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
        echo "\"
          class=\"tooltip-link btn btn-lg\"
          data-toggle=\"pstooltip\"
          id=\"product_form_delete_btn\"
          title=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanently delete this product.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          data-placement=\"left\"
          data-original-title=\"Delete\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          href=\"\"
          data-redirect=\"";
        // line 1079
        echo twig_escape_filter($this->env, ($context["preview_link"] ?? $this->getContext($context, "preview_link")), "html", null, true);
        echo "\"
          data-url-deactive=\"";
        // line 1080
        echo twig_escape_filter($this->env, ($context["preview_link_deactivate"] ?? $this->getContext($context, "preview_link_deactivate")), "html", null, true);
        echo "\"
          target=\"_blank\"
          class=\"btn btn-secondary preview\"
          data-toggle=\"pstooltip\"
          id=\"product_form_preview_btn\"
          title=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See how your product sheet will look online: ALT+SHIFT+V", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
         >
          ";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Preview", array(), "Admin.Actions"), "html", null, true);
        echo "
        </a>
        ";
        // line 1089
        if (($context["editable"] ?? $this->getContext($context, "editable"))) {
            // line 1090
            echo "        <h2 class=\"for-switch online-title\" ";
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
            title=\"";
            // line 1091
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Online", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <h2 class=\"for-switch offline-title\" ";
            // line 1092
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
            title=\"";
            // line 1093
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable or disable the product on your shop: ALT+SHIFT+O", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Offline", array(), "Admin.Global"), "html", null, true);
            echo "</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          ";
            // line 1101
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "vars", array()), "value", array()), "active", array())) ? ("checked=\"checked\"") : (""));
            echo "
        />
        ";
        }
        // line 1104
        echo "      </div>
      <div class=\"col-lg-6 text-lg-right\">
        ";
        // line 1106
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 1107
            echo "          <button
            type=\"button\"
            class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"";
            // line 1111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
            echo "\"
            data-toggle=\"pstooltip\"
            title=\"";
            // line 1113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\"
            >
            ";
            // line 1115
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
          </button>
        ";
        }
        // line 1118
        echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and go back to the catalog: ALT+SHIFT+Q", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"";
        // line 1132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save and create a new product: ALT+SHIFT+P", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          >
          ";
        // line 1136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase ml-3\"
          value=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save the product and stay on the current page: ALT+SHIFT+S", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
          />

          <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
          <div class=\"btn-group hide dropdown\">
            <button
             class=\"btn btn-primary js-btn-save ml-3\"
             type=\"submit\"
             >
              <span>";
        // line 1153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
            </button><button
              class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              ";
        // line 1164
        if (($context["is_shop_context"] ?? $this->getContext($context, "is_shop_context"))) {
            // line 1165
            echo "                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"";
            // line 1167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_unit_action", array("action" => "duplicate", "id" => ($context["id_product"] ?? $this->getContext($context, "id_product")))), "html", null, true);
            echo "\"
                >
                ";
            // line 1169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate", array(), "Admin.Actions");
            echo "
                </a>
              ";
        }
        // line 1172
        echo "             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"";
        // line 1174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => "last", "limit" => "last")), "html", null, true);
        echo "\"
              >
              ";
        // line 1176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to catalog", array(), "Admin.Catalog.Feature");
        echo "
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"";
        // line 1180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
              >
              ";
        // line 1182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new product", array(), "Admin.Catalog.Feature");
        echo "
            </a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 1188
        if ( !($context["editable"] ?? $this->getContext($context, "editable"))) {
            echo " </fieldset> ";
        }
        // line 1189
        echo "  </form>


  ";
        // line 1192
        $this->loadTemplate("@PrestaShop/Admin/Product/form.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 1192, "1057642006")->display(array_merge($context, array("id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Notifications.Warning"), "closable" => false, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", array(), "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"), 1 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", array(), "Admin.Global"), "class" => "btn btn-primary btn-lg continue")))));
        // line 1213
        echo "
";
        
        $__internal_630c747e0ecd954297fbd1e0c0b74464810db7d430eca065229458a83bcc38ef->leave($__internal_630c747e0ecd954297fbd1e0c0b74464810db7d430eca065229458a83bcc38ef_prof);

    }

    // line 226
    public function block___internal_f51471a8fdcfdacfd4d2bf5c89eb294ff34c2be649ffc7b9a98adafa1486f129($context, array $blocks = array())
    {
        $__internal_20ebb717fc8a5ff7e1aa0bccde745d7a409ab0c4964f6d7617b5ab5429f2921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ebb717fc8a5ff7e1aa0bccde745d7a409ab0c4964f6d7617b5ab5429f2921a->enter($__internal_20ebb717fc8a5ff7e1aa0bccde745d7a409ab0c4964f6d7617b5ab5429f2921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_f51471a8fdcfdacfd4d2bf5c89eb294ff34c2be649ffc7b9a98adafa1486f129"));

        // line 227
        echo "                            ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_feature.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step1", array()), "features", array()), "vars", array()), "prototype", array())));
        echo "
                          ";
        
        $__internal_20ebb717fc8a5ff7e1aa0bccde745d7a409ab0c4964f6d7617b5ab5429f2921a->leave($__internal_20ebb717fc8a5ff7e1aa0bccde745d7a409ab0c4964f6d7617b5ab5429f2921a_prof);

    }

    // line 890
    public function block___internal_50e276c6f0432358c7d385f620a758406112f58fade1b9872d104fcdd70ae55d($context, array $blocks = array())
    {
        $__internal_9b22f53f22c389d0ef1b6da1f95ff80ad150506ef612918e0ae4efddd7811399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b22f53f22c389d0ef1b6da1f95ff80ad150506ef612918e0ae4efddd7811399->enter($__internal_9b22f53f22c389d0ef1b6da1f95ff80ad150506ef612918e0ae4efddd7811399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_50e276c6f0432358c7d385f620a758406112f58fade1b9872d104fcdd70ae55d"));

        // line 891
        echo "                                      ";
        echo twig_include($this->env, $context, "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", array("form" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "step6", array()), "custom_fields", array()), "vars", array()), "prototype", array())));
        echo "
                                      ";
        
        $__internal_9b22f53f22c389d0ef1b6da1f95ff80ad150506ef612918e0ae4efddd7811399->leave($__internal_9b22f53f22c389d0ef1b6da1f95ff80ad150506ef612918e0ae4efddd7811399_prof);

    }

    // line 1216
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1d1f9c60e9f617799cbbc9347c9f240fb338126f3722bee72d9d1ee94aff4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d1f9c60e9f617799cbbc9347c9f240fb338126f3722bee72d9d1ee94aff4b0->enter($__internal_f1d1f9c60e9f617799cbbc9347c9f240fb338126f3722bee72d9d1ee94aff4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1217
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 1218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 1220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 1234
        echo twig_escape_filter($this->env, ($context["editable"] ?? $this->getContext($context, "editable")), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
        
        $__internal_f1d1f9c60e9f617799cbbc9347c9f240fb338126f3722bee72d9d1ee94aff4b0->leave($__internal_f1d1f9c60e9f617799cbbc9347c9f240fb338126f3722bee72d9d1ee94aff4b0_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2491 => 1234,  2484 => 1230,  2480 => 1229,  2476 => 1228,  2472 => 1227,  2468 => 1226,  2464 => 1225,  2460 => 1224,  2456 => 1223,  2452 => 1222,  2448 => 1221,  2444 => 1220,  2439 => 1218,  2434 => 1217,  2428 => 1216,  2418 => 891,  2412 => 890,  2402 => 227,  2396 => 226,  2388 => 1213,  2386 => 1192,  2381 => 1189,  2377 => 1188,  2368 => 1182,  2363 => 1180,  2356 => 1176,  2351 => 1174,  2347 => 1172,  2341 => 1169,  2336 => 1167,  2332 => 1165,  2330 => 1164,  2316 => 1153,  2304 => 1144,  2299 => 1142,  2290 => 1136,  2285 => 1134,  2280 => 1132,  2271 => 1126,  2266 => 1124,  2261 => 1122,  2255 => 1118,  2249 => 1115,  2244 => 1113,  2239 => 1111,  2233 => 1107,  2231 => 1106,  2227 => 1104,  2221 => 1101,  2208 => 1093,  2202 => 1092,  2196 => 1091,  2189 => 1090,  2187 => 1089,  2182 => 1087,  2177 => 1085,  2169 => 1080,  2165 => 1079,  2154 => 1071,  2147 => 1067,  2142 => 1064,  2136 => 1060,  2132 => 1059,  2127 => 1056,  2117 => 1048,  2107 => 1044,  2100 => 1040,  2096 => 1039,  2093 => 1038,  2089 => 1037,  2084 => 1034,  2071 => 1027,  2067 => 1026,  2060 => 1022,  2051 => 1018,  2045 => 1015,  2038 => 1013,  2033 => 1010,  2029 => 1009,  2023 => 1006,  2019 => 1005,  2015 => 1004,  2007 => 998,  1996 => 996,  1992 => 995,  1987 => 993,  1983 => 991,  1973 => 987,  1964 => 983,  1958 => 980,  1951 => 978,  1945 => 976,  1941 => 975,  1936 => 972,  1934 => 971,  1931 => 970,  1923 => 963,  1920 => 962,  1908 => 952,  1901 => 948,  1897 => 947,  1890 => 943,  1878 => 934,  1874 => 933,  1869 => 931,  1865 => 930,  1861 => 929,  1857 => 928,  1853 => 927,  1847 => 924,  1831 => 911,  1827 => 910,  1823 => 909,  1812 => 901,  1807 => 898,  1790 => 895,  1787 => 894,  1770 => 893,  1767 => 892,  1765 => 890,  1760 => 888,  1756 => 887,  1752 => 886,  1742 => 879,  1738 => 878,  1733 => 876,  1728 => 874,  1719 => 868,  1715 => 867,  1710 => 865,  1705 => 863,  1698 => 859,  1694 => 858,  1689 => 856,  1684 => 854,  1675 => 848,  1668 => 844,  1664 => 843,  1659 => 841,  1654 => 839,  1644 => 832,  1633 => 823,  1631 => 818,  1627 => 817,  1621 => 814,  1616 => 812,  1610 => 809,  1606 => 808,  1602 => 807,  1592 => 800,  1586 => 797,  1580 => 794,  1574 => 791,  1565 => 785,  1561 => 784,  1552 => 778,  1548 => 777,  1541 => 773,  1531 => 765,  1520 => 756,  1512 => 750,  1501 => 741,  1493 => 736,  1486 => 732,  1482 => 731,  1473 => 725,  1469 => 724,  1460 => 718,  1456 => 717,  1447 => 711,  1443 => 710,  1439 => 709,  1431 => 704,  1426 => 702,  1413 => 692,  1409 => 691,  1399 => 684,  1395 => 683,  1391 => 682,  1387 => 681,  1383 => 680,  1379 => 679,  1375 => 678,  1371 => 677,  1367 => 676,  1363 => 675,  1355 => 672,  1350 => 670,  1340 => 663,  1335 => 661,  1323 => 652,  1319 => 651,  1315 => 650,  1308 => 646,  1303 => 644,  1287 => 631,  1277 => 624,  1270 => 620,  1266 => 619,  1259 => 615,  1255 => 614,  1251 => 613,  1240 => 605,  1236 => 604,  1232 => 603,  1226 => 602,  1219 => 598,  1215 => 597,  1209 => 594,  1205 => 593,  1198 => 589,  1193 => 587,  1185 => 582,  1181 => 581,  1177 => 580,  1171 => 577,  1167 => 576,  1163 => 575,  1152 => 567,  1147 => 565,  1138 => 558,  1129 => 550,  1127 => 549,  1126 => 548,  1125 => 547,  1124 => 546,  1123 => 545,  1122 => 544,  1115 => 539,  1103 => 529,  1097 => 527,  1089 => 522,  1085 => 521,  1079 => 518,  1076 => 517,  1073 => 516,  1066 => 512,  1062 => 511,  1054 => 508,  1050 => 506,  1044 => 504,  1042 => 503,  1038 => 502,  1034 => 501,  1029 => 498,  1027 => 497,  1019 => 492,  1012 => 488,  1008 => 487,  1004 => 486,  999 => 484,  991 => 479,  987 => 478,  983 => 477,  978 => 475,  970 => 470,  966 => 469,  962 => 468,  957 => 466,  949 => 461,  945 => 460,  941 => 459,  936 => 457,  925 => 451,  919 => 450,  915 => 449,  910 => 447,  906 => 446,  902 => 445,  897 => 443,  891 => 440,  882 => 434,  875 => 430,  866 => 426,  856 => 419,  852 => 418,  848 => 417,  840 => 412,  836 => 411,  832 => 410,  825 => 406,  817 => 401,  813 => 400,  809 => 399,  804 => 397,  801 => 396,  795 => 393,  791 => 392,  787 => 391,  784 => 390,  782 => 389,  776 => 386,  770 => 385,  760 => 377,  746 => 365,  740 => 362,  727 => 352,  717 => 346,  710 => 341,  706 => 340,  700 => 337,  696 => 336,  692 => 335,  686 => 332,  682 => 331,  678 => 330,  671 => 326,  666 => 324,  661 => 321,  653 => 317,  646 => 312,  640 => 309,  635 => 307,  630 => 305,  626 => 303,  624 => 302,  616 => 297,  610 => 294,  605 => 292,  600 => 290,  595 => 287,  585 => 281,  578 => 276,  572 => 275,  564 => 270,  558 => 269,  551 => 265,  546 => 263,  542 => 261,  540 => 260,  533 => 255,  526 => 250,  520 => 247,  513 => 243,  504 => 237,  498 => 233,  481 => 231,  464 => 230,  460 => 228,  458 => 226,  452 => 223,  448 => 222,  444 => 221,  438 => 218,  430 => 213,  424 => 210,  416 => 205,  412 => 204,  402 => 197,  398 => 196,  391 => 191,  388 => 190,  381 => 188,  375 => 186,  373 => 185,  359 => 176,  354 => 174,  350 => 173,  346 => 172,  343 => 171,  338 => 170,  332 => 166,  329 => 165,  327 => 164,  321 => 161,  317 => 160,  312 => 158,  308 => 157,  300 => 152,  296 => 151,  292 => 150,  284 => 145,  280 => 144,  275 => 141,  267 => 134,  255 => 123,  249 => 121,  247 => 120,  243 => 119,  239 => 118,  235 => 117,  231 => 116,  227 => 115,  223 => 114,  218 => 111,  211 => 106,  199 => 97,  195 => 96,  186 => 90,  179 => 86,  173 => 83,  166 => 79,  159 => 75,  153 => 72,  144 => 66,  136 => 63,  130 => 59,  115 => 57,  111 => 56,  106 => 54,  100 => 51,  95 => 49,  89 => 46,  85 => 45,  80 => 42,  73 => 38,  69 => 36,  67 => 35,  63 => 33,  61 => 32,  57 => 31,  52 => 28,  46 => 27,  39 => 25,  37 => 1276,  36 => 1275,  35 => 1274,  34 => 1257,  32 => 1255,  31 => 1253,  11 => 25,);
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

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    <div class=\"product-header col-md-12\">
      <div class=\"row justify-content-md-center\">
      {% if is_multishop_context %}
        <div class=\"col-md-10\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
          </div>
        </div>
      {% endif %}

      <div class=\"col-md-10\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input {{ 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
            {{ form_widget(form.step1.name) }}
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            {{ form_widget(form.step1.type_product) }}
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
              <select id=\"form_switch_language\" class=\"custom-select\">
                {% for language in languages %}
                  <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %}selected=\"selected\"{% endif %}>{{ language.iso_code }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"toolbar col-md-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"{{ help_link }}\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ form_errors(form.step1.name) }}
            {{ form_errors(form.step1.type_product) }}
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    {# FORM TABS CONTAINER #}
    <div id=\"form-loading\" class=\"col-md-10\">
      <div class=\"tabs js-tabs\">
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">{{ 'Basic settings'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Pricing'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'SEO'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Options'|trans({}, 'Admin.Global') }}</a></li>
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Modules'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          {% endif %}
        </ul>
        <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        {# STEP 1 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {# LEFT #}
                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      {{ form_errors(form.step1.inputPackItems) }}
                      {{ form_widget(form.step1.inputPackItems) }}
                    </div>

                    <div id=\"product-images-container\" class=\"mb-4\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"{{ path('admin_product_image_upload', {'idProduct': id_product}) }}\"
                           url-position=\"{{ path('admin_product_image_positions') }}\"
                           data-max-size=\"{{ 'PS_LIMIT_UPLOAD_IMAGE_VALUE'|configuration }}\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            {{js_translatable['Drop images here']}}<br/>
                            <a>{{js_translatable['or select files']}}</a><br/>
                            <small>
                                {{js_translatable['files recommandations']}}<br/>
                                {{js_translatable['files recommandations2']}}
                            </small>
                        </div>
                        {% if form.step1.vars.value.images is defined %}
                            {% if editable %}
                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            {% endif %}
                          {% for image in form.step1.vars.value.images %}
                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"{{ image.id }}\"
                                 url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\"
                                 url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              {% if image.cover %}
                                <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                              {% endif %}
                            </div>
                          {% endfor %}
                        {% endif %}
                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-sm-center col-md-12\">
                        <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
                        <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
                      </div>

                    </div>

                    <div class=\"summary-description-container\">
                      <ul class=\"nav nav-tabs bordered\">
                        <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
                        <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">{{ 'Description'|trans({}, 'Admin.Global') }}</a></li>
                      </ul>

                      <div class=\"tab-content bordered\">
                        <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                          {{ form_widget(form.step1.description_short) }}
                        </div>
                        <div class=\"tab-pane panel panel-default \" id=\"description\">
                          {{ form_widget(form.step1.description) }}
                        </div>
                      </div>
                    </div>

                    {{ renderhook('displayAdminProductsMainStepLeftColumnMiddle', { 'id_product': id_product }) }}

                    <div id=\"features\" class=\"mb-3\">
                      <div id=\"features-content\" class=\"content {{ form.step1.features|length == 0 ? 'hide':'' }}\">
                        <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        {{ form_errors(form.step1.features) }}
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"{% filter escape %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': form.step1.features.vars.prototype }) }}
                          {% endfilter %}\"
                        >
                          {% for feature in form.step1.features %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': feature }) }}
                          {% endfor %}
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"mb-3\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig', { 'form':form.step1.id_manufacturer }) }}
                    </div>

                    <div id=\"related-product\" class=\"mb-3\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig', { 'form':form.step1.related_products }) }}
                    </div>

                    {{ renderhook('displayAdminProductsMainStepLeftColumnBottom', { 'id_product': id_product }) }}

                  </div>

                  {# RIGHT #}
                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          {% if is_combination_active %}
                            <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                              <h2>
                                {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                    {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                  </span>
                                </div>
                              </div>
                            </div>
                          {% endif %}

                          <div class=\"form-group mb-4\">
                            <h2>
                              {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            {{ form_errors(form.step6.reference) }}
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  {{ form_widget(form.step6.reference) }}
                              </div>
                            </div>
                          </div>

                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              {{ form_errors(form.step1.qty_0_shortcut) }}
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  {{ form_widget(form.step1.qty_0_shortcut) }}
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                              </span>
                            </div>
                          {% endif %}

                          <div class=\"form-group mb-4\">
                            <h2>
                              {{ \"Price\"|trans({}, 'Admin.Global') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_shortcut) }}
                                {{ form_errors(form.step1.price_shortcut) }}
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_ttc_shortcut) }}
                                {{ form_errors(form.step1.price_ttc_shortcut) }}
                              </div>
                              <div class=\"col-md-12 mt-1\">
                                <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ render(controller('PrestaShopBundle:Admin/Product:renderField', {'productId': id_product, 'step': 'step2', 'fieldName': 'id_tax_rules_group' })) }}
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                  {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group mb-4\" id=\"categories\">
                            {{ include('PrestaShopBundle:Admin/Product/Include:form-categories.html.twig', { 'form': form.step1, 'productId': id_product }) }}
                          </div>

                          {{ renderhook('displayAdminProductsMainStepRightColumnBottom', { 'id_product': id_product }) }}

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 2 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"{% if has_combinations or form.step3.depends_on_stock.vars.value != \"0\" %}display: none;{% endif %}\">
                      <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">{{ form.step3.qty_0.vars.label }}</label>
                              {{ form_errors(form.step3.qty_0) }}
                              {{ form_widget(form.step3.qty_0) }}
                            </div>
                          {% endif %}
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.minimal_quantity.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.minimal_quantity) }}
                            {{ form_widget(form.step3.minimal_quantity) }}
                          </div>
                        </div>
                      </fieldset>

                      <h2>{{ 'Stock alerts'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.low_stock_threshold.vars.label }}</label>
                            {{ form_errors(form.step3.low_stock_threshold) }}
                            {{ form_widget(form.step3.low_stock_threshold) }}
                          </div>
                          <div class=\"col-md-8\">
                            <label class=\"form-control-label\">&nbsp;</label>
                            <div class=\"widget-checkbox-inline\">
                              {{ form_errors(form.step3.low_stock_alert) }}
                              {{ form_widget(form.step3.low_stock_alert) }}
                              <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': 1 }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': 1}) }}\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>{{ form.step3.virtual_product.vars.label }}</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            {{ form_widget(form.step3.virtual_product.is_virtual_file) }}
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        {{ form_errors(form.step3.virtual_product) }}
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.file.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'hide' : 'show' }}\">
                              {{ form_widget(form.step3.virtual_product.file) }}
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'show' : 'hide' }}\">
                              <a href=\"{{ form.step3.virtual_product.vars.value.file_download_link is defined ? form.step3.virtual_product.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                              <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': id_product}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.name.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.name) }}
                            {{ form_widget(form.step3.virtual_product.name) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_downloadable.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_downloadable) }}
                            {{ form_widget(form.step3.virtual_product.nb_downloadable) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.expiration_date.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.expiration_date) }}
                            {{ form_widget(form.step3.virtual_product.expiration_date) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_days.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_days) }}
                            {{ form_widget(form.step3.virtual_product.nb_days) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          {{ form_widget(form.step3.virtual_product.save) }}
                        </div>
                      </div>
                    </div>

                    {% if asm_globally_activated and form.step1.type_product.vars.value != \"2\" %}
                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.advanced_stock_management) }}
                          {{ form_widget(form.step3.advanced_stock_management) }}
                          {% if form.step1.type_product.vars.value == \"1\" %}
                            {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(form.step3.advanced_stock_management.vars.checked) %}display: none;{% endif %}\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.depends_on_stock) }}
                          {{ form_widget(form.step3.depends_on_stock) }}
                        </div>
                      </div>
                    {% endif %}
                    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                      <div id=\"pack_stock_type\">
                        <h2>{{ form.step3.pack_stock_type.vars.label }}</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            {{ form_errors(form.step3.pack_stock_type) }}
                            {{ form_widget(form.step3.pack_stock_type) }}
                          </fieldset>
                        </div>
                      </div>
                    {% endif %}
                    {{ include('PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig', {'form': form.step3, 'form_combination_bulk': formCombinations}) }}

                    {{ renderhook('displayAdminProductsQuantitiesStepBottom', { 'id_product': id_product }) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 3 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  {{ include('PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig', {
                    'form' : form.step4,
                    'asm_globally_activated': asm_globally_activated,
                    'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                    'isChecked': form.step3.advanced_stock_management.vars.checked,
                    'warehouses': warehouses
                  }) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 4 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price.vars.label }}</label>
                        {{ form_errors(form.step2.price) }}
                        {{ form_widget(form.step2.price) }}
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price_ttc.vars.label }}</label>
                        {{ form_errors(form.step2.price_ttc) }}
                        {{ form_widget(form.step2.price_ttc) }}
                      </div>

                      <div class=\"col-xl-4 col-lg-6 mx-auto\">
                        <label class=\"form-control-label\">
                          {{ form.step2.unit_price.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unit_price) }}
                            {{ form_widget(form.step2.unit_price) }}
                          </div>
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unity) }}
                            {{ form_widget(form.step2.unity) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <label class=\"form-control-label\">{{ form.step2.ecotax.vars.label }}</label>
                        {{ form_errors(form.step2.ecotax) }}
                        {{ form_widget(form.step2.ecotax) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">{{ form.step2.id_tax_rules_group.vars.label }}</label>
                        {{ form_errors(form.step2.id_tax_rules_group) }}
                        {{ form_widget(form.step2.id_tax_rules_group) }}
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                          {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                      </div>
                      <div class=\"col-md-12 pt-1\">
                        {{ form_widget(form.step2.on_sale) }}
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info mt-2\" role=\"alert\">
                              <p class=\"alert-text\">
                                {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">{{ form.step2.wholesale_price.vars.label|raw }}</label>
                        {{ form_errors(form.step2.wholesale_price) }}
                        {{ form_widget(form.step2.wholesale_price) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"mb-2\">
                          <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\">
                            <thead class=\"thead-default\">
                            <tr>
                              <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                          {{ include('PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig', {'form': form.step2.specific_price, 'is_multishop_context': is_multishop_context}) }}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                          {{ form_errors(form.step2.specificPricePriority_0) }}
                          {{ form_widget(form.step2.specificPricePriority_0) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_1) }}
                          {{ form_widget(form.step2.specificPricePriority_1) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_2) }}
                          {{ form_widget(form.step2.specificPricePriority_2) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_3) }}
                          {{ form_widget(form.step2.specificPricePriority_3) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        {{ form_widget(form.step2.specificPricePriorityToAll) }}
                      </div>
                    </div>
                  </div>

                  {{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': id_product }) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 5 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {{ include('PrestaShopBundle:Admin/Product/Include:form_seo.html.twig', {'form' : form.step5}) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 6 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    {{ renderhook('displayAdminProductsOptionsStepTop', { 'id_product': id_product }) }}

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        {{ form_errors(form.step6.visibility) }}
                        {{ form_widget(form.step6.visibility) }}
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          {{ form_errors(form.step6.display_options) }}
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              {{ form_widget(form.step6.display_options.available_for_order) }}
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              {{ form_widget(form.step6.display_options.show_price) }}
                            </div>
                            <div class=\"col-md-5\">
                              {{ form_widget(form.step6.display_options.online_only) }}
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_errors(form.step6.tags) }}
                        {{ form_widget(form.step6.tags) }}
                        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                            {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
                          </button>
                          <p class=\"alert-text\">{{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}</p>
                          <div class=\"alert-more collapse\" id=\"tagsInfo\">
                            <p>
                              {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                              {{ 'You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.'|trans({}, 'Admin.Catalog.Help')|
                              replace({
                                '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                                '[/1]' : '</a>'
                              })|raw
                              }}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.condition.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.condition) }}
                        {{ form_widget(form.step6.condition) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        {{ form_widget(form.step6.show_condition) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.isbn.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.isbn) }}
                        {{ form_widget(form.step6.isbn) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.ean13.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.ean13) }}
                        {{ form_widget(form.step6.ean13) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.upc.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.upc) }}
                        {{ form_widget(form.step6.upc) }}
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"mt-3\">
                          <h2>{{ form.step6.custom_fields.vars.label }}</h2>
                          <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                          {{ form_errors(form.step6.custom_fields) }}
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      {% filter escape %}
                                      {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': form.step6.custom_fields.vars.prototype }) }}
                                      {% endfilter %}\">
                            {% for field in form.step6.custom_fields %}
                              <li>
                                {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': field }) }}
                              </li>
                            {% endfor %}
                          </ul>
                          <a href=\"#\" class=\"btn btn-outline-secondary add\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row mt-4\">
                      <div class=\"col-md-8\">
                        <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                        {{ form_widget(form.step6.attachments) }}
                      </div>
                    </div>
                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-outline-secondary mb-3\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          {{ form_errors(form.step6.attachment_product) }}
                          <div id=\"form_step6_attachment_product\" data-action=\"{{ form.step6.attachment_product.vars.attr['data-action'] }}\">
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.file) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.name) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.description) }}</div>
                            <div class=\"form-group\">
                              {{ form_widget(form.step6.attachment_product.add) }}
                              {{ form_widget(form.step6.attachment_product.cancel) }}
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig', { 'form': form.step6 }) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': 1, 'supplierIds': 1}) }}\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig', { 'suppliers': form.step6.suppliers.vars.value, 'form': form.step6 }) }}
                      </div>
                    </div>

                    {{ renderhook('displayAdminProductsOptionsStepBottom', { 'id_product': id_product }) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# OTHER STEPS #}
        {% if hookcount('displayAdminProductsExtra') > 0 %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    {# LEFT #}
                    <div class=\"col-md-12\">
                      {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          {% for module in hooks %}
                            <div class=\"module-render-container module-{{ module.attributes.name }}\">
                              <div>
                                <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  {{ module.attributes.displayName }}
                                </h2>
                                <div class=\"text-ellipsis small-text module-version\">
                                  {{ module.attributes.version }} by {{ module.attributes.author }}
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                {{ module.attributes.description }}
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            {% for module in hooks %}
                              <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                          {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                        </p>
                        <div class=\"row\">
                          {% for module in hooks %}
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h3>
                                  <div class=\"text-ellipsis small-text module-version-author-grid\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                      {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                      </div>

                      {% for module in hooks %}
                        <div
                          id=\"module_{{ module.id }}\"
                          class=\"module-render-container module-{{ module.attributes.name }}\"
                          style=\"display: none;\"
                        >
                          <div>
                            {{ module.content|raw }}
                          </div>
                        </div>
                      {% endfor %}
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    <div class=\"product-footer justify-content-md-center\">
      <div class=\"col-lg-5\">
        <a
          href=\"{{ path('admin_product_unit_action', {action: 'delete', id: id_product}) }}\"
          class=\"tooltip-link btn btn-lg\"
          data-toggle=\"pstooltip\"
          id=\"product_form_delete_btn\"
          title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
          data-placement=\"left\"
          data-original-title=\"Delete\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          href=\"\"
          data-redirect=\"{{ preview_link }}\"
          data-url-deactive=\"{{ preview_link_deactivate }}\"
          target=\"_blank\"
          class=\"btn btn-secondary preview\"
          data-toggle=\"pstooltip\"
          id=\"product_form_preview_btn\"
          title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
         >
          {{ 'Preview'|trans({}, 'Admin.Actions')}}
        </a>
        {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ form.step1.vars.value.active ? 'checked=\"checked\"' : '' }}
        />
        {% endif %}
      </div>
      <div class=\"col-lg-6 text-lg-right\">
        {% if is_shop_context %}
          <button
            type=\"button\"
            class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
            data-toggle=\"pstooltip\"
            title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
            >
            {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
          </button>
        {% endif %}
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"{{ path('admin_product_new') }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase ml-3\"
          value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
          />

          <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
          <div class=\"btn-group hide dropdown\">
            <button
             class=\"btn btn-primary js-btn-save ml-3\"
             type=\"submit\"
             >
              <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
            </button><button
              class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              {% if is_shop_context %}
                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
                >
                {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
                </a>
              {% endif %}
             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
              >
              {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"{{ path('admin_product_new') }}\"
              >
              {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
            </a>
          </div>
        </div>
      </div>
    </div>
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/form.html.twig");
    }
}


/* @PrestaShop/Admin/Product/form.html.twig */
class __TwigTemplate_3e03a7961ebbee4b6ebbde755789d340c23043c97165822f20094a5c5cbbc887_1057642006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1192
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/form.html.twig", 1192);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5e3556df9516ff444f94ca4a24b93ae674aba91d9e1901c77cf654912b12223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e3556df9516ff444f94ca4a24b93ae674aba91d9e1901c77cf654912b12223->enter($__internal_e5e3556df9516ff444f94ca4a24b93ae674aba91d9e1901c77cf654912b12223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5e3556df9516ff444f94ca4a24b93ae674aba91d9e1901c77cf654912b12223->leave($__internal_e5e3556df9516ff444f94ca4a24b93ae674aba91d9e1901c77cf654912b12223_prof);

    }

    // line 1209
    public function block_content($context, array $blocks = array())
    {
        $__internal_70b70ce2e25ff4156b9f294172760667769e21ed1add4403162ab7b2afb97018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b70ce2e25ff4156b9f294172760667769e21ed1add4403162ab7b2afb97018->enter($__internal_70b70ce2e25ff4156b9f294172760667769e21ed1add4403162ab7b2afb97018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 1210
        echo "      <div class=\"modal-body\"></div>
    ";
        
        $__internal_70b70ce2e25ff4156b9f294172760667769e21ed1add4403162ab7b2afb97018->leave($__internal_70b70ce2e25ff4156b9f294172760667769e21ed1add4403162ab7b2afb97018_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3858 => 1210,  3852 => 1209,  3829 => 1192,  2491 => 1234,  2484 => 1230,  2480 => 1229,  2476 => 1228,  2472 => 1227,  2468 => 1226,  2464 => 1225,  2460 => 1224,  2456 => 1223,  2452 => 1222,  2448 => 1221,  2444 => 1220,  2439 => 1218,  2434 => 1217,  2428 => 1216,  2418 => 891,  2412 => 890,  2402 => 227,  2396 => 226,  2388 => 1213,  2386 => 1192,  2381 => 1189,  2377 => 1188,  2368 => 1182,  2363 => 1180,  2356 => 1176,  2351 => 1174,  2347 => 1172,  2341 => 1169,  2336 => 1167,  2332 => 1165,  2330 => 1164,  2316 => 1153,  2304 => 1144,  2299 => 1142,  2290 => 1136,  2285 => 1134,  2280 => 1132,  2271 => 1126,  2266 => 1124,  2261 => 1122,  2255 => 1118,  2249 => 1115,  2244 => 1113,  2239 => 1111,  2233 => 1107,  2231 => 1106,  2227 => 1104,  2221 => 1101,  2208 => 1093,  2202 => 1092,  2196 => 1091,  2189 => 1090,  2187 => 1089,  2182 => 1087,  2177 => 1085,  2169 => 1080,  2165 => 1079,  2154 => 1071,  2147 => 1067,  2142 => 1064,  2136 => 1060,  2132 => 1059,  2127 => 1056,  2117 => 1048,  2107 => 1044,  2100 => 1040,  2096 => 1039,  2093 => 1038,  2089 => 1037,  2084 => 1034,  2071 => 1027,  2067 => 1026,  2060 => 1022,  2051 => 1018,  2045 => 1015,  2038 => 1013,  2033 => 1010,  2029 => 1009,  2023 => 1006,  2019 => 1005,  2015 => 1004,  2007 => 998,  1996 => 996,  1992 => 995,  1987 => 993,  1983 => 991,  1973 => 987,  1964 => 983,  1958 => 980,  1951 => 978,  1945 => 976,  1941 => 975,  1936 => 972,  1934 => 971,  1931 => 970,  1923 => 963,  1920 => 962,  1908 => 952,  1901 => 948,  1897 => 947,  1890 => 943,  1878 => 934,  1874 => 933,  1869 => 931,  1865 => 930,  1861 => 929,  1857 => 928,  1853 => 927,  1847 => 924,  1831 => 911,  1827 => 910,  1823 => 909,  1812 => 901,  1807 => 898,  1790 => 895,  1787 => 894,  1770 => 893,  1767 => 892,  1765 => 890,  1760 => 888,  1756 => 887,  1752 => 886,  1742 => 879,  1738 => 878,  1733 => 876,  1728 => 874,  1719 => 868,  1715 => 867,  1710 => 865,  1705 => 863,  1698 => 859,  1694 => 858,  1689 => 856,  1684 => 854,  1675 => 848,  1668 => 844,  1664 => 843,  1659 => 841,  1654 => 839,  1644 => 832,  1633 => 823,  1631 => 818,  1627 => 817,  1621 => 814,  1616 => 812,  1610 => 809,  1606 => 808,  1602 => 807,  1592 => 800,  1586 => 797,  1580 => 794,  1574 => 791,  1565 => 785,  1561 => 784,  1552 => 778,  1548 => 777,  1541 => 773,  1531 => 765,  1520 => 756,  1512 => 750,  1501 => 741,  1493 => 736,  1486 => 732,  1482 => 731,  1473 => 725,  1469 => 724,  1460 => 718,  1456 => 717,  1447 => 711,  1443 => 710,  1439 => 709,  1431 => 704,  1426 => 702,  1413 => 692,  1409 => 691,  1399 => 684,  1395 => 683,  1391 => 682,  1387 => 681,  1383 => 680,  1379 => 679,  1375 => 678,  1371 => 677,  1367 => 676,  1363 => 675,  1355 => 672,  1350 => 670,  1340 => 663,  1335 => 661,  1323 => 652,  1319 => 651,  1315 => 650,  1308 => 646,  1303 => 644,  1287 => 631,  1277 => 624,  1270 => 620,  1266 => 619,  1259 => 615,  1255 => 614,  1251 => 613,  1240 => 605,  1236 => 604,  1232 => 603,  1226 => 602,  1219 => 598,  1215 => 597,  1209 => 594,  1205 => 593,  1198 => 589,  1193 => 587,  1185 => 582,  1181 => 581,  1177 => 580,  1171 => 577,  1167 => 576,  1163 => 575,  1152 => 567,  1147 => 565,  1138 => 558,  1129 => 550,  1127 => 549,  1126 => 548,  1125 => 547,  1124 => 546,  1123 => 545,  1122 => 544,  1115 => 539,  1103 => 529,  1097 => 527,  1089 => 522,  1085 => 521,  1079 => 518,  1076 => 517,  1073 => 516,  1066 => 512,  1062 => 511,  1054 => 508,  1050 => 506,  1044 => 504,  1042 => 503,  1038 => 502,  1034 => 501,  1029 => 498,  1027 => 497,  1019 => 492,  1012 => 488,  1008 => 487,  1004 => 486,  999 => 484,  991 => 479,  987 => 478,  983 => 477,  978 => 475,  970 => 470,  966 => 469,  962 => 468,  957 => 466,  949 => 461,  945 => 460,  941 => 459,  936 => 457,  925 => 451,  919 => 450,  915 => 449,  910 => 447,  906 => 446,  902 => 445,  897 => 443,  891 => 440,  882 => 434,  875 => 430,  866 => 426,  856 => 419,  852 => 418,  848 => 417,  840 => 412,  836 => 411,  832 => 410,  825 => 406,  817 => 401,  813 => 400,  809 => 399,  804 => 397,  801 => 396,  795 => 393,  791 => 392,  787 => 391,  784 => 390,  782 => 389,  776 => 386,  770 => 385,  760 => 377,  746 => 365,  740 => 362,  727 => 352,  717 => 346,  710 => 341,  706 => 340,  700 => 337,  696 => 336,  692 => 335,  686 => 332,  682 => 331,  678 => 330,  671 => 326,  666 => 324,  661 => 321,  653 => 317,  646 => 312,  640 => 309,  635 => 307,  630 => 305,  626 => 303,  624 => 302,  616 => 297,  610 => 294,  605 => 292,  600 => 290,  595 => 287,  585 => 281,  578 => 276,  572 => 275,  564 => 270,  558 => 269,  551 => 265,  546 => 263,  542 => 261,  540 => 260,  533 => 255,  526 => 250,  520 => 247,  513 => 243,  504 => 237,  498 => 233,  481 => 231,  464 => 230,  460 => 228,  458 => 226,  452 => 223,  448 => 222,  444 => 221,  438 => 218,  430 => 213,  424 => 210,  416 => 205,  412 => 204,  402 => 197,  398 => 196,  391 => 191,  388 => 190,  381 => 188,  375 => 186,  373 => 185,  359 => 176,  354 => 174,  350 => 173,  346 => 172,  343 => 171,  338 => 170,  332 => 166,  329 => 165,  327 => 164,  321 => 161,  317 => 160,  312 => 158,  308 => 157,  300 => 152,  296 => 151,  292 => 150,  284 => 145,  280 => 144,  275 => 141,  267 => 134,  255 => 123,  249 => 121,  247 => 120,  243 => 119,  239 => 118,  235 => 117,  231 => 116,  227 => 115,  223 => 114,  218 => 111,  211 => 106,  199 => 97,  195 => 96,  186 => 90,  179 => 86,  173 => 83,  166 => 79,  159 => 75,  153 => 72,  144 => 66,  136 => 63,  130 => 59,  115 => 57,  111 => 56,  106 => 54,  100 => 51,  95 => 49,  89 => 46,  85 => 45,  80 => 42,  73 => 38,  69 => 36,  67 => 35,  63 => 33,  61 => 32,  57 => 31,  52 => 28,  46 => 27,  39 => 25,  37 => 1276,  36 => 1275,  35 => 1274,  34 => 1257,  32 => 1255,  31 => 1253,  11 => 25,);
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

{% block content %}

  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    <div class=\"product-header col-md-12\">
      <div class=\"row justify-content-md-center\">
      {% if is_multishop_context %}
        <div class=\"col-md-10\">
          <div class=\"alert alert-warning\" role=\"alert\">
            <p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
          </div>
        </div>
      {% endif %}

      <div class=\"col-md-10\">
        <div class=\"row\">
          <div class=\"col-md-7 big-input {{ 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
            {{ form_widget(form.step1.name) }}
          </div>
          <div class=\"col-md-2 form_step1_type_product\">
            {{ form_widget(form.step1.type_product) }}
            <span class=\"help-box pull-xs-right\" data-toggle=\"popover\"
              data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
          </div>
          <div class=\"col-md-1 form_switch_language\">
            <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
              <select id=\"form_switch_language\" class=\"custom-select\">
                {% for language in languages %}
                  <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %}selected=\"selected\"{% endif %}>{{ language.iso_code }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"toolbar col-md-2 text-md-right\">
            <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\"
               id=\"product_form_go_to_sales\">
              <i class=\"material-icons\">assessment</i>
              <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
            </a>

            <a
              class=\"toolbar-button btn-quicknav btn-sidebar\"
              href=\"#\"
              title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\"
              data-toggle=\"sidebar\"
              data-target=\"#right-sidebar\"
              data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\"
              id=\"product_form_open_quicknav\"
            >
              <i class=\"material-icons\">list</i>
              <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
            </a>

            <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
               title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"{{ help_link }}\"
               id=\"product_form_open_help\"
            >
              <i class=\"material-icons\">help</i>
              <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
            </a>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-12\">
            {{ form_errors(form.step1.name) }}
            {{ form_errors(form.step1.type_product) }}
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    {# FORM TABS CONTAINER #}
    <div id=\"form-loading\" class=\"col-md-10\">
      <div class=\"tabs js-tabs\">
        <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
          <li id=\"tab_step1\" class=\"nav-item\"><a href=\"#step1\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link active\">{{ 'Basic settings'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step3\" class=\"nav-item\"><a href=\"#step3\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step4\" class=\"nav-item\"><a href=\"#step4\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step2\" class=\"nav-item\"><a href=\"#step2\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Pricing'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step5\" class=\"nav-item\"><a href=\"#step5\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'SEO'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          <li id=\"tab_step6\" class=\"nav-item\"><a href=\"#step6\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Options'|trans({}, 'Admin.Global') }}</a></li>
          {% if hookcount('displayAdminProductsExtra') > 0 %}
            <li id=\"tab_hooks\" class=\"nav-item\"><a href=\"#hooks\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link\">{{ 'Modules'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
          {% endif %}
        </ul>
        <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
          <i class=\"material-icons hide\">chevron_left</i>
        </div>
        <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
          <i class=\"material-icons hide\">chevron_right</i>
        </div>
      </div>
      <div id=\"form_content\" class=\"tab-content\">

        {# STEP 1 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {# LEFT #}
                  <div class=\"col-md-9 left-column\">

                    <div id=\"js_form_step1_inputPackItems\">
                      {{ form_errors(form.step1.inputPackItems) }}
                      {{ form_widget(form.step1.inputPackItems) }}
                    </div>

                    <div id=\"product-images-container\" class=\"mb-4\">
                      <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                           url-upload=\"{{ path('admin_product_image_upload', {'idProduct': id_product}) }}\"
                           url-position=\"{{ path('admin_product_image_positions') }}\"
                           data-max-size=\"{{ 'PS_LIMIT_UPLOAD_IMAGE_VALUE'|configuration }}\"
                      >
                        <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                        <div class=\"dz-default dz-message openfilemanager\">
                            <i class=\"material-icons\">add_a_photo</i><br/>
                            {{js_translatable['Drop images here']}}<br/>
                            <a>{{js_translatable['or select files']}}</a><br/>
                            <small>
                                {{js_translatable['files recommandations']}}<br/>
                                {{js_translatable['files recommandations2']}}
                            </small>
                        </div>
                        {% if form.step1.vars.value.images is defined %}
                            {% if editable %}
                                <div class=\"dz-preview disabled openfilemanager\">
                                    <div><span>+</span></div>
                                </div>
                            {% endif %}
                          {% for image in form.step1.vars.value.images %}
                            <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                                 data-id=\"{{ image.id }}\"
                                 url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\"
                                 url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\"
                            >
                              <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                              <div class=\"dz-details\">
                                <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                                <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                              </div>
                              <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                              <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                              <div class=\"dz-success-mark\"></div>
                              <div class=\"dz-error-mark\"></div>
                              {% if image.cover %}
                                <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                              {% endif %}
                            </div>
                          {% endfor %}
                        {% endif %}
                      </div>
                      <div id=\"product-images-form-container\" class=\"col-md-4\">
                        <div id=\"product-images-form\"></div>
                      </div>
                      <div class=\"dropzone-expander text-sm-center col-md-12\">
                        <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
                        <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
                      </div>

                    </div>

                    <div class=\"summary-description-container\">
                      <ul class=\"nav nav-tabs bordered\">
                        <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</a></li>
                        <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">{{ 'Description'|trans({}, 'Admin.Global') }}</a></li>
                      </ul>

                      <div class=\"tab-content bordered\">
                        <div class=\"tab-pane panel panel-default active\" id=\"description_short\">
                          {{ form_widget(form.step1.description_short) }}
                        </div>
                        <div class=\"tab-pane panel panel-default \" id=\"description\">
                          {{ form_widget(form.step1.description) }}
                        </div>
                      </div>
                    </div>

                    {{ renderhook('displayAdminProductsMainStepLeftColumnMiddle', { 'id_product': id_product }) }}

                    <div id=\"features\" class=\"mb-3\">
                      <div id=\"features-content\" class=\"content {{ form.step1.features|length == 0 ? 'hide':'' }}\">
                        <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        {{ form_errors(form.step1.features) }}
                        <div
                          class=\"feature-collection nostyle\"
                          data-prototype=\"{% filter escape %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': form.step1.features.vars.prototype }) }}
                          {% endfilter %}\"
                        >
                          {% for feature in form.step1.features %}
                            {{ include('PrestaShopBundle:Admin/Product/Include:form_feature.html.twig', { 'form': feature }) }}
                          {% endfor %}
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i> {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
                        </div>
                      </div>
                    </div>

                    <div id=\"manufacturer\" class=\"mb-3\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_manufacturer.html.twig', { 'form':form.step1.id_manufacturer }) }}
                    </div>

                    <div id=\"related-product\" class=\"mb-3\">
                      {{ include('PrestaShopBundle:Admin/Product/Include:form_related_products.html.twig', { 'form':form.step1.related_products }) }}
                    </div>

                    {{ renderhook('displayAdminProductsMainStepLeftColumnBottom', { 'id_product': id_product }) }}

                  </div>

                  {# RIGHT #}
                  <div class=\"col-md-3 right-column\">

                      <div class=\"row\">
                        <div class=\"col-md-12\">

                          {% if is_combination_active %}
                            <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                              <h2>
                                {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                              </div>
                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %}checked=\"checked\"{% endif %}>
                                  {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
                                </label>
                                <div id=\"product_type_combinations_shortcut\">
                                  <span class=\"small font-secondary\">
                                    {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                    {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                  </span>
                                </div>
                              </div>
                            </div>
                          {% endif %}

                          <div class=\"form-group mb-4\">
                            <h2>
                              {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            {{ form_errors(form.step6.reference) }}
                            <div class=\"row\">
                              <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">
                                  {{ form_widget(form.step6.reference) }}
                              </div>
                            </div>
                          </div>

                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                              <h2>
                                {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                                <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                              </h2>
                              {{ form_errors(form.step1.qty_0_shortcut) }}
                              <div class=\"row\">
                                <div class=\"col-xl-6 col-lg-12\">
                                  {{ form_widget(form.step1.qty_0_shortcut) }}
                                </div>
                              </div>
                              <span class=\"small font-secondary\">
                                {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                              </span>
                            </div>
                          {% endif %}

                          <div class=\"form-group mb-4\">
                            <h2>
                              {{ \"Price\"|trans({}, 'Admin.Global') }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </h2>
                            <div class=\"row\">
                              <div class=\"col-md-6\">
                                <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_shortcut) }}
                                {{ form_errors(form.step1.price_shortcut) }}
                              </div>
                              <div class=\"col-md-6 col-offset-md-1\">
                                <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ form_widget(form.step1.price_ttc_shortcut) }}
                                {{ form_errors(form.step1.price_ttc_shortcut) }}
                              </div>
                              <div class=\"col-md-12 mt-1\">
                                <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                                {{ render(controller('PrestaShopBundle:Admin/Product:renderField', {'productId': id_product, 'step': 'step2', 'fieldName': 'id_tax_rules_group' })) }}
                              </div>
                              <div class=\"col-md-12\">
                                <span class=\"small font-secondary\">
                                  {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                                  {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').tab(\\'show\\');\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                                </span>
                              </div>
                            </div>
                            <div class=\"row hide\">
                              <div class=\"col-md-12\">
                                <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
                              </div>
                              <div class=\"clearfix\"></div>
                              <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                              </div>
                              <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                            </div>
                          </div>

                          <div class=\"form-group mb-4\" id=\"categories\">
                            {{ include('PrestaShopBundle:Admin/Product/Include:form-categories.html.twig', { 'form': form.step1, 'productId': id_product }) }}
                          </div>

                          {{ renderhook('displayAdminProductsMainStepRightColumnBottom', { 'id_product': id_product }) }}

                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 2 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    <div id=\"quantities\" style=\"{% if has_combinations or form.step3.depends_on_stock.vars.value != \"0\" %}display: none;{% endif %}\">
                      <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                            <div class=\"col-md-4\">
                              <label class=\"form-control-label\">{{ form.step3.qty_0.vars.label }}</label>
                              {{ form_errors(form.step3.qty_0) }}
                              {{ form_widget(form.step3.qty_0) }}
                            </div>
                          {% endif %}
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.minimal_quantity.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.minimal_quantity) }}
                            {{ form_widget(form.step3.minimal_quantity) }}
                          </div>
                        </div>
                      </fieldset>

                      <h2>{{ 'Stock alerts'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                      <fieldset class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-4\">
                            <label class=\"form-control-label\">{{ form.step3.low_stock_threshold.vars.label }}</label>
                            {{ form_errors(form.step3.low_stock_threshold) }}
                            {{ form_widget(form.step3.low_stock_threshold) }}
                          </div>
                          <div class=\"col-md-8\">
                            <label class=\"form-control-label\">&nbsp;</label>
                            <div class=\"widget-checkbox-inline\">
                              {{ form_errors(form.step3.low_stock_alert) }}
                              {{ form_widget(form.step3.low_stock_alert) }}
                              <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>

                    <div id=\"virtual_product\" data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': 1 }) }}\" data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': 1}) }}\">

                      <div class=\"row\">
                        <div class=\"col-md-4\">
                          <h2>{{ form.step3.virtual_product.vars.label }}</h2>
                        </div>
                        <div class=\"col-md-8\">
                          <fieldset class=\"form-group\">
                            {{ form_widget(form.step3.virtual_product.is_virtual_file) }}
                          </fieldset>
                        </div>
                      </div>

                      <div id=\"virtual_product_content\" class=\"row col-md-8\">
                        {{ form_errors(form.step3.virtual_product) }}
                        <div class=\"col-md-12\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.file.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                            <div id=\"form_step3_virtual_product_file_input\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'hide' : 'show' }}\">
                              {{ form_widget(form.step3.virtual_product.file) }}
                            </div>
                            <div id=\"form_step3_virtual_product_file_details\" class=\"{{ form.step3.virtual_product.vars.value.filename is defined ? 'show' : 'hide' }}\">
                              <a href=\"{{ form.step3.virtual_product.vars.value.file_download_link is defined ? form.step3.virtual_product.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                              <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': id_product}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                            </div>
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.name.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.name) }}
                            {{ form_widget(form.step3.virtual_product.name) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_downloadable.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_downloadable) }}
                            {{ form_widget(form.step3.virtual_product.nb_downloadable) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.expiration_date.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.expiration_date) }}
                            {{ form_widget(form.step3.virtual_product.expiration_date) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-6\">
                          <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.step3.virtual_product.nb_days.vars.label }}</label>
                            <span class=\"help-box\" data-toggle=\"popover\"
                                  data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            {{ form_errors(form.step3.virtual_product.nb_days) }}
                            {{ form_widget(form.step3.virtual_product.nb_days) }}
                          </fieldset>
                        </div>
                        <div class=\"col-md-12\">
                          {{ form_widget(form.step3.virtual_product.save) }}
                        </div>
                      </div>
                    </div>

                    {% if asm_globally_activated and form.step1.type_product.vars.value != \"2\" %}
                      <div class=\"form-group\" id=\"asm_quantity_management\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.advanced_stock_management) }}
                          {{ form_widget(form.step3.advanced_stock_management) }}
                          {% if form.step1.type_product.vars.value == \"1\" %}
                            {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
                          {% endif %}
                        </div>
                      </div>
                      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(form.step3.advanced_stock_management.vars.checked) %}display: none;{% endif %}\">
                        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
                        <div class=\"col-sm-10\">
                          {{ form_errors(form.step3.depends_on_stock) }}
                          {{ form_widget(form.step3.depends_on_stock) }}
                        </div>
                      </div>
                    {% endif %}
                    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                      <div id=\"pack_stock_type\">
                        <h2>{{ form.step3.pack_stock_type.vars.label }}</h2>
                        <div class=\"row col-md-4\">
                          <fieldset class=\"form-group\">
                            {{ form_errors(form.step3.pack_stock_type) }}
                            {{ form_widget(form.step3.pack_stock_type) }}
                          </fieldset>
                        </div>
                      </div>
                    {% endif %}
                    {{ include('PrestaShopBundle:Admin/Product/Include:form_combinations.html.twig', {'form': form.step3, 'form_combination_bulk': formCombinations}) }}

                    {{ renderhook('displayAdminProductsQuantitiesStepBottom', { 'id_product': id_product }) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 3 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">
                  {{ include('PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig', {
                    'form' : form.step4,
                    'asm_globally_activated': asm_globally_activated,
                    'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                    'isChecked': form.step3.advanced_stock_management.vars.checked,
                    'warehouses': warehouses
                  }) }}
                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 4 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">
                    <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                    </h2>
                  </div>

                  <div class=\"col-md-12 form-group\">
                    <div class=\"row\">

                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price.vars.label }}</label>
                        {{ form_errors(form.step2.price) }}
                        {{ form_widget(form.step2.price) }}
                      </div>
                      <div class=\"col-xl-2 col-lg-3\">
                        <label class=\"form-control-label\">{{ form.step2.price_ttc.vars.label }}</label>
                        {{ form_errors(form.step2.price_ttc) }}
                        {{ form_widget(form.step2.price_ttc) }}
                      </div>

                      <div class=\"col-xl-4 col-lg-6 mx-auto\">
                        <label class=\"form-control-label\">
                          {{ form.step2.unit_price.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.),  and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unit_price) }}
                            {{ form_widget(form.step2.unit_price) }}
                          </div>
                          <div class=\"col-md-6\">
                            {{ form_errors(form.step2.unity) }}
                            {{ form_widget(form.step2.unity) }}
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-2 col-md-offset-1 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <label class=\"form-control-label\">{{ form.step2.ecotax.vars.label }}</label>
                        {{ form_errors(form.step2.ecotax) }}
                        {{ form_widget(form.step2.ecotax) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row form-group\">
                      <div class=\"col-md-4\">
                        <label class=\"form-control-label\">{{ form.step2.id_tax_rules_group.vars.label }}</label>
                        {{ form_errors(form.step2.id_tax_rules_group) }}
                        {{ form_widget(form.step2.id_tax_rules_group) }}
                      </div>
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\">
                          {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                      </div>
                      <div class=\"col-md-12 pt-1\">
                        {{ form_widget(form.step2.on_sale) }}
                      </div>
                      <div class=\"col-md-12\">
                        <div class=\"row\">
                          <div class=\"col-xl-5 col-lg-12\">
                            <div class=\"alert alert-info mt-2\" role=\"alert\">
                              <p class=\"alert-text\">
                                {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-xl-2 col-lg-3 form-group\">
                        <label class=\"form-control-label\">{{ form.step2.wholesale_price.vars.label|raw }}</label>
                        {{ form_errors(form.step2.wholesale_price) }}
                        {{ form_widget(form.step2.wholesale_price) }}
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row mb-3\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-12\">
                        <div id=\"specific-price\" class=\"mb-2\">
                          <a class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\">
                            <thead class=\"thead-default\">
                            <tr>
                              <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                              <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                              <th></th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
                          {{ include('PrestaShopBundle:Admin:Product/Include/form-specific-price.html.twig', {'form': form.step2.specific_price, 'is_multishop_context': is_multishop_context}) }}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-12\">
                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>
                          {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </h2>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
                          {{ form_errors(form.step2.specificPricePriority_0) }}
                          {{ form_widget(form.step2.specificPricePriority_0) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_1) }}
                          {{ form_widget(form.step2.specificPricePriority_1) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_2) }}
                          {{ form_widget(form.step2.specificPricePriority_2) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                          <label>&nbsp;</label>
                          {{ form_errors(form.step2.specificPricePriority_3) }}
                          {{ form_widget(form.step2.specificPricePriority_3) }}
                        </fieldset>
                      </div>
                      <div class=\"col-md-12\">
                        {{ form_widget(form.step2.specificPricePriorityToAll) }}
                      </div>
                    </div>
                  </div>

                  {{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': id_product }) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 5 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step5\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  {{ include('PrestaShopBundle:Admin/Product/Include:form_seo.html.twig', {'form' : form.step5}) }}

                </div>
              </div>
            </div>
          </div>
        </div>

        {# STEP 6 #}
        <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"container-fluid\">
                <div class=\"row\">

                  <div class=\"col-md-12\">

                    {{ renderhook('displayAdminProductsOptionsStepTop', { 'id_product': id_product }) }}

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-4 form-group\">
                        {{ form_errors(form.step6.visibility) }}
                        {{ form_widget(form.step6.visibility) }}
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-7 form-group\">
                          {{ form_errors(form.step6.display_options) }}
                          <div class=\"row\">
                            <div class=\"col-md-4 js-available-for-order\">
                              {{ form_widget(form.step6.display_options.available_for_order) }}
                            </div>
                            <div class=\"col-md-3 js-show-price\">
                              {{ form_widget(form.step6.display_options.show_price) }}
                            </div>
                            <div class=\"col-md-5\">
                              {{ form_widget(form.step6.display_options.online_only) }}
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class=\"row form-group\">
                      <div class=\"col-md-8\">
                        <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
                        {{ form_errors(form.step6.tags) }}
                        {{ form_widget(form.step6.tags) }}
                        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
                          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
                            {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
                          </button>
                          <p class=\"alert-text\">{{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}</p>
                          <div class=\"alert-more collapse\" id=\"tagsInfo\">
                            <p>
                              {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
                              {{ 'You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.'|trans({}, 'Admin.Catalog.Help')|
                              replace({
                                '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                                '[/1]' : '</a>'
                              })|raw
                              }}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>
                      </div>
                    </div>

                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.condition.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.condition) }}
                        {{ form_widget(form.step6.condition) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">&nbsp;</label>
                        {{ form_widget(form.step6.show_condition) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.isbn.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.isbn) }}
                        {{ form_widget(form.step6.isbn) }}
                      </fieldset>
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.ean13.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.ean13) }}
                        {{ form_widget(form.step6.ean13) }}
                      </fieldset>
                    </div>
                    <div class=\"row\">
                      <fieldset class=\"col-md-4 form-group\">
                        <label class=\"form-control-label\">
                          {{ form.step6.upc.vars.label }}
                          <span class=\"help-box\" data-toggle=\"popover\"
                            data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                        </label>
                        {{ form_errors(form.step6.upc) }}
                        {{ form_widget(form.step6.upc) }}
                      </fieldset>
                    </div>

                    <div class=\"row\">
                      <div class=\"col-md-12\">
                        <div id=\"custom_fields\" class=\"mt-3\">
                          <h2>{{ form.step6.custom_fields.vars.label }}</h2>
                          <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
                          {{ form_errors(form.step6.custom_fields) }}
                          <ul class=\"customFieldCollection nostyle\" data-prototype=\"
                                      {% filter escape %}
                                      {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': form.step6.custom_fields.vars.prototype }) }}
                                      {% endfilter %}\">
                            {% for field in form.step6.custom_fields %}
                              <li>
                                {{ include('PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig', { 'form': field }) }}
                              </li>
                            {% endfor %}
                          </ul>
                          <a href=\"#\" class=\"btn btn-outline-secondary add\">
                            <i class=\"material-icons\">add_circle</i>
                            {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class=\"row mt-4\">
                      <div class=\"col-md-8\">
                        <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                        <p class=\"subtitle\">{{ 'Add files that customers can download directly on the product page (instructions, manual, recipe, etc.).'|trans({}, 'Admin.Catalog.Feature') }}</p>
                        {{ form_widget(form.step6.attachments) }}
                      </div>
                    </div>
                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\">
                        <a
                          class=\"btn btn-outline-secondary mb-3\"
                          href=\"#collapsedForm\"
                          data-toggle=\"collapse\"
                          aria-expanded=\"false\"
                          aria-controls=\"collapsedForm\"
                        >
                          <i class=\"material-icons\">add_circle</i>
                          {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
                        </a>
                        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
                          {{ form_errors(form.step6.attachment_product) }}
                          <div id=\"form_step6_attachment_product\" data-action=\"{{ form.step6.attachment_product.vars.attr['data-action'] }}\">
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.file) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.name) }}</div>
                            <div class=\"form-group\">{{ form_widget(form.step6.attachment_product.description) }}</div>
                            <div class=\"form-group\">
                              {{ form_widget(form.step6.attachment_product.add) }}
                              {{ form_widget(form.step6.attachment_product.cancel) }}
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>

                    <div class=\"row mt-3\">
                      <div class=\"col-md-8\" id=\"supplier_collection\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig', { 'form': form.step6 }) }}
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"supplier_combination_collection\" class=\"col-md-12\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': 1, 'supplierIds': 1}) }}\">
                        {{ include('PrestaShopBundle:Admin:Product/Include/form-supplier-combination.html.twig', { 'suppliers': form.step6.suppliers.vars.value, 'form': form.step6 }) }}
                      </div>
                    </div>

                    {{ renderhook('displayAdminProductsOptionsStepBottom', { 'id_product': id_product }) }}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        {# OTHER STEPS #}
        {% if hookcount('displayAdminProductsExtra') > 0 %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">

                    {# LEFT #}
                    <div class=\"col-md-12\">
                      {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}

                      <div class=\"row module-selection\" style=\"display: none;\">
                        <div class=\"col-md-12 col-lg-7\">
                          {% for module in hooks %}
                            <div class=\"module-render-container module-{{ module.attributes.name }}\">
                              <div>
                                <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                <h2 class=\"text-ellipsis module-name-grid\">
                                  {{ module.attributes.displayName }}
                                </h2>
                                <div class=\"text-ellipsis small-text module-version\">
                                  {{ module.attributes.version }} by {{ module.attributes.author }}
                                </div>
                              </div>
                              <div class=\"small no-padding\">
                                {{ module.attributes.description }}
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                        <div class=\"col-md-12 col-lg-5\">
                          <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          <select class=\"modules-list-select\" data-toggle=\"select2\">
                            {% for module in hooks %}
                              <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"module-render-container all-modules\">
                        <p>
                          <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                          {{ 'These modules are relative to the product page of your shop.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                          {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}
                        </p>
                        <div class=\"row\">
                          {% for module in hooks %}
                            <div class=\"col-md-12 col-lg-6 col-xl-4\">
                              <div class=\"module-item-wrapper-grid\">
                                <div class=\"module-item-heading-grid\">
                                  <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                                  <h3 class=\"text-ellipsis module-name-grid\">
                                    {{ module.attributes.displayName }}
                                  </h3>
                                  <div class=\"text-ellipsis small-text module-version-author-grid\">
                                    {{ module.attributes.version }} by {{ module.attributes.author }}
                                  </div>
                                </div>
                                <div class=\"module-quick-description-grid small no-padding\">
                                  {{ module.attributes.description }}
                                </div>
                                <div class=\"module-container\">
                                  <div class=\"module-quick-action-grid clearfix\">
                                    <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                      {{ 'Configure'|trans({}, 'Admin.Actions') }}
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          {% endfor %}
                        </div>
                      </div>

                      {% for module in hooks %}
                        <div
                          id=\"module_{{ module.id }}\"
                          class=\"module-render-container module-{{ module.attributes.name }}\"
                          style=\"display: none;\"
                        >
                          <div>
                            {{ module.content|raw }}
                          </div>
                        </div>
                      {% endfor %}
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        {% endif %}

      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    <div class=\"product-footer justify-content-md-center\">
      <div class=\"col-lg-5\">
        <a
          href=\"{{ path('admin_product_unit_action', {action: 'delete', id: id_product}) }}\"
          class=\"tooltip-link btn btn-lg\"
          data-toggle=\"pstooltip\"
          id=\"product_form_delete_btn\"
          title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
          data-placement=\"left\"
          data-original-title=\"Delete\"
        >
          <i class=\"material-icons\">delete</i>
        </a>
        <a
          href=\"\"
          data-redirect=\"{{ preview_link }}\"
          data-url-deactive=\"{{ preview_link_deactivate }}\"
          target=\"_blank\"
          class=\"btn btn-secondary preview\"
          data-toggle=\"pstooltip\"
          id=\"product_form_preview_btn\"
          title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
         >
          {{ 'Preview'|trans({}, 'Admin.Actions')}}
        </a>
        {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if form.step1.vars.value.active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
            title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ form.step1.vars.value.active ? 'checked=\"checked\"' : '' }}
        />
        {% endif %}
      </div>
      <div class=\"col-lg-6 text-lg-right\">
        {% if is_shop_context %}
          <button
            type=\"button\"
            class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
            id=\"product_form_save_duplicate_btn\"
            data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
            data-toggle=\"pstooltip\"
            title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
            >
            {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
          </button>
        {% endif %}
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
          id=\"product_form_save_go_to_catalog_btn\"
          data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
          id=\"product_form_save_new_btn\"
          data-redirect=\"{{ path('admin_product_new') }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
          >
          {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
        </button>
        <input
          id=\"submit\"
          type=\"submit\"
          class=\"btn btn-primary save uppercase ml-3\"
          value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
          />

          <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
          <div class=\"btn-group hide dropdown\">
            <button
             class=\"btn btn-primary js-btn-save ml-3\"
             type=\"submit\"
             >
              <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
            </button><button
              class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
              type=\"button\"
              id=\"dropdownMenu\"
              data-toggle=\"dropdown\"
              aria-expanded=\"false\"
            >
              <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
              {% if is_shop_context %}
                <a
                 class=\"dropdown-item duplicate js-btn-save\"
                 href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: id_product}) }}\"
                >
                {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
                </a>
              {% endif %}
             <a
              class=\"dropdown-item go-catalog js-btn-save\"
              href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
              >
              {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
             </a>
             <a
              class=\"dropdown-item new-product js-btn-save\"
              href=\"{{ path('admin_product_new') }}\"
              >
              {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
            </a>
          </div>
        </div>
      </div>
    </div>
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>

  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF or PNG format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure to delete this?\": \"Are you sure to delete this?\"|trans({}, 'Admin.Notifications.Warning'),
\"This will delete the specific price. Do you wish to proceed?\": \"This will delete the specific price. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/form.html.twig");
    }
}
