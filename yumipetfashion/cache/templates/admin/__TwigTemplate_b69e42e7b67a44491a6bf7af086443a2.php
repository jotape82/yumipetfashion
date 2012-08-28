<?php

/* import.ordertrackingnumbers.step1.tpl */
class __TwigTemplate_b69e42e7b67a44491a6bf7af086443a2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=importOrdertrackingnumbers&Step=2\" onsubmit=\"return ValidateForm(CheckImportOrdertrackingnumberForm)\" id=\"frmImport\" method=\"post\">
\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ImportOrdertrackingnumbersStep1");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 9
        echo getLang("ImportOrdertrackingnumbersStep1Desc");
        echo "</p>
\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 17
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("OrderStatusDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 31
        echo getLang("UpdateOrderStatusTo");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"updateOrderStatus\" name=\"updateOrderStatus\" class=\"Field\">
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 35
        echo getLang("DoNotUpdate");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\">";
        // line 36
        echo getLang("Pending");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"7\">";
        // line 37
        echo getLang("AwaitingPayment");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"11\">";
        // line 38
        echo getLang("AwaitingFulfillment");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"9\">";
        // line 39
        echo getLang("AwaitingShipment");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"8\">";
        // line 40
        echo getLang("AwaitingPickup");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"3\">";
        // line 41
        echo getLang("PartiallyShipped");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"10\">";
        // line 42
        echo getLang("Completed");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
        // line 43
        echo getLang("Shipped");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"5\">";
        // line 44
        echo getLang("Cancelled");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"6\">";
        // line 45
        echo getLang("Declined");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"4\">";
        // line 46
        echo getLang("Refunded");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onMouseOut=\"HideHelp('u1');\" onMouseOver=\"ShowHelp('u1', '";
        // line 48
        echo getLang("UpdateOrderStatus");
        echo "', '";
        echo getLang("UpdateOrderStatusDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"u1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 56
        echo getLang("ImportDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 60
        echo getLang("ImportOverride");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"OverrideDuplicates\" value=\"1\" /> ";
        // line 63
        echo getLang("YesImportOverride");
        echo "</label>
\t\t\t\t\t\t<img onMouseOut=\"HideHelp('a2');\" onMouseOver=\"ShowHelp('a2', '";
        // line 64
        echo getLang("ImportOverride");
        echo "', '";
        echo getLang("ImportOverrideDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"a2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 71
        echo getLang("ImportFileDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 75
        echo getLang("ImportFile");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input id=\"OrdertrackingnumberImportUseUpload\" type=\"radio\" name=\"useserver\" value=\"0\" checked=\"checked\" onclick=\"ToggleSource();\" />
\t\t\t\t\t\t\t\t";
        // line 81
        echo getLang("ImportFileUpload");
        echo "\t\t\t\t\t\t\t\t";
        // line 82
        echo getLang("ImportMaxSize", array("maxSize" => (isset($context['ImportMaxSize']) ? $context['ImportMaxSize'] : null)));
        // line 84
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onMouseOut=\"HideHelp('d1');\" onMouseOver=\"ShowHelp('d1', '";
        // line 86
        echo getLang("ImportFileUpload");
        echo "', '";
        echo getLang("ImportFileUploadDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"d1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"OrdertrackingnumberImportUploadField\" style=\"margin-left: 25px;\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"importfile\" id=\"ImportFile\" class=\"Field250\" />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label><input id=\"OrdertrackingnumberImportUseServer\" type=\"radio\" name=\"useserver\" value=\"1\" onclick=\"ToggleSource();\" /> ";
        // line 94
        echo getLang("ImportFileServer");
        echo "</label>
\t\t\t\t\t\t\t<img onMouseOut=\"HideHelp('d2');\" onMouseOver=\"ShowHelp('d2', '";
        // line 95
        echo getLang("ImportFileServer");
        echo "', '";
        echo getLang("ImportFileServerDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"d2\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"OrdertrackingnumberImportServerField\" style=\"margin-left: 25px; display: none;\">
\t\t\t\t\t\t\t<select name=\"serverfile\" id=\"ServerFile\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 100
        echo getLang("ImportChooseFile");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 101
        echo twig_safe_filter((isset($context['ServerFiles']) ? $context['ServerFiles'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"OrdertrackingnumberImportServerNoList\" style=\"margin: 5px 0 0 25px; display: none; font-style: italic;\" class=\"Field250\">
\t\t\t\t\t\t\t";
        // line 105
        echo getLang("FieldNoServerFiles");
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 112
        echo getLang("ImportContainsHeaders");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"Headers\" value=\"1\" /> ";
        // line 115
        echo getLang("YesImportContainsHeaders");
        echo "</label>
\t\t\t\t\t\t<img onMouseOut=\"HideHelp('d3');\" onMouseOver=\"ShowHelp('d3', '";
        // line 116
        echo getLang("ImportContainsHeaders");
        echo "', '";
        echo getLang("ImportContainsHeadersDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 123
        echo getLang("ImportFieldSeparator");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"FieldSeparator\" id=\"FieldSeparator\" class=\"Field250\" value=\"";
        // line 126
        echo twig_safe_filter((isset($context['FieldSeparator']) ? $context['FieldSeparator'] : null));
        echo "\" />
\t\t\t\t\t\t<img onMouseOut=\"HideHelp('d4');\" onMouseOver=\"ShowHelp('d4', '";
        // line 127
        echo getLang("ImportFieldSeparator");
        echo "', '";
        echo getLang("ImportFieldSeparatorDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 134
        echo getLang("ImportFieldEnclosure");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"FieldEnclosure\" id=\"FieldEnclosure\" class=\"Field250\" value='";
        // line 137
        echo twig_safe_filter((isset($context['FieldEnclosure']) ? $context['FieldEnclosure'] : null));
        echo "' />
\t\t\t\t\t\t<img onMouseOut=\"HideHelp('d5');\" onMouseOver=\"ShowHelp('d5', '";
        // line 138
        echo getLang("ImportFieldEnclosure");
        echo "', '";
        echo getLang("ImportFieldEnclosureDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 149
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 150
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 163
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\twindow.location = 'index.php?ToDo=manageordertrackingnumbers';
\t}

\tfunction CheckImportOrdertrackingnumberForm()
\t{
\t\tvar f = document.getElementById('OrdertrackingnumberImportUseUpload');
\t\tif(f.checked == true)
\t\t{
\t\t\tvar f = document.getElementById('ImportFile');
\t\t\tif(f.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 175
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tvar f = document.getElementById('ServerFile');
\t\t\tif(f.value < 1)
\t\t\t{
\t\t\t\talert('";
        // line 185
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tvar f = document.getElementById('FieldSeparator');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 194
        echo getLang("NoImportFieldSeparator");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}

\t\tvar f = document.getElementById('FieldEnclosure');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 202
        echo getLang("NoImportFieldEnclosure");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}
\t\treturn true;
\t}

\tfunction ToggleSource()
\t{
\t\tvar file = document.getElementById('OrdertrackingnumberImportUseUpload');
\t\tif(file.checked == true)
\t\t{
\t\t\tdocument.getElementById('OrdertrackingnumberImportUploadField').style.display = '';
\t\t\tdocument.getElementById('OrdertrackingnumberImportServerField').style.display = 'none';
\t\t\tdocument.getElementById('OrdertrackingnumberImportServerNoList').style.display = 'none';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('OrdertrackingnumberImportUploadField').style.display = 'none';
\t\t\tif(document.getElementById('OrdertrackingnumberImportServerField').getElementsByTagName('SELECT')[0].options.length == 1)
\t\t\t{
\t\t\t\tdocument.getElementById('OrdertrackingnumberImportServerNoList').style.display = '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tdocument.getElementById('OrdertrackingnumberImportServerField').style.display = '';
\t\t\t}
\t\t}
\t}
\t</script>";
    }

}
