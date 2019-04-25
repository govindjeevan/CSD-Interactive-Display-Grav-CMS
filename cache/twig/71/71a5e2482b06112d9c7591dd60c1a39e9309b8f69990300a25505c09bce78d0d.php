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

/* partials/socialIcons.html.twig */
class __TwigTemplate_2fdf5fd7f08ab17dc4fdd42404cbb9a9070ecffb3e30fa55682ec8f036de98f7 extends \Twig\Template
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
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<ul class=\"icons\">
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "twitter", [])) {
            echo "<li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "twitter", []);
            echo "\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>";
        }
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "facebook", [])) {
            echo "<li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "facebook", []);
            echo "\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>";
        }
        // line 5
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "snap", [])) {
            echo "<li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "snap", []);
            echo "\" class=\"icon fa-snapchat-ghost\"><span class=\"label\">Snapchat</span></a></li>";
        }
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "instagram", [])) {
            echo "<li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "instagram", []);
            echo "\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "medium", [])) {
            echo "<li><a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "medium", []);
            echo "\" class=\"icon fa-medium\"><span class=\"label\">Medium</span></a></li>";
        }
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/socialIcons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  62 => 7,  55 => 6,  48 => 5,  41 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<ul class=\"icons\">
    {% if theme_config.social.twitter %}<li><a href=\"{{theme_config.social.twitter}}\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>{% endif %}
    {% if theme_config.social.facebook %}<li><a href=\"{{theme_config.social.facebook}}\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>{% endif %}
    {% if theme_config.social.snap %}<li><a href=\"{{theme_config.social.snap}}\" class=\"icon fa-snapchat-ghost\"><span class=\"label\">Snapchat</span></a></li>{% endif %}
    {% if theme_config.social.instagram %}<li><a href=\"{{theme_config.social.instagram}}\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>{% endif %}
    {% if theme_config.social.medium %}<li><a href=\"{{theme_config.social.medium}}\" class=\"icon fa-medium\"><span class=\"label\">Medium</span></a></li>{% endif %}
</ul>", "partials/socialIcons.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\partials\\socialIcons.html.twig");
    }
}
