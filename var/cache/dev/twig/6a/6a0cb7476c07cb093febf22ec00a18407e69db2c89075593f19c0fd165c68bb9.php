<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_1ad9d5f9a8fb530e5af8c6bacd5051688a07e756561f2cefd5b9aacb5eaab5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57140e8f13efb578dded0e18f7d8ad641f7e7f4d598f80e2e29afc2f580d8f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57140e8f13efb578dded0e18f7d8ad641f7e7f4d598f80e2e29afc2f580d8f73->enter($__internal_57140e8f13efb578dded0e18f7d8ad641f7e7f4d598f80e2e29afc2f580d8f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57140e8f13efb578dded0e18f7d8ad641f7e7f4d598f80e2e29afc2f580d8f73->leave($__internal_57140e8f13efb578dded0e18f7d8ad641f7e7f4d598f80e2e29afc2f580d8f73_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_f964642e862243aa51aa8f12cbffeb779f20ade36aa1970a095d274ea423f5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f964642e862243aa51aa8f12cbffeb779f20ade36aa1970a095d274ea423f5d4->enter($__internal_f964642e862243aa51aa8f12cbffeb779f20ade36aa1970a095d274ea423f5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_f964642e862243aa51aa8f12cbffeb779f20ade36aa1970a095d274ea423f5d4->leave($__internal_f964642e862243aa51aa8f12cbffeb779f20ade36aa1970a095d274ea423f5d4_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_be0a4e890f551bd186e557257244591ce92df36680143bc1e41d52ebca3cef04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0a4e890f551bd186e557257244591ce92df36680143bc1e41d52ebca3cef04->enter($__internal_be0a4e890f551bd186e557257244591ce92df36680143bc1e41d52ebca3cef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_be0a4e890f551bd186e557257244591ce92df36680143bc1e41d52ebca3cef04->leave($__internal_be0a4e890f551bd186e557257244591ce92df36680143bc1e41d52ebca3cef04_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_7c8553cdfc7496a54168f8eda528d20cbff64b5e8b118caaabe5588ea5ae85b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8553cdfc7496a54168f8eda528d20cbff64b5e8b118caaabe5588ea5ae85b6->enter($__internal_7c8553cdfc7496a54168f8eda528d20cbff64b5e8b118caaabe5588ea5ae85b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_7c8553cdfc7496a54168f8eda528d20cbff64b5e8b118caaabe5588ea5ae85b6->leave($__internal_7c8553cdfc7496a54168f8eda528d20cbff64b5e8b118caaabe5588ea5ae85b6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_de3d96dd0a0fe0e8eac7d687ea7e04694c7e181a6af6de36e7a632c8019291db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3d96dd0a0fe0e8eac7d687ea7e04694c7e181a6af6de36e7a632c8019291db->enter($__internal_de3d96dd0a0fe0e8eac7d687ea7e04694c7e181a6af6de36e7a632c8019291db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_de3d96dd0a0fe0e8eac7d687ea7e04694c7e181a6af6de36e7a632c8019291db->leave($__internal_de3d96dd0a0fe0e8eac7d687ea7e04694c7e181a6af6de36e7a632c8019291db_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_257a9678a77316b53d1ec9da78eb7fb901960556fe50198732315ee18ba66f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257a9678a77316b53d1ec9da78eb7fb901960556fe50198732315ee18ba66f9c->enter($__internal_257a9678a77316b53d1ec9da78eb7fb901960556fe50198732315ee18ba66f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_257a9678a77316b53d1ec9da78eb7fb901960556fe50198732315ee18ba66f9c->leave($__internal_257a9678a77316b53d1ec9da78eb7fb901960556fe50198732315ee18ba66f9c_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_7d5e33ae3d0f08606bf5b1b048fe4f1b890a6074584625ae6d26302fce8e5552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5e33ae3d0f08606bf5b1b048fe4f1b890a6074584625ae6d26302fce8e5552->enter($__internal_7d5e33ae3d0f08606bf5b1b048fe4f1b890a6074584625ae6d26302fce8e5552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_7d5e33ae3d0f08606bf5b1b048fe4f1b890a6074584625ae6d26302fce8e5552->leave($__internal_7d5e33ae3d0f08606bf5b1b048fe4f1b890a6074584625ae6d26302fce8e5552_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_37453d07538cc1aced1c3d8858a5d5619f4d86cb1a1acae8ff93087bb2df7f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37453d07538cc1aced1c3d8858a5d5619f4d86cb1a1acae8ff93087bb2df7f4b->enter($__internal_37453d07538cc1aced1c3d8858a5d5619f4d86cb1a1acae8ff93087bb2df7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_37453d07538cc1aced1c3d8858a5d5619f4d86cb1a1acae8ff93087bb2df7f4b->leave($__internal_37453d07538cc1aced1c3d8858a5d5619f4d86cb1a1acae8ff93087bb2df7f4b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
