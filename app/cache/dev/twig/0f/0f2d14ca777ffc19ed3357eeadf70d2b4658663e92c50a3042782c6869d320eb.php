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
        $__internal_35ed2b31d88a2d097f1e521712cf3c8e3cafdb2f5593b73617060fbe47fc49ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ed2b31d88a2d097f1e521712cf3c8e3cafdb2f5593b73617060fbe47fc49ac->enter($__internal_35ed2b31d88a2d097f1e521712cf3c8e3cafdb2f5593b73617060fbe47fc49ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ed2b31d88a2d097f1e521712cf3c8e3cafdb2f5593b73617060fbe47fc49ac->leave($__internal_35ed2b31d88a2d097f1e521712cf3c8e3cafdb2f5593b73617060fbe47fc49ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e26280a30e94a284c8a3e6fa8d0bd947db7442c6ed667bacabba6b382fa7327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e26280a30e94a284c8a3e6fa8d0bd947db7442c6ed667bacabba6b382fa7327->enter($__internal_5e26280a30e94a284c8a3e6fa8d0bd947db7442c6ed667bacabba6b382fa7327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e26280a30e94a284c8a3e6fa8d0bd947db7442c6ed667bacabba6b382fa7327->leave($__internal_5e26280a30e94a284c8a3e6fa8d0bd947db7442c6ed667bacabba6b382fa7327_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca3cbc5805e58e86e70a258204336d6359585d573a78b9245172abd6fd2c3636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3cbc5805e58e86e70a258204336d6359585d573a78b9245172abd6fd2c3636->enter($__internal_ca3cbc5805e58e86e70a258204336d6359585d573a78b9245172abd6fd2c3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ca3cbc5805e58e86e70a258204336d6359585d573a78b9245172abd6fd2c3636->leave($__internal_ca3cbc5805e58e86e70a258204336d6359585d573a78b9245172abd6fd2c3636_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c914edcb4ea9baa34e5113fac503ed15479b3c36cd4ec8f661bc37f912dc3fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914edcb4ea9baa34e5113fac503ed15479b3c36cd4ec8f661bc37f912dc3fee->enter($__internal_c914edcb4ea9baa34e5113fac503ed15479b3c36cd4ec8f661bc37f912dc3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c914edcb4ea9baa34e5113fac503ed15479b3c36cd4ec8f661bc37f912dc3fee->leave($__internal_c914edcb4ea9baa34e5113fac503ed15479b3c36cd4ec8f661bc37f912dc3fee_prof);

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
