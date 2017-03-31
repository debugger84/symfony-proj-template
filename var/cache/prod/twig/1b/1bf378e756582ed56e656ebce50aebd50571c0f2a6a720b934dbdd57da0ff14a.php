<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e508e471ade6bb4101b255b3c445a7fad387f01563c4807465beb2836de74268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html class=\"\"><head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/bootstrap/dist/css/bootstrap.min.css\">

    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/components-font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/ionicons/css/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/admin-lte/dist/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/admin-lte/dist/css/skins/skin-black.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/iCheck/skins/square/blue.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/jqueryui/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/select2/select2.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonatacore/vendor/select2-bootstrap-css/select2-bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/styles.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\">
    <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/tree.css\">


    <script src=\"/bundles/sonatacore/vendor/jquery/dist/jquery.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jquery.scrollTo/jquery.scrollTo.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/moment/min/moment.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jqueryui/ui/minified/jquery-ui.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jqueryui/ui/minified/i18n/jquery-ui-i18n.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/jquery-form/jquery.form.js\"></script>
    <script src=\"/bundles/sonataadmin/jquery/jquery.confirmExit.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>
    <script src=\"/bundles/sonatacore/vendor/select2/select2.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/admin-lte/dist/js/app.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/iCheck/icheck.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/slimScroll/jquery.slimscroll.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/waypoints/lib/jquery.waypoints.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/waypoints/lib/shortcuts/sticky.min.js\"></script>
    <script src=\"/bundles/sonataadmin/vendor/readmore-js/readmore.min.js\"></script>
    <script src=\"/bundles/sonataadmin/Admin.js\"></script>
    <script src=\"/bundles/sonataadmin/treeview.js\"></script>




    <title>
        Admin

        Dashboard
    </title>
    </head>
<body class=\"sonata-bc skin-black fixed\">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <noscript>
            &lt;div class=\"noscript-warning\"&gt;
            Javascript is disabled in your web browser. Some features will not work properly.
            &lt;/div&gt;
        </noscript>
        <a class=\"logo\" href=\"/app_dev.php/admin/dashboard\"><img src=\"/bundles/sonataadmin/logo_title.png\" alt=\"Sonata Admin\"><span>Sonata Admin</span></a>                                                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">

            <div class=\"navbar-left\">
                <div class=\"hidden-xs\">
                </div>
            </div>

        </nav>
    </header>


    <div class=\"content-wrapper\" style=\"min-height: 205px;margin-left: 0; background-color: transparent\">
        <section class=\"content-header\">

        </section>

        <section class=\"content\">



            <div class=\"sonata-ba-content\">


                <div class=\"row\">

                    <div class=\"col-md-3\"></div>
                    <div class=\"col-md-6 panel\">
                        <div>
                            ";
        // line 90
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 96
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 98
        echo "                        </div>

                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 101
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 102
                echo "                                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                                    ";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                        <div>
                            ";
        // line 109
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 111
        echo "                        </div>

                    </div>
                    <div class=\"col-md-3\"></div>
                </div>




            </div>



        </section>
    </div>
</div>





</body></html>
";
    }

    // line 109
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 110
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 110,  201 => 109,  175 => 111,  173 => 109,  169 => 107,  163 => 106,  154 => 103,  149 => 102,  144 => 101,  140 => 100,  136 => 98,  128 => 96,  122 => 93,  118 => 92,  113 => 91,  111 => 90,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "/var/www/symfony/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
