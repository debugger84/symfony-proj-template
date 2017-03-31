<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0429691f48fc234dcbed177797bf4f45b85cb77f4b02ddac32e47b6d922496f4 extends Twig_Template
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
        $__internal_547c39578811a79ff18ad622403eeaf9d336d04391c8800035b6163eed8ca51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547c39578811a79ff18ad622403eeaf9d336d04391c8800035b6163eed8ca51e->enter($__internal_547c39578811a79ff18ad622403eeaf9d336d04391c8800035b6163eed8ca51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_547c39578811a79ff18ad622403eeaf9d336d04391c8800035b6163eed8ca51e->leave($__internal_547c39578811a79ff18ad622403eeaf9d336d04391c8800035b6163eed8ca51e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
