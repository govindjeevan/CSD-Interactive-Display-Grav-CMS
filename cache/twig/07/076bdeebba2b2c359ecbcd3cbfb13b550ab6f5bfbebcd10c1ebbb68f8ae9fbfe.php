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

/* default.html.twig */
class __TwigTemplate_d76b196f6258ae7a684808094240d1198f170d6d9619e5bf0d2274f0381f897d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        // line 4
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/theme.js"], "method");
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "<div id=\"content\">

\t";
        // line 10
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 11
        echo "
\t<div class=\"post";
        // line 12
        if (($context["image"] ?? null)) {
            echo " left";
        }
        echo "\">
\t\t";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t</div>

\t";
        // line 16
        if (($context["image"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"right-picture\" style=\"background-image:url('";
            echo $this->getAttribute(($context["image"] ?? null), "url", []);
            echo "')\"></div>
\t";
        }
        // line 19
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 17,  72 => 16,  66 => 13,  60 => 12,  57 => 11,  55 => 10,  51 => 8,  48 => 7,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block javascripts %}
\t{% do assets.addJs('theme://js/theme.js') %}
{% endblock %}

{% block content %}
<div id=\"content\">

\t{% set image = page.media.images|first %}

\t<div class=\"post{% if image %} left{% endif %}\">
\t\t{{ page.content }}
\t</div>

\t{% if image %}
\t\t<div class=\"right-picture\" style=\"background-image:url('{{ image.url }}')\"></div>
\t{% endif %}

</div>
{% endblock %}
", "default.html.twig", "/home/govind/grav-cms/user/themes/portfolio/templates/default.html.twig");
    }
}
