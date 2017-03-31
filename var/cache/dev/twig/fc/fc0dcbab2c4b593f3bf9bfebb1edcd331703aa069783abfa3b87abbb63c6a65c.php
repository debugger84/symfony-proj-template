<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d91e92679c300e7aa52c05c2a81378309cb989685a489452863899ada418b602 extends Twig_Template
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
        $__internal_0ba20b0f13f8fa4229c33eefb781d0b148c217c5a940cbb4ac7c03ad7a7d2512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba20b0f13f8fa4229c33eefb781d0b148c217c5a940cbb4ac7c03ad7a7d2512->enter($__internal_0ba20b0f13f8fa4229c33eefb781d0b148c217c5a940cbb4ac7c03ad7a7d2512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0ba20b0f13f8fa4229c33eefb781d0b148c217c5a940cbb4ac7c03ad7a7d2512->leave($__internal_0ba20b0f13f8fa4229c33eefb781d0b148c217c5a940cbb4ac7c03ad7a7d2512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
