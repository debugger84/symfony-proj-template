<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_6d6f34231f4643e35d2a2ea7db8d4a6205609aba29742a7466a34109acf81cec extends Twig_Template
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
        $__internal_eaca2597b1f0bd2622e0745b3fe31b57075cf38832bc2b63a6af41e70b2e07f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaca2597b1f0bd2622e0745b3fe31b57075cf38832bc2b63a6af41e70b2e07f0->enter($__internal_eaca2597b1f0bd2622e0745b3fe31b57075cf38832bc2b63a6af41e70b2e07f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_eaca2597b1f0bd2622e0745b3fe31b57075cf38832bc2b63a6af41e70b2e07f0->leave($__internal_eaca2597b1f0bd2622e0745b3fe31b57075cf38832bc2b63a6af41e70b2e07f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
