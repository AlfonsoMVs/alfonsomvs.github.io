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

/* posting_attach_body.html */
class __TwigTemplate_675e135a0de739112917675843124fc5c456207d641db4c126c9bc3a5425bc8d extends \Twig\Template
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
        echo "<div class=\"panel bg3 panel-container\" id=\"attach-panel\">
\t<div class=\"inner\">

\t<p>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>

\t<fieldset class=\"fields2\" id=\"attach-panel-basic\">
\t<dl>
\t\t<dt><label for=\"fileupload\">";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" class=\"inputbox autowidth\" />
\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FILE");
        echo "\" class=\"button2\" onclick=\"upload = true;\" />
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"filecomment\">";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILE_COMMENT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t<dd><textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"inputbox autowidth\">";
        // line 16
        echo ($context["FILE_COMMENT"] ?? null);
        echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<div id=\"attach-panel-multi\" class=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"button2\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t<div class=\"panel";
        // line 24
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attach_row", []))) {
            echo " hidden";
        }
        echo " file-list-container\" id=\"file-list-container\">
\t\t<div class=\"inner\">
\t\t\t<table class=\"table1 zebra-list fixed-width-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 30
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty file-list\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row\" id=\"attach-row-tpl\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLACE_INLINE");
        echo "\" class=\"button2 hidden file-inline-bbcode\" />&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_FILE");
        echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"inputbox\"></textarea>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attach_row", []));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 59
            echo "\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            echo $this->getAttribute($context["attach_row"], "ATTACH_ID", []);
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 61
            echo $this->getAttribute($context["attach_row"], "U_VIEW_ATTACHMENT", []);
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILENAME", []);
            echo "</a></span>

\t\t\t\t\t\t\t\t";
            // line 63
            // line 64
            echo "
\t\t\t\t\t\t\t\t<span class=\"attach-controls\">
\t\t\t\t\t\t\t\t\t";
            // line 66
            if (($context["S_INLINE_ATTACHMENT_OPTIONS"] ?? null)) {
                echo "<input type=\"button\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PLACE_INLINE");
                echo "\" class=\"button2 file-inline-bbcode\" />&nbsp; ";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", []);
            echo "]\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_FILE");
            echo "\" class=\"button2 file-delete\" />
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t";
            // line 70
            // line 71
            echo "
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 75
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", []);
            echo "]\" rows=\"1\" cols=\"30\" class=\"inputbox\">";
            echo $this->getAttribute($context["attach_row"], "FILE_COMMENT", []);
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 76
            echo $this->getAttribute($context["attach_row"], "S_HIDDEN", []);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 79
            echo $this->getAttribute($context["attach_row"], "FILESIZE", []);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 86,  190 => 79,  184 => 76,  178 => 75,  172 => 71,  171 => 70,  162 => 67,  156 => 66,  152 => 64,  151 => 63,  144 => 61,  138 => 59,  134 => 58,  114 => 41,  110 => 40,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  77 => 24,  71 => 21,  63 => 16,  58 => 15,  51 => 11,  44 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "posting_attach_body.html", "");
    }
}
