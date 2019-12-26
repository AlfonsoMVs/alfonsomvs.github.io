<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* overall_header.html */
class __TwigTemplate_c9b68e72ddbeae9b3e25d6b0154eae257beadd4a55d4a03d35184f6886f55bec extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"eles\" lang=\"";
        // line 2
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "

<link href=\"";
        // line 26
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/theme/bootstrap.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" />




<link href=\"";
        // line 31
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 33
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 34
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/eles/theme/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 36
        echo "
";
        // line 37
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 38
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 40
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 42
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/theme/ie.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
\t<script src=\"//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
\t<script src=\"//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->

<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,800\" rel=\"stylesheet\" type=\"text/css\">

";
        // line 49
        // line 50
        echo "
";
        // line 51
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", []);
        echo "

";
        // line 53
        // line 54
        echo "
</head>

<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 57
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo " ";
        echo ($context["C_STYLE_CORNERS"] ?? null);
        echo " ";
        echo ($context["C_PARENT_THEME"] ?? null);
        echo " ";
        echo ($context["C_LAYOUT_MODE"] ?? null);
        echo "\">
";
        // line 58
        // line 59
        echo "<div id=\"wrap\" style=\"max-width: 100%;\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"navbar-main\" style=\"position:fixed;top: 0px;opacity: 1;background: linear-gradient(45deg, #6b14d3 10%, #4962dd 90%);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);\" class=\"topbar\" data-scroll-header>
\t\t<div class=\"inner";
        // line 62
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
\t\t  ";
        // line 63
        $this->loadTemplate("inc/menubar.html", "overall_header.html", 63)->display($context);
        // line 64
        echo "\t\t</div>
\t</div>
\t<header id=\"page-header\" style=\"margin-top: 45px;\">
\t\t";
        // line 67
        $this->loadTemplate("inc/header.html", "overall_header.html", 67)->display($context);
        // line 68
        echo "\t</header>

\t";
        // line 70
        // line 71
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>

\t<div id=\"page-body\" role=\"main\">
\t\t";
        // line 75
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 76
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 78
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 82
        echo "
\t\t";
        // line 83
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 83,  302 => 82,  292 => 78,  288 => 76,  286 => 75,  280 => 71,  279 => 70,  275 => 68,  273 => 67,  268 => 64,  266 => 63,  260 => 62,  255 => 59,  254 => 58,  240 => 57,  235 => 54,  234 => 53,  229 => 51,  226 => 50,  225 => 49,  213 => 42,  209 => 40,  201 => 38,  199 => 37,  196 => 36,  188 => 34,  186 => 33,  181 => 31,  171 => 26,  167 => 24,  161 => 22,  159 => 21,  156 => 20,  153 => 18,  140 => 17,  127 => 16,  116 => 15,  105 => 14,  94 => 13,  83 => 12,  72 => 11,  70 => 10,  45 => 8,  41 => 7,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
