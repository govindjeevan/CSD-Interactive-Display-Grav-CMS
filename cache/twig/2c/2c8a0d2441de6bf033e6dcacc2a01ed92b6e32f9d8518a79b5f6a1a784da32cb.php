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

/* forms/fields/formtask/formtask.html.twig */
class __TwigTemplate_6180f0917c8a5f58b5da463fea3e4385dac7b1db6cecfc1596d6f0fbc5446cfb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/formtask/formtask.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["form"] ?? null), "task", [])) {
            // line 5
            echo "        <input type=\"hidden\" name=\"task\" value=\"";
            echo $this->getAttribute(($context["form"] ?? null), "task", []);
            echo "\" />
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/formtask/formtask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
    {% if form.task %}
        <input type=\"hidden\" name=\"task\" value=\"{{ form.task }}\" />
    {% endif %}
{% endblock %}

", "forms/fields/formtask/formtask.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\fields\\formtask\\formtask.html.twig");
    }
}
