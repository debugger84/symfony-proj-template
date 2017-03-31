<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_958406c25262cdd6f7a57b6ee0bdec188f65a091ce2cde0e29bd1ab44013a514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_464977c4d15909debb0acc7cda6ef0f45318da4d3f906d4090b24dfc937e2a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464977c4d15909debb0acc7cda6ef0f45318da4d3f906d4090b24dfc937e2a13->enter($__internal_464977c4d15909debb0acc7cda6ef0f45318da4d3f906d4090b24dfc937e2a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464977c4d15909debb0acc7cda6ef0f45318da4d3f906d4090b24dfc937e2a13->leave($__internal_464977c4d15909debb0acc7cda6ef0f45318da4d3f906d4090b24dfc937e2a13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a542295919acc055faad28449b91f7999ed86eef0a6dd6298bd8b9d72bae4bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a542295919acc055faad28449b91f7999ed86eef0a6dd6298bd8b9d72bae4bb0->enter($__internal_a542295919acc055faad28449b91f7999ed86eef0a6dd6298bd8b9d72bae4bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a542295919acc055faad28449b91f7999ed86eef0a6dd6298bd8b9d72bae4bb0->leave($__internal_a542295919acc055faad28449b91f7999ed86eef0a6dd6298bd8b9d72bae4bb0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d61fcba400a66217f94f36237407e5367011fd15c06a16513ce3bfbfab35cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d61fcba400a66217f94f36237407e5367011fd15c06a16513ce3bfbfab35cbd->enter($__internal_4d61fcba400a66217f94f36237407e5367011fd15c06a16513ce3bfbfab35cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d61fcba400a66217f94f36237407e5367011fd15c06a16513ce3bfbfab35cbd->leave($__internal_4d61fcba400a66217f94f36237407e5367011fd15c06a16513ce3bfbfab35cbd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5b63a5bd700f7c70d718f55c42d9dc38963966f44fafea42b83cd7ca28a7b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b63a5bd700f7c70d718f55c42d9dc38963966f44fafea42b83cd7ca28a7b9e->enter($__internal_d5b63a5bd700f7c70d718f55c42d9dc38963966f44fafea42b83cd7ca28a7b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5b63a5bd700f7c70d718f55c42d9dc38963966f44fafea42b83cd7ca28a7b9e->leave($__internal_d5b63a5bd700f7c70d718f55c42d9dc38963966f44fafea42b83cd7ca28a7b9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
