<?php

/* total_range_javascript.tpl */
class __TwigTemplate_522b5823ed87fe85a4ce4b8c8fcbfd2b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "var totalOk = true;

\$('.TotalRanges:first input:first').addClass('FirstTotal');
\$('.TotalRanges:last input:last').prev().addClass('LastTotal');


if (\$('.TotalRanges input.TotalRange').length > 3) {
\t\$('.TotalRanges input.TotalRange').each(function() {
\t\tif (\$(this).hasClass('FirstTotal') || \$(this).hasClass('LastTotal')) {
\t\t\treturn true;
\t\t}

\t\tif (isNaN(priceFormat(\$(this).val())) || \$(this).val() == \"\") {

\t\t\tif (\$(this).hasClass('RangeCost')) {
\t\t\t\talert('%%LNG_JsEnterAShippingCost%%');
\t\t\t\t\$(this).focus();
\t\t\t}

\t\t\t\$(this).focus();
\t\t\ttotalOk = false;
\t\t\treturn false;
\t\t}
\t});
} else {
\tvar cost = \$('.TotalRanges input.RangeCost').val();
\tvar lower = \$('.TotalRanges input.LowerRange').val();
\tvar upper = \$('.TotalRanges input.UpperRange').val();

\tif (isNaN(priceFormat(cost)) || cost == \"\" ) {
\t\talert('%%LNG_JsEnterAShippingCost%%');
\t\t\$('.TotalRanges input.RangeCost').focus();
\t\ttotalOk = false;
\t} else if ((isNaN(priceFormat(lower)) || lower == \"\") && (isNaN(priceFormat(upper)) || upper == \"\")) {
\t\talert('%%LNG_JsShippingCostRuleRequired%%');
\t\ttotalOk = false;
\t}

}

if (totalOk == false) {
\t\$('.TotalRanges:first input:first').removeClass('FirstTotal');
\t\$('.TotalRanges:last input:last').prev().removeClass('LastTotal');
\treturn false;
}


";
    }

}
