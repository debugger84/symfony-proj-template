<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_ee85adfb1ed27630e1416a864dd4cf9562e33a741778fce048fcdb130cdd465e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6abc69f3b986f1d19d0a9fa362aea74d76f7ce0ec94ef49020c4904e64aab845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abc69f3b986f1d19d0a9fa362aea74d76f7ce0ec94ef49020c4904e64aab845->enter($__internal_6abc69f3b986f1d19d0a9fa362aea74d76f7ce0ec94ef49020c4904e64aab845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6abc69f3b986f1d19d0a9fa362aea74d76f7ce0ec94ef49020c4904e64aab845->leave($__internal_6abc69f3b986f1d19d0a9fa362aea74d76f7ce0ec94ef49020c4904e64aab845_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b85720548235637dd2ea1a95775892ed8b3dff917773f6f7488361a5d1a089c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85720548235637dd2ea1a95775892ed8b3dff917773f6f7488361a5d1a089c7->enter($__internal_b85720548235637dd2ea1a95775892ed8b3dff917773f6f7488361a5d1a089c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_b85720548235637dd2ea1a95775892ed8b3dff917773f6f7488361a5d1a089c7->leave($__internal_b85720548235637dd2ea1a95775892ed8b3dff917773f6f7488361a5d1a089c7_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/var/www/symfony/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
