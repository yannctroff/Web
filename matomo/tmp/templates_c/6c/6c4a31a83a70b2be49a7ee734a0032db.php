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

/* @Login/_passwordResetTextEmail.twig */
class __TwigTemplate_924b629e4695777d616903954bef6c04 extends Template
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
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail1", (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 4, $this->source); })()));
        yield "

";
        // line 6
        yield (isset($context["resetUrl"]) || array_key_exists("resetUrl", $context) ? $context["resetUrl"] : (function () { throw new RuntimeError('Variable "resetUrl" does not exist.', 6, $this->source); })());
        yield "

";
        // line 8
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail2");
        yield "

";
        // line 10
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail3");
        yield "

";
        // line 12
        yield (isset($context["cancelUrl"]) || array_key_exists("cancelUrl", $context) ? $context["cancelUrl"] : (function () { throw new RuntimeError('Variable "cancelUrl" does not exist.', 12, $this->source); })());
        yield "

";
        // line 14
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail4");
        yield "

";
        // line 16
        yield $this->env->getFilter('translate')->getCallable()("Login_PleaseNote");
        yield ":

";
        // line 18
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmailAppTokens");
        yield "

";
        // line 20
        yield $this->env->getFilter('translate')->getCallable()("Login_SecurityTip");
        yield ":

";
        // line 22
        yield $this->env->getFilter('translate')->getCallable()("Login_PasswordResetEmail5");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/_passwordResetTextEmail.twig";
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
        return array (  88 => 22,  83 => 20,  78 => 18,  73 => 16,  68 => 14,  63 => 12,  58 => 10,  53 => 8,  48 => 6,  43 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% autoescape false %}
{{ 'General_HelloUser'|translate(login) }}

{{ 'Login_PasswordResetEmail1'|translate(ip) }}

{{ resetUrl }}

{{ 'Login_PasswordResetEmail2'|translate }}

{{ 'Login_PasswordResetEmail3'|translate }}

{{ cancelUrl }}

{{ 'Login_PasswordResetEmail4'|translate }}

{{ 'Login_PleaseNote'|translate }}:

{{ 'Login_PasswordResetEmailAppTokens'|translate }}

{{ 'Login_SecurityTip'|translate }}:

{{ 'Login_PasswordResetEmail5'|translate }}
{% endautoescape %}
", "@Login/_passwordResetTextEmail.twig", "/var/www/matomo/plugins/Login/templates/_passwordResetTextEmail.twig");
    }
}
