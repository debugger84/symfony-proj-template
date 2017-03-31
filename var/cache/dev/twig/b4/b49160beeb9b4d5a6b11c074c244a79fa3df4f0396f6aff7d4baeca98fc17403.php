<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_66910d081253ca7e1c59f7842f98d059e0c58d0c8599703e0ca1cfd2aa843357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b4225733a8d4a5015c0ab9af03b49230cc64871feca5e89b071abdf872f72e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4225733a8d4a5015c0ab9af03b49230cc64871feca5e89b071abdf872f72e4f->enter($__internal_b4225733a8d4a5015c0ab9af03b49230cc64871feca5e89b071abdf872f72e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4225733a8d4a5015c0ab9af03b49230cc64871feca5e89b071abdf872f72e4f->leave($__internal_b4225733a8d4a5015c0ab9af03b49230cc64871feca5e89b071abdf872f72e4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b85c07be04b6b84ed52e77133c5f377b36806a6efe612757c451484bc8307e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b85c07be04b6b84ed52e77133c5f377b36806a6efe612757c451484bc8307e4->enter($__internal_8b85c07be04b6b84ed52e77133c5f377b36806a6efe612757c451484bc8307e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8b85c07be04b6b84ed52e77133c5f377b36806a6efe612757c451484bc8307e4->leave($__internal_8b85c07be04b6b84ed52e77133c5f377b36806a6efe612757c451484bc8307e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31cb1ffc4930af74a0c8ac63ab236df83c5f93d826a9ad791d0ab647be4594f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cb1ffc4930af74a0c8ac63ab236df83c5f93d826a9ad791d0ab647be4594f1->enter($__internal_31cb1ffc4930af74a0c8ac63ab236df83c5f93d826a9ad791d0ab647be4594f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_31cb1ffc4930af74a0c8ac63ab236df83c5f93d826a9ad791d0ab647be4594f1->leave($__internal_31cb1ffc4930af74a0c8ac63ab236df83c5f93d826a9ad791d0ab647be4594f1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20abd636dd97994abf4f1a17489841c4f6d3cb16cf16bf6c67c9a50d20c0392e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20abd636dd97994abf4f1a17489841c4f6d3cb16cf16bf6c67c9a50d20c0392e->enter($__internal_20abd636dd97994abf4f1a17489841c4f6d3cb16cf16bf6c67c9a50d20c0392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_20abd636dd97994abf4f1a17489841c4f6d3cb16cf16bf6c67c9a50d20c0392e->leave($__internal_20abd636dd97994abf4f1a17489841c4f6d3cb16cf16bf6c67c9a50d20c0392e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
