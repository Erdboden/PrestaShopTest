<?php

/* PrestaShopBundle:Admin/Product/Include:form_combination.html.twig */
class __TwigTemplate_4e0860898eb6c4998ac588275e9ab85c8ac9c0b6cc6382e145fa9703bf14e5aa extends Twig_Template
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
        $__internal_1656882a423bed578957ecf6047395fec42f93a1396fda14a5f02778350046f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1656882a423bed578957ecf6047395fec42f93a1396fda14a5f02778350046f7->enter($__internal_1656882a423bed578957ecf6047395fec42f93a1396fda14a5f02778350046f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_combination.html.twig"));

        // line 25
        echo "<tr class=\"combination loaded\" id=\"attribute_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\">";
        // line 31
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "</span>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "attribute_price", array()), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <span data-price=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "
    </td>
    ";
        // line 38
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 39
            echo "      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "attribute_quantity", array()), "html", null, true);
            echo "\" class=\"form-control text-sm-right\">
          </div>
      </td>
    ";
        }
        // line 45
        echo "
    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                ";
        // line 53
        echo "                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prev. combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a>
                <a class=\"next btn-sensitive\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next combination", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button id=\"back_to_product\" type=\"button\" class=\"btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to product", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
                <h2 class=\"title pt-2\">
                  ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combination details", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " -
                  ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "
                </h2>
                ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_default", array()), 'widget');
        echo "
                <div class=\"row\">
                  ";
        // line 66
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 67
            echo "                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", array()), "vars", array()), "label", array()), "html", null, true);
            echo "
                          </label>
                          ";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", array()), 'errors');
            echo "
                          ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_quantity", array()), 'widget');
            echo "
                      </fieldset>
                    </div>
                  ";
        }
        // line 77
        echo "                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                          ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", array()), 'errors');
        echo "
                          ";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "available_date_attribute", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                          </label>
                          ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", array()), 'errors');
        echo "
                          ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_minimal_quantity", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                          ";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", array()), 'errors');
        echo "
                          ";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_reference", array()), 'widget');
        echo "
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock alerts", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                      ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", array()), 'errors');
        echo "
                      ";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_threshold", array()), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", array()), 'errors');
        echo "
                        ";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_low_stock_alert", array()), 'widget');
        echo "
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", array("[1]" => (("<a href=&quot;" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"), "Admin.Catalog.Help");
        echo "\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price and impact", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", array()), 'errors');
        echo "
                            ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_wholesale_price", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price? Is it cheaper or more expensive than the default retail price?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", array()), 'errors');
        echo "
                            ";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_price", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", array()), 'errors');
        echo "
                            ";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_priceTI", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <small class=\"form-control-label vcenter\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Final retail price (tax excl.) will be", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price\" data-price=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "final_price", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, ($context["default_currency"] ?? $this->getContext($context, "default_currency")), "html", null, true);
        echo "</small>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 ";
        // line 159
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", array()), 'errors');
        echo "
                            ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ecotax", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this combination have a different price per unit?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", array()), 'errors');
        echo "
                            ";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_unity", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "</span>
                                ";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", array()), 'errors');
        echo "
                                ";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_weight", array()), 'widget');
        echo "
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific references", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", array()), 'errors');
        echo "
                            ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_isbn", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                            </label>
                            ";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", array()), 'errors');
        echo "
                            ";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_ean13", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
                            ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", array()), 'errors');
        echo "
                            ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "attribute_upc", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            ";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", array()), 'errors');
        echo "
                            ";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_image_attr", array()), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 236
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsCombinationBottom", array("id_product" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product", array()), "id_product_attribute" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array())));
        echo "
                    </div>
                </div>

                ";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_product_attribute", array()), 'widget');
        echo "
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_attribute", array("idProduct" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product", array()))), "html", null, true);
        echo "\" class=\"btn tooltip-link btn-sm delete\" data=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      ";
        // line 248
        $context["checked"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "attribute_default", array()) == 1)) ? ("checked") : (""));
        // line 249
        echo "      <input class=\"attribute-default\" type=\"radio\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "value", array()), "id_product_attribute", array()), "html", null, true);
        echo "\">
    </td>
</tr>
";
        
        $__internal_1656882a423bed578957ecf6047395fec42f93a1396fda14a5f02778350046f7->leave($__internal_1656882a423bed578957ecf6047395fec42f93a1396fda14a5f02778350046f7_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 249,  513 => 248,  505 => 245,  497 => 240,  490 => 236,  480 => 229,  476 => 228,  470 => 225,  461 => 219,  453 => 214,  449 => 213,  445 => 212,  437 => 207,  433 => 206,  428 => 204,  423 => 202,  414 => 196,  410 => 195,  406 => 194,  398 => 189,  389 => 183,  385 => 182,  381 => 181,  376 => 179,  368 => 174,  364 => 173,  359 => 171,  354 => 169,  345 => 163,  341 => 162,  337 => 161,  330 => 159,  315 => 155,  308 => 151,  304 => 150,  300 => 149,  292 => 144,  288 => 143,  283 => 141,  278 => 139,  269 => 133,  265 => 132,  261 => 131,  253 => 126,  244 => 120,  240 => 119,  236 => 118,  226 => 111,  222 => 110,  218 => 109,  210 => 104,  202 => 99,  198 => 98,  194 => 97,  186 => 92,  182 => 91,  177 => 89,  172 => 87,  163 => 81,  159 => 80,  155 => 79,  151 => 77,  144 => 73,  140 => 72,  135 => 70,  130 => 67,  128 => 66,  123 => 64,  118 => 62,  114 => 61,  108 => 58,  101 => 54,  96 => 53,  89 => 50,  84 => 48,  79 => 45,  72 => 41,  68 => 39,  66 => 38,  55 => 36,  48 => 32,  44 => 31,  38 => 28,  31 => 26,  22 => 25,);
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
<tr class=\"combination loaded\" id=\"attribute_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>{{ form.vars.value.name }}</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <span class=\"input-group-addon\">{{ default_currency }}</span>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"{{ form.vars.value.attribute_price }}\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <span data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency }}
    </td>
    {% if 'PS_STOCK_MANAGEMENT'|configuration %}
      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"{{ form.vars.value.attribute_quantity }}\" class=\"form-control text-sm-right\">
          </div>
      </td>
    {% endif %}

    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_{{ form.vars.value.id_product_attribute }}\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" class=\"combination-form hide row\">
            <div class=\"col-sm-12 nav\">
                {# \"Prev.\" is short for \"Previous\" #}
                <a class=\"btn-sensitive prev\"><i class=\"material-icons\">keyboard_arrow_left</i> {{ 'Prev. combination'|trans({}, 'Admin.Catalog.Feature') }}</a>
                <a class=\"next btn-sensitive\">{{ 'Next combination'|trans({}, 'Admin.Catalog.Feature') }} <i class=\"material-icons\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel col-md-12 p-2\">
                <div class=\"float-left\">
                    <button id=\"back_to_product\" type=\"button\" class=\"btn btn-outline-secondary btn-back\"><i class=\"material-icons\">arrow_back</i> {{ 'Back to product'|trans({}, 'Admin.Catalog.Feature') }}</button>
                </div>
                <h2 class=\"title pt-2\">
                  {{ \"Combination details\"|trans({}, 'Admin.Catalog.Feature') }} -
                  {{ form.vars.value.name }}
                </h2>
                {{ form_widget(form.attribute_default) }}
                <div class=\"row\">
                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_quantity.vars.label }}
                          </label>
                          {{ form_errors(form.attribute_quantity) }}
                          {{ form_widget(form.attribute_quantity) }}
                      </fieldset>
                    </div>
                  {% endif %}
                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.available_date_attribute.vars.label }}</label>
                          {{ form_errors(form.available_date_attribute) }}
                          {{ form_widget(form.available_date_attribute) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_minimal_quantity.vars.label }}
                            <span class=\"help-box\" data-toggle=\"popover\"
                              data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                          </label>
                          {{ form_errors(form.attribute_minimal_quantity) }}
                          {{ form_widget(form.attribute_minimal_quantity) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.attribute_reference.vars.label }}</label>
                          {{ form_errors(form.attribute_reference) }}
                          {{ form_widget(form.attribute_reference) }}
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ 'Stock alerts'|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_low_stock_threshold.vars.label }}</label>
                      {{ form_errors(form.attribute_low_stock_threshold) }}
                      {{ form_widget(form.attribute_low_stock_threshold) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        {{ form_errors(form.attribute_low_stock_alert) }}
                        {{ form_widget(form.attribute_low_stock_alert) }}
                        <span class=\"help-box\" data-toggle=\"popover\" data-html=\"true\" data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" ></span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Price and impact\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_wholesale_price.vars.label }}</label>
                            {{ form_errors(form.attribute_wholesale_price) }}
                            {{ form_widget(form.attribute_wholesale_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_price.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price? Is it cheaper or more expensive than the default retail price?\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_price) }}
                            {{ form_widget(form.attribute_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_priceTI.vars.label }}</label>
                            {{ form_errors(form.attribute_priceTI) }}
                            {{ form_widget(form.attribute_priceTI) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <small class=\"form-control-label vcenter\">{{ \"Final retail price (tax excl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency }}</small>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 {% if 'PS_USE_ECOTAX'|configuration != 1 %}hide{% endif %}\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_ecotax.vars.label }}</label>
                            {{ form_errors(form.attribute_ecotax) }}
                            {{ form_widget(form.attribute_ecotax) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_unity.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"Does this combination have a different price per unit?\"|trans({}, 'Admin.Catalog.Feature') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_unity) }}
                            {{ form_widget(form.attribute_unity) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_weight.vars.label }}</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">{{ 'PS_WEIGHT_UNIT'|configuration }}</span>
                                {{ form_errors(form.attribute_weight) }}
                                {{ form_widget(form.attribute_weight) }}
                            </div>
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Specific references\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_isbn.vars.label }}</label>
                            {{ form_errors(form.attribute_isbn) }}
                            {{ form_widget(form.attribute_isbn) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_ean13.vars.label }}
                              <span class=\"help-box\" data-toggle=\"popover\"
                                data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                            </label>
                            {{ form_errors(form.attribute_ean13) }}
                            {{ form_widget(form.attribute_ean13) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_upc.vars.label }}</label>
                            {{ form_errors(form.attribute_upc) }}
                            {{ form_widget(form.attribute_upc) }}
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Images\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <fieldset class=\"form-group js-combination-images\">
                            <label>
                                <small class=\"form-control-label\">{{ form.id_image_attr.vars.label }}</small>
                                <small class=\"form-control-label number-of-images\"></small>
                            </label>
                            {{ form_errors(form.id_image_attr) }}
                            {{ form_widget(form.id_image_attr) }}
                        </fieldset>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {{ renderhook('displayAdminProductsCombinationBottom', { 'id_product': form.vars.value.id_product, 'id_product_attribute': form.vars.value.id_product_attribute }) }}
                    </div>
                </div>

                {{ form_widget(form.id_product_attribute) }}
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"{{ path('admin_delete_attribute', {'idProduct': form.vars.value.id_product}) }}\" class=\"btn tooltip-link btn-sm delete\" data=\"{{ form.vars.value.id_product_attribute }}\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      {% set checked = form.vars.value.attribute_default == 1 ? 'checked' : '' %}
      <input class=\"attribute-default\" type=\"radio\" {{ checked }} data-id=\"{{ form.vars.value.id_product_attribute }}\">
    </td>
</tr>
", "PrestaShopBundle:Admin/Product/Include:form_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form_combination.html.twig");
    }
}
