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
        $__internal_d28b91fcc3158d4a11bc64fd3171bf40c8f163b9a639094ab6a7671e7f7df80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28b91fcc3158d4a11bc64fd3171bf40c8f163b9a639094ab6a7671e7f7df80f->enter($__internal_d28b91fcc3158d4a11bc64fd3171bf40c8f163b9a639094ab6a7671e7f7df80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28b91fcc3158d4a11bc64fd3171bf40c8f163b9a639094ab6a7671e7f7df80f->leave($__internal_d28b91fcc3158d4a11bc64fd3171bf40c8f163b9a639094ab6a7671e7f7df80f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_67775c959312f21421d74e28ece7f27545711a1ce08ef76918a4a786b891f693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67775c959312f21421d74e28ece7f27545711a1ce08ef76918a4a786b891f693->enter($__internal_67775c959312f21421d74e28ece7f27545711a1ce08ef76918a4a786b891f693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67775c959312f21421d74e28ece7f27545711a1ce08ef76918a4a786b891f693->leave($__internal_67775c959312f21421d74e28ece7f27545711a1ce08ef76918a4a786b891f693_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d3b0ed140848f1a6e957ae6870720d0422042c332f96282c4767d4f946f4c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3b0ed140848f1a6e957ae6870720d0422042c332f96282c4767d4f946f4c46->enter($__internal_3d3b0ed140848f1a6e957ae6870720d0422042c332f96282c4767d4f946f4c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d3b0ed140848f1a6e957ae6870720d0422042c332f96282c4767d4f946f4c46->leave($__internal_3d3b0ed140848f1a6e957ae6870720d0422042c332f96282c4767d4f946f4c46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d59545cce5cf3e310d9c464716ac78d6b3c2283a801ef3560d92d13be7f2b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d59545cce5cf3e310d9c464716ac78d6b3c2283a801ef3560d92d13be7f2b13->enter($__internal_8d59545cce5cf3e310d9c464716ac78d6b3c2283a801ef3560d92d13be7f2b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d59545cce5cf3e310d9c464716ac78d6b3c2283a801ef3560d92d13be7f2b13->leave($__internal_8d59545cce5cf3e310d9c464716ac78d6b3c2283a801ef3560d92d13be7f2b13_prof);

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
