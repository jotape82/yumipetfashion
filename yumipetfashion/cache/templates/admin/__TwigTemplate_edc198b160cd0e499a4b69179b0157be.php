<?php

/* install.form.tpl */
class __TwigTemplate_edc198b160cd0e499a4b69179b0157be extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11\">
<html ";
        // line 2
        if ((isset($context['rtl']) ? $context['rtl'] : null)) {
            echo "dir=\"rtl\"";
        }
        echo " xml:lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\">
<head>
\t<title>";
        // line 4
        echo getLang("InstallInterspireShoppingCart");
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css\");
\t\t@import url('Styles/tabmenu.css');
\t\t@import url(\"Styles/iselector.css\");
\t</style>
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<style>
\t\th3 { font-size:13px; }
\t</style>
\t<script type=\"text/javascript\">
\t\tvar url = 'remote.php';
\t\tvar critical_errors = \"";
        // line 22
        echo twig_safe_filter((isset($context['CriticalErrors']) ? $context['CriticalErrors'] : null));
        echo "\";
\t\tvar is_trial = '";
        // line 23
        echo twig_safe_filter((isset($context['IsTrial']) ? $context['IsTrial'] : null));
        echo "';
\t</script>
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 25
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/menudrop.js?";
        // line 26
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/thickbox.js?";
        // line 27
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/common.js?";
        // line 28
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/iselector.js?";
        // line 29
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"Styles/thickbox.css?";
        // line 30
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" type=\"text/css\" media=\"screen\" />
</head>

<body>
\t<form action=\"index.php?ToDo=RunInstallation\" method=\"post\" name=\"frmInstall\" id=\"frmInstall\">
\t<div id=\"box\">
\t\t<br /><br /><br /><br />
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:565px\">
\t\t<table>
\t\t  <tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t<img src=\"images/logo.jpg\" />
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td class=\"HelpInfo\">
\t\t\t\t";
        // line 46
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<div style=\"";
        // line 47
        echo twig_safe_filter((isset($context['HideInstallWarning']) ? $context['HideInstallWarning'] : null));
        echo "\" class=\"MessageBox MessageBoxInfo\">
\t\t\t\t\t";
        // line 48
        echo twig_safe_filter((isset($context['InstallWarning']) ? $context['InstallWarning'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</td>
\t\t  </tr>
\t\t  <tr class=\"FormContent\">
\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> Version:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"myversion\" class=\"Field250\">
\t\t\t\t\t\t\t    <option value=\"Starter\">Starter</option>
\t\t\t\t\t\t\t    <option value=\"Professional\">Professional</option>
\t\t\t\t\t\t\t    <option value=\"Ultimate\">Ultimate</option>
\t\t\t\t\t\t\t\t<option value=\"Vendor\" selected=\"selected\">Vendor</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:10px 10px 10px 0px\" colspan=\"2\"><h3>";
        // line 67
        echo getLang("StoreDetails");
        echo "</h3></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 70
        echo getLang("ShopPath");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"ShopPath\" id=\"ShopPath\" class=\"Field250\" value=\"";
        // line 71
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "\"> <img onmouseout=\"HideHelp('shoppathhelp');\" onmouseover=\"ShowHelp('shoppathhelp', '";
        echo getLang("ShopPath");
        echo "', '";
        echo getLang("ShopPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"shoppathhelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 75
        echo getLang("StoreCountryLocation");
        echo ":</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"StoreCountryLocationId\" id=\"StoreCountryLocationId\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"0\">-- ";
        // line 78
        echo getLang("ChooseACountry");
        echo " --</option>
\t\t\t\t\t\t\t\t";
        // line 79
        echo twig_safe_filter((isset($context['StoreCountryList']) ? $context['StoreCountryList'] : null));
        echo "
\t\t\t\t\t\t\t</select><img onmouseout=\"HideHelp('storecountrylocationhelp');\" onmouseover=\"ShowHelp('storecountrylocationhelp', '";
        // line 80
        echo getLang("StoreCountryLocation");
        echo "', '";
        echo getLang("StoreCountryLocationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"storecountrylocationhelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 85
        echo getLang("StoreCurrencyCode");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"StoreCurrencyCode\" id=\"StoreCurrencyCode\" maxlength=\"3\" class=\"Field50\" value=\"";
        // line 86
        echo twig_safe_filter((isset($context['StoreCurrencyCode']) ? $context['StoreCurrencyCode'] : null));
        echo "\"> <img onmouseout=\"HideHelp('storecurrencycodehelp');\" onmouseover=\"ShowHelp('storecurrencycodehelp', '";
        echo getLang("StoreCurrencyCode");
        echo "', '";
        echo getLang("StoreCurrencyCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"storecurrencycodehelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">&nbsp;</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"installSampleData\" id=\"installSampleData\" value=\"1\" ";
        // line 92
        echo twig_safe_filter((isset($context['InstallSampleData']) ? $context['InstallSampleData'] : null));
        echo " /> ";
        echo getLang("InstallSampleData");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('sampledatahelp');\" onmouseover=\"ShowHelp('sampledatahelp', '";
        // line 93
        echo getLang("InstallSampleData");
        echo "', '";
        echo getLang("InstallSampleDataHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"sampledatahelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:10px 10px 10px 0px\" colspan=\"2\"><h3>";
        // line 97
        echo getLang("UserAccountDetails");
        echo "</h3></td>
\t\t\t\t\t</tr>
<!--
\t\t\t\t\t<tr style=\"";
        // line 100
        echo twig_safe_filter((isset($context['HideTrialFields']) ? $context['HideTrialFields'] : null));
        echo "\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 101
        echo getLang("FullName");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"FullName\" id=\"FullName\" class=\"Field150\" value=\"";
        // line 102
        echo twig_safe_filter((isset($context['FullName']) ? $context['FullName'] : null));
        echo "\"> <img onmouseout=\"HideHelp('fullnamehelp');\" onmouseover=\"ShowHelp('fullnamehelp', '";
        echo getLang("FullName");
        echo "', '";
        echo getLang("InstallFullNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"fullnamehelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"";
        // line 105
        echo twig_safe_filter((isset($context['HideTrialFields']) ? $context['HideTrialFields'] : null));
        echo "\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 106
        echo getLang("PhoneNo");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"PhoneNumber\" id=\"PhoneNumber\" class=\"Field150\" value=\"";
        // line 107
        echo twig_safe_filter((isset($context['PhoneNumber']) ? $context['PhoneNumber'] : null));
        echo "\"> <img onmouseout=\"HideHelp('phonenohelp');\" onmouseover=\"ShowHelp('phonenohelp', '";
        echo getLang("PhoneNo");
        echo "', '";
        echo getLang("PhoneNoHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"phonenohelp\"></div></td>
\t\t\t\t\t</tr>
-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 112
        echo getLang("EmailAddress");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"UserEmail\" id=\"UserEmail\" class=\"Field150\" value=\"";
        // line 113
        echo twig_safe_filter((isset($context['UserEmail']) ? $context['UserEmail'] : null));
        echo "\"> <img onmouseout=\"HideHelp('useremailhelp');\" onmouseover=\"ShowHelp('useremailhelp', '";
        echo getLang("EmailAddress");
        echo "', '";
        echo getLang("InstallEmailAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"useremailhelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 117
        echo getLang("ChooseAPassword");
        echo ":</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"UserPass\" id=\"UserPass\" class=\"Field150\" value=\"";
        // line 119
        echo twig_safe_filter((isset($context['UserPass']) ? $context['UserPass'] : null));
        echo "\">
\t\t\t\t\t\t\t<div class=\"PasswordStrengthMeter\" id=\"meterid\"></div>
\t\t\t\t\t\t\t<small class=\"note PasswordStrengthTip\" id=\"tipid\"></small>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 125
        echo getLang("ConfirmYourPassword");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"password\" autocomplete=\"off\" name=\"UserPass1\" id=\"UserPass1\" class=\"Field150\" value=\"";
        // line 126
        echo twig_safe_filter((isset($context['UserPass']) ? $context['UserPass'] : null));
        echo "\"> <img onmouseout=\"HideHelp('userpass1help');\" onmouseover=\"ShowHelp('userpass1help', '";
        echo getLang("ConfirmYourPassword");
        echo "', '";
        echo getLang("ConfirmYourPasswordHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"userpass1help\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:10px 10px 10px 0px\" colspan=\"2\"><h3>";
        // line 130
        echo getLang("MySQLDetails");
        echo "</h3></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\" colspan=\"2\"><input type=\"radio\" name=\"dbChoice\" id=\"dbChoice1\" value=\"ON\"> <label for=\"dbChoice1\">";
        // line 133
        echo getLang("HasDB");
        echo "</label></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table class=\"DBDetails\" style=\"padding:10px 10px 10px 20px\">
\t\t\t\t\t<tr class=\"DBDetails\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 138
        echo getLang("DatabaseUser");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"dbUser\" id=\"dbUser\" class=\"Field150\" value=\"";
        // line 139
        echo twig_safe_filter((isset($context['dbUser']) ? $context['dbUser'] : null));
        echo "\"> <img onmouseout=\"HideHelp('dbuserhelp');\" onmouseover=\"ShowHelp('dbuserhelp', '";
        echo getLang("DatabaseUser");
        echo "', '";
        echo getLang("DatabaseUserHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dbuserhelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"DBDetails\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">&nbsp;&nbsp; ";
        // line 143
        echo getLang("DatabasePassword");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"password\" autocomplete=\"off\" name=\"dbPass\" id=\"dbPass\" class=\"Field150\" value=\"";
        // line 144
        echo twig_safe_filter((isset($context['dbPass']) ? $context['dbPass'] : null));
        echo "\"> <img onmouseout=\"HideHelp('dbpasshelp');\" onmouseover=\"ShowHelp('dbpasshelp', '";
        echo getLang("DatabasePassword");
        echo "', '";
        echo getLang("DatabasePasswordHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dbpasshelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"DBDetails\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 148
        echo getLang("DatabaseHostname");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"dbServer\" id=\"dbServer\" class=\"Field150\" value=\"";
        // line 149
        echo twig_safe_filter((isset($context['dbServer']) ? $context['dbServer'] : null));
        echo "\"> <img onmouseout=\"HideHelp('dbhostnamehelp');\" onmouseover=\"ShowHelp('dbhostnamehelp', '";
        echo getLang("DatabaseHostname");
        echo "', '";
        echo getLang("DatabaseHostnameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div style=\"display:none\" id=\"dbhostnamehelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"DBDetails\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\"><span class=\"Required\">*</span> ";
        // line 152
        echo getLang("DatabaseName");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"dbDatabase\" id=\"dbDatabase\" class=\"Field150\" value=\"";
        // line 153
        echo twig_safe_filter((isset($context['dbDatabase']) ? $context['dbDatabase'] : null));
        echo "\"> <img onmouseout=\"HideHelp('dbnamehelp');\" onmouseover=\"ShowHelp('dbnamehelp', '";
        echo getLang("DatabaseName");
        echo "', '";
        echo getLang("DatabaseNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div style=\"display:none\" id=\"dbnamehelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"DBDetails\">
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">&nbsp;&nbsp; ";
        // line 156
        echo getLang("DatabaseTablePrefix");
        echo ":</td>
\t\t\t\t\t\t<td><input type=\"text\" name=\"tablePrefix\" id=\"tablePrefix\" class=\"Field150\" value=\"";
        // line 157
        echo twig_safe_filter((isset($context['tablePrefix']) ? $context['tablePrefix'] : null));
        echo "\"> <img onmouseout=\"HideHelp('dbprefixhelp');\" onmouseover=\"ShowHelp('dbprefixhelp', '";
        echo getLang("DatabaseTablePrefix");
        echo "', '";
        echo getLang("DatabaseTablePrefixHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div style=\"display:none\" id=\"dbprefixhelp\"></div></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\" colspan=\"2\" ><input type=\"radio\" name=\"dbChoice\" id=\"dbChoice2\" value=\"ON\"> <label for=\"dbChoice2\">";
        // line 162
        echo getLang("HasNoDB");
        echo "</label></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table class=\"DBHelp\" style=\"padding:10px 10px 10px 20px\">
\t\t\t\t\t<tr class=\"DBHelp\">
\t\t\t\t\t\t<td colspan=\"2\" class=\"HelpInfo\"><h3 style=\"padding-bottom:10px\">";
        // line 167
        echo getLang("WhatIsMySQLDB");
        echo "</h3>";
        echo getLang("DBHelpText");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<table>
<!--
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:10px 10px 10px 0px\" colspan=\"2\"><h3>";
        // line 173
        echo getLang("ServerConfigurationDetails");
        echo "</h3></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\" colspan=\"2\"><input type=\"checkbox\" name=\"sendServerDetails\" id=\"sendServerDetails\" value=\"ON\" checked=\"checked\"> <label for=\"sendServerDetails\">";
        // line 176
        echo getLang("SendServerDetails");
        echo "</label><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"alert('";
        echo getLang("ServerDetailsInfo");
        echo "')\" style=\"color:gray\">";
        echo getLang("WhatWillBeSent");
        echo "</a></td>
\t\t\t\t\t</tr>
-->
\t\t\t\t\t<tr>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<br /><input type=\"submit\" name=\"SubmitButton\" value=\"";
        // line 182
        echo getLang("Continue");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Gap\"></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t  </tr>
\t\t</table>
\t\t</td></tr></table>
\t\t<div style=\"padding:10px; margin-bottom:20px; text-align:center\" class=\"PageFooter\">
\t\t\tPowered by Shopping Cart ";
        // line 194
        echo twig_safe_filter((isset($context['ProductVersion']) ? $context['ProductVersion'] : null));
        echo " &copy; 2004-";
        echo twig_safe_filter((isset($context['Year']) ? $context['Year'] : null));
        echo "
\t\t</div>
\t</div>
\t</form>

\t<div id=\"permissionsBox\" style=\"display:none\">
\t\t<div style=\"background-image:url('images/permissions_error.gif'); background-position:right bottom; background-repeat:no-repeat; height:100%\">";
        // line 200
        echo twig_safe_filter((isset($context['PermissionErrors']) ? $context['PermissionErrors'] : null));
        echo "</div>
\t</div>

\t<script type=\"text/javascript\">";
        // line 203
        echo twig_safe_filter((isset($context['AutoJS']) ? $context['AutoJS'] : null));
        echo "</script>
\t<script type=\"text/javascript\" src=\"../javascript/passwordmeter.js\"></script>
\t<script type=\"text/javascript\">
\t\tlang.PasswordStrengthMeter_MsgDefault = \"";
        // line 206
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgDefault"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgTooShort = \"";
        // line 207
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgTooShort"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgNoAlphaNum = \"";
        // line 208
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgNoAlphaNum"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgWeak = \"";
        // line 209
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgWeak"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgStrong = \"";
        // line 210
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgVeryStrong = \"";
        // line 211
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgVeryStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_Tip = \"";
        // line 212
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_Tip"), "'");
        echo "\";
\t\tvar pmeter = new PasswordStrengthMeter('UserPass', 'meterid', 'tipid', ";
        // line 213
        echo twig_escape_filter($this->env, (isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null), "1");
        echo ");
\t\t\$(document).ready(function() {
\t\t\tpmeter.init();
\t\t});
\t</script>
\t<script type=\"text/javascript\" src=\"script/install.js?";
        // line 218
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
</body>
</html>";
    }

}
