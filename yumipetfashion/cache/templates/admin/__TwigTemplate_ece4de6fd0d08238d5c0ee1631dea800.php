<?php

/* brand.form.tpl */
class __TwigTemplate_ece4de6fd0d08238d5c0ee1631dea800 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
<form action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onSubmit=\"return ValidateForm(CheckForm);\" name=\"frmAddBrand\" method=\"post\">
";
        // line 3
        echo twig_safe_filter((isset($context['hiddenFields']) ? $context['hiddenFields'] : null));
        echo "
<div class=\"BodyContainer\">
<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['BrandTitle']) ? $context['BrandTitle'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['BrandIntro']) ? $context['BrandIntro'] : null));
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t  </tr>

\t  <tr>
\t\t    <td>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 19
        echo getLang("Save");
        echo "\" class=\"FormButton\">
\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 20
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"><br /><img src=\"images/blank.gif\" width=\"1\" height=\"10\" /></div>
\t\t\t</td>
\t\t  </tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t  <table class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("BrandDetails");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 31
        echo getLang("BrandNames");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<textarea name=\"brands\" id=\"brands\" class=\"Field250\" rows=\"5\" value=\"\"></textarea>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 35
        echo getLang("BrandNames");
        echo "', '";
        echo getLang("BrandNamesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton2\" value=\"";
        // line 45
        echo getLang("Save");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 46
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t </table>
\t\t</td>
\t</tr>
</table>
</div>
</form>

<script type=\"text/javascript\">

\tfunction CheckForm() {
\t\tvar brands = document.getElementById(\"brands\");

\t\tif(brands.value == \"\") {
\t\t\talert(\"";
        // line 63
        echo getLang("EnterBrands");
        echo "\");
\t\t\tbrands.focus();
\t\t\treturn false;
\t\t}

\t\treturn true;
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 73
        echo twig_safe_filter((isset($context['CancelMessage']) ? $context['CancelMessage'] : null));
        echo "'))
\t\t\tdocument.location.href='index.php?ToDo=viewBrands';
\t\telse
\t\t\treturn false;
\t}

</script>
";
    }

}
