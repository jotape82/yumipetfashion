<?php

/* singleline.backend.html */
class __TwigTemplate_20fba6e8c6cdb0ab10fa333537103d36 extends Twig_Template
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
\t\t\t<input type=\"text\" id=\"FormFieldDefaultValue\" name=\"defaultvalue\" value=\"";
        // line 11
        echo twig_safe_filter((isset($context['FormFieldDefaultValue']) ? $context['FormFieldDefaultValue'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 14
        echo getLang("FormFieldSetupIsRequired");
        echo ":</dt>
\t\t<dd>
\t\t\t<label for=\"FormFieldIsRequired\"><input type=\"checkbox\" id=\"FormFieldIsRequired\" name=\"isRequired\" ";
        // line 16
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
        // line 23
        echo getLang("FormFieldSetupSize");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldSize\" name=\"size\" value=\"";
        // line 25
        echo twig_safe_filter((isset($context['FormFieldSize']) ? $context['FormFieldSize'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dsize');\" onmouseover=\"ShowHelp('dsize', '";
        // line 26
        echo getLang("FormFieldSetupSize");
        echo "', '";
        echo getLang("FormFieldSetupSizeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dsize\"></div>
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 30
        echo getLang("FormFieldSetupMaxLength");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldMaxLength\" name=\"maxlength\" value=\"";
        // line 32
        echo twig_safe_filter((isset($context['FormFieldMaxLength']) ? $context['FormFieldMaxLength'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dmaxlength');\" onmouseover=\"ShowHelp('dmaxlength', '";
        // line 33
        echo getLang("FormFieldSetupMaxLength");
        echo "', '";
        echo getLang("FormFieldSetupMaxLengthHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dmaxlength\"></div>
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 37
        echo getLang("FormFieldSetupClass");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldClass\" name=\"class\" value=\"";
        // line 39
        echo twig_safe_filter((isset($context['FormFieldClass']) ? $context['FormFieldClass'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dclass');\" onmouseover=\"ShowHelp('dclass', '";
        // line 40
        echo getLang("FormFieldSetupClass");
        echo "', '";
        echo getLang("FormFieldSetupClassHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dclass\"></div>
\t\t</dd>

\t\t<dt>&nbsp;&nbsp; ";
        // line 44
        echo getLang("FormFieldSetupStyle");
        echo ":</dt>
\t\t<dd>
\t\t\t<input type=\"text\" id=\"FormFieldStyle\" name=\"style\" value=\"";
        // line 46
        echo twig_safe_filter((isset($context['FormFieldStyle']) ? $context['FormFieldStyle'] : null));
        echo "\" class=\"extraInfo Field200\" />
\t\t\t<img onmouseout=\"HideHelp('dstyle');\" onmouseover=\"ShowHelp('dstyle', '";
        // line 47
        echo getLang("FormFieldSetupStyle");
        echo "', '";
        echo getLang("FormFieldSetupStyleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t<div style=\"display:none\" id=\"dstyle\"></div>
\t\t</dd>
\t</dl>
</div>";
    }

}
