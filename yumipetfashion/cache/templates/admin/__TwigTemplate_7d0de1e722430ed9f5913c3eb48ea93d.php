<?php

/* news.form.tpl */
class __TwigTemplate_7d0de1e722430ed9f5913c3eb48ea93d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckNewsForm)\" id=\"frmNews\" method=\"post\">
\t<input type=\"hidden\" name=\"newsId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['NewsId']) ? $context['NewsId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 13
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t  \t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 20
        echo getLang("NewNewsDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 24
        echo getLang("NewsTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"newstitle\" name=\"newstitle\" class=\"Field400\" value=\"";
        // line 27
        echo twig_safe_filter((isset($context['NewsTitle']) ? $context['NewsTitle'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 32
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"newssearchkeywords\" name=\"newssearchkeywords\" class=\"Field400\" value=\"";
        // line 35
        echo twig_safe_filter((isset($context['NewsSearchKeywords']) ? $context['NewsSearchKeywords'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('searchkeywords');\" onmouseover=\"ShowHelp('searchkeywords', '";
        // line 36
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"searchkeywords\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 42
        echo getLang("Visible");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"newsvisible\" name=\"newsvisible\" value=\"1\" ";
        // line 45
        echo twig_safe_filter((isset($context['NewsVisible']) ? $context['NewsVisible'] : null));
        echo "> <label for=\"newsvisible\">";
        echo getLang("YesNewsVisible");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 55
        echo getLang("PostContent");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" style=\"padding-top:5px\">
\t\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['WYSIWYG']) ? $context['WYSIWYG'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\" colspan=\"2\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 63
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Sep\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>

\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 81
        echo getLang("ConfirmCancelNews");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewNews\";
\t\t}

\t\tfunction CheckNewsForm()
\t\t{
\t\t\tvar title = g(\"newstitle\");

\t\t\tif(g(\"wysiwyg\"))
\t\t\t\tvar wysiwyg = g(\"wysiwyg\"); // Text area
\t\t\telse
\t\t\t\tvar wysiwyg = g(\"wysiwyg_html\"); // DevEdit

\t\t\tif(IsWysiwygEditorEmpty(wysiwyg.value))
\t\t\t{
\t\t\t\talert(\"";
        // line 96
        echo getLang("EnterNewsContent");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(title.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 102
        echo getLang("EnterNewsTitle");
        echo "\");
\t\t\t\ttitle.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}

\t</script>
";
    }

}
