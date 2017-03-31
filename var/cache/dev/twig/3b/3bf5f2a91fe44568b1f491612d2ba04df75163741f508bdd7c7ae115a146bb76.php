<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_b7a97f6708761a805918c408355ff17c3c944454a053d8dcecca89afa6a34352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b961a5122dd7f29bc9b879d0fc9b11a167f4cc31ff13cf11427de7b160e77417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b961a5122dd7f29bc9b879d0fc9b11a167f4cc31ff13cf11427de7b160e77417->enter($__internal_b961a5122dd7f29bc9b879d0fc9b11a167f4cc31ff13cf11427de7b160e77417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b961a5122dd7f29bc9b879d0fc9b11a167f4cc31ff13cf11427de7b160e77417->leave($__internal_b961a5122dd7f29bc9b879d0fc9b11a167f4cc31ff13cf11427de7b160e77417_prof);

    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_72f546c93aaeb2d6f0e3b9a903aa8186423e65246860fb102e9fa02d6f05ffad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f546c93aaeb2d6f0e3b9a903aa8186423e65246860fb102e9fa02d6f05ffad->enter($__internal_72f546c93aaeb2d6f0e3b9a903aa8186423e65246860fb102e9fa02d6f05ffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
        
        $__internal_72f546c93aaeb2d6f0e3b9a903aa8186423e65246860fb102e9fa02d6f05ffad->leave($__internal_72f546c93aaeb2d6f0e3b9a903aa8186423e65246860fb102e9fa02d6f05ffad_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
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
        return new Twig_Source("{% extends \"FOSOAuthServerBundle::layout.html.twig\" %}

{% block fos_oauth_server_content %}
{% include \"FOSOAuthServerBundle:Authorize:authorize_content.html.twig\" %}
{% endblock fos_oauth_server_content %}
", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "/var/www/symfony/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
