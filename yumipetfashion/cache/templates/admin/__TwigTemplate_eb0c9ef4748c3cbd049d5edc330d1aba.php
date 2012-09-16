<?php

/* formfield.backend.html */
class __TwigTemplate_eb0c9ef4748c3cbd049d5edc330d1aba extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"script/formfield.admin.js?";
        echo twig_safe_filter((isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null));
        echo "\"></script>
<script type=\"text/javascript\"><!--

\tlang.FormFieldSetupSaving = \"";
        // line 4
        echo getLang("FormFieldSetupSaving");
        echo "\";
\tlang.FormFieldSetupInvalidName = \"";
        // line 5
        echo getLang("FormFieldSetupInvalidName");
        echo "\";
\tlang.FormFieldSetupInvalidSize = \"";
        // line 6
        echo getLang("FormFieldSetupInvalidSize");
        echo "\";
\tlang.FormFieldSetupInvalidMaxLength = \"";
        // line 7
        echo getLang("FormFieldSetupInvalidMaxLength");
        echo "\";
\tlang.FormFieldSetupInvalidRows = \"";
        // line 8
        echo getLang("FormFieldSetupInvalidRows");
        echo "\";
\tlang.FormFieldSetupSelectOptionsAddError = \"";
        // line 9
        echo getLang("FormFieldSetupSelectOptionsAddError");
        echo "\";
\tlang.FormFieldSetupSelectOptionsAddDuplicate = \"";
        // line 10
        echo getLang("FormFieldSetupSelectOptionsAddDuplicate");
        echo "\";
\tlang.FormFieldSetupInvalidChoosePrefix = \"";
        // line 11
        echo getLang("FormFieldSetupInvalidChoosePrefix");
        echo "\";
\tlang.FormFieldSetupInvalidSelectOptions = \"";
        // line 12
        echo getLang("FormFieldSetupInvalidSelectOptions");
        echo "\";
\tlang.FormFieldSetupInvalidSelectOptionsSort = \"";
        // line 13
        echo getLang("FormFieldSetupInvalidSelectOptionsSort");
        echo "\";
\tlang.FormFieldSetupChooseOption = \"";
        // line 14
        echo getLang("FormFieldSetupChooseOption");
        echo "\";
\tlang.FormFieldSetupInvalidLimitForm = \"";
        // line 15
        echo getLang("FormFieldSetupInvalidLimitFrom");
        echo "\";
\tlang.FormFieldSetupInvalidLimitTo = \"";
        // line 16
        echo getLang("FormFieldSetupInvalidLimitTo");
        echo "\";
\tlang.FormFieldSetupInvalidLimitRange = \"";
        // line 17
        echo getLang("FormFieldSetupInvalidLimitRange");
        echo "\";
\tlang.FormFieldSetupInvalidLimitDefault = \"";
        // line 18
        echo getLang("FormFieldSetupInvalidLimitDefault");
        echo "\";
\tlang.FormFieldSetupInvalidNumberDefaultValue = \"";
        // line 19
        echo getLang("FormFieldSetupInvalidNumberDefaultValue");
        echo "\";
\tlang.FormFieldSetupInvalidDateLimitFrom = \"";
        // line 20
        echo getLang("FormFieldSetupInvalidDateLimitFrom");
        echo "\";
\tlang.FormFieldSetupInvalidDateLimitTo = \"";
        // line 21
        echo getLang("FormFieldSetupInvalidDateLimitTo");
        echo "\";
\tlang.FormFieldSetupInvalidDateLimitRange = \"";
        // line 22
        echo getLang("FormFieldSetupInvalidDateLimitRange");
        echo "\";
\tlang.FormFieldSetupInvalidDateDefaultValue = \"";
        // line 23
        echo getLang("FormFieldSetupInvalidDateDefaultValue");
        echo "\";
\tlang.FormFieldSetupInvalidDateDefaultRange = \"";
        // line 24
        echo getLang("FormFieldSetupInvalidDateDefaultRange");
        echo "\";

\tfunction InitFormFieldPopup()
\t{
\t\tShowTab(";
        // line 28
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t\tInitImmutableFieldHandlers();

\t\t\$('#FormFieldName').focus();
\t\t\$('#FormFieldName').select();
\t}

\tfunction ShowTab(T)
\t{
\t\ti = 0;
\t\twhile (document.getElementById('tab' + i) != null) {
\t\t\tdocument.getElementById('div' + i).style.display = 'none';
\t\t\tdocument.getElementById('tab' + i).className = '';
\t\t\ti++;
\t\t}

\t\tif (isNaN(T)) {
\t\t\tT = 0;
\t\t}

\t\tdocument.getElementById('div' + T).style.display = '';
\t\tdocument.getElementById('tab' + T).className = 'active';
\t\tdocument.getElementById('currentTab').value = T;
\t}

\tfunction InitImmutableFieldHandlers()
\t{
\t\t\$('#FormFieldSetupWorkSpace *[readonly]').each(
\t\t\tfunction()
\t\t\t{
\t\t\t\t\$(this).click(
\t\t\t\t\tfunction()
\t\t\t\t\t{
\t\t\t\t\t\talert('";
        // line 61
        echo getLang("FormFieldSetupImmutableWarning");
        echo "');
\t\t\t\t\t\tthis.blur();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t);
\t\t\t}
\t\t);
\t}

//-->
</script>
<form action=\"\" id=\"FormFieldSetup\" onsubmit=\"FormFieldAdmin.Save(); return false;\">
\t<input type=\"hidden\" id=\"currentTab\" name=\"currentTab\" value=\"0\">
\t<input type=\"hidden\" id=\"FormFieldID\" name=\"fieldId\" value=\"";
        // line 74
        echo twig_safe_filter((isset($context['FormFieldID']) ? $context['FormFieldID'] : null));
        echo "\" />
\t<input type=\"hidden\" id=\"FormFieldFormID\" name=\"formId\" value=\"";
        // line 75
        echo twig_safe_filter((isset($context['FormFieldFormID']) ? $context['FormFieldFormID'] : null));
        echo "\" />
\t<input type=\"hidden\" id=\"FormFieldType\" name=\"fieldType\" value=\"";
        // line 76
        echo twig_safe_filter((isset($context['FormFieldType']) ? $context['FormFieldType'] : null));
        echo "\" />
\t<div class=\"ModalTitle\">
\t\t";
        // line 78
        echo twig_safe_filter((isset($context['FormFieldSetupPopupHeading']) ? $context['FormFieldSetupPopupHeading'] : null));
        echo "
\t</div>
\t<div class=\"ModalContent\">
\t\t<ul id=\"tabnav\">
\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0); return false;\">";
        // line 82
        echo getLang("FormFieldTabGeneral");
        echo "</a></li>
\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab1\" onclick=\"ShowTab(1); return false;\">";
        // line 83
        echo getLang("FormFieldTabAdvanced");
        echo "</a></li>
\t\t</ul>

\t\t<div id=\"FormFieldSetupWorkSpace\">
\t\t\t";
        // line 87
        echo twig_safe_filter((isset($context['FormFieldTabWorkSpace']) ? $context['FormFieldTabWorkSpace'] : null));
        echo "
\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\">
\t\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle; display: none;\" class=\"LoadingIndicator\" />
\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 93
        echo getLang("Cancel");
        echo "\" onclick=\"\$.modal.close();\" />
\t\t</div>
\t\t<input type=\"submit\" class=\"Submit\" value=\"";
        // line 95
        echo getLang("Save");
        echo "\" />
\t</div>
</form>";
    }

}
