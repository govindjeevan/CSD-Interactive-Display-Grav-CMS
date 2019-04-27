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

/* simplesearch_results.html.twig */
class __TwigTemplate_6f0bec6128c188298132fed44f3bb6375c98ca83c2b3207e7e4a2dd41fb114d7 extends \Twig\Template
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
        return "partials/simplesearch_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/simplesearch_base.html.twig", "simplesearch_results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"content-padding simplesearch\">
    <div class=\"center\">
        ";
        // line 6
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "simplesearch_results.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <p>
        ";
        // line 10
        if (($context["query"] ?? null)) {
            // line 11
            echo "            ";
            $context["count"] = ((($context["search_results"] ?? null)) ? ($this->getAttribute(($context["search_results"] ?? null), "count", [])) : (0));
            // line 12
            echo "            ";
            if ((($context["count"] ?? null) == 1)) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR", twig_escape_filter($this->env, ($context["query"] ?? null)));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL", twig_escape_filter($this->env, ($context["query"] ?? null)), ($context["count"] ?? null));
                echo "
            ";
            }
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </p>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["search_results"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 20
            echo "        ";
            $this->loadTemplate("partials/simplesearch_item.html.twig", "simplesearch_results.html.twig", 20)->display(twig_array_merge($context, ["page" => $context["page"]]));
            // line 21
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "simplesearch_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 22,  99 => 21,  96 => 20,  79 => 19,  76 => 18,  73 => 17,  67 => 15,  61 => 13,  58 => 12,  55 => 11,  53 => 10,  48 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/simplesearch_base.html.twig' %}

{% block content %}
    <div class=\"content-padding simplesearch\">
    <div class=\"center\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>

    <p>
        {% if query %}
            {% set count = search_results ? search_results.count : 0 %}
            {% if count == 1 %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_SINGULAR\"|t(query|e)|raw }}
            {% else %}
                {{ \"PLUGIN_SIMPLESEARCH.SEARCH_RESULTS_SUMMARY_PLURAL\"|t(query|e, count)|raw }}
            {% endif %}
        {% endif %}
    </p>
    {% for page in search_results %}
        {% include 'partials/simplesearch_item.html.twig' with {'page':page} %}
    {% endfor %}
    </div>
{% endblock %}
", "simplesearch_results.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\simplesearch_results.html.twig");
    }
}
