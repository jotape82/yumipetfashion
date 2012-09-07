<?php

/* brand.edit.form.tpl */
class __TwigTemplate_5774d3595e5012f01b55457b6f393064 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onSubmit=\"return ValidateForm(CheckForm)\" name=\"frmAddBrand\" method=\"post\">
<input type=\"hidden\" name=\"brandId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['BrandId']) ? $context['BrandId'] : null));
        echo "\">
<input type=\"hidden\" name=\"oldBrandName\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['BrandName']) ? $context['BrandName'] : null));
        echo "\">
<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
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
\t</tr>

\t<tr>
\t\t<td>
\t\t\t<div>
\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 20
        echo getLang("Save");
        echo "\" class=\"FormButton\">
\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 21
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"><br /><img src=\"images/blank.gif\" width=\"1\" height=\"10\" />
\t\t\t</div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=2>";
        // line 29
        echo getLang("BrandDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 33
        echo getLang("BrandName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"brandName\" id=\"brandName\" class=\"Field400\" value=\"";
        // line 36
        echo twig_safe_filter((isset($context['BrandName']) ? $context['BrandName'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 41
        echo getLang("PageTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"brandPageTitle\" name=\"brandPageTitle\" class=\"Field400\" value=\"";
        // line 44
        echo twig_safe_filter((isset($context['BrandPageTitle']) ? $context['BrandPageTitle'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('metataghelp');\" onmouseover=\"ShowHelp('metataghelp', '";
        // line 45
        echo getLang("PageTitle");
        echo "', '";
        echo getLang("BrandPageTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"metataghelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 51
        echo getLang("MetaKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"brandMetaKeywords\" name=\"brandMetaKeywords\" class=\"Field400\" value=\"";
        // line 54
        echo twig_safe_filter((isset($context['BrandMetaKeywords']) ? $context['BrandMetaKeywords'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('metataghelp');\" onmouseover=\"ShowHelp('metataghelp', '";
        // line 55
        echo getLang("MetaKeywords");
        echo "', '";
        echo getLang("MetaKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"metataghelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 61
        echo getLang("MetaDescription");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"brandMetaDesc\" name=\"brandMetaDesc\" class=\"Field400\" value=\"";
        // line 64
        echo twig_safe_filter((isset($context['BrandMetaDesc']) ? $context['BrandMetaDesc'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('metadeschelp');\" onmouseover=\"ShowHelp('metadeschelp', '";
        // line 65
        echo getLang("MetaDescription");
        echo "', '";
        echo getLang("MetaDescriptionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"metadeschelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 71
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"brandSearchKeywords\" name=\"brandSearchKeywords\" class=\"Field400\" value=\"";
        // line 74
        echo twig_safe_filter((isset($context['BrandSearchKeywords']) ? $context['BrandSearchKeywords'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('searchkeywords');\" onmouseover=\"ShowHelp('searchkeywords', '";
        // line 75
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"searchkeywords\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 83
        echo getLang("BrandImage");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 87
        echo getLang("BrandImage");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"file\" id=\"brandimagefile\" name=\"brandimagefile\" class=\"Field\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dimage');\" onmouseover=\"ShowHelp('dimage', '";
        // line 91
        echo getLang("BrandImage");
        echo "', '";
        echo getLang("BrandImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dimage\"></div>";
        // line 92
        echo twig_safe_filter((isset($context['BrandImageMessage']) ? $context['BrandImageMessage'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<table class=\"Panel\">


\t\t\t\t<tr>


\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>


\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton2\" value=\"";
        // line 107
        echo getLang("Save");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 108
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t</table>
\t\t</td>
\t</tr>
</table>
</div>
</form>

<script type=\"text/javascript\">

\tfunction CheckForm() {
\t\tvar brands = document.getElementById(\"brandName\");
\t\tvar bimg = document.getElementById(\"brandimagefile\");

\t\tif(brands.value == \"\") {
\t\t\talert(\"";
        // line 126
        echo getLang("EnterBrand");
        echo "\");
\t\t\tbrands.focus();
\t\t\treturn false;
\t\t}

\t\tif(bimg.value != \"\") {
\t\t\t// Make sure it has a valid extension
\t\t\timg = bimg.value.split(\".\");
\t\t\text = img[img.length-1].toLowerCase();

\t\t\tif(ext != \"jpg\" && ext != \"png\" && ext != \"gif\") {
\t\t\t\talert(\"";
        // line 137
        echo getLang("ChooseValidImage");
        echo "\");
\t\t\t\tbimg.focus();
\t\t\t\tbimg.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\treturn true;
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 149
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
