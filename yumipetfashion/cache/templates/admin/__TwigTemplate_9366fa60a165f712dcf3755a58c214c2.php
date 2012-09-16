<?php

/* datechooser.backend.html */
class __TwigTemplate_9366fa60a165f712dcf3755a58c214c2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
<div id=\"div0\" class=\"FormFieldTabs\">
\t<dl>
\t\t<dt><span class=\"Required\">*</span> ";
        // line 4
        echo getLang("FormFieldSetupName");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldName\" name=\"name\" value=\"";
        // line 6
        echo twig_safe_filter((isset($context['FormFieldName']) ? $context['FormFieldName'] : null));
        echo "\" class=\"Field200\" />
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 9
        echo getLang("FormFieldSetupDefaultValue");
        echo ":</dt>
\t\t<dd>
\t\t\t<select id=\"FormFieldDefaultValueMonth\" name=\"defaultvaluemonth\">
\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['FormFieldDateDefaultValueMonths']) ? $context['FormFieldDateDefaultValueMonths'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldDefaultValueDay\" name=\"defaultvalueday\">
\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['FormFieldDateDefaultValueDays']) ? $context['FormFieldDateDefaultValueDays'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldDefaultValueYear\" name=\"defaultvalueyear\">
\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['FormFieldDateDefaultValueYears']) ? $context['FormFieldDateDefaultValueYears'] : null));
        echo "
\t\t\t</select>
\t\t\t<a href=\"#\" onclick=\"FormFieldAdmin.SetToday('DefaultValue'); return false;\">";
        // line 20
        echo getLang("Today");
        echo "</a>
\t\t\t<br class=\"Clear\" />
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 24
        echo getLang("FormFieldSetupDateRange");
        echo ":</dt>
\t\t<dd>
\t\t\t<select id=\"FormFieldLimitFromMonth\" name=\"limitfrommonth\">
\t\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['FormFieldDateLimitFromMonths']) ? $context['FormFieldDateLimitFromMonths'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldLimitFromDay\" name=\"limitfromday\">
\t\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['FormFieldDateLimitFromDays']) ? $context['FormFieldDateLimitFromDays'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldLimitFromYear\" name=\"limitfromyear\">
\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['FormFieldDateLimitFromYears']) ? $context['FormFieldDateLimitFromYears'] : null));
        echo "
\t\t\t</select>
\t\t\t to <img onmouseout=\"HideHelp('ddaterange');\" onmouseover=\"ShowHelp('ddaterange', '";
        // line 35
        echo getLang("FormFieldSetupDateRange");
        echo "', '";
        echo getLang("FormFieldSetupDateRangeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"ddaterange\"></div><br />
\t\t\t<select id=\"FormFieldLimitToMonth\" name=\"limittomonth\">
\t\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['FormFieldDateLimitToMonths']) ? $context['FormFieldDateLimitToMonths'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldLimitToDay\" name=\"limittoday\">
\t\t\t\t";
        // line 41
        echo twig_safe_filter((isset($context['FormFieldDateLimitToDays']) ? $context['FormFieldDateLimitToDays'] : null));
        echo "
\t\t\t</select>
\t\t\t<select id=\"FormFieldLimitToYear\" name=\"limittoyear\">
\t\t\t\t";
        // line 44
        echo twig_safe_filter((isset($context['FormFieldDateLimitToYears']) ? $context['FormFieldDateLimitToYears'] : null));
        echo "
\t\t\t</select>
\t\t\t<br class=\"Clear\" />
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 49
        echo getLang("FormFieldSetupIsRequired");
        echo ":</dt>
\t\t<dd>
\t\t\t<label for=\"FormFieldIsRequired\"><input type=\"checkbox\" id=\"FormFieldIsRequired\" name=\"isRequired\" ";
        // line 51
        echo twig_safe_filter((isset($context['FormFieldIsRequiredChecked']) ? $context['FormFieldIsRequiredChecked'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['FormFieldImmutableFlag']) ? $context['FormFieldImmutableFlag'] : null));
        echo " /> ";
        echo getLang("FormFieldSetupIsRequiredYes");
        echo "</label>
\t\t</dd>
\t</dl>
</div>

<div id=\"div1\" class=\"FormFieldTabs\">
\t<dl>
\t\t<dt>&nbsp;&nbsp; ";
        // line 58
        echo getLang("FormFieldSetupClass");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldClass\" name=\"class\" value=\"";
        // line 60
        echo twig_safe_filter((isset($context['FormFieldClass']) ? $context['FormFieldClass'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dclass');\" onmouseover=\"ShowHelp('dclass', '";
        // line 61
        echo getLang("FormFieldSetupClass");
        echo "', '";
        echo getLang("FormFieldSetupClassHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dclass\"></div>
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 65
        echo getLang("FormFieldSetupStyle");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldStyle\" name=\"style\" value=\"";
        // line 67
        echo twig_safe_filter((isset($context['FormFieldStyle']) ? $context['FormFieldStyle'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dstyle');\" onmouseover=\"ShowHelp('dstyle', '";
        // line 68
        echo getLang("FormFieldSetupStyle");
        echo "', '";
        echo getLang("FormFieldSetupStyleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dstyle\"></div>
\t\t</dd>
\t</dl>
</div>
";
    }

}
