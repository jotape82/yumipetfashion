<?php

/* module.xoffforrepeatcustomers.tpl */
class __TwigTemplate_8997d6b8c07e143f7a5a8ce84bd77ebc extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("XOFFFORREPEATCUSTOMERSIf");
        echo "
";
        // line 2
        echo twig_safe_filter((isset($context['Qty0']) ? $context['Qty0'] : null));
        echo "
";
        // line 3
        echo getLang("XOFFFORREPEATCUSTOMERSThen");
        echo "
";
        // line 4
        echo twig_safe_filter((isset($context['CurrencyLeft']) ? $context['CurrencyLeft'] : null));
        echo "<input type=\"text\" name=\"varn_amount\" class=\"Field20\" id=\"amount\" size=\"3\" value=\"";
        echo twig_safe_filter((isset($context['varn_amount']) ? $context['varn_amount'] : null));
        echo "\" />";
        echo twig_safe_filter((isset($context['CurrencyRight']) ? $context['CurrencyRight'] : null));
        echo "
";
        // line 5
        echo getLang("XOFFFORREPEATCUSTOMERSOff");
        echo "

<script type=\"text/javascript\">

\$('#orders').val(";
        // line 9
        echo twig_safe_filter((isset($context['var_orders']) ? $context['var_orders'] : null));
        echo ");

</script>";
    }

}
