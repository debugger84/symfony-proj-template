<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_0990b281a47e1f6066c8381c0de2324d1fc5bd79b5ef47842da020e0ec82c379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_be88a671e4badb1b3d997bd422c21e13de8bae3d59ab5f6ccfcf833ca449c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be88a671e4badb1b3d997bd422c21e13de8bae3d59ab5f6ccfcf833ca449c862->enter($__internal_be88a671e4badb1b3d997bd422c21e13de8bae3d59ab5f6ccfcf833ca449c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be88a671e4badb1b3d997bd422c21e13de8bae3d59ab5f6ccfcf833ca449c862->leave($__internal_be88a671e4badb1b3d997bd422c21e13de8bae3d59ab5f6ccfcf833ca449c862_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bdf98890466cec6ee7c5caa76def4c7f8810bb8d0e1af3979f9a46e219e143e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdf98890466cec6ee7c5caa76def4c7f8810bb8d0e1af3979f9a46e219e143e->enter($__internal_6bdf98890466cec6ee7c5caa76def4c7f8810bb8d0e1af3979f9a46e219e143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_6bdf98890466cec6ee7c5caa76def4c7f8810bb8d0e1af3979f9a46e219e143e->leave($__internal_6bdf98890466cec6ee7c5caa76def4c7f8810bb8d0e1af3979f9a46e219e143e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
