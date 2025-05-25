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

/* @UsersManager/_userInfoChangedEmail.twig */
class __TwigTemplate_6d0262d311861e5d3fe55e7d15502b37 extends Template
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
        yield $this->env->getFilter('translate')->getCallable()("General_HelloUser", (("<strong>" . (isset($context["accountName"]) || array_key_exists("accountName", $context) ? $context["accountName"] : (function () { throw new RuntimeError('Variable "accountName" does not exist.', 1, $this->source); })())) . "</strong>"));
        yield "</p>

";
        // line 3
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 3, $this->source); })()) == "email")) {
            // line 4
            yield "<p>";
            yield $this->env->getFilter('translate')->getCallable()("UsersManager_EmailChangedEmail1", (("<strong>" . (isset($context["newEmail"]) || array_key_exists("newEmail", $context) ? $context["newEmail"] : (function () { throw new RuntimeError('Variable "newEmail" does not exist.', 4, $this->source); })())) . "</strong>"));
            yield ".</p>

<p>";
            // line 6
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_EmailChangedEmail2", (isset($context["deviceDescription"]) || array_key_exists("deviceDescription", $context) ? $context["deviceDescription"] : (function () { throw new RuntimeError('Variable "deviceDescription" does not exist.', 6, $this->source); })()), (isset($context["ipAddress"]) || array_key_exists("ipAddress", $context) ? $context["ipAddress"] : (function () { throw new RuntimeError('Variable "ipAddress" does not exist.', 6, $this->source); })())), "html", null, true);
            yield " ";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_IfThisWasYouIgnoreIfNot"), "html", null, true);
            yield "</p>
";
        } elseif ((        // line 7
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 7, $this->source); })()) == "password")) {
            // line 8
            yield "<p>";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_PasswordChangedEmail", (isset($context["deviceDescription"]) || array_key_exists("deviceDescription", $context) ? $context["deviceDescription"] : (function () { throw new RuntimeError('Variable "deviceDescription" does not exist.', 8, $this->source); })()), (isset($context["ipAddress"]) || array_key_exists("ipAddress", $context) ? $context["ipAddress"] : (function () { throw new RuntimeError('Variable "ipAddress" does not exist.', 8, $this->source); })())), "html", null, true);
            yield "</p>

<p>";
            // line 10
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_IfThisWasYouPasswordChange"), "html", null, true);
            yield "</p>
";
        }
        // line 12
        yield "
<p>";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ThankYouForUsingMatomo"), "html", null, true);
        yield "!
<br/>";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_TheMatomoTeam"), "html", null, true);
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@UsersManager/_userInfoChangedEmail.twig";
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
        return array (  78 => 14,  74 => 13,  71 => 12,  66 => 10,  60 => 8,  58 => 7,  52 => 6,  46 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'General_HelloUser'|translate('<strong>' ~ accountName ~ '</strong>')|raw }}</p>

{% if type == 'email' %}
<p>{{ 'UsersManager_EmailChangedEmail1'|translate('<strong>' ~ newEmail ~ '</strong>')|raw }}.</p>

<p>{{ 'UsersManager_EmailChangedEmail2'|translate(deviceDescription, ipAddress) }} {{ 'UsersManager_IfThisWasYouIgnoreIfNot'|translate }}</p>
{% elseif type == 'password' %}
<p>{{ 'UsersManager_PasswordChangedEmail'|translate(deviceDescription, ipAddress) }}</p>

<p>{{ 'UsersManager_IfThisWasYouPasswordChange'|translate }}</p>
{% endif %}

<p>{{ 'General_ThankYouForUsingMatomo'|translate }}!
<br/>{{ 'General_TheMatomoTeam'|translate }}</p>", "@UsersManager/_userInfoChangedEmail.twig", "/var/www/matomo/plugins/UsersManager/templates/_userInfoChangedEmail.twig");
    }
}
