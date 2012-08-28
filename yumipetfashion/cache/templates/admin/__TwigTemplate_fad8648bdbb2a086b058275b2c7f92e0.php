<?php

/* discounts.manage.row.tpl */
class __TwigTemplate_fad8648bdbb2a086b058275b2c7f92e0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<li id=\"";
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "\" class=\"SortableRow\"  style=\"width:100%;\">
\t\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width : 100%;\">
\t\t<tr class=\"GridRow\">
\t\t<td align=\"left\" width=\"10px\">
\t\t\t<input class=\"DiscountsIdx\" type=\"checkbox\" name=\"discount[]\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['DiscountId']) ? $context['DiscountId'] : null));
        echo "\" />
\t\t\t<input type=\"hidden\" class=\"DiscountSortOrder\" value=\"";
        // line 6
        echo twig_safe_filter((isset($context['SortOrder']) ? $context['SortOrder'] : null));
        echo "\" />
\t\t</td>
\t\t<td align=\"left\" width=\"30px\">
\t\t\t<img src='images/discountrule.gif'>
\t\t</td>
\t\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo " DragMouseDown sort-handle\">
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldMaxUsesClass']) ? $context['SortedFieldMaxUsesClass'] : null));
        echo "\" width=\"100px\">
\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['MaxUses']) ? $context['MaxUses'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldCurrentUsesClass']) ? $context['SortedFieldCurrentUsesClass'] : null));
        echo "\" width=\"100px\">
\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['CurrentUses']) ? $context['CurrentUses'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" class=\"";
        // line 20
        echo twig_safe_filter((isset($context['SortedFieldExpiryDateClass']) ? $context['SortedFieldExpiryDateClass'] : null));
        echo "\" width=\"98px\">
\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['ExpiryDate']) ? $context['ExpiryDate'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" class=\"";
        // line 23
        echo twig_safe_filter((isset($context['SortedFieldEnabledClass']) ? $context['SortedFieldEnabledClass'] : null));
        echo "\" width=\"80px\">
\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['Enabled']) ? $context['Enabled'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\" class=\"";
        // line 26
        echo twig_safe_filter((isset($context['SortedFieldHaltClass']) ? $context['SortedFieldHaltClass'] : null));
        echo "\" width=\"130px\">
\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['Halt']) ? $context['Halt'] : null));
        echo "
\t\t</td>
\t\t<td nowrap=\"nowrap\" width=\"80px\">
\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['EditDiscountLink']) ? $context['EditDiscountLink'] : null));
        echo "
\t\t\t";
        // line 31
        echo twig_safe_filter((isset($context['DeleteDiscountLink']) ? $context['DeleteDiscountLink'] : null));
        echo "
\t\t</td>
\t\t</tr>
\t\t</table>
\t</li>";
    }

}
