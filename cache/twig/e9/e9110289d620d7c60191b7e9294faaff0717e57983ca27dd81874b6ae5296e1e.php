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

/* forms/fields/text/text.html.twig */
class __TwigTemplate_b9488fdf4ad1861955195aeaa43c1230f898e2c25220b67e165561ce29be9cca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/text/text.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_prepend($context, array $blocks = [])
    {
        // line 4
        if ($this->getAttribute(($context["field"] ?? null), "prepend", [])) {
            // line 5
            echo "    <div class=\"form-input-addon form-input-prepend\">";
            // line 6
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "prepend", []));
            // line 7
            echo "</div>
";
        }
    }

    // line 11
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 12
        echo "    type=\"text\"
    ";
        // line 13
        if ($this->getAttribute(($context["field"] ?? null), "size", [])) {
            echo "size=\"";
            echo $this->getAttribute(($context["field"] ?? null), "size", []);
            echo "\"";
        }
        // line 14
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "min", [], "any", true, true))) {
            echo "minlength=\"";
            echo (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "minlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])));
            echo "\"";
        }
        // line 15
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "max", [], "any", true, true))) {
            echo "maxlength=\"";
            echo (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "maxlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])));
            echo "\"";
        }
        // line 16
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    // line 19
    public function block_append($context, array $blocks = [])
    {
        // line 20
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "append", [])) {
            // line 21
            echo "        <div class=\"form-input-addon form-input-append\">";
            // line 22
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "append", []));
            // line 23
            echo "</div>
    ";
        }
    }

    // line 27
    public function block_input($context, array $blocks = [])
    {
        // line 28
        if (($this->getAttribute(($context["field"] ?? null), "prepend", []) || $this->getAttribute(($context["field"] ?? null), "append", []))) {
            // line 29
            echo "    ";
            $context["field"] = twig_array_merge(($context["field"] ?? null), ["wrapper_classes" => "form-input-addon-wrapper"]);
        }
        // line 31
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/text/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  111 => 29,  109 => 28,  106 => 27,  100 => 23,  98 => 22,  96 => 21,  93 => 20,  90 => 19,  83 => 16,  76 => 15,  69 => 14,  63 => 13,  60 => 12,  57 => 11,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  42 => 3,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block prepend %}
{% if field.prepend %}
    <div class=\"form-input-addon form-input-prepend\">
        {{- field.prepend|t|raw -}}
    </div>
{% endif %}
{% endblock %}

{% block input_attributes %}
    type=\"text\"
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}

{% block append %}
    {% if field.append %}
        <div class=\"form-input-addon form-input-append\">
            {{- field.append|t|raw -}}
        </div>
    {% endif %}
{% endblock %}

{% block input %}
{% if field.prepend or field.append %}
    {% set field = field|merge({'wrapper_classes': 'form-input-addon-wrapper'}) %}
{% endif %}
{{ parent() }}
{% endblock %}
", "forms/fields/text/text.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\fields\\text\\text.html.twig");
    }
}
