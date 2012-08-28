<?php

/* customers.groups.manage.tpl */
class __TwigTemplate_fbf7b295a8e7bed3c3bbf8046474716f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<form action=\"index.php?ToDo=deleteCustomerGroups\" id=\"frmCustomerGroups\" name=\"frmCustomerGroups\" method=\"post\" onSubmit=\"return ValidateForm(ConfirmDeleteSelected)\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("CustomerGroups");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("CustomerGroupsIntro");
        echo "</p>
\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td>
\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">
\t\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 19
        echo getLang("CreateACustomerGroup");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createCustomerGroup'\" style=\"width:160px\" /> &nbsp;
\t\t\t\t\t\t<input type=\"submit\" name=\"IndexDeleteButton\" value=\"";
        // line 20
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\" class=\"EmptyRow\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['CustomerGroupsDataGrid']) ? $context['CustomerGroupsDataGrid'] : null));
        echo "
\t\t\t</table>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>

\t</table>
\t</form>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmCustomerGroups\").getElementsByTagName('input');

\t\t\tfor (var i=0; i < fp.length; i++) {
\t\t\t\tif (!fp[i].getAttribute('disabled'))
\t\t\t\t\tfp[i].checked = Status;
\t\t\t}
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmCustomerGroups\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0) {
\t\t\t\tif(confirm(\"";
        // line 61
        echo getLang("ConfirmDeleteCustomerGroups");
        echo "\")) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 70
        echo getLang("ChooseCustomerGroup");
        echo "\");
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t</script>

";
    }

}
