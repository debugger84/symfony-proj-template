<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_e8c7eb4b4f0241e788bce2617c08a5fbb9c7bed7792c1f321aee7f37def54d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1851a580fd33fbf67cf6b5ccbfc70cbb94c469c3711bf86c994223325e876e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1851a580fd33fbf67cf6b5ccbfc70cbb94c469c3711bf86c994223325e876e3->enter($__internal_b1851a580fd33fbf67cf6b5ccbfc70cbb94c469c3711bf86c994223325e876e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1851a580fd33fbf67cf6b5ccbfc70cbb94c469c3711bf86c994223325e876e3->leave($__internal_b1851a580fd33fbf67cf6b5ccbfc70cbb94c469c3711bf86c994223325e876e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
