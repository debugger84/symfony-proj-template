<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_c0957dfae5e0dcf70bcffef3efc5dc3af93d2d9dcdf2a05fe4970966b2645dde extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_522da382731373a0e30d18ff822930f9203b3355160d3046dfbf79382f17d7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522da382731373a0e30d18ff822930f9203b3355160d3046dfbf79382f17d7ce->enter($__internal_522da382731373a0e30d18ff822930f9203b3355160d3046dfbf79382f17d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522da382731373a0e30d18ff822930f9203b3355160d3046dfbf79382f17d7ce->leave($__internal_522da382731373a0e30d18ff822930f9203b3355160d3046dfbf79382f17d7ce_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_22377a6b5c2a03b2cb7336c4ad7951bc91702d9ef16fd4ef7a79589ba7d0a7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22377a6b5c2a03b2cb7336c4ad7951bc91702d9ef16fd4ef7a79589ba7d0a7c9->enter($__internal_22377a6b5c2a03b2cb7336c4ad7951bc91702d9ef16fd4ef7a79589ba7d0a7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_22377a6b5c2a03b2cb7336c4ad7951bc91702d9ef16fd4ef7a79589ba7d0a7c9->leave($__internal_22377a6b5c2a03b2cb7336c4ad7951bc91702d9ef16fd4ef7a79589ba7d0a7c9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/var/www/symfony/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
