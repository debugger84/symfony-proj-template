<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9679203cb5077010f093cd46b5f1cb33bf1397511ce8f3a59a361ee0bff33502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5e9ccd9d99697be6169c71372a1e97d6aa566ecbd0cb7a1a42a64a4f279125a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e9ccd9d99697be6169c71372a1e97d6aa566ecbd0cb7a1a42a64a4f279125a->enter($__internal_d5e9ccd9d99697be6169c71372a1e97d6aa566ecbd0cb7a1a42a64a4f279125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d5e9ccd9d99697be6169c71372a1e97d6aa566ecbd0cb7a1a42a64a4f279125a->leave($__internal_d5e9ccd9d99697be6169c71372a1e97d6aa566ecbd0cb7a1a42a64a4f279125a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7ba3f595a1de061c8f7c92965c1cfcecf3dd9136ee025821db3208c2d91b27a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba3f595a1de061c8f7c92965c1cfcecf3dd9136ee025821db3208c2d91b27a6->enter($__internal_7ba3f595a1de061c8f7c92965c1cfcecf3dd9136ee025821db3208c2d91b27a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7ba3f595a1de061c8f7c92965c1cfcecf3dd9136ee025821db3208c2d91b27a6->leave($__internal_7ba3f595a1de061c8f7c92965c1cfcecf3dd9136ee025821db3208c2d91b27a6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b1ed14caceb6b7005121bf55ac080ea5c973989d2bc1bb3b60217f4c68625189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ed14caceb6b7005121bf55ac080ea5c973989d2bc1bb3b60217f4c68625189->enter($__internal_b1ed14caceb6b7005121bf55ac080ea5c973989d2bc1bb3b60217f4c68625189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1ed14caceb6b7005121bf55ac080ea5c973989d2bc1bb3b60217f4c68625189->leave($__internal_b1ed14caceb6b7005121bf55ac080ea5c973989d2bc1bb3b60217f4c68625189_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c85fdee89268e0bf8b10b5faaf31b8dcd86f59d17bae57a19611d53c1dd189c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85fdee89268e0bf8b10b5faaf31b8dcd86f59d17bae57a19611d53c1dd189c3->enter($__internal_c85fdee89268e0bf8b10b5faaf31b8dcd86f59d17bae57a19611d53c1dd189c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c85fdee89268e0bf8b10b5faaf31b8dcd86f59d17bae57a19611d53c1dd189c3->leave($__internal_c85fdee89268e0bf8b10b5faaf31b8dcd86f59d17bae57a19611d53c1dd189c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
