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

/* @Login/_loginFromDifferentCountryHtmlEmail.twig */
class __TwigTemplate_67d7c01887d62a9c4e4c7ed217b5182e extends Template
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
        // line 1
        yield "<p>";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_HelloUser", (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 1, $this->source); })())), "html", null, true);
        yield "</p>
<p>";
        // line 2
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail1"), "html", null, true);
        yield "</p>
<p>";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail2"), "html", null, true);
        yield "</p>
<ul>
    <li>";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_IPAddress"), "html", null, true);
        yield ": ";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</li>
    <li>";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Country"), "html", null, true);
        yield ": ";
        if ((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 6, $this->source); })())) {
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 6, $this->source); })()), "html", null, true);
        } else {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Unknown"), "html", null, true);
        }
        yield "</li>
    <li>";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_TimeOfLogin"), "html", null, true);
        yield ": ";
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["dateTime"]) || array_key_exists("dateTime", $context) ? $context["dateTime"] : (function () { throw new RuntimeError('Variable "dateTime" does not exist.', 7, $this->source); })()), "html", null, true);
        yield " UTC</li>
</ul>

";
        // line 10
        if (((isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 10, $this->source); })()) || (isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "<p>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail3"), "html", null, true);
            yield "</p>
<ul>
";
        }
        // line 14
        yield "
";
        // line 15
        if ((isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "<li>
    ";
            // line 17
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail4"), "html", null, true);
            yield "
    <a href=\"";
            // line 18
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 18, $this->source); })()), "html_attr");
            yield "\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmailLinkResetPassword"), "html", null, true);
            yield "</a>
</li>
";
        }
        // line 21
        yield "
";
        // line 22
        if ((isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "<li>
    ";
            // line 24
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail5"), "html", null, true);
            yield "
    <a href=\"";
            // line 25
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 25, $this->source); })()), "html_attr");
            yield "\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmailLinkEnable2FA"), "html", null, true);
            yield "</a>
</li>
";
        }
        // line 28
        yield "
";
        // line 29
        if (((isset($context["resetPasswordLink"]) || array_key_exists("resetPasswordLink", $context) ? $context["resetPasswordLink"] : (function () { throw new RuntimeError('Variable "resetPasswordLink" does not exist.', 29, $this->source); })()) || (isset($context["enable2FALink"]) || array_key_exists("enable2FALink", $context) ? $context["enable2FALink"] : (function () { throw new RuntimeError('Variable "enable2FALink" does not exist.', 29, $this->source); })()))) {
            // line 30
            yield "</ul>
";
        }
        // line 32
        yield "
<p>";
        // line 33
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LoginFromDifferentCountryEmail6"), "html", null, true);
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/_loginFromDifferentCountryHtmlEmail.twig";
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
        return array (  137 => 33,  134 => 32,  130 => 30,  128 => 29,  125 => 28,  117 => 25,  113 => 24,  110 => 23,  108 => 22,  105 => 21,  97 => 18,  93 => 17,  90 => 16,  88 => 15,  85 => 14,  78 => 11,  76 => 10,  68 => 7,  58 => 6,  52 => 5,  47 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'General_HelloUser'|translate(login) }}</p>
<p>{{ 'Login_LoginFromDifferentCountryEmail1'|translate }}</p>
<p>{{ 'Login_LoginFromDifferentCountryEmail2'|translate }}</p>
<ul>
    <li>{{ 'PrivacyManager_IPAddress'|translate }}: {{ ip }}</li>
    <li>{{ 'UserCountry_Country'|translate }}: {% if country %}{{ country }}{% else %}{{ 'General_Unknown'|translate }}{% endif %}</li>
    <li>{{ 'Login_TimeOfLogin'|translate }}: {{ dateTime }} UTC</li>
</ul>

{% if resetPasswordLink or enable2FALink %}
<p>{{ 'Login_LoginFromDifferentCountryEmail3'|translate }}</p>
<ul>
{% endif %}

{% if resetPasswordLink %}
<li>
    {{ 'Login_LoginFromDifferentCountryEmail4'|translate }}
    <a href=\"{{ resetPasswordLink|escape('html_attr') }}\">{{ 'Login_LoginFromDifferentCountryEmailLinkResetPassword'|translate }}</a>
</li>
{% endif %}

{% if enable2FALink %}
<li>
    {{ 'Login_LoginFromDifferentCountryEmail5'|translate }}
    <a href=\"{{ enable2FALink|escape('html_attr') }}\">{{ 'Login_LoginFromDifferentCountryEmailLinkEnable2FA'|translate }}</a>
</li>
{% endif %}

{% if resetPasswordLink or enable2FALink %}
</ul>
{% endif %}

<p>{{ 'Login_LoginFromDifferentCountryEmail6'|translate }}</p>
", "@Login/_loginFromDifferentCountryHtmlEmail.twig", "/var/www/matomo/plugins/Login/templates/_loginFromDifferentCountryHtmlEmail.twig");
    }
}
