<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_f8c6ceccaafc66444509b5146b2c189c2bc6e59efafc2d5e9191d27941d35e63 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23348630acd060b12ddd78b76af944180e3337c1729dcb2b66da259ba7fedc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23348630acd060b12ddd78b76af944180e3337c1729dcb2b66da259ba7fedc92->enter($__internal_23348630acd060b12ddd78b76af944180e3337c1729dcb2b66da259ba7fedc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23348630acd060b12ddd78b76af944180e3337c1729dcb2b66da259ba7fedc92->leave($__internal_23348630acd060b12ddd78b76af944180e3337c1729dcb2b66da259ba7fedc92_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_50bc9df9c357db4ecb7e38ceea8db71af595c902d346c263c1e30e09d55763ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bc9df9c357db4ecb7e38ceea8db71af595c902d346c263c1e30e09d55763ac->enter($__internal_50bc9df9c357db4ecb7e38ceea8db71af595c902d346c263c1e30e09d55763ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_50bc9df9c357db4ecb7e38ceea8db71af595c902d346c263c1e30e09d55763ac->leave($__internal_50bc9df9c357db4ecb7e38ceea8db71af595c902d346c263c1e30e09d55763ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/var/www/symfony/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
