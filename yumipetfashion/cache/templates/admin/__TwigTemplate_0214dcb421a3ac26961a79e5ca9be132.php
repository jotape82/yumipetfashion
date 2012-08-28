<?php

/* exporttemplates.manage.tpl */
class __TwigTemplate_0214dcb421a3ac26961a79e5ca9be132 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ViewExportTemplates");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t<p>";
        // line 9
        echo getLang("ManageExportTemplatesIntro");
        echo "</p>
\t\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t\t<p>
\t\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 12
        echo getLang("AddExportTemplate");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createExportTemplate'\" /> &nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" style=\"min-width: 110px;\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t\t</p>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"display: ";
        // line 17
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t\t<form name=\"frmTemplates\" id=\"frmTemplates\" method=\"post\" action=\"index.php?ToDo=deleteExportTemplate\">
\t\t\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['TemplatesGrid']) ? $context['TemplatesGrid'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>

\t<script type=\"text/javascript\">
\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmTemplates\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 43
        echo getLang("ConfirmDeleteExportTemplates");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmTemplates\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 48
        echo getLang("ChooseExportTemplate");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\t\$(\"#frmTemplates :checkbox:enabled\").attr(\"checked\", Status);
\t\t}

\t\tfunction PerformAction(select) {
\t\t\tvar action = select.value;

\t\t\tif (action == \"\") {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar id = select.id.substr(6);
\t\t\tvar location = \"\";
\t\t\tswitch (action) {
\t\t\t\tcase \"edit\":
\t\t\t\t\tlocation = 'index.php?ToDo=editExportTemplate&tempId=' + id;
\t\t\t\t\tbreak;
\t\t\t\tcase 'delete':
\t\t\t\t\tif(confirm(\"";
        // line 71
        echo getLang("ConfirmDeleteExportTemplate");
        echo "\")) {
\t\t\t\t\t\tlocation = 'index.php?ToDo=deleteExportTemplate&tempId=' + id;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\tlocation = 'index.php?ToDo=startExport&t=' + action + \"&tempId=\" + id;
\t\t\t\t\tbreak;
\t\t\t}

\t\t\tif (location) {
\t\t\t\tdocument.location = location;
\t\t\t}
\t\t}
\t</script>";
    }

}
