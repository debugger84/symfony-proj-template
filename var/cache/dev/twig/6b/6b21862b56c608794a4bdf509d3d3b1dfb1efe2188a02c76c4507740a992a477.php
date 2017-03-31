<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f6beca675e27df7938761a4bb7508342de4c1068be0cb715647f936afa21f74f extends Twig_Template
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
        $__internal_07de4fa2befa345b3459c36a82302ea99b6a8523dff5ebfc1da6675dab488e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07de4fa2befa345b3459c36a82302ea99b6a8523dff5ebfc1da6675dab488e7e->enter($__internal_07de4fa2befa345b3459c36a82302ea99b6a8523dff5ebfc1da6675dab488e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_07de4fa2befa345b3459c36a82302ea99b6a8523dff5ebfc1da6675dab488e7e->leave($__internal_07de4fa2befa345b3459c36a82302ea99b6a8523dff5ebfc1da6675dab488e7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
