<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_40d669bdda828b3743bb4138b940b701fcac29d514fc1e5ebeae76ba35a7256f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_becd957ef1636921383ebfee11b5ed1e5cb631a8c4d9d697cb7ca4b933dd5137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becd957ef1636921383ebfee11b5ed1e5cb631a8c4d9d697cb7ca4b933dd5137->enter($__internal_becd957ef1636921383ebfee11b5ed1e5cb631a8c4d9d697cb7ca4b933dd5137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_becd957ef1636921383ebfee11b5ed1e5cb631a8c4d9d697cb7ca4b933dd5137->leave($__internal_becd957ef1636921383ebfee11b5ed1e5cb631a8c4d9d697cb7ca4b933dd5137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_749ba5bb704f3c623a336ca3188c944d8f7969ac1133b3f30dd722b9aaa08452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749ba5bb704f3c623a336ca3188c944d8f7969ac1133b3f30dd722b9aaa08452->enter($__internal_749ba5bb704f3c623a336ca3188c944d8f7969ac1133b3f30dd722b9aaa08452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_749ba5bb704f3c623a336ca3188c944d8f7969ac1133b3f30dd722b9aaa08452->leave($__internal_749ba5bb704f3c623a336ca3188c944d8f7969ac1133b3f30dd722b9aaa08452_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
