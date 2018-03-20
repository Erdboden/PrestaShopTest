<?php

/* PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig */
class __TwigTemplate_93146414467d458cb345bbebd2fcc9bb70345b13b74a65c93e018035679a5e2a extends Twig_Template
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
        $__internal_41fe695d6b36c3090acc9cde283dfe18d387397a945afb5e867ef7750a6ddf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fe695d6b36c3090acc9cde283dfe18d387397a945afb5e867ef7750a6ddf07->enter($__internal_41fe695d6b36c3090acc9cde283dfe18d387397a945afb5e867ef7750a6ddf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array())) > 0)) {
            // line 26
            echo "  <div id=\"custom_fields\">
    <h2>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()), "vars", array()), "label", array()), "html", null, true);
            echo "</h2>
    <div class=\"row mb-1\">
      <div class=\"col-md-12\">
        <div class=\"alert expandable-alert alert-info\" role=\"alert\">
          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#suppliersInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
            ";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", array(), "Admin.Actions");
            echo "
          </button>
          <p class=\"alert-text\">
            ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This interface allows you to specify the suppliers of the current product and its combinations, if any.", array(), "Admin.Catalog.Help");
            echo "<br>
            ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can specify supplier references according to previously associated suppliers.", array(), "Admin.Catalog.Help");
            echo "
          </p>
          <div class=\"alert-more collapse\" id=\"suppliersInfo\">
            <p>
              ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.", array(), "Admin.Catalog.Help");
            echo "
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          ";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()), 'errors');
            echo "
          <table class=\"table\" id=\"form_step6_suppliers\">
            <thead class=\"thead-default\">
            <tr>
              <th width=\"70%\">";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose the suppliers associated with this product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=30%\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default supplier", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "suppliers", array()));
            foreach ($context['_seq'] as $context["key"] => $context["supplier"]) {
                // line 60
                echo "              <tr>
                <td>";
                // line 61
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["supplier"], 'widget');
                echo "</td>
                <td>";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "default_supplier", array()), $context["key"], array(), "array"), 'widget');
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['supplier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
";
        }
        
        $__internal_41fe695d6b36c3090acc9cde283dfe18d387397a945afb5e867ef7750a6ddf07->leave($__internal_41fe695d6b36c3090acc9cde283dfe18d387397a945afb5e867ef7750a6ddf07_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 65,  94 => 62,  90 => 61,  87 => 60,  83 => 59,  76 => 55,  72 => 54,  65 => 50,  52 => 40,  45 => 36,  41 => 35,  35 => 32,  27 => 27,  24 => 26,  22 => 25,);
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
{% if form.suppliers|length > 0 %}
  <div id=\"custom_fields\">
    <h2>{{ form.suppliers.vars.label }}</h2>
    <div class=\"row mb-1\">
      <div class=\"col-md-12\">
        <div class=\"alert expandable-alert alert-info\" role=\"alert\">
          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#suppliersInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
            {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
          </button>
          <p class=\"alert-text\">
            {{ 'This interface allows you to specify the suppliers of the current product and its combinations, if any.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
            {{ 'You can specify supplier references according to previously associated suppliers.'|trans({}, 'Admin.Catalog.Help')|raw }}
          </p>
          <div class=\"alert-more collapse\" id=\"suppliersInfo\">
            <p>
              {{ 'When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.'|trans({}, 'Admin.Catalog.Help')|raw }}
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          {{ form_errors(form.suppliers) }}
          <table class=\"table\" id=\"form_step6_suppliers\">
            <thead class=\"thead-default\">
            <tr>
              <th width=\"70%\">{{ 'Choose the suppliers associated with this product'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=30%\">{{ 'Default supplier'|trans({}, 'Admin.Catalog.Feature') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for key, supplier in form.suppliers %}
              <tr>
                <td>{{ form_widget(supplier) }}</td>
                <td>{{ form_widget(form.default_supplier[key]) }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
{% endif %}
", "PrestaShopBundle:Admin:Product/Include/form-supplier-choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form-supplier-choice.html.twig");
    }
}
