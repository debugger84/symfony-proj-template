<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cac1d633cc6beb30ddab181d551c078615bec98ed70c50106ceeafd9baa99287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e2ee7dfe33a8af50b47f207fc515b8f81a598e002f0f437e11edb6df0027c3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ee7dfe33a8af50b47f207fc515b8f81a598e002f0f437e11edb6df0027c3c3->enter($__internal_e2ee7dfe33a8af50b47f207fc515b8f81a598e002f0f437e11edb6df0027c3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ee7dfe33a8af50b47f207fc515b8f81a598e002f0f437e11edb6df0027c3c3->leave($__internal_e2ee7dfe33a8af50b47f207fc515b8f81a598e002f0f437e11edb6df0027c3c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_584660597bf3c5b2c2138c291aeadbbd73a79a2e86bed4641b9f0af389b234ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584660597bf3c5b2c2138c291aeadbbd73a79a2e86bed4641b9f0af389b234ad->enter($__internal_584660597bf3c5b2c2138c291aeadbbd73a79a2e86bed4641b9f0af389b234ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_584660597bf3c5b2c2138c291aeadbbd73a79a2e86bed4641b9f0af389b234ad->leave($__internal_584660597bf3c5b2c2138c291aeadbbd73a79a2e86bed4641b9f0af389b234ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
