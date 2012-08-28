<?php

/* settings.notifications.manage.tpl */
class __TwigTemplate_1ab24a5a0d832c3f5d3a89929052a19f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedNotificationSettings\" name=\"frmNotificationSettings\" id=\"frmNotificationSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckNotificationSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("NotificationSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 11
        echo getLang("NotificationSettingsIntro");
        echo "\t\t\t\t</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 23
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:none\"><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\"></a></li>
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['NotificationTabs']) ? $context['NotificationTabs'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<form action=\"index.php?ToDo=saveUpdatedNotificationSettings\" name=\"frmNotificationSettings\" id=\"frmNotificationSettings\" method=\"post\">
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 36
        echo getLang("NotificationSettings");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 40
        echo getLang("NotificationMethods");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select size=\"8\" multiple name=\"notificationproviders[]\" id=\"notificationproviders\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        echo twig_safe_filter((isset($context['NotificationProviders']) ? $context['NotificationProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 46
        echo getLang("NotificationMethods");
        echo "', '";
        echo getLang("NotificationMethodsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">


\t\t\t\t</div>
\t\t\t\t";
        // line 57
        echo twig_safe_filter((isset($context['NotificationDivs']) ? $context['NotificationDivs'] : null));
        echo "
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 64
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 65
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction ShowTab(T) {
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 92
        echo getLang("ConfirmCancelNotificationSettings");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewNotificationSettings\";
\t\t}

\t\tfunction notification_selected(notification_id) {
\t\t\tvar np = document.getElementById(\"notificationproviders_old\");

\t\t\tfor(i = 0; i < np.options.length; i++) {
\t\t\t\tif(np.options[i].value == notification_id && np.options[i].selected)
\t\t\t\t\treturn true;
\t\t\t}

\t\t\treturn false;
\t\t}

\t\tfunction CheckNotificationSettingsForm() {

\t\t\t";
        // line 109
        echo twig_safe_filter((isset($context['NotificationJavaScript']) ? $context['NotificationJavaScript'] : null));
        echo "
\t\t\treturn true;
\t\t}

\t\t// Load the main notification settings tab by default
\t\tShowTab(";
        // line 114
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t</script>
";
    }

}
