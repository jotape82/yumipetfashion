<?php

/* brands.manage.grid.tpl */
class __TwigTemplate_35a5b28f04b0f13549e9a838a1ad7ee6 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"9\" class=\"PagingNav\" style=\"padding:6px 0px 6px 0px\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 11
        echo getLang("BrandName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksBrand']) ? $context['SortLinksBrand'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 15
        echo getLang("Products");
        echo " &nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksProducts']) ? $context['SortLinksProducts'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:100px;\">
\t\t\t\t\t";
        // line 19
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['BrandGrid']) ? $context['BrandGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" class=\"PagingNav\" style=\"padding:6px 0px 6px 0px\">
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}
