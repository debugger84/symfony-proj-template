<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f2674a523e2658ae91f2ab4950c6a67aeb068cef03df97479136c298d792713 extends Twig_Template
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
        $__internal_f48eb414057ee16f85b36ba7937ad4a2df8fe0a00320ccf84bf3442a451f9c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48eb414057ee16f85b36ba7937ad4a2df8fe0a00320ccf84bf3442a451f9c76->enter($__internal_f48eb414057ee16f85b36ba7937ad4a2df8fe0a00320ccf84bf3442a451f9c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f48eb414057ee16f85b36ba7937ad4a2df8fe0a00320ccf84bf3442a451f9c76->leave($__internal_f48eb414057ee16f85b36ba7937ad4a2df8fe0a00320ccf84bf3442a451f9c76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
