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

/* forms/default/data.html.twig */
class __TwigTemplate_650c0db4a0c72b4790c92abdb270f13304aaca009a24b14480d4b25f3aec4a1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_label' => [$this, 'block_field_label'],
            'field_value' => [$this, 'block_field_value'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 44
        echo "
";
        // line 45
        $context["macro"] = $this;
        // line 46
        echo "
";
        // line 47
        echo $context["macro"]->getrender_field(($context["form"] ?? null), $this->getAttribute(($context["form"] ?? null), "fields", []), "");
        echo "

";
    }

    // line 10
    public function block_field($context, array $blocks = [])
    {
        // line 11
        echo "                    <div>
                        ";
        // line 12
        $this->displayBlock('field_label', $context, $blocks);
        // line 15
        echo "
                        ";
        // line 16
        $this->displayBlock('field_value', $context, $blocks);
        // line 33
        echo "                    </div>
                ";
    }

    // line 12
    public function block_field_label($context, array $blocks = [])
    {
        // line 13
        echo "                            <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])));
        echo "</strong>:
                        ";
    }

    // line 16
    public function block_field_value($context, array $blocks = [])
    {
        // line 17
        echo "                            ";
        if (($this->getAttribute(($context["field"] ?? null), "type", []) == "checkboxes")) {
            // line 18
            echo "                                <ul>
                                    ";
            // line 19
            $context["use_keys"] = ($this->getAttribute(($context["field"] ?? null), "use", [], "any", true, true) && ($this->getAttribute(($context["field"] ?? null), "use", []) == "keys"));
            // line 20
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 21
                echo "                                        ";
                $context["index"] = ((($context["use_keys"] ?? null)) ? ($context["key"]) : ($context["value"]));
                // line 22
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), ($context["index"] ?? null), [], "array"));
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                </ul>
                            ";
        } elseif (($this->getAttribute(        // line 25
($context["field"] ?? null), "type", []) == "checkbox")) {
            // line 26
            echo "                                ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_FORM.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_FORM.NO"))));
            echo "
                            ";
        } elseif (($this->getAttribute(        // line 27
($context["field"] ?? null), "type", []) == "select")) {
            // line 28
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), $this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method"), [], "array"));
            echo "
                            ";
        } else {
            // line 30
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))], "method")), "html", null, true));
            echo "
                            ";
        }
        // line 32
        echo "                        ";
    }

    // line 1
    public function getrender_field($__form__ = null, $__fields__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "fields" => $__fields__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["index"] => $context["field"]) {
                // line 5
                echo "        ";
                $context["input"] = $this->getAttribute($context["field"], "input@");
                // line 6
                echo "
        ";
                // line 7
                if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                    // line 8
                    echo "
            ";
                    // line 9
                    if ($this->getAttribute(($context["form"] ?? null), "value", [0 => (($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", []))], "method")) {
                        // line 10
                        echo "                ";
                        $this->displayBlock('field', $context, $blocks);
                        // line 35
                        echo "            ";
                    }
                    // line 36
                    echo "        ";
                } else {
                    // line 37
                    echo "            ";
                    if ($this->getAttribute($context["field"], "fields", [])) {
                        // line 38
                        echo "                ";
                        $context["new_scope"] = (($this->getAttribute($context["field"], "nest_id", [])) ? (((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", [])) . ".")) : (($context["scope"] ?? null)));
                        // line 39
                        echo "                ";
                        echo $context["self"]->getrender_field(($context["form"] ?? null), $this->getAttribute($context["field"], "fields", []), ($context["new_scope"] ?? null));
                        echo "
            ";
                    }
                    // line 41
                    echo "        ";
                }
                // line 42
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 42,  203 => 41,  197 => 39,  194 => 38,  191 => 37,  188 => 36,  185 => 35,  182 => 10,  180 => 9,  177 => 8,  175 => 7,  172 => 6,  169 => 5,  152 => 4,  149 => 3,  146 => 2,  132 => 1,  128 => 32,  122 => 30,  116 => 28,  114 => 27,  109 => 26,  107 => 25,  104 => 24,  95 => 22,  92 => 21,  87 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  69 => 13,  66 => 12,  61 => 33,  59 => 16,  56 => 15,  54 => 12,  51 => 11,  48 => 10,  41 => 47,  38 => 46,  36 => 45,  33 => 44,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro render_field(form, fields, scope) %}
    {% import _self as self %}

    {% for index, field in fields %}
        {% set input = attribute(field, \"input@\") %}

        {% if input is null or input == true %}

            {% if form.value(scope ~ field.name) %}
                {% block field %}
                    <div>
                        {% block field_label %}
                            <strong>{{ field.label|t|e }}</strong>:
                        {% endblock %}

                        {% block field_value %}
                            {% if field.type == 'checkboxes' %}
                                <ul>
                                    {% set use_keys = field.use is defined and field.use == 'keys' %}
                                    {% for key,value in form.value(scope ~ field.name) %}
                                        {% set index = (use_keys ? key : value) %}
                                        <li>{{ field.options[index]|e }}</li>
                                    {% endfor %}
                                </ul>
                            {% elseif field.type == 'checkbox' %}
                                {{ (form.value(scope ~ field.name) == 1) ? \"PLUGIN_FORM.YES\"|t|e : \"PLUGIN_FORM.NO\"|t|e }}
                            {% elseif field.type == 'select' %}
                                {{ field.options[form.value(scope ~ field.name)]|e }}
                            {% else %}
                                {{ string(form.value(scope ~ field.name))|nl2br }}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endif %}
        {% else %}
            {% if field.fields %}
                {% set new_scope = field.nest_id ? scope ~ field.name ~ '.' : scope %}
                {{ self.render_field(form, field.fields, new_scope) }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endmacro %}

{% import _self as macro %}

{{ macro.render_field(form, form.fields, '') }}

", "forms/default/data.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\default\\data.html.twig");
    }
}
