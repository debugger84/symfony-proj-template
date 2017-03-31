<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.php */
class __TwigTemplate_15487ea3bbbbc37421d33a52b5e643bf8839bf24ab064693dc855785c106da39 extends Twig_Template
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
        $__internal_f74022f648b6431be4f3aba71ab256db19b5584c95f86ee8ee8efc1e3f482fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74022f648b6431be4f3aba71ab256db19b5584c95f86ee8ee8efc1e3f482fc0->enter($__internal_f74022f648b6431be4f3aba71ab256db19b5584c95f86ee8ee8efc1e3f482fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_f74022f648b6431be4f3aba71ab256db19b5584c95f86ee8ee8efc1e3f482fc0->leave($__internal_f74022f648b6431be4f3aba71ab256db19b5584c95f86ee8ee8efc1e3f482fc0_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php", "/var/www/symfony/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.php");
    }
}
