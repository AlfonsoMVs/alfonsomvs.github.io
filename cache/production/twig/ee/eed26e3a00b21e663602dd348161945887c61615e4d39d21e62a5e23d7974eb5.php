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

/* navbar_footer.html */
class __TwigTemplate_23cc64df38e3bd0a67b6c9840fdf6271ad15d39c10b1821f6cee5317a3963f90 extends \Twig\Template
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
        echo "<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t";
        // line 3
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 4
        echo "\t\t";
        // line 5
        echo "\t\t<span class=\"crumb\"><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</a></span>
\t\t";
        // line 6
        // line 7
        echo "\t</li>
\t";
        // line 8
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li class=\"small-icon icon-";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ( !($context["S_WATCHING_FORUM"] ?? null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</a></li>";
        }
        // line 9
        echo "
\t";
        // line 10
        // line 11
        echo "\t<li class=\"rightside\">";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t";
        // line 12
        // line 13
        echo "\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 14
            echo "\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t";
            // line 15
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 16
            echo "\t";
        }
        // line 17
        echo "\t";
        // line 18
        echo "\t";
        if (($context["U_TEAM"] ?? null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_TEAM"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 19
        echo "\t";
        // line 20
        echo "\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 21,  127 => 20,  125 => 19,  116 => 18,  114 => 17,  111 => 16,  101 => 15,  94 => 14,  91 => 13,  90 => 12,  85 => 11,  84 => 10,  81 => 9,  55 => 8,  52 => 7,  51 => 6,  44 => 5,  42 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_footer.html", "");
    }
}
