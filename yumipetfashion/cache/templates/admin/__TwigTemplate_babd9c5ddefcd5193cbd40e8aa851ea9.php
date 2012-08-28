<?php

/* discounts.manage.grid.tpl */
class __TwigTemplate_babd9c5ddefcd5193cbd40e8aa851ea9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"10\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td style=\"width:30px;\"></td>
\t\t\t\t<td>
\t\t\t\t\t<span>";
        // line 12
        echo getLang("DiscountName");
        echo "</span>
\t\t\t\t</td>
\t\t\t\t<td nowrap style=\"width:100px\">
\t\t\t\t\t";
        // line 15
        echo getLang("DiscountMaxUses");
        echo " &nbsp;
\t\t\t\t</td>
\t\t\t\t<td nowrap style=\"width:100px\">
\t\t\t\t\t<span onmouseover=\"ShowQuickHelp(this, '";
        // line 18
        echo getLang("DiscountCurrentUses");
        echo "', '";
        echo getLang("DiscountCurrentUsesHelp");
        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"HelpText\">";
        echo getLang("DiscountCurrentUses");
        echo "</span>
\t\t\t\t</td>
\t\t\t\t<td nowrap style=\"width:100px\">
\t\t\t\t\t<div style=\"display:none\" id=\"invDiv\" name=\"invDiv\"></div>
\t\t\t\t\t";
        // line 22
        echo getLang("DiscountExpiryDate");
        echo "\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px\">
\t\t\t\t\t";
        // line 25
        echo getLang("Enabled");
        echo " &nbsp;
\t\t\t\t</td>
\t\t\t\t<td style=\"width:130px\">
\t\t\t\t\t<span onmouseover=\"ShowQuickHelp(this, '";
        // line 28
        echo getLang("Halts");
        echo "', '";
        echo getLang("HaltsHelp");
        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"HelpText\">";
        echo getLang("Halts");
        echo "</span>
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px\">
\t\t\t\t\t";
        // line 31
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<ul class=\"SortableList\" id=\"DiscountList\" style=\" padding-top: 1px; padding-bottom: 1px; z-index:0\">
\t\t\t\t\t";
        // line 36
        echo twig_safe_filter((isset($context['DiscountGrid']) ? $context['DiscountGrid'] : null));
        echo "
\t\t</ul>";
    }

}
