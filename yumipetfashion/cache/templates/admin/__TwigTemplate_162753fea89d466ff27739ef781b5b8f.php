<?php

/* Snippets/CustomerRowStoreCredit.html */
class __TwigTemplate_162753fea89d466ff27739ef781b5b8f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" name=\"storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" id=\"storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" value=\"";
        echo twig_safe_filter((isset($context['StoreCreditAmount']) ? $context['StoreCreditAmount'] : null));
        echo "\" onkeypress=\"if(event.keyCode == 13) { updateStoreCredit(";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "); }\" class=\"Field50\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
<input type=\"button\" value=\"";
        // line 2
        echo getLang("Save");
        echo "\" class=\"Field50\" onclick=\"updateStoreCredit(";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo ");\" id=\"save_storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" />";
    }

}
