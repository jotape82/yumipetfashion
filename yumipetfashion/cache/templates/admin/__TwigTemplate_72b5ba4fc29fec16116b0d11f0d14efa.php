<?php

/* giftwrapping.manage.row.tpl */
class __TwigTemplate_72b5ba4fc29fec16116b0d11f0d14efa extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"\$(this).addClass('GrodRowOver');\" onmouseout=\"\$(this).removeClass('GridRowOver');\">
\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"check\" name=\"wrap[]\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['WrapId']) ? $context['WrapId'] : null));
        echo "\" /></td>
\t<td><img src=\"images/giftwrap.gif\" alt=\"\" /></td>
\t<td>";
        // line 4
        echo twig_safe_filter((isset($context['WrapName']) ? $context['WrapName'] : null));
        echo "</td>
\t<td>";
        // line 5
        echo twig_safe_filter((isset($context['WrapPrice']) ? $context['WrapPrice'] : null));
        echo "</td>
\t<td style=\"text-align: center;\"><img src=\"images/";
        // line 6
        echo twig_safe_filter((isset($context['WrapVisibleImage']) ? $context['WrapVisibleImage'] : null));
        echo "\" alt=\"\" /></td>
\t<td>
\t\t<a href=\"index.php?ToDo=editGiftWrap&amp;wrapId=";
        // line 8
        echo twig_safe_filter((isset($context['WrapId']) ? $context['WrapId'] : null));
        echo "\">";
        echo getLang("Edit");
        echo "</a>
\t\t<a href=\"index.php?ToDo=deleteGiftWrap&amp;wrap[]=";
        // line 9
        echo twig_safe_filter((isset($context['WrapId']) ? $context['WrapId'] : null));
        echo "\" onclick=\"return ConfirmDeleteWrap();\">";
        echo getLang("Delete");
        echo "</a>
\t</td>
</tr>";
    }

}
