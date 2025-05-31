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

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_d727fecd489ec96c56ff1d89343af7d3 extends Template
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
        yield "<script type=\"text/javascript\">
    \$(document).ready(function () {
        window.Vue.nextTick(function () {
            require('piwik/UI/DataTable').initNewDataTables(";
        // line 4
        yield json_encode((isset($context["reportId"]) || array_key_exists("reportId", $context) ? $context["reportId"] : (function () { throw new RuntimeError('Variable "reportId" does not exist.', 4, $this->source); })()));
        yield ");
        });
    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
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
        return array (  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function () {
        window.Vue.nextTick(function () {
            require('piwik/UI/DataTable').initNewDataTables({{ reportId|json_encode|raw }});
        });
    });
</script>
", "@CoreHome/_dataTableJS.twig", "/var/www/matomo/plugins/CoreHome/templates/_dataTableJS.twig");
    }
}
