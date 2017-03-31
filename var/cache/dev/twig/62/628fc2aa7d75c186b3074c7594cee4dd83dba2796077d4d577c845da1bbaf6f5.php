<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_04f93c6406cb89c37aeca2d023d23a33813cf8f67b418ae49a8965a76835f409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_08db43266685141552e0f6c9b840d6e7cf6251feff254aef48eaff512dfab82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08db43266685141552e0f6c9b840d6e7cf6251feff254aef48eaff512dfab82e->enter($__internal_08db43266685141552e0f6c9b840d6e7cf6251feff254aef48eaff512dfab82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08db43266685141552e0f6c9b840d6e7cf6251feff254aef48eaff512dfab82e->leave($__internal_08db43266685141552e0f6c9b840d6e7cf6251feff254aef48eaff512dfab82e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_629a0b294f2d4005868831b7a8b274266ecc7af8b54ccbe682952717b523255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629a0b294f2d4005868831b7a8b274266ecc7af8b54ccbe682952717b523255c->enter($__internal_629a0b294f2d4005868831b7a8b274266ecc7af8b54ccbe682952717b523255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_629a0b294f2d4005868831b7a8b274266ecc7af8b54ccbe682952717b523255c->leave($__internal_629a0b294f2d4005868831b7a8b274266ecc7af8b54ccbe682952717b523255c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
