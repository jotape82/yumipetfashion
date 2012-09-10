<?php

/* exporttemplates.form.grid.row.tpl */
class __TwigTemplate_bf8376bffae711faf575732d62c9d50a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li id=\"ele-";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\" class=\"SortableRow";
        echo twig_safe_filter((isset($context['TypeName']) ? $context['TypeName'] : null));
        echo " SortableRow\" style=\"margin-left: 0px;\">
\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t<tr class=\"GridRow\" id=\"row_";
        // line 3
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t<td align=\"center\" style=\"width: ";
        // line 4
        echo twig_safe_filter((isset($context['CheckColWidth']) ? $context['CheckColWidth'] : null));
        echo "px; ";
        echo twig_safe_filter((isset($context['CheckAlign']) ? $context['CheckAlign'] : null));
        echo "\">
\t\t\t\t";
        // line 5
        echo twig_safe_filter((isset($context['NodeJoin']) ? $context['NodeJoin'] : null));
        echo "
\t\t\t\t<input type=\"checkbox\" name=\"";
        // line 6
        echo twig_safe_filter((isset($context['FieldType']) ? $context['FieldType'] : null));
        echo "Field[";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "]\" id=\"";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['FieldChecked']) ? $context['FieldChecked'] : null));
        echo " value=\"1\" />
\t\t\t</td>
\t\t\t<td class=\"DragMouseDown sort-handle ";
        // line 8
        echo twig_safe_filter((isset($context['FieldLabelClass']) ? $context['FieldLabelClass'] : null));
        echo "\" style=\"width: 155px; ";
        echo twig_safe_filter((isset($context['CheckAlign']) ? $context['CheckAlign'] : null));
        echo "\" id=\"label_";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\">
\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['FieldLabel']) ? $context['FieldLabel'] : null));
        echo ":
\t\t\t</td>
\t\t\t<td id=\"headercol_";
        // line 11
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\">
\t\t\t\t<input type=\"text\" class=\"Field200 ";
        // line 12
        echo twig_safe_filter((isset($context['FieldClass']) ? $context['FieldClass'] : null));
        echo "\" id=\"header_";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "\" name=\"";
        echo twig_safe_filter((isset($context['FieldType']) ? $context['FieldType'] : null));
        echo "Header[";
        echo twig_safe_filter((isset($context['FieldID']) ? $context['FieldID'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['FieldHeader']) ? $context['FieldHeader'] : null));
        echo "\" maxlength=\"63\" ";
        echo twig_safe_filter((isset($context['FieldReadOnly']) ? $context['FieldReadOnly'] : null));
        echo "/>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['FieldHelp']) ? $context['FieldHelp'] : null));
        echo "
\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['SubFields']) ? $context['SubFields'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
</li>";
    }

}
