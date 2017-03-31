<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_5e3337e2d9c72c14303e20e5809f34bd149f74f28af67cd11b9bad035c52903f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9fca3907d2147ce2a0a70f2ca174cf030cb22f1b4045574c5f96356fd052f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fca3907d2147ce2a0a70f2ca174cf030cb22f1b4045574c5f96356fd052f0b->enter($__internal_b9fca3907d2147ce2a0a70f2ca174cf030cb22f1b4045574c5f96356fd052f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fca3907d2147ce2a0a70f2ca174cf030cb22f1b4045574c5f96356fd052f0b->leave($__internal_b9fca3907d2147ce2a0a70f2ca174cf030cb22f1b4045574c5f96356fd052f0b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5699bcfde45df002d3b21d396349bce2cb69d2d265598482f8bd71e6b50fcd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5699bcfde45df002d3b21d396349bce2cb69d2d265598482f8bd71e6b50fcd18->enter($__internal_5699bcfde45df002d3b21d396349bce2cb69d2d265598482f8bd71e6b50fcd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_5699bcfde45df002d3b21d396349bce2cb69d2d265598482f8bd71e6b50fcd18->leave($__internal_5699bcfde45df002d3b21d396349bce2cb69d2d265598482f8bd71e6b50fcd18_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
