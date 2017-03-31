<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_2bb7994deee318cad99ce01a0b1151829892965c83c1d57dc259dde04788c296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70143dd37190c45c8149ad29e92d288ecbeda8c79467e1ff84a1421f1bb7629c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70143dd37190c45c8149ad29e92d288ecbeda8c79467e1ff84a1421f1bb7629c->enter($__internal_70143dd37190c45c8149ad29e92d288ecbeda8c79467e1ff84a1421f1bb7629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70143dd37190c45c8149ad29e92d288ecbeda8c79467e1ff84a1421f1bb7629c->leave($__internal_70143dd37190c45c8149ad29e92d288ecbeda8c79467e1ff84a1421f1bb7629c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
