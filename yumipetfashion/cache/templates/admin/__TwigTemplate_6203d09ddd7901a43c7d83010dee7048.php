<?php

/* exporttemplates.form.tpl */
class __TwigTemplate_6203d09ddd7901a43c7d83010dee7048 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckForm)\" id=\"frmTemplate\" method=\"post\">
";
        // line 2
        echo twig_safe_filter((isset($context['hiddenFields']) ? $context['hiddenFields'] : null));
        echo "
<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['TemplateTitle']) ? $context['TemplateTitle'] : null));
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("FormExportTemplateIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<div id=\"FieldStatus\" style=\"margin-bottom: 10px;\"></div>
\t\t\t<p>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"submit\" value=\"";
        // line 16
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"AddAnother\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 17
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 24
        echo getLang("ExportTemplateDetails");
        echo "</a></li>
\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['TypeTabs']) ? $context['TypeTabs'] : null));
        echo "
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 26
        echo getLang("SoftwareSettings");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<!--Template Details-->
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 36
        echo getLang("ExportTemplateDetails");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 40
        echo getLang("ExportTemplateName");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"templateName\" name=\"templateName\" class=\"Field200\" style=\"margin-bottom: 4px;\" value=\"";
        // line 43
        echo twig_safe_filter((isset($context['ExportTemplateName']) ? $context['ExportTemplateName'] : null));
        echo "\" maxlength=\"100\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr ";
        // line 46
        echo twig_safe_filter((isset($context['HideVendorRow']) ? $context['HideVendorRow'] : null));
        echo ">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 48
        echo twig_safe_filter((isset($context['VendorLabel']) ? $context['VendorLabel'] : null));
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['VendorData']) ? $context['VendorData'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">
\t\t\t\t\t\t\t";
        // line 56
        echo getLang("DataTypes");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['IncludeTypes']) ? $context['IncludeTypes'] : null));
        echo "
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 61
        echo getLang("DataFormat");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 65
        echo getLang("DateFormat");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select id=\"dateFormat\" name=\"dateFormat\" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_safe_filter((isset($context['DateFormats']) ? $context['DateFormats'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 75
        echo getLang("PriceFormat");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select id=\"priceFormat\" name=\"priceFormat\" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t";
        // line 79
        echo twig_safe_filter((isset($context['PriceFormats']) ? $context['PriceFormats'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 85
        echo getLang("BoolFormat");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select id=\"boolFormat\" name=\"boolFormat\" style=\"width: 100px;\">
\t\t\t\t\t\t\t\t";
        // line 89
        echo twig_safe_filter((isset($context['BoolFormats']) ? $context['BoolFormats'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 95
        echo getLang("BlankForFalse");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" value=\"1\" name=\"blankForFalse\" ";
        // line 98
        echo twig_safe_filter((isset($context['BlankForFalseChecked']) ? $context['BlankForFalseChecked'] : null));
        echo "/>";
        echo getLang("YesBlankForFalse");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 103
        echo getLang("StripHTML");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" value=\"1\" name=\"stripHTML\" ";
        // line 106
        echo twig_safe_filter((isset($context['StripHTMLChecked']) ? $context['StripHTMLChecked'] : null));
        echo "/>";
        echo getLang("YesStripHTML");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 109
        echo twig_safe_filter((isset($context['Settings']) ? $context['Settings'] : null));
        echo "
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<!--Template Details-->
\t\t\t<div id=\"div1\" style=\"padding-top: 10px; display: none;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 117
        echo getLang("MYOBSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 121
        echo getLang("MYOBAsset");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"assetAccount\" name=\"assetAccount\" class=\"Field100\" value=\"";
        // line 124
        echo twig_safe_filter((isset($context['AssetAccount']) ? $context['AssetAccount'] : null));
        echo "\" maxlength=\"6\"/>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('myobassethelp');\" onmouseover=\"ShowHelp('myobassethelp', '";
        // line 125
        echo getLang("MYOBAsset");
        echo "', '";
        echo getLang("MYOBAssetHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"myobassethelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 131
        echo getLang("MYOBIncome");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"incomeAccount\" name=\"incomeAccount\" class=\"Field100\" value=\"";
        // line 134
        echo twig_safe_filter((isset($context['IncomeAccount']) ? $context['IncomeAccount'] : null));
        echo "\"  maxlength=\"6\"/>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('myobincomehelp');\" onmouseover=\"ShowHelp('myobincomehelp', '";
        // line 135
        echo getLang("MYOBIncome");
        echo "', '";
        echo getLang("MYOBIncomeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"myobincomehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 141
        echo getLang("MYOBExpense");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"expenseAccount\" name=\"expenseAccount\" class=\"Field100\"  value=\"";
        // line 144
        echo twig_safe_filter((isset($context['ExpenseAccount']) ? $context['ExpenseAccount'] : null));
        echo "\" style=\"margin-bottom: 4px;\"  maxlength=\"6\"/>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('myobexpensehelp');\" onmouseover=\"ShowHelp('myobexpensehelp', '";
        // line 145
        echo getLang("MYOBExpense");
        echo "', '";
        echo getLang("MYOBExpenseHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"myobexpensehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 150
        echo getLang("PeachtreeSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 154
        echo getLang("AccountsReceivable");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"receivableAccount\" name=\"receivableAccount\" class=\"Field100\" value=\"";
        // line 157
        echo twig_safe_filter((isset($context['ReceivableAccount']) ? $context['ReceivableAccount'] : null));
        echo "\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 162
        echo getLang("GLAccount");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"glAccount\" name=\"glAccount\" class=\"Field100\"  value=\"";
        // line 165
        echo twig_safe_filter((isset($context['GLAccount']) ? $context['GLAccount'] : null));
        echo "\" style=\"margin-bottom: 4px;\"/>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('dgl');\" onmouseover=\"ShowHelp('dgl', '";
        // line 166
        echo getLang("GLAccount");
        echo "', '";
        echo getLang("GLAccountHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"dgl\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 172
        echo getLang("ModifyForPeachtree");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" value=\"1\" name=\"modifyForPeachtree\" ";
        // line 175
        echo twig_safe_filter((isset($context['ModifyForPeachtree']) ? $context['ModifyForPeachtree'] : null));
        echo "/>";
        echo getLang("YesModifyForPeachtree");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('dmod');\" onmouseover=\"ShowHelp('dmod', '";
        // line 176
        echo getLang("ModifyForPeachtree");
        echo "', '";
        echo getLang("ModifyForPeachtreeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"dmod\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t   ";
        // line 183
        echo twig_safe_filter((isset($context['TypeGrids']) ? $context['TypeGrids'] : null));
        echo "

\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\" id=\"SaveButtons\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 188
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 189
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"AddAnother\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 190
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/interface.js?";
        // line 200
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.color.js?";
        // line 201
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 205
        echo twig_safe_filter((isset($context['CancelMessage']) ? $context['CancelMessage'] : null));
        echo "'))
\t\t{
\t\t\tdocument.location.href='index.php?ToDo=viewExportTemplates';
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}

\tfunction ShowTab(T)
\t{
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\$('#div'+i).hide();
\t\t\t\$('#tab'+i).removeClass('active');
\t\t\t++i;
\t\t}

\t\t\$('#div'+T).show();
\t\t\$('#tab'+T).addClass('active');
\t\t\$('#currentTab').val(T);
\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\t\tvar updatingSortables = false;
\t\tvar updateTimeout = null;

\t\tfunction GenerateHash(list, hash) {
\t\t\t\$(\"ul[id\$='_\" + list + \"']\").each(function() {
\t\t\t\t// get the lists parent list item
\t\t\t\tvar parent_item = \$(this).parents(\"li\");
\t\t\t\tvar parent_item_id = parent_item.attr(\"id\")

\t\t\t\t// get the parent items list
\t\t\t\tvar parent_list = parent_item.parent();

\t\t\t\t//serialize this list
\t\t\t\tvar serial = \$.SortSerialize(this.id);
\t\t\t\t// replace the hash with id of the parent list
\t\t\t\tvar replace = new RegExp(this.id, 'g');
\t\t\t\tvar sublist_hash = serial.hash.replace(replace, parent_list.attr(\"id\"));

\t\t\t\t// merge the serialized data from both lists
\t\t\t\t// find position of parent item in hash
\t\t\t\tvar pos = hash.indexOf(parent_item_id);
\t\t\t\tvar start_hash = hash.substr(0, pos + parent_item_id.length);
\t\t\t\tvar end_hash = hash.substr(pos + parent_item_id.length);
\t\t\t\thash = start_hash + '&' + sublist_hash + end_hash;
\t\t\t});

\t\t\treturn hash;
\t\t}

\t\tfunction CreateSortableList(list) {
\t\t\t\$('#' + list + 'FieldList').Sortable(
\t\t\t\t{
\t\t\t\t\taccept: 'SortableRow' + list,
\t\t\t\t\topacity: .8,
\t\t\t\t\thelperclass: 'SortableRowHelper',
\t\t\t\t\tonChange: function(serialized) {
\t\t\t\t\t\tif (";
        // line 266
        echo twig_safe_filter((isset($context['TemplateId']) ? $context['TemplateId'] : null));
        echo " == 0) return;

\t\t\t\t\t\tvar hash = serialized[0].hash;

\t\t\t\t\t\t// find if this list has any child lists
\t\t\t\t\t\thash = GenerateHash(list + \"FieldList\", hash);

\t\t\t\t\t\t// does this list have a parent list?
\t\t\t\t\t\tif (\$(\"#\" + list + \"FieldList\").parents(\"li\").length == 1) {
\t\t\t\t\t\t\t// the parent list
\t\t\t\t\t\t\tvar parent_id = \$(\"#\" + list + \"FieldList\").parents(\"li\").parent().attr(\"id\");
\t\t\t\t\t\t\tvar parent_hash = \$.SortSerialize(parent_id).hash;

\t\t\t\t\t\t\thash = GenerateHash(parent_id, parent_hash);
\t\t\t\t\t\t\tlist = parent_id.substr(0, parent_id.length - 9);
\t\t\t\t\t\t}

\t\t\t\t\t\tupdatingSortables = true;
\t\t\t\t\t\tif(updateTimeout != null) window.clearTimeout(updateTimeout);

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'remote.php?w=updateTemplateFields&l=' + list + '&tempId=";
        // line 287
        echo twig_safe_filter((isset($context['TemplateId']) ? $context['TemplateId'] : null));
        echo "',
\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\tdataType: 'xml',
\t\t\t\t\t\t\tdata: hash,
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tvar status = \$('status', response).text();
\t\t\t\t\t\t\t\tvar message = \$('message', response).text();

\t\t\t\t\t\t\t\tif(status == 0) {
\t\t\t\t\t\t\t\t\tdisplay_error('FieldStatus', message);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\tdisplay_success('FieldStatus', message);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif(document.all) {
\t\t\t\t\t\t\t\t\t// IE has problems here - it breaks on sortable lists so for now we just
\t\t\t\t\t\t\t\t\t// refresh the current page
\t\t\t\t\t\t\t\t\twindow.location.reload();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});


\t\t\t\t\t},
\t\t\t\t\tonStop: function() {
\t\t\t\t\t\tif(document.all && updatingSortables == false) {
\t\t\t\t\t\t\t// IE has problems here - it breaks on sortable lists so for now we just
\t\t\t\t\t\t\t// refresh the current page
\t\t\t\t\t\t\tupdateTimeout = window.setTimeout(function() { window.location.reload(); }, 100);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tautoScroll: true,
\t\t\t\t\thandle: '.sort-handle'
\t\t\t\t}
\t\t\t);

\t\t\taddCheckHandlers(list + 'FieldList');
\t\t}

\t\tfunction addCheckHandlers(list) {
\t\t\t\$(\"#\" + list + \" :checkbox\").change(function() {
\t\t\t\tdisableInputs(this.id, this.checked);
\t\t\t});
\t\t}

\t\t// disables/enables the column header input for a particular row
\t\tfunction disableInputs(id, checked) {
\t\t   if (checked) {
\t\t\t\t\$(\"#label_\" + id).fadeTo(\"fast\", 1);
\t\t\t\t\$(\"#headercol_\" + id + \" td[id^='label_']\").fadeTo(\"fast\", 1);
\t\t\t\t\$(\"#headercol_\" + id + \" :text\").removeAttr(\"readonly\").css(\"color\", \"black\");
\t\t\t\t\$(\"#headercol_\" + id + \" :checkbox\").removeAttr(\"disabled\").css(\"color\", \"grey\");

\t\t\t\t\$(\"#headercol_\" + id + \" :checkbox\").change();
\t\t\t}
\t\t\telse {
\t\t\t\t\$(\"#label_\" + id + \",\").fadeTo(\"fast\", 0.5);
\t\t\t\t\$(\"#headercol_\" + id + \" td[id^='label_']\").fadeTo(\"fast\", 0.5);
\t\t\t\t\$(\"#headercol_\" + id + \" :text\").attr(\"readonly\",\"readonly\").css(\"color\", \"grey\");
\t\t\t\t\$(\"#headercol_\" + id + \" :checkbox\").attr(\"disabled\",\"disabled\").css(\"color\", \"grey\");
\t\t\t}
\t\t}

\t\tfunction toggleFieldCheck(list, checked) {
\t\t\tif (checked)
\t\t\t\t\$(\"#\" + list + \"FieldList :checkbox\").attr(\"checked\", \"checked\");
\t\t\telse
\t\t\t\t\$(\"#\" + list + \"FieldList :checkbox\").removeAttr(\"checked\");

\t\t\t\$(\"#\" + list + \"FieldList :checkbox\").each(function() {
\t\t\t\tdisableInputs(this.id, checked);
\t\t\t});
\t\t}

\t\tfunction CheckForm() {
\t\t\t// check template name
\t\t\tif (jQuery.trim(\$(\"#templateName\").val()) == \"\") {
\t\t\t\talert(\"";
        // line 364
        echo getLang("NoTemplateName");
        echo "\");

\t\t\t\tShowTab(0);
\t\t\t\t\$(\"#templateName\").focus();

\t\t\t\treturn false;
\t\t\t}

\t\t\t//ensure at least one type is selected
\t\t\tif (\$(\":checkbox[name^='includeType']:checked\").length == 0) {
\t\t\t\talert('";
        // line 374
        echo getLang("NoFilesSelected");
        echo "');

\t\t\t\treturn false;
\t\t\t}

\t\t\t";
        // line 379
        echo twig_safe_filter((isset($context['VerifyJS']) ? $context['VerifyJS'] : null));
        echo "

\t\t\treturn true;
\t\t}

\t\tfunction CreateTypeData(type, tabindex) {
\t\t\t// create a sortable list for the type
\t\t\tCreateSortableList(type);

\t\t\tif (tabindex > 0) {
\t\t\t\t// function to hide types tab
\t\t\t\t(\"#include\" + type).change(function() {
\t\t\t\t\tif (this.checked)
\t\t\t\t\t\t\$(\"#tab\" + tabindex).animate({ opacity: \"show\", color: \"green\" }, \"slow\").animate({color: \"#666\"}, \"medium\");
\t\t\t\t\telse
\t\t\t\t\t\t\$(\"#tab\" + tabindex).fadeOut(\"fast\");
\t\t\t\t});
\t\t\t}
\t\t}

\t\tfunction VerifyList(list, tabindex) {
\t\t\tvar ret = true;

\t\t\t// use customer file is ticked
\t\t\tif (\$(\"#include\" + list).attr(\"checked\")) {
\t\t\t\t// make sure at least one field is checked
\t\t\t\tif (\$(\"#\" + list + \"FieldList :checkbox:checked\").length == 0) {
\t\t\t\t\tvar nofields = \"";
        // line 406
        echo getLang("NoFields");
        echo "\";
\t\t\t\t\tnofields = nofields.replace(/\\%s/, list);
\t\t\t\t\talert(nofields);

\t\t\t\t\tShowTab(tabindex);

\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t// check that checked fields have a header column
\t\t\t   \$(\"#\" + list + \"FieldList :checkbox:checked\").each(function() {
\t\t\t\t\tif (jQuery.trim(\$(\"#header_\" + this.id).val()) == \"\") {
\t\t\t\t\t\tvar label = \$(\"#label_\" + this.id).text();

\t\t\t\t\t\talert(\"";
        // line 420
        echo getLang("FieldNoHeader");
        echo "\\n\\n\" + label.substr(0, label.length - 1));

\t\t\t\t\t\tShowTab(tabindex);
\t\t\t\t\t\t\$(\"#header_\" + this.id).focus();

\t\t\t\t\t\tret = false;
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t   });
\t\t\t}

\t\t\treturn ret;
\t\t}

\t\t \$(document).ready(function()
\t\t{
\t\t\t";
        // line 436
        echo twig_safe_filter((isset($context['IncludeJS']) ? $context['IncludeJS'] : null));
        echo "

\t\t\t";
        // line 438
        echo twig_safe_filter((isset($context['CreateLists']) ? $context['CreateLists'] : null));
        echo "

\t\t\t";
        // line 440
        echo twig_safe_filter((isset($context['ShowTabScript']) ? $context['ShowTabScript'] : null));
        echo "
\t\t});
</script>
";
    }

}
