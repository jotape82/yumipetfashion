<?php

/* quicksearch.tpl */
class __TwigTemplate_8acf102d55587594392b7b5055b28e6a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("QuickSearch");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery=";
        // line 14
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['OrdersLink']) ? $context['OrdersLink'] : null));
        echo "</a></li>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewCustomers&amp;searchId=0&amp;searchQuery=";
        // line 15
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['CustomersLink']) ? $context['CustomersLink'] : null));
        echo "</a></li>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewProducts&amp;searchId=0&amp;searchQuery=";
        // line 16
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['ProductsLink']) ? $context['ProductsLink'] : null));
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
    }

}
