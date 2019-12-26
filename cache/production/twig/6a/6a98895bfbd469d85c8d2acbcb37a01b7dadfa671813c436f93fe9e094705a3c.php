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

/* viewtopic_body.html */
class __TwigTemplate_e0a77550d4a99e188d588c28c27542f1f40174bc3f5fe4f05c8396cabc78b4ac extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"topic-title\">";
        // line 5
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 6
        // line 7
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 8
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["MODERATORS"] ?? null)) {
            // line 11
            echo "<p>
\t<strong>";
            // line 12
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 15
        echo "
";
        // line 16
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 17
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 20
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 21
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 23
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 24
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 26
            echo "
\t\t</div>
\t</div>
";
        }
        // line 30
        echo "
<div class=\"action-bar top\">

\t<div class=\"buttons\">
\t\t";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 37
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button icon-button ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 38
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
            }
            // line 39
            echo "\t\t</a>
\t";
        }
        // line 41
        echo "
\t\t";
        // line 42
        // line 43
        echo "\t</div>

\t";
        // line 45
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 46
        echo "\t";
        // line 47
        echo "
\t";
        // line 48
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 49
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 50
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 52
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 53
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
\t\t\t\t<a href=\"";
            // line 54
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t";
            // line 55
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 60
        echo "
\t";
        // line 61
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 62
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 63
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 64
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 65
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 65)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 66
                echo "\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 69
            echo "\t\t</div>
\t";
        }
        // line 71
        echo "\t";
        // line 72
        echo "</div>

";
        // line 74
        // line 75
        echo "
";
        // line 76
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 77
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 83
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "poll_option", []));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 88
                echo "\t\t\t\t";
                // line 89
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                    echo "voted";
                }
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_MOST_VOTES", [])) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                echo "\">
\t\t\t\t\t<dt>";
                // line 90
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                    echo "\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", []);
                    echo "</label>";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", []);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 91
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", []);
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", [])) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 92
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", []) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT_REL", []);
                echo ";\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", []);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 93
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", []) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", []);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 95
                // line 96
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 98
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 100
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 103
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 104
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 106
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 109
            echo "
\t\t\t";
            // line 110
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 111
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 113
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 116
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 117
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 121
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 122
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
";
        }
        // line 127
        echo "
";
        // line 128
        // line 129
        echo "
";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", []));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 131
            echo "\t";
            // line 132
            echo "\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", [])) {
                // line 133
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", []);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 135
            echo "\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\" class=\"post has-profile ";
            if (($this->getAttribute($context["postrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", [])) {
                echo " unreadpost";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", [])) {
                echo " reported";
            }
            if ($this->getAttribute($context["postrow"], "S_POST_DELETED", [])) {
                echo " deleted";
            }
            if (($this->getAttribute($context["postrow"], "S_ONLINE", []) &&  !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", []))) {
                echo " online";
            }
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", [])) {
                echo " warned";
            }
            echo " ";
            echo ($context["C_AVATARS_POS"] ?? null);
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 138
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 139
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) || $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", [])) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 141
            // line 142
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", [])) {
                // line 143
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", []);
                    echo "\" class=\"avatar ";
                    echo ($context["C_AVATARS_SHAPE"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", []);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", []);
                    echo "</span>";
                }
                // line 144
                echo "\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t";
            // line 146
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 147
            // line 148
            echo "\t\t\t\t";
            if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", [])) {
                echo "<strong>";
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", []);
                echo "</strong>";
            } else {
                echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", []);
            }
            // line 149
            echo "\t\t\t\t";
            // line 150
            echo "\t\t\t</dt>

\t\t\t";
            // line 152
            // line 153
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) || $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute($context["postrow"], "RANK_TITLE", []);
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", []) && $this->getAttribute($context["postrow"], "RANK_IMG", []))) {
                    echo "<br />";
                }
                echo $this->getAttribute($context["postrow"], "RANK_IMG", []);
                echo "</dd>";
            }
            // line 154
            echo "\t\t\t";
            // line 155
            echo "
\t\t\t";
            // line 156
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", [])))) {
                // line 157
                echo "\t\t\t\t<dd class=\"profile-contact\">
\t\t\t\t\t<strong>";
                // line 158
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong>
\t\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\" title=\"";
                // line 160
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", []);
                echo "\">";
                echo $this->getAttribute($context["postrow"], "CONTACT_USER", []);
                echo "</span></a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t\t";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", []));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", []) % 4);
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", []) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", []) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute($context["contact"], "U_CONTACT", [])) {
                        echo $this->getAttribute($context["contact"], "U_CONTACT", []);
                    } else {
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", []);
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["contact"], "NAME", []);
                    echo "\"";
                    if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", [])) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute($context["contact"], "ID", []) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 171
                    echo $this->getAttribute($context["contact"], "ID", []);
                    echo "-icon\">";
                    echo $this->getAttribute($context["contact"], "NAME", []);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 173
                    if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", []))) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t";
            }
            // line 182
            echo "
\t\t\t";
            // line 183
            if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", [])) {
                // line 184
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 185
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", []);
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", []);
                echo "</dd>
\t\t\t";
            }
            // line 187
            echo "
\t\t\t";
            // line 188
            // line 189
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 190
                echo "\t\t\t";
                if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", [])) {
                    // line 191
                    echo "\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", []);
                    echo "\"><strong>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", []);
                    echo "</dd>
\t\t\t";
                }
                // line 193
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t";
            // line 195
            echo "
\t\t\t";
            // line 196
            // line 197
            echo "
\t\t\t<div class=\"profile-meta\">
\t\t\t\t";
            // line 199
            if (($this->getAttribute($context["postrow"], "POSTER_POSTS", []) != "")) {
                echo "<dd class=\"profile-posts\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo $this->getAttribute($context["postrow"], "POSTER_POSTS", []);
                echo "</dd>";
            }
            // line 200
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_JOINED", [])) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_JOINED", []);
                echo "</dd>";
            }
            // line 201
            echo "\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", [])) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", []);
                echo "</dd>";
            }
            // line 202
            echo "\t\t\t</div>

\t\t\t";
            // line 204
            // line 205
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 209
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                // line 210
                echo "\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", [])) {
                    // line 211
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 212
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", []);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 213
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", []);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute(                // line 215
$context["postrow"], "S_IGNORE_POST", [])) {
                    // line 216
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute($context["postrow"], "POST_ID", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 217
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", []);
                    echo "<br />
\t\t\t\t\t\t";
                    // line 218
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", []);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 221
                echo "\t\t\t";
            }
            // line 222
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\"";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", [])) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 224
            // line 225
            echo "\t\t\t";
            if (($context["S_IS_BOT"] ?? null)) {
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", []);
            } else {
                echo "<a class=\"permalink\" href=\"";
                echo $this->getAttribute($context["postrow"], "U_MINI_POST", []);
                echo "\">";
                echo $this->getAttribute($context["postrow"], "MINI_POST_IMG", []);
                echo "</a>";
            }
            // line 226
            echo "\t\t\t<h3 ";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", [])) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", [])) {
                echo "<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", []);
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", []);
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", []);
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", []);
            echo "\" data-scroll>";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", []);
            echo "</a></h3>

\t\t";
            // line 228
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", []) || $this->getAttribute($context["postrow"], "U_DELETE", [])) || $this->getAttribute($context["postrow"], "U_REPORT", [])) || $this->getAttribute($context["postrow"], "U_WARN", [])) || $this->getAttribute($context["postrow"], "U_INFO", [])) || $this->getAttribute($context["postrow"], "U_QUOTE", []));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 229
            echo "\t\t";
            // line 230
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 231
                echo "\t\t\t";
                if ($this->getAttribute(($context["definition"] ?? null), "SHOW_POST_BUTTONS", [])) {
                    // line 232
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 233
                    // line 234
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_EDIT", [])) {
                        // line 235
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 236
                        echo $this->getAttribute($context["postrow"], "U_EDIT", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                        echo "\" class=\"button icon-button edit-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_EDIT");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 239
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_DELETE", [])) {
                        // line 240
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 241
                        echo $this->getAttribute($context["postrow"], "U_DELETE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "\" class=\"button icon-button delete-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 244
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_REPORT", [])) {
                        // line 245
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 246
                        echo $this->getAttribute($context["postrow"], "U_REPORT", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\" class=\"button icon-button report-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 249
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", [])) {
                        // line 250
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 251
                        echo $this->getAttribute($context["postrow"], "U_WARN", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\" class=\"button icon-button warn-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 254
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", [])) {
                        // line 255
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 256
                        echo $this->getAttribute($context["postrow"], "U_INFO", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\" class=\"button icon-button info-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 259
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", [])) {
                        // line 260
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 261
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button icon-button quote-icon\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                        echo "</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t";
                    // line 265
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 267
                echo "\t\t";
            }
            // line 268
            echo "\t\t";
            // line 269
            echo "
\t\t\t";
            // line 270
            // line 271
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 272
            echo $this->getAttribute($context["postrow"], "POST_DATE", []);
            echo "
\t\t\t</p>
\t\t\t";
            // line 274
            // line 275
            echo "
\t\t\t";
            // line 276
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", [])) {
                // line 277
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", []);
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 279
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 280
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 281
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 282
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" />
\t\t\t\t\t";
                // line 283
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute(            // line 286
$context["postrow"], "S_POST_DELETED", [])) {
                // line 287
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", []);
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 289
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 290
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", [])) {
                    // line 291
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 293
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 294
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" />
\t\t\t\t\t";
                // line 295
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 299
            echo "
\t\t\t";
            // line 300
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", [])) {
                // line 301
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 302
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", []);
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 305
            echo "
\t\t\t<div class=\"content\">";
            // line 306
            echo $this->getAttribute($context["postrow"], "MESSAGE", []);
            echo "</div>

\t\t\t";
            // line 308
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", [])) {
                // line 309
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 311
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", []));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 314
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", []);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 318
            echo "
\t\t\t";
            // line 319
            // line 320
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", [])) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 321
            echo "\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", []) || $this->getAttribute($context["postrow"], "DELETE_REASON", []))) {
                // line 322
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 323
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", []);
                echo "
\t\t\t\t\t";
                // line 324
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", [])) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", []);
                    echo "</em>";
                }
                // line 325
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute(            // line 326
$context["postrow"], "EDITED_MESSAGE", []) || $this->getAttribute($context["postrow"], "EDIT_REASON", []))) {
                // line 327
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 328
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", []);
                echo "
\t\t\t\t\t";
                // line 329
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", [])) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", []);
                    echo "</em>";
                }
                // line 330
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 332
            echo "
\t\t\t";
            // line 333
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", [])) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", []);
                echo "</div>";
            }
            // line 334
            echo "\t\t\t";
            // line 335
            echo "\t\t\t";
            if ($this->getAttribute($context["postrow"], "SIGNATURE", [])) {
                echo "<div id=\"sig";
                echo $this->getAttribute($context["postrow"], "POST_ID", []);
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", []);
                echo "</div>";
            }
            // line 336
            echo "
\t\t\t";
            // line 337
            // line 338
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 342
            // line 343
            echo "\t\t<div class=\"back2top\">";
            echo "<a href=\"#top\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "</a>";
            echo "</div>
\t\t";
            // line 344
            // line 345
            echo "
\t\t</div>
\t</div>

\t";
            // line 349
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "
";
        // line 352
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 353
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 353)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 355
        echo "
";
        // line 356
        if (((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])))) {
            // line 357
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t";
            // line 359
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 360
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                echo "</label>
\t\t<label>";
                // line 361
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                echo " ";
                echo ($context["S_SELECT_SORT_KEY"] ?? null);
                echo "</label> <label>";
                echo ($context["S_SELECT_SORT_DIR"] ?? null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 362
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 364
            echo "\t</fieldset>
\t</form>
";
        }
        // line 367
        echo "
";
        // line 368
        // line 369
        echo "<div class=\"action-bar bottom\">
\t<div class=\"buttons\">
\t\t";
        // line 371
        // line 372
        echo "
\t";
        // line 373
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 374
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button icon-button ";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 375
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUTTON_POST_REPLY");
            }
            // line 376
            echo "\t\t</a>
\t";
        }
        // line 378
        echo "
\t\t";
        // line 379
        // line 380
        echo "\t</div>

\t";
        // line 382
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 382)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 383
        echo "
\t";
        // line 384
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "quickmod", []))) {
            // line 385
            echo "\t\t<div class=\"dropdown-container dropdown-container-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t\t<span title=\"";
            // line 386
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "\" class=\"dropdown-trigger button icon-button modtools-icon dropdown-select\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "quickmod", []));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 391
                echo "\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", []), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 392
                echo "\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", []);
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "QUICKMOD_AJAX", [])) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", []);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 398
        echo "
\t";
        // line 399
        // line 400
        echo "
\t";
        // line 401
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 402
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 403
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 404
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 405
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 405)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 406
                echo "\t\t\t";
            } else {
                // line 407
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 409
            echo "\t\t</div>
\t";
        }
        // line 411
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 414
        // line 415
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 415)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 416
        echo "
";
        // line 417
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 418
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 419
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 420
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 423
        echo "
";
        // line 424
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 424)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1509 => 424,  1506 => 423,  1500 => 420,  1494 => 419,  1491 => 418,  1489 => 417,  1486 => 416,  1474 => 415,  1473 => 414,  1468 => 411,  1464 => 409,  1458 => 407,  1455 => 406,  1442 => 405,  1440 => 404,  1436 => 403,  1433 => 402,  1431 => 401,  1428 => 400,  1427 => 399,  1424 => 398,  1418 => 394,  1403 => 392,  1399 => 391,  1395 => 390,  1386 => 386,  1379 => 385,  1377 => 384,  1374 => 383,  1362 => 382,  1358 => 380,  1357 => 379,  1354 => 378,  1350 => 376,  1344 => 375,  1327 => 374,  1325 => 373,  1322 => 372,  1321 => 371,  1317 => 369,  1316 => 368,  1313 => 367,  1308 => 364,  1303 => 362,  1295 => 361,  1287 => 360,  1285 => 359,  1279 => 357,  1277 => 356,  1274 => 355,  1260 => 353,  1258 => 352,  1255 => 351,  1250 => 349,  1244 => 345,  1243 => 344,  1234 => 343,  1233 => 342,  1227 => 338,  1226 => 337,  1223 => 336,  1214 => 335,  1212 => 334,  1206 => 333,  1203 => 332,  1199 => 330,  1190 => 329,  1186 => 328,  1183 => 327,  1181 => 326,  1178 => 325,  1169 => 324,  1165 => 323,  1162 => 322,  1159 => 321,  1152 => 320,  1151 => 319,  1148 => 318,  1144 => 316,  1135 => 314,  1131 => 313,  1126 => 311,  1122 => 309,  1120 => 308,  1115 => 306,  1112 => 305,  1104 => 302,  1101 => 301,  1099 => 300,  1096 => 299,  1089 => 295,  1085 => 294,  1080 => 293,  1074 => 291,  1072 => 290,  1068 => 289,  1062 => 287,  1060 => 286,  1054 => 283,  1050 => 282,  1046 => 281,  1042 => 280,  1038 => 279,  1032 => 277,  1030 => 276,  1027 => 275,  1026 => 274,  1021 => 272,  1018 => 271,  1017 => 270,  1014 => 269,  1012 => 268,  1009 => 267,  1005 => 265,  1003 => 264,  993 => 261,  990 => 260,  987 => 259,  977 => 256,  974 => 255,  971 => 254,  961 => 251,  958 => 250,  955 => 249,  945 => 246,  942 => 245,  939 => 244,  929 => 241,  926 => 240,  923 => 239,  913 => 236,  910 => 235,  907 => 234,  906 => 233,  903 => 232,  900 => 231,  897 => 230,  895 => 229,  892 => 228,  869 => 226,  858 => 225,  857 => 224,  847 => 222,  844 => 221,  838 => 218,  834 => 217,  829 => 216,  827 => 215,  822 => 213,  818 => 212,  813 => 211,  810 => 210,  808 => 209,  802 => 205,  801 => 204,  797 => 202,  787 => 201,  777 => 200,  768 => 199,  764 => 197,  763 => 196,  760 => 195,  758 => 194,  752 => 193,  741 => 191,  738 => 190,  733 => 189,  732 => 188,  729 => 187,  721 => 185,  718 => 184,  716 => 183,  713 => 182,  706 => 177,  700 => 176,  696 => 174,  694 => 173,  687 => 171,  669 => 170,  665 => 168,  662 => 167,  658 => 166,  655 => 165,  651 => 164,  642 => 160,  636 => 158,  633 => 157,  631 => 156,  628 => 155,  626 => 154,  615 => 153,  614 => 152,  610 => 150,  608 => 149,  599 => 148,  598 => 147,  595 => 146,  593 => 145,  590 => 144,  575 => 143,  572 => 142,  571 => 141,  556 => 139,  548 => 138,  518 => 135,  508 => 133,  505 => 132,  503 => 131,  499 => 130,  496 => 129,  495 => 128,  492 => 127,  484 => 122,  480 => 121,  473 => 117,  470 => 116,  462 => 113,  458 => 111,  456 => 110,  453 => 109,  447 => 106,  443 => 104,  441 => 103,  432 => 100,  425 => 98,  422 => 97,  416 => 96,  415 => 95,  402 => 93,  379 => 92,  353 => 91,  341 => 90,  321 => 89,  319 => 88,  315 => 87,  301 => 84,  297 => 83,  287 => 77,  285 => 76,  282 => 75,  281 => 74,  277 => 72,  275 => 71,  271 => 69,  265 => 67,  262 => 66,  249 => 65,  247 => 64,  236 => 63,  233 => 62,  231 => 61,  228 => 60,  220 => 55,  212 => 54,  206 => 53,  202 => 52,  197 => 50,  194 => 49,  192 => 48,  189 => 47,  187 => 46,  175 => 45,  171 => 43,  170 => 42,  167 => 41,  163 => 39,  157 => 38,  140 => 37,  138 => 36,  135 => 35,  134 => 34,  128 => 30,  122 => 26,  117 => 24,  112 => 23,  104 => 21,  102 => 20,  93 => 17,  91 => 16,  88 => 15,  75 => 12,  72 => 11,  70 => 10,  67 => 9,  61 => 8,  58 => 7,  57 => 6,  49 => 5,  46 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
