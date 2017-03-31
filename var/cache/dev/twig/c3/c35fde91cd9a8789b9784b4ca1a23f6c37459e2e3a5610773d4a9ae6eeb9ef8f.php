<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_382ffecce846b1ca2ef8a17f5df6ea7a8c4666beb2290d48940449aefc5445e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444d51892d499ff5c03c1c32259b0e811fb1dd6e2b4a16327969b9d25b79850e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444d51892d499ff5c03c1c32259b0e811fb1dd6e2b4a16327969b9d25b79850e->enter($__internal_444d51892d499ff5c03c1c32259b0e811fb1dd6e2b4a16327969b9d25b79850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444d51892d499ff5c03c1c32259b0e811fb1dd6e2b4a16327969b9d25b79850e->leave($__internal_444d51892d499ff5c03c1c32259b0e811fb1dd6e2b4a16327969b9d25b79850e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df2dd0ad8475aa9738d070a5d9b1d7702e729f571a619e2abd2404b8e49a80a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2dd0ad8475aa9738d070a5d9b1d7702e729f571a619e2abd2404b8e49a80a6->enter($__internal_df2dd0ad8475aa9738d070a5d9b1d7702e729f571a619e2abd2404b8e49a80a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_df2dd0ad8475aa9738d070a5d9b1d7702e729f571a619e2abd2404b8e49a80a6->leave($__internal_df2dd0ad8475aa9738d070a5d9b1d7702e729f571a619e2abd2404b8e49a80a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
