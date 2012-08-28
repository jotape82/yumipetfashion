<?php

/* module.buyxgety.tpl */
class __TwigTemplate_f9f7cbb750afed1406cf25fcebbe0b5d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("BUYXGETYamount");
        echo "
";
        // line 2
        echo twig_safe_filter((isset($context['Qty0']) ? $context['Qty0'] : null));
        echo "
";
        // line 3
        echo getLang("BUYXGETYOf");
        echo "
<a href=\"#\" id=\"ps\" onclick=\"DiscountOpenProductSelect('discount', 'ps', 'prodids', 1, 'ps');\">";
        // line 4
        echo twig_safe_filter((isset($context['var_ps']) ? $context['var_ps'] : null));
        echo "</a>
";
        // line 5
        echo getLang("BUYXGETYThen");
        echo "
";
        // line 6
        echo twig_safe_filter((isset($context['Qty1']) ? $context['Qty1'] : null));
        echo "
";
        // line 7
        echo getLang("BUYXGETYOf");
        echo "
<a href=\"#\" id=\"ps_free\" onclick=\"DiscountOpenProductSelect('discount', 'ps_free', 'prodidsfree', 1, 'ps_free');\" >";
        // line 8
        echo twig_safe_filter((isset($context['var_ps_free']) ? $context['var_ps_free'] : null));
        echo "</a>
";
        // line 9
        echo getLang("BUYXGETYFree");
        echo "


<input type=\"hidden\" name=\"var_prodids\" id=\"prodids\" value=\"";
        // line 12
        echo twig_safe_filter((isset($context['var_prodids']) ? $context['var_prodids'] : null));
        echo "\" />
<input type=\"hidden\" name=\"var_prodidsfree\" id=\"prodidsfree\" value=\"";
        // line 13
        echo twig_safe_filter((isset($context['var_prodidsfree']) ? $context['var_prodidsfree'] : null));
        echo "\" />
<input type=\"hidden\" name=\"var_ps\" id=\"ps_name\" value=\"";
        // line 14
        echo twig_safe_filter((isset($context['var_ps']) ? $context['var_ps'] : null));
        echo "\" />
<input type=\"hidden\" name=\"var_ps_free\" id=\"ps_free_name\" value=\"";
        // line 15
        echo twig_safe_filter((isset($context['var_ps_free']) ? $context['var_ps_free'] : null));
        echo "\" />
<br />
<script type=\"text/javascript\">

\$('#amount').val(";
        // line 19
        echo twig_safe_filter((isset($context['var_amount']) ? $context['var_amount'] : null));
        echo ");
\$('#amount_free').val(";
        // line 20
        echo twig_safe_filter((isset($context['var_amount_free']) ? $context['var_amount_free'] : null));
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

</script>
";
    }

}
