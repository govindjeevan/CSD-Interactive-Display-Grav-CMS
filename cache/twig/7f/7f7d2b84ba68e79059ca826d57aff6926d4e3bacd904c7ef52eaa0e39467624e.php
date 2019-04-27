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

/* partials/instagram-feed.html.twig */
class __TwigTemplate_137d3244fc67bdc54a755a935e1745b5f423b79be89984eba674bba54ff3be5d extends \Twig\Template
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
        if (($context["feed"] ?? null)) {
            // line 2
            echo "<ul class=\"instagram-feed\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["feed"] ?? null), 0, ($context["count"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        <li>
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["item"], "link", []);
                echo "\" target=\"_blank\">
                <img src=\"";
                // line 6
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "images", []), "thumbnail", []), "url", []);
                echo "\" alt=\"\">
            </a>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "</ul>
";
        } else {
            // line 12
            echo "<p>
    Could not load the Instagram feed!
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/instagram-feed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  56 => 10,  46 => 6,  42 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if feed %}
<ul class=\"instagram-feed\">
    {% for item in feed|slice(0, count) %}
        <li>
            <a href=\"{{ item.link }}\" target=\"_blank\">
                <img src=\"{{ item.images.thumbnail.url }}\" alt=\"\">
            </a>
        </li>
    {% endfor %}
</ul>
{% else %}
<p>
    Could not load the Instagram feed!
</p>
{% endif %}", "partials/instagram-feed.html.twig", "C:\\xampp\\htdocs\\grav\\user\\themes\\editorial\\templates\\partials\\instagram-feed.html.twig");
    }
}
