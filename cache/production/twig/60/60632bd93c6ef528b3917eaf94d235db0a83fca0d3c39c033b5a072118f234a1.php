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

/* jumpbox.html */
class __TwigTemplate_4b183e7a66d4377a28371c5404b0b47ec3f7e3e1b183fbf193a52512de9cb2a8 extends \Twig\Template
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
        if (($context["S_VIEWTOPIC"] ?? null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo ($context["U_VIEW_FORUM"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif (        // line 4
($context["S_VIEWFORUM"] ?? null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo ($context["U_INDEX"] ?? null);
            echo "\" class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif (        // line 6
($context["SEARCH_TOPIC"] ?? null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif (        // line 8
($context["S_SEARCH_ACTION"] ?? null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((($context["S_DISPLAY_JUMPBOX"] ?? null) &&  !($context["S_IN_UCP"] ?? null))) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            if ( !($context["S_IN_MCP"] ?? null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "jumpbox_forums", []));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", []) !=  -1)) {
                    // line 23
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", []);
                    echo "\" class=\"jump-link ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "sub";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", []);
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 31,  151 => 26,  145 => 25,  128 => 23,  125 => 22,  121 => 21,  115 => 17,  107 => 16,  97 => 15,  88 => 14,  85 => 13,  83 => 12,  80 => 11,  68 => 9,  66 => 8,  57 => 7,  55 => 6,  46 => 5,  44 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox.html", "");
    }
}
