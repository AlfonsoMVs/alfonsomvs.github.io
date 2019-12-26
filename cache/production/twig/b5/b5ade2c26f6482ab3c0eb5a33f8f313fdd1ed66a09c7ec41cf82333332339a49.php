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

/* index_body.html */
class __TwigTemplate_2c8f38ebe9976536d73b02a3e370b632b43fe36b9a1a3cf6d7a2d664b4a5806e extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo " hidden-xs\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time hidden-xs\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        echo "
";
        // line 8
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 9
        echo "
";
        // line 10
        // line 11
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 12
            echo "<div class=\"action-bar compact\">
\t<a href=\"";
            // line 13
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
</div>
";
        }
        // line 16
        echo "
";
        // line 17
        // line 18
        echo "
";
        // line 19
        // line 20
        echo "
<div class=\"stats-blocks\">
  ";
        // line 22
        if (($context["NEWEST_USER"] ?? null)) {
            // line 23
            echo "    <div class=\"col-block statistics\">
      <h3>
        <i class=\"fa fa-fw fa-signal\"></i>
        ";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "
      </h3>
      <ul>
        ";
            // line 29
            // line 30
            echo "        <li>";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "</li>
        <li>";
            // line 31
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "</li>
        <li>";
            // line 32
            echo ($context["TOTAL_USERS"] ?? null);
            echo "</li>
        ";
            // line 33
            // line 34
            echo "      </ul>
      <p>";
            // line 35
            echo ($context["NEWEST_USER"] ?? null);
            echo "</p>
    </div>
  ";
        }
        // line 38
        echo "
    ";
        // line 39
        // line 40
        echo "
    ";
        // line 41
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 42
            echo "\t\t<div class=\"col-block birthday-list\">
\t\t\t<h3>
\t\t\t\t<i class=\"fa fa-fw fa-birthday-cake\"></i>
\t\t\t\t";
            // line 45
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "
\t\t\t</h3>
\t\t\t<p>
\t\t\t\t";
            // line 48
            // line 49
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", []))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", []));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", []);
                    if (($this->getAttribute($context["birthdays"], "AGE", []) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", []);
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", [])) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 50
            echo "\t\t\t\t";
            // line 51
            echo "\t\t\t</p>
\t\t</div>
\t";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 56
            echo "    <div class=\"col-block online-list\">
      <h3>
        <i class=\"fa fa-fw fa-users\"></i>
        ";
            // line 59
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a>
        ";
            } else {
                // line 60
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
            }
            // line 61
            echo "      </h3>
      <p>
        ";
            // line 63
            // line 64
            echo "        ";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo "<br />

        ";
            // line 66
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 67
                echo "            <p class=\"online-users\">";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "</p>
            ";
                // line 68
                if (($context["LEGEND"] ?? null)) {
                    echo "<em class=\"legend\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 69
                echo "        ";
            }
            // line 70
            echo "
        ";
            // line 71
            // line 72
            echo "      </p>
    </div>
  ";
        }
        // line 75
        echo "</div>

";
        // line 77
        // line 78
        echo "
";
        // line 79
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 79,  270 => 78,  269 => 77,  265 => 75,  260 => 72,  259 => 71,  256 => 70,  253 => 69,  244 => 68,  239 => 67,  237 => 66,  231 => 64,  230 => 63,  226 => 61,  223 => 60,  214 => 59,  209 => 56,  207 => 55,  204 => 54,  199 => 51,  197 => 50,  171 => 49,  170 => 48,  164 => 45,  159 => 42,  157 => 41,  154 => 40,  153 => 39,  150 => 38,  144 => 35,  141 => 34,  140 => 33,  136 => 32,  132 => 31,  127 => 30,  126 => 29,  120 => 26,  115 => 23,  113 => 22,  109 => 20,  108 => 19,  105 => 18,  104 => 17,  101 => 16,  93 => 13,  90 => 12,  88 => 11,  87 => 10,  84 => 9,  72 => 8,  69 => 7,  68 => 6,  65 => 5,  59 => 4,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
