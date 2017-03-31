<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4b9b301c663fec59ab14e45241f092b3dbdb6b37e5374a6bef66fdd030ddb19a extends Twig_Template
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
        $__internal_41925bbf05072f4bf5daf2a6c70bdab413de1fdab0ae1ea5affb732060d0704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41925bbf05072f4bf5daf2a6c70bdab413de1fdab0ae1ea5affb732060d0704f->enter($__internal_41925bbf05072f4bf5daf2a6c70bdab413de1fdab0ae1ea5affb732060d0704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_41925bbf05072f4bf5daf2a6c70bdab413de1fdab0ae1ea5affb732060d0704f->leave($__internal_41925bbf05072f4bf5daf2a6c70bdab413de1fdab0ae1ea5affb732060d0704f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
