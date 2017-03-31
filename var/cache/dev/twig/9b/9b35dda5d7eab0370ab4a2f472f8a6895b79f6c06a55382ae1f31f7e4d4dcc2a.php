<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_f6ce7aadcf77a976f8bed7b6cd79472053427966e06a99f2d5cc8ae79156634e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e9531ca22cb919b239b418a0e407204e0336713b215bb3439c2b91240040745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9531ca22cb919b239b418a0e407204e0336713b215bb3439c2b91240040745->enter($__internal_7e9531ca22cb919b239b418a0e407204e0336713b215bb3439c2b91240040745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
        
        $__internal_7e9531ca22cb919b239b418a0e407204e0336713b215bb3439c2b91240040745->leave($__internal_7e9531ca22cb919b239b418a0e407204e0336713b215bb3439c2b91240040745_prof);

    }

    public function block_field_label($context, array $blocks = array())
    {
        $__internal_a9b55c1f959034c9e45a40f1133d71e3d9edd720450524f5848714545e2fd6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b55c1f959034c9e45a40f1133d71e3d9edd720450524f5848714545e2fd6b1->enter($__internal_a9b55c1f959034c9e45a40f1133d71e3d9edd720450524f5848714545e2fd6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["id"] ?? $this->getContext($context, "id")), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a9b55c1f959034c9e45a40f1133d71e3d9edd720450524f5848714545e2fd6b1->leave($__internal_a9b55c1f959034c9e45a40f1133d71e3d9edd720450524f5848714545e2fd6b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block field_label %}
{% spaceless %}
    <label for=\"{{ id }}\">{{ id|trans([], 'FOSOAuthServerBundle') }}</label>
{% endspaceless %}
{% endblock field_label %}
", "FOSOAuthServerBundle::form.html.twig", "/var/www/symfony/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/form.html.twig");
    }
}
