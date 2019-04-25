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

/* partials/navigation.html.twig */
class __TwigTemplate_13281c9349879727609d248a116d9391ad1d1ae3d031336d4fa9041a282ecdf9 extends \Twig\Template
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
        echo "
";
        // line 28
        echo "
<ul ";
        // line 29
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 30
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
</ul>
";
    }

    // line 2
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 6
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 7
                    echo "            <li>
                ";
                    // line 8
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "dropdown", [], "array"), "enabled", [], "array")) {
                        // line 9
                        echo "                  <a href=\"";
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" class=\"opener ";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                ";
                    } else {
                        // line 11
                        echo "                  <a href=\"";
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" class=\"";
                        echo ($context["active_page"] ?? null);
                        echo "\">
                ";
                    }
                    // line 13
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul>
                    ";
                    // line 16
                    echo $this->getAttribute($this, "nav_loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 20
                    echo "            <li>
                <a href=\"";
                    // line 21
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 22
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 26
                echo "    ";
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  116 => 22,  110 => 21,  107 => 20,  100 => 16,  93 => 13,  85 => 11,  77 => 9,  75 => 8,  72 => 7,  69 => 6,  66 => 5,  62 => 4,  59 => 3,  47 => 2,  40 => 30,  36 => 29,  33 => 28,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% macro nav_loop(page) %}

    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                {% if grav.theme.config['dropdown']['enabled'] %}
                  <a href=\"{{ p.url }}\" class=\"opener {{ active_page }}\">
                {% else %}
                  <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                {% endif %}
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages) }}
</ul>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\partials\\navigation.html.twig");
    }
}
