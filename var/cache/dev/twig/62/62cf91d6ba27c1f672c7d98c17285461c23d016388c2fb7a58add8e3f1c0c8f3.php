<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_3384d1b30ecd37dd56f0facc5de25fdc356267eb357c4229848120f790cd782f extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73a28a02bfeba5877203a681b2a73dc676ca54bccf3430eddfa451ea64ad0b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a28a02bfeba5877203a681b2a73dc676ca54bccf3430eddfa451ea64ad0b19->enter($__internal_73a28a02bfeba5877203a681b2a73dc676ca54bccf3430eddfa451ea64ad0b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a28a02bfeba5877203a681b2a73dc676ca54bccf3430eddfa451ea64ad0b19->leave($__internal_73a28a02bfeba5877203a681b2a73dc676ca54bccf3430eddfa451ea64ad0b19_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_925c5c031c34b5fee1d8a83428295dcc59848a9aa845f8ae626409d5ff9fcc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925c5c031c34b5fee1d8a83428295dcc59848a9aa845f8ae626409d5ff9fcc57->enter($__internal_925c5c031c34b5fee1d8a83428295dcc59848a9aa845f8ae626409d5ff9fcc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_925c5c031c34b5fee1d8a83428295dcc59848a9aa845f8ae626409d5ff9fcc57->leave($__internal_925c5c031c34b5fee1d8a83428295dcc59848a9aa845f8ae626409d5ff9fcc57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
