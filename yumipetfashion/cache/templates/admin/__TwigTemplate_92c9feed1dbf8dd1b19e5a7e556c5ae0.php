<?php

/* formfields.manage.tpl */
class __TwigTemplate_92c9feed1dbf8dd1b19e5a7e556c5ae0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t\t<input type=\"hidden\" id=\"enableSortable\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['FormFieldsIsSortable']) ? $context['FormFieldsIsSortable'] : null));
        echo "\" />
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("FormFieldsHeading");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("FormFieldsIntro");
        echo "</p>
\t\t\t\t<div id=\"FormFieldStatus\">
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input type=\"hidden\" id=\"CurrentFormFieldsFormId\" name=\"CurrentFormFieldsFormId\" value=\"";
        // line 18
        echo twig_safe_filter((isset($context['FormFieldsAccountFormId']) ? $context['FormFieldsAccountFormId'] : null));
        echo "\" />
\t\t\t\t<ul id=\"FormFieldsSectionNav\" class=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"FormFieldsSection_";
        // line 20
        echo twig_safe_filter((isset($context['FormFieldsAccountFormId']) ? $context['FormFieldsAccountFormId'] : null));
        echo "\" onclick=\"ChangeFormFieldsTab(";
        echo twig_safe_filter((isset($context['FormFieldsAccountFormId']) ? $context['FormFieldsAccountFormId'] : null));
        echo ");\">";
        echo twig_safe_filter((isset($context['FormFieldsSectionAccount']) ? $context['FormFieldsSectionAccount'] : null));
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" id=\"FormFieldsSection_";
        // line 21
        echo twig_safe_filter((isset($context['FormFieldsAddressFormId']) ? $context['FormFieldsAddressFormId'] : null));
        echo "\" onclick=\"ChangeFormFieldsTab(";
        echo twig_safe_filter((isset($context['FormFieldsAddressFormId']) ? $context['FormFieldsAddressFormId'] : null));
        echo ");\">";
        echo twig_safe_filter((isset($context['FormFieldsSectionAddress']) ? $context['FormFieldsSectionAddress'] : null));
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"";
        // line 26
        echo twig_safe_filter((isset($context['HideFormFieldsButtons']) ? $context['HideFormFieldsButtons'] : null));
        echo "\">
\t\t\t\t<p class=\"Intro\">
\t\t\t\t\t<button id=\"ViewsMenuButton\" class=\"PopDownMenu FormButton FormFieldsMenuButton\" style=\"display:";
        // line 28
        echo twig_safe_filter((isset($context['FormFieldsHideAddButton']) ? $context['FormFieldsHideAddButton'] : null));
        echo "\">";
        echo getLang("FormFieldsAddField");
        echo " <img src=\"./images/arrow_blue.gif\" alt=\"\" /></button>
\t\t\t\t\t &nbsp; <input type=\"button\" value=\"";
        // line 29
        echo getLang("FormFieldsDeleteSelected");
        echo "\" onclick=\"DeleteSelectedFormFields()\" class=\"FormButton\" style=\"width: auto; display:";
        echo twig_safe_filter((isset($context['FormFieldsHideDeleteButton']) ? $context['FormFieldsHideDeleteButton'] : null));
        echo "\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t\t<td align=\"center\" style=\"width:18px;\"><input type=\"checkbox\" id=\"FormFieldDeleteCheckbox\" onclick=\"TickFormFields(this.checked);\"></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 39
        echo getLang("Name");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width:17%;\">
\t\t\t\t\t\t\t";
        // line 42
        echo getLang("Data");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width:17%;\">
\t\t\t\t\t\t\t";
        // line 45
        echo getLang("LastModified");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width:17%;\">
\t\t\t\t\t\t\t";
        // line 48
        echo getLang("Type");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"width:17%;\">
\t\t\t\t\t\t\t";
        // line 51
        echo getLang("Action");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<div id=\"FormFieldsGrid\">
\t\t\t\t\t";
        // line 56
        echo twig_safe_filter((isset($context['FormFieldsGrid']) ? $context['FormFieldsGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>

\t<div id=\"ViewsMenu\" class=\"DropShadow DropDownMenu\" style=\"display: none; width:150px\">
\t\t<div>
\t\t\t";
        // line 65
        echo twig_safe_filter((isset($context['FormFieldsOptions']) ? $context['FormFieldsOptions'] : null));
        echo "
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/interface.js?";
        // line 69
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/inestedsortable.js?";
        // line 70
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\">

\t\tfunction TickFormFields(ticked)
\t\t{
\t\t\t\$('.FormFieldsIdx').each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\tif (!this.disabled) {
\t\t\t\t\t\tthis.checked = ticked;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction ChangeFormFieldsTab(formId)
\t\t{
\t\t\tif (formId == '' || isNaN(formId)) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$('#FormFieldsSectionNav li a').each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\tif (\$(this).attr('id') == 'FormFieldsSection_' + formId) {
\t\t\t\t\t\t\$(this).attr('class', 'active');
\t\t\t\t\t\t\$('#CurrentFormFieldsFormId').val(formId);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(this).attr('class', '');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'remoteSection=formfields&w=getFormFieldGrid&formId='+formId,
\t\t\t\tsuccess: ChangeFormFieldsTabCallback
\t\t\t});
\t\t}

\t\tfunction ChangeFormFieldsTabCallback(data)
\t\t{
\t\t\tif (\$('status', data).text() == '0') {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$('#FormFieldsGrid').html(\$('grid', data).text());

\t\t\tInitFormFieldSortable();
\t\t}

\t\tfunction AddFormField(fieldType)
\t\t{
\t\t\tvar formId = \$('#CurrentFormFieldsFormId').val();

\t\t\tif (fieldType == '' || formId == '' || isNaN(formId)) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\turl: 'remote.php?remoteSection=formfields&w=addFieldSetupPopup&fieldType='+fieldType+'&formId='+formId,
\t\t\t\twidth: 600,
\t\t\t\tonOpen:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\t\$('#ModalContainer').show();
\t\t\t\t\t\tInitFormFieldPopup();
\t\t\t\t\t},
\t\t\t\tonBeforeClose:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\tChangeFormFieldsTab(\$('#CurrentFormFieldsFormId').val());
\t\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction EditFormField(fieldId, formId)
\t\t{
\t\t\tif (isNaN(fieldId) || isNaN(formId)) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\turl: 'remote.php?remoteSection=formfields&w=getFieldSetupPopup&fieldId='+fieldId+'&formId='+formId,
\t\t\t\twidth: 600,
\t\t\t\tonOpen:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\t\$('#ModalContainer').show();
\t\t\t\t\t\tInitFormFieldPopup();
\t\t\t\t\t},
\t\t\t\tonBeforeClose:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\tChangeFormFieldsTab(\$('#CurrentFormFieldsFormId').val());
\t\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction CopyFormField(fieldId, formId)
\t\t{
\t\t\tif (isNaN(fieldId) || isNaN(formId)) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\turl: 'remote.php?remoteSection=formfields&w=copyFieldSetupPopup&fieldId='+fieldId+'&formId='+formId,
\t\t\t\twidth: 600,
\t\t\t\tonOpen:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\t\$('#ModalContainer').show();
\t\t\t\t\t\tInitFormFieldPopup();
\t\t\t\t\t},
\t\t\t\tonBeforeClose:
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\tChangeFormFieldsTab(\$('#CurrentFormFieldsFormId').val());
\t\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction DeleteSelectedFormFields()
\t\t{
\t\t\tvar selectedIdx = [];
\t\t\tvar formId = \$('#CurrentFormFieldsFormId').val();

\t\t\t\$('.FormFieldsIdx').each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\tif (!this.disabled && this.checked) {
\t\t\t\t\t\tselectedIdx[selectedIdx.length] = this.value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);

\t\t\tif (selectedIdx.length < 1) {
\t\t\t\talert(\"";
        // line 211
        echo getLang("FormFieldDeleteSelectedInvalid");
        echo "\");
\t\t\t\treturn;
\t\t\t}

\t\t\tif (!confirm(\"";
        // line 215
        echo getLang("FormFieldDeleteSelectedConfirm");
        echo "\")) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'remoteSection=formfields&w=deleteMultiField&fieldIdx='+selectedIdx.join(',')+'&formId='+formId,
\t\t\t\tsuccess: DeleteSelectedFormFieldsCallback
\t\t\t});
\t\t}

\t\tfunction DeleteSelectedFormFieldsCallback(data)
\t\t{
\t\t\tif (\$('status', data).text() == '1') {
\t\t\t\tChangeFormFieldsTab(\$('#CurrentFormFieldsFormId').val());
\t\t\t\t\$('#FormFieldDeleteCheckbox').attr('checked', false);
\t\t\t\tdisplay_success('FormFieldStatus', \$('msg', data).text());
\t\t\t} else {
\t\t\t\tdisplay_error('FormFieldStatus', \$('msg', data).text());
\t\t\t}
\t\t}

\t\tfunction DeleteFormField(fieldId, formId)
\t\t{
\t\t\tif (isNaN(fieldId) || isNaN(formId)) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (!confirm(\"";
        // line 244
        echo getLang("FormFieldDeleteConfirm");
        echo "\")) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'remoteSection=formfields&w=deleteField&fieldId='+fieldId+'&formId='+formId,
\t\t\t\tsuccess: DeleteFormFieldCallback
\t\t\t});
\t\t}

\t\tfunction DeleteFormFieldCallback(data)
\t\t{
\t\t\tvar fieldId = \$('fieldId', data).text();

\t\t\tif (\$('status', data).text() == '1') {
\t\t\t\tChangeFormFieldsTab(\$('#CurrentFormFieldsFormId').val());
\t\t\t\tdisplay_success('FormFieldStatus', \$('msg', data).text());
\t\t\t} else {
\t\t\t\tdisplay_error('FormFieldStatus', \$('msg', data).text());
\t\t\t}
\t\t}

\t\tfunction UpdateSortableFormField()
\t\t{
\t\t\tvar idx = [];

\t\t\t\$('input.FormFieldsIdx').each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\tidx[idx.length] = \$(this).val();
\t\t\t\t}
\t\t\t);

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\t'remoteSection': 'formfields',
\t\t\t\t\t\t'w': 'resortFormFieldGrid',
\t\t\t\t\t\t'formId': \$('#CurrentFormFieldsFormId').val(),
\t\t\t\t\t\t'sortorder': idx.join(',')
\t\t\t\t\t},
\t\t\t\tsuccess: function() { display_success('FormFieldStatus', \"";
        // line 288
        echo getLang("FormFieldReordered");
        echo "\"); }
\t\t\t});
\t\t}

\t\tfunction InitFormFieldSortable()
\t\t{
\t\t\tif (\$('#enableSortable').val() == '') {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$('#FormFieldsGrid ul.SortableList').each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\t\$(this).sortable(
\t\t\t\t\t{
\t\t\t\t\t\t'accept': 'SortableRow',
\t\t\t\t\t\t'containment': 'parent',
\t\t\t\t\t\t'handle': '.sort-handle',
\t\t\t\t\t\t'opacity': .8,
\t\t\t\t\t\t'autoScroll': true,
\t\t\t\t\t\t'helperclass': 'SortableRowHelper',
\t\t\t\t\t\t'stop': UpdateSortableFormField
\t\t\t\t\t});
\t\t\t\t}
\t\t\t);
\t\t}

\t\t\$(document).ready(
\t\t\tfunction()
\t\t\t{
\t\t\t\tInitFormFieldSortable();
\t\t\t}
\t\t);

\t</script>";
    }

}
