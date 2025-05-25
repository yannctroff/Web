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

/* @CoreAdminHome/trackingCodeGenerator.twig */
class __TwigTemplate_b16867132a12ab0dfd89ea345360e275 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        // line 8
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/trackingCodeGenerator.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
";
        return; yield '';
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        yield "
    <div class=\"card\">
        <div class=\"card-content\">
            <h2 vue-entry=\"CoreHome.EnrichedHeadline\"
                help-url=\"";
        // line 15
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/docs/tracking-api/"), "html", null, true);
        yield "\"
                rate=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        yield "</h2>
            <p style=\"padding-left: 0;\">";
        // line 17
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCodeIntro"), "html", null, true);
        yield "</p>
        </div>
        <div class=\"card-action\">
            ";
        // line 20
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_GoTo2"), "html", null, true);
        yield ":
            <a href=\"#/javaScriptTracking\">";
        // line 21
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JavaScriptTracking"), "html", null, true);
        yield "</a>
            <a href=\"#/imageTracking\">";
        // line 22
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImageTracking"), "html", null, true);
        yield "</a>
            <a href=\"#/importServerLogs\">";
        // line 23
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        yield "</a>
            <a href=\"#/mobileAppsAndSdks\">";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        yield "</a>
            <a href=\"#/trackingApi\">";
        // line 25
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        yield "</a>
            <a href=\"#/singlePageApplication\">";
        // line 26
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        yield "</a>
            <a href=\"#/google-tag-manager\">";
        // line 27
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
        yield "</a>
            <a href=\"#/wordpress\">WordPress</a>
            <a href=\"#/cloudflare\">Cloudflare</a>
            <a href=\"#/vue\">Vue.js</a>
            <a href=\"#/react\">React.js</a>
            ";
        // line 32
        yield $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePageTableOfContents");
        yield "
        </div>
    </div>

    <input type=\"hidden\" name=\"numMaxCustomVariables\"
           value=\"";
        // line 37
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\">

<div
    vue-entry=\"CoreAdminHome.JsTrackingCodeGenerator\"
    default-site=\"";
        // line 41
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 41, $this->source); })())), "html", null, true);
        yield "\"
    max-custom-variables=\"";
        // line 42
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["maxCustomVariables"]) || array_key_exists("maxCustomVariables", $context) ? $context["maxCustomVariables"] : (function () { throw new RuntimeError('Variable "maxCustomVariables" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "\"
    server-side-do-not-track-enabled=\"";
        // line 43
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["serverSideDoNotTrackEnabled"]) || array_key_exists("serverSideDoNotTrackEnabled", $context) ? $context["serverSideDoNotTrackEnabled"] : (function () { throw new RuntimeError('Variable "serverSideDoNotTrackEnabled" does not exist.', 43, $this->source); })())), "html", null, true);
        yield "\"
></div>

<div
    vue-entry=\"CoreAdminHome.ImageTrackingCodeGenerator\"
    default-site=\"";
        // line 48
        yield \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultSiteDecoded"]) || array_key_exists("defaultSiteDecoded", $context) ? $context["defaultSiteDecoded"] : (function () { throw new RuntimeError('Variable "defaultSiteDecoded" does not exist.', 48, $this->source); })())), "html", null, true);
        yield "\"
></div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 51
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        yield "\"
     anchor=\"importServerLogs\">
    <p>
        ";
        // line 54
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ImportingServerLogsDesc", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/log-analytics/"), "</a>");
        yield "
    </p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 58
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        yield "\" anchor=\"mobileAppsAndSdks\">
    <p>";
        // line 59
        yield $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/integrate/#programming-language-platforms-and-frameworks"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 62
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        yield "\" anchor=\"trackingApi\">
    <p>";
        // line 63
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/api-reference/tracking-api"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 66
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        yield "\" anchor=\"singlePageApplication\">
     <p>";
        // line 67
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_SinglePageApplicationDescription", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/spa-tracking"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 70
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
        yield "\" anchor=\"google-tag-manager\">
    <p>";
        // line 71
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_GoogleTagManagerDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"WordPress\" anchor=\"wordpress\">
    <p>";
        // line 75
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_WordpressDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Cloudflare\" anchor=\"cloudflare\">
    <p>";
        // line 79
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_CloudflareDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Vue.js\" anchor=\"vue\">
    <p>";
        // line 83
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_VueDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/"), "</a>");
        yield "</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"React.js\" anchor=\"react\">
    <p>";
        // line 87
        yield $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ReactDescription", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/"), "</a>");
        yield "</p>
</div>


";
        // line 91
        yield $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePage");
        yield "

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@CoreAdminHome/trackingCodeGenerator.twig";
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
        return array (  248 => 91,  241 => 87,  234 => 83,  227 => 79,  220 => 75,  213 => 71,  209 => 70,  203 => 67,  199 => 66,  193 => 63,  189 => 62,  183 => 59,  179 => 58,  172 => 54,  166 => 51,  160 => 48,  152 => 43,  148 => 42,  144 => 41,  137 => 37,  129 => 32,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  87 => 17,  81 => 16,  77 => 15,  71 => 11,  67 => 10,  58 => 4,  54 => 3,  49 => 1,  44 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% block head %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
{% endblock %}

{% set title %}{{ 'CoreAdminHome_TrackingCode'|translate }}{% endset %}

{% block content %}

    <div class=\"card\">
        <div class=\"card-content\">
            <h2 vue-entry=\"CoreHome.EnrichedHeadline\"
                help-url=\"{{ 'https://matomo.org/docs/tracking-api/'|trackmatomolink }}\"
                rate=\"{{ 'CoreAdminHome_TrackingCode'|translate }}\">{{ 'CoreAdminHome_TrackingCode'|translate  }}</h2>
            <p style=\"padding-left: 0;\">{{ 'CoreAdminHome_TrackingCodeIntro'|translate }}</p>
        </div>
        <div class=\"card-action\">
            {{ 'General_GoTo2'|translate }}:
            <a href=\"#/javaScriptTracking\">{{ 'CoreAdminHome_JavaScriptTracking'|translate  }}</a>
            <a href=\"#/imageTracking\">{{ 'CoreAdminHome_ImageTracking'|translate }}</a>
            <a href=\"#/importServerLogs\">{{ 'SitesManager_LogAnalytics'|translate }}</a>
            <a href=\"#/mobileAppsAndSdks\">{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</a>
            <a href=\"#/trackingApi\">{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</a>
            <a href=\"#/singlePageApplication\">{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</a>
            <a href=\"#/google-tag-manager\">{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</a>
            <a href=\"#/wordpress\">WordPress</a>
            <a href=\"#/cloudflare\">Cloudflare</a>
            <a href=\"#/vue\">Vue.js</a>
            <a href=\"#/react\">React.js</a>
            {{ postEvent('Template.endTrackingCodePageTableOfContents') }}
        </div>
    </div>

    <input type=\"hidden\" name=\"numMaxCustomVariables\"
           value=\"{{ maxCustomVariables }}\">

<div
    vue-entry=\"CoreAdminHome.JsTrackingCodeGenerator\"
    default-site=\"{{ defaultSiteDecoded|json_encode }}\"
    max-custom-variables=\"{{ maxCustomVariables|json_encode }}\"
    server-side-do-not-track-enabled=\"{{ serverSideDoNotTrackEnabled|json_encode }}\"
></div>

<div
    vue-entry=\"CoreAdminHome.ImageTrackingCodeGenerator\"
    default-site=\"{{ defaultSiteDecoded|json_encode }}\"
></div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'SitesManager_LogAnalytics'|translate }}\"
     anchor=\"importServerLogs\">
    <p>
        {{ 'CoreAdminHome_ImportingServerLogsDesc'|translate(externallink('https://matomo.org/log-analytics/'),'</a>')|raw }}
    </p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'SitesManager_MobileAppsAndSDKs'|translate }}\" anchor=\"mobileAppsAndSdks\">
    <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate(externallink('https://matomo.org/integrate/#programming-language-platforms-and-frameworks'), '</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'CoreAdminHome_HttpTrackingApi'|translate }}\" anchor=\"trackingApi\">
    <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate(externallink('https://developer.matomo.org/api-reference/tracking-api'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}\" anchor=\"singlePageApplication\">
     <p>{{ 'CoreAdminHome_SinglePageApplicationDescription'|translate(externallink('https://developer.matomo.org/guides/spa-tracking'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}\" anchor=\"google-tag-manager\">
    <p>{{ 'CoreAdminHome_GoogleTagManagerDescription'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"WordPress\" anchor=\"wordpress\">
    <p>{{ 'CoreAdminHome_WordpressDescription'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Cloudflare\" anchor=\"cloudflare\">
    <p>{{ 'CoreAdminHome_CloudflareDescription'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-cloudflare-setup/'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Vue.js\" anchor=\"vue\">
    <p>{{ 'CoreAdminHome_VueDescription'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-websites-that-use-vue-js/'),'</a>')|raw }}</p>
</div>

<div vue-entry=\"CoreHome.ContentBlock\" content-title=\"React.js\" anchor=\"react\">
    <p>{{ 'CoreAdminHome_ReactDescription'|translate(externallink('https://matomo.org/faq/new-to-piwik/how-do-i-start-tracking-data-with-matomo-on-websites-that-use-react/'),'</a>')|raw }}</p>
</div>


{{ postEvent('Template.endTrackingCodePage') }}

{% endblock %}
", "@CoreAdminHome/trackingCodeGenerator.twig", "/var/www/matomo/plugins/CoreAdminHome/templates/trackingCodeGenerator.twig");
    }
}
