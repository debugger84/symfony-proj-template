<?php

/* ApiBundle:Default:index.html.twig */
class __TwigTemplate_c711e25b8b6b190517a42ca3bfbd4cdee81ef64fc6ff5031eae999452a9599e1 extends Twig_Template
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
        $__internal_fc14a2cd1723dce1d003cf8523fe14c14ce793ca4f30871308e00447421ec20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc14a2cd1723dce1d003cf8523fe14c14ce793ca4f30871308e00447421ec20b->enter($__internal_fc14a2cd1723dce1d003cf8523fe14c14ce793ca4f30871308e00447421ec20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fc14a2cd1723dce1d003cf8523fe14c14ce793ca4f30871308e00447421ec20b->leave($__internal_fc14a2cd1723dce1d003cf8523fe14c14ce793ca4f30871308e00447421ec20b_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Default:index.html.twig";
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
", "ApiBundle:Default:index.html.twig", "/var/www/symfony/src/ApiBundle/Resources/views/Default/index.html.twig");
    }
}
