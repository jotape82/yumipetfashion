<?php

/* module.xpercentoffforrepeatcustomers.tpl */
class __TwigTemplate_b6f93b597f4b3a500b810eb0c81b47a4 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("XPERCENTOFFFORREPEATCUSTOMERSIf");
        echo "
";
        // line 2
        echo twig_safe_filter((isset($context['Qty0']) ? $context['Qty0'] : null));
        echo "
";
        // line 3
        echo getLang("XPERCENTOFFFORREPEATCUSTOMERSThen");
        echo "
<input name=\"var_amount\" class=\"Field20\" id=\"amount\" size=\"3\" maxlength=\"6\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['var_amount']) ? $context['var_amount'] : null));
        echo "\"></input>%
";
        // line 5
        echo getLang("XPERCENTOFFFORREPEATCUSTOMERSOff");
        echo "

<script type=\"text/javascript\">

\$('#orders').val(";
        // line 9
        echo twig_safe_filter((isset($context['var_orders']) ? $context['var_orders'] : null));
        echo ");

</script>";
    }

}
