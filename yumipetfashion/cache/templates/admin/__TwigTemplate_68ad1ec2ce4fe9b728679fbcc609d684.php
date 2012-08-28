<?php

/* brands.manage.row.tpl */
class __TwigTemplate_68ad1ec2ce4fe9b728679fbcc609d684 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width:25px\">
\t\t<input type=\"checkbox\" name=\"brands[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['BrandId']) ? $context['BrandId'] : null));
        echo "\">
\t</td>
\t<td align=\"center\" style=\"width:18px;\">
\t\t<img src='images/brand.gif' width=\"15\" height=\"15\">
\t</td>
\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SortedFieldBrandClass']) ? $context['SortedFieldBrandClass'] : null));
        echo "\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['BrandName']) ? $context['BrandName'] : null));
        echo "
\t</td>
\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldProductsClass']) ? $context['SortedFieldProductsClass'] : null));
        echo "\">
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Products']) ? $context['Products'] : null));
        echo "
\t</td>
\t<td>
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['EditBrandLink']) ? $context['EditBrandLink'] : null));
        echo "
\t</td>
</tr>";
    }

}
