<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_dc2c69f79b600b76f926ae869de9aceae692ae9e19442cf28a4a71131be432b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0634a231186395c26ccbdea3798a0e2dda328b147600b54e1766a6cc1565cee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0634a231186395c26ccbdea3798a0e2dda328b147600b54e1766a6cc1565cee4->enter($__internal_0634a231186395c26ccbdea3798a0e2dda328b147600b54e1766a6cc1565cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_0634a231186395c26ccbdea3798a0e2dda328b147600b54e1766a6cc1565cee4->leave($__internal_0634a231186395c26ccbdea3798a0e2dda328b147600b54e1766a6cc1565cee4_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_c49d4fabae9d544cc772cd97403c913085c30cf0cd72b62e188164d156543f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49d4fabae9d544cc772cd97403c913085c30cf0cd72b62e188164d156543f27->enter($__internal_c49d4fabae9d544cc772cd97403c913085c30cf0cd72b62e188164d156543f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_c49d4fabae9d544cc772cd97403c913085c30cf0cd72b62e188164d156543f27->leave($__internal_c49d4fabae9d544cc772cd97403c913085c30cf0cd72b62e188164d156543f27_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/var/www/symfony/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
