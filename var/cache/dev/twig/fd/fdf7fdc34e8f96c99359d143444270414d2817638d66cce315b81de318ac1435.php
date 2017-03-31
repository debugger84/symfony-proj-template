<?php

/* IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig */
class __TwigTemplate_b58a630b4aac4454c2358898f6267a27e3150b427e36a4da83529bdd798816af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'place_autocomplete_widget' => array($this, 'block_place_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18211eccfe48f50afa8981440194f644c78d935ad5f807b897ec58be8b1a7c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18211eccfe48f50afa8981440194f644c78d935ad5f807b897ec58be8b1a7c08->enter($__internal_18211eccfe48f50afa8981440194f644c78d935ad5f807b897ec58be8b1a7c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
        
        $__internal_18211eccfe48f50afa8981440194f644c78d935ad5f807b897ec58be8b1a7c08->leave($__internal_18211eccfe48f50afa8981440194f644c78d935ad5f807b897ec58be8b1a7c08_prof);

    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_b7898b11e3387adbc546f7517833f8800173afc9275ce346fde52bb7b2e0fdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7898b11e3387adbc546f7517833f8800173afc9275ce346fde52bb7b2e0fdff->enter($__internal_b7898b11e3387adbc546f7517833f8800173afc9275ce346fde52bb7b2e0fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "place_autocomplete_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension')->render(($context["autocomplete"] ?? $this->getContext($context, "autocomplete")), ($context["attr"] ?? $this->getContext($context, "attr")));
        echo "
    ";
        // line 3
        if (($context["api"] ?? $this->getContext($context, "api"))) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => ($context["autocomplete"] ?? $this->getContext($context, "autocomplete"))));
            echo "
    ";
        }
        
        $__internal_b7898b11e3387adbc546f7517833f8800173afc9275ce346fde52bb7b2e0fdff->leave($__internal_b7898b11e3387adbc546f7517833f8800173afc9275ce346fde52bb7b2e0fdff_prof);

    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block place_autocomplete_widget %}
    {{ ivory_google_place_autocomplete(autocomplete, attr) }}
    {% if api %}
        {{ ivory_google_api([autocomplete]) }}
    {% endif %}
{% endblock %}
", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig", "/var/www/symfony/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
