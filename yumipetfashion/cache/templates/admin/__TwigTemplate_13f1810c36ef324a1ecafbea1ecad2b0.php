<?php

/* settings.kb.manage.tpl */
class __TwigTemplate_13f1810c36ef324a1ecafbea1ecad2b0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form action=\"index.php?ToDo=saveUpdatedKBSettings\" name=\"frmKBSettings\" id=\"frmKBSettings\" method=\"post\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("KBSettingsHeader");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<div class=\"IntroItem\">";
        // line 9
        echo twig_safe_filter((isset($context['KBSettingsIntro']) ? $context['KBSettingsIntro'] : null));
        echo "</div>
\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t<br /><br />
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\">";
        // line 23
        echo getLang("KBSettings");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 32
        echo getLang("KBDetails");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t\t<td><img src=\"";
        // line 36
        echo twig_safe_filter((isset($context['KBLogo']) ? $context['KBLogo'] : null));
        echo "\" alt=\"\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 40
        echo getLang("KBPath");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"KBPath\" id=\"KBPath\" class=\"Field200\" value=\"";
        // line 43
        echo twig_safe_filter((isset($context['KBPath']) ? $context['KBPath'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 44
        echo getLang("KBPath");
        echo "', '";
        echo getLang("KBPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 50
        echo getLang("KBContactFormIntegration");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"KBContactFormIntegration\" id=\"KBContactFormIntegration\" value=\"ON\" ";
        // line 53
        echo twig_safe_filter((isset($context['IsARSIntegrated']) ? $context['IsARSIntegrated'] : null));
        echo "> <label for=\"KBContactFormIntegration\">";
        echo getLang("YesKBContactFormIntegration");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 54
        echo getLang("KBContactFormIntegration");
        echo "', '";
        echo getLang("KBContactFormIntegrationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t\t\t<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" onclick=\"LaunchHelp(712)\">";
        // line 56
        echo getLang("KBWhatIsActiveResponse");
        echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr id=\"ARSFields\" style=\"display:";
        // line 59
        echo twig_safe_filter((isset($context['HideARSFields']) ? $context['HideARSFields'] : null));
        echo "\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\"/>&nbsp; ";
        // line 67
        echo getLang("IntegrateActiveResponseIntoThesePages");
        echo ":<br />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"padding-left:28px\">
\t\t\t\t\t\t\t\t\t\t\t<select size=\"5\" name=\"pageids[]\" id=\"pageids\" class=\"Field300 ISSelectReplacement\" style=\"height:115\" multiple>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 73
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 75
        echo getLang("IntegrateActiveResponse");
        echo "', '";
        echo getLang("IntegrateActiveResponseHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<br /><input type=\"submit\" name=\"SubmitButton2\" value=\"";
        // line 88
        echo getLang("Save");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 89
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm('";
        // line 103
        echo getLang("CancelKBMessage");
        echo "')) {
\t\t\t\tdocument.location.href='index.php?ToDo=viewKBSettings';
\t\t\t}
\t\t\telse {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tfunction NoContactPageMessage() {
\t\t\talert(\"";
        // line 112
        echo getLang("NoContactPagesForActiveKB");
        echo "\");
\t\t}

\t\t\$('#KBContactFormIntegration').click(function() {
\t\t\tif(this.checked && \"";
        // line 116
        echo twig_safe_filter((isset($context['CanIntegrateARS']) ? $context['CanIntegrateARS'] : null));
        echo "\" == \"0\") {
\t\t\t\talert(\"";
        // line 117
        echo getLang("NoContactPagesForActiveKB");
        echo "\");
\t\t\t\tthis.checked = false;
\t\t\t\t\$('#ARSFields').hide();
\t\t\t\treturn;
\t\t\t}

\t\t\tif(this.checked) {
\t\t\t\t\$('#ARSFields').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#ARSFields').hide();
\t\t\t}
\t\t});

\t\t\$('#frmKBSettings').submit(function() {
\t\t\tif(\$('#KBPath').val().length <= 7) {
\t\t\t\talert('";
        // line 133
        echo getLang("EnterActiveKBPath");
        echo "');
\t\t\t\t\$('#KBPath').focus();
\t\t\t\t\$('#KBPath').select();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;

\t\t});

\t\t\$(document).ready(function() {
\t\t\tif(g('KBContactFormIntegration').checked) {
\t\t\t\t\$('#ARSFields').show();
\t\t\t}
\t\t});

\t</script>
";
    }

}
