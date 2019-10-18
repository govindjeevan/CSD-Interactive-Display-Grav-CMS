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

/* partials/nav-user-details.html.twig */
class __TwigTemplate_6ef11a37e81d0fa43e0c5abdb04c994038fc11e224b649db31b74b359fdc6d84 extends \Twig\Template
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
        echo "<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
";
        // line 4
        $context["user"] = $this->getAttribute(($context["admin"] ?? null), "user", []);
        // line 5
        $context["route"] = (($this->getAttribute(($context["grav"] ?? null), "flex_objects", [], "array", true, true)) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "flex_objects", [], "array"), "adminRoute", [0 => ($context["user"] ?? null)], "method")) : (""));
        // line 6
        if ((($context["route"] ?? null) == "")) {
            // line 7
            echo "    ";
            $context["route"] = ("/user/" . $this->getAttribute(($context["user"] ?? null), "username", []));
        }
        // line 9
        echo "
<div id=\"admin-user-details\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . ($context["route"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 12
        $this->loadTemplate("partials/nav-user-avatar.html.twig", "partials/nav-user-details.html.twig", 12)->display($context);
        // line 13
        echo "
        <div class=\"admin-user-names\">
            <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "fullname", []));
        echo " ";
        if (($this->getAttribute(($context["user"] ?? null), "twofa_enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "twofa_enabled", []))) {
            echo "<span class=\"badge\">2FA</span>";
        }
        echo "</h4>
            <h5>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "title", []));
        echo "</h5>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-user-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  59 => 15,  55 => 13,  53 => 12,  49 => 11,  45 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"offline-status\">
    <span><i class=\"fa fa-fw fa-plane\"></i> You are offline</span>
</div>
{% set user = admin.user %}
{% set route = grav['flex_objects'] is defined ? grav['flex_objects'].adminRoute(user) : '' %}
{% if route == '' %}
    {% set route = '/user/' ~ user.username %}
{% endif %}

<div id=\"admin-user-details\">
    <a href=\"{{ base_url_relative ~ route }}\">
        {% include 'partials/nav-user-avatar.html.twig' %}

        <div class=\"admin-user-names\">
            <h4>{{ user.fullname|e }} {% if user.twofa_enabled and config.plugins.admin.twofa_enabled %}<span class=\"badge\">2FA</span>{% endif %}</h4>
            <h5>{{ user.title|e }}</h5>
        </div>
    </a>
</div>
", "partials/nav-user-details.html.twig", "/home/govind/grav-cms/user/plugins/admin/themes/grav/templates/partials/nav-user-details.html.twig");
    }
}
