<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_868c7994cdbd64065ea6d3b82cd0ec6e401c10c039b353df628affac7b5d454d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58ce2fdb592a29f508663d9d8fa424efc7c4f598855ba012c47d9d7d5eacf613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ce2fdb592a29f508663d9d8fa424efc7c4f598855ba012c47d9d7d5eacf613->enter($__internal_58ce2fdb592a29f508663d9d8fa424efc7c4f598855ba012c47d9d7d5eacf613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ce2fdb592a29f508663d9d8fa424efc7c4f598855ba012c47d9d7d5eacf613->leave($__internal_58ce2fdb592a29f508663d9d8fa424efc7c4f598855ba012c47d9d7d5eacf613_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_18d6a3049397fe9b8e244910ce591efbb1a69631a395aca595e7fa559cb198cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d6a3049397fe9b8e244910ce591efbb1a69631a395aca595e7fa559cb198cb->enter($__internal_18d6a3049397fe9b8e244910ce591efbb1a69631a395aca595e7fa559cb198cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_18d6a3049397fe9b8e244910ce591efbb1a69631a395aca595e7fa559cb198cb->leave($__internal_18d6a3049397fe9b8e244910ce591efbb1a69631a395aca595e7fa559cb198cb_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_52d16da71e900622decec73ec0ee8cd3130b0c91b2e4217ad5cdb68467284e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d16da71e900622decec73ec0ee8cd3130b0c91b2e4217ad5cdb68467284e62->enter($__internal_52d16da71e900622decec73ec0ee8cd3130b0c91b2e4217ad5cdb68467284e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_52d16da71e900622decec73ec0ee8cd3130b0c91b2e4217ad5cdb68467284e62->leave($__internal_52d16da71e900622decec73ec0ee8cd3130b0c91b2e4217ad5cdb68467284e62_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_6d44b6f037cb1e5c09f5709fd9b8fb6b592326e5d960f77dacc8d6fa020fc657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d44b6f037cb1e5c09f5709fd9b8fb6b592326e5d960f77dacc8d6fa020fc657->enter($__internal_6d44b6f037cb1e5c09f5709fd9b8fb6b592326e5d960f77dacc8d6fa020fc657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_6d44b6f037cb1e5c09f5709fd9b8fb6b592326e5d960f77dacc8d6fa020fc657->leave($__internal_6d44b6f037cb1e5c09f5709fd9b8fb6b592326e5d960f77dacc8d6fa020fc657_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_87c985060218551a6a2ace30a64df03f90806e1ec57231919f774cab3a050aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c985060218551a6a2ace30a64df03f90806e1ec57231919f774cab3a050aae->enter($__internal_87c985060218551a6a2ace30a64df03f90806e1ec57231919f774cab3a050aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_87c985060218551a6a2ace30a64df03f90806e1ec57231919f774cab3a050aae->leave($__internal_87c985060218551a6a2ace30a64df03f90806e1ec57231919f774cab3a050aae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
