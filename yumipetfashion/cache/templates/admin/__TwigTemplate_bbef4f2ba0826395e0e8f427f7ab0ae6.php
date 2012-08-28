<?php

/* giftwrapping.form.tpl */
class __TwigTemplate_bbef4f2ba0826395e0e8f427f7ab0ae6 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" id=\"frmWrap\" method=\"post\" onsubmit=\"return ValidateForm(CheckWrapForm)\" enctype=\"multipart/form-data\">
\t<input type=\"hidden\" name=\"wrapId\" id=\"wrapId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['WrapId']) ? $context['WrapId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"currentTab\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" id=\"currentTab\" />
<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 12
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />&nbsp;
\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 26
        echo getLang("GiftWrapSettings");
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 31
        echo getLang("WrapName");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"wrapname\" id=\"wrapname\" class=\"Field250\" value=\"";
        // line 34
        echo twig_safe_filter((isset($context['WrapName']) ? $context['WrapName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('wrapnamehelp');\" onmouseover=\"ShowHelp('wrapnamehelp', '";
        // line 35
        echo getLang("WrapName");
        echo "', '";
        echo getLang("WrapNameHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"wrapnamehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 42
        echo getLang("WrapImage");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"wrapimage\" id=\"wrapimage\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('wrapimagehelp');\" onmouseover=\"ShowHelp('wrapimagehelp', '";
        // line 46
        echo getLang("WrapImage");
        echo "', '";
        echo getLang("WrapImageHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"wrapimagehelp\"></div>
\t\t\t\t\t\t\t\t<span style=\"";
        // line 48
        echo twig_safe_filter((isset($context['HideCurrentWrapImage']) ? $context['HideCurrentWrapImage'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\tCurrently <a href=\"../";
        // line 49
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo "/";
        echo twig_safe_filter((isset($context['WrapImage']) ? $context['WrapImage'] : null));
        echo "\" target=\"_blank\">";
        echo twig_safe_filter((isset($context['WrapImage']) ? $context['WrapImage'] : null));
        echo "</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 56
        echo getLang("WrapPrice");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['LeftCurrencyToken']) ? $context['LeftCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"wrapprice\" id=\"wrapprice\" class=\"Field50\" value=\"";
        // line 60
        echo twig_safe_filter((isset($context['GiftWrapPrice']) ? $context['GiftWrapPrice'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t";
        // line 61
        echo twig_safe_filter((isset($context['RightCurrencyToken']) ? $context['RightCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('wrappricehelp');\" onmouseover=\"ShowHelp('wrappricehelp', '";
        // line 62
        echo getLang("WrapPrice");
        echo "', '";
        echo getLang("WrapPriceHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"wrappricehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"wrapgiftmessage\">";
        // line 68
        echo getLang("WrapGiftMessage");
        echo "?</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"wrapallowcomments\" value=\"1\" id=\"wrapgiftmessage\" ";
        // line 71
        echo twig_safe_filter((isset($context['GiftWrapAllowCommentsChecked']) ? $context['GiftWrapAllowCommentsChecked'] : null));
        echo " /> ";
        echo getLang("YesAllowWrapGiftMessage");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('wrapallowcommentshelp');\" onmouseover=\"ShowHelp('wrapallowcommentshelp', '";
        // line 72
        echo getLang("WrapGiftMessage");
        echo "', '";
        echo getLang("WrapGiftMessageHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"wrapallowcommentshelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"wrapvisible\">";
        // line 79
        echo getLang("Visible");
        echo "?</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"wrapvisible\" value=\"1\" id=\"wrapvisible\" ";
        // line 82
        echo twig_safe_filter((isset($context['GiftWrapVisibleChecked']) ? $context['GiftWrapVisibleChecked'] : null));
        echo " /> ";
        echo getLang("YesWrapVisible");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('wrapvisiblehelp');\" onmouseover=\"ShowHelp('wrapvisiblehelp', '";
        // line 83
        echo getLang("Visible");
        echo "', '";
        echo getLang("WrapVisibleHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"wrapvisiblehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 94
        echo getLang("Save");
        echo "\" class=\"FormButton\" />&nbsp;
\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 95
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>
<script type=\"text/javascript\">
\tfunction CheckWrapForm() {
\t\tif(!\$('#wrapname').val()) {
\t\t\talert('";
        // line 108
        echo getLang("EnterWrapName");
        echo "');
\t\t\t\$('#wrapname').focus();
\t\t\treturn false;
\t\t}

\t\tvar price = \$('#wrapprice');
\t\tif(isNaN(priceFormat(price.val())) || price.val() == '') {
\t\t\talert('";
        // line 115
        echo getLang("EnterWrapPrice");
        echo "');
\t\t\tprice.focus();
\t\t\tprice.select();
\t\t\treturn false;
\t\t}

\t\treturn true;
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 126
        echo getLang("ConfirmCancel");
        echo "'))
\t\t{
\t\t\tdocument.location.href='index.php?ToDo=viewGiftWrapping';
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}
</script>";
    }

}
