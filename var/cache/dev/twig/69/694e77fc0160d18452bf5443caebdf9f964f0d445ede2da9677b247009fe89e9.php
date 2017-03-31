<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_b6ed8c78e76caafa406437280d45df3d6766c79959309337da5970d4ae66f878 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7fba12473c53011f1202bdc1f4b75e23069fbb753a7e44be612c84a7236958b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fba12473c53011f1202bdc1f4b75e23069fbb753a7e44be612c84a7236958b->enter($__internal_f7fba12473c53011f1202bdc1f4b75e23069fbb753a7e44be612c84a7236958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7fba12473c53011f1202bdc1f4b75e23069fbb753a7e44be612c84a7236958b->leave($__internal_f7fba12473c53011f1202bdc1f4b75e23069fbb753a7e44be612c84a7236958b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1ea51d868723c339e081152bccdbe296c9438267580d721c467816ccf2104513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea51d868723c339e081152bccdbe296c9438267580d721c467816ccf2104513->enter($__internal_1ea51d868723c339e081152bccdbe296c9438267580d721c467816ccf2104513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_1ea51d868723c339e081152bccdbe296c9438267580d721c467816ccf2104513->leave($__internal_1ea51d868723c339e081152bccdbe296c9438267580d721c467816ccf2104513_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
