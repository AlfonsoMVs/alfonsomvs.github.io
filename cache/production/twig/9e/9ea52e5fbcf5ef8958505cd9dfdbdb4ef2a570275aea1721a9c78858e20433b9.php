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

/* inc/header.html */
class __TwigTemplate_4ad48ecb91f0b6c2fab58fd8507066ca3ac516a3dd2b2c4e75c6a00e17b8329d extends \Twig\Template
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

<div class=\"masthead\" role=\"banner\">
  <div class=\"inner";
        // line 4
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "  ";
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo " header-offset-size";
        }
        echo "\">

    <div id=\"site-description\">
      <a id=\"logo\" class=\"logo\" href=\"";
        // line 7
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\">
        ";
        // line 8
        if (($context["C_LOGO_IMAGE"] ?? null)) {
            // line 9
            echo "          <img src=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/images/";
            echo ($context["C_LOGO_IMAGE"] ?? null);
            echo "\" alt=\"";
            echo ($context["SITENAME"] ?? null);
            echo " logo.\">
          ";
        } else {
            // line 11
            echo "          ";
            echo ($context["SITE_LOGO_IMG"] ?? null);
            echo "
          </br>
          <h3>I N S T A G R A M I N G</h3>
          ";
        }
        // line 15
        echo "        ";
        if (($context["C_LOGO_SITEINFO"] ?? null)) {
            // line 16
            echo "          <h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
          <p>";
            // line 17
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
        ";
        }
        // line 19
        echo "      </a>
      <p class=\"skiplink\"><a href=\"#start_here\">";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
    </div>

    ";
        // line 23
        // line 24
        echo "    ";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 25
            echo "    <div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
      <form action=\"";
            // line 26
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
      <fieldset>
        <input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
        <button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
        <a href=\"";
            // line 30
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</a>
        ";
            // line 31
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
      </fieldset>
      </form>
    </div>
    ";
        }
        // line 36
        echo "  </div>

  ";
        // line 38
        // line 39
        echo "  <div class=\"navbar top\" role=\"navigation\">
    <div class=\"inner";
        // line 40
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo " ";
        if (($context["C_STYLE_OFFSET_ON"] ?? null)) {
            echo " header-offset-nav";
        }
        echo "\">
      ";
        // line 41
        $location = "inc/navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("inc/navbar_header.html", "inc/header.html", 41)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 42
        echo "    </div>
  </div>

  ";
        // line 45
        if (($context["C_STYLE_HERO_VFX"] ?? null)) {
            // line 46
            echo "    <div id=\"header-vfx\"></div>
  ";
        }
        // line 48
        echo "  ";
        if (($context["C_STYLE_HERO"] ?? null)) {
            // line 49
            echo "    <div class=\"header-bg\"></div>
  ";
        }
        // line 51
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "inc/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 51,  189 => 49,  186 => 48,  182 => 46,  180 => 45,  175 => 42,  163 => 41,  153 => 40,  150 => 39,  149 => 38,  145 => 36,  137 => 31,  129 => 30,  123 => 29,  115 => 28,  110 => 26,  107 => 25,  104 => 24,  103 => 23,  97 => 20,  94 => 19,  89 => 17,  84 => 16,  81 => 15,  73 => 11,  63 => 9,  61 => 8,  47 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "inc/header.html", "");
    }
}
