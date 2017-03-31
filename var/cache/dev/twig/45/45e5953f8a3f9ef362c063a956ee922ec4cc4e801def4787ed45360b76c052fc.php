<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_f86bf8c60176080cb080c4f9925045e0dd00b360c4ae12c08c961dd52b887284 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_931f59eece1533833eba02c3f3441180be3c15974c44ab89fd2730893812949e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931f59eece1533833eba02c3f3441180be3c15974c44ab89fd2730893812949e->enter($__internal_931f59eece1533833eba02c3f3441180be3c15974c44ab89fd2730893812949e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931f59eece1533833eba02c3f3441180be3c15974c44ab89fd2730893812949e->leave($__internal_931f59eece1533833eba02c3f3441180be3c15974c44ab89fd2730893812949e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_70738f68f3dd9d0df9549b2d277c4624b0d066c86a3667369ea10ec066cf5926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70738f68f3dd9d0df9549b2d277c4624b0d066c86a3667369ea10ec066cf5926->enter($__internal_70738f68f3dd9d0df9549b2d277c4624b0d066c86a3667369ea10ec066cf5926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_70738f68f3dd9d0df9549b2d277c4624b0d066c86a3667369ea10ec066cf5926->leave($__internal_70738f68f3dd9d0df9549b2d277c4624b0d066c86a3667369ea10ec066cf5926_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
