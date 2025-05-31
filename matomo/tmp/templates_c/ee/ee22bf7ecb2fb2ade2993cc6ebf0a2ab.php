<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Login/_loginFromDifferentCountryTextEmail.twig */
class __TwigTemplate_f69babf1bc73064babadbda2c40cf356 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield $this->env->getFilter('translate')->getCallable()("General_HelloUser", (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 2, $this->source); })()));
        yield "

";
        // line 4
        yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail1");
        yield "

";
        // line 6
        yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail2");
        yield "

- ";
        // line 8
        yield $this->env->getFilter('translate')->getCallable()("PrivacyManager_IPAddress");
        yield ": ";
        yield (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 8, $this->source); })());
        yield "
- ";
        // line 9
        yield $this->env->getFilter('translate')->getCallable()("UserCountry_Country");
        yield ": ";
        if ((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 9, $this->source); })())) {
            yield (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 9, $this->source); })());
        } else {
            yield $this->env->getFilter('translate')->getCallable()("General_Unknown");
        }
        // line 10
        yield "
- ";
        // line 11
        yield $this->env->getFilter('translate')->getCallable()("Login_TimeOfLogin");
        yield ": ";
        yield (isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 11, $this->source); })());
        yield " UTC
";
        // line 12
        if (((isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 12, $this->source); })()) || (isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 12, $this->source); })()))) {
            // line 13
            yield "
";
            // line 14
            yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail3");
            yield "

";
        }
        // line 17
        if ((isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 17, $this->source); })())) {
            // line 18
            yield "- ";
            yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail4");
            yield " ";
            yield (isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 18, $this->source); })());
            yield "
";
        }
        // line 20
        if ((isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 20, $this->source); })())) {
            // line 21
            yield "- ";
            yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail5");
            yield " ";
            yield (isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 21, $this->source); })());
            yield "
";
        }
        // line 23
        yield "
";
        // line 24
        yield $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail6");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/_loginFromDifferentCountryTextEmail.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 24,  107 => 23,  99 => 21,  97 => 20,  89 => 18,  87 => 17,  81 => 14,  78 => 13,  76 => 12,  70 => 11,  67 => 10,  59 => 9,  53 => 8,  48 => 6,  43 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
{{ 'General_HelloUser'|translate(login) }}

{{ 'Login_LoginFromDifferentCountryEmail1'|translate }}

{{ 'Login_LoginFromDifferentCountryEmail2'|translate }}

- {{ 'PrivacyManager_IPAddress'|translate }}: {{ ip }}
- {{ 'UserCountry_Country'|translate }}: {% if country %}{{ country }}{% else %}{{ 'General_Unknown'|translate }}{% endif %}

- {{ 'Login_TimeOfLogin'|translate }}: {{ dateTime }} UTC
{% if resetPasswordLink or enable2FALink %}

{{ 'Login_LoginFromDifferentCountryEmail3'|translate }}

{% endif %}
{% if resetPasswordLink %}
- {{ 'Login_LoginFromDifferentCountryEmail4'|translate }} {{ resetPasswordLink }}
{% endif %}
{% if enable2FALink %}
- {{ 'Login_LoginFromDifferentCountryEmail5'|translate }} {{ enable2FALink }}
{% endif %}

{{ 'Login_LoginFromDifferentCountryEmail6'|translate }}
{% endautoescape %}
", "@Login/_loginFromDifferentCountryTextEmail.twig", "/var/www/matomo/plugins/Login/templates/_loginFromDifferentCountryTextEmail.twig");
    }
}
