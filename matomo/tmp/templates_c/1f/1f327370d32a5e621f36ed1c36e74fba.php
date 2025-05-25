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

/* @Login/resetPassword.twig */
class __TwigTemplate_15e82c1e68607e845b0d27fb9c43678a extends Template
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
        if ((array_key_exists("infoMessage", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["infoMessage"]) || array_key_exists("infoMessage", $context) ? $context["infoMessage"] : (function () { throw new RuntimeError('Variable "infoMessage" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "    <p class=\"message\">";
            yield \Piwik\piwik_escape_filter($this->env, (isset($context["infoMessage"]) || array_key_exists("infoMessage", $context) ? $context["infoMessage"] : (function () { throw new RuntimeError('Variable "infoMessage" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "</p>
";
        }
        // line 4
        yield from         $this->loadTemplate("@Login/_formErrors.twig", "@Login/resetPassword.twig", 4)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Login/resetPassword.twig";
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
        return array (  46 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if infoMessage is defined and infoMessage is not empty %}
    <p class=\"message\">{{ infoMessage }}</p>
{% endif %}
{% include '@Login/_formErrors.twig' %}", "@Login/resetPassword.twig", "/var/www/matomo/plugins/Login/templates/resetPassword.twig");
    }
}
