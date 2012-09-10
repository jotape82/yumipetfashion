<?php

/* exporttemplates.form.includetype.tpl */
class __TwigTemplate_60139c8fd1ca72d85f7af77927daacee extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo " <tr>
    <td class=\"FieldLabel\">
        &nbsp;&nbsp;&nbsp;";
        // line 3
        echo twig_safe_filter((isset($context['IncludeTypeLabel']) ? $context['IncludeTypeLabel'] : null));
        echo "
    </td>
    <td>
        <label><input type=\"checkbox\" id=\"include";
        // line 6
        echo twig_safe_filter((isset($context['IncludeType']) ? $context['IncludeType'] : null));
        echo "\" name=\"includeType[";
        echo twig_safe_filter((isset($context['IncludeType']) ? $context['IncludeType'] : null));
        echo "]\" value=\"1\" ";
        echo twig_safe_filter((isset($context['IncludeChecked']) ? $context['IncludeChecked'] : null));
        echo "/>";
        echo twig_safe_filter((isset($context['YesIncludeType']) ? $context['YesIncludeType'] : null));
        echo "</label>
    </td>
</tr>";
    }

}
