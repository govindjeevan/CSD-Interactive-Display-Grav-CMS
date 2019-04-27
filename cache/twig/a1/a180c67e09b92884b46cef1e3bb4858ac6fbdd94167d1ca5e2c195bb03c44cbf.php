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

/* forms/fields/uniqueid/uniqueid.html.twig */
class __TwigTemplate_c43f0278145d495e5499b29d51286c7533f76645dada0a4af21b045eb5b73dc9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/uniqueid/uniqueid.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        // line 4
        echo "<input type=\"hidden\" name=\"__unique_form_id__\" value=\"";
        echo ((($this->getAttribute(($context["form"] ?? null), "uniqueid", [], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "uniqueid", [], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "uniqueid", [], "method")) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(20)));
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/uniqueid/uniqueid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  29 => 1,);
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
<input type=\"hidden\" name=\"__unique_form_id__\" value=\"{{ form.uniqueid() ?? random_string(20) }}\" />
{% endblock %}", "forms/fields/uniqueid/uniqueid.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\fields\\uniqueid\\uniqueid.html.twig");
    }
}
