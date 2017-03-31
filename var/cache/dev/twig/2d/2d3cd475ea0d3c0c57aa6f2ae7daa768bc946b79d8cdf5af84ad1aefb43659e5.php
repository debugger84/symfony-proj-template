<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_52e86714ec8dea2b578e3934c66ca5365c54aa3fa63d48012c5a376c891b37f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0cd754649a583c5a7e35d91603ffc69e7892e3df15874e910e0ba222457836b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd754649a583c5a7e35d91603ffc69e7892e3df15874e910e0ba222457836b2->enter($__internal_0cd754649a583c5a7e35d91603ffc69e7892e3df15874e910e0ba222457836b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd754649a583c5a7e35d91603ffc69e7892e3df15874e910e0ba222457836b2->leave($__internal_0cd754649a583c5a7e35d91603ffc69e7892e3df15874e910e0ba222457836b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d4c9b41c7327aeae672ddc6e5a372db5c7f4d8ec223d11a9b4c33478a9333fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4c9b41c7327aeae672ddc6e5a372db5c7f4d8ec223d11a9b4c33478a9333fe->enter($__internal_3d4c9b41c7327aeae672ddc6e5a372db5c7f4d8ec223d11a9b4c33478a9333fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3d4c9b41c7327aeae672ddc6e5a372db5c7f4d8ec223d11a9b4c33478a9333fe->leave($__internal_3d4c9b41c7327aeae672ddc6e5a372db5c7f4d8ec223d11a9b4c33478a9333fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
