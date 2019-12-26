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

/* inc/footer.html */
class __TwigTemplate_c9c35f4c9bc2013a75d9966f86936b79c78609eb9c76b2e322547e6743610556 extends \Twig\Template
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
        echo "<div class=\"navbar bottom\" role=\"navigation\">
  <div class=\"inner";
        // line 2
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
  ";
        // line 3
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "inc/footer.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "  </div>
</div>

<div class=\"footer-inner";
        // line 7
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">

  <div class=\"row\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "c_footer_widgets", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c_footer_widgets"]) {
            // line 11
            echo "    ";
            if (($this->getAttribute($context["c_footer_widgets"], "WID", []) !== "none")) {
                // line 12
                echo "
    ";
                // line 13
                if (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", []) == 0)) {
                    // line 14
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-4";
                    // line 15
                    echo "    ";
                } elseif (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", []) == 1)) {
                    // line 16
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-5";
                    // line 17
                    echo "    ";
                } elseif (($this->getAttribute($context["c_footer_widgets"], "S_ROW_COUNT", []) == 2)) {
                    // line 18
                    echo "      ";
                    $context["WF_CLASS"] = "col-sm-3";
                    // line 19
                    echo "    ";
                }
                // line 20
                echo "
    <div class=\"widget footer-widget widget-";
                // line 21
                echo $this->getAttribute($context["c_footer_widgets"], "WID", []);
                echo " ";
                echo ($context["WF_CLASS"] ?? null);
                echo "\">
      ";
                // line 22
                if ($this->getAttribute($context["c_footer_widgets"], "TITLE", [])) {
                    // line 23
                    echo "        <h3 class=\"widget-title\">";
                    echo $this->getAttribute($context["c_footer_widgets"], "TITLE", []);
                    echo "</h3>
      ";
                }
                // line 25
                echo "      <div class=\"widget-body\">
        ";
                // line 26
                $value = "c_footer_widgets";
                $context['definition']->set('OPT', $value);
                // line 27
                echo "        ";
                $this->loadTemplate("@eles_coreframe/inc/widgets.html", "inc/footer.html", 27)->display($context);
                // line 28
                echo "      </div>
    </div>
    ";
            }
            // line 31
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_footer_widgets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>

</div>

<div class=\"endbar\">
  <div class=\"inner";
        // line 37
        if ((($context["C_LAYOUT_MODE"] ?? null) === "contained")) {
            echo " container";
        }
        echo "\">
    ";
        // line 38
        // line 39
        echo "
    ";
        // line 40
        if (($context["C_COPYRIGHT_ON"] ?? null)) {
            // line 41
            echo "    <p class=\"copyright";
            if (($context["C_COPYRIGHT_TEXT"] ?? null)) {
                echo " left col-sm-6";
            }
            echo "\">
      Powered by <a href=\"https://www.phpbb.com/\" target=\"_blank\">phpBB</a>.
      Theming with <i class=\"fa fa-heart animate-pulse\"></i> by
      <a href=\"";
            // line 44
            echo ($context["U_THEME"] ?? null);
            echo "\" title=\"Eles - Responsive phpBB 3.1 Theme\" target=\"_blank\">Eles Theme</a>.
    </p>
    ";
        }
        // line 47
        echo "    ";
        if (($context["C_COPYRIGHT_TEXT"] ?? null)) {
            // line 48
            echo "      <p class=\"copyright";
            if (($context["C_COPYRIGHT_ON"] ?? null)) {
                echo " right col-sm-6";
            }
            echo "\">
        ";
            // line 49
            echo ($context["C_COPYRIGHT_TEXT"] ?? null);
            echo "
      </p>
    ";
        }
        // line 52
        echo "    ";
        // line 53
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "inc/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 53,  202 => 52,  196 => 49,  189 => 48,  186 => 47,  180 => 44,  171 => 41,  169 => 40,  166 => 39,  165 => 38,  159 => 37,  152 => 32,  138 => 31,  133 => 28,  130 => 27,  127 => 26,  124 => 25,  118 => 23,  116 => 22,  110 => 21,  107 => 20,  104 => 19,  101 => 18,  98 => 17,  95 => 16,  92 => 15,  89 => 14,  87 => 13,  84 => 12,  81 => 11,  64 => 10,  56 => 7,  51 => 4,  39 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "inc/footer.html", "");
    }
}
