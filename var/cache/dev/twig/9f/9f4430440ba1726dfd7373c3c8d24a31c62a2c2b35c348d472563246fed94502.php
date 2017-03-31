<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_34774f427d086632c236da005c849d2cf4d05ada4c4518fc3fa6a633b4378861 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df026152ba2536d6736cfcfb62f59a7e4029f86340a8e4da8cc53f7d6dadae9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df026152ba2536d6736cfcfb62f59a7e4029f86340a8e4da8cc53f7d6dadae9b->enter($__internal_df026152ba2536d6736cfcfb62f59a7e4029f86340a8e4da8cc53f7d6dadae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df026152ba2536d6736cfcfb62f59a7e4029f86340a8e4da8cc53f7d6dadae9b->leave($__internal_df026152ba2536d6736cfcfb62f59a7e4029f86340a8e4da8cc53f7d6dadae9b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d70a6b162b4330e8348318a430c48ab13167145e63f02b4b042b398e3a0d1cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d70a6b162b4330e8348318a430c48ab13167145e63f02b4b042b398e3a0d1cd->enter($__internal_4d70a6b162b4330e8348318a430c48ab13167145e63f02b4b042b398e3a0d1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4d70a6b162b4330e8348318a430c48ab13167145e63f02b4b042b398e3a0d1cd->leave($__internal_4d70a6b162b4330e8348318a430c48ab13167145e63f02b4b042b398e3a0d1cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
