<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_ba7fbc198ee68653a2c9d84b6310d7eb746e487f72adb383ea2bbae2c20c67cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1658664cb42348b4b21d3836f2b83e1ee5931bff2ef8947c84b2fc66b81c3cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1658664cb42348b4b21d3836f2b83e1ee5931bff2ef8947c84b2fc66b81c3cc5->enter($__internal_1658664cb42348b4b21d3836f2b83e1ee5931bff2ef8947c84b2fc66b81c3cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_1658664cb42348b4b21d3836f2b83e1ee5931bff2ef8947c84b2fc66b81c3cc5->leave($__internal_1658664cb42348b4b21d3836f2b83e1ee5931bff2ef8947c84b2fc66b81c3cc5_prof);

    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_a499df3f47e2895dc101fd67d393fc86250c235cd0c649c6c7d95f89541e7d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a499df3f47e2895dc101fd67d393fc86250c235cd0c649c6c7d95f89541e7d84->enter($__internal_a499df3f47e2895dc101fd67d393fc86250c235cd0c649c6c7d95f89541e7d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 9
        echo "            ";
        
        $__internal_a499df3f47e2895dc101fd67d393fc86250c235cd0c649c6c7d95f89541e7d84->leave($__internal_a499df3f47e2895dc101fd67d393fc86250c235cd0c649c6c7d95f89541e7d84_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block fos_oauth_server_content %}
            {% endblock fos_oauth_server_content %}
        </div>
    </body>
</html>
", "FOSOAuthServerBundle::layout.html.twig", "/var/www/symfony/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
