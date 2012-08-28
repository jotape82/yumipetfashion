<?php

/* exporttemplates.manage.grid.tpl */
class __TwigTemplate_07b8c7829d38e4ce1d74b83e0bd49334 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%; margin-bottom: 10px;\">
\t<tr class=\"Heading3\">
\t\t<td align=\"center\" style=\"";
        // line 3
        echo twig_safe_filter((isset($context['HideCheckAll']) ? $context['HideCheckAll'] : null));
        echo "\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t<td>&nbsp;</td>
\t\t<td>
\t\t\t";
        // line 6
        echo getLang("ExportTemplateTitle");
        echo " &nbsp;
\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['SortLinksTitle']) ? $context['SortLinksTitle'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t<span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 10
        echo getLang("TemplateType");
        echo "', '";
        echo getLang("TemplateTypeHelp");
        echo "');\">";
        echo getLang("TemplateType");
        echo "</span>&nbsp;
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['SortLinksType']) ? $context['SortLinksType'] : null));
        echo "
\t\t</td>
\t\t<td ";
        // line 13
        echo twig_safe_filter((isset($context['HideVendorColumn']) ? $context['HideVendorColumn'] : null));
        echo ">
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['VendorLabel']) ? $context['VendorLabel'] : null));
        echo " &nbsp;
\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SortLinksVendor']) ? $context['SortLinksVendor'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width:100px;\">
\t\t\t";
        // line 18
        echo getLang("Action");
        echo " &nbsp;
\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['SortLinksAction']) ? $context['SortLinksAction'] : null));
        echo "
\t\t</td>
\t</tr>
\t";
        // line 22
        echo twig_safe_filter((isset($context['ExportTemplateGridData']) ? $context['ExportTemplateGridData'] : null));
        echo "
</table>";
    }

}
