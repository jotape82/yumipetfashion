<?php

/* exporttemplates.manage.grid.row.tpl */
class __TwigTemplate_c2b5ebdd48f710ee53e76250d0753095 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr id=\"tr";
        echo twig_safe_filter((isset($context['ExportTemplateId']) ? $context['ExportTemplateId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width: 25px; ";
        // line 2
        echo twig_safe_filter((isset($context['HideCheckAll']) ? $context['HideCheckAll'] : null));
        echo "\">
\t\t";
        // line 3
        echo twig_safe_filter((isset($context['CheckTemplate']) ? $context['CheckTemplate'] : null));
        echo "
\t</td>
\t<td align=\"center\" style=\"width:18px\">
\t\t<img src=\"images/application_form.png\" width=\"12\" height=\"15\" />
\t</td>
\t<td colspan=\"";
        // line 8
        echo twig_safe_filter((isset($context['ProductNameSpan']) ? $context['ProductNameSpan'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['ExportTemplateName']) ? $context['ExportTemplateName'] : null));
        echo "
\t</td>
\t<td>
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['TemplateType']) ? $context['TemplateType'] : null));
        echo "
\t</td>
\t<td ";
        // line 14
        echo twig_safe_filter((isset($context['HideVendorColumn']) ? $context['HideVendorColumn'] : null));
        echo ">
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['VendorName']) ? $context['VendorName'] : null));
        echo "
\t</td>
\t<td>
\t\t<select id=\"select";
        // line 18
        echo twig_safe_filter((isset($context['ExportTemplateId']) ? $context['ExportTemplateId'] : null));
        echo "\" style=\"width: 160px;\" onchange=\"PerformAction(this);\">
\t\t\t<option value=\"\">";
        // line 19
        echo getLang("ChooseAnAction");
        echo "</option>
\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['TemplateActions']) ? $context['TemplateActions'] : null));
        echo "
\t\t</select>
\t</td>
</tr>";
    }

}
