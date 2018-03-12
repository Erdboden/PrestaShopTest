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
        $__internal_b1f294b0397deeab85d05dba3acf0c8d9b55fa244ab784a2bc1e4089e27ed72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f294b0397deeab85d05dba3acf0c8d9b55fa244ab784a2bc1e4089e27ed72d->enter($__internal_b1f294b0397deeab85d05dba3acf0c8d9b55fa244ab784a2bc1e4089e27ed72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f294b0397deeab85d05dba3acf0c8d9b55fa244ab784a2bc1e4089e27ed72d->leave($__internal_b1f294b0397deeab85d05dba3acf0c8d9b55fa244ab784a2bc1e4089e27ed72d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fbc6a44bf165bc0ab0dd29d331726f29ea12a1d02fd59c6052ae898e074bb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbc6a44bf165bc0ab0dd29d331726f29ea12a1d02fd59c6052ae898e074bb94->enter($__internal_2fbc6a44bf165bc0ab0dd29d331726f29ea12a1d02fd59c6052ae898e074bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2fbc6a44bf165bc0ab0dd29d331726f29ea12a1d02fd59c6052ae898e074bb94->leave($__internal_2fbc6a44bf165bc0ab0dd29d331726f29ea12a1d02fd59c6052ae898e074bb94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cd669a2c1d1b6d96ea66c8f6c4886b8605e5975e969143577a13c749b13dd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd669a2c1d1b6d96ea66c8f6c4886b8605e5975e969143577a13c749b13dd70->enter($__internal_7cd669a2c1d1b6d96ea66c8f6c4886b8605e5975e969143577a13c749b13dd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cd669a2c1d1b6d96ea66c8f6c4886b8605e5975e969143577a13c749b13dd70->leave($__internal_7cd669a2c1d1b6d96ea66c8f6c4886b8605e5975e969143577a13c749b13dd70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fc2e238018c14707ac5232742197fde6e6b2ef4ff1575b4bc4389ad633cee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc2e238018c14707ac5232742197fde6e6b2ef4ff1575b4bc4389ad633cee66->enter($__internal_8fc2e238018c14707ac5232742197fde6e6b2ef4ff1575b4bc4389ad633cee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fc2e238018c14707ac5232742197fde6e6b2ef4ff1575b4bc4389ad633cee66->leave($__internal_8fc2e238018c14707ac5232742197fde6e6b2ef4ff1575b4bc4389ad633cee66_prof);

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
