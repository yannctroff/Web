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

/* @Installation/systemCheckPage.twig */
class __TwigTemplate_0efda2be67766b9373a7962f0ba78c92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SystemCheck"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Installation/systemCheckPage.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "
<div
    vue-entry=\"Installation.SystemCheckPage\"
    error-type=\"";
        // line 8
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_ERROR")), "html", null, true);
        yield "\"
    warning-type=\"";
        // line 9
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_WARNING")), "html", null, true);
        yield "\"
    informational-type=\"";
        // line 10
        yield \Piwik\piwik_escape_filter($this->env, json_encode(Twig\Extension\CoreExtension::constant("Piwik\\Plugins\\Diagnostics\\Diagnostic\\DiagnosticResult::STATUS_INFORMATIONAL")), "html", null, true);
        yield "\"
    system-check-info=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["systemCheckInfo"]) || array_key_exists("systemCheckInfo", $context) ? $context["systemCheckInfo"] : (function () { throw new RuntimeError('Variable "systemCheckInfo" does not exist.', 11, $this->source); })())), "html", null, true);
        yield "\"
    mandatory-results=\"";
        // line 12
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnosticReport"]) || array_key_exists("diagnosticReport", $context) ? $context["diagnosticReport"] : (function () { throw new RuntimeError('Variable "diagnosticReport" does not exist.', 12, $this->source); })()), "getMandatoryDiagnosticResults", [], "method", false, false, false, 12)), "html", null, true);
        yield "\"
    optional-results=\"";
        // line 13
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnosticReport"]) || array_key_exists("diagnosticReport", $context) ? $context["diagnosticReport"] : (function () { throw new RuntimeError('Variable "diagnosticReport" does not exist.', 13, $this->source); })()), "getOptionalDiagnosticResults", [], "method", false, false, false, 13)), "html", null, true);
        yield "\"
    informational-results=\"";
        // line 14
        yield \Piwik\piwik_escape_filter($this->env, json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnosticReport"]) || array_key_exists("diagnosticReport", $context) ? $context["diagnosticReport"] : (function () { throw new RuntimeError('Variable "diagnosticReport" does not exist.', 14, $this->source); })()), "getInformationalResults", [], "method", false, false, false, 14)), "html", null, true);
        yield "\"
    is-installation=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((array_key_exists("isInstallation", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isInstallation"]) || array_key_exists("isInstallation", $context) ? $context["isInstallation"] : (function () { throw new RuntimeError('Variable "isInstallation" does not exist.', 15, $this->source); })()), false)) : (false))), "html", null, true);
        yield "\"
    has-errors=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["diagnosticReport"] ?? null), "hasErrors", [], "method", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["diagnosticReport"] ?? null), "hasErrors", [], "method", false, false, false, 16), null)) : (null))), "html", null, true);
        yield "\"
    has-warnings=\"";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, json_encode(((CoreExtension::getAttribute($this->env, $this->source, ($context["diagnosticReport"] ?? null), "hasWarnings", [], "method", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["diagnosticReport"] ?? null), "hasWarnings", [], "method", false, false, false, 17), null)) : (null))), "html", null, true);
        yield "\"
></div>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Installation/systemCheckPage.twig";
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
        return array (  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  57 => 5,  53 => 4,  48 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}
{% set title %}{{ 'Installation_SystemCheck'|translate }}{% endset %}

{% block content %}

<div
    vue-entry=\"Installation.SystemCheckPage\"
    error-type=\"{{ constant('Piwik\\\\Plugins\\\\Diagnostics\\\\Diagnostic\\\\DiagnosticResult::STATUS_ERROR')|json_encode }}\"
    warning-type=\"{{ constant('Piwik\\\\Plugins\\\\Diagnostics\\\\Diagnostic\\\\DiagnosticResult::STATUS_WARNING')|json_encode }}\"
    informational-type=\"{{ constant('Piwik\\\\Plugins\\\\Diagnostics\\\\Diagnostic\\\\DiagnosticResult::STATUS_INFORMATIONAL')|json_encode }}\"
    system-check-info=\"{{ systemCheckInfo|json_encode }}\"
    mandatory-results=\"{{ diagnosticReport.getMandatoryDiagnosticResults()|json_encode }}\"
    optional-results=\"{{ diagnosticReport.getOptionalDiagnosticResults()|json_encode }}\"
    informational-results=\"{{ diagnosticReport.getInformationalResults()|json_encode }}\"
    is-installation=\"{{ isInstallation|default(false)|json_encode }}\"
    has-errors=\"{{ diagnosticReport.hasErrors()|default(null)|json_encode }}\"
    has-warnings=\"{{ diagnosticReport.hasWarnings()|default(null)|json_encode }}\"
></div>

{% endblock %}
", "@Installation/systemCheckPage.twig", "/var/www/matomo/plugins/Installation/templates/systemCheckPage.twig");
    }
}
