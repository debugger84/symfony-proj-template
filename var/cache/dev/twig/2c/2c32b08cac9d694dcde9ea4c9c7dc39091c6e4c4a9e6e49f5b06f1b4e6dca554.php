<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_00b75145214dcd9c75a64a91461fb6ed15e0b5a75525f135d33b05dd97ac5724 extends Twig_Template
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
        $__internal_32c0c01ff3a6a38a8f4a274569b14fa0e3eac4c3d6b10ef1ff977e88fee4932e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c0c01ff3a6a38a8f4a274569b14fa0e3eac4c3d6b10ef1ff977e88fee4932e->enter($__internal_32c0c01ff3a6a38a8f4a274569b14fa0e3eac4c3d6b10ef1ff977e88fee4932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_32c0c01ff3a6a38a8f4a274569b14fa0e3eac4c3d6b10ef1ff977e88fee4932e->leave($__internal_32c0c01ff3a6a38a8f4a274569b14fa0e3eac4c3d6b10ef1ff977e88fee4932e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
