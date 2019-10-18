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

/* blog.html.twig */
class __TwigTemplate_376195119aee9673e9091870a59081fb739f923af0f3f46c65dffdc8700445a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "    <section>
        <header class=\"main\">
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <h2 class=\"posttime\">Posted ";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc($this->getAttribute(($context["page"] ?? null), "date", []), false);
        echo "</h2>
        </header>
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "primaryImage", [])) {
            // line 10
            echo "            ";
            $context["primaryImage"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "primaryImage", []));
            // line 11
            echo "
            <span class=\"image main\">";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute(($context["primaryImage"] ?? null), "name", []), [], "array"), "html", [], "method");
            echo "</span>
        ";
        }
        // line 14
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </section><!-- End section -->
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  72 => 15,  69 => 14,  64 => 12,  61 => 11,  58 => 10,  56 => 9,  51 => 7,  47 => 6,  43 => 4,  40 => 3,  30 => 1,);
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

{% block body %}
    <section>
        <header class=\"main\">
            <h1>{{ page.title }}</h1>
            <h2 class=\"posttime\">Posted {{ page.date|nicetime(false) }}</h2>
        </header>
        {% if page.header.primaryImage %}
            {% set primaryImage = ((page.header.primaryImage)|first) %}

            <span class=\"image main\">{{ page.media[primaryImage.name].html() }}</span>
        {% endif %}
        {% block content %}{{ page.content }}{% endblock %}
    </section><!-- End section -->
{% endblock %}
", "blog.html.twig", "/home/govind/grav-cms/user/themes/editorial/templates/blog.html.twig");
    }
}
