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

/* partials/event_item.html.twig */
class __TwigTemplate_4e82b6968cd5f2bc6cab9240b75b9f3da19ecdfd9e1200b5febdb99ffd5e3f7a extends \Twig\Template
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
        echo "<article class=\"event-article\">

    <header class=\"event-header\">
      <time class=\"event-date\" datetime=\"";
        // line 4
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "\">
          <span class=\"day\">";
        // line 5
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "start", []), "d");
        echo "</span>
          <span class=\"month\">";
        // line 6
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "events", []), "date_format", []), "translate", [])) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "start", []), "n") - 1))) : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "start", []), "M")));
        echo "</span>
          <span class=\"time\">
              ";
        // line 8
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "start", []), "g:ia");
        echo "&ndash;";
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "end", []), "g:ia");
        echo "
          </span>
          <span class=\"year\">";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "event", []), "start", []), "Y");
        echo "</span>
      </time>

      ";
        // line 13
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 14
        echo "      ";
        if ((($context["image"] ?? null) != null)) {
            // line 15
            echo "          ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 960, 1 => 320], "method"), "html", []);
            echo "
      ";
        }
        // line 17
        echo "
    </header>

    <section class=\"event-content\">
        <h2 class=\"event-title\"><a href=\"";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</a></h2>
        ";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </section>

    <footer class=\"event-footer\">

        ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", [])) {
            // line 28
            echo "            <span class=\"event-tags\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "                <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["event"] ?? null), "url", []), "/");
                echo "/category";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["category"];
                echo "\">";
                echo $context["category"];
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </span>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 36
            echo "            <span class=\"event-tags\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 38
                echo "                <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["event"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </span>
        ";
        }
        // line 42
        echo "
    </footer>

</article>
";
    }

    public function getTemplateName()
    {
        return "partials/event_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  145 => 40,  131 => 38,  127 => 37,  124 => 36,  122 => 35,  119 => 34,  115 => 32,  101 => 30,  97 => 29,  94 => 28,  92 => 27,  84 => 22,  78 => 21,  72 => 17,  66 => 15,  63 => 14,  61 => 13,  55 => 10,  48 => 8,  43 => 6,  39 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"event-article\">

    <header class=\"event-header\">
      <time class=\"event-date\" datetime=\"{{ page.date|date(\"c\") }}\">
          <span class=\"day\">{{ page.header.event.start|date(\"d\") }}</span>
          <span class=\"month\">{{ config.plugins.events.date_format.translate ? 'MONTHS_OF_THE_YEAR'|ta(page.header.event.start|date('n') - 1) : page.header.event.start|date('M') }}</span>
          <span class=\"time\">
              {{ page.header.event.start|date('g:ia') }}&ndash;{{ page.header.event.end|date('g:ia') }}
          </span>
          <span class=\"year\">{{ page.header.event.start|date(\"Y\") }}</span>
      </time>

      {% set image = page.media.images|first %}
      {% if image != null %}
          {{ image.cropZoom(960,320).html }}
      {% endif %}

    </header>

    <section class=\"event-content\">
        <h2 class=\"event-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {{ page.content }}
    </section>

    <footer class=\"event-footer\">

        {% if page.taxonomy.category %}
            <span class=\"event-tags\">
                {% for category in page.taxonomy.category %}
                <a href=\"{{ event.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
                {% endfor %}
            </span>
        {% endif %}

        {% if page.taxonomy.tag %}
            <span class=\"event-tags\">
                {% for tag in page.taxonomy.tag %}
                <a href=\"{{ event.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
                {% endfor %}
            </span>
        {% endif %}

    </footer>

</article>
", "partials/event_item.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\events\\templates\\partials\\event_item.html.twig");
    }
}
