<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_15b5e7610e4d144c553e7954ae66df6541f0e898fa714059b4f0c918f066ca0f extends Twig_Template
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
        $__internal_ea14ccc60b01f573d3b5664693701b4e9a2f2e99f3e78dd8a78f3c3315a09af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea14ccc60b01f573d3b5664693701b4e9a2f2e99f3e78dd8a78f3c3315a09af5->enter($__internal_ea14ccc60b01f573d3b5664693701b4e9a2f2e99f3e78dd8a78f3c3315a09af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ea14ccc60b01f573d3b5664693701b4e9a2f2e99f3e78dd8a78f3c3315a09af5->leave($__internal_ea14ccc60b01f573d3b5664693701b4e9a2f2e99f3e78dd8a78f3c3315a09af5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
