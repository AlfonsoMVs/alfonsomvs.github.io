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

/* forumlist_body.html */
class __TwigTemplate_64b8c125c5de43a845f07fd1d66bf04ea6ddf93520c9266afe337dd6b069140a extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 4
                echo "\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 8
            echo "
\t";
            // line 9
            // line 10
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", []) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", [])) || $this->getAttribute($context["forumrow"], "S_NO_CAT", []))) {
                // line 11
                echo "\t\t<div id=\"forumCat";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                echo "\" class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 15
                // line 16
                echo "\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 17
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 18
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 22
                // line 23
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 27
            echo "\t";
            // line 28
            echo "
\t";
            // line 29
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", [])) {
                // line 30
                echo "\t\t";
                // line 31
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 32
                // line 33
                echo "\t\t\t<dl class=\"icon ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", []);
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", [])) {
                    echo " noicon";
                }
                echo "\">
\t\t\t\t<dt>
\t\t\t\t\t";
                // line 35
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 36
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 37
                if ((($context["S_ENABLE_FEEDS"] ?? null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", []))) {
                    echo "<a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                    echo "\"><dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                    echo "</dfn></a>";
                }
                // line 38
                echo "
\t\t\t\t\t\t";
                // line 39
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", [])) {
                    // line 40
                    echo "\t\t\t\t\t\t\t";
                    // line 41
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", []);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 42
                    // line 43
                    echo "\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"forumtitle\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", []);
                echo "\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 45
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", [])) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", []);
                }
                // line 46
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", [])) {
                    // line 47
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", []);
                    echo "
\t\t\t\t\t\t";
                }
                // line 49
                echo "
\t\t\t\t\t\t";
                // line 50
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 51
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 52
                    if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 54
$context["forumrow"], "S_IS_LINK", []) && $this->getAttribute($context["forumrow"], "TOPICS", []))) {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 61
                if ($this->getAttribute($context["forumrow"], "CLICKS", [])) {
                    // line 62
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", []);
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 63
$context["forumrow"], "S_IS_LINK", [])) {
                    // line 64
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 65
                    echo $this->getAttribute($context["forumrow"], "POSTS", []);
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t";
                    // line 67
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", [])) {
                        // line 68
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", []);
                        echo "\">";
                        echo ($context["UNAPPROVED_IMG"] ?? null);
                        echo "</a>
\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 69
$context["forumrow"], "U_UNAPPROVED_POSTS", [])) {
                        // line 70
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", []);
                        echo "\">";
                        echo ($context["UNAPPROVED_POST_IMG"] ?? null);
                        echo "</a>
\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t";
                        // line 73
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", [])) {
                            // line 74
                            echo "\t\t\t\t\t\t";
                            // line 75
                            echo "\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", []);
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", []);
                            echo "</a> <br />
\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t";
                        // line 78
                        echo "\t\t\t\t\t";
                        if ( !$this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", [])) {
                            // line 79
                            echo "\t\t\t\t\t";
                            if ( !($context["S_IS_BOT"] ?? null)) {
                                echo "<a href=\"";
                                echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                                echo "\">";
                                echo ($context["LAST_POST_IMG"] ?? null);
                                echo "</a> ";
                            }
                            // line 80
                            echo "\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t<span class=\"time\">";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                        echo "</span>";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 86
                echo "\t\t\t</dl>
\t\t\t";
                // line 87
                // line 88
                echo "
\t\t\t<div class=\"subforums-block\">
\t\t\t\t";
                // line 90
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", [])) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", []))) {
                    // line 91
                    echo "\t\t\t\t";
                    // line 92
                    echo "\t\t\t\t<div class=\"subforums-wrapper\">
\t\t\t\t\t";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 94
                        echo "\t\t\t\t\t";
                        // line 95
                        echo "\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", []);
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", [])) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t";
                        // line 96
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", []);
                        echo "
                    </a>
\t\t\t\t\t";
                        // line 98
                        // line 99
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "\t\t\t\t</div>
\t\t\t\t";
                    // line 101
                    // line 102
                    echo "\t\t\t\t";
                }
                // line 103
                echo "\t\t\t</div>
\t\t</li>
\t\t";
                // line 105
                // line 106
                echo "\t";
            }
            // line 107
            echo "
\t";
            // line 108
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", [])) {
                // line 109
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 113
                // line 114
                echo "\t";
            }
            // line 115
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 119
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 119,  409 => 117,  403 => 115,  400 => 114,  399 => 113,  393 => 109,  391 => 108,  388 => 107,  385 => 106,  384 => 105,  380 => 103,  377 => 102,  376 => 101,  373 => 100,  367 => 99,  366 => 98,  361 => 96,  344 => 95,  342 => 94,  338 => 93,  335 => 92,  333 => 91,  331 => 90,  327 => 88,  326 => 87,  323 => 86,  319 => 84,  307 => 81,  304 => 80,  295 => 79,  292 => 78,  290 => 77,  280 => 75,  278 => 74,  276 => 73,  269 => 72,  261 => 70,  259 => 69,  252 => 68,  250 => 67,  243 => 65,  236 => 64,  234 => 63,  226 => 62,  224 => 61,  220 => 59,  216 => 57,  207 => 55,  205 => 54,  197 => 53,  195 => 52,  192 => 51,  190 => 50,  187 => 49,  178 => 47,  175 => 46,  170 => 45,  161 => 44,  158 => 43,  157 => 42,  152 => 41,  150 => 40,  148 => 39,  145 => 38,  129 => 37,  126 => 36,  120 => 35,  111 => 33,  110 => 32,  107 => 31,  105 => 30,  103 => 29,  100 => 28,  98 => 27,  92 => 23,  91 => 22,  86 => 20,  82 => 19,  78 => 18,  66 => 17,  63 => 16,  62 => 15,  54 => 11,  51 => 10,  50 => 9,  47 => 8,  41 => 4,  38 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
