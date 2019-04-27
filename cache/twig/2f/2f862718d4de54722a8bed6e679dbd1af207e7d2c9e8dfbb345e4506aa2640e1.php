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

/* forms/default/form.html.twig */
class __TwigTemplate_af5da33ac55be1ba3263bb7e704e82691575e78a6102d40194219ccc7b74a5c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields' => [$this, 'block_inner_markup_fields'],
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'process_field' => [$this, 'block_process_field'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'button_classes' => [$this, 'block_button_classes'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [], "method")));
        // line 10
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 11
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", []))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", [])) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "client_side_validation", []), true)) : (true))));
        // line 12
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", []))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "inline_errors", [0 => false], "method")));
        // line 13
        echo "
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 15
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 16
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 17
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
";
        // line 20
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", []))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", [])) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 21
        echo "
";
        // line 22
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 23
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            // line 27
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "browser", []) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", []), "version", []) < 12))) {
                // line 28
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/object.assign.polyfill.js"], "method");
                // line 29
                echo "    ";
            }
            // line 30
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.vendor.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
            // line 31
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/form.min.js", 1 => ["group" => "bottom", "loading" => "defer"]], "method");
        }
        // line 33
        echo "
";
        // line 34
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 37
($context["uri"] ?? null), "route", [0 => true], "method")) . "',
        base_url_relative: '") .         // line 38
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 39
($context["config"] ?? null), "system", []), "param_sep", [])) . "',
        form_nonce: '") . $this->getAttribute(        // line 40
($context["form"] ?? null), "getNonce", [], "method")) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 41
($context["config"] ?? null), "system", []), "session", []), "timeout", [])) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => ["group" => "bottom"]], "method");
        // line 45
        echo "
<form name=\"";
        // line 46
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
      action=\"";
        // line 47
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 48
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 49
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 50
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 53
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        // line 54
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", [])) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 55
        echo ">

  ";
        // line 57
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 58
        echo "
  ";
        // line 59
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 60
        echo "  ";
        $context["context"] = (($context["context"]) ?? (($context["data"] ?? null)));
        // line 61
        echo "
  ";
        // line 62
        $this->displayBlock('inner_markup_fields', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 81)->display($context);
        // line 82
        echo "  ";
        $this->loadTemplate("forms/fields/formtask/formtask.html.twig", "forms/default/form.html.twig", 82)->display($context);
        // line 83
        echo "
  ";
        // line 84
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 85
        echo "
  ";
        // line 86
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 89
        echo "
  ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 91
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 92
            echo "          ";
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 93
                echo "              <a href=\"";
                echo (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
                echo "\">
          ";
            }
            // line 95
            echo "          <button
                ";
            // line 96
            if ($this->getAttribute($context["button"], "id", [])) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", []);
                echo "\"";
            }
            // line 97
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 100
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", [])) {
                echo "disabled=\"disabled\"";
            }
            // line 101
            echo "
                type=\"";
            // line 102
            echo (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit"));
            echo "\"

                ";
            // line 104
            if ($this->getAttribute($context["button"], "task", [])) {
                // line 105
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", []);
                echo "\"
                ";
            }
            // line 107
            echo "            >
              ";
            // line 108
            if ($this->getAttribute($context["button"], "html", [])) {
                // line 109
                echo "                ";
                echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit");
                echo "
              ";
            } else {
                // line 111
                echo "                ";
                echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit");
                echo "
              ";
            }
            // line 113
            echo "          </button>
          ";
            // line 114
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 115
                echo "              </a>
          ";
            }
            // line 117
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 118
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
  ";
        // line 120
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 123
        echo "
  ";
        // line 124
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 124)->display($context);
        // line 125
        echo "
  ";
        // line 126
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc(((($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method")) : ("form")), ((($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method")) : ("form-nonce")));
        echo "
</form>

";
        // line 129
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", []), "dropzone", []), "enabled", [])) {
            // line 130
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 131
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 131)->display($context);
            // line 132
            echo "</div>
";
        }
    }

    // line 50
    public function block_form_classes($context, array $blocks = [])
    {
        // line 51
        echo "      class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", []);
        echo "\"
      ";
    }

    // line 57
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 62
    public function block_inner_markup_fields($context, array $blocks = [])
    {
        // line 63
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
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
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 64
            echo "    ";
            $context["field_name"] = ((($this->getAttribute($context["field"], "name", [], "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", [])))) ? ($this->getAttribute($context["field"], "name", [])) : ($context["field_name"]));
            // line 65
            echo "    ";
            if (($context["field_name"] &&  !$this->getAttribute($this->getAttribute($context["field"], "validate", []), "ignore", []))) {
                // line 66
                if ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["field_name"]) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ".") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                    // line 67
                    $context["field_name"] = twig_slice($this->env, $context["field_name"], 1, null);
                    // line 68
                    echo "        ";
                    $context["field"] = twig_array_merge($context["field"], ["name" => $context["field_name"]]);
                    // line 69
                    echo "      ";
                }
                // line 70
                echo "
      ";
                // line 71
                $context["value"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => $context["field_name"]], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => $context["field_name"]], "method")));
                // line 72
                echo "      ";
                $this->displayBlock('inner_markup_field_open', $context, $blocks);
                // line 73
                echo "      ";
                $this->displayBlock('process_field', $context, $blocks);
                // line 76
                echo "      ";
                $this->displayBlock('inner_markup_field_close', $context, $blocks);
                // line 77
                echo "    ";
            }
            // line 78
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  ";
    }

    // line 72
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
    }

    // line 73
    public function block_process_field($context, array $blocks = [])
    {
        // line 74
        echo "        ";
        $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = null;
        try {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 =             $this->loadTemplate((((("forms/fields/" . $this->getAttribute(($context["field"] ?? null), "type", [])) . "/") . $this->getAttribute(($context["field"] ?? null), "type", [])) . ".html.twig"), "forms/default/form.html.twig", 74);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) {
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4->display($context);
        }
        // line 75
        echo "      ";
    }

    // line 76
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
    }

    // line 84
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 86
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 87
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 97
    public function block_button_classes($context, array $blocks = [])
    {
        // line 98
        echo "                class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", []);
        echo "\"
                ";
    }

    // line 120
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 121
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 121,  504 => 120,  495 => 98,  492 => 97,  485 => 87,  482 => 86,  477 => 84,  472 => 76,  468 => 75,  457 => 74,  454 => 73,  449 => 72,  445 => 79,  431 => 78,  428 => 77,  425 => 76,  422 => 73,  419 => 72,  417 => 71,  414 => 70,  411 => 69,  408 => 68,  406 => 67,  404 => 66,  401 => 65,  398 => 64,  380 => 63,  377 => 62,  372 => 57,  363 => 51,  360 => 50,  354 => 132,  352 => 131,  349 => 130,  347 => 129,  341 => 126,  338 => 125,  336 => 124,  333 => 123,  331 => 120,  328 => 119,  314 => 118,  309 => 117,  305 => 115,  303 => 114,  300 => 113,  294 => 111,  288 => 109,  286 => 108,  283 => 107,  277 => 105,  275 => 104,  270 => 102,  267 => 101,  262 => 100,  259 => 97,  253 => 96,  250 => 95,  244 => 93,  241 => 92,  234 => 91,  217 => 90,  214 => 89,  212 => 86,  209 => 85,  207 => 84,  204 => 83,  201 => 82,  199 => 81,  196 => 80,  194 => 62,  191 => 61,  188 => 60,  186 => 59,  183 => 58,  181 => 57,  177 => 55,  172 => 54,  167 => 53,  164 => 50,  158 => 49,  152 => 48,  148 => 47,  144 => 46,  141 => 45,  136 => 41,  134 => 40,  132 => 39,  130 => 38,  128 => 37,  124 => 34,  121 => 33,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  103 => 26,  100 => 25,  96 => 23,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  79 => 17,  76 => 16,  73 => 15,  69 => 14,  66 => 13,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set blueprints = blueprints ?? form.blueprint() %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce() ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom'}) %}

<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
      {% if form.novalidate %}novalidate{% endif %}
      {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% set data = data ?? form.data %}
  {% set context = context ?? data %}

  {% block inner_markup_fields %}
  {% for field_name, field in form.fields %}
    {% set field_name = field.name ?? field_name %}
    {% if field_name and not field.validate.ignore %}
      {%- if field_name starts with '.' -%}
        {% set field_name = field_name[1:] %}
        {% set field = field|merge({ name: field_name }) %}
      {% endif %}

      {% set value = form ? form.value(field_name) : data.value(field_name) %}
      {% block inner_markup_field_open %}{% endblock %}
      {% block process_field %}
        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
      {% endblock %}
      {% block inner_markup_field_close %}{% endblock %}
    {% endif %}
  {% endfor %}
  {% endblock %}

  {% include \"forms/fields/formname/formname.html.twig\" %}
  {% include \"forms/fields/formtask/formtask.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
              {% if button.html %}
                {{ button.value|t|default('Submit')|raw }}
              {% else %}
                {{ button.value|t|default('Submit') }}
              {% endif %}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}

  {{ nonce_field(form.getNonceAction() ?? 'form', form.getNonceName() ?? 'form-nonce')|raw }}
</form>

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}
