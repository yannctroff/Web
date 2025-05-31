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

/* @Login/_passwordResetHtmlEmail.twig */
class __TwigTemplate_ce78caca65ac72a05dca7209ca72adf3 extends Template
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
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail1", (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 2, $this->source); })())), "html", null, true);
        yield "</p>
<p><a href=\"";
        // line 3
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmailLinkReset"), "html", null, true);
        yield "</a></p>
<p>";
        // line 4
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail2"), "html", null, true);
        yield "</p>
<p>";
        // line 5
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail3"), "html", null, true);
        yield "</p>
<p><a href=\"";
        // line 6
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["cancelUrl"]) || array_key_exists("cancelUrl", $context) ? $context["cancelUrl"] : (function () { throw new RuntimeError('Variable "cancelUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmailLinkCancel"), "html", null, true);
        yield "</a></p>
<p>";
        // line 7
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail4"), "html", null, true);
        yield "</p>
<p><strong>";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PleaseNote"), "html", null, true);
        yield ":</strong></p>
<p>";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmailAppTokens"), "html", null, true);
        yield "</p>
<p><strong>";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_SecurityTip"), "html", null, true);
        yield ":</strong></p>
<p>";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail5"), "html", null, true);
        yield "</p>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/_passwordResetHtmlEmail.twig";
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
        return array (  83 => 11,  79 => 10,  75 => 9,  71 => 8,  67 => 7,  61 => 6,  57 => 5,  53 => 4,  47 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'General_HelloUser'|translate(login) }}</p>
<p>{{ 'Login_PasswordResetEmail1'|translate(ip) }}</p>
<p><a href=\"{{ resetUrl }}\">{{ 'Login_PasswordResetEmailLinkReset'|translate }}</a></p>
<p>{{ 'Login_PasswordResetEmail2'|translate }}</p>
<p>{{ 'Login_PasswordResetEmail3'|translate }}</p>
<p><a href=\"{{ cancelUrl }}\">{{ 'Login_PasswordResetEmailLinkCancel'|translate }}</a></p>
<p>{{ 'Login_PasswordResetEmail4'|translate }}</p>
<p><strong>{{ 'Login_PleaseNote'|translate }}:</strong></p>
<p>{{ 'Login_PasswordResetEmailAppTokens'|translate }}</p>
<p><strong>{{ 'Login_SecurityTip'|translate }}:</strong></p>
<p>{{ 'Login_PasswordResetEmail5'|translate }}</p>
", "@Login/_passwordResetHtmlEmail.twig", "/var/www/matomo/plugins/Login/templates/_passwordResetHtmlEmail.twig");
    }
}
