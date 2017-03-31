<?php

/* :default:index.html.twig */
class __TwigTemplate_17ef53fd96f3c1d90c34f5b741ed60c4e870eb362ba7280e3be3f266ed9d377c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5656e15a8fd23a45d047263bd8f51fda74801c105e2135585979289181ccbdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5656e15a8fd23a45d047263bd8f51fda74801c105e2135585979289181ccbdf3->enter($__internal_5656e15a8fd23a45d047263bd8f51fda74801c105e2135585979289181ccbdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5656e15a8fd23a45d047263bd8f51fda74801c105e2135585979289181ccbdf3->leave($__internal_5656e15a8fd23a45d047263bd8f51fda74801c105e2135585979289181ccbdf3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12f6fb93a9f289ad403fd7d43993587a2ebf6d54e48c461a8ccbfabc4b0fe4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f6fb93a9f289ad403fd7d43993587a2ebf6d54e48c461a8ccbfabc4b0fe4fb->enter($__internal_12f6fb93a9f289ad403fd7d43993587a2ebf6d54e48c461a8ccbfabc4b0fe4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Пятнашки</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-9\">
            Поле
        </div>
        <div class=\"col-md-3\">
            <button class=\"btn btn-warning\">Обновить поле</button>
        </div>
    </div>

";
        
        $__internal_12f6fb93a9f289ad403fd7d43993587a2ebf6d54e48c461a8ccbfabc4b0fe4fb->leave($__internal_12f6fb93a9f289ad403fd7d43993587a2ebf6d54e48c461a8ccbfabc4b0fe4fb_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Пятнашки</h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-9\">
            Поле
        </div>
        <div class=\"col-md-3\">
            <button class=\"btn btn-warning\">Обновить поле</button>
        </div>
    </div>

{% endblock %}


", ":default:index.html.twig", "/var/www/symfony/app/Resources/views/default/index.html.twig");
    }
}
