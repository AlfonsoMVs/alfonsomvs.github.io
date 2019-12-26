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

/* ucp_pm_viewfolder.html */
class __TwigTemplate_c7a0ba369212dec2a84f4bfc22031a5fec2567bed0ff1d95d59fefb0bed72b13 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !($context["PROMPT"] ?? null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if (($context["PROMPT"] ?? null)) {
            // line 8
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_AS_CSV");
            echo "</h2>
\t<form id=\"viewfolder\" method=\"post\" action=\"";
            // line 9
            echo ($context["S_PM_ACTION"] ?? null);
            echo "\">
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
            echo "</h3>
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delimiter\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enclosure\">";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<input class=\"button1\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" name=\"reset\" />&nbsp;
\t\t";
            // line 29
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 34
            echo "
\t";
            // line 35
            if (($context["NUM_REMOVED"] ?? null)) {
                // line 36
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 37
                echo ($context["RULE_REMOVED_MESSAGES"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 40
            echo "
\t";
            // line 41
            if (($context["NUM_NOT_MOVED"] ?? null)) {
                // line 42
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 43
                echo ($context["NOT_MOVED_MESSAGES"] ?? null);
                echo "<br />";
                echo ($context["RELEASE_MESSAGE_INFO"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 46
            echo "
\t";
            // line 47
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "messagerow", []))) {
                // line 48
                echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 51
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
                // line 52
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist pmlist responsive-show-all ";
                // line 56
                if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                    echo "missing-column";
                } else {
                    echo "two-columns";
                }
                echo "\">

\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "messagerow", []));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 59
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["messagerow"], "S_ROW_COUNT", []) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    if ($this->getAttribute($context["messagerow"], "PM_CLASS", [])) {
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "PM_CLASS", []);
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 60
                    echo $this->getAttribute($context["messagerow"], "FOLDER_IMG_STYLE", []);
                    echo "\">
\t\t\t\t\t<dt";
                    // line 61
                    if (($this->getAttribute($context["messagerow"], "PM_ICON_URL", []) && ($context["S_PM_ICONS"] ?? null))) {
                        echo " style=\"background-image: url(";
                        echo $this->getAttribute($context["messagerow"], "PM_ICON_URL", []);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 62
                    if (($this->getAttribute($context["messagerow"], "S_PM_UNREAD", []) &&  !$this->getAttribute($context["messagerow"], "S_PM_DELETED", []))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", []);
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t";
                    // line 65
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", [])) {
                        // line 66
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", []);
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t<span class=\"error\">";
                        // line 67
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", []);
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["messagerow"], "SUBJECT", []);
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_AUTHOR_DELETED", [])) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t\t";
                    // line 75
                    if ($this->getAttribute($context["messagerow"], "S_PM_REPORTED", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_MCP_REPORT", []);
                        echo "\">";
                        echo ($context["REPORTED_IMG"] ?? null);
                        echo "</a>";
                    }
                    echo " ";
                    echo $this->getAttribute($context["messagerow"], "ATTACH_ICON_IMG", []);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 76
                    if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_TO");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "RECIPIENTS", []);
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "MESSAGE_AUTHOR_FULL", []);
                        echo " &raquo; ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", []);
                    }
                    // line 77
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t";
                    // line 80
                    if (($context["S_SHOW_RECIPIENTS"] ?? null)) {
                        echo "<dd class=\"info\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", []);
                        echo "</span></dd>";
                    }
                    // line 81
                    echo "\t\t\t\t\t";
                    if (($context["S_UNREAD"] ?? null)) {
                        echo "<dd class=\"info\">";
                        if ($this->getAttribute($context["messagerow"], "FOLDER", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["messagerow"], "U_FOLDER", []);
                            echo "\">";
                            echo $this->getAttribute($context["messagerow"], "FOLDER", []);
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNKNOWN_FOLDER");
                        }
                        echo "</dd>";
                    }
                    // line 82
                    echo "\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", []);
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
\t\t</ul>
\t";
            } else {
                // line 89
                echo "\t\t<p><strong>
\t\t\t";
                // line 90
                if ((($context["S_COMPOSE_PM_VIEW"] ?? null) && ($context["S_NO_AUTH_SEND_MESSAGE"] ?? null))) {
                    // line 91
                    echo "\t\t\t\t";
                    if (($context["S_USER_NEW"] ?? null)) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 92
                    echo "\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 95
                echo "\t\t</strong></p>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if ((($context["FOLDER_CUR_MESSAGES"] ?? null) != 0)) {
                // line 99
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<div class=\"left-box\"><label for=\"export_option\">";
                // line 100
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_FOLDER");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <select name=\"export_option\" id=\"export_option\"><option value=\"CSV\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_AS_CSV");
                echo "</option><option value=\"CSV_EXCEL\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option><option value=\"XML\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPORT_AS_XML");
                echo "</option></select></label> <input class=\"button2\" type=\"submit\" name=\"submit_export\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" /><br /></div>
\t\t\t<select name=\"mark_option\">";
                // line 101
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo ($context["S_MOVE_MARKED_OPTIONS"] ?? null);
                echo "</select> <input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">";
                // line 102
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 109
                echo ($context["TOTAL_MESSAGES"] ?? null);
                echo "
\t\t\t\t";
                // line 110
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 111
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 111)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 112
                    echo "\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t";
                }
                // line 115
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 118
            echo "
\t\t</div>
\t</div>

\t";
            // line 122
            if ((($context["FOLDER_CUR_MESSAGES"] ?? null) != 0)) {
                // line 123
                echo "\t<fieldset class=\"display-options\">
\t\t<label>";
                // line 124
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t<label>";
                // line 125
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t<label>";
                // line 126
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 127
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button2\" />
\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 128
                echo ($context["CUR_FOLDER_ID"] ?? null);
                echo "\" />
\t</fieldset>
\t";
            }
            // line 131
            echo "
\t";
            // line 132
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 132)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 134
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 134)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 134,  460 => 132,  457 => 131,  451 => 128,  447 => 127,  443 => 126,  437 => 125,  430 => 124,  427 => 123,  425 => 122,  419 => 118,  414 => 115,  408 => 113,  405 => 112,  392 => 111,  390 => 110,  386 => 109,  374 => 102,  367 => 101,  354 => 100,  351 => 99,  349 => 98,  346 => 97,  342 => 95,  336 => 93,  333 => 92,  326 => 91,  324 => 90,  321 => 89,  316 => 86,  305 => 82,  290 => 81,  281 => 80,  276 => 77,  264 => 76,  252 => 75,  249 => 74,  243 => 72,  240 => 71,  232 => 69,  227 => 67,  220 => 66,  218 => 65,  214 => 63,  208 => 62,  200 => 61,  196 => 60,  183 => 59,  179 => 58,  170 => 56,  163 => 52,  159 => 51,  154 => 48,  152 => 47,  149 => 46,  141 => 43,  138 => 42,  136 => 41,  133 => 40,  127 => 37,  124 => 36,  122 => 35,  119 => 34,  111 => 29,  107 => 28,  103 => 27,  91 => 19,  83 => 15,  77 => 12,  71 => 9,  66 => 8,  64 => 7,  61 => 6,  47 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_viewfolder.html", "");
    }
}
