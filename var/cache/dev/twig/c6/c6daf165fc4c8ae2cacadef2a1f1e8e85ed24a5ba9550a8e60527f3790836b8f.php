<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9f22da7f470b21acfa8536de3d7eea36dabaa4966a28c25fa12392555416b2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4d14652c744fc3826923bbf74131e47ef6c99f647be78f4e000323e0cea88fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d14652c744fc3826923bbf74131e47ef6c99f647be78f4e000323e0cea88fea->enter($__internal_4d14652c744fc3826923bbf74131e47ef6c99f647be78f4e000323e0cea88fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d14652c744fc3826923bbf74131e47ef6c99f647be78f4e000323e0cea88fea->leave($__internal_4d14652c744fc3826923bbf74131e47ef6c99f647be78f4e000323e0cea88fea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00ef639f3f21fce2948064401a35e3c1b638409d4d3c230d1ce1a72e04d7d26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ef639f3f21fce2948064401a35e3c1b638409d4d3c230d1ce1a72e04d7d26b->enter($__internal_00ef639f3f21fce2948064401a35e3c1b638409d4d3c230d1ce1a72e04d7d26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_00ef639f3f21fce2948064401a35e3c1b638409d4d3c230d1ce1a72e04d7d26b->leave($__internal_00ef639f3f21fce2948064401a35e3c1b638409d4d3c230d1ce1a72e04d7d26b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
