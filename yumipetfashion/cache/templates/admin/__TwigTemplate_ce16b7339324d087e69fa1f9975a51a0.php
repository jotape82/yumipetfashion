<?php

/* settings.livechat.manage.tpl */
class __TwigTemplate_ce16b7339324d087e69fa1f9975a51a0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form action=\"index.php?ToDo=saveUpdatedLiveChatSettings\" method=\"post\" id=\"frmLiveChatSettings\" onsubmit=\"return ValidateForm(CheckLiveChatSettingsForm)\">
\t<input type=\"hidden\" name=\"currentTab\" id=\"currentTab\" value=\"0\" />
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("LiveChatSettings");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 10
        echo getLang("LiveChatSettingsIntro");
        echo "</p>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 13
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 14
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 21
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t<li style=\"display:none\"><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\"></a></li>
\t\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['LiveChatTabs']) ? $context['LiveChatTabs'] : null));
        echo "
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 33
        echo getLang("LiveChatServices");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<select size=\"8\" multiple name=\"livechatservices[]\" id=\"livechatservices\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['LiveChatServices']) ? $context['LiveChatServices'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 39
        echo getLang("LiveChatServices");
        echo "', '";
        echo getLang("LiveChatServicesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">
\t\t\t</div>
\t\t\t";
        // line 47
        echo twig_safe_filter((isset($context['LiveChatDivs']) ? $context['LiveChatDivs'] : null));
        echo "
\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 54
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 55
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
\t</table>
\t</div>
</form>

<script type=\"text/javascript\">

\tfunction package_selected(package_id) {
\t\tif(g('livechatservices_old')) {
\t\t\tf = 'livechatservices_old';
\t\t}
\t\telse {
\t\t\tf = 'livechatservices';
\t\t}
\t\tvar ap = document.getElementById(field);
\t\tfor(i = 0; i < ap.options.length; i++) {
\t\t\tif(ap.options[i].value == package_id && ap.options[i].selected)
\t\t\t\treturn true;
\t\t}

\t\treturn false;
\t}

\tfunction ShowTab(T)
\t{
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm(\"";
        // line 99
        echo getLang("ConfirmCancelLiveChatSettings");
        echo "\"))
\t\t\tdocument.location.href = \"index.php?ToDo=viewLiveChatSettings\";
\t}

\tfunction CheckLiveChatSettingsForm() {
\t\t";
        // line 104
        echo twig_safe_filter((isset($context['LiveChatJavaScript']) ? $context['LiveChatJavaScript'] : null));
        echo "
\t}

\t// Load the main tab by default
\tShowTab(";
        // line 108
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

</script>
";
    }

}
