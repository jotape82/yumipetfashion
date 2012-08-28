<?php

/* stats.customers.bydategrid.tpl */
class __TwigTemplate_8550ba024cafcc481520cde7a457587a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<a name=\"customersByDateAnchor\"></a>
<div style=\"text-align:right\">
\t<div style=\"padding-bottom:10px\">
\t\t";
        // line 4
        echo getLang("CustomersPerPage");
        echo ":
\t\t<select onchange=\"ChangeCustomersByDatePerPage(this.options[this.selectedIndex].value)\">
\t\t\t<option ";
        // line 6
        echo twig_safe_filter((isset($context['IsShowPerPage5']) ? $context['IsShowPerPage5'] : null));
        echo " value=\"5\">5</option>
\t\t\t<option ";
        // line 7
        echo twig_safe_filter((isset($context['IsShowPerPage10']) ? $context['IsShowPerPage10'] : null));
        echo " value=\"10\">10</option>
\t\t\t<option ";
        // line 8
        echo twig_safe_filter((isset($context['IsShowPerPage20']) ? $context['IsShowPerPage20'] : null));
        echo " value=\"20\">20</option>
\t\t\t<option ";
        // line 9
        echo twig_safe_filter((isset($context['IsShowPerPage30']) ? $context['IsShowPerPage30'] : null));
        echo " value=\"30\">30</option>
\t\t\t<option ";
        // line 10
        echo twig_safe_filter((isset($context['IsShowPerPage50']) ? $context['IsShowPerPage50'] : null));
        echo " value=\"50\">50</option>
\t\t\t<option ";
        // line 11
        echo twig_safe_filter((isset($context['IsShowPerPage100']) ? $context['IsShowPerPage100'] : null));
        echo " value=\"100\">100</option>
\t\t\t<option ";
        // line 12
        echo twig_safe_filter((isset($context['IsShowPerPage200']) ? $context['IsShowPerPage200'] : null));
        echo " value=\"200\">200</option>
\t\t</select>
\t</div>
\t";
        // line 15
        echo twig_safe_filter((isset($context['Paging']) ? $context['Paging'] : null));
        echo "
</div>
<br />
<table width=\"100%\" border=0 cellspacing=1 cellpadding=5 class=\"text\">
\t<tr class=\"Heading3\">
\t\t\t<td nowrap align=\"left\">
\t\t\t";
        // line 21
        echo getLang("CustomerID");
        echo " &nbsp;
\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['SortLinksCustId']) ? $context['SortLinksCustId'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\">
\t\t\t";
        // line 25
        echo getLang("StatsCustomerName");
        echo " &nbsp;
\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['SortLinksCust']) ? $context['SortLinksCust'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\">
\t\t\t";
        // line 29
        echo getLang("StatsEmail");
        echo " &nbsp;
\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['SortLinksEmail']) ? $context['SortLinksEmail'] : null));
        echo "
\t\t</td>
\t\t<td align=\"left\">
\t\t\t";
        // line 33
        echo getLang("StatsDateJoined");
        echo " &nbsp;
\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<span onmouseover=\"ShowQuickHelp(this, '";
        // line 37
        echo getLang("StatsOrders");
        echo "', '";
        echo getLang("RevenuePerCustomerOrdersHelp");
        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"HelpText\">";
        echo getLang("StatsOrders");
        echo "</span> &nbsp;
\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['SortLinksNumOrders']) ? $context['SortLinksNumOrders'] : null));
        echo "
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<span onmouseover=\"ShowQuickHelp(this, '";
        // line 41
        echo getLang("StatsAmountSpent");
        echo "', '";
        echo getLang("RevenuePerCustomerAmountSpentHelp");
        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"HelpText\">";
        echo getLang("StatsAmountSpent");
        echo "</span> &nbsp;
\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['SortLinksAmountSpent']) ? $context['SortLinksAmountSpent'] : null));
        echo "
\t\t</td>
\t\t<td nowrap align=\"left\">
\t\t\t";
        // line 45
        echo getLang("Action");
        echo "\t\t</td>
\t</tr>
\t";
        // line 48
        echo twig_safe_filter((isset($context['CustomerGrid']) ? $context['CustomerGrid'] : null));
        echo "
</table>
";
        // line 50
        echo twig_safe_filter((isset($context['JumpToCustomersByDateGrid']) ? $context['JumpToCustomersByDateGrid'] : null));
        echo "
";
    }

}
