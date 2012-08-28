<?php

/* customers.groups.manage.grid.tpl */
class __TwigTemplate_2b7595241a08ba668713239c0e386a71 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t\t\t<tr class=\"Heading3\" style=\"display: ";
        // line 2
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 6
        echo getLang("CustomerGroupName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['SortLinksGroupName']) ? $context['SortLinksGroupName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 10
        echo getLang("Discount");
        echo " &nbsp;
\t\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['SortLinksDiscount']) ? $context['SortLinksDiscount'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 14
        echo getLang("DiscountRules");
        echo "', '";
        echo getLang("DiscountRulesHelp");
        echo "');\">";
        echo getLang("DiscountRules");
        echo "</span> &nbsp;
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SortLinksDiscountRules']) ? $context['SortLinksDiscountRules'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 18
        echo getLang("CustomersInGroup");
        echo " &nbsp;
\t\t\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['SortLinksCustomersInGroup']) ? $context['SortLinksCustomersInGroup'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:120px;\">
\t\t\t\t\t";
        // line 22
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['CustomerGroupsGrid']) ? $context['CustomerGroupsGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
";
    }

}
