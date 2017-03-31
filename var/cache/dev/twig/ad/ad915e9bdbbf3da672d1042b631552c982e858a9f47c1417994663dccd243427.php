<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8cb43a323bacf3c6610e65c9b0198e9ede03c7d9674e43652e933e4546f49e4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_40ea54f345cfc073656e087ff509069e2a774a0f8efe2b700838a79c529d1de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ea54f345cfc073656e087ff509069e2a774a0f8efe2b700838a79c529d1de8->enter($__internal_40ea54f345cfc073656e087ff509069e2a774a0f8efe2b700838a79c529d1de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ea54f345cfc073656e087ff509069e2a774a0f8efe2b700838a79c529d1de8->leave($__internal_40ea54f345cfc073656e087ff509069e2a774a0f8efe2b700838a79c529d1de8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9996708580785e114c86587c781a62c3e6b8ef32e4a1f85cfdc9e5873dd9c16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9996708580785e114c86587c781a62c3e6b8ef32e4a1f85cfdc9e5873dd9c16a->enter($__internal_9996708580785e114c86587c781a62c3e6b8ef32e4a1f85cfdc9e5873dd9c16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9996708580785e114c86587c781a62c3e6b8ef32e4a1f85cfdc9e5873dd9c16a->leave($__internal_9996708580785e114c86587c781a62c3e6b8ef32e4a1f85cfdc9e5873dd9c16a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f1bc723aeed0ceb3e7b65186f4d2d01050011254cd3f0ac43ae6d0bd8a5122e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1bc723aeed0ceb3e7b65186f4d2d01050011254cd3f0ac43ae6d0bd8a5122e->enter($__internal_2f1bc723aeed0ceb3e7b65186f4d2d01050011254cd3f0ac43ae6d0bd8a5122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2f1bc723aeed0ceb3e7b65186f4d2d01050011254cd3f0ac43ae6d0bd8a5122e->leave($__internal_2f1bc723aeed0ceb3e7b65186f4d2d01050011254cd3f0ac43ae6d0bd8a5122e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
