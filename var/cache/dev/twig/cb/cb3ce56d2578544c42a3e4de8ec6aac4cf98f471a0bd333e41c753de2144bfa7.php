<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_04738f1fc2f3785beaa0a288254c12c84f78a8357378977e9a6fdc446ada91b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4e2e87118889c246e5539d15ba052f4a8aa08601b67c849ec37b4d4461716f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2e87118889c246e5539d15ba052f4a8aa08601b67c849ec37b4d4461716f67->enter($__internal_4e2e87118889c246e5539d15ba052f4a8aa08601b67c849ec37b4d4461716f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2e87118889c246e5539d15ba052f4a8aa08601b67c849ec37b4d4461716f67->leave($__internal_4e2e87118889c246e5539d15ba052f4a8aa08601b67c849ec37b4d4461716f67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7f31bfd3b40030c3cc17f4527a14736ced74337df63cd8b955983b0ba50709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f31bfd3b40030c3cc17f4527a14736ced74337df63cd8b955983b0ba50709c->enter($__internal_f7f31bfd3b40030c3cc17f4527a14736ced74337df63cd8b955983b0ba50709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f7f31bfd3b40030c3cc17f4527a14736ced74337df63cd8b955983b0ba50709c->leave($__internal_f7f31bfd3b40030c3cc17f4527a14736ced74337df63cd8b955983b0ba50709c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
