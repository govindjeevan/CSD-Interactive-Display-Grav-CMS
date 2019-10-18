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

/* partials/welcome.html.twig */
class __TwigTemplate_5816cdcfb85afe83e0f8850a81d0e2c1e600d80753722d424592450bbd31301d extends \Twig\Template
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
        echo "<style>

.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 150px;
  margin: 1rem;
  position: relative;
  width: 150px;
  padding: 5px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.image img{
    max-width:120px;
    height: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 10px;
}

</style>

";
        // line 49
        echo "
<ul ";
        // line 50
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 51
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
</ul>
";
    }

    // line 34
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "
    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 37
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 38
                echo "                <a href=\"";
                echo $this->getAttribute($context["p"], "url", []);
                echo "\" class=\"card card-1 ";
                echo ($context["active_page"] ?? null);
                echo "\">
                    ";
                // line 39
                echo $this->getAttribute($context["p"], "menu", []);
                echo "
                ";
                // line 40
                if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "primaryImage", [])) {
                    // line 41
                    echo "                    ";
                    $context["primaryImage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", []), "primaryImage", []));
                    // line 42
                    echo "
                    <span class=\"image main\">";
                    // line 43
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", []), $this->getAttribute(($context["primaryImage"] ?? null), "name", []), [], "array"), "html", [], "method");
                    echo "</span>
                ";
                }
                // line 45
                echo "
                </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
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
        return "partials/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 45,  120 => 43,  117 => 42,  114 => 41,  112 => 40,  108 => 39,  101 => 38,  98 => 37,  94 => 36,  91 => 35,  79 => 34,  72 => 51,  68 => 50,  65 => 49,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>

.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  height: 150px;
  margin: 1rem;
  position: relative;
  width: 150px;
  padding: 5px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.image img{
    max-width:120px;
    height: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    padding-top: 10px;
}

</style>

{% macro nav_loop(page) %}

    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                <a href=\"{{ p.url }}\" class=\"card card-1 {{ active_page }}\">
                    {{ p.menu }}
                {% if p.header.primaryImage %}
                    {% set primaryImage = ((p.header.primaryImage)|first) %}

                    <span class=\"image main\">{{ p.media[primaryImage.name].html() }}</span>
                {% endif %}

                </a>
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages) }}
</ul>
", "partials/welcome.html.twig", "/home/govind/grav-cms/user/themes/editorial/templates/partials/welcome.html.twig");
    }
}
