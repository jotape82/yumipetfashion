<?php

/* banners.manage.grid.tpl */
class __TwigTemplate_91dec022432ba4cae93483d6e076c566 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 6
        echo getLang("BannerName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 10
        echo getLang("BannerLocation");
        echo " &nbsp;
\t\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['SortLinksLocation']) ? $context['SortLinksLocation'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 14
        echo getLang("DateCreated");
        echo " &nbsp;
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:70px;\">
\t\t\t\t\t";
        // line 18
        echo getLang("Visible");
        echo " &nbsp;
\t\t\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px;\">
\t\t\t\t\t";
        // line 22
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['BannerGrid']) ? $context['BannerGrid'] : null));
        echo "
\t\t</table>";
    }

}
