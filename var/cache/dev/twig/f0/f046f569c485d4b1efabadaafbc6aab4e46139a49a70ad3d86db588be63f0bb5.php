<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_19b6b197a7dd6890bf4795f92f6fd701a725b607bd5d778f8d23a6b7a7f7f8b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7fd5f071fc0ee0b7fe29bac4a30c712445777f94134715e06e99ed572c163f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fd5f071fc0ee0b7fe29bac4a30c712445777f94134715e06e99ed572c163f9->enter($__internal_d7fd5f071fc0ee0b7fe29bac4a30c712445777f94134715e06e99ed572c163f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7fd5f071fc0ee0b7fe29bac4a30c712445777f94134715e06e99ed572c163f9->leave($__internal_d7fd5f071fc0ee0b7fe29bac4a30c712445777f94134715e06e99ed572c163f9_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0be00f8392424d878ee6453787a74da2456e2003ae24f39f88626353237ffe34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be00f8392424d878ee6453787a74da2456e2003ae24f39f88626353237ffe34->enter($__internal_0be00f8392424d878ee6453787a74da2456e2003ae24f39f88626353237ffe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_0be00f8392424d878ee6453787a74da2456e2003ae24f39f88626353237ffe34->leave($__internal_0be00f8392424d878ee6453787a74da2456e2003ae24f39f88626353237ffe34_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_1028b612325db0c2f7999e6871aae3f91b6e4971cd9e7801711faeb6196a85c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1028b612325db0c2f7999e6871aae3f91b6e4971cd9e7801711faeb6196a85c9->enter($__internal_1028b612325db0c2f7999e6871aae3f91b6e4971cd9e7801711faeb6196a85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1028b612325db0c2f7999e6871aae3f91b6e4971cd9e7801711faeb6196a85c9->leave($__internal_1028b612325db0c2f7999e6871aae3f91b6e4971cd9e7801711faeb6196a85c9_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9ebc81ccba5ba0dadfc4941c5e337ae67cfd2048339bff979f86abda1caca9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebc81ccba5ba0dadfc4941c5e337ae67cfd2048339bff979f86abda1caca9dd->enter($__internal_9ebc81ccba5ba0dadfc4941c5e337ae67cfd2048339bff979f86abda1caca9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_9ebc81ccba5ba0dadfc4941c5e337ae67cfd2048339bff979f86abda1caca9dd->leave($__internal_9ebc81ccba5ba0dadfc4941c5e337ae67cfd2048339bff979f86abda1caca9dd_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_97f1fa507b6c4cd7944c31044c2bf37768adc5e09fc15f0ddcd0a40c0eca0981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f1fa507b6c4cd7944c31044c2bf37768adc5e09fc15f0ddcd0a40c0eca0981->enter($__internal_97f1fa507b6c4cd7944c31044c2bf37768adc5e09fc15f0ddcd0a40c0eca0981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_97f1fa507b6c4cd7944c31044c2bf37768adc5e09fc15f0ddcd0a40c0eca0981->leave($__internal_97f1fa507b6c4cd7944c31044c2bf37768adc5e09fc15f0ddcd0a40c0eca0981_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_3ad20c00025b6f86392cd351062a1166d1527306961a7873fec61abaeddb835b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad20c00025b6f86392cd351062a1166d1527306961a7873fec61abaeddb835b->enter($__internal_3ad20c00025b6f86392cd351062a1166d1527306961a7873fec61abaeddb835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_3ad20c00025b6f86392cd351062a1166d1527306961a7873fec61abaeddb835b->leave($__internal_3ad20c00025b6f86392cd351062a1166d1527306961a7873fec61abaeddb835b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
