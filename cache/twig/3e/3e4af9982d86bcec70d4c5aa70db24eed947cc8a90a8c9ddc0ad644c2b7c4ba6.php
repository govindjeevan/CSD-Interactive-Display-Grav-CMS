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

/* forms/fields/editor/editor.html.twig */
class __TwigTemplate_69af2ffa1e8e5a0f27ba4560227b7658bb279949aca2edae01f863c8ddd4e509 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "default", []))) : (($context["value"] ?? null)));
        // line 4
        if ( !($context["codemirrorOptions"] ?? null)) {
            // line 5
            $context["codemirrorOptions"] = twig_array_merge(["mode" => "gfm", "ignore" => [0 => "code", 1 => "preview"]], (($this->getAttribute(($context["field"] ?? null), "codemirror", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", []), [])) : ([])));
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/editor/editor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_field($context, array $blocks = [])
    {
        // line 9
        echo "    ";
        $this->displayBlock('label', $context, $blocks);
        // line 17
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "classes", []), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active\">
                <textarea
                    data-grav-editor=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["codemirror" => ($context["codemirrorOptions"] ?? null)]), "html_attr");
        echo "\"
                    data-grav-editor-mode=\"editor\"
                    name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                    ";
        // line 24
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 25
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 26
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 27
        echo "                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 28
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 29
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 30
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 31
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 32
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 33
        echo "                    ";
        if (!twig_in_filter("preview", $this->getAttribute(($context["codemirrorOptions"] ?? null), "ignore", []))) {
            echo "data-grav-urlpreview=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo ".json\"";
        }
        // line 34
        echo "                >";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), "
"), "html");
        echo "</textarea>
            </div>
            ";
        // line 36
        if (( !$this->getAttribute(($context["field"] ?? null), "resizer", [], "any", true, true) || !twig_in_filter($this->getAttribute(($context["field"] ?? null), "resizer", []), [0 => "off", 1 => "false", 2 => 0]))) {
            echo "<div class=\"grav-editor-resizer\"></div>";
        }
        // line 37
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 38
            echo "                <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                    <span class=\"form-description\">
                        ";
            // line 40
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 41
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                        ";
            } else {
                // line 43
                echo "                            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                        ";
            }
            // line 45
            echo "                    </span>
                </div>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
    }

    // line 9
    public function block_label($context, array $blocks = [])
    {
        // line 10
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "label", [])) {
            // line 11
            echo "            ";
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 12
                echo "                ";
                $context["hint"] = (("data-hint=\"" . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", []))) . "\"");
                // line 13
                echo "            ";
            }
            // line 14
            echo "            <div class=\"form-label form-field hint--bottom\" ";
            echo ($context["hint"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
            echo "</div>
        ";
        }
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/editor/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 16,  194 => 14,  191 => 13,  188 => 12,  185 => 11,  182 => 10,  179 => 9,  173 => 48,  168 => 45,  162 => 43,  156 => 41,  154 => 40,  146 => 38,  143 => 37,  139 => 36,  132 => 34,  123 => 33,  118 => 32,  113 => 31,  108 => 30,  103 => 29,  96 => 28,  91 => 27,  84 => 26,  77 => 25,  71 => 24,  67 => 23,  62 => 21,  54 => 17,  51 => 9,  48 => 8,  43 => 1,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
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

{% set value = (value is null ? field.default|tu : value) %}
{% if not codemirrorOptions %}
    {% set codemirrorOptions = {'mode': 'gfm', 'ignore': ['code', 'preview']}|merge(field.codemirror|default({})) %}
{% endif %}

{% block field %}
    {% block label %}
        {% if field.label %}
            {% if field.help %}
                {% set hint = 'data-hint=\"' ~ field.help|tu|raw ~ '\"' %}
            {% endif %}
            <div class=\"form-label form-field hint--bottom\" {{ hint|raw }}>{{ field.label|tu|raw }}</div>
        {% endif %}
    {% endblock %}
    <div class=\"form-field {{ field.classes|default('') }}\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active\">
                <textarea
                    data-grav-editor=\"{{ {'codemirror': codemirrorOptions} | json_encode|e('html_attr') }}\"
                    data-grav-editor-mode=\"editor\"
                    name=\"{{ (scope ~ field.name)|fieldName }}\"
                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                    {% if 'preview' not in codemirrorOptions.ignore %}data-grav-urlpreview=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"{% endif %}
                >{{ value|join(\"\\n\")|e('html') }}</textarea>
            </div>
            {% if field.resizer is not defined or field.resizer not in ['off', 'false', 0] %}<div class=\"grav-editor-resizer\"></div>{% endif %}
            {% if field.description %}
                <div class=\"form-extra-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                    <span class=\"form-description\">
                        {% if field.markdown %}
                            {{ field.description|tu|markdown(false)|raw }}
                        {% else %}
                            {{ field.description|tu|raw }}
                        {% endif %}
                    </span>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "forms/fields/editor/editor.html.twig", "/home/govind/grav-cms/user/plugins/admin/themes/grav/templates/forms/fields/editor/editor.html.twig");
    }
}
