<?php

/* giftwrapping.manage.grid.tpl */
class __TwigTemplate_a20e26909dc2eddf6a836acbea48b99a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\">
\t<tr style=\"";
        // line 2
        echo twig_safe_filter((isset($context['HidePaging']) ? $context['HidePaging'] : null));
        echo "\">
\t\t<td colspan=\"6\" style=\"text-align: right; padding: 0 0 6px 0;\" class=\"PagingNav\">
\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr class=\"Heading3\">
\t\t<td style=\"text-align: center; width: 10px;\"><input type=\"checkbox\" onclick=\"\$(this.form).find('input:checkbox').not(':disabled').attr('checked', this.checked);\" /></td>
\t\t<td style=\"width: 10px;\">&nbsp;</td>
\t\t<td>
\t\t\t";
        // line 11
        echo getLang("WrapName");
        echo "\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksWrapName']) ? $context['SortLinksWrapName'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width: 150px;\">
\t\t\t";
        // line 15
        echo getLang("Price");
        echo "\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksWrapPrice']) ? $context['SortLinksWrapPrice'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width: 80px; text-align: center;\">
\t\t\t";
        // line 19
        echo getLang("Visible");
        echo "\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['SortLinksWrapVisible']) ? $context['SortLinksWrapVisible'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width: 160px;\">";
        // line 22
        echo getLang("Action");
        echo "</td>
\t</tr>
\t";
        // line 24
        echo twig_safe_filter((isset($context['GiftWrapGrid']) ? $context['GiftWrapGrid'] : null));
        echo "
\t<tr>
\t\t<td colspan=\"6\" style=\"text-align: right; padding: 6px 0;\" class=\"PagingNav\">
\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t</td>
\t</tr>
</table>";
    }

}
