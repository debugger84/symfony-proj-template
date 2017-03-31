<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0fcf16d6dce1b3a44985a7fc40fe1ddfc20793b1e4f5d246151746667e786bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_089cd625022c90d748aa105e7d9bc75845a8e20004af65f62b30d52b5d88ebd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089cd625022c90d748aa105e7d9bc75845a8e20004af65f62b30d52b5d88ebd9->enter($__internal_089cd625022c90d748aa105e7d9bc75845a8e20004af65f62b30d52b5d88ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_089cd625022c90d748aa105e7d9bc75845a8e20004af65f62b30d52b5d88ebd9->leave($__internal_089cd625022c90d748aa105e7d9bc75845a8e20004af65f62b30d52b5d88ebd9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33da60affe7f534a6f39f176c6862833ff49112da7249f4f7b0714c773131056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33da60affe7f534a6f39f176c6862833ff49112da7249f4f7b0714c773131056->enter($__internal_33da60affe7f534a6f39f176c6862833ff49112da7249f4f7b0714c773131056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33da60affe7f534a6f39f176c6862833ff49112da7249f4f7b0714c773131056->leave($__internal_33da60affe7f534a6f39f176c6862833ff49112da7249f4f7b0714c773131056_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
