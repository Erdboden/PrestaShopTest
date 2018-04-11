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
        $__internal_acc31b2537c99e67f448b317584c5047e59fbd9b9c7319e24f68d7e05ba1e18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc31b2537c99e67f448b317584c5047e59fbd9b9c7319e24f68d7e05ba1e18e->enter($__internal_acc31b2537c99e67f448b317584c5047e59fbd9b9c7319e24f68d7e05ba1e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc31b2537c99e67f448b317584c5047e59fbd9b9c7319e24f68d7e05ba1e18e->leave($__internal_acc31b2537c99e67f448b317584c5047e59fbd9b9c7319e24f68d7e05ba1e18e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab64aad269ada73e8c9467b52b52b18d84c52612662f4fcbe04539eabb5c27ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab64aad269ada73e8c9467b52b52b18d84c52612662f4fcbe04539eabb5c27ba->enter($__internal_ab64aad269ada73e8c9467b52b52b18d84c52612662f4fcbe04539eabb5c27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab64aad269ada73e8c9467b52b52b18d84c52612662f4fcbe04539eabb5c27ba->leave($__internal_ab64aad269ada73e8c9467b52b52b18d84c52612662f4fcbe04539eabb5c27ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfeeaace57d34330c2f3220e24a53da128773fb66c290514d834fcf16e5e8dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfeeaace57d34330c2f3220e24a53da128773fb66c290514d834fcf16e5e8dba->enter($__internal_bfeeaace57d34330c2f3220e24a53da128773fb66c290514d834fcf16e5e8dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bfeeaace57d34330c2f3220e24a53da128773fb66c290514d834fcf16e5e8dba->leave($__internal_bfeeaace57d34330c2f3220e24a53da128773fb66c290514d834fcf16e5e8dba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_042f312a0bf4d66452ac2d53624ec61812afde98fb6919af456b14c4fce275ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042f312a0bf4d66452ac2d53624ec61812afde98fb6919af456b14c4fce275ef->enter($__internal_042f312a0bf4d66452ac2d53624ec61812afde98fb6919af456b14c4fce275ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_042f312a0bf4d66452ac2d53624ec61812afde98fb6919af456b14c4fce275ef->leave($__internal_042f312a0bf4d66452ac2d53624ec61812afde98fb6919af456b14c4fce275ef_prof);

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
