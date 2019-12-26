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

/* overall_footer.html */
class __TwigTemplate_f92e326ed7ff74faddc91a7ed579965abde75928a24f1e12f407da10611ff43c extends \Twig\Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>
\t<!-- page-body -->

\t";
        // line 5
        // line 6
        echo "
\t<footer id=\"page-footer\" role=\"contentinfo\">
\t\t";
        // line 8
        $this->loadTemplate("inc/footer.html", "overall_footer.html", 8)->display($context);
        // line 9
        echo "\t</footer>

</div>
<!-- #wrap -->

<a href=\"#top\" id=\"back2topMain\" data-scroll><i class=\"fa fa-angle-up\"></i></a>

<div class=\"modal-alert\">
\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>

\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

<div class=\"hidden\">
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 34
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 35
        echo "</div>


<script src=\"";
        // line 38
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/template/js/jquery.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
<script src=\"";
        // line 39
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/template/js/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
<script src=\"";
        // line 40
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/template/js/forum_fn.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
<script src=\"";
        // line 41
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/eles/template/js/ajax.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>


";
        // line 44
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 45
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                    \"link\": \"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
                    \"href\": \"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_HREF"), "js");
            echo "\"
\t\t\t\t}
\t\t\t})});
\t</script>
";
        }
        // line 67
        echo "
";
        // line 68
        // line 69
        echo "

";
        // line 71
        $asset_file = "js/bootstrap.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('8');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 72
        $asset_file = "js/smooth-scroll.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('8');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 73
        $asset_file = "js/SmoothScroll.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('8');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 74
        $asset_file = "js/particles.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('8');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 75
        echo "


";
        // line 78
        $asset_file = "js/scripts.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('8');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 79
        echo "


";
        // line 82
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 82)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 83
        echo "
";
        // line 84
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", []);
        echo "

";
        // line 86
        // line 87
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 87,  274 => 86,  269 => 84,  266 => 83,  252 => 82,  247 => 79,  233 => 78,  228 => 75,  214 => 74,  200 => 73,  186 => 72,  172 => 71,  168 => 69,  167 => 68,  164 => 67,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  124 => 45,  122 => 44,  114 => 41,  108 => 40,  102 => 39,  96 => 38,  91 => 35,  87 => 34,  69 => 21,  54 => 17,  44 => 9,  42 => 8,  38 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
