<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_02b5aea24345cbfa5f93f785a3cbd14b060f319a7d015bbe840160ce61ce8dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dee26024f3996217c43fc8e9d9490387c937a19383a6c75fa0bd69570d5f20bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee26024f3996217c43fc8e9d9490387c937a19383a6c75fa0bd69570d5f20bd->enter($__internal_dee26024f3996217c43fc8e9d9490387c937a19383a6c75fa0bd69570d5f20bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee26024f3996217c43fc8e9d9490387c937a19383a6c75fa0bd69570d5f20bd->leave($__internal_dee26024f3996217c43fc8e9d9490387c937a19383a6c75fa0bd69570d5f20bd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
