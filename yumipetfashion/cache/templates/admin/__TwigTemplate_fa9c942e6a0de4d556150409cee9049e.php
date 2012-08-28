<?php

/* backup.create.tpl */
class __TwigTemplate_fa9c942e6a0de4d556150409cee9049e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=createBackup2\" id=\"frmBanner\" method=\"post\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 6
        echo getLang("CreateBackup");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 10
        echo getLang("CreateBackupIntro");
        echo "</p>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" style=\"width:100px\" value=\"";
        // line 13
        echo getLang("StartBackup");
        echo "...\" class=\"FormButton\" onclick=\"StartBackup(); return false;\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t</p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 21
        echo getLang("BackupSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 25
        echo getLang("BackupMethod");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label style=\"display: ";
        // line 28
        echo twig_safe_filter((isset($context['HideLocalMethod']) ? $context['HideLocalMethod'] : null));
        echo "\"><input type=\"radio\" name=\"backupmethod\" value=\"local\" ";
        echo twig_safe_filter((isset($context['LocalChecked']) ? $context['LocalChecked'] : null));
        echo " /> ";
        echo getLang("BackupMethodLocal");
        echo "<br /></label>
\t\t\t\t\t\t<label style=\"display: ";
        // line 29
        echo twig_safe_filter((isset($context['HideFTPMethod']) ? $context['HideFTPMethod'] : null));
        echo "\"><input type=\"radio\" name=\"backupmethod\" value=\"ftp\" ";
        echo twig_safe_filter((isset($context['FTPChecked']) ? $context['FTPChecked'] : null));
        echo " /> ";
        echo getLang("BackupMethodRemoteFTP");
        echo " (";
        echo twig_safe_filter((isset($context['RemoteFTPHost']) ? $context['RemoteFTPHost'] : null));
        echo ")</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 34
        echo getLang("BackupDatabase");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"backupdb\" value=\"1\" checked=\"checked\" onclick=\"ToggleDBBackup(this);\" /> ";
        // line 37
        echo getLang("YesBackupDatabase");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 38
        echo getLang("BackupDatabase");
        echo "', '";
        echo getLang("BackupDatabaseHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t<div id=\"DBBackupDetails\" style=\"display: none;\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
        // line 42
        echo getLang("BackupDatabaseTableCount");
        echo " ";
        echo twig_safe_filter((isset($context['TableCount']) ? $context['TableCount'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 43
        echo getLang("BackupDatabaseRowCount");
        echo " ";
        echo twig_safe_filter((isset($context['RowCount']) ? $context['RowCount'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 44
        echo getLang("BackupDatabaseMaxRows");
        echo " ";
        echo twig_safe_filter((isset($context['MaxRowCount']) ? $context['MaxRowCount'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['MaxRowTable']) ? $context['MaxRowTable'] : null));
        echo ")</li>
\t\t\t\t\t\t\t\t<li>";
        // line 45
        echo getLang("BackupDatabaseMinRows");
        echo " ";
        echo twig_safe_filter((isset($context['MinRowCount']) ? $context['MinRowCount'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['MinRowTable']) ? $context['MinRowTable'] : null));
        echo ")</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 52
        echo getLang("BackupProductImages");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"backupimages\" value=\"1\" checked=\"checked\" onclick=\"ToggleImageBackup(this);\" /> ";
        // line 55
        echo getLang("YesBackupProductImages");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 56
        echo getLang("BackupProductImages");
        echo "', '";
        echo getLang("BackupProductImagesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t<div id=\"ImageBackupDetails\" style=\"display: none;\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
        // line 60
        echo getLang("BackupProductImagesCount");
        echo " ";
        echo twig_safe_filter((isset($context['ImageCount']) ? $context['ImageCount'] : null));
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 67
        echo getLang("BackupDigitalProducts");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"backupdigitalproducts\" value=\"1\" checked=\"checked\" onclick=\"ToggleDigitalBackup(this);\" /> ";
        // line 70
        echo getLang("YesBackupDigitalProducts");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 71
        echo getLang("BackupDigitalProducts");
        echo "', '";
        echo getLang("BackupDigitalProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t<div id=\"DigitalBackupDetails\" style=\"display: none;\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
        // line 75
        echo getLang("BackupDigitalProductsCount");
        echo " ";
        echo twig_safe_filter((isset($context['DigitalProductCount']) ? $context['DigitalProductCount'] : null));
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" style=\"width:100px\" value=\"";
        // line 83
        echo getLang("StartBackup");
        echo "...\" class=\"FormButton\" onclick=\"StartBackup(); return false;\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
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
\t\tfunction ToggleDBBackup(element)
\t\t{
\t\t\tif(element.checked == true) {
\t\t\t\tdocument.getElementById('DBBackupDetails').style.display = '';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById('DBBackupDetails').style.display = 'none';
\t\t\t}
\t\t}
\t\tToggleDBBackup(document.getElementsByTagName('input')[2]);

\t\tfunction ToggleImageBackup(element)
\t\t{
\t\t\tif(element.checked == true) {
\t\t\t\tdocument.getElementById('ImageBackupDetails').style.display = '';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById('ImageBackupDetails').style.display = 'none';
\t\t\t}
\t\t}
\t\tToggleImageBackup(document.getElementsByTagName('input')[5]);

\t\tfunction ToggleDigitalBackup(element)
\t\t{
\t\t\tif(element.checked == true) {
\t\t\t\tdocument.getElementById('DigitalBackupDetails').style.display = '';
\t\t\t}
\t\t\telse {
\t\t\t\tdocument.getElementById('DigitalBackupDetails').style.display = 'none';
\t\t\t}
\t\t}
\t\tToggleDigitalBackup(document.getElementsByTagName('input')[6]);

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 132
        echo getLang("ConfirmCancelBackup");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewBackups\";
\t\t}

\t\tfunction StartBackup() {
\t\t\tvar inputs = document.getElementsByTagName('INPUT');
\t\t\tvar url = '';
\t\t\tfor(var i = 0; i < inputs.length; ++i) {
\t\t\t\tif(inputs[i].type == \"submit\" || inputs[i].type == \"button\" || ((inputs[i].type == \"checkbox\" || inputs[i].type == \"radio\") && inputs[i].checked == false) || inputs[i].offsetHeight == 0) continue;
\t\t\t\turl += '&'+inputs[i].name+'='+inputs[i].value;
\t\t\t}
\t\t\ttb_show('', 'index.php?ToDo=initBackup'+url+'&keepThis=true&TB_iframe=tue&height=250&width=400&modal=true', '');
\t\t}
\t</script>";
    }

}
