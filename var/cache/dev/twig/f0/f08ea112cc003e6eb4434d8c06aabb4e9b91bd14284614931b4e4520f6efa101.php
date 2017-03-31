<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_21dbde90ae3c520bb388918e74ff2d76c5a7a80549f14c14589406934b49dc20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb145175c3ce81944c246f59e045e9f659faf7e879003af9f0acccd95e104d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb145175c3ce81944c246f59e045e9f659faf7e879003af9f0acccd95e104d35->enter($__internal_bb145175c3ce81944c246f59e045e9f659faf7e879003af9f0acccd95e104d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bb145175c3ce81944c246f59e045e9f659faf7e879003af9f0acccd95e104d35->leave($__internal_bb145175c3ce81944c246f59e045e9f659faf7e879003af9f0acccd95e104d35_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AdminBundle:Default:index.html.twig", "/var/www/symfony/src/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
