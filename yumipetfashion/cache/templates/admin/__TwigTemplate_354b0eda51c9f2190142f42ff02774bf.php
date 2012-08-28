<?php

/* currency.manage.row.tpl */
class __TwigTemplate_354b0eda51c9f2190142f42ff02774bf extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<tr class=\"";
        echo twig_safe_filter((isset($context['ClassName']) ? $context['ClassName'] : null));
        echo "\" onmouseover=\"this.className='";
        echo twig_safe_filter((isset($context['ClassName']) ? $context['ClassName'] : null));
        echo "Over'\" onmouseout=\"this.className='";
        echo twig_safe_filter((isset($context['ClassName']) ? $context['ClassName'] : null));
        echo "'\">
\t\t<td width=\"20\" align=\"center\">
\t\t\t<input type=\"checkbox\" name=\"currencies[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrencyId']) ? $context['CurrencyId'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['DeleteStatus']) ? $context['DeleteStatus'] : null));
        echo "/>
\t\t</td>
\t\t<td align=\"center\" style=\"width:18px;\">
\t\t\t<img src='images/tax.gif' />
\t\t</td>
\t\t<td>
\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['CurrencyName']) ? $context['CurrencyName'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['CurrencyCode']) ? $context['CurrencyCode'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t<div id=\"currencyexchangerate-";
        // line 15
        echo twig_safe_filter((isset($context['CurrencyId']) ? $context['CurrencyId'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['CurrencyRate']) ? $context['CurrencyRate'] : null));
        echo "</div>
\t\t</td>
\t\t<td align=\"center\">
\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Status']) ? $context['Status'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['CurrencyLinks']) ? $context['CurrencyLinks'] : null));
        echo "
\t\t</td>
\t</tr>
";
    }

}
