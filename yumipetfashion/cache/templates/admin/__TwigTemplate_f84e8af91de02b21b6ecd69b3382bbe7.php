<?php

/* Snippets/FormFields.html */
class __TwigTemplate_f84e8af91de02b21b6ecd69b3382bbe7 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<li id=\"FormFieldRow";
        echo twig_safe_filter((isset($context['FormFieldId']) ? $context['FormFieldId'] : null));
        echo "\" class=\"SortableRow\" style=\"width:100%;\">
\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t<td style=\"width:18px;\" align=\"center\">
\t\t\t\t\t<input type=\"checkbox\" name=\"formfields[]\" class=\"FormFieldsIdx\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['FormFieldId']) ? $context['FormFieldId'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['DeleteStatus']) ? $context['DeleteStatus'] : null));
        echo "/>
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 7
        echo twig_safe_filter((isset($context['FormFieldSortRow']) ? $context['FormFieldSortRow'] : null));
        echo "\">
\t\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['FormFieldName']) ? $context['FormFieldName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:17%;\" class=\"HideOnDrag\">
\t\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['FormFieldData']) ? $context['FormFieldData'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:17%;\" class=\"HideOnDrag\">
\t\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['FormFieldLastModified']) ? $context['FormFieldLastModified'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:17%;\" class=\"HideOnDrag\">
\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['FormFieldType']) ? $context['FormFieldType'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:17%;\" class=\"HideOnDrag\">
\t\t\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['FormFieldAction']) ? $context['FormFieldAction'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</li>";
    }

}
