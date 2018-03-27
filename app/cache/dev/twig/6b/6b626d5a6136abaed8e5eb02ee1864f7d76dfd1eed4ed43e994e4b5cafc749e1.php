<?php

/* PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig */
class __TwigTemplate_dc55964908c6ce23b7dc6253776508779c1abc5a7b6ff7e222a3252c52300788 extends Twig_Template
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
        $__internal_af1c7bb3956f9f13f859b6e53bc75c30e852353c8708196303d1aaaa66f47181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1c7bb3956f9f13f859b6e53bc75c30e852353c8708196303d1aaaa66f47181->enter($__internal_af1c7bb3956f9f13f859b6e53bc75c30e852353c8708196303d1aaaa66f47181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig"));

        // line 25
        echo "<div class=\"row\">
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id_customization_field", array()), 'widget');
        echo "
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
      ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", array()), 'errors');
        echo "
      ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", array()), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
      ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-1\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">&nbsp;</label>
      <a class=\"btn btn-block delete\" ><i class=\"material-icons\">delete</i></a>
    </fieldset>
  </div>
  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <div>
        <label class=\"form-control-label\">&nbsp;</label>
      </div>
      <div class=\"required-custom-field\">
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "require", array()), 'widget', array("switch" => "tiny"));
        echo "
      </div>
    </fieldset>
  </div>
</div>
";
        
        $__internal_af1c7bb3956f9f13f859b6e53bc75c30e852353c8708196303d1aaaa66f47181->leave($__internal_af1c7bb3956f9f13f859b6e53bc75c30e852353c8708196303d1aaaa66f47181_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 53,  55 => 38,  51 => 37,  47 => 36,  39 => 31,  35 => 30,  31 => 29,  25 => 26,  22 => 25,);
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
<div class=\"row\">
    {{ form_widget(form.id_customization_field) }}
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ form.label.vars.label }}</label>
      {{ form_errors(form.label) }}
      {{ form_widget(form.label) }}
    </fieldset>
  </div>
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ form.type.vars.label }}</label>
      {{ form_errors(form.type) }}
      {{ form_widget(form.type) }}
    </fieldset>
  </div>
  <div class=\"col-md-1\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">&nbsp;</label>
      <a class=\"btn btn-block delete\" ><i class=\"material-icons\">delete</i></a>
    </fieldset>
  </div>
  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <div>
        <label class=\"form-control-label\">&nbsp;</label>
      </div>
      <div class=\"required-custom-field\">
        {{ form_widget(form.require, {'switch': 'tiny'}) }}
      </div>
    </fieldset>
  </div>
</div>
", "PrestaShopBundle:Admin/Product/Include:form_custom_fields.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form_custom_fields.html.twig");
    }
}
