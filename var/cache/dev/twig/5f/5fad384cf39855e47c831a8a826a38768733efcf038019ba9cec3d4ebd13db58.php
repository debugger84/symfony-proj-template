<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_a6e10faa4fb34c43a1bd85c95f3c0dca4ece15305096788fb731334a47fca912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_bc8e857dd0bb0a2854fa6595c9169843c4ea2d9788ee0341850379c22c1f92af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e857dd0bb0a2854fa6595c9169843c4ea2d9788ee0341850379c22c1f92af->enter($__internal_bc8e857dd0bb0a2854fa6595c9169843c4ea2d9788ee0341850379c22c1f92af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8e857dd0bb0a2854fa6595c9169843c4ea2d9788ee0341850379c22c1f92af->leave($__internal_bc8e857dd0bb0a2854fa6595c9169843c4ea2d9788ee0341850379c22c1f92af_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_4dd72bbb909f87b317c653878ad07e87b7a14d165a6160fb9d79f6120ba23470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd72bbb909f87b317c653878ad07e87b7a14d165a6160fb9d79f6120ba23470->enter($__internal_4dd72bbb909f87b317c653878ad07e87b7a14d165a6160fb9d79f6120ba23470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_4dd72bbb909f87b317c653878ad07e87b7a14d165a6160fb9d79f6120ba23470->leave($__internal_4dd72bbb909f87b317c653878ad07e87b7a14d165a6160fb9d79f6120ba23470_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
