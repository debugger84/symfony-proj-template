<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_99c232f40bbc504a82d515c2e8a77de831fc7fea91c38a54980ae6c70a465a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4b51da94f41e3966ab0ccae43a60b92c72f3d1cf013a0ab2c0969b0353007b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b51da94f41e3966ab0ccae43a60b92c72f3d1cf013a0ab2c0969b0353007b03->enter($__internal_4b51da94f41e3966ab0ccae43a60b92c72f3d1cf013a0ab2c0969b0353007b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b51da94f41e3966ab0ccae43a60b92c72f3d1cf013a0ab2c0969b0353007b03->leave($__internal_4b51da94f41e3966ab0ccae43a60b92c72f3d1cf013a0ab2c0969b0353007b03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bd6c8718635711a980c8ddc65ebfe96987a1c8f44880e6b32c16c7d286646c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd6c8718635711a980c8ddc65ebfe96987a1c8f44880e6b32c16c7d286646c3->enter($__internal_9bd6c8718635711a980c8ddc65ebfe96987a1c8f44880e6b32c16c7d286646c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9bd6c8718635711a980c8ddc65ebfe96987a1c8f44880e6b32c16c7d286646c3->leave($__internal_9bd6c8718635711a980c8ddc65ebfe96987a1c8f44880e6b32c16c7d286646c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
