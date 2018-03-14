<?php

/* PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig */
class __TwigTemplate_72e1c413b6d00e69d6187ded90f02aa5dc48a747b0f73cd8858fcbe77c7d59f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2670fc15773d6678f50a1aa4f598d954c4e8b86d34a3c461b7b5a759010a19de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2670fc15773d6678f50a1aa4f598d954c4e8b86d34a3c461b7b5a759010a19de->enter($__internal_2670fc15773d6678f50a1aa4f598d954c4e8b86d34a3c461b7b5a759010a19de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig"));

        // line 1
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        
        $__internal_2670fc15773d6678f50a1aa4f598d954c4e8b86d34a3c461b7b5a759010a19de->leave($__internal_2670fc15773d6678f50a1aa4f598d954c4e8b86d34a3c461b7b5a759010a19de_prof);

    }

    // line 1
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_1704b90acf8105ef2e32c2ba728aac01873eabb41942d281880ce4a178a46feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1704b90acf8105ef2e32c2ba728aac01873eabb41942d281880ce4a178a46feb->enter($__internal_1704b90acf8105ef2e32c2ba728aac01873eabb41942d281880ce4a178a46feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 2
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <ul class=\"category-tree\">";
        // line 4
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
            // line 5
            echo "        ";
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
        // line 7
        echo "</ul>
  </div>";
        
        $__internal_1704b90acf8105ef2e32c2ba728aac01873eabb41942d281880ce4a178a46feb->leave($__internal_1704b90acf8105ef2e32c2ba728aac01873eabb41942d281880ce4a178a46feb_prof);

    }

    // line 11
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_44d0e1d6094ec21dc9e8ae375067d3fc387c36e8a6aebea0821f3f367df5295c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d0e1d6094ec21dc9e8ae375067d3fc387c36e8a6aebea0821f3f367df5295c->enter($__internal_44d0e1d6094ec21dc9e8ae375067d3fc387c36e8a6aebea0821f3f367df5295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 12
        echo "<li>
    ";
        // line 13
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 14
        echo "
    <div class=\"radio\">
      <label class=\"category-label\" for=\"form[";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
        echo "
        <input
          type=\"radio\"
          name=\"form[";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
          value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo "
          class=\"category float-right\"
        >
      </label>
    </div>

    ";
        // line 26
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 27
            echo "      <ul>
        ";
            // line 28
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
                // line 29
                echo "          ";
                $context["child"] = $context["item"];
                // line 30
                echo "          ";
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
            // line 32
            echo "</ul>
    ";
        }
        // line 34
        echo "  </li>";
        
        $__internal_44d0e1d6094ec21dc9e8ae375067d3fc387c36e8a6aebea0821f3f367df5295c->leave($__internal_44d0e1d6094ec21dc9e8ae375067d3fc387c36e8a6aebea0821f3f367df5295c_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 34,  169 => 32,  152 => 30,  149 => 29,  132 => 28,  129 => 27,  127 => 26,  116 => 20,  112 => 19,  104 => 16,  100 => 14,  98 => 13,  95 => 12,  89 => 11,  81 => 7,  64 => 5,  47 => 4,  42 => 2,  36 => 1,  29 => 11,  26 => 10,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block choice_tree_widget -%}
  <div {{ block('widget_container_attributes') }}>
    <ul class=\"category-tree\">
      {%- for child in choices %}
        {{ block('choice_tree_item_widget') }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li>
    {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

    <div class=\"radio\">
      <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
        <input
          type=\"radio\"
          name=\"form[{{ form.vars.id }}][tree]\"
          value=\"{{ child.id_category }}\" {{ checked }}
          class=\"category float-right\"
        >
      </label>
    </div>

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
", "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/Include/categories_theme.html.twig");
    }
}
