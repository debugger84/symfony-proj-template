<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4e7f8373780dc3e02c554b2c0530a506527a720f3f41c673eb973b303bfd052c extends Twig_Template
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
        $__internal_c7022e80f29373c8070941f8d15e36fe7f812dc9eaa80a3c45a96cf2dd56eb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7022e80f29373c8070941f8d15e36fe7f812dc9eaa80a3c45a96cf2dd56eb87->enter($__internal_c7022e80f29373c8070941f8d15e36fe7f812dc9eaa80a3c45a96cf2dd56eb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c7022e80f29373c8070941f8d15e36fe7f812dc9eaa80a3c45a96cf2dd56eb87->leave($__internal_c7022e80f29373c8070941f8d15e36fe7f812dc9eaa80a3c45a96cf2dd56eb87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
