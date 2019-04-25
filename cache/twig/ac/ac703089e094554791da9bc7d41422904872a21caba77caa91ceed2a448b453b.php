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

/* partials/events_sidebar.html.twig */
class __TwigTemplate_631097d32ce737fea3a0eada6f265974266b82a4ac27f241cb4ff5deea2d5a27 extends \Twig\Template
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
        // line 3
        $context["events"] = $this->getAttribute(        // line 4
($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy" => ["type" => "event"]], "dateRange" => ["start" => twig_date_format_filter($this->env, $this->getAttribute(        // line 11
($context["datetools"] ?? null), "today", []), "m/d/Y"), "end" => twig_date_format_filter($this->env, $this->getAttribute(        // line 12
($context["datetools"] ?? null), "parseDate", [0 => "+1 month"], "method"), "m/d/Y")], "order" => ["by" => "date", "dir" => "asc"], "limit" => 10, "pagination" => true]], "method");
        // line 22
        echo "
<aside class=\"events-sidebar\">
  <ul class=\"events-list\">
  ";
        // line 25
        $context["current_header"] = null;
        // line 26
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 27
            echo "      ";
            $context["date_header"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "header", []), "event", []), "start", []), "F d");
            // line 28
            echo "      ";
            if ((($context["date_header"] ?? null) != ($context["current_header"] ?? null))) {
                // line 29
                echo "      <li class=\"event-day\">";
                echo ($context["date_header"] ?? null);
                echo "</li>
      <li class=\"event-dow\">";
                // line 30
                echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "header", []), "event", []), "start", []), "l");
                echo "</li>
      ";
            }
            // line 32
            echo "      <li>
          <time datetime=\"";
            // line 33
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "header", []), "event", []), "start", []), "c");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "header", []), "event", []), "start", []), "g:i a");
            echo "</time>
          <a href=\"";
            // line 34
            echo $this->getAttribute($context["event"], "url", []);
            echo "\" class=\"u-url p-name\">";
            echo $this->getAttribute($context["event"], "title", []);
            echo "</a>
      </li>
      ";
            // line 36
            $context["current_header"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["event"], "header", []), "event", []), "start", []), "F d");
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </ul>
</aside>
";
    }

    public function getTemplateName()
    {
        return "partials/events_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  84 => 37,  82 => 36,  75 => 34,  69 => 33,  66 => 32,  61 => 30,  56 => 29,  53 => 28,  50 => 27,  45 => 26,  43 => 25,  38 => 22,  36 => 12,  35 => 11,  34 => 4,  33 => 3,  30 => 1,);
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
{# get events by taxonomy #}
{% set events =
    page.collection({
      'items': {
        '@taxonomy': {
          'type': 'event',
        }
      },
      'dateRange': {
        'start': datetools.today|date('m/d/Y'),
        'end': datetools.parseDate('+1 month')|date('m/d/Y')
      },
      'order': {
        'by': 'date',
        'dir': 'asc'
      },
      'limit': 10,
      'pagination': true
    })
%}

<aside class=\"events-sidebar\">
  <ul class=\"events-list\">
  {% set current_header = null %}
  {% for event in events %}
      {% set date_header = event.header.event.start|date('F d') %}
      {% if date_header != current_header %}
      <li class=\"event-day\">{{ date_header }}</li>
      <li class=\"event-dow\">{{ event.header.event.start|date('l') }}</li>
      {% endif %}
      <li>
          <time datetime=\"{{ event.header.event.start|date(\"c\") }}\">{{ event.header.event.start|date('g:i a')}}</time>
          <a href=\"{{ event.url }}\" class=\"u-url p-name\">{{ event.title }}</a>
      </li>
      {% set current_header = event.header.event.start|date('F d') %}
  {% endfor %}
  </ul>
</aside>
", "partials/events_sidebar.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\events\\templates\\partials\\events_sidebar.html.twig");
    }
}
