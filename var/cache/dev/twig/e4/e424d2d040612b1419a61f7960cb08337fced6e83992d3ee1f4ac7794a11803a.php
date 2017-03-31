<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_2c0d1711e182dae809ca12f9e6119e26c739ed3866f8362b832ce838397bdbef extends Twig_Template
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
        $__internal_77b88d2abd63a7ee24575a1e3e2cca20e300c171c9576c848acf9e4f025a1508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b88d2abd63a7ee24575a1e3e2cca20e300c171c9576c848acf9e4f025a1508->enter($__internal_77b88d2abd63a7ee24575a1e3e2cca20e300c171c9576c848acf9e4f025a1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_77b88d2abd63a7ee24575a1e3e2cca20e300c171c9576c848acf9e4f025a1508->leave($__internal_77b88d2abd63a7ee24575a1e3e2cca20e300c171c9576c848acf9e4f025a1508_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
