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

/* viewforum_body.html */
class __TwigTemplate_884abecc204edaf333fa20e346b490635645a1d72e2fc43b4cdf6c5e3c3d450a extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"forum-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 6
            echo "<div>
\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t";
            // line 8
            if (($context["FORUM_DESC"] ?? null)) {
                echo "<div style=\"display: none !important;\">";
                echo ($context["FORUM_DESC"] ?? null);
                echo "<br /></div>";
            }
            // line 9
            echo "\t";
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 10
            echo "</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 14
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 29
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 30
                echo "\t<div class=\"action-bar compact top\">
\t\t<a href=\"";
                // line 31
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"mark-read rightside\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t</div>
";
            }
            // line 34
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 36
        echo "
";
        // line 37
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 38
            echo "\t<div class=\"action-bar top\">

\t";
            // line 40
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 41
                echo "\t\t<div class=\"buttons\">
\t\t\t";
                // line 42
                // line 43
                echo "
\t\t\t<a href=\"";
                // line 44
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button icon-button ";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t";
                // line 45
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                }
                // line 46
                echo "\t\t\t</a>

\t\t\t";
                // line 48
                // line 49
                echo "\t\t</div>
\t";
            }
            // line 51
            echo "
\t";
            // line 52
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 53
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"forum-search\" action=\"";
                // line 54
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
                // line 56
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 58
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t\t";
                // line 59
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 64
            echo "
\t<div class=\"pagination\">
\t\t";
            // line 66
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" accesskey=\"m\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 67
            echo "\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t";
            // line 68
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 69
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 69)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 70
                echo "\t\t";
            } else {
                // line 71
                echo "\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 73
            echo "\t</div>

\t</div>
";
        }
        // line 77
        echo "
";
        // line 78
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 79
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 82
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t\t</div>
\t</div>

\t";
            // line 86
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 87
                echo "
\t\t<form action=\"";
                // line 88
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">

\t\t\t<div class=\"content\">
\t\t\t\t<h3><a href=\"";
                // line 94
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &bull; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>

\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"username\">";
                // line 98
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 99
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"inputbox autowidth\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"password\">";
                // line 102
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t\t\t";
                // line 104
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 105
                echo "\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 111
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t</fieldset>
\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t\t</form>

\t";
            }
            // line 121
            echo "
";
        }
        // line 123
        echo "
";
        // line 124
        // line 125
        echo "
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 127
            echo "
\t";
            // line 128
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", []))) {
                // line 129
                echo "\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 133
            echo "
\t";
            // line 134
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", []) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []))) {
                // line 135
                echo "\t\t<div class=\"forumbg";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo " announcement";
                }
                echo "\">
\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt";
                // line 140
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo " id=\"active_topics\"";
                }
                echo "><div class=\"list-inner\">";
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", []) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", []) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])))) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 141
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 142
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 143
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">
\t";
            }
            // line 149
            echo "
\t\t";
            // line 150
            // line 151
            echo "\t\t<li class=\"row";
            if (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", []) % 2 == 0)) {
                echo " bg1";
            } else {
                echo " bg2";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", [])) {
                echo " global-announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", [])) {
                echo " announce";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", [])) {
                echo " sticky";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                echo " reported";
            }
            echo "\">
\t\t\t";
            // line 152
            // line 153
            echo "\t\t\t<dl class=\"icon ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", []);
            echo "\">
\t\t\t\t<dt";
            // line 154
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []) && ($context["S_TOPIC_ICONS"] ?? null))) {
                echo " style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []);
                echo "); background-repeat: no-repeat;\"";
            }
            echo " title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", []);
            echo "\">
\t\t\t\t\t";
            // line 155
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                echo "\" class=\"icon-link\"></a>";
            }
            // line 156
            echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
            // line 157
            // line 158
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                echo "\">";
                echo ($context["NEWEST_POST_IMG"] ?? null);
                echo "</a> ";
            }
            // line 159
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", []);
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                echo "</a>";
            } else {
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
            }
            // line 160
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", []))) {
                // line 161
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "UNAPPROVED_IMG", []);
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                echo "\">";
                echo ($context["DELETED_IMG"] ?? null);
                echo "</a> ";
            }
            // line 164
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", []);
                echo "\">";
                echo ($context["REPORTED_IMG"] ?? null);
                echo "</a>";
            }
            echo "<br />
\t\t\t\t\t\t";
            // line 165
            // line 166
            echo "\t\t\t\t\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 167
                echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 168
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                echo " <i class=\"fa fa-clock-o\"></i> <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 169
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                    echo "</a>";
                }
                // line 170
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 171
                if ($this->getAttribute($context["topicrow"], "REPLIES", [])) {
                    // line 172
                    echo "\t\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", []);
                    echo "</strong></span>
\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t";
            }
            // line 175
            echo "
\t\t\t\t\t\t";
            // line 176
            if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", []))) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", []));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 182
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 183
$context["pagination"], "S_IS_NEXT", [])) {
                        // line 184
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                        echo "</a></li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 186
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 190
            echo "
\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
            // line 192
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", [])) {
                echo ($context["POLL_IMG"] ?? null);
                echo " ";
            }
            // line 193
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                echo $this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", []);
                echo " ";
            }
            // line 194
            echo "\t\t\t\t\t\t\t";
            echo " <span class=\"author\"></span>";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", []);
            echo "\t<i class=\"fa fa-clock-o\"></i> ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", []);
            echo "
\t\t\t\t\t\t\t";
            // line 195
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", []) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", [])))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", []);
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", []);
                echo "</a>";
            }
            // line 196
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 198
            // line 199
            echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
            // line 201
            echo $this->getAttribute($context["topicrow"], "REPLIES", []);
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"views\">";
            // line 202
            echo $this->getAttribute($context["topicrow"], "VIEWS", []);
            echo " <dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
            echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
            // line 203
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            // line 204
            echo "\t\t\t\t\t<span class=\"author\">";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
            echo "</span>
\t\t\t\t\t";
            // line 205
            if (( !($context["S_IS_BOT"] ?? null) && $this->getAttribute($context["topicrow"], "U_LAST_POST", []))) {
                // line 206
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo ($context["LAST_POST_IMG"] ?? null);
                echo "</a>
\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<span class=\"time\">";
            // line 209
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
            echo "</span></span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
            // line 212
            // line 213
            echo "\t\t</li>
\t\t";
            // line 214
            // line 215
            echo "
\t";
            // line 216
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", [])) {
                // line 217
                echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t";
            }
            // line 221
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 223
            echo "\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 224
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
                // line 226
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            } elseif ( !            // line 229
($context["S_HAS_SUBFORUM"] ?? null)) {
                // line 230
                echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 232
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS_IN_CATEGORY");
                echo "</strong>
\t\t</div>
\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "
";
        // line 238
        if ((($context["S_SELECT_SORT_DAYS"] ?? null) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 239
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_FORUM_ACTION"] ?? null);
            echo "\">
\t\t<fieldset class=\"display-options\">
\t";
            // line 241
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 242
                echo "\t\t\t<label>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_TOPICS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t\t<label>";
                // line 243
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label>
\t\t\t<label>";
                // line 244
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 245
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button2\" />
\t";
            }
            // line 247
            echo "\t\t</fieldset>
\t</form>
";
        }
        // line 250
        echo "
";
        // line 251
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])) &&  !($context["S_DISPLAY_ACTIVE"] ?? null))) {
            // line 252
            echo "\t<div class=\"action-bar bottom\">
\t\t";
            // line 253
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 254
                echo "\t\t\t<div class=\"buttons\">
\t\t\t\t";
                // line 255
                // line 256
                echo "
\t\t\t\t<a href=\"";
                // line 257
                echo ($context["U_POST_NEW_TOPIC"] ?? null);
                echo "\" class=\"button icon-button ";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo "locked-icon";
                } else {
                    echo "post-icon";
                }
                echo "\" title=\"";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                }
                echo "\">
\t\t\t\t\t";
                // line 258
                if (($context["S_IS_LOCKED"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_FORUM_LOCKED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_NEW_TOPIC");
                }
                // line 259
                echo "\t\t\t\t</a>

\t\t\t\t";
                // line 261
                // line 262
                echo "\t\t\t</div>
\t\t";
            }
            // line 264
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 266
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])))) {
                echo "<a href=\"";
                echo ($context["U_MARK_TOPICS"] ?? null);
                echo "\" class=\"mark\" data-ajax=\"mark_topics_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                echo "</a> &bull; ";
            }
            // line 267
            echo "\t\t\t";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 268
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 269
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 269)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 270
                echo "\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 273
            echo "\t\t</div>
\t</div>
";
        }
        // line 276
        echo "
";
        // line 277
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 277)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 278
        echo "
";
        // line 279
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 280
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 281
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 282
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 285
        echo "
";
        // line 286
        if (($context["S_DISPLAY_POST_INFO"] ?? null)) {
            // line 287
            echo "\t<div class=\"stat-block permissions\">
\t\t<h3>";
            // line 288
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t<p>";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "rules", []));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", []);
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t</div>
";
        }
        // line 292
        echo "
";
        // line 293
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 293)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1000 => 293,  997 => 292,  983 => 289,  979 => 288,  976 => 287,  974 => 286,  971 => 285,  965 => 282,  959 => 281,  956 => 280,  954 => 279,  951 => 278,  939 => 277,  936 => 276,  931 => 273,  925 => 271,  922 => 270,  909 => 269,  907 => 268,  902 => 267,  894 => 266,  890 => 264,  886 => 262,  885 => 261,  881 => 259,  875 => 258,  859 => 257,  856 => 256,  855 => 255,  852 => 254,  850 => 253,  847 => 252,  845 => 251,  842 => 250,  837 => 247,  832 => 245,  828 => 244,  822 => 243,  814 => 242,  812 => 241,  806 => 239,  804 => 238,  801 => 237,  790 => 232,  786 => 230,  784 => 229,  778 => 226,  774 => 224,  771 => 223,  765 => 221,  759 => 217,  757 => 216,  754 => 215,  753 => 214,  750 => 213,  749 => 212,  743 => 209,  740 => 208,  730 => 206,  728 => 205,  723 => 204,  720 => 203,  714 => 202,  708 => 201,  704 => 199,  703 => 198,  699 => 196,  689 => 195,  681 => 194,  675 => 193,  670 => 192,  666 => 190,  661 => 187,  655 => 186,  645 => 184,  643 => 183,  637 => 182,  630 => 181,  627 => 180,  623 => 179,  619 => 177,  617 => 176,  614 => 175,  611 => 174,  602 => 172,  600 => 171,  597 => 170,  585 => 169,  571 => 168,  568 => 167,  565 => 166,  564 => 165,  553 => 164,  544 => 163,  536 => 161,  533 => 160,  522 => 159,  513 => 158,  512 => 157,  509 => 156,  503 => 155,  492 => 154,  487 => 153,  486 => 152,  465 => 151,  464 => 150,  461 => 149,  452 => 143,  448 => 142,  444 => 141,  430 => 140,  419 => 135,  417 => 134,  414 => 133,  408 => 129,  406 => 128,  403 => 127,  398 => 126,  395 => 125,  394 => 124,  391 => 123,  387 => 121,  374 => 111,  369 => 109,  361 => 105,  355 => 104,  349 => 102,  343 => 99,  338 => 98,  321 => 94,  312 => 88,  309 => 87,  307 => 86,  300 => 82,  295 => 79,  293 => 78,  290 => 77,  284 => 73,  278 => 71,  275 => 70,  262 => 69,  260 => 68,  255 => 67,  247 => 66,  243 => 64,  235 => 59,  227 => 58,  221 => 57,  217 => 56,  212 => 54,  209 => 53,  207 => 52,  204 => 51,  200 => 49,  199 => 48,  195 => 46,  189 => 45,  173 => 44,  170 => 43,  169 => 42,  166 => 41,  164 => 40,  160 => 38,  158 => 37,  155 => 36,  141 => 34,  133 => 31,  130 => 30,  128 => 29,  126 => 28,  123 => 27,  117 => 23,  112 => 21,  107 => 20,  99 => 18,  97 => 17,  88 => 14,  86 => 13,  83 => 12,  79 => 10,  65 => 9,  59 => 8,  55 => 6,  53 => 5,  52 => 4,  43 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewforum_body.html", "");
    }
}
