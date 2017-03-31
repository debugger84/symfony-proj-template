<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1c072ff43e18a0861f9983fd2f91a43a7d4e34eb10846a3cf5e3d0d4ca9d966c extends Twig_Template
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
        $__internal_dcfb7de9d7a775aac980c176518b5ab679b5859230648b5ecf2691b3a20529d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfb7de9d7a775aac980c176518b5ab679b5859230648b5ecf2691b3a20529d8->enter($__internal_dcfb7de9d7a775aac980c176518b5ab679b5859230648b5ecf2691b3a20529d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_dcfb7de9d7a775aac980c176518b5ab679b5859230648b5ecf2691b3a20529d8->leave($__internal_dcfb7de9d7a775aac980c176518b5ab679b5859230648b5ecf2691b3a20529d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
