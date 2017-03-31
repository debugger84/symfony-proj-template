<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_83c003515907955462ecf9a5019dc55b7d093f5cbc42d2e248d4aebec22e5e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aae27744cd7d27ba847ad66258c7d3ca1be2ce7ce5f4963630b20feb3e52b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae27744cd7d27ba847ad66258c7d3ca1be2ce7ce5f4963630b20feb3e52b30f->enter($__internal_aae27744cd7d27ba847ad66258c7d3ca1be2ce7ce5f4963630b20feb3e52b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae27744cd7d27ba847ad66258c7d3ca1be2ce7ce5f4963630b20feb3e52b30f->leave($__internal_aae27744cd7d27ba847ad66258c7d3ca1be2ce7ce5f4963630b20feb3e52b30f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2a99fc988b49cf24aeca2d91e2f6090a8ad72a2ab8cfc3b579e2068213d6fd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a99fc988b49cf24aeca2d91e2f6090a8ad72a2ab8cfc3b579e2068213d6fd06->enter($__internal_2a99fc988b49cf24aeca2d91e2f6090a8ad72a2ab8cfc3b579e2068213d6fd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_2a99fc988b49cf24aeca2d91e2f6090a8ad72a2ab8cfc3b579e2068213d6fd06->leave($__internal_2a99fc988b49cf24aeca2d91e2f6090a8ad72a2ab8cfc3b579e2068213d6fd06_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e8842c0029f76ea8a590470731f2e4231db4c6f2c44b129988c00461abbaa5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8842c0029f76ea8a590470731f2e4231db4c6f2c44b129988c00461abbaa5dd->enter($__internal_e8842c0029f76ea8a590470731f2e4231db4c6f2c44b129988c00461abbaa5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_e8842c0029f76ea8a590470731f2e4231db4c6f2c44b129988c00461abbaa5dd->leave($__internal_e8842c0029f76ea8a590470731f2e4231db4c6f2c44b129988c00461abbaa5dd_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_184ae6609b32cd76bd9c97d7edc8a0b4dff33de621959af5c20173cfc4e0cb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184ae6609b32cd76bd9c97d7edc8a0b4dff33de621959af5c20173cfc4e0cb1f->enter($__internal_184ae6609b32cd76bd9c97d7edc8a0b4dff33de621959af5c20173cfc4e0cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_184ae6609b32cd76bd9c97d7edc8a0b4dff33de621959af5c20173cfc4e0cb1f->leave($__internal_184ae6609b32cd76bd9c97d7edc8a0b4dff33de621959af5c20173cfc4e0cb1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
