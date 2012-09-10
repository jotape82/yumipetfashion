<?php

/* exporttemplates.form.type.tpl */
class __TwigTemplate_41620cc62dbf853a94481b8c7fe38ad9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div id=\"div";
        echo twig_safe_filter((isset($context['FileIndex']) ? $context['FileIndex'] : null));
        echo "\" style=\"padding-top: 10px; ";
        echo twig_safe_filter((isset($context['TypeDisplay']) ? $context['TypeDisplay'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['TypeWidth']) ? $context['TypeWidth'] : null));
        echo "\">
\t<p style=\"padding-left: 10px;\">
\t";
        // line 3
        echo getLang("TypeIntro");
        echo "\t</p>
\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top:10px\">
\t\t<tr class=\"Heading3\">
\t\t\t<td align=\"center\" style=\"width: 25px;\"><input type=\"checkbox\" onchange=\"toggleFieldCheck('";
        // line 7
        echo twig_safe_filter((isset($context['TypeName']) ? $context['TypeName'] : null));
        echo "', this.checked);\" checked=\"checked\"/></td>
\t\t\t<td style=\"width: 150px;\">";
        // line 8
        echo getLang("ThisField");
        echo "</td>
\t\t\t<td style=\"width: 410px;\" id=\"";
        // line 9
        echo twig_safe_filter((isset($context['TypeName']) ? $context['TypeName'] : null));
        echo "_headercol\">";
        echo getLang("ExportWithName");
        echo "</td>
\t\t\t<td>&nbsp;</td>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t</table>

\t";
        // line 15
        echo twig_safe_filter((isset($context['FieldGrid']) ? $context['FieldGrid'] : null));
        echo "
</div>";
    }

}
