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
        $__internal_88b507d8a707c34dc9a2681fc04f2adca36956b1a796a548860b05fba72d95a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b507d8a707c34dc9a2681fc04f2adca36956b1a796a548860b05fba72d95a3->enter($__internal_88b507d8a707c34dc9a2681fc04f2adca36956b1a796a548860b05fba72d95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b507d8a707c34dc9a2681fc04f2adca36956b1a796a548860b05fba72d95a3->leave($__internal_88b507d8a707c34dc9a2681fc04f2adca36956b1a796a548860b05fba72d95a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79aeed2bd79ca19117793bb4bf524a41a324476874daeae46c88395dbe2c1e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aeed2bd79ca19117793bb4bf524a41a324476874daeae46c88395dbe2c1e62->enter($__internal_79aeed2bd79ca19117793bb4bf524a41a324476874daeae46c88395dbe2c1e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79aeed2bd79ca19117793bb4bf524a41a324476874daeae46c88395dbe2c1e62->leave($__internal_79aeed2bd79ca19117793bb4bf524a41a324476874daeae46c88395dbe2c1e62_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32ea062dd4fe5cd152643af76a42be94c9b8f0c736c5b77e8f6c6f19aa6332c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ea062dd4fe5cd152643af76a42be94c9b8f0c736c5b77e8f6c6f19aa6332c2->enter($__internal_32ea062dd4fe5cd152643af76a42be94c9b8f0c736c5b77e8f6c6f19aa6332c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32ea062dd4fe5cd152643af76a42be94c9b8f0c736c5b77e8f6c6f19aa6332c2->leave($__internal_32ea062dd4fe5cd152643af76a42be94c9b8f0c736c5b77e8f6c6f19aa6332c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_643cad4bfd9910e0000617e65566ec83d87d9de0e1bf79e7a3277922282ac680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643cad4bfd9910e0000617e65566ec83d87d9de0e1bf79e7a3277922282ac680->enter($__internal_643cad4bfd9910e0000617e65566ec83d87d9de0e1bf79e7a3277922282ac680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_643cad4bfd9910e0000617e65566ec83d87d9de0e1bf79e7a3277922282ac680->leave($__internal_643cad4bfd9910e0000617e65566ec83d87d9de0e1bf79e7a3277922282ac680_prof);

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
