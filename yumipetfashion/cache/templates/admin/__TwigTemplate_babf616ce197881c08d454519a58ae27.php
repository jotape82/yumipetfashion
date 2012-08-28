<?php

/* module.xamountoffwhenxormore.tpl */
class __TwigTemplate_babf616ce197881c08d454519a58ae27 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("XAMOUNTOFFWHENXORMOREFirst");
        echo "
";
        // line 2
        echo twig_safe_filter((isset($context['CurrencyLeft']) ? $context['CurrencyLeft'] : null));
        echo "<input name=\"varn_amount\" class=\"discountFirst Field20\" id=\"amount\" size=\"3\" value=\"";
        echo twig_safe_filter((isset($context['varn_amount']) ? $context['varn_amount'] : null));
        echo "\" />";
        echo twig_safe_filter((isset($context['CurrencyRight']) ? $context['CurrencyRight'] : null));
        echo "
";
        // line 3
        echo getLang("XAMOUNTOFFWHENXORMORESecond");
        echo "
";
        // line 4
        echo twig_safe_filter((isset($context['CurrencyLeft']) ? $context['CurrencyLeft'] : null));
        echo "<input name=\"varn_amount_off\" id=\"amount_off\" class=\"Field20\" size=\"3\" value=\"";
        echo twig_safe_filter((isset($context['varn_amount_off']) ? $context['varn_amount_off'] : null));
        echo "\" />";
        echo twig_safe_filter((isset($context['CurrencyRight']) ? $context['CurrencyRight'] : null));
        echo "
";
        // line 5
        echo getLang("XAMOUNTOFFWHENXORMOREDiscount");
    }

}
