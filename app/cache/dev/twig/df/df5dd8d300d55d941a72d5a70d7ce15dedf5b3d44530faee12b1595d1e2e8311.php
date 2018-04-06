<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cffc10409ecec9b7a7456b91dfdb0d936f338c0bf791baf03ff7ebbf5fce903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f204b849fe43efd6f1dd25137d5239075c011947dd282b0aa835c60725fa250b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f204b849fe43efd6f1dd25137d5239075c011947dd282b0aa835c60725fa250b->enter($__internal_f204b849fe43efd6f1dd25137d5239075c011947dd282b0aa835c60725fa250b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f204b849fe43efd6f1dd25137d5239075c011947dd282b0aa835c60725fa250b->leave($__internal_f204b849fe43efd6f1dd25137d5239075c011947dd282b0aa835c60725fa250b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_501e62f1b8ecbe265ca77abf0e98cbb04ad80e91280980e4fcc7bfcc57810871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501e62f1b8ecbe265ca77abf0e98cbb04ad80e91280980e4fcc7bfcc57810871->enter($__internal_501e62f1b8ecbe265ca77abf0e98cbb04ad80e91280980e4fcc7bfcc57810871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_501e62f1b8ecbe265ca77abf0e98cbb04ad80e91280980e4fcc7bfcc57810871->leave($__internal_501e62f1b8ecbe265ca77abf0e98cbb04ad80e91280980e4fcc7bfcc57810871_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19f6b8e6d01ba7537e21351adf7dc9626a598a8ab50fc2995379e8e17c51ddf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f6b8e6d01ba7537e21351adf7dc9626a598a8ab50fc2995379e8e17c51ddf5->enter($__internal_19f6b8e6d01ba7537e21351adf7dc9626a598a8ab50fc2995379e8e17c51ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_19f6b8e6d01ba7537e21351adf7dc9626a598a8ab50fc2995379e8e17c51ddf5->leave($__internal_19f6b8e6d01ba7537e21351adf7dc9626a598a8ab50fc2995379e8e17c51ddf5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c686f24f9b920539dad41dfea9c3f7a4d0c060d873fe2920571832cddf8b614a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c686f24f9b920539dad41dfea9c3f7a4d0c060d873fe2920571832cddf8b614a->enter($__internal_c686f24f9b920539dad41dfea9c3f7a4d0c060d873fe2920571832cddf8b614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c686f24f9b920539dad41dfea9c3f7a4d0c060d873fe2920571832cddf8b614a->leave($__internal_c686f24f9b920539dad41dfea9c3f7a4d0c060d873fe2920571832cddf8b614a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
