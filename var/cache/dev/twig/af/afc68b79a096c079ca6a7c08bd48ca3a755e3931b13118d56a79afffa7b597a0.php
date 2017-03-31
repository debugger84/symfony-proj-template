<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8a2b281a1371e32dd412d3a6b684cc7ef4c83636ae5975e80e119c8c044f160c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0303a942141a4f2e804162f13172cc62bfcacaac4840f61e9258b0357053e0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0303a942141a4f2e804162f13172cc62bfcacaac4840f61e9258b0357053e0b9->enter($__internal_0303a942141a4f2e804162f13172cc62bfcacaac4840f61e9258b0357053e0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0303a942141a4f2e804162f13172cc62bfcacaac4840f61e9258b0357053e0b9->leave($__internal_0303a942141a4f2e804162f13172cc62bfcacaac4840f61e9258b0357053e0b9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_765e36afb67ab4f7e012b8aaac369657541ce1c5bb4a2e5d58eaea31480343b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765e36afb67ab4f7e012b8aaac369657541ce1c5bb4a2e5d58eaea31480343b2->enter($__internal_765e36afb67ab4f7e012b8aaac369657541ce1c5bb4a2e5d58eaea31480343b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_765e36afb67ab4f7e012b8aaac369657541ce1c5bb4a2e5d58eaea31480343b2->leave($__internal_765e36afb67ab4f7e012b8aaac369657541ce1c5bb4a2e5d58eaea31480343b2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e0d251bf05ac80d68d7bf8692ea333736206a4790bcf183e96a869b9c7f4d3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d251bf05ac80d68d7bf8692ea333736206a4790bcf183e96a869b9c7f4d3d6->enter($__internal_e0d251bf05ac80d68d7bf8692ea333736206a4790bcf183e96a869b9c7f4d3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e0d251bf05ac80d68d7bf8692ea333736206a4790bcf183e96a869b9c7f4d3d6->leave($__internal_e0d251bf05ac80d68d7bf8692ea333736206a4790bcf183e96a869b9c7f4d3d6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_850d928fac2c3c015cd35fa90b1d77785d1ce68df9c62f98a957b533b0cc8413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850d928fac2c3c015cd35fa90b1d77785d1ce68df9c62f98a957b533b0cc8413->enter($__internal_850d928fac2c3c015cd35fa90b1d77785d1ce68df9c62f98a957b533b0cc8413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_850d928fac2c3c015cd35fa90b1d77785d1ce68df9c62f98a957b533b0cc8413->leave($__internal_850d928fac2c3c015cd35fa90b1d77785d1ce68df9c62f98a957b533b0cc8413_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
