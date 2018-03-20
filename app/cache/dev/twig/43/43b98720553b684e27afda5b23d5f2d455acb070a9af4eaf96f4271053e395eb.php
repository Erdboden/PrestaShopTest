<?php

/* PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig */
class __TwigTemplate_28597f13cee67c277f4afe67c7b2efcc7faa582bfe1c6206fc8443312d1828b3 extends Twig_Template
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
        $__internal_3bfb5dad428e3974d89e4e21bc3f4aa928191ed4cf9504b6a5ce9ef201e250f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfb5dad428e3974d89e4e21bc3f4aa928191ed4cf9504b6a5ce9ef201e250f3->enter($__internal_3bfb5dad428e3974d89e4e21bc3f4aa928191ed4cf9504b6a5ce9ef201e250f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig"));

        // line 25
        list($context["dimension_unit"], $context["weight_unit"]) =         array($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_DIMENSION_UNIT"), $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_WEIGHT_UNIT"));
        // line 26
        echo "
<div class=\"col-md-12 pb-1\">
  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package dimension", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adjust your shipping costs by filling in the product dimensions.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 38
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 48
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["dimension_unit"] ?? $this->getContext($context, "dimension_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), 'widget');
        echo "
      <span class=\"input-group-addon\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["weight_unit"] ?? $this->getContext($context, "weight_unit")), "html", null, true);
        echo "</span>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_delivery_times", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" ";
        // line 81
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_delivery_times", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 83
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()) == 1)) {
                // line 84
                echo "              <div class=\"widget-radio-inline\">
                ";
                // line 85
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences"), "html", null, true);
                echo "\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", array(), "Admin.Catalog.Help"), "html", null, true);
                echo "</a>
              </div>
            ";
            } else {
                // line 89
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 91
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_in_stock", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_in_stock", array()), 'errors');
        echo "
    ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_in_stock", array()), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_out_stock", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
    ";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_out_stock", array()), 'errors');
        echo "
    ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delivery_out_stock", array()), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave empty to disable.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_shipping_cost", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If a carrier has a tax, it will be added to the shipping fees.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </h2>
    <label class=\"form-control-label\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Does this product incur additional shipping costs?", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additional_shipping_cost", array()), 'widget');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "selectedCarriers", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>
    ";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "selectedCarriers", array()), 'widget');
        echo "
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        ";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If no carrier is selected then all the carriers will be available for customers orders.", array(), "Admin.Catalog.Notification");
        echo "
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_warehouse_refresh_product_warehouse_combination_form");
        echo "\">
    ";
        // line 147
        if (((($context["asm_globally_activated"] ?? $this->getContext($context, "asm_globally_activated")) && ($context["isNotVirtual"] ?? $this->getContext($context, "isNotVirtual"))) && ($context["isChecked"] ?? $this->getContext($context, "isChecked")))) {
            // line 148
            echo "      ";
            echo twig_include($this->env, $context, "PrestaShopBundle:Admin:Product/Include/form-warehouse-combination.html.twig", array("warehouses" => ($context["warehouses"] ?? $this->getContext($context, "warehouses")), "form" => ($context["form"] ?? $this->getContext($context, "form"))));
            echo "
    ";
        }
        // line 150
        echo "  </div>
</div>

";
        // line 153
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsShippingStepBottom", array("id_product" => ($context["id_product"] ?? $this->getContext($context, "id_product"))));
        echo "
";
        
        $__internal_3bfb5dad428e3974d89e4e21bc3f4aa928191ed4cf9504b6a5ce9ef201e250f3->leave($__internal_3bfb5dad428e3974d89e4e21bc3f4aa928191ed4cf9504b6a5ce9ef201e250f3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 153,  292 => 150,  286 => 148,  284 => 147,  280 => 146,  271 => 140,  261 => 133,  257 => 132,  246 => 124,  240 => 121,  235 => 119,  230 => 117,  220 => 110,  216 => 109,  212 => 108,  208 => 107,  200 => 102,  196 => 101,  192 => 100,  188 => 99,  179 => 92,  173 => 91,  167 => 89,  159 => 86,  155 => 85,  152 => 84,  149 => 83,  145 => 82,  141 => 81,  135 => 78,  130 => 76,  119 => 68,  115 => 67,  110 => 65,  106 => 64,  97 => 58,  93 => 57,  88 => 55,  84 => 54,  75 => 48,  71 => 47,  66 => 45,  62 => 44,  53 => 38,  49 => 37,  44 => 35,  40 => 34,  32 => 29,  28 => 28,  24 => 26,  22 => 25,);
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
{% set dimension_unit, weight_unit = 'PS_DIMENSION_UNIT'|configuration, 'PS_WEIGHT_UNIT'|configuration %}

<div class=\"col-md-12 pb-1\">
  <h2>{{ 'Package dimension'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Adjust your shipping costs by filling in the product dimensions.'|trans({}, 'Admin.Catalog.Feature') }}</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.width.vars.label }}</label>
    {{ form_errors(form.width) }}
    <div class=\"input-group\">
      {{ form_widget(form.width) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.height.vars.label }}</label>
    {{ form_errors(form.height) }}
    <div class=\"input-group\">
      {{ form_widget(form.height) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.depth.vars.label }}</label>
    {{ form_errors(form.depth) }}
    <div class=\"input-group\">
      {{ form_widget(form.depth) }}
      <span class=\"input-group-addon\">{{ dimension_unit }}</span>
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.weight.vars.label }}</label>
    {{ form_errors(form.weight) }}
    <div class=\"input-group\">
      {{ form_widget(form.weight) }}
      <span class=\"input-group-addon\">{{ weight_unit }}</span>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_delivery_times.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" {{ block('widget_container_attributes') }}>
          {% for child in form.additional_delivery_times %}
            {% if child.vars.value == 1 %}
              <div class=\"widget-radio-inline\">
                {{ form_widget(child) }}
                <a href=\"{{ getAdminLink(\"AdminPPreferences\") }}\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> {{ \"edit\"|trans({}, 'Admin.Catalog.Help') }}</a>
              </div>
            {% else %}
              {{ form_widget(child) }}
            {% endif %}
          {% endfor %}
        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_in_stock.vars.label }}</label>
    {{ form_errors(form.delivery_in_stock) }}
    {{ form_widget(form.delivery_in_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_out_stock.vars.label }}</label>
    {{ form_errors(form.delivery_out_stock) }}
    {{ form_widget(form.delivery_out_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_shipping_cost.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"If a carrier has a tax, it will be added to the shipping fees.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </h2>
    <label class=\"form-control-label\">{{ 'Does this product incur additional shipping costs?'|trans({}, 'Admin.Catalog.Feature') }}</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        {{ form_widget(form.additional_shipping_cost) }}
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>{{ form.selectedCarriers.vars.label }}</h2>
    {{ form_widget(form.selectedCarriers) }}
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        {{ 'If no carrier is selected then all the carriers will be available for customers orders.'|trans({}, 'Admin.Catalog.Notification')|raw }}
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"{{ path('admin_warehouse_refresh_product_warehouse_combination_form') }}\">
    {% if asm_globally_activated and isNotVirtual and isChecked %}
      {{ include('PrestaShopBundle:Admin:Product/Include/form-warehouse-combination.html.twig', { 'warehouses': warehouses, 'form': form }) }}
    {% endif %}
  </div>
</div>

{{ renderhook('displayAdminProductsShippingStepBottom', { 'id_product': id_product }) }}
", "PrestaShopBundle:Admin/Product/Include:form_shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form_shipping.html.twig");
    }
}
