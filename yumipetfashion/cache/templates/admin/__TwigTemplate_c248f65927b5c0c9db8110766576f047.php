<?php

/* module.buyxgetfreeshipping.tpl */
class __TwigTemplate_c248f65927b5c0c9db8110766576f047 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("BUYXGETFREESHIPPINGIfthereare");
        echo "
";
        // line 2
        echo twig_safe_filter((isset($context['Qty0']) ? $context['Qty0'] : null));
        echo "
";
        // line 3
        echo getLang("BUYXGETFREESHIPPINGof");
        echo "
<a id=\"ps\" href=\"#\" onclick=\"DiscountOpenProductSelect('discount', 'ps', 'prodids', 1, 'ps');\">";
        // line 4
        echo twig_safe_filter((isset($context['var_ps']) ? $context['var_ps'] : null));
        echo "</a> 

";
        // line 6
        echo getLang("BUYXGETFREESHIPPINGincartenable");
        echo "
<input type=\"hidden\" name=\"var_prodids\" id=\"prodids\" value=\"";
        // line 7
        echo twig_safe_filter((isset($context['var_prodids']) ? $context['var_prodids'] : null));
        echo "\" />
<input type=\"hidden\" name=\"var_ps\" id=\"ps_name\" value=\"";
        // line 8
        echo twig_safe_filter((isset($context['var_ps']) ? $context['var_ps'] : null));
        echo "\" />
<br />
<script type=\"text/javascript\">

\$('#amount').val(";
        // line 12
        echo twig_safe_filter((isset($context['var_amount']) ? $context['var_amount'] : null));
        echo ");

function DiscountOpenProductSelect(type, select, idlist, single, closeFocus) {
\tvar l = (screen.availWidth/2) - (400/2) + 50;
\tvar t = (screen.availHeight/2) - (480/2) + 50;
\tvar width = 400;

\twindowLocation = 'index.php?ToDo=popupProductSelect';
\twindowLocation += '&selectCallback=DiscountProductSelectCallback';
\twindowLocation += '&removeCallback=ProductSelectRemoveCallback';
\twindowLocation += '&getSelectedCallback=ProductSelectGetSelected';
\twindowLocation += '&ProductList='+idlist;
\twindowLocation += '&ProductSelect='+select;
\twindowLocation += '&single='+single;
\twindowLocation += '&FocusOnClose='+closeFocus;
\tvar w = window.open(windowLocation, 'ProductSelect'+select+'type'+type, \"width=\"+width+\",height=480,left=\"+l+\",top=\"+t);
\tw.focus();
\treturn false;
}

function DiscountProductSelectCallback(selectBox, listField, product, single)
{
\tif(single == 1) {
\t\t\$('#'+selectBox).html(product.name);
\t\t\$('#'+selectBox+'_name').val(product.name);
\t\t\$('#'+listField).val(product.id);
\t}
}


</script>";
    }

}
