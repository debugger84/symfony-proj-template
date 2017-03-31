<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c19f0248f51ca15ee7905004483c1e3dd9d1ed8117f6660884d1b75f3fb9f6b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff7fbac61a6fb97898e8fa7abcc52da274ba8ce45c411960831f4ab9494e3b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7fbac61a6fb97898e8fa7abcc52da274ba8ce45c411960831f4ab9494e3b0b->enter($__internal_ff7fbac61a6fb97898e8fa7abcc52da274ba8ce45c411960831f4ab9494e3b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7fbac61a6fb97898e8fa7abcc52da274ba8ce45c411960831f4ab9494e3b0b->leave($__internal_ff7fbac61a6fb97898e8fa7abcc52da274ba8ce45c411960831f4ab9494e3b0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb1549306c278c9bb6577219b13cf601af4e6079eda6d25e655eefce0e6f459b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1549306c278c9bb6577219b13cf601af4e6079eda6d25e655eefce0e6f459b->enter($__internal_fb1549306c278c9bb6577219b13cf601af4e6079eda6d25e655eefce0e6f459b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb1549306c278c9bb6577219b13cf601af4e6079eda6d25e655eefce0e6f459b->leave($__internal_fb1549306c278c9bb6577219b13cf601af4e6079eda6d25e655eefce0e6f459b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c6f40a5069966b7b5c6eaa21909105ea3529ee78fc9e1e6cae0d5320ec7eea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6f40a5069966b7b5c6eaa21909105ea3529ee78fc9e1e6cae0d5320ec7eea0->enter($__internal_5c6f40a5069966b7b5c6eaa21909105ea3529ee78fc9e1e6cae0d5320ec7eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c6f40a5069966b7b5c6eaa21909105ea3529ee78fc9e1e6cae0d5320ec7eea0->leave($__internal_5c6f40a5069966b7b5c6eaa21909105ea3529ee78fc9e1e6cae0d5320ec7eea0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9866cca0f5042204c8e36df894aa0ac0e60f06ca27eb5ad9b450d4ba2cc53105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9866cca0f5042204c8e36df894aa0ac0e60f06ca27eb5ad9b450d4ba2cc53105->enter($__internal_9866cca0f5042204c8e36df894aa0ac0e60f06ca27eb5ad9b450d4ba2cc53105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9866cca0f5042204c8e36df894aa0ac0e60f06ca27eb5ad9b450d4ba2cc53105->leave($__internal_9866cca0f5042204c8e36df894aa0ac0e60f06ca27eb5ad9b450d4ba2cc53105_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
