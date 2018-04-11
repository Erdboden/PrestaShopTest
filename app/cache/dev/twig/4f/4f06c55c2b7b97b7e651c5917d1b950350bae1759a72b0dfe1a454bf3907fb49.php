<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_74aebd75809bd09f32a61462e10359d841f20e1522b27404677c06efc9e0c943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95922622787ed868df0428e47a13b47ca5eff27ae6b2ae7323a36c27c0fc5f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95922622787ed868df0428e47a13b47ca5eff27ae6b2ae7323a36c27c0fc5f1e->enter($__internal_95922622787ed868df0428e47a13b47ca5eff27ae6b2ae7323a36c27c0fc5f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95922622787ed868df0428e47a13b47ca5eff27ae6b2ae7323a36c27c0fc5f1e->leave($__internal_95922622787ed868df0428e47a13b47ca5eff27ae6b2ae7323a36c27c0fc5f1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_61834d9ed0dc8d4ac7226b194f5b1a486ad7a073e56dbeef9002ac9c25c7ad2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61834d9ed0dc8d4ac7226b194f5b1a486ad7a073e56dbeef9002ac9c25c7ad2e->enter($__internal_61834d9ed0dc8d4ac7226b194f5b1a486ad7a073e56dbeef9002ac9c25c7ad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_61834d9ed0dc8d4ac7226b194f5b1a486ad7a073e56dbeef9002ac9c25c7ad2e->leave($__internal_61834d9ed0dc8d4ac7226b194f5b1a486ad7a073e56dbeef9002ac9c25c7ad2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fb0f31a2aea827bd3bd64b96d2ef67894b957cd63bdd734624fd3bdf86d96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fb0f31a2aea827bd3bd64b96d2ef67894b957cd63bdd734624fd3bdf86d96b->enter($__internal_48fb0f31a2aea827bd3bd64b96d2ef67894b957cd63bdd734624fd3bdf86d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48fb0f31a2aea827bd3bd64b96d2ef67894b957cd63bdd734624fd3bdf86d96b->leave($__internal_48fb0f31a2aea827bd3bd64b96d2ef67894b957cd63bdd734624fd3bdf86d96b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_af6e3c737a8240842f1b75d4bb7cdee5fa17f9e71e18a09e10666a833b6dc985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6e3c737a8240842f1b75d4bb7cdee5fa17f9e71e18a09e10666a833b6dc985->enter($__internal_af6e3c737a8240842f1b75d4bb7cdee5fa17f9e71e18a09e10666a833b6dc985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_af6e3c737a8240842f1b75d4bb7cdee5fa17f9e71e18a09e10666a833b6dc985->leave($__internal_af6e3c737a8240842f1b75d4bb7cdee5fa17f9e71e18a09e10666a833b6dc985_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
