<?php

/* module.percentoffitemsincat.tpl */
class __TwigTemplate_60b9d10b0ed7a37c39e614611f45f622 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo getLang("PERCENTOFFITEMSINCATget");
        echo "
<input name=\"var_amount\" class=\"discountFirst Field20\" id=\"amount\" size=\"3\" maxlength=\"3\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['var_amount']) ? $context['var_amount'] : null));
        echo "\"></input>
";
        // line 3
        echo getLang("PERCENTOFFITEMSINCAToff");
        echo "

";
        // line 5
        echo getLang("PERCENTOFFITEMSINCATincart");
        echo "

<div id=\"usedforcatdiv\" style=\"padding-left:25px\">
\t<select multiple=\"multiple\" size=\"12\" name=\"var_catids[]\" id=\"var_catids\" class=\"Field250 ISSelectReplacement\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['CategoryList']) ? $context['CategoryList'] : null));
        echo "
\t</select>
</div>
<div style=\"clear : both;\"></div>
<div style=\"padding-left:30px; margin-top:3px;\">(<a onclick=\"SelectAll(true)\" href=\"javascript:void(0)\">Select All</a> / <a onclick=\"SelectAll(false)\" href=\"javascript:void(0)\">Unselect All</a>)</div>

<script type=\"text/javascript\">

\t\tvar select = document.getElementById('var_catids');
\t\tISSelectReplacement.replace_select(select);

\t\tfunction SelectAll(Status)
\t\t{
\t\t\t\$('#var_catids input').attr('checked', !Status);
\t\t\t\$('#var_catids input').trigger('click');
\t\t\t\$('#var_catids option').attr('selected', Status);
\t\t}

</script>";
    }

}
