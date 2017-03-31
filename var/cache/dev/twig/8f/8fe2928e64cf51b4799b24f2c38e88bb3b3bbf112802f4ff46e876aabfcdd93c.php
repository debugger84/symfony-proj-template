<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2efe9bf11e20a6643febd76565f608cf3ebbe194861ae08d9cf89d19a450ff23 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4be56f3da8da488b8b18d5f58c237f676b10eb5f206959140e9127e03fdfd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4be56f3da8da488b8b18d5f58c237f676b10eb5f206959140e9127e03fdfd07->enter($__internal_c4be56f3da8da488b8b18d5f58c237f676b10eb5f206959140e9127e03fdfd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4be56f3da8da488b8b18d5f58c237f676b10eb5f206959140e9127e03fdfd07->leave($__internal_c4be56f3da8da488b8b18d5f58c237f676b10eb5f206959140e9127e03fdfd07_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a5dfaba1dacbf337574abba3309e00fa07ab6b89ea2d55c1fe403de91042bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dfaba1dacbf337574abba3309e00fa07ab6b89ea2d55c1fe403de91042bbc0->enter($__internal_a5dfaba1dacbf337574abba3309e00fa07ab6b89ea2d55c1fe403de91042bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a5dfaba1dacbf337574abba3309e00fa07ab6b89ea2d55c1fe403de91042bbc0->leave($__internal_a5dfaba1dacbf337574abba3309e00fa07ab6b89ea2d55c1fe403de91042bbc0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
