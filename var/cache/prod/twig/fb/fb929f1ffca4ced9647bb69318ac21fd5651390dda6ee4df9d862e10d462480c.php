<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_232b0aa22948eaca03f1b3f595020a3dff50215d96eb2aca5c7b2e3c68a1d268 extends Twig_Template
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
        // line 1
        echo "<div class=\"motd\"></div>
";
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NelmioApiDocBundle:Components:motd.html.twig", "/var/www/symfony/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
