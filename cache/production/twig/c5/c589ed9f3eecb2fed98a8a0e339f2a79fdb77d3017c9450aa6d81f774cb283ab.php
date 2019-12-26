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

/* memberlist_team.html */
class __TwigTemplate_a6275d54027ef3c0bbb1036eead46e698e87d9c8016f3b0135311b36ee9105c0 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "memberlist_team.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

<form method=\"post\" action=\"";
        // line 5
        echo ($context["S_MODE_ACTION"] ?? null);
        echo "\">

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "group", []));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 8
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\" id=\"team\">
\t<thead>
\t<tr>
\t\t<th class=\"name\" data-dfn=\"";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\"><span class=\"rank-img\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo "&nbsp;</span>";
            if ($this->getAttribute($context["group"], "U_GROUP", [])) {
                echo "<a href=\"";
                echo $this->getAttribute($context["group"], "U_GROUP", []);
                echo "\">";
                echo $this->getAttribute($context["group"], "GROUP_NAME", []);
                echo "</a>";
            } else {
                echo $this->getAttribute($context["group"], "GROUP_NAME", []);
            }
            echo "</th>
\t\t<th class=\"info\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIMARY_GROUP");
            echo "</th>
\t\t";
            // line 16
            if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                echo "<th class=\"info\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                echo "</th>";
            }
            // line 17
            echo "\t</tr>
\t</thead>
\t<tbody>
";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "user", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 21
                echo "\t<tr class=\"";
                if (($this->getAttribute($context["user"], "S_ROW_COUNT", []) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute($context["user"], "S_INACTIVE", [])) {
                    echo " inactive";
                }
                echo "\">
\t\t<td>";
                // line 22
                if ($this->getAttribute($context["user"], "RANK_IMG", [])) {
                    echo "<span class=\"rank-img\">";
                    echo $this->getAttribute($context["user"], "RANK_IMG", []);
                    echo "</span>";
                } else {
                    echo "<span class=\"rank-img\">";
                    echo $this->getAttribute($context["user"], "RANK_TITLE", []);
                    echo "</span>";
                }
                echo $this->getAttribute($context["user"], "USERNAME_FULL", []);
                if ($this->getAttribute($context["user"], "S_INACTIVE", [])) {
                    echo " (";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE");
                    echo ")";
                }
                echo "</td>
\t\t<td class=\"info\">";
                // line 23
                if ($this->getAttribute($context["user"], "U_GROUP", [])) {
                    // line 24
                    echo "\t\t\t<a";
                    if ($this->getAttribute($context["user"], "GROUP_COLOR", [])) {
                        echo " style=\"font-weight: bold; color: #";
                        echo $this->getAttribute($context["user"], "GROUP_COLOR", []);
                        echo "\"";
                    }
                    echo " href=\"";
                    echo $this->getAttribute($context["user"], "U_GROUP", []);
                    echo "\">";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", []);
                    echo "</a>
\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", []);
                    echo "
\t\t\t";
                }
                // line 27
                echo "</td>
\t\t";
                // line 28
                if (($context["S_DISPLAY_MODERATOR_FORUMS"] ?? null)) {
                    // line 29
                    echo "\t\t\t<td class=\"info\">";
                    if ($this->getAttribute($context["user"], "FORUM_OPTIONS", [])) {
                        echo "<select style=\"width: 100%;\">";
                        echo $this->getAttribute($context["user"], "FORUMS", []);
                        echo "</select>";
                    } elseif ($this->getAttribute($context["user"], "FORUMS", [])) {
                        echo $this->getAttribute($context["user"], "FORUMS", []);
                    } else {
                        echo "-";
                    }
                    echo "</td>
\t\t";
                }
                // line 31
                echo "\t</tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 33
                echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"3\"><strong>";
                // line 34
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
                echo "</strong></td>
\t</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t</tbody>
\t</table>

\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</form>

";
        // line 46
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_team.html", 46)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 47
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_team.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_team.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 47,  210 => 46,  205 => 43,  194 => 37,  185 => 34,  182 => 33,  176 => 31,  162 => 29,  160 => 28,  157 => 27,  151 => 26,  137 => 24,  135 => 23,  117 => 22,  105 => 21,  100 => 20,  95 => 17,  89 => 16,  85 => 15,  67 => 14,  59 => 8,  55 => 7,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_team.html", "");
    }
}
