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

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_c783550aeb27a3e1db0592b871c342b7a31c08b74d261de95419384215fd7efd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["config"] = $this->getAttribute(($context["grav"] ?? null), "config", []);
        // line 4
        $context["site_key"] = (($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) ? ($this->getAttribute(($context["field"] ?? null), "recaptcha_site_key", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "site_key", [])));
        // line 5
        $context["action"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", ((twig_trim_filter($this->getAttribute(($context["page"] ?? null), "route", []), "/") . "-") . $this->getAttribute(($context["form"] ?? null), "name", [])));
        // line 6
        $context["formName"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("underscor", $this->getAttribute(($context["form"] ?? null), "name", []));
        // line 7
        $context["theme"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [])))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", [], "any", false, true), "form", [], "any", false, true), "recaptcha", [], "any", false, true), "theme", [])) : ("light"));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_label($context, array $blocks = [])
    {
    }

    // line 11
    public function block_input($context, array $blocks = [])
    {
        // line 12
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "version", []) === 3)) {
            // line 13
            echo "      ";
            // line 14
            echo "      <script src='https://www.google.com/recaptcha/api.js?render=";
            echo ($context["site_key"] ?? null);
            echo "&theme=";
            echo ($context["theme"] ?? null);
            echo "'></script>
      <script>
          jQuery('form').each(function(index, form) {
              form = jQuery(form);

              form.on('submit', function() {
                  event.preventDefault();
                  var form = jQuery(this);
                  grecaptcha.ready(function () {
                      grecaptcha.execute('";
            // line 23
            echo ($context["site_key"] ?? null);
            echo "', {action: '";
            echo ($context["action"] ?? null);
            echo "'}).then(function (token) {
                          form.prepend('<input type=\"hidden\" name=\"data[token]\" value=\"' + token + '\">');
                          form.prepend('<input type=\"hidden\" name=\"data[action]\" value=\"";
            // line 25
            echo ($context["action"] ?? null);
            echo "\">');
                          form.off('submit').submit();
                      });
                  });
              });
          });
      </script>
  ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 32
($context["config"] ?? null), "plugins", []), "form", []), "recaptcha", []), "version", []) == "2-invisible")) {
            // line 33
            echo "      <script>
          function captchaOnloadCallback_";
            // line 34
            echo ($context["formName"] ?? null);
            echo "() {
              var form = jQuery('form#";
            // line 35
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "');
              form.find('[type=\"submit\"]').on('click', function(event) {
                  event.preventDefault();

                  form.append('<div id=\"g-recaptcha-";
            // line 39
            echo ($context["formName"] ?? null);
            echo "\"></div>');
                  var widgetReference = grecaptcha.render('g-recaptcha-";
            // line 40
            echo ($context["formName"] ?? null);
            echo "', {
                      sitekey: '";
            // line 41
            echo ($context["site_key"] ?? null);
            echo "', size: 'invisible',
                      callback: function(/* token */) {
                          form.submit();
                      }
                  });

                  grecaptcha.execute(widgetReference);
              });
          }
      </script>

      <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_";
            // line 52
            echo ($context["formName"] ?? null);
            echo "&hl=";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []);
            echo "&theme=";
            echo ($context["theme"] ?? null);
            echo "\"
              async defer></script>
  ";
        } else {
            // line 55
            echo "    <script>
        var captchaOnloadCallback_";
            // line 56
            echo ($context["formName"] ?? null);
            echo " = function captchaOnloadCallback_";
            echo ($context["formName"] ?? null);
            echo "() {
            grecaptcha.render('g-recaptcha-";
            // line 57
            echo ($context["formName"] ?? null);
            echo "', {
                'sitekey': \"";
            // line 58
            echo ($context["site_key"] ?? null);
            echo "\",
                'callback': captchaValidatedCallback_";
            // line 59
            echo ($context["formName"] ?? null);
            echo ",
                'expired-callback': captchaExpiredCallback_";
            // line 60
            echo ($context["formName"] ?? null);
            echo "
            });
        };

        var captchaValidatedCallback_";
            // line 64
            echo ($context["formName"] ?? null);
            echo " = function captchaValidatedCallback_";
            echo ($context["formName"] ?? null);
            echo "() {};
        var captchaExpiredCallback_";
            // line 65
            echo ($context["formName"] ?? null);
            echo " = function captchaExpiredCallback_";
            echo ($context["formName"] ?? null);
            echo "() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_";
            // line 69
            echo ($context["formName"] ?? null);
            echo "&render=explicit&hl=";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "language", []);
            echo "&theme=";
            echo ($context["theme"] ?? null);
            echo " \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-";
            // line 71
            echo ($context["formName"] ?? null);
            echo "\"></div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  187 => 69,  178 => 65,  172 => 64,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  147 => 56,  144 => 55,  134 => 52,  120 => 41,  116 => 40,  112 => 39,  105 => 35,  101 => 34,  98 => 33,  96 => 32,  86 => 25,  79 => 23,  64 => 14,  62 => 13,  59 => 12,  56 => 11,  51 => 9,  46 => 1,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  30 => 1,);
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

{% set config = grav.config %}
{% set site_key = field.recaptcha_site_key ?: config.plugins.form.recaptcha.site_key %}
{% set action = (page.route|trim('/') ~ '-' ~ form.name)|underscorize %}
{% set formName = form.name|underscorize %}
{% set theme = config.plugins.form.recaptcha.theme ?? 'light' %}

{% block label %}{% endblock %}

{% block input %}
  {% if config.plugins.form.recaptcha.version is same as(3) %}
      {#{% do assets.addJs('https://www.google.com/recaptcha/api.js?render='~site_key) %}#}
      <script src='https://www.google.com/recaptcha/api.js?render={{ site_key }}&theme={{ theme }}'></script>
      <script>
          jQuery('form').each(function(index, form) {
              form = jQuery(form);

              form.on('submit', function() {
                  event.preventDefault();
                  var form = jQuery(this);
                  grecaptcha.ready(function () {
                      grecaptcha.execute('{{ site_key }}', {action: '{{ action }}'}).then(function (token) {
                          form.prepend('<input type=\"hidden\" name=\"data[token]\" value=\"' + token + '\">');
                          form.prepend('<input type=\"hidden\" name=\"data[action]\" value=\"{{ action }}\">');
                          form.off('submit').submit();
                      });
                  });
              });
          });
      </script>
  {% elseif config.plugins.form.recaptcha.version == '2-invisible' %}
      <script>
          function captchaOnloadCallback_{{ formName }}() {
              var form = jQuery('form#{{ form.id }}');
              form.find('[type=\"submit\"]').on('click', function(event) {
                  event.preventDefault();

                  form.append('<div id=\"g-recaptcha-{{ formName }}\"></div>');
                  var widgetReference = grecaptcha.render('g-recaptcha-{{ formName }}', {
                      sitekey: '{{ site_key }}', size: 'invisible',
                      callback: function(/* token */) {
                          form.submit();
                      }
                  });

                  grecaptcha.execute(widgetReference);
              });
          }
      </script>

      <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_{{ formName }}&hl={{ grav.language.language }}&theme={{ theme }}\"
              async defer></script>
  {% else %}
    <script>
        var captchaOnloadCallback_{{ formName }} = function captchaOnloadCallback_{{ formName }}() {
            grecaptcha.render('g-recaptcha-{{ formName }}', {
                'sitekey': \"{{ site_key }}\",
                'callback': captchaValidatedCallback_{{ formName }},
                'expired-callback': captchaExpiredCallback_{{ formName }}
            });
        };

        var captchaValidatedCallback_{{ formName }} = function captchaValidatedCallback_{{ formName }}() {};
        var captchaExpiredCallback_{{ formName }} = function captchaExpiredCallback_{{ formName }}() {
            grecaptcha.reset();
        };
    </script>
    <script src=\"https://www.google.com/recaptcha/api.js?onload=captchaOnloadCallback_{{ formName }}&render=explicit&hl={{ grav.language.language }}&theme={{ theme }} \"
        async defer></script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha-{{ formName }}\"></div>
  {% endif %}
{% endblock %}
", "forms/fields/captcha/captcha.html.twig", "C:\\xampp\\htdocs\\grav\\user\\plugins\\form\\templates\\forms\\fields\\captcha\\captcha.html.twig");
    }
}
