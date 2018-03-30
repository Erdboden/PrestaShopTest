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
        $__internal_f4c7eb738d5153cde60d3610cc6eea55974594c31ea8b61dfcb0f01823960d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c7eb738d5153cde60d3610cc6eea55974594c31ea8b61dfcb0f01823960d54->enter($__internal_f4c7eb738d5153cde60d3610cc6eea55974594c31ea8b61dfcb0f01823960d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c7eb738d5153cde60d3610cc6eea55974594c31ea8b61dfcb0f01823960d54->leave($__internal_f4c7eb738d5153cde60d3610cc6eea55974594c31ea8b61dfcb0f01823960d54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb8f14da8d8fd519d69bf227006e23eb05e1ba5e21c692055dc282b4c2ee95f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8f14da8d8fd519d69bf227006e23eb05e1ba5e21c692055dc282b4c2ee95f9->enter($__internal_fb8f14da8d8fd519d69bf227006e23eb05e1ba5e21c692055dc282b4c2ee95f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb8f14da8d8fd519d69bf227006e23eb05e1ba5e21c692055dc282b4c2ee95f9->leave($__internal_fb8f14da8d8fd519d69bf227006e23eb05e1ba5e21c692055dc282b4c2ee95f9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce5749669a76db00bb49d170d1b2a032c761884f410ebc8f748846eca8e1d540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5749669a76db00bb49d170d1b2a032c761884f410ebc8f748846eca8e1d540->enter($__internal_ce5749669a76db00bb49d170d1b2a032c761884f410ebc8f748846eca8e1d540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce5749669a76db00bb49d170d1b2a032c761884f410ebc8f748846eca8e1d540->leave($__internal_ce5749669a76db00bb49d170d1b2a032c761884f410ebc8f748846eca8e1d540_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_215e1b94abc56f3f4b7a79fdde9ec1e778a5ef7af821edea624925a5406e51db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215e1b94abc56f3f4b7a79fdde9ec1e778a5ef7af821edea624925a5406e51db->enter($__internal_215e1b94abc56f3f4b7a79fdde9ec1e778a5ef7af821edea624925a5406e51db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_215e1b94abc56f3f4b7a79fdde9ec1e778a5ef7af821edea624925a5406e51db->leave($__internal_215e1b94abc56f3f4b7a79fdde9ec1e778a5ef7af821edea624925a5406e51db_prof);

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
