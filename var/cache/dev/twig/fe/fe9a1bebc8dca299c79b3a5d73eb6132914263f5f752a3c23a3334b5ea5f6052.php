<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_aba3b7e751317aba294892da2e688a073dd8b0f149aa2cdfbd735456db41c04c extends Twig_Template
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
        $__internal_11a60ecd4fc61a12b2bceba6b00dbcf9c426889205c5df003b548e82f8018468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a60ecd4fc61a12b2bceba6b00dbcf9c426889205c5df003b548e82f8018468->enter($__internal_11a60ecd4fc61a12b2bceba6b00dbcf9c426889205c5df003b548e82f8018468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_11a60ecd4fc61a12b2bceba6b00dbcf9c426889205c5df003b548e82f8018468->leave($__internal_11a60ecd4fc61a12b2bceba6b00dbcf9c426889205c5df003b548e82f8018468_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle:Components:motd.html.twig", "/var/www/symfony/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
