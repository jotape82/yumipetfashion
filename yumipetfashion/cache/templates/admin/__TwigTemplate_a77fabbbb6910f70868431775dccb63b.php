<?php

/* module.msn.test.tpl */
class __TwigTemplate_a77fabbbb6910f70868431775dccb63b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<fieldset style=\"margin:10px\">
\t<legend>";
        // line 2
        echo getLang("MSNNotificationTest");
        echo "</legend>
\t<div style=\"padding:10px\">
\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td valign=\"top\">
\t\t\t\t\t<img src=\"images/";
        // line 7
        echo twig_safe_filter((isset($context['Icon']) ? $context['Icon'] : null));
        echo ".gif\" align=\"left\" style=\"padding-right:5px\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['MSNResultMessage']) ? $context['MSNResultMessage'] : null));
        echo "
\t\t\t\t\t<br /><br /><input type=\"button\" value=\"";
        // line 11
        echo getLang("CloseWindow");
        echo "\" onclick=\"window.close()\" class=\"text\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t</legend>
</fieldset>";
    }

}
