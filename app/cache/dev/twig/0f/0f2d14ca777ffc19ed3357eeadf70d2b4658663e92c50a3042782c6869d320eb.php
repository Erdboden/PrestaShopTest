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
        $__internal_399ba98f49ff14104140fd27e3ec6b861d9aec70347b4ae77d15641773329a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399ba98f49ff14104140fd27e3ec6b861d9aec70347b4ae77d15641773329a98->enter($__internal_399ba98f49ff14104140fd27e3ec6b861d9aec70347b4ae77d15641773329a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399ba98f49ff14104140fd27e3ec6b861d9aec70347b4ae77d15641773329a98->leave($__internal_399ba98f49ff14104140fd27e3ec6b861d9aec70347b4ae77d15641773329a98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a83b3727216ad10a56b5ff00ae62ca57e2b0a063c04fc2b4f5965f08b0c282b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83b3727216ad10a56b5ff00ae62ca57e2b0a063c04fc2b4f5965f08b0c282b9->enter($__internal_a83b3727216ad10a56b5ff00ae62ca57e2b0a063c04fc2b4f5965f08b0c282b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a83b3727216ad10a56b5ff00ae62ca57e2b0a063c04fc2b4f5965f08b0c282b9->leave($__internal_a83b3727216ad10a56b5ff00ae62ca57e2b0a063c04fc2b4f5965f08b0c282b9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2380e4fbd659a6474100ab17acd36e14cb373a8a666983a358f27c8e26f89a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2380e4fbd659a6474100ab17acd36e14cb373a8a666983a358f27c8e26f89a8d->enter($__internal_2380e4fbd659a6474100ab17acd36e14cb373a8a666983a358f27c8e26f89a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2380e4fbd659a6474100ab17acd36e14cb373a8a666983a358f27c8e26f89a8d->leave($__internal_2380e4fbd659a6474100ab17acd36e14cb373a8a666983a358f27c8e26f89a8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8e7144272e7c2d6e814116c8203e25a68313bc49a1daba4ee5c443b550d609d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e7144272e7c2d6e814116c8203e25a68313bc49a1daba4ee5c443b550d609d->enter($__internal_d8e7144272e7c2d6e814116c8203e25a68313bc49a1daba4ee5c443b550d609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8e7144272e7c2d6e814116c8203e25a68313bc49a1daba4ee5c443b550d609d->leave($__internal_d8e7144272e7c2d6e814116c8203e25a68313bc49a1daba4ee5c443b550d609d_prof);

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
