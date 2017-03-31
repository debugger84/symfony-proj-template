<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ca1fd3414f61bdbe105f8c2f42d832a2010d2ccd623db88e8bbc77a1f439d258 extends Twig_Template
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
        $__internal_b4bc3d339cc68c7e27a09ec3b8eb335d4626216639e3059935642fe0d617ec9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bc3d339cc68c7e27a09ec3b8eb335d4626216639e3059935642fe0d617ec9e->enter($__internal_b4bc3d339cc68c7e27a09ec3b8eb335d4626216639e3059935642fe0d617ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b4bc3d339cc68c7e27a09ec3b8eb335d4626216639e3059935642fe0d617ec9e->leave($__internal_b4bc3d339cc68c7e27a09ec3b8eb335d4626216639e3059935642fe0d617ec9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
