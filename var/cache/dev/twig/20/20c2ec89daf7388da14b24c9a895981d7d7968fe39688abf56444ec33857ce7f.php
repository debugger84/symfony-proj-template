<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_ca50263f6cd5c67133569af3634359dbfe4ed0ee7e7bbefb214ff602c2b7db95 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c861372603da5cbb71ab6db8973640275e289dccea1ca1b2b28a1cc0801f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c861372603da5cbb71ab6db8973640275e289dccea1ca1b2b28a1cc0801f8f->enter($__internal_01c861372603da5cbb71ab6db8973640275e289dccea1ca1b2b28a1cc0801f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01c861372603da5cbb71ab6db8973640275e289dccea1ca1b2b28a1cc0801f8f->leave($__internal_01c861372603da5cbb71ab6db8973640275e289dccea1ca1b2b28a1cc0801f8f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8dec3168d31bcd25180a6e8622de92678f401e14eb89340abf3a9cb376a6e240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dec3168d31bcd25180a6e8622de92678f401e14eb89340abf3a9cb376a6e240->enter($__internal_8dec3168d31bcd25180a6e8622de92678f401e14eb89340abf3a9cb376a6e240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_8dec3168d31bcd25180a6e8622de92678f401e14eb89340abf3a9cb376a6e240->leave($__internal_8dec3168d31bcd25180a6e8622de92678f401e14eb89340abf3a9cb376a6e240_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
