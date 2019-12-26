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

/* inc/menubar.html */
class __TwigTemplate_175bd0be258ac0ebbb6fa7df36d86e8918564b3598b23e77b4e12be17445e53d extends \Twig\Template
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
        echo "<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 3
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t";
        // line 8
        // line 9
        echo "
\t\t\t\t";
        // line 10
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t";
            // line 12
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 13
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 22
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 24
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t";
        }
        // line 26
        echo "
\t\t\t\t";
        // line 27
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 28
            echo "\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t";
            // line 29
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 30
            echo "\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 31
            echo "\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t";
        // line 34
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t<li class=\"small-icon icon-faq\"><a href=\"";
            echo ($context["U_FAQ"] ?? null);
            echo "\" rel=\"help\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
            echo "</a></li>
\t\t\t\t";
        }
        // line 37
        echo "
\t\t\t\t";
        // line 38
        // line 39
        echo "\t\t\t</ul>
\t\t</div>
\t</li>

\t";
        // line 43
        // line 44
        echo "
\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_menu_items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["c_menu_items"]) {
            // line 46
            echo "\t<li class=\"small-icon menu-item ";
            echo $this->getAttribute($context["c_menu_items"], "CLASS", []);
            echo "\" data-last-responsive=\"true\">
\t\t<a href=\"";
            // line 47
            echo $this->getAttribute($context["c_menu_items"], "URL", []);
            echo "\" title=\"";
            echo $this->getAttribute($context["c_menu_items"], "TEXT", []);
            echo "\" role=\"menuitem\">
\t\t\t";
            // line 48
            if ($this->getAttribute($context["c_menu_items"], "ICON", [])) {
                // line 49
                echo "\t\t\t<i class=\"fa ";
                echo $this->getAttribute($context["c_menu_items"], "ICON", []);
                echo "\"></i>
\t\t\t";
            }
            // line 51
            echo "\t\t\t";
            echo $this->getAttribute($context["c_menu_items"], "TEXT", []);
            echo "
\t\t</a>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_menu_items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
\t";
        // line 56
        // line 57
        echo "
\t";
        // line 58
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 59
            echo "\t\t";
            // line 60
            echo "
\t\t<li id=\"username_logged_in\" class=\"rightside ";
            // line 61
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 62
            // line 63
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 64
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">
\t\t\t\t\t";
            // line 65
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "
\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 71
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 72
            echo "
\t\t\t\t\t\t";
            // line 73
            // line 74
            echo "
\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 75
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</a></li>

\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 78
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t";
            // line 79
            if (($context["U_MCP"] ?? null)) {
                echo "<li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_MCP"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
                echo "</a></li>";
            }
            // line 80
            echo "\t\t\t\t\t\t";
            if (($context["U_ACP"] ?? null)) {
                echo "<li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "</a></li>";
            }
            // line 81
            echo "\t\t\t\t\t\t";
            if (($context["U_ACP"] ?? null)) {
                echo "<li class=\"small-icon icon-tcp\" data-last-responsive=\"true\"><a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "&i=-eles-coreframe-acp-coreframe_module&mode=general\" title=\"Coreframe\" role=\"menuitem\">Coreframe</a></li>";
            }
            // line 82
            echo "
\t\t\t\t\t\t";
            // line 83
            // line 84
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 86
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 90
            // line 91
            echo "\t\t</li>
\t\t";
            // line 92
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 93
                echo "\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 94
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 97
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 98
                echo "\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 99
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 100
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "inc/menubar.html", 100)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 101
                echo "\t\t\t</li>
\t\t";
            }
            // line 103
            echo "\t\t";
            // line 104
            echo "
\t";
        } else {
            // line 106
            echo "\t\t<li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t";
            // line 107
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 108
                echo "\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a></li>
\t\t";
            }
            // line 110
            echo "\t\t";
            // line 111
            echo "\t";
        }
        // line 112
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "inc/menubar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 112,  400 => 111,  398 => 110,  390 => 108,  388 => 107,  379 => 106,  375 => 104,  373 => 103,  369 => 101,  357 => 100,  349 => 99,  344 => 98,  341 => 97,  331 => 94,  328 => 93,  326 => 92,  323 => 91,  322 => 90,  311 => 86,  307 => 84,  306 => 83,  303 => 82,  296 => 81,  285 => 80,  275 => 79,  267 => 78,  257 => 75,  254 => 74,  253 => 73,  250 => 72,  242 => 71,  229 => 65,  225 => 64,  222 => 63,  221 => 62,  215 => 61,  212 => 60,  210 => 59,  208 => 58,  205 => 57,  204 => 56,  201 => 55,  190 => 51,  184 => 49,  182 => 48,  176 => 47,  171 => 46,  167 => 45,  164 => 44,  163 => 43,  157 => 39,  156 => 38,  153 => 37,  143 => 35,  141 => 34,  137 => 32,  134 => 31,  125 => 30,  117 => 29,  114 => 28,  112 => 27,  109 => 26,  102 => 24,  95 => 22,  88 => 21,  80 => 19,  77 => 18,  69 => 16,  66 => 15,  58 => 13,  56 => 12,  53 => 11,  51 => 10,  48 => 9,  47 => 8,  40 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "inc/menubar.html", "");
    }
}
