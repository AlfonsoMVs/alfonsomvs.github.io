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

/* memberlist_view.html */
class __TwigTemplate_f2bab1e45b9a0adaf783a7ea421a685f56b22e6d33b7d658b25841f0bb0a5119 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" id=\"viewprofile\">
<div class=\"profile-inner\">
<div class=\"panel top bg1 ";
        // line 9
        if (($context["S_ONLINE"] ?? null)) {
            echo "online";
        }
        echo " \">
\t<div class=\"inner\">

\t";
        // line 12
        if (($context["AVATAR_IMG"] ?? null)) {
            // line 13
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">";
            // line 14
            echo ($context["AVATAR_IMG"] ?? null);
            echo "</dt>
\t\t\t";
            // line 15
            // line 16
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 17
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 18
            echo "\t\t\t";
            // line 19
            echo "\t\t</dl>
\t";
        }
        // line 21
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 25
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: ";
            echo ($context["USER_COLOR"] ?? null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo ($context["USERNAME"] ?? null);
        echo "</span>
\t\t\t";
        // line 26
        if (($context["U_EDIT_SELF"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_EDIT_SELF"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t";
        if (($context["U_USER_ADMIN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_ADMIN"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t";
        if (($context["U_USER_BAN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_BAN"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t\t";
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 30
        echo "\t\t</dd>
\t\t";
        // line 31
        if ( !($context["AVATAR_IMG"] ?? null)) {
            // line 32
            echo "\t\t\t";
            // line 33
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</dt> <dd>";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dt>";
                if (($context["RANK_TITLE"] ?? null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                }
                echo "</dt> <dd>";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t";
            // line 36
            echo "\t\t";
        }
        // line 37
        echo "\t\t";
        if (($context["S_USER_INACTIVE"] ?? null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if ((($context["AGE"] ?? null) !== "")) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["AGE"] ?? null);
            echo "</dd>";
        }
        // line 39
        echo "\t\t";
        if (($context["S_GROUP_OPTIONS"] ?? null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo ($context["S_GROUP_OPTIONS"] ?? null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 40
        echo "\t\t";
        // line 41
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 42
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", [])) {
                // line 43
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", []);
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</dt> <dd>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", []);
                echo "</dd>
\t\t\t";
            }
            // line 45
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t";
        // line 48
        echo "\t\t";
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ($context["S_ZEBRA"] ?? null))) {
            // line 49
            echo "\t\t\t";
            if (($context["U_REMOVE_FRIEND"] ?? null)) {
                // line 50
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FRIEND"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 51
($context["U_REMOVE_FOE"] ?? null)) {
                // line 52
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FOE"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t";
                if (($context["U_ADD_FRIEND"] ?? null)) {
                    // line 55
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FRIEND"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
                if (($context["U_ADD_FOE"] ?? null)) {
                    // line 58
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FOE"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 60
                echo "\t\t\t";
            }
            // line 61
            echo "\t\t";
        }
        // line 62
        echo "\t\t";
        // line 63
        echo "\t</dl>

\t</div>
</div>

";
        // line 68
        // line 69
        echo "<div class=\"panel bottom bg2\">
\t<div class=\"inner\">

\t<div class=\"col column1 stats\">
\t\t<h3>";
        // line 73
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 75
        // line 76
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t<dt>";
        // line 77
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_ACTIVE"] ?? null);
        echo "</dd>
\t\t\t";
        // line 78
        if (($context["S_WARNINGS"] ?? null)) {
            // line 79
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 80
            echo ($context["WARNINGS"] ?? null);
            echo "</strong>";
            if ((($context["U_NOTES"] ?? null) || ($context["U_WARN"] ?? null))) {
                echo " [ ";
                if (($context["U_NOTES"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_NOTES"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (($context["U_WARN"] ?? null)) {
                    if (($context["U_NOTES"] ?? null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo ($context["U_WARN"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 82
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 83
        echo ($context["POSTS"] ?? null);
        echo " ";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "| <strong><a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 84
        echo "\t\t\t\t\t";
        if (($context["POSTS_PCT"] ?? null)) {
            echo "<br />(";
            echo ($context["POSTS_PCT"] ?? null);
            echo " / ";
            echo ($context["POSTS_DAY"] ?? null);
            echo ")";
        }
        // line 85
        echo "\t\t\t\t\t";
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            echo "<br />(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif (($context["POSTS_IN_QUEUE"] ?? null)) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 86
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 87
        if ((($context["S_SHOW_ACTIVITY"] ?? null) && ($context["POSTS"] ?? null))) {
            // line 88
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_FORUM"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_FORUM"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_FORUM_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_TOPIC"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_TOPIC"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 91
        echo "\t\t\t";
        // line 92
        echo "\t\t</dl>
\t</div>

\t<div class=\"col column2 contact\">
\t\t<h3>";
        // line 96
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_USER");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t";
        // line 98
        if (($context["U_EMAIL"] ?? null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_EMAIL"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 99
        echo "\t\t";
        if (($context["U_PM"] ?? null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_PM"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 100
        echo "\t\t";
        if ((($context["U_JABBER"] ?? null) && ($context["S_JABBER_ENABLED"] ?? null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_JABBER"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif (($context["USER_JABBER"] ?? null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_JABBER"] ?? null);
            echo "</dd>";
        }
        // line 101
        echo "\t\t";
        // line 102
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 103
            echo "\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", [])) {
                // line 104
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", []);
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 105
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", [])) {
                    // line 106
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", []);
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", []);
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", []);
                    echo "</dd>
\t\t\t\t";
                }
                // line 110
                echo "\t\t\t";
            }
            // line 111
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t";
        // line 113
        echo "\t\t";
        if (($context["S_PROFILE_FIELD1"] ?? null)) {
            // line 114
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 115
            echo ($context["PROFILE_FIELD1_NAME"] ?? null);
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["PROFILE_FIELD1_VALUE"] ?? null);
            echo "</dd>
\t\t";
        }
        // line 117
        echo "\t\t</dl>
\t</div>

\t</div><!-- .inner -->
</div>
";
        // line 122
        // line 123
        echo "
";
        // line 124
        if (($context["SIGNATURE"] ?? null)) {
            // line 125
            echo "<div class=\"panel signature bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 128
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 130
            echo ($context["SIGNATURE"] ?? null);
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 135
        echo "</div>
</form>

";
        // line 138
        // line 139
        echo "
";
        // line 140
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 140)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 141
        echo "
";
        // line 142
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 142)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 142,  621 => 141,  609 => 140,  606 => 139,  605 => 138,  600 => 135,  592 => 130,  587 => 128,  582 => 125,  580 => 124,  577 => 123,  576 => 122,  569 => 117,  561 => 115,  558 => 114,  555 => 113,  553 => 112,  547 => 111,  544 => 110,  538 => 108,  530 => 106,  528 => 105,  522 => 104,  519 => 103,  514 => 102,  512 => 101,  493 => 100,  481 => 99,  470 => 98,  465 => 96,  459 => 92,  457 => 91,  437 => 89,  417 => 88,  415 => 87,  412 => 86,  399 => 85,  390 => 84,  380 => 83,  374 => 82,  346 => 80,  340 => 79,  338 => 78,  331 => 77,  323 => 76,  322 => 75,  317 => 73,  311 => 69,  310 => 68,  303 => 63,  301 => 62,  298 => 61,  295 => 60,  287 => 58,  284 => 57,  276 => 55,  273 => 54,  265 => 52,  263 => 51,  256 => 50,  253 => 49,  250 => 48,  248 => 47,  246 => 46,  240 => 45,  231 => 43,  228 => 42,  223 => 41,  221 => 40,  209 => 39,  199 => 38,  189 => 37,  186 => 36,  184 => 35,  170 => 34,  160 => 33,  158 => 32,  156 => 31,  153 => 30,  144 => 29,  135 => 28,  126 => 27,  118 => 26,  107 => 25,  101 => 23,  97 => 21,  93 => 19,  91 => 18,  84 => 17,  77 => 16,  76 => 15,  72 => 14,  69 => 13,  67 => 12,  59 => 9,  54 => 7,  51 => 6,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_view.html", "");
    }
}
