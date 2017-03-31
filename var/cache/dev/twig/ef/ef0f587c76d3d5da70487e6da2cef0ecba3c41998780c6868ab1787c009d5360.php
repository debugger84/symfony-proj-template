<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_78a3c589e8b5cfa8fd0d98cda3a774b95efb96510e1a47d43e3c32186c362448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_423a4b2329095beb00e5381de537e14ddae6c3b9c3f4cbbf38475a43d3306361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423a4b2329095beb00e5381de537e14ddae6c3b9c3f4cbbf38475a43d3306361->enter($__internal_423a4b2329095beb00e5381de537e14ddae6c3b9c3f4cbbf38475a43d3306361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_423a4b2329095beb00e5381de537e14ddae6c3b9c3f4cbbf38475a43d3306361->leave($__internal_423a4b2329095beb00e5381de537e14ddae6c3b9c3f4cbbf38475a43d3306361_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_7f83d906cabb9a15ed3a23a1e30b12bba9d15c39c91b307a770eba6f7393f7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f83d906cabb9a15ed3a23a1e30b12bba9d15c39c91b307a770eba6f7393f7c7->enter($__internal_7f83d906cabb9a15ed3a23a1e30b12bba9d15c39c91b307a770eba6f7393f7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_7f83d906cabb9a15ed3a23a1e30b12bba9d15c39c91b307a770eba6f7393f7c7->leave($__internal_7f83d906cabb9a15ed3a23a1e30b12bba9d15c39c91b307a770eba6f7393f7c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/symfony/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
