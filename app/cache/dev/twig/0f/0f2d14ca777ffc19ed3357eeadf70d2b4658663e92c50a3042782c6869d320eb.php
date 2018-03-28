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
        $__internal_75984fcf6dea373c45d178ee16ac4514c64288d1dc6ada0b61a0f187a9f793d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75984fcf6dea373c45d178ee16ac4514c64288d1dc6ada0b61a0f187a9f793d2->enter($__internal_75984fcf6dea373c45d178ee16ac4514c64288d1dc6ada0b61a0f187a9f793d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75984fcf6dea373c45d178ee16ac4514c64288d1dc6ada0b61a0f187a9f793d2->leave($__internal_75984fcf6dea373c45d178ee16ac4514c64288d1dc6ada0b61a0f187a9f793d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d7ef1236112f8321327016eeb078c5aab5233766076de1cffdcf607945d136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7ef1236112f8321327016eeb078c5aab5233766076de1cffdcf607945d136e->enter($__internal_3d7ef1236112f8321327016eeb078c5aab5233766076de1cffdcf607945d136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3d7ef1236112f8321327016eeb078c5aab5233766076de1cffdcf607945d136e->leave($__internal_3d7ef1236112f8321327016eeb078c5aab5233766076de1cffdcf607945d136e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45eeff935a7cbd09f36a842f321fdf22e6a513cd0caa7a1e4dd4db8bdd75b2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eeff935a7cbd09f36a842f321fdf22e6a513cd0caa7a1e4dd4db8bdd75b2ce->enter($__internal_45eeff935a7cbd09f36a842f321fdf22e6a513cd0caa7a1e4dd4db8bdd75b2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_45eeff935a7cbd09f36a842f321fdf22e6a513cd0caa7a1e4dd4db8bdd75b2ce->leave($__internal_45eeff935a7cbd09f36a842f321fdf22e6a513cd0caa7a1e4dd4db8bdd75b2ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf686454560034584dd428a26abca0aa25e1999e3a73ff3ed9648aecc50419fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf686454560034584dd428a26abca0aa25e1999e3a73ff3ed9648aecc50419fd->enter($__internal_bf686454560034584dd428a26abca0aa25e1999e3a73ff3ed9648aecc50419fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf686454560034584dd428a26abca0aa25e1999e3a73ff3ed9648aecc50419fd->leave($__internal_bf686454560034584dd428a26abca0aa25e1999e3a73ff3ed9648aecc50419fd_prof);

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
