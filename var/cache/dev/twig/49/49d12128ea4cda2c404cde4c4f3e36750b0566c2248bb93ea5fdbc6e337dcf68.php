<?php

/* base.html.twig */
class __TwigTemplate_6bd4e8c9cd332c4126f471ec7b4583d0d1d0a63d31c01a52ed03766544527762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca9240e6706c711ce864255e4c7569e8aaa46eb273f1bd00985c9b2fa2abde9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9240e6706c711ce864255e4c7569e8aaa46eb273f1bd00985c9b2fa2abde9f->enter($__internal_ca9240e6706c711ce864255e4c7569e8aaa46eb273f1bd00985c9b2fa2abde9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fddb9b6_part_1.css");
            // line 8
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fddb9b6.css");
            echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>

        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94_part_1.js");
            // line 18
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94_part_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a56fa94") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/a56fa94.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_ca9240e6706c711ce864255e4c7569e8aaa46eb273f1bd00985c9b2fa2abde9f->leave($__internal_ca9240e6706c711ce864255e4c7569e8aaa46eb273f1bd00985c9b2fa2abde9f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3defc067dceb426699608f72a08ac04a8a554806da484885930713716fa6a728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3defc067dceb426699608f72a08ac04a8a554806da484885930713716fa6a728->enter($__internal_3defc067dceb426699608f72a08ac04a8a554806da484885930713716fa6a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3defc067dceb426699608f72a08ac04a8a554806da484885930713716fa6a728->leave($__internal_3defc067dceb426699608f72a08ac04a8a554806da484885930713716fa6a728_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a94144320c56ccc3d377e9bb9b38e7e9e37529849d4446e6e621163fa640f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a94144320c56ccc3d377e9bb9b38e7e9e37529849d4446e6e621163fa640f78->enter($__internal_7a94144320c56ccc3d377e9bb9b38e7e9e37529849d4446e6e621163fa640f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a94144320c56ccc3d377e9bb9b38e7e9e37529849d4446e6e621163fa640f78->leave($__internal_7a94144320c56ccc3d377e9bb9b38e7e9e37529849d4446e6e621163fa640f78_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d52bc6706432286c301155b8093f13ecad3a8f4e944781c608f4d247cff1c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d52bc6706432286c301155b8093f13ecad3a8f4e944781c608f4d247cff1c9e->enter($__internal_2d52bc6706432286c301155b8093f13ecad3a8f4e944781c608f4d247cff1c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d52bc6706432286c301155b8093f13ecad3a8f4e944781c608f4d247cff1c9e->leave($__internal_2d52bc6706432286c301155b8093f13ecad3a8f4e944781c608f4d247cff1c9e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87c1f8369b926e98d06f92e51b0f3322f0a442af663ee1540aa87d2a8b50d09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c1f8369b926e98d06f92e51b0f3322f0a442af663ee1540aa87d2a8b50d09e->enter($__internal_87c1f8369b926e98d06f92e51b0f3322f0a442af663ee1540aa87d2a8b50d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87c1f8369b926e98d06f92e51b0f3322f0a442af663ee1540aa87d2a8b50d09e->leave($__internal_87c1f8369b926e98d06f92e51b0f3322f0a442af663ee1540aa87d2a8b50d09e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 21,  132 => 14,  121 => 6,  109 => 5,  100 => 22,  98 => 21,  95 => 20,  75 => 18,  71 => 17,  67 => 15,  65 => 14,  57 => 10,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        {% stylesheets '@bootstrap_css' %}
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>

        {% javascripts '@jquery' '@bootstrap_js' %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/app/Resources/views/base.html.twig");
    }
}
