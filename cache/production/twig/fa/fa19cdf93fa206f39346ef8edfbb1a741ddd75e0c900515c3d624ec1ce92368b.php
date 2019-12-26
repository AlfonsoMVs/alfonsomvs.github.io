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

/* search_results.html */
class __TwigTemplate_37907746ffec7076cb7d54c4492be924ff0204078024da8ad65e382142f68e86 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 7
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</strong></p>";
        }
        // line 8
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 11
            echo "\t<p class=\"return-link\"><a class=\"arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } else {
            // line 13
            echo "\t<p class=\"advanced-search-link\"><a class=\"arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
";
        // line 18
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 19
            echo "\t<div class=\"action-bar top\">

\t";
            // line 21
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 22
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 23
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 25
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 26
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 27
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 32
            echo "
\t\t";
            // line 33
            // line 34
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 36
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 37
            echo "\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t";
            // line 38
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 39
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 39)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 40
                echo "\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 43
            echo "\t\t</div>
\t</div>
";
        }
        // line 46
        echo "
";
        // line 47
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 48
            echo "
\t";
            // line 49
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", []))) {
                // line 50
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 56
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 58
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 59
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", []));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 66
                    echo "\t\t\t";
                    // line 67
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", []) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 68
                    echo $this->getAttribute($context["searchresults"], "TOPIC_IMG_STYLE", []);
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 69
                    if ($this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", [])) {
                        echo "style=\"background-image: url(";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo $this->getAttribute($context["searchresults"], "TOPIC_ICON_IMG", []);
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", []);
                    echo "\">
\t\t\t\t\t\t";
                    // line 70
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", []);
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 73
                    // line 74
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", []) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", []);
                        echo "\">";
                        echo ($context["NEWEST_POST_IMG"] ?? null);
                        echo "</a> ";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", []);
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", []);
                    echo "</a> ";
                    echo $this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", []);
                    echo "
\t\t\t\t\t\t\t";
                    // line 76
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", []))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", []);
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "UNAPPROVED_IMG", []);
                        echo "</a> ";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_DELETED", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", []);
                        echo "\">";
                        echo ($context["DELETED_IMG"] ?? null);
                        echo "</a> ";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", []);
                        echo "\">";
                        echo ($context["REPORTED_IMG"] ?? null);
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 79
                    if (twig_length_filter($this->env, $this->getAttribute($context["searchresults"], "pagination", []))) {
                        // line 80
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 82
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["searchresults"], "pagination", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 83
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 85
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute(                            // line 86
$context["pagination"], "S_IS_NEXT", [])) {
                                // line 87
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                                echo "\">";
                                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 89
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", [])) {
                        echo ($context["POLL_IMG"] ?? null);
                        echo " ";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", []);
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", []);
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", []);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 95
                    // line 96
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 99
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", []);
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 100
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", []);
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 102
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", []);
                    echo "
\t\t\t\t\t\t";
                    // line 103
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", []);
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo ($context["LAST_POST_IMG"] ?? null);
                        echo "</a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", []);
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 107
                    // line 108
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 114
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 116
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 120
            echo "
";
        } else {
            // line 122
            echo "
\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "searchresults", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 124
                echo "\t\t";
                // line 125
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute($context["searchresults"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", [])) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 128
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", [])) {
                    // line 129
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 130
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", []);
                    echo "
\t\t</div>
\t";
                } else {
                    // line 133
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 134
                    // line 135
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", []);
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 136
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", []);
                    echo "</dd>
\t\t\t<dd>";
                    // line 137
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", []);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 138
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", []);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 139
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", []);
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 140
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", []);
                    echo "</strong></dd>
\t\t\t";
                    // line 141
                    // line 142
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 145
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", []);
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", []);
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 146
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", []);
                    echo "</div>
\t\t</div>
\t";
                }
                // line 149
                echo "
\t";
                // line 150
                if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", [])) {
                    // line 151
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 152
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", []);
                    echo "\" class=\"arrow-";
                    echo ($context["S_CONTENT_FLOW_END"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 155
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 158
                // line 159
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 160
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 162
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 167
        echo "
";
        // line 168
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", []))) || ($context["S_SELECT_SORT_KEY"] ?? null)) || ($context["S_SELECT_SORT_DAYS"] ?? null))) {
            // line 169
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 172
            if ((($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null))) {
                // line 173
                echo "\t\t\t<label>";
                if (($context["S_SHOW_TOPICS"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo ($context["S_SELECT_SORT_DAYS"] ?? null);
                if (($context["S_SELECT_SORT_KEY"] ?? null)) {
                    echo "</label> <label>";
                    echo ($context["S_SELECT_SORT_KEY"] ?? null);
                    echo "</label>
\t\t\t<label>";
                    // line 174
                    echo ($context["S_SELECT_SORT_DIR"] ?? null);
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 175
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 177
            echo "\t</fieldset>

\t</form>
";
        }
        // line 181
        echo "
";
        // line 182
        if (((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "searchresults", []))) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 183
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 185
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t";
            // line 186
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 187
                echo "\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 187)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 188
                echo "\t\t";
            } else {
                // line 189
                echo "\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t";
            }
            // line 191
            echo "\t</div>
</div>
";
        }
        // line 194
        echo "
";
        // line 195
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 195)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 196
        echo "
";
        // line 197
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 197)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 197,  720 => 196,  708 => 195,  705 => 194,  700 => 191,  694 => 189,  691 => 188,  678 => 187,  676 => 186,  672 => 185,  668 => 183,  666 => 182,  663 => 181,  657 => 177,  652 => 175,  647 => 174,  632 => 173,  630 => 172,  623 => 169,  621 => 168,  618 => 167,  607 => 162,  603 => 160,  598 => 159,  597 => 158,  592 => 155,  582 => 152,  579 => 151,  577 => 150,  574 => 149,  568 => 146,  562 => 145,  557 => 142,  556 => 141,  549 => 140,  542 => 139,  533 => 138,  524 => 137,  520 => 136,  513 => 135,  512 => 134,  509 => 133,  503 => 130,  500 => 129,  498 => 128,  484 => 125,  482 => 124,  477 => 123,  474 => 122,  470 => 120,  463 => 116,  459 => 114,  452 => 109,  446 => 108,  445 => 107,  428 => 103,  422 => 102,  417 => 100,  413 => 99,  408 => 96,  407 => 95,  392 => 94,  386 => 93,  381 => 90,  375 => 89,  365 => 87,  363 => 86,  357 => 85,  350 => 84,  347 => 83,  343 => 82,  339 => 80,  337 => 79,  326 => 78,  317 => 77,  309 => 76,  300 => 75,  291 => 74,  290 => 73,  286 => 71,  280 => 70,  269 => 69,  265 => 68,  256 => 67,  254 => 66,  250 => 65,  241 => 59,  237 => 58,  233 => 57,  229 => 56,  221 => 50,  219 => 49,  216 => 48,  214 => 47,  211 => 46,  206 => 43,  200 => 41,  197 => 40,  184 => 39,  182 => 38,  177 => 37,  169 => 36,  165 => 34,  164 => 33,  161 => 32,  149 => 27,  143 => 26,  139 => 25,  134 => 23,  131 => 22,  129 => 21,  125 => 19,  123 => 18,  120 => 17,  119 => 16,  116 => 15,  104 => 13,  94 => 11,  92 => 10,  89 => 9,  83 => 8,  74 => 7,  65 => 6,  49 => 5,  46 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
