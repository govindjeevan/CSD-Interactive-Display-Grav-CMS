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

/* partials/login-form.html.twig */
class __TwigTemplate_3d0c739dd05c49597800cb64bf39421c001e8adb07f3f29cb8279211fcfc8df9 extends \Twig\Template
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
        $this->loadTemplate("partials/login-form.html.twig", "partials/login-form.html.twig", 1, "511220225")->display(twig_array_merge($context, ["title" => "Grav Admin Login"]));
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title: 'Grav Admin Login'} %}

{% block integration %}

    {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
    {% for template in grav.login.getProviderLoginTemplates %}
        {% include template %}
    {% endfor %}

{% endblock %}

{% block form %}
    {% set form = forms['login'] %}

    {% for field in form.fields %}
        {% set value = field.name == 'username' ? username : '' %}
        {% if field.type %}
            <div>
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            </div>
        {% endif %}
    {% endfor %}

    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
    </div>

{% endblock %}

{% endembed %}", "partials/login-form.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-form.html.twig");
    }
}


/* partials/login-form.html.twig */
class __TwigTemplate_3d0c739dd05c49597800cb64bf39421c001e8adb07f3f29cb8279211fcfc8df9___511220225 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'integration' => [$this, 'block_integration'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "partials/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/login.html.twig", "partials/login-form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_integration($context, array $blocks = [])
    {
        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "login", []), "getProviderLoginTemplates", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 7
            echo "        ";
            $this->loadTemplate($context["template"], "partials/login-form.html.twig", 7)->display($context);
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
    }

    // line 12
    public function block_form($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $context["form"] = $this->getAttribute(($context["forms"] ?? null), "login", [], "array");
        // line 14
        echo "
    ";
        // line 15
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 16
            echo "        ";
            $context["value"] = ((($this->getAttribute($context["field"], "name", []) == "username")) ? (($context["username"] ?? null)) : (""));
            // line 17
            echo "        ";
            if ($this->getAttribute($context["field"], "type", [])) {
                // line 18
                echo "            <div>
                ";
                // line 19
                $this->loadTemplate([0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"], "partials/login-form.html.twig", 19)->display($context);
                // line 20
                echo "            </div>
        ";
            }
            // line 22
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
        echo "/forgot\"><i class=\"fa fa-exclamation-circle\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN_FORGOT"), "html", null, true);
        echo "</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGIN_BTN"), "html", null, true);
        echo "</button>
    </div>

";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 26,  223 => 25,  219 => 23,  205 => 22,  201 => 20,  199 => 19,  196 => 18,  193 => 17,  190 => 16,  173 => 15,  170 => 14,  167 => 13,  164 => 12,  159 => 9,  145 => 8,  142 => 7,  124 => 6,  121 => 4,  118 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/login.html.twig' with {title: 'Grav Admin Login'} %}

{% block integration %}

    {# NEW WAY OF INCLUDING 3RD PARTY LOGIN OPTIONS #}
    {% for template in grav.login.getProviderLoginTemplates %}
        {% include template %}
    {% endfor %}

{% endblock %}

{% block form %}
    {% set form = forms['login'] %}

    {% for field in form.fields %}
        {% set value = field.name == 'username' ? username : '' %}
        {% if field.type %}
            <div>
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
            </div>
        {% endif %}
    {% endfor %}

    <div class=\"form-actions primary-accent\">
        <a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN_FORGOT'|tu }}</a>
        <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_ADMIN.LOGIN_BTN'|tu }}</button>
    </div>

{% endblock %}

{% endembed %}", "partials/login-form.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-form.html.twig");
    }
}
