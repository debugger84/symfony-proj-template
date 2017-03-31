<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_d202e5311841acf1c83d7f2da913b1c051f92c10642a538b843664c7e5487f5d extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cac06f06561ed2742cdd40169f715da93ee9aa3e08574983815c32040c5b0317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac06f06561ed2742cdd40169f715da93ee9aa3e08574983815c32040c5b0317->enter($__internal_cac06f06561ed2742cdd40169f715da93ee9aa3e08574983815c32040c5b0317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac06f06561ed2742cdd40169f715da93ee9aa3e08574983815c32040c5b0317->leave($__internal_cac06f06561ed2742cdd40169f715da93ee9aa3e08574983815c32040c5b0317_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9dd34e298deaee58977cf67e206af92b50adbf58f09be84dab366a1893eb83fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd34e298deaee58977cf67e206af92b50adbf58f09be84dab366a1893eb83fa->enter($__internal_9dd34e298deaee58977cf67e206af92b50adbf58f09be84dab366a1893eb83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9dd34e298deaee58977cf67e206af92b50adbf58f09be84dab366a1893eb83fa->leave($__internal_9dd34e298deaee58977cf67e206af92b50adbf58f09be84dab366a1893eb83fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
