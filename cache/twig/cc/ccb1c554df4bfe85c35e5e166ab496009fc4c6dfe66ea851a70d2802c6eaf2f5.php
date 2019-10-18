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
class __TwigTemplate_5f3e031350d2860ae917d5424736b1f1a349a63283f65cab80121d9e9ccce1fb extends \Twig\Template
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
            'content' => [$this, 'block_content'],
            'header_navigation' => [$this, 'block_header_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "</head>
<body>
\t<div id=\"main\">
\t\t";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "
\t\t";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "
\t\t<div id=\"menu\">
\t\t\t";
        // line 38
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 41
        echo "\t\t\t<div class=\"line\"></div>
\t\t</div>
\t</div>
</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
        ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,600,800|Patua+One\" rel=\"stylesheet\">
        
\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t
\t\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => 104], "method");
        // line 18
        echo "        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "\t\t";
    }

    // line 29
    public function block_header($context, array $blocks = [])
    {
        // line 30
        echo "\t\t<div id=\"header\">
\t\t</div>
\t\t";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        // line 35
        echo "\t\t";
    }

    // line 38
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 39
        echo "\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "\t\t\t";
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
        return array (  160 => 40,  157 => 39,  154 => 38,  150 => 35,  147 => 34,  141 => 30,  138 => 29,  134 => 22,  131 => 21,  127 => 18,  124 => 17,  121 => 16,  113 => 23,  111 => 21,  105 => 19,  103 => 16,  96 => 12,  92 => 11,  89 => 10,  87 => 9,  79 => 8,  76 => 7,  73 => 6,  64 => 41,  62 => 38,  58 => 36,  56 => 34,  53 => 33,  51 => 29,  46 => 26,  44 => 6,  38 => 2,  36 => 1,);
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
<html>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,600,800|Patua+One\" rel=\"stylesheet\">
        
\t\t{% block stylesheets %}
            {% do assets.addCss('theme://css/style.css', 104) %}
        {% endblock %}
        {{ assets.css() }}
\t\t
\t\t{% block javascripts %}
\t\t{% endblock %}
\t\t{{ assets.js() }}

    {% endblock head %}
</head>
<body>
\t<div id=\"main\">
\t\t{% block header %}
\t\t<div id=\"header\">
\t\t</div>
\t\t{% endblock %}

\t\t{% block content %}
\t\t{% endblock %}

\t\t<div id=\"menu\">
\t\t\t{% block header_navigation %}
\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t{% endblock %}
\t\t\t<div class=\"line\"></div>
\t\t</div>
\t</div>
</body>
</html>
", "partials/base.html.twig", "/home/govind/grav-cms/user/themes/portfolio/templates/partials/base.html.twig");
    }
}
