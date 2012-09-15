<?php

/* module.email.test.tpl */
class __TwigTemplate_bf3f7018c906372a226ef5268226c5f5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form action=\"index.php?ToDo=testShippingProviderQuote\" method=\"post\" onsubmit=\"return ValidateForm(CheckQuoteForm)\">
<input type=\"hidden\" name=\"module\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['ModuleFile']) ? $context['ModuleFile'] : null));
        echo "\">
<fieldset style=\"margin:10px\">
\t<legend>";
        // line 4
        echo getLang("NEmailNotificationTest");
        echo "</legend>
\t<div style=\"padding:10px\">
\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td valign=\"top\">
\t\t\t\t\t<img src=\"images/";
        // line 9
        echo twig_safe_filter((isset($context['Icon']) ? $context['Icon'] : null));
        echo ".gif\" align=\"left\" style=\"padding-right:5px\" />
\t\t\t\t</td>
\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['EmailResultMessage']) ? $context['EmailResultMessage'] : null));
        echo "
\t\t\t\t\t<br /><br /><input type=\"button\" value=\"";
        // line 13
        echo getLang("CloseWindow");
        echo "\" onclick=\"window.close()\" class=\"text\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</legend>

";
    }

}
