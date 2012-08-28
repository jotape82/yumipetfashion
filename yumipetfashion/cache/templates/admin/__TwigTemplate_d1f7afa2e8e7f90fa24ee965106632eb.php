<?php

/* banner.manage.row.tpl */
class __TwigTemplate_d1f7afa2e8e7f90fa24ee965106632eb extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width:25px\">
\t\t<input type=\"checkbox\" name=\"banner[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['BannerId']) ? $context['BannerId'] : null));
        echo "\">
\t</td>
\t<td align=\"center\" style=\"width:18px;\">
\t\t<img src='images/banner.gif'>
\t</td>
\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t</td>
\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldLocationClass']) ? $context['SortedFieldLocationClass'] : null));
        echo "\">
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Location']) ? $context['Location'] : null));
        echo "
\t</td>
\t<td class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t</td>
\t<td align=\"center\" class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldStatusClass']) ? $context['SortedFieldStatusClass'] : null));
        echo "\">
\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "
\t</td>
\t<td>
\t\t<a title='";
        // line 21
        echo getLang("EditThisBanner");
        echo "' class='Action' href='index.php?ToDo=editBanner&amp;bannerId=";
        echo twig_safe_filter((isset($context['BannerId']) ? $context['BannerId'] : null));
        echo "'>";
        echo getLang("Edit");
        echo "</a>
\t</td>
</tr>";
    }

}
