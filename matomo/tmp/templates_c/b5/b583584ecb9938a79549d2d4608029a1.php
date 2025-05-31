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

/* @Feedback/index.twig */
class __TwigTemplate_65394038674b582b32d271c998620e69 extends Template
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
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["test_piwikUrl"] = "http://demo.matomo.org/";
        // line 4
        $context["isPiwikDemo"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, (((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "https://demo.matomo.org/")), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        $context["headline"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_AboutPiwikX", (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 6, $this->source); })())), "html", null, true);
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@Feedback/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        yield "
    <div id=\"feedback-faq\" class=\"admin\">
        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 11
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_HowCanWeHelp"), "html", null, true);
        yield "\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"";
        // line 16
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_SearchHelpResources"), "html", null, true);
        yield "\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>";
        // line 24
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_FrequentlyAskedQuestions"), "html", null, true);
        yield "</h4>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popularHelpTopics"]) || array_key_exists("popularHelpTopics", $context) ? $context["popularHelpTopics"] : (function () { throw new RuntimeError('Variable "popularHelpTopics" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["helpTopic"]) {
            // line 26
            yield "                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            yield \Piwik\piwik_escape_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["helpTopic"], "url", [], "any", false, false, false, 26), "html", null, true);
            yield "?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides\">";
            yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["helpTopic"], "title", [], "any", false, false, false, 26)), "html", null, true);
            yield "</a></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpTopic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            <h4>";
        // line 29
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoHelpCentre"), "html", null, true);
        yield "</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 30
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/guides/"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_KnowledgeBase"), "html", null, true);
        yield "</a> - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_KnowledgeBaseDescription"), "html", null, true);
        yield "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 31
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/web-analytics-training"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoVideoTraining"), "html", null, true);
        yield "</a> - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoVideoTrainingDescription"), "html", null, true);
        yield "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 32
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/tag-manager-training/"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MtmVideoTraining"), "html", null, true);
        yield "</a> - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MtmVideoTrainingDescription"), "html", null, true);
        yield "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 33
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://forum.matomo.org/"), "html", null, true);
        yield "\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityForum"), "html", null, true);
        yield "</a> - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityForumDescription"), "html", null, true);
        yield "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 34
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "API", "action" => "glossary"]), "html", null, true);
        yield "&mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=glossary\">";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("API_Glossary"), "html", null, true);
        yield "</a> - ";
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_GlossaryDescription"), "html", null, true);
        yield "</p>

            <h4>";
        // line 36
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalHelp"), "html", null, true);
        yield "</h4>
            <p>";
        // line 37
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesIntro"), "html", null, true);
        yield "</p>

            <p>";
        // line 39
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesOfferIntro"), "html", null, true);
        yield "</p>
            <p> &bull; ";
        // line 40
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesDedicatedSupport"), "html", null, true);
        yield "</p>
            <p> &bull; ";
        // line 41
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesOnboarding"), "html", null, true);
        yield "</p>
            <p> &bull; ";
        // line 42
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesTraining"), "html", null, true);
        yield "</p>
            <p> &bull; ";
        // line 43
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesSupport"), "html", null, true);
        yield "</p>
            <p> &bull; ";
        // line 44
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesEmailAlerts"), "html", null, true);
        yield "</p>

            <form target=\"_blank\" action=\"";
        // line 46
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/support-plans/", null, null, "App_ContactUs_button"), "html", null, true);
        yield "\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"";
        // line 48
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
        yield "\">
            </form>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\"
             content-title=\"";
        // line 53
        yield \Piwik\piwik_escape_filter($this->env, (isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 53, $this->source); })()), "html", null, true);
        yield "\"
             feature=\"";
        // line 54
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
        yield "\">
            <p>";
        // line 55
        yield $this->env->getFilter('translate')->getCallable()("General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease", $this->env->getFunction('externallink')->getCallable()("https://matomo.org"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/get-involved/"), "</a>", (("<a href='" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "home"])) . "'>"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/team/"), "</a>");
        // line 64
        yield "
            </p>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 70
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/users-flow/"), "html", null, true);
        yield "'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 71
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/ab-testing-learn-more/"), "html", null, true);
        yield "'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 72
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/conversion-funnels"), "html", null, true);
        yield "'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 73
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/form-analytics/"), "html", null, true);
        yield "'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 74
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/media-analytics-website/"), "html", null, true);
        yield "'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 75
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/roll-up-reporting/"), "html", null, true);
        yield "'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 76
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/search-keywords-performance/"), "html", null, true);
        yield "'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 77
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/activity-log/"), "html", null, true);
        yield "'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='";
        // line 78
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/white-label/"), "html", null, true);
        yield "'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='";
        // line 79
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/recommends/premium-plugins"), "html", null, true);
        yield "'>All premium plugins.</a></strong></p>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"";
        // line 82
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_DoYouHaveBugReportOrFeatureRequest"), "html", null, true);
        yield "\">
            <p>";
        // line 83
        yield $this->env->getFilter('translate')->getCallable()("Feedback_HowToCreateTicket", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://github.com/matomo-org/matomo/issues"), "</a>", $this->env->getFunction('externallink')->getCallable()("https://github.com/matomo-org/matomo/issues/new"), "</a>");
        // line 92
        yield "</p>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 98
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/newsletter/"), "html", null, true);
        yield "\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 99
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/newsletter/"), "html", null, true);
        yield "\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 119
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/blog/"), "html", null, true);
        yield "\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 120
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/get-involved/"), "html", null, true);
        yield "\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 121
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://developer.matomo.org"), "html", null, true);
        yield "\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 122
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://plugins.matomo.org"), "html", null, true);
        yield "\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 123
        yield \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('trackmatomolink')->getCallable()("https://matomo.org/thank-you-all/"), "html", null, true);
        yield "\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>";
        // line 125
        yield $this->env->getFilter('translate')->getCallable()("Feedback_PrivacyClaim", $this->env->getFunction('externallink')->getCallable()("https://matomo.org/privacy/"), "</a>");
        // line 128
        yield "</small></p>
        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Feedback/index.twig";
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
        return array (  325 => 128,  323 => 125,  318 => 123,  314 => 122,  310 => 121,  306 => 120,  302 => 119,  279 => 99,  275 => 98,  267 => 92,  265 => 83,  261 => 82,  255 => 79,  251 => 78,  247 => 77,  243 => 76,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  223 => 71,  219 => 70,  211 => 64,  209 => 55,  205 => 54,  201 => 53,  193 => 48,  188 => 46,  183 => 44,  179 => 43,  175 => 42,  171 => 41,  167 => 40,  163 => 39,  158 => 37,  154 => 36,  145 => 34,  137 => 33,  129 => 32,  121 => 31,  113 => 30,  109 => 29,  106 => 28,  95 => 26,  91 => 25,  87 => 24,  76 => 16,  68 => 11,  64 => 9,  60 => 8,  55 => 1,  50 => 6,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.twig' %}

{% set test_piwikUrl='http://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/'}}{% endset %}

{% set headline %}{{ 'General_AboutPiwikX'|translate(piwikVersion) }}{% endset %}

{% block content %}

    <div id=\"feedback-faq\" class=\"admin\">
        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ \"Feedback_HowCanWeHelp\"|translate }}\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"{{'Feedback_SearchHelpResources'|translate}}\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>{{'Feedback_FrequentlyAskedQuestions'|translate}}</h4>
            {% for helpTopic in popularHelpTopics %}
                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{helpTopic.url}}?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides\">{{helpTopic.title|translate}}</a></p>
            {% endfor %}

            <h4>{{ 'Feedback_MatomoHelpCentre'|translate }}</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/guides/'|trackmatomolink }}\">{{ 'Feedback_KnowledgeBase'|translate }}</a> - {{ 'Feedback_KnowledgeBaseDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/web-analytics-training'|trackmatomolink}}\">{{ 'Feedback_MatomoVideoTraining'|translate }}</a> - {{ 'Feedback_MatomoVideoTrainingDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/tag-manager-training/'|trackmatomolink }}\">{{ 'Feedback_MtmVideoTraining'|translate }}</a> - {{ 'Feedback_MtmVideoTrainingDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://forum.matomo.org/'|trackmatomolink }}\">{{ 'Feedback_CommunityForum'|translate }}</a> - {{ 'Feedback_CommunityForumDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ linkTo({'module':\"API\",'action':\"glossary\"}) }}&mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=glossary\">{{ 'API_Glossary'|translate }}</a> - {{ 'Feedback_GlossaryDescription'|translate }}</p>

            <h4>{{ 'Feedback_ProfessionalHelp'|translate }}</h4>
            <p>{{ 'Feedback_ProfessionalServicesIntro'|translate }}</p>

            <p>{{ 'Feedback_ProfessionalServicesOfferIntro'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesDedicatedSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesOnboarding'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesTraining'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesEmailAlerts'|translate }}</p>

            <form target=\"_blank\" action=\"{{ 'https://matomo.org/support-plans/'|trackmatomolink(null, null, 'App_ContactUs_button') }}\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"{{ 'General_MoreDetails'|translate }}\">
            </form>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\"
             content-title=\"{{ headline }}\"
             feature=\"{{ 'General_Help'|translate }}\">
            <p>{{ 'General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease'|translate(
                    externallink(\"https://matomo.org\"),
                    \"</a>\",
                    externallink(\"https://matomo.org/get-involved/\"),
                    \"</a>\",
                    \"<a href='\" ~ linkTo({'module':'CoreAdminHome', 'action': 'home'})~\"'>\",
                    \"</a>\",
                    externallink(\"https://matomo.org/team/\"),
                    \"</a>\"
                )|raw }}
            </p>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/users-flow/\"|trackmatomolink }}'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/ab-testing-learn-more/\"|trackmatomolink }}'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/conversion-funnels\"|trackmatomolink }}'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/form-analytics/\"|trackmatomolink }}'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/media-analytics-website/\"|trackmatomolink }}'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/roll-up-reporting/\"|trackmatomolink }}'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/search-keywords-performance/\"|trackmatomolink }}'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/activity-log/\"|trackmatomolink }}'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/white-label/\"|trackmatomolink }}'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='{{ \"https://matomo.org/recommends/premium-plugins\"|trackmatomolink }}'>All premium plugins.</a></strong></p>
        </div>

        <div vue-entry=\"CoreHome.ContentBlock\" content-title=\"{{ 'Feedback_DoYouHaveBugReportOrFeatureRequest'|translate }}\">
            <p>{{ 'Feedback_HowToCreateTicket'|translate(
            externallink(\"https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report\"),
            \"</a>\",
            externallink(\"https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request\"),
            \"</a>\",
            externallink(\"https://github.com/matomo-org/matomo/issues\"),
            \"</a>\",
            externallink(\"https://github.com/matomo-org/matomo/issues/new\"),
            \"</a>\"
            )|raw }}</p>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/newsletter/'|trackmatomolink }}\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/newsletter/'|trackmatomolink }}\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/blog/'|trackmatomolink }}\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/get-involved/'|trackmatomolink }}\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://developer.matomo.org'|trackmatomolink }}\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://plugins.matomo.org'|trackmatomolink }}\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ 'https://matomo.org/thank-you-all/'|trackmatomolink }}\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>{{ 'Feedback_PrivacyClaim'|translate(
                    externallink(\"https://matomo.org/privacy/\"),
                    \"</a>\"
                )|raw}}</small></p>
        </div>
    </div>
{% endblock %}
", "@Feedback/index.twig", "/var/www/matomo/plugins/Feedback/templates/index.twig");
    }
}
