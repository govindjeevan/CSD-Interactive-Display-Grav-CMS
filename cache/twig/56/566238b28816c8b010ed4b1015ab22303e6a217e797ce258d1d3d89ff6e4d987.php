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

/* event.html.twig */
class __TwigTemplate_91c267fa793998e30b8a328cb62c63b8586ccf55620574b74b5327d32ddaead6 extends \Twig\Template
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
        $this->loadTemplate("event.html.twig", "event.html.twig", 1, "752549903")->display($context);
    }

    public function getTemplateName()
    {
        return "event.html.twig";
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
        return new Source("{% embed 'partials/base.html.twig' %}

{% block content %}

<div class=\"event-container\">

\t<section class=\"event-listing\">

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t{% include 'partials/event_item.html.twig' with {'event':page.parent, 'truncate':false, 'single':true} %}

\t</section>

\t{% include 'partials/events_sidebar.html.twig' with {'page':page.parent} %}

</div>

{% endblock %}

{% endembed %}
", "event.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\events\\templates\\event.html.twig");
    }
}


/* event.html.twig */
class __TwigTemplate_91c267fa793998e30b8a328cb62c63b8586ccf55620574b74b5327d32ddaead6___752549903 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
<div class=\"event-container\">

\t<section class=\"event-listing\">

\t\t";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 10
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "event.html.twig", 10)->display($context);
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "
\t\t";
        // line 13
        $this->loadTemplate("partials/event_item.html.twig", "event.html.twig", 13)->display(twig_array_merge($context, ["event" => $this->getAttribute(($context["page"] ?? null), "parent", []), "truncate" => false, "single" => true]));
        // line 14
        echo "
\t</section>

\t";
        // line 17
        $this->loadTemplate("partials/events_sidebar.html.twig", "event.html.twig", 17)->display(twig_array_merge($context, ["page" => $this->getAttribute(($context["page"] ?? null), "parent", [])]));
        // line 18
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 18,  133 => 17,  128 => 14,  126 => 13,  123 => 12,  120 => 11,  117 => 10,  115 => 9,  108 => 4,  105 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% block content %}

<div class=\"event-container\">

\t<section class=\"event-listing\">

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}

\t\t{% include 'partials/event_item.html.twig' with {'event':page.parent, 'truncate':false, 'single':true} %}

\t</section>

\t{% include 'partials/events_sidebar.html.twig' with {'page':page.parent} %}

</div>

{% endblock %}

{% endembed %}
", "event.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\events\\templates\\event.html.twig");
    }
}
