<?php

/* IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig */
class __TwigTemplate_b10c0bcfee51deaa05e55b88499d7a02d6f4c758c1d4231ba6b6d94b0f60d459 extends Twig_Template
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
        // line 1
        $this->displayBlock('place_autocomplete_widget', $context, $blocks);
    }

    public function block_place_autocomplete_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension')->render(($context["autocomplete"] ?? null), ($context["attr"] ?? null));
        echo "
    ";
        // line 3
        if (($context["api"] ?? null)) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Ivory\GoogleMapBundle\Twig\ApiExtension')->render(array(0 => ($context["autocomplete"] ?? null)));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig", "/var/www/symfony/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.twig");
    }
}
