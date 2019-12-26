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

/* viewtopic_topic_tools.html */
class __TwigTemplate_105ac3f7147335749d7ec74f0d3b479ecb8b34384a6f873ecc6a43e957a0baa0 extends \Twig\Template
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
        if (( !($context["S_IS_BOT"] ?? null) && (((((($context["U_WATCH_TOPIC"] ?? null) || ($context["U_BOOKMARK_TOPIC"] ?? null)) || ($context["U_BUMP_TOPIC"] ?? null)) || ($context["U_EMAIL_TOPIC"] ?? null)) || ($context["U_PRINT_TOPIC"] ?? null)) || ($context["S_DISPLAY_TOPIC_TOOLS"] ?? null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if (($context["U_WATCH_TOPIC"] ?? null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if (($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo ($context["U_WATCH_TOPIC"] ?? null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !($context["S_WATCHING_TOPIC"] ?? null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo ($context["S_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-toggle-url=\"";
                echo ($context["U_WATCH_TOPIC_TOGGLE"] ?? null);
                echo "\" data-update-all=\".watch-topic-link\">";
                echo ($context["S_WATCH_TOPIC_TITLE"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if (($context["U_BOOKMARK_TOPIC"] ?? null)) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo ($context["U_BOOKMARK_TOPIC"] ?? null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo ($context["S_BOOKMARK_TOGGLE"] ?? null);
                echo "\" data-update-all=\".bookmark-link\">";
                echo ($context["S_BOOKMARK_TOPIC"] ?? null);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (($context["U_BUMP_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo ($context["U_BUMP_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if (($context["U_EMAIL_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo ($context["U_EMAIL_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if (($context["U_PRINT_TOPIC"] ?? null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo ($context["U_PRINT_TOPIC"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            // line 22
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 22,  126 => 21,  115 => 20,  104 => 19,  93 => 18,  81 => 15,  78 => 14,  75 => 13,  55 => 10,  46 => 9,  43 => 8,  42 => 7,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_topic_tools.html", "");
    }
}
