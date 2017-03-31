<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_d412381850d47dd2911a1ac939f936fd0f1182c1362e59526842eed45491f1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f6cffd607840cb6c2d4dae618108649a02fe6ad57239ed3050351f8136b57f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6cffd607840cb6c2d4dae618108649a02fe6ad57239ed3050351f8136b57f6->enter($__internal_4f6cffd607840cb6c2d4dae618108649a02fe6ad57239ed3050351f8136b57f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6cffd607840cb6c2d4dae618108649a02fe6ad57239ed3050351f8136b57f6->leave($__internal_4f6cffd607840cb6c2d4dae618108649a02fe6ad57239ed3050351f8136b57f6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_70697f066efddb63fb12007092c9b3a9e0da7e0635a2c92da58d6dbd6cd61791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70697f066efddb63fb12007092c9b3a9e0da7e0635a2c92da58d6dbd6cd61791->enter($__internal_70697f066efddb63fb12007092c9b3a9e0da7e0635a2c92da58d6dbd6cd61791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_70697f066efddb63fb12007092c9b3a9e0da7e0635a2c92da58d6dbd6cd61791->leave($__internal_70697f066efddb63fb12007092c9b3a9e0da7e0635a2c92da58d6dbd6cd61791_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/var/www/symfony/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
