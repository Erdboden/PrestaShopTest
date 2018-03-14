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
        $__internal_ef16ab897a4a677f15c5973df5de65eefa033b864958df92843f23624528dcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef16ab897a4a677f15c5973df5de65eefa033b864958df92843f23624528dcd8->enter($__internal_ef16ab897a4a677f15c5973df5de65eefa033b864958df92843f23624528dcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef16ab897a4a677f15c5973df5de65eefa033b864958df92843f23624528dcd8->leave($__internal_ef16ab897a4a677f15c5973df5de65eefa033b864958df92843f23624528dcd8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c3d29507cfbfd9057ca0d205d7f850498879f9a63cb98313ccba36191227864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3d29507cfbfd9057ca0d205d7f850498879f9a63cb98313ccba36191227864->enter($__internal_5c3d29507cfbfd9057ca0d205d7f850498879f9a63cb98313ccba36191227864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c3d29507cfbfd9057ca0d205d7f850498879f9a63cb98313ccba36191227864->leave($__internal_5c3d29507cfbfd9057ca0d205d7f850498879f9a63cb98313ccba36191227864_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ae41109563623eecb24473c4848a705c5aaeb33b647b941d13042c375e87d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae41109563623eecb24473c4848a705c5aaeb33b647b941d13042c375e87d8b->enter($__internal_7ae41109563623eecb24473c4848a705c5aaeb33b647b941d13042c375e87d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ae41109563623eecb24473c4848a705c5aaeb33b647b941d13042c375e87d8b->leave($__internal_7ae41109563623eecb24473c4848a705c5aaeb33b647b941d13042c375e87d8b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad9636b74295465a1f8dfa6ac36c36bbca0c1e8784a0e67630629eb3450077f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9636b74295465a1f8dfa6ac36c36bbca0c1e8784a0e67630629eb3450077f7->enter($__internal_ad9636b74295465a1f8dfa6ac36c36bbca0c1e8784a0e67630629eb3450077f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad9636b74295465a1f8dfa6ac36c36bbca0c1e8784a0e67630629eb3450077f7->leave($__internal_ad9636b74295465a1f8dfa6ac36c36bbca0c1e8784a0e67630629eb3450077f7_prof);

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
