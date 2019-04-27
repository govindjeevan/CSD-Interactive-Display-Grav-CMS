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

/* formdata.html.twig */
class __TwigTemplate_ff451fce3c3ae4b06e70db820ae0d3c160745948596f3a316950ebd66d5b0485 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        // line 3
        if ((null === ($context["form"] ?? null))) {
            // line 4
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "    ";
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 10
        if (($context["form"] ?? null)) {
            // line 11
            echo "        ";
            $this->loadTemplate("partials/form-messages.html.twig", "formdata.html.twig", 11)->display($context);
            // line 12
            echo "
        <p>";
            // line 13
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_FORM.DATA_SUMMARY");
            echo "</p>

        ";
            // line 15
            $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 15)->display($context);
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        <div class=\"notices warning yellow\"><p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_FORM.NO_FORM_DATA");
            echo "</p></div>
    ";
        }
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  72 => 17,  69 => 16,  67 => 15,  62 => 13,  59 => 12,  56 => 11,  54 => 10,  48 => 8,  45 => 7,  40 => 1,  37 => 4,  35 => 3,  29 => 1,);
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

{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% block content %}
    {{ content|raw }}

    {% if form %}
        {% include 'partials/form-messages.html.twig' %}

        <p>{{ 'PLUGIN_FORM.DATA_SUMMARY'|t }}</p>

        {% include \"forms/data.html.twig\" %}
    {% else %}
        <div class=\"notices warning yellow\"><p>{{ 'PLUGIN_FORM.NO_FORM_DATA'|t }}</p></div>
    {% endif %}

{% endblock %}
", "formdata.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\formdata.html.twig");
    }
}
