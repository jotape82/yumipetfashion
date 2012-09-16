<?php

/* datechooser.frontend.html */
class __TwigTemplate_8d9f5c60f12247da68600c1964137603 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo ">
\t<select name=\"";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldMonthFieldName']) ? $context['FormFieldMonthFieldName'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['FormFieldMonthFieldArgs']) ? $context['FormFieldMonthFieldArgs'] : null));
        echo ">
\t\t";
        // line 3
        echo twig_safe_filter((isset($context['FormFieldMonthOptions']) ? $context['FormFieldMonthOptions'] : null));
        echo "
\t</select>
\t<select name=\"";
        // line 5
        echo twig_safe_filter((isset($context['FormFieldDayFieldName']) ? $context['FormFieldDayFieldName'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['FormFieldDayFieldArgs']) ? $context['FormFieldDayFieldArgs'] : null));
        echo ">
\t\t";
        // line 6
        echo twig_safe_filter((isset($context['FormFieldDayOptions']) ? $context['FormFieldDayOptions'] : null));
        echo "
\t</select>
\t<select name=\"";
        // line 8
        echo twig_safe_filter((isset($context['FormFieldYearFieldName']) ? $context['FormFieldYearFieldName'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['FormFieldYearFieldArgs']) ? $context['FormFieldYearFieldArgs'] : null));
        echo ">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['FormFieldYearOptions']) ? $context['FormFieldYearOptions'] : null));
        echo "
\t</select>
</div>";
    }

}
