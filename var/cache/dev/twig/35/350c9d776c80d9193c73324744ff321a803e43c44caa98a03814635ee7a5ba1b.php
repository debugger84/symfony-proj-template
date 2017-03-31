<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_abbe7fe78e5a7279a09b81126db0cf0bf0db2019463d6f033073182ba57a5085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_be55cadc7abe748f3a687f04bda5847f9c8dd8005757e7b39513dabf272e88ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be55cadc7abe748f3a687f04bda5847f9c8dd8005757e7b39513dabf272e88ba->enter($__internal_be55cadc7abe748f3a687f04bda5847f9c8dd8005757e7b39513dabf272e88ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be55cadc7abe748f3a687f04bda5847f9c8dd8005757e7b39513dabf272e88ba->leave($__internal_be55cadc7abe748f3a687f04bda5847f9c8dd8005757e7b39513dabf272e88ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f54d37aa4068c5f1849fc9c2fc8a11acea3cf70d58815c9facfa59493d2a6e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54d37aa4068c5f1849fc9c2fc8a11acea3cf70d58815c9facfa59493d2a6e35->enter($__internal_f54d37aa4068c5f1849fc9c2fc8a11acea3cf70d58815c9facfa59493d2a6e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f54d37aa4068c5f1849fc9c2fc8a11acea3cf70d58815c9facfa59493d2a6e35->leave($__internal_f54d37aa4068c5f1849fc9c2fc8a11acea3cf70d58815c9facfa59493d2a6e35_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
