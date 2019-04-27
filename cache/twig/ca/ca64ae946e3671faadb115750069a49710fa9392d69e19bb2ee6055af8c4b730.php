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

/* partials/sidebar.html.twig */
class __TwigTemplate_63eb48edd1a528e7b9429841dcf61151c831c80fd475d17fe0d1b18111b58202 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (($this->getAttribute(($context["theme_config"] ?? null), "sidebarEnabled", [], "array") == "inactive")) {
            // line 2
            echo "<div id=\"sidebar\" class=\"inactive\">
";
        } else {
            // line 4
            echo "<div id=\"sidebar\">
";
        }
        // line 6
        echo "
    <div class=\"inner\">

        ";
        // line 13
        echo "        <!-- Menu -->
        <nav id=\"menu\">
            <header class=\"major\">
                <!--<h2>Menu</h2>-->
            </header>
            ";
        // line 18
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 18)->display($context);
        // line 19
        echo "        </nav>

        ";
        // line 33
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 33,  54 => 19,  52 => 18,  45 => 13,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if theme_config['sidebarEnabled'] == 'inactive' %}
<div id=\"sidebar\" class=\"inactive\">
{% else %}
<div id=\"sidebar\">
{% endif %}

    <div class=\"inner\">

        {#
        <!-- Search -->
        {% include 'partials/simplesearch_searchbox.html.twig' %}
        #}
        <!-- Menu -->
        <nav id=\"menu\">
            <header class=\"major\">
                <!--<h2>Menu</h2>-->
            </header>
            {% include 'partials/navigation.html.twig' %}
        </nav>

        {#
        <!-- Featured Section -->
        {% include 'partials/featured.html.twig' %}

        <!-- Contact Section -->
        {% include 'partials/contact.html.twig' %}

        <!-- Footer -->
        <footer id=\"footer\">
            <p class=\"copyright\">&copy; {{ site.title|e('html') }}. All rights reserved. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
        </footer>
        #}

    </div>
</div>
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\partials\\sidebar.html.twig");
    }
}
