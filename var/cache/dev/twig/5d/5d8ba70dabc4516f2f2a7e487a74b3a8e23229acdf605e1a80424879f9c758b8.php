<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_eb1d7b042012b393eaf9e7ce779b81d0ede59729e98ea099405da57df6e335b8 extends Twig_Template
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
        $__internal_7eaddb137ba9d3a0c69659b646132efaddc6f15d5d45466b7e5433fc19ece805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eaddb137ba9d3a0c69659b646132efaddc6f15d5d45466b7e5433fc19ece805->enter($__internal_7eaddb137ba9d3a0c69659b646132efaddc6f15d5d45466b7e5433fc19ece805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7eaddb137ba9d3a0c69659b646132efaddc6f15d5d45466b7e5433fc19ece805->leave($__internal_7eaddb137ba9d3a0c69659b646132efaddc6f15d5d45466b7e5433fc19ece805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
