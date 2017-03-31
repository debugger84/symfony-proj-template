<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c9af0297d9d67e7315a6983329cca0c2e14f1dff0fb53bd4b40db8e4fa0b8706 extends Twig_Template
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
        $__internal_6ff6ce5466c52ce9ee8e114b4567f799beac0f6b64112d7425963eb9e7a9b474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff6ce5466c52ce9ee8e114b4567f799beac0f6b64112d7425963eb9e7a9b474->enter($__internal_6ff6ce5466c52ce9ee8e114b4567f799beac0f6b64112d7425963eb9e7a9b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6ff6ce5466c52ce9ee8e114b4567f799beac0f6b64112d7425963eb9e7a9b474->leave($__internal_6ff6ce5466c52ce9ee8e114b4567f799beac0f6b64112d7425963eb9e7a9b474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
