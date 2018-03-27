<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2761fad7fabaa6fe85493074df7ca9819ff7de3306c59a016d0cc1e6988f942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3b1f911e4f1e96399adc94ba27b3deae9417fc3daba977b7980913476a6c33e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1f911e4f1e96399adc94ba27b3deae9417fc3daba977b7980913476a6c33e4->enter($__internal_3b1f911e4f1e96399adc94ba27b3deae9417fc3daba977b7980913476a6c33e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1f911e4f1e96399adc94ba27b3deae9417fc3daba977b7980913476a6c33e4->leave($__internal_3b1f911e4f1e96399adc94ba27b3deae9417fc3daba977b7980913476a6c33e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b19b9e8d62c0e8d44e35af2b16d64f55affb48f67a7d2123b1db22da94e8c3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19b9e8d62c0e8d44e35af2b16d64f55affb48f67a7d2123b1db22da94e8c3e4->enter($__internal_b19b9e8d62c0e8d44e35af2b16d64f55affb48f67a7d2123b1db22da94e8c3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b19b9e8d62c0e8d44e35af2b16d64f55affb48f67a7d2123b1db22da94e8c3e4->leave($__internal_b19b9e8d62c0e8d44e35af2b16d64f55affb48f67a7d2123b1db22da94e8c3e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5905b38d9c55e17661b714a9c0fe507953e6e00a2c166ae6b3e62b50d03eed33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5905b38d9c55e17661b714a9c0fe507953e6e00a2c166ae6b3e62b50d03eed33->enter($__internal_5905b38d9c55e17661b714a9c0fe507953e6e00a2c166ae6b3e62b50d03eed33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5905b38d9c55e17661b714a9c0fe507953e6e00a2c166ae6b3e62b50d03eed33->leave($__internal_5905b38d9c55e17661b714a9c0fe507953e6e00a2c166ae6b3e62b50d03eed33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5101d33dd006eda6604a8a9f020577b43b80da00e875708b7547937a18384c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5101d33dd006eda6604a8a9f020577b43b80da00e875708b7547937a18384c98->enter($__internal_5101d33dd006eda6604a8a9f020577b43b80da00e875708b7547937a18384c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5101d33dd006eda6604a8a9f020577b43b80da00e875708b7547937a18384c98->leave($__internal_5101d33dd006eda6604a8a9f020577b43b80da00e875708b7547937a18384c98_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
