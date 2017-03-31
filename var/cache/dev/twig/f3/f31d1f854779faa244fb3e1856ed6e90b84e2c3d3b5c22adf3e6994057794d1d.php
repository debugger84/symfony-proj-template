<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b4da1645e5cb4d13379442d1fc9a05d1a73dd6e05d095404e882ea120cd3c912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_219e993b6f0675d68b8c757d247fec6fbbb56cbf3294a854dfb7edc292a2586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219e993b6f0675d68b8c757d247fec6fbbb56cbf3294a854dfb7edc292a2586a->enter($__internal_219e993b6f0675d68b8c757d247fec6fbbb56cbf3294a854dfb7edc292a2586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219e993b6f0675d68b8c757d247fec6fbbb56cbf3294a854dfb7edc292a2586a->leave($__internal_219e993b6f0675d68b8c757d247fec6fbbb56cbf3294a854dfb7edc292a2586a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaa25fee2dfd148dfd5f3dee007c68ac1cebb5ec0a769b3907228a92b442d95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa25fee2dfd148dfd5f3dee007c68ac1cebb5ec0a769b3907228a92b442d95c->enter($__internal_eaa25fee2dfd148dfd5f3dee007c68ac1cebb5ec0a769b3907228a92b442d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eaa25fee2dfd148dfd5f3dee007c68ac1cebb5ec0a769b3907228a92b442d95c->leave($__internal_eaa25fee2dfd148dfd5f3dee007c68ac1cebb5ec0a769b3907228a92b442d95c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
