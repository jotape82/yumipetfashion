<?php

/* currency.form.tpl */
class __TwigTemplate_a260c0da91ada30fcb90a815cfcb52de extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckForm)\" name=\"frmAddCurrency\" method=\"post\">
\t<input type=\"hidden\" name=\"setCurrencyAsDefault\" id=\"setCurrencyAsDefault\" value=\"\" />
\t";
        // line 4
        echo twig_safe_filter((isset($context['hiddenFields']) ? $context['hiddenFields'] : null));
        echo "
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t  <tr>
\t\t\t<td class=\"Heading1\">";
        // line 8
        echo twig_safe_filter((isset($context['CurrencyTitle']) ? $context['CurrencyTitle'] : null));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 12
        echo getLang("CurrencyIntro");
        echo "</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t    <td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 19
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 20
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" /><br /><img src=\"images/blank.gif\" width=\"1\" height=\"10\" /></div>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t  <table class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("CurrencyDetails");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 31
        echo getLang("CurrencyName");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"currencyname\" id=\"currencyname\" class=\"Field250\" value=\"";
        // line 34
        echo twig_safe_filter((isset($context['CurrencyName']) ? $context['CurrencyName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currname');\" onmouseover=\"ShowHelp('currname', '";
        // line 35
        echo getLang("CurrencyName");
        echo "', '";
        echo getLang("CurrencyNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currname\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 41
        echo getLang("CurrencyOrigin");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"currencyorigin\" id=\"currencyorigin\" class=\"Field250\" onchange=\"toggleOrigin();\" size=\"10\">
\t\t\t\t\t\t\t\t\t";
        // line 45
        echo twig_safe_filter((isset($context['OriginList']) ? $context['OriginList'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"currencyorigintype\" name=\"currencyorigintype\" value=\"";
        // line 47
        echo twig_safe_filter((isset($context['CurrencyOriginType']) ? $context['CurrencyOriginType'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currorigin');\" onmouseover=\"ShowHelp('currorigin', '";
        // line 48
        echo getLang("CurrencyOrigin");
        echo "', '";
        echo getLang("CurrencyOriginHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currorigin\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 54
        echo getLang("CurrencyCode");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input maxlength=\"3\" type=\"text\" name=\"currencycode\" id=\"currencycode\" class=\"Field50\" value=\"";
        // line 57
        echo twig_safe_filter((isset($context['CurrencyCode']) ? $context['CurrencyCode'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currcode');\" onmouseover=\"ShowHelp('currcode', '";
        // line 58
        echo getLang("CurrencyCode");
        echo "', '";
        echo getLang("CurrencyCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currcode\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr ";
        // line 62
        echo twig_safe_filter((isset($context['HideOnDefault']) ? $context['HideOnDefault'] : null));
        echo ">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 64
        echo getLang("CurrencyExchangeRate");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 67
        echo twig_safe_filter((isset($context['ConverterList']) ? $context['ConverterList'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr ";
        // line 70
        echo twig_safe_filter((isset($context['HideOnDefault']) ? $context['HideOnDefault'] : null));
        echo ">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div id=\"currencyexchangeratediv\"><img src=\"images/nodejoin.gif\" align=\"left\" />&nbsp;";
        // line 75
        echo twig_safe_filter((isset($context['CurrencyConverterBox']) ? $context['CurrencyConverterBox'] : null));
        echo "<input type=\"text\" id=\"currencyexchangerate\" name=\"currencyexchangerate\" value=\"";
        echo twig_safe_filter((isset($context['CurrencyExchangeRate']) ? $context['CurrencyExchangeRate'] : null));
        echo "\" class=\"Field50\"/>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currexrate');\" onmouseover=\"ShowHelp('currexrate', '";
        // line 76
        echo getLang("CurrencyExchangeRate");
        echo "', '";
        echo twig_safe_filter((isset($context['CurrencyExchangeRateHelp']) ? $context['CurrencyExchangeRateHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currexrate\"></div></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr ";
        // line 80
        echo twig_safe_filter((isset($context['HideOnDefault']) ? $context['HideOnDefault'] : null));
        echo ">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 82
        echo getLang("CurrencyEnabled");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input ";
        // line 85
        echo twig_safe_filter((isset($context['CurrencyEnabled']) ? $context['CurrencyEnabled'] : null));
        echo " type=\"checkbox\" name=\"currencystatus\" id=\"currencystatus\" /> <label for=\"currencystatus\">";
        echo getLang("YesCurrencyEnabled");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currstatus');\" onmouseover=\"ShowHelp('currstatus', '";
        // line 86
        echo getLang("CurrencyEnabled");
        echo "', '";
        echo getLang("CurrencyEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currstatus\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\" style=\"height:15px\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=2>";
        // line 96
        echo getLang("CurrencyDisplay");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"currencystringposition\">";
        // line 100
        echo getLang("CurrencyStringPosition");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"currencystringposition\" id=\"currencystringposition\" class=\"Field50\">
\t\t\t\t\t\t\t\t\t<option value=\"left\"";
        // line 104
        echo twig_safe_filter((isset($context['CurrencyLocationIsLeft']) ? $context['CurrencyLocationIsLeft'] : null));
        echo ">";
        echo getLang("Left");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"right\"";
        // line 105
        echo twig_safe_filter((isset($context['CurrencyLocationIsRight']) ? $context['CurrencyLocationIsRight'] : null));
        echo ">";
        echo getLang("Right");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currstrpos');\" onmouseover=\"ShowHelp('currstrpos', '";
        // line 107
        echo getLang("CurrencyStringPosition");
        echo "', '";
        echo getLang("CurrencyStringPositionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currstrpos\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"currencystring\">";
        // line 113
        echo getLang("CurrencyString");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"currencystring\" id=\"currencystring\" value=\"";
        // line 116
        echo twig_safe_filter((isset($context['CurrencyString']) ? $context['CurrencyString'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currtoken');\" onmouseover=\"ShowHelp('currtoken', '";
        // line 117
        echo getLang("CurrencyString");
        echo "', '";
        echo getLang("CurrencyStringHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currtoken\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"currencydecimalstring\">";
        // line 123
        echo getLang("CurrencyDecimalString");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"currencydecimalstring\" id=\"currencydecimalstring\" value=\"";
        // line 126
        echo twig_safe_filter((isset($context['CurrencyDecimalString']) ? $context['CurrencyDecimalString'] : null));
        echo "\" class=\"Field40\" maxlength=\"1\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currdectoken');\" onmouseover=\"ShowHelp('currdectoken', '";
        // line 127
        echo getLang("CurrencyDecimalString");
        echo "', '";
        echo getLang("CurrencyDecimalStringHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currdectoken\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"currencythousandstring\">";
        // line 133
        echo getLang("CurrencyThousandString");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"currencythousandstring\" id=\"currencythousandstring\" value=\"";
        // line 136
        echo twig_safe_filter((isset($context['CurrencyThousandString']) ? $context['CurrencyThousandString'] : null));
        echo "\" class=\"Field40\" maxlength=\"1\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currthousandstr');\" onmouseover=\"ShowHelp('currthousandstr', '";
        // line 137
        echo getLang("CurrencyThousandString");
        echo "', '";
        echo getLang("CurrencyThousandStringHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currthousandstr\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"currencydecimalplace\">";
        // line 143
        echo getLang("CurrencyDecimalPlace");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"currencydecimalplace\" id=\"currencydecimalplace\" value=\"";
        // line 146
        echo twig_safe_filter((isset($context['CurrencyDecimalPlace']) ? $context['CurrencyDecimalPlace'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('currdecplace');\" onmouseover=\"ShowHelp('currdecplace', '";
        // line 147
        echo getLang("CurrencyDecimalPlace");
        echo "', '";
        echo getLang("CurrencyDecimalPlaceHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"currdecplace\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t </table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 161
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 162
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\t\$(document).ready(function() {
\t\t\t\$('#currencyname').focus();
\t\t});

\t\tfunction toggleOrigin()
\t\t{
\t\t\tvar origin = document.getElementById(\"currencyorigin\");
\t\t\tvar id     = \$(origin.options[origin.selectedIndex]).parent().attr(\"id\");

\t\t\tif (matches = id.match(/^currencyorigintype\\-([a-z]+)\$/i))
\t\t\t\t\$(\"#currencyorigintype\").val(matches[1]);
\t\t}

\t\tfunction checkCurrencyCode(code)
\t\t{
\t\t\tvar regexp = /^[a-z]{3}\$/i;
\t\t\treturn regexp.test(code);
\t\t}

\t\tfunction toggleExchangeConverter(id)
\t\t{
\t\t\tvar currentCurrencyNode = document.getElementById(\"currencyconverter\" + id);
\t\t\tvar otherCurrencyNodes  = currentCurrencyNode.parentNode.getElementsByTagName(\"INPUT\");

\t\t\tfor (var i in otherCurrencyNodes) {
\t\t\t\tif (otherCurrencyNodes[i].type == \"radio\" && otherCurrencyNodes[i].id !== \"currencyconvertermanual\")
\t\t\t\t\tdocument.getElementById(\"currencyconverterupdate\" + otherCurrencyNodes[i].value).style.display = \"none\";
\t\t\t}

\t\t\tif (id !== \"manual\")
\t\t\t\tdocument.getElementById(\"currencyconverterupdate\" + id).style.display = \"inline\";
\t\t}

\t\tfunction getExchangeRate(id)
\t\t{
\t\t\tif (!checkCurrencyCode(\$(\"#currencycode\").val())) {
\t\t\t\talert(\"";
        // line 207
        echo getLang("ErrorEnterCurrencyCodeForConverter");
        echo "\");
\t\t\t\t\$(\"#currencycode\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$.ajax({
\t\t\t\ttype   : \"POST\",
\t\t\t\turl    : url,
\t\t\t\tdata   : \"w=getExchangeRate&cid=\" + id + \"&ccode=\"+ \$(\"#currencycode\").val(),
\t\t\t\tsuccess: processExchangeRate
\t\t\t\t});
\t\t}

\t\tfunction processExchangeRate(data)
\t\t{
\t\t\teval('var data = ' + data);
\t\t\tif (!data.status) {
\t\t\t\talert(data.message);
\t\t\t\t\$(\"#currencycode\").focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t\$(\"#currencyexchangerate\").val(data.rate);
\t\t\talert(data.message);
\t\t\treturn true;
\t\t}

\t\tfunction CheckForm()
\t\t{
\t\t\tvar checkElements = new Array(
\t\t\t\t{\"name\": \"currencyname\", \"err\": \"";
        // line 236
        echo getLang("EnterCurrencyName");
        echo "\"},
\t\t\t\t{\"name\": \"currencyorigin\", \"err\": \"";
        // line 237
        echo getLang("EnterCurrencyOrigin");
        echo "\"},
\t\t\t\t{\"name\": \"currencycode\", \"err\": \"";
        // line 238
        echo getLang("EnterCurrencyCode");
        echo "\"},
\t\t\t\t{\"name\": \"currencyexchangerate\", \"err\": \"";
        // line 239
        echo getLang("EnterCurrencyExchangeRate");
        echo "\"},
\t\t\t\t{\"name\": \"currencystringposition\", \"err\": \"";
        // line 240
        echo getLang("EnterCurrencyStringPosition");
        echo "\"},
\t\t\t\t{\"name\": \"currencystring\", \"err\": \"";
        // line 241
        echo getLang("EnterCurrencyString");
        echo "\"},
\t\t\t\t{\"name\": \"currencydecimalstring\", \"err\": \"";
        // line 242
        echo getLang("EnterCurrencyDecimalString");
        echo "\"},
\t\t\t\t{\"name\": \"currencythousandstring\", \"err\": \"";
        // line 243
        echo getLang("EnterCurrencyThousandString");
        echo "\"},
\t\t\t\t{\"name\": \"currencydecimalplace\", \"err\": \"";
        // line 244
        echo getLang("EnterCurrencyDecimalPlace");
        echo "\"}
\t\t\t);

\t\t\tfor (var i=0; i<checkElements.length; i++) {
\t\t\t\tif (\$(\"#\" + checkElements[i].name).val() == \"\" || \$(\"#\" + checkElements[i].name).val() == null) {
\t\t\t\t\talert(checkElements[i].err);
\t\t\t\t\t\$(\"#\" + checkElements[i].name).focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif (isNaN(priceFormat(\$(\"#currencyexchangerate\").val()))) {
\t\t\t\talert(\"";
        // line 256
        echo getLang("InvalidCurrencyExchangeRate");
        echo "\");
\t\t\t\t\$(\"#currencyexchangerate\").focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (!checkCurrencyCode(\$(\"#currencycode\").val())) {
\t\t\t\talert(\"";
        // line 262
        echo getLang("InvalidCurrencyCode");
        echo "\");
\t\t\t\t\$(\"#currencycode\").focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (isNaN(parseInt(\$(\"#currencydecimalplace\").val()))) {
\t\t\t\talert(\"";
        // line 268
        echo getLang("InvalidCurrencyDecimalPlace");
        echo "\");
\t\t\t\t\$(\"#currencydecimalplace\").focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar oneCharElements = new Array(
\t\t\t\t{\"name\": \"currencydecimalstring\", \"err\": \"";
        // line 274
        echo getLang("InvalidCurrencyDecimalString");
        echo "\"},
\t\t\t\t{\"name\": \"currencythousandstring\", \"err\": \"";
        // line 275
        echo getLang("InvalidCurrencyThousandString");
        echo "\"}
\t\t\t);

\t\t\tfor (var i=0; i<oneCharElements.length; i++) {
\t\t\t\tif (\$(\"#\" + oneCharElements[i].name).val().length > 1 || (/\\d+/).test(\$(\"#\" + oneCharElements[i].name).val())) {
\t\t\t\t\talert(oneCharElements[i].err);
\t\t\t\t\t\$(\"#\" + oneCharElements[i].name).focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif (\$(\"#currencydecimalstring\").val() == \$(\"#currencythousandstring\").val()) {
\t\t\t\talert(\"";
        // line 287
        echo getLang("InvalidCurrencyStringMatch");
        echo "\");
\t\t\t\t\$(\"#currencydecimalplace\").focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm('";
        // line 297
        echo twig_safe_filter((isset($context['CancelMessage']) ? $context['CancelMessage'] : null));
        echo "'))
\t\t\t\tdocument.location.href='index.php?ToDo=viewCurrencySettings';
\t\t\telse
\t\t\t\treturn false;
\t\t}

\t</script>
";
    }

}
