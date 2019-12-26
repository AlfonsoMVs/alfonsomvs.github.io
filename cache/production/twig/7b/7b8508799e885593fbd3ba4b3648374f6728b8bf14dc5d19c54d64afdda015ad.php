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

/* inc/navbar_header.html */
class __TwigTemplate_da65f20a3c102a052cf6bb1aee5af571c30c81ea8b83e4d12450335a9a817d6a extends \Twig\Template
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
        echo "<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks";
        if (($context["C_SOCIAL_LINKS_ON"] ?? null)) {
            echo " has-social-links";
        }
        echo "\" role=\"menubar\">
  ";
        // line 2
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 3
        echo "  ";
        // line 4
        echo "  <li class=\"small-icon icon-home breadcrumbs\">
    ";
        // line 5
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>";
        }
        // line 6
        echo "    ";
        // line 7
        echo "    <span class=\"crumb\"";
        echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "navlinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 9
            echo "      ";
            // line 10
            echo "      <span class=\"crumb\"";
            echo $this->getAttribute(($context["definition"] ?? null), "MICRODATA", []);
            if ($this->getAttribute($context["navlinks"], "MICRODATA", [])) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", []);
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", []);
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", []);
            echo "</span></a></span>
      ";
            // line 11
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        // line 14
        echo "  </li>
  ";
        // line 15
        // line 16
        echo "
  ";
        // line 22
        echo "</ul>

";
        // line 24
        if (($context["C_SOCIAL_LINKS_ON"] ?? null)) {
            // line 25
            echo "  <ul class=\"social-links col-xs-4\">
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_social_links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["c_social_links"]) {
                // line 27
                echo "    ";
                if ($this->getAttribute($context["c_social_links"], "ON", [])) {
                    // line 28
                    echo "      <li id=\"social-link-";
                    echo $this->getAttribute($context["c_social_links"], "ID", []);
                    echo "\">
        <a href=\"";
                    // line 29
                    echo $this->getAttribute($context["c_social_links"], "URL", []);
                    echo "\" title=\"";
                    echo $this->getAttribute($context["c_social_links"], "TITLE", []);
                    echo "\">
          ";
                    // line 30
                    if (($this->getAttribute($context["c_social_links"], "ID", []) == "facebook")) {
                        // line 31
                        echo "            <i class=\"fa fa-facebook-official\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 32
$context["c_social_links"], "ID", []) == "twitter")) {
                        // line 33
                        echo "            <i class=\"fa fa-twitter\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 34
$context["c_social_links"], "ID", []) == "google-plus")) {
                        // line 35
                        echo "            <i class=\"fa fa-google-plus\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 36
$context["c_social_links"], "ID", []) == "pinterest")) {
                        // line 37
                        echo "            <i class=\"fa fa-pinterest\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 38
$context["c_social_links"], "ID", []) == "youtube")) {
                        // line 39
                        echo "            <i class=\"fa fa-youtube-play\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 40
$context["c_social_links"], "ID", []) == "linkedin")) {
                        // line 41
                        echo "            <i class=\"fa fa-linkedin\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 42
$context["c_social_links"], "ID", []) == "github")) {
                        // line 43
                        echo "            <i class=\"fa fa-github\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 44
$context["c_social_links"], "ID", []) == "instagram")) {
                        // line 45
                        echo "            <i class=\"fa fa-instagram\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 46
$context["c_social_links"], "ID", []) == "steam")) {
                        // line 47
                        echo "            <i class=\"fa fa-steam\"></i>
          ";
                    } elseif (($this->getAttribute(                    // line 48
$context["c_social_links"], "ID", []) == "twitch")) {
                        // line 49
                        echo "            <i class=\"fa fa-twitch\"></i>
          ";
                    } else {
                        // line 51
                        echo "            <i class=\"fa fa-share-alt\"></i>
          ";
                    }
                    // line 53
                    echo "        </a>
    </li>
    ";
                }
                // line 56
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_social_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "inc/navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  188 => 56,  183 => 53,  179 => 51,  175 => 49,  173 => 48,  170 => 47,  168 => 46,  165 => 45,  163 => 44,  160 => 43,  158 => 42,  155 => 41,  153 => 40,  150 => 39,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  138 => 34,  135 => 33,  133 => 32,  130 => 31,  128 => 30,  122 => 29,  117 => 28,  114 => 27,  110 => 26,  107 => 25,  105 => 24,  101 => 22,  98 => 16,  97 => 15,  94 => 14,  92 => 13,  86 => 12,  85 => 11,  72 => 10,  70 => 9,  66 => 8,  57 => 7,  55 => 6,  45 => 5,  42 => 4,  40 => 3,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "inc/navbar_header.html", "");
    }
}
