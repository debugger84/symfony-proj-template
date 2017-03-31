<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_19afbe706160d1424c10d5f3176e173513ffbd7c3a3c9ca40cc37d647d628689 extends Twig_Template
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
        $__internal_d5e3fe441bdbe84024d9a72aa091f512c7ba478192fc4ffcc50ee2d1fc94a70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3fe441bdbe84024d9a72aa091f512c7ba478192fc4ffcc50ee2d1fc94a70c->enter($__internal_d5e3fe441bdbe84024d9a72aa091f512c7ba478192fc4ffcc50ee2d1fc94a70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d5e3fe441bdbe84024d9a72aa091f512c7ba478192fc4ffcc50ee2d1fc94a70c->leave($__internal_d5e3fe441bdbe84024d9a72aa091f512c7ba478192fc4ffcc50ee2d1fc94a70c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
