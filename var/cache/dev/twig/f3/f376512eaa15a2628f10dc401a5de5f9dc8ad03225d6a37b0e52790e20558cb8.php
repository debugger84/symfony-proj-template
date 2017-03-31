<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_439956cf61a1e146ed528f23bfa193c643c9be16f5b4562a3e7dc4100ea711a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62a749a70332f43eef3fc0fb75a94edca543620a664ed3fc2130e63156fe73ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a749a70332f43eef3fc0fb75a94edca543620a664ed3fc2130e63156fe73ad->enter($__internal_62a749a70332f43eef3fc0fb75a94edca543620a664ed3fc2130e63156fe73ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a749a70332f43eef3fc0fb75a94edca543620a664ed3fc2130e63156fe73ad->leave($__internal_62a749a70332f43eef3fc0fb75a94edca543620a664ed3fc2130e63156fe73ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bc0e0d3ea9bde55d34c4c6c08b0281a8b79eb005ad9ca5074084db0690608ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0e0d3ea9bde55d34c4c6c08b0281a8b79eb005ad9ca5074084db0690608ae4->enter($__internal_bc0e0d3ea9bde55d34c4c6c08b0281a8b79eb005ad9ca5074084db0690608ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_bc0e0d3ea9bde55d34c4c6c08b0281a8b79eb005ad9ca5074084db0690608ae4->leave($__internal_bc0e0d3ea9bde55d34c4c6c08b0281a8b79eb005ad9ca5074084db0690608ae4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
