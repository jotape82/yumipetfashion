<?php

/* settings.accounting.manage.tpl */
class __TwigTemplate_752ef882f8a9040f62dc9950c9ef7281 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedAccountingSettings\" name=\"frmAccountingSettings\" id=\"frmAccountingSettings\" method=\"post\" onsubmit=\"return ValidateForm(AdminAccountingSettings.checkAccountingSettingsForm)\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("AccountingSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 11
        echo getLang("AccountingSettingsIntro");
        echo "</p>
\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 14
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 15
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"AdminAccountingSettings.confirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"AdminAccountingSettings.showTab(0)\">";
        // line 22
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:none\"><a href=\"#\" id=\"tab1\"></a></li>
\t\t\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['AccountingTabs']) ? $context['AccountingTabs'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 33
        echo getLang("AccountingSettings");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 37
        echo getLang("AccountingMethods");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select size=\"11\" multiple=\"multiple\" name=\"accountingproviders[]\" id=\"accountingproviders\" class=\"Field300 ISSelectReplacement\">
\t\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_safe_filter((isset($context['AccountingProviders']) ? $context['AccountingProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 43
        echo getLang("AccountingMethods");
        echo "', '";
        echo getLang("AccountingMethodsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">


\t\t\t\t</div>
\t\t\t\t";
        // line 53
        echo twig_safe_filter((isset($context['AccountingDivs']) ? $context['AccountingDivs'] : null));
        echo "
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\" id=\"BottomButtons\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"Save\">
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 61
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"AdminAccountingSettings.confirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction get_selected() {
\t\t\tif(g('accountingproviders_old')) {
\t\t\t\tvar cp = g('accountingproviders_old');
\t\t\t} else {
\t\t\t\tvar cp = document.getElementById(\"accountingproviders\");
\t\t\t}

\t\t\tvar selected = [];

\t\t\tfor(i = 0; i < cp.options.length; i++) {
\t\t\t\tif(cp.options[i].selected) {
\t\t\t\t\tselected[selected.length] = cp.options[i].value;
\t\t\t\t}
\t\t\t}

\t\t\treturn selected;
\t\t}

\t\tfunction accounting_selected(accounting_id) {
\t\t\tvar selected = get_selected();
\t\t\tfor(i = 0; i < cp.selected; i++) {
\t\t\t\tif(selected[i] == accounting_id)
\t\t\t\t\treturn true;
\t\t\t}

\t\t\treturn false;
\t\t}

\tvar AdminAccountingSettings = {
\t\t'codeHooks': {
\t\t\t\t\t\t'exec': [],
\t\t\t\t\t\t'onload': [],
\t\t\t\t\t\t'onsubmit': []
\t\t\t\t\t},

\t\t'addExecFunc':
\t\t\tfunction(func)
\t\t\t{
\t\t\t\tAdminAccountingSettings.codeHooks.exec[AdminAccountingSettings.codeHooks.exec.length] = func;
\t\t\t},

\t\t'addOnLoadFunc':
\t\t\tfunction(func)
\t\t\t{
\t\t\t\tAdminAccountingSettings.codeHooks.onload[AdminAccountingSettings.codeHooks.onload.length] = func;
\t\t\t},

\t\t'addOnSubmitFunc':
\t\t\tfunction(func)
\t\t\t{
\t\t\t\tAdminAccountingSettings.codeHooks.onsubmit[AdminAccountingSettings.codeHooks.onsubmit.length] = func;
\t\t\t},

\t\t'showTab':
\t\t\tfunction(tabId)
\t\t\t{
\t\t\t\treturn AdminAccountingSettings.handleShowTab(tabId);
\t\t\t},

\t\t'showModuleTab':
\t\t\tfunction(tabId, moduleId)
\t\t\t{
\t\t\t\treturn AdminAccountingSettings.handleShowTab(tabId, moduleId);
\t\t\t},

\t\t'handleShowTab':
\t\t\tfunction(tabId, moduleId)
\t\t\t{
\t\t\t\tif (typeof(moduleId) == \"undefined\" || moduleId == \"\") {
\t\t\t\t\tmoduleId = \"\";
\t\t\t\t}

\t\t\t\ti = 0;
\t\t\t\twhile (document.getElementById(\"tab\" + moduleId + i) != null) {
\t\t\t\t\t\$(\"#div\" + moduleId + i).hide();
\t\t\t\t\t\$(\"#tab\" + moduleId + i).attr(\"class\", \"\");
\t\t\t\t\ti++;
\t\t\t\t}

\t\t\t\t\$(\"#div\" + moduleId + tabId).show();
\t\t\t\t\$(\"#tab\" + moduleId + tabId).attr(\"class\", \"active\");
\t\t\t\t\$(\"#currentTab\" + moduleId).val(tabId);
\t\t\t},

\t\t'confirmCancel':
\t\t\tfunction()
\t\t\t{
\t\t\t\tif(confirm('";
        // line 160
        echo getLang("CancelAccountingMessage");
        echo "')) {
\t\t\t\t\tdocument.location.href='index.php?ToDo=viewAccountingSettings';
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t},

\t\t'checkAccountingSettingsForm':
\t\t\tfunction()
\t\t\t{
\t\t\t\tvar selected = get_selected();

\t\t\t\tif (selected.length > 0 && \"";
        // line 173
        echo twig_safe_filter((isset($context['SSLIsConfigured']) ? $context['SSLIsConfigured'] : null));
        echo "\" == \"0\") {
\t\t\t\t\talert(\"";
        // line 174
        echo getLang("QuickBooksRequireSSLError");
        echo "\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tfor (var i=0; i<AdminAccountingSettings.codeHooks.onsubmit.length; i++) {
\t\t\t\t\tif (!AdminAccountingSettings.codeHooks.onsubmit[i]()) {
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t";
        // line 184
        echo twig_safe_filter((isset($context['AccountingOnSubmitJavaScript']) ? $context['AccountingOnSubmitJavaScript'] : null));
        echo "
\t\t\t}
\t}

\t// Do onload stuff here
\t\$(document).ready(
\t\tfunction ()
\t\t{
\t\t\t// Load the main shipping settings tab by default
\t\t\tAdminAccountingSettings.showTab(";
        // line 193
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t\tfor (var i=0; i<AdminAccountingSettings.codeHooks.onload.length; i++) {
\t\t\t\ttry {
\t\t\t\t\tAdminAccountingSettings.codeHooks.onload[i]();
\t\t\t\t} catch (e) {};
\t\t\t}

\t\t\t";
        // line 201
        echo twig_safe_filter((isset($context['AccountingOnLoadJavaScript']) ? $context['AccountingOnLoadJavaScript'] : null));
        echo "
\t\t}
\t);

\t";
        // line 205
        echo twig_safe_filter((isset($context['AccountingExecJavaScript']) ? $context['AccountingExecJavaScript'] : null));
        echo "

\t</script>



";
    }

}
