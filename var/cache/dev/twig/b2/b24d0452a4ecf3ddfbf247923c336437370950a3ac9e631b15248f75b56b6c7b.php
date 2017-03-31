<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_884f9adb56652fc5e35391a00dd0c217ad4fab78bda224a29f672f72ec54ee7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_505a9a548ce5c0d6a0b491d4ab48e9adcadd8a8621f3ad30382f6123791b2035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505a9a548ce5c0d6a0b491d4ab48e9adcadd8a8621f3ad30382f6123791b2035->enter($__internal_505a9a548ce5c0d6a0b491d4ab48e9adcadd8a8621f3ad30382f6123791b2035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_505a9a548ce5c0d6a0b491d4ab48e9adcadd8a8621f3ad30382f6123791b2035->leave($__internal_505a9a548ce5c0d6a0b491d4ab48e9adcadd8a8621f3ad30382f6123791b2035_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f18c7a363da3071ff08b725fcd904ab8fd95b2f00fe90d669121da896c0a987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f18c7a363da3071ff08b725fcd904ab8fd95b2f00fe90d669121da896c0a987->enter($__internal_5f18c7a363da3071ff08b725fcd904ab8fd95b2f00fe90d669121da896c0a987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5f18c7a363da3071ff08b725fcd904ab8fd95b2f00fe90d669121da896c0a987->leave($__internal_5f18c7a363da3071ff08b725fcd904ab8fd95b2f00fe90d669121da896c0a987_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
