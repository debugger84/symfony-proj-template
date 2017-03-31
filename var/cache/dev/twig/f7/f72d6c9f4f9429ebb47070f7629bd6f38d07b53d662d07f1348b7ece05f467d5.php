<?php

/* HttplugBundle::webprofiler.html.twig */
class __TwigTemplate_488cf3877781c1e23a53ada321b0e5f4ec6fda4a86780f8fa3d4e3d20ee853b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "HttplugBundle::webprofiler.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed228bd37e4465e74cb6a63fecc1edf41b034c11b4e958396c62e7236d3eb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed228bd37e4465e74cb6a63fecc1edf41b034c11b4e958396c62e7236d3eb85->enter($__internal_0ed228bd37e4465e74cb6a63fecc1edf41b034c11b4e958396c62e7236d3eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HttplugBundle::webprofiler.html.twig"));

        // line 3
        $context["macro"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed228bd37e4465e74cb6a63fecc1edf41b034c11b4e958396c62e7236d3eb85->leave($__internal_0ed228bd37e4465e74cb6a63fecc1edf41b034c11b4e958396c62e7236d3eb85_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8db41a9878fa211f50987ace5722537ae170264ab6b761e63a1c4b12f1ddf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db41a9878fa211f50987ace5722537ae170264ab6b761e63a1c4b12f1ddf3d->enter($__internal_a8db41a9878fa211f50987ace5722537ae170264ab6b761e63a1c4b12f1ddf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) > 0)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">req.</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Successful requests</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "successfulStacks", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Failed requests</b>
                <span class=\"sf-toolbar-status ";
            // line 20
            echo ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array())), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "HttplugBundle::webprofiler.html.twig", 24)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("red") : ("")))));
            // line 25
            echo "    ";
        }
        
        $__internal_a8db41a9878fa211f50987ace5722537ae170264ab6b761e63a1c4b12f1ddf3d->leave($__internal_a8db41a9878fa211f50987ace5722537ae170264ab6b761e63a1c4b12f1ddf3d_prof);

    }

    // line 28
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e109cc361ddddaf61af27e004105ec50efc0d0651d78e2c6e7ec876cd820c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e109cc361ddddaf61af27e004105ec50efc0d0651d78e2c6e7ec876cd820c1a->enter($__internal_2e109cc361ddddaf61af27e004105ec50efc0d0651d78e2c6e7ec876cd820c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 29
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/style/httplug.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/script/httplug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 31
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2e109cc361ddddaf61af27e004105ec50efc0d0651d78e2c6e7ec876cd820c1a->leave($__internal_2e109cc361ddddaf61af27e004105ec50efc0d0651d78e2c6e7ec876cd820c1a_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcbc00ca098f0982de2a1acd7d0b84d083c85933555a8eaf48338aa0d34bef50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbc00ca098f0982de2a1acd7d0b84d083c85933555a8eaf48338aa0d34bef50->enter($__internal_dcbc00ca098f0982de2a1acd7d0b84d083c85933555a8eaf48338aa0d34bef50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    ";
        // line 36
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "stacks", array())) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 38
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 41
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array()))) {
            // line 42
            echo "            <span class=\"count\">
                <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "failedStacks", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 46
        echo "    </span>
";
        
        $__internal_dcbc00ca098f0982de2a1acd7d0b84d083c85933555a8eaf48338aa0d34bef50->leave($__internal_dcbc00ca098f0982de2a1acd7d0b84d083c85933555a8eaf48338aa0d34bef50_prof);

    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        $__internal_527fbef3da8513b83f72bf43d9d77e6e45c85a0459dc1e6558bc53fda6e382a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527fbef3da8513b83f72bf43d9d77e6e45c85a0459dc1e6558bc53fda6e382a1->enter($__internal_527fbef3da8513b83f72bf43d9d77e6e45c85a0459dc1e6558bc53fda6e382a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 50
        echo "    <h2>HTTPlug</h2>
    <button class=\"btn push-right\" onclick=\"httplug_toggleBody(this)\" data-label=\"Hide message body\">Show message body</button>

    <div class=\"sf-tabs\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clients", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 55
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 56
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clientStacks", array(0 => $context["client"]), "method")), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 60
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "clientStacks", array(0 => $context["client"]), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 64
                echo "                    <h3>
                        Request #";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "
                        ";
                // line 66
                if ($this->getAttribute($context["stack"], "failed", array())) {
                    // line 67
                    echo "                            - <span class=\"httplug-error\">Errored</span>
                        ";
                }
                // line 69
                echo "                    </h3>
                    ";
                // line 70
                echo $context["macro"]->getprintMessages($context["stack"]);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
    </div>

";
        
        $__internal_527fbef3da8513b83f72bf43d9d77e6e45c85a0459dc1e6558bc53fda6e382a1->leave($__internal_527fbef3da8513b83f72bf43d9d77e6e45c85a0459dc1e6558bc53fda6e382a1_prof);

    }

    // line 84
    public function getprintMessages($__stack__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "stack" => $__stack__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0383e7eab141ba5b7c8e073d8bf189fe1236e3631628dfbdc0834e9515890325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0383e7eab141ba5b7c8e073d8bf189fe1236e3631628dfbdc0834e9515890325->enter($__internal_0383e7eab141ba5b7c8e073d8bf189fe1236e3631628dfbdc0834e9515890325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "printMessages"));

            // line 85
            echo "    <table class=\"httplug-request-table\">
        <tr>
            <th width=\"50%\">Request</th>
            <th width=\"50%\">Response</th>
        </tr>

        <tr>
            <td>";
            // line 92
            echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "request", array())));
            echo "</td>
            <td>";
            // line 93
            echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "response", array())));
            echo "</td>
        </tr>
        ";
            // line 95
            if ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "profiles", array())) {
                // line 96
                echo "            <tr>
                <td colspan=\"2\" style=\"text-align:center\">
                    <button class=\"btn\" onclick=\"httplug_togglePluginStack(this)\" data-label=\"Hide plugin stack\">See plugin stack</button>
                </td>
            </tr>
            <tr class=\"httplug-request-stack\">
                <td class=\"httplug-plugin-name\">&darr; Start </td>
                <td class=\"httplug-plugin-name\">- End
                    ";
                // line 104
                if ($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "failed", array())) {
                    // line 105
                    echo "                        <span class=\"httplug-error\">&#9747;</span>
                    ";
                }
                // line 107
                echo "                </td>
            </tr>
            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["stack"] ?? $this->getContext($context, "stack")), "profiles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                    // line 110
                    echo "                <tr class=\"httplug-request-stack\">
                    <td class=\"httplug-plugin-name\">&darr; ";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["profile"], "plugin", array()), "html", null, true);
                    echo " </td>
                    <td class=\"httplug-plugin-name\">&uarr;
                        ";
                    // line 113
                    if ($this->getAttribute($context["profile"], "failed", array())) {
                        // line 114
                        echo "                            <span class=\"httplug-error\">&#9747;</span>
                        ";
                    }
                    // line 116
                    echo "                    </td>
                </tr>
                <tr class=\"httplug-request-stack\">
                    <td>";
                    // line 119
                    echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute($context["profile"], "request", array())));
                    echo "</td>
                    <td>";
                    // line 120
                    echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup($this->getAttribute($context["profile"], "response", array())));
                    echo "</td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "            <tr class=\"httplug-request-stack\">
                <td class=\"httplug-plugin-name\">&#10230; <span class=\"push-right\">HTTP client</span></td>
                <td class=\"httplug-plugin-name\">&uarr;
                    ";
                // line 127
                echo "                        ";
                // line 128
                echo "                    ";
                // line 129
                echo "                </td>
            </tr>
        ";
            }
            // line 132
            echo "    </table>
";
            
            $__internal_0383e7eab141ba5b7c8e073d8bf189fe1236e3631628dfbdc0834e9515890325->leave($__internal_0383e7eab141ba5b7c8e073d8bf189fe1236e3631628dfbdc0834e9515890325_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "HttplugBundle::webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 132,  375 => 129,  373 => 128,  371 => 127,  366 => 123,  357 => 120,  353 => 119,  348 => 116,  344 => 114,  342 => 113,  337 => 111,  334 => 110,  330 => 109,  326 => 107,  322 => 105,  320 => 104,  310 => 96,  308 => 95,  303 => 93,  299 => 92,  290 => 85,  275 => 84,  265 => 79,  256 => 75,  249 => 72,  233 => 70,  230 => 69,  226 => 67,  224 => 66,  220 => 65,  217 => 64,  200 => 63,  194 => 60,  185 => 56,  182 => 55,  177 => 54,  171 => 50,  165 => 49,  157 => 46,  151 => 43,  148 => 42,  146 => 41,  140 => 38,  132 => 36,  130 => 35,  124 => 34,  115 => 31,  111 => 30,  106 => 29,  100 => 28,  92 => 25,  90 => 24,  87 => 23,  79 => 20,  72 => 16,  68 => 14,  66 => 13,  63 => 12,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as macro %}

{% block toolbar %}
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">req.</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Successful requests</b>
                <span class=\"sf-toolbar-status\">{{ collector.successfulStacks|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Failed requests</b>
                <span class=\"sf-toolbar-status {{ collector.failedStacks|length ? 'sf-toolbar-status-red' }}\">{{ collector.failedStacks|length }}</span>
            </div>
        {% endset %}

        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/httplug/style/httplug.css') }}\" />
    <script type=\"text/javascript\" src=\"{{ asset(\"bundles/httplug/script/httplug.js\") }}\"></script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        {% if collector.failedStacks|length %}
            <span class=\"count\">
                <span>{{ collector.failedStacks|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <button class=\"btn push-right\" onclick=\"httplug_toggleBody(this)\" data-label=\"Hide message body\">Show message body</button>

    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.clientStacks(client)|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientStacks(client) %}
                    <h3>
                        Request #{{ loop.index }}
                        {% if stack.failed %}
                            - <span class=\"httplug-error\">Errored</span>
                        {% endif %}
                    </h3>
                    {{ macro.printMessages(stack) }}
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}

    </div>

{% endblock %}

{% macro printMessages(stack) %}
    <table class=\"httplug-request-table\">
        <tr>
            <th width=\"50%\">Request</th>
            <th width=\"50%\">Response</th>
        </tr>

        <tr>
            <td>{{ stack.request|httplug_markup|nl2br }}</td>
            <td>{{ stack.response|httplug_markup|nl2br }}</td>
        </tr>
        {% if stack.profiles %}
            <tr>
                <td colspan=\"2\" style=\"text-align:center\">
                    <button class=\"btn\" onclick=\"httplug_togglePluginStack(this)\" data-label=\"Hide plugin stack\">See plugin stack</button>
                </td>
            </tr>
            <tr class=\"httplug-request-stack\">
                <td class=\"httplug-plugin-name\">&darr; Start </td>
                <td class=\"httplug-plugin-name\">- End
                    {% if stack.failed %}
                        <span class=\"httplug-error\">&#9747;</span>
                    {% endif %}
                </td>
            </tr>
            {% for profile in stack.profiles %}
                <tr class=\"httplug-request-stack\">
                    <td class=\"httplug-plugin-name\">&darr; {{ profile.plugin }} </td>
                    <td class=\"httplug-plugin-name\">&uarr;
                        {% if profile.failed %}
                            <span class=\"httplug-error\">&#9747;</span>
                        {% endif %}
                    </td>
                </tr>
                <tr class=\"httplug-request-stack\">
                    <td>{{ profile.request|httplug_markup|nl2br }}</td>
                    <td>{{ profile.response|httplug_markup|nl2br }}</td>
                </tr>
            {% endfor %}
            <tr class=\"httplug-request-stack\">
                <td class=\"httplug-plugin-name\">&#10230; <span class=\"push-right\">HTTP client</span></td>
                <td class=\"httplug-plugin-name\">&uarr;
                    {#{% if profile.failed %}#}
                        {#<span class=\"httplug-error\">&#9747;</span>#}
                    {#{% endif %}#}
                </td>
            </tr>
        {% endif %}
    </table>
{% endmacro %}
", "HttplugBundle::webprofiler.html.twig", "/var/www/symfony/vendor/php-http/httplug-bundle/Resources/views/webprofiler.html.twig");
    }
}
