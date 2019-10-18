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

/* partials/stylesheets.html.twig */
class __TwigTemplate_8e1fe47e9de93a0b7004c7c39c242c48594f2cda1075ddc2ec9c167215c5ed6e extends \Twig\Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/nucleus.css")], "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/template.css")], "method");
        // line 3
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["preset_url"] ?? null) . "/css-compiled/preset.css")], "method");
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "google_fonts", [])) {
            // line 5
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/fonts.css")], "method");
        } else {
            // line 7
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css-compiled/simple-fonts.css")], "method");
        }
        // line 9
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/fork-awesome.min.css")], "method");
        // line 10
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/chartist.min.css")], "method");
        // line 11
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/selectize.min.css")], "method");
        // line 12
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/hint.base.min.css")], "method");
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/iconpicker.css")], "method");
        // line 14
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 15
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/nucleus-ie9.css")], "method");
            // line 16
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/pure-0.5.0/grids-min.css")], "method");
        }
    }

    public function getTemplateName()
    {
        return "partials/stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 9,  42 => 7,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.addCss(theme_url~'/css-compiled/nucleus.css') %}
{% do assets.addCss(theme_url~'/css-compiled/template.css') %}
{% do assets.addCss(preset_url~'/css-compiled/preset.css') %}
{% if config.plugins.admin.google_fonts %}
    {% do assets.addCss(theme_url~'/css-compiled/fonts.css') %}
{% else %}
    {% do assets.addCss(theme_url~'/css-compiled/simple-fonts.css') %}
{% endif %}
{% do assets.addCss(theme_url~'/css/fork-awesome.min.css') %}
{% do assets.addCss(theme_url~'/css/chartist.min.css') %}
{% do assets.addCss(theme_url~'/css/selectize.min.css') %}
{% do assets.addCss(theme_url~'/css/hint.base.min.css') %}
{% do assets.addCss(theme_url~'/css/iconpicker.css') %}
{% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
    {% do assets.addCss(theme_url~'/css/nucleus-ie9.css') %}
    {% do assets.addCss(theme_url~'/css/pure-0.5.0/grids-min.css') %}
{% endif %}
", "partials/stylesheets.html.twig", "/home/govind/grav-cms/user/plugins/admin/themes/grav/templates/partials/stylesheets.html.twig");
    }
}
