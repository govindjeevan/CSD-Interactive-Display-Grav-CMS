<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_41f9861529923171646116ce1a2d59622bac6248a9fb4046828b2410dc9b42b7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

<div id=\"wrapper\">
    <div id=\"main\">
        <div class=\"inner\">
            ";
        // line 45
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
        </div> <!-- End .inner -->
    </div><!-- End #main -->

";
        // line 79
        $this->displayBlock('sidebar', $context, $blocks);
        // line 82
        echo "

</div> <!--End #wrapper -->
";
        // line 85
        $this->displayBlock('bottom', $context, $blocks);
        // line 88
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 97], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 97], "method");
        // line 19
        echo "    ";
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skel.min.js", 1 => 99], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/util.js", 1 => 98], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["priority" => 97, "group" => "bottom"]], "method");
        // line 27
        echo "    ";
    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        // line 46
        echo "            <header id=\"header\" style=\"padding-top: 10px;\">
            <a style = \"font-size: 70px; font-weight: bold; color: black; text-align: center; padding-top: 0px;\">
            WELCOME TO CSD
            </a>

            </header><!-- End #header -->
            ";
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        // line 54
        echo "            <section>


            ";
        // line 57
        if (($this->getAttribute(($context["page"] ?? null), "title", []) == "HOME")) {
            // line 58
            echo "            ";
            $this->loadTemplate("partials/welcome.html.twig", "partials/base.html.twig", 58)->display($context);
            // line 59
            echo "            ";
        } else {
            // line 60
            echo "            
                <header class=\"main\">
                    <h1>";
            // line 62
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
                </header>
                ";
            // line 64
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "primaryImage", [])) {
                // line 65
                echo "                    ";
                // line 66
                echo "
                    <span class=\"image main\">";
                // line 67
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["primaryImage"] ?? null), "name", []), [], "array"), "html", [], "method");
                echo "</span>
                ";
            }
            // line 69
            echo "                ";
            $this->displayBlock('content', $context, $blocks);
            // line 70
            echo "
            ";
        }
        // line 72
        echo "
            </section><!-- End section -->
            ";
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
    }

    // line 79
    public function block_sidebar($context, array $blocks = [])
    {
        // line 80
        echo "    ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 80)->display($context);
    }

    // line 85
    public function block_bottom($context, array $blocks = [])
    {
        // line 86
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 86,  249 => 85,  244 => 80,  241 => 79,  236 => 69,  230 => 72,  226 => 70,  223 => 69,  218 => 67,  215 => 66,  213 => 65,  211 => 64,  206 => 62,  202 => 60,  199 => 59,  196 => 58,  194 => 57,  189 => 54,  186 => 53,  176 => 46,  173 => 45,  169 => 27,  166 => 26,  163 => 25,  160 => 24,  157 => 23,  154 => 22,  150 => 19,  147 => 18,  144 => 17,  141 => 16,  138 => 15,  135 => 14,  127 => 28,  125 => 22,  119 => 20,  117 => 14,  112 => 12,  107 => 11,  105 => 10,  95 => 7,  92 => 6,  89 => 5,  82 => 88,  80 => 85,  75 => 82,  73 => 79,  67 => 75,  64 => 53,  61 => 45,  53 => 32,  50 => 31,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    {% include 'partials/metadata.html.twig' %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/main.css', 97) %}
        {% do assets.addCss('theme://css/custom.css', 97) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/skel.min.js', 99) %}
        {% do assets.addJs('theme://js/util.js', 98) %}
        {% do assets.addJs('theme://js/main.js', {'priority':97, 'group':'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div id=\"wrapper\">
    <div id=\"main\">
        <div class=\"inner\">
            {#
            {% block header %}
            <header id=\"header\">
                <a class=\"logo\" href=\"{{ base_url == '' ? '/' : base_url }}\"><strong>{{ config.site.title }}</strong> {{theme_config.themeSlogan}}</a>
                {% include 'partials/socialIcons.html.twig' %}
            </header><!-- End #header -->
            {% endblock %}
            #}
            {% block header %}
            <header id=\"header\" style=\"padding-top: 10px;\">
            <a style = \"font-size: 70px; font-weight: bold; color: black; text-align: center; padding-top: 0px;\">
            WELCOME TO CSD
            </a>

            </header><!-- End #header -->
            {% endblock %}
            {% block body %}
            <section>


            {% if page.title == 'HOME' %}
            {% include 'partials/welcome.html.twig' %}
            {% else %}
            
                <header class=\"main\">
                    <h1>{{ page.title }}</h1>
                </header>
                {% if page.header.primaryImage %}
                    {#{% set primaryImage = ((page.header.primaryImage)|first) %}#}

                    <span class=\"image main\">{{ page.media[primaryImage.name].html() }}</span>
                {% endif %}
                {% block content %}{% endblock %}

            {% endif %}

            </section><!-- End section -->
            {% endblock %}

        </div> <!-- End .inner -->
    </div><!-- End #main -->

{% block sidebar %}
    {%  include 'partials/sidebar.html.twig' %}
{% endblock %}


</div> <!--End #wrapper -->
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\partials\\base.html.twig");
    }
}
