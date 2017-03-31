<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_2ceaaac7186c9ec25ef92d496dc2bcd3a460c05e62a1682cd782cd9425918d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1468a644077d14b87cdd58d6014d3eb25a56952833fc233e9e0e38d1c9a96ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1468a644077d14b87cdd58d6014d3eb25a56952833fc233e9e0e38d1c9a96ca5->enter($__internal_1468a644077d14b87cdd58d6014d3eb25a56952833fc233e9e0e38d1c9a96ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1468a644077d14b87cdd58d6014d3eb25a56952833fc233e9e0e38d1c9a96ca5->leave($__internal_1468a644077d14b87cdd58d6014d3eb25a56952833fc233e9e0e38d1c9a96ca5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_354b9d1f77d890b492b3b8471e968b0287ab59b972c7b75a2ce9c026aa158d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354b9d1f77d890b492b3b8471e968b0287ab59b972c7b75a2ce9c026aa158d72->enter($__internal_354b9d1f77d890b492b3b8471e968b0287ab59b972c7b75a2ce9c026aa158d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_354b9d1f77d890b492b3b8471e968b0287ab59b972c7b75a2ce9c026aa158d72->leave($__internal_354b9d1f77d890b492b3b8471e968b0287ab59b972c7b75a2ce9c026aa158d72_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
