<?php

/* password.frontend.html */
class __TwigTemplate_c874c37180d47e887245277337671cec extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"password\" autocomplete=\"off\" ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " value=\"\" />
<div class=\"LittleNotePassword\" style=\"display: ";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldHidePasswordMsg']) ? $context['FormFieldHidePasswordMsg'] : null));
        echo "\">(";
        echo getLang("CustomFieldsPasswordMsg");
        echo ")</div>
";
    }

}
