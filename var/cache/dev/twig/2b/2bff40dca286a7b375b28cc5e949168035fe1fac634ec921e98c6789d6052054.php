<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_629b880708d8ba115bdae887bd2411225636b57f2af4280d4aa5500a552aee25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c352e6980783f4d28974755c67a102ad6c29546b08d255163330c066cf748ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c352e6980783f4d28974755c67a102ad6c29546b08d255163330c066cf748ed->enter($__internal_0c352e6980783f4d28974755c67a102ad6c29546b08d255163330c066cf748ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c352e6980783f4d28974755c67a102ad6c29546b08d255163330c066cf748ed->leave($__internal_0c352e6980783f4d28974755c67a102ad6c29546b08d255163330c066cf748ed_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6d1adbf672ef5222da0929fa529fd9d788f586cefce9e467f247021029e6d2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1adbf672ef5222da0929fa529fd9d788f586cefce9e467f247021029e6d2f1->enter($__internal_6d1adbf672ef5222da0929fa529fd9d788f586cefce9e467f247021029e6d2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_6d1adbf672ef5222da0929fa529fd9d788f586cefce9e467f247021029e6d2f1->leave($__internal_6d1adbf672ef5222da0929fa529fd9d788f586cefce9e467f247021029e6d2f1_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_95a7586967bd37e58c08fcbd746437e05592dd0569a6c969cb8c173207fc6290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a7586967bd37e58c08fcbd746437e05592dd0569a6c969cb8c173207fc6290->enter($__internal_95a7586967bd37e58c08fcbd746437e05592dd0569a6c969cb8c173207fc6290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_95a7586967bd37e58c08fcbd746437e05592dd0569a6c969cb8c173207fc6290->leave($__internal_95a7586967bd37e58c08fcbd746437e05592dd0569a6c969cb8c173207fc6290_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_f145e7f1d01f2ead43f98ba10cef38813fef299a64fb19e3ca4a2c06297a5739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f145e7f1d01f2ead43f98ba10cef38813fef299a64fb19e3ca4a2c06297a5739->enter($__internal_f145e7f1d01f2ead43f98ba10cef38813fef299a64fb19e3ca4a2c06297a5739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_f145e7f1d01f2ead43f98ba10cef38813fef299a64fb19e3ca4a2c06297a5739->leave($__internal_f145e7f1d01f2ead43f98ba10cef38813fef299a64fb19e3ca4a2c06297a5739_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_06aaf5f0e03fd95b8dfba44347a4cd3db73e63f880a0a517217c68b97eb106ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aaf5f0e03fd95b8dfba44347a4cd3db73e63f880a0a517217c68b97eb106ac->enter($__internal_06aaf5f0e03fd95b8dfba44347a4cd3db73e63f880a0a517217c68b97eb106ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_06aaf5f0e03fd95b8dfba44347a4cd3db73e63f880a0a517217c68b97eb106ac->leave($__internal_06aaf5f0e03fd95b8dfba44347a4cd3db73e63f880a0a517217c68b97eb106ac_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_91dfaf86c0645ad1dde4692e13d3a97e070400883261df1fe0cb337ffa85ca02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dfaf86c0645ad1dde4692e13d3a97e070400883261df1fe0cb337ffa85ca02->enter($__internal_91dfaf86c0645ad1dde4692e13d3a97e070400883261df1fe0cb337ffa85ca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_91dfaf86c0645ad1dde4692e13d3a97e070400883261df1fe0cb337ffa85ca02->leave($__internal_91dfaf86c0645ad1dde4692e13d3a97e070400883261df1fe0cb337ffa85ca02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
