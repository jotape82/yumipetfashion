<?php

/* settings.currency.manage.tpl */
class __TwigTemplate_d980afb5b213770ad73da01beb65e8ea extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<form name=\"frmCurrency\" id=\"frmCurrency\" method=\"post\" action=\"index.php?ToDo=settingsSaveCurrencySettings\" onsubmit=\"return ValidateForm(CheckCurrencyForm);\">
\t<input type=\"hidden\" name=\"currentTab\" id=\"currentTab\" value=\"0\" />
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("Currency");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['CurrencyIntro']) ? $context['CurrencyIntro'] : null));
        echo "</p>
\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['CurrencyTabs']) ? $context['CurrencyTabs'] : null));
        echo "
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 19
        echo getLang("CurrencyRateSettings");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\" class=\"EmptyRow\">";
        // line 28
        echo twig_safe_filter((isset($context['CurrencyOptionsMessage']) ? $context['CurrencyOptionsMessage'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\" class=\"EmptyRow\" style=\"padding: 2px;\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\">
\t\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 35
        echo getLang("AddCurrency");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=settingsAddCurrency'\" />&nbsp;
\t\t\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 36
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />&nbsp;
\t\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['UpdateExchageRateButton']) ? $context['UpdateExchageRateButton'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\" class=\"EmptyRow\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"Heading3\" style=\"display: ";
        // line 43
        echo twig_safe_filter((isset($context['ShowCurrencyTableHeaders']) ? $context['ShowCurrencyTableHeaders'] : null));
        echo "\">
\t\t\t\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 47
        echo getLang("CurrencyName");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 50
        echo getLang("Currency");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 53
        echo getLang("ExchangeRate");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:70px;\">
\t\t\t\t\t\t";
        // line 56
        echo getLang("Status");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"width:120px;\">
\t\t\t\t\t\t";
        // line 59
        echo getLang("Action");
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 62
        echo twig_safe_filter((isset($context['CurrencyGrid']) ? $context['CurrencyGrid'] : null));
        echo "
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 69
        echo getLang("ExchangeRateSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"converterproviders\">";
        // line 73
        echo getLang("CurrencyMethods");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<select size=\"8\" multiple name=\"converterproviders[]\" id=\"converterproviders\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t";
        // line 77
        echo twig_safe_filter((isset($context['ConverterProviders']) ? $context['ConverterProviders'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 79
        echo getLang("CurrencyMethods");
        echo "', '";
        echo getLang("CurrencyMethodsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 89
        echo getLang("AutomaticExchangeRateUpdates");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t<p class=\"HelpInfo\">";
        // line 93
        echo getLang("AutomaticExchangeRateUpdatesHelp");
        echo "</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"cronpath\">";
        // line 98
        echo getLang("ExchangeRateCronCommand");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"Field250\" name=\"cronpath\" id=\"cronpath\" value=\"";
        // line 101
        echo twig_safe_filter((isset($context['ExchangeRatePath']) ? $context['ExchangeRatePath'] : null));
        echo "\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 102
        echo getLang("ExchangeRateCronCommand");
        echo "', '";
        echo getLang("ExchangeRateCronCommandHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 109
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 110
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t</tr>

\t</table>
\t</form>
\t</div>

\t<script type=\"text/javascript\">

\t\tvar updateExchageRateSequency = new Array();
\t\tvar PopupPositioned           = false;

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmCurrency\").getElementsByTagName('input');

\t\t\tfor (var i=0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif (!fp[i].getAttribute('disabled'))
\t\t\t\t\tfp[i].checked = Status;
\t\t\t}
\t\t}

\t\tfunction getSelected()
\t\t{
\t\t\tvar inputs = document.getElementById(\"frmCurrency\").getElementsByTagName('input');
\t\t\tvar nodes  = new Array();

\t\t\tfor (var i=0; i<inputs.length; i++)
\t\t\t{
\t\t\t\tif (inputs[i].type == \"checkbox\" && inputs[i].name == \"currencies[]\" && inputs[i].checked)
\t\t\t\t\tnodes[nodes.length] = inputs[i];
\t\t\t}

\t\t\treturn nodes
\t\t}

\t\tfunction hasSelected()
\t\t{
\t\t\tvar nodes = getSelected();
\t\t\treturn nodes.length > 0;
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tif (hasSelected())
\t\t\t{
\t\t\t\tif (confirm(\"";
        // line 165
        echo getLang("ConfirmDeleteCurrency");
        echo "\")) {
\t\t\t\t\t\$('#frmCurrency').attr('action', 'index.php?ToDo=settingsDeleteCurrencies');
\t\t\t\t\tdocument.getElementById(\"frmCurrency\").submit();
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 172
        echo getLang("ChooseCurrencyDelete");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ConfirmUpdateSelectedExchangeRate()
\t\t{
\t\t\tvar nodes = getSelected();

\t\t\tif (nodes.length > 0)
\t\t\t{
\t\t\t\tif (confirm(\"";
        // line 182
        echo getLang("ConfirmUpdateCurrencyExchangeRate");
        echo "\")) {

\t\t\t\t\t/**
\t\t\t\t\t * A quick hack to remove the status nodes from previous updates
\t\t\t\t\t */
\t\t\t\t\tvar spans  = document.getElementById(\"frmCurrency\").getElementsByTagName('span');
\t\t\t\t\tvar substr = \"currencyexchangeratestatus-\";

\t\t\t\t\tfor (var i=(spans.length-1); i>=0; i--)
\t\t\t\t\t{
\t\t\t\t\t\tif (spans[i].id.substring(0, substr.length) == substr)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar parent = spans[i].parentNode;
\t\t\t\t\t\t\tparent.removeChild(spans[i]);
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\t/**
\t\t\t\t\t * This is the main part to update the exchage rates. It simulates a cascading affect
\t\t\t\t\t */
\t\t\t\t\tupdateExchageRateSequency = new Array();

\t\t\t\t\tfor (var i=0; i<nodes.length; i++)
\t\t\t\t\t\tupdateExchageRateSequency[updateExchageRateSequency.length] = nodes[i].value;

\t\t\t\t\tupdateExchangeRate(updateExchageRateSequency[0], 0);
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 212
        echo getLang("ChooseCurrencyUpdate");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction updateExchangeRate(id, seq)
\t\t{
\t\t\t\$.ajax({
\t\t\t\turl     : url,
\t\t\t\tdata    : \"w=updateExchangeRate&cid=";
        // line 220
        echo twig_safe_filter((isset($context['SelectedCurrencyModuleId']) ? $context['SelectedCurrencyModuleId'] : null));
        echo "&currencyid=\" + id + \"&seq=\" + seq,
\t\t\t\tasync   : true,
\t\t\t\tcache   : false,
\t\t\t\tsuccess : ProcessData
\t\t\t});
\t\t}

\t\tfunction ProcessData(data)
\t\t{
\t\t\teval('var data = ' + data);

\t\t\tvar currencyExchangeRateNode = document.getElementById(\"currencyexchangerate-\" + data.id);
\t\t\tvar statusNode               = document.createElement(\"span\");
\t\t\tvar text, colour;

\t\t\tstatusNode.id                = \"currencyexchangeratestatus-\" + data.id;
\t\t\tstatusNode.style.marginLeft  = \"10px\";
\t\t\tstatusNode.style.fontSize    = \"0.8em\";
\t\t\tstatusNode.style.fontWeight  = \"bold\";

\t\t\tswitch (data.status)
\t\t\t{
\t\t\t\tcase 0:
\t\t\t\t\tcolour = \"green\";
\t\t\t\t\ttext   = \"(";
        // line 244
        echo getLang("CurrencyExchangeRateUpdateSuccess");
        echo ")\";

\t\t\t\t\tcurrencyExchangeRateNode.innerHTML = data.newRate;

\t\t\t\t\tbreak;
\t\t\t\tcase 2:
\t\t\t\t\tcolour = \"blue\";
\t\t\t\t\ttext   = \"(";
        // line 251
        echo getLang("CurrencyExchangeRateUpdateInvalid");
        echo ")\";
\t\t\t\t\tbreak;
\t\t\t\tcase 1:
\t\t\t\tdefault:
\t\t\t\t\tcolour = \"red\";
\t\t\t\t\ttext   = \"(";
        // line 256
        echo getLang("CurrencyExchangeRateUpdateFailed");
        echo ")\";
\t\t\t\t\tbreak;

\t\t\t}

\t\t\tstatusNode.style.color = colour;
\t\t\tstatusNode.appendChild(document.createTextNode(text));
\t\t\tcurrencyExchangeRateNode.appendChild(statusNode);

\t\t\t/**
\t\t\t * Leave this as a timeout function as jquery will only display the animated ajax gif for one interation, not all the others
\t\t\t */
\t\t\tif (data.seq < (updateExchageRateSequency.length - 1))
\t\t\t\twindow.setTimeout(\"updateExchangeRate(\" + updateExchageRateSequency[data.seq+1] + \", \" + (data.seq+1) + \");\", 1);
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 274
        echo getLang("ConfirmCancelCurrencySettings");
        echo "\")) {
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewCurrencySettings\";
\t\t\t}
\t\t}

\t\tfunction ShowTab(T)
\t\t{
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}

\t\tfunction CheckCurrencyForm()
\t\t{
\t\t\tif (\$(\"#currencytype2\").attr('checked')) {
\t\t\t\tif (isNaN(priceFormat(\$(\"#DefaultCurrency\").val())) || \$(\"#DefaultCurrency\").val() < 0) {
\t\t\t\t\talert(\"";
        // line 297
        echo getLang("EnterACurrency");
        echo "\");
\t\t\t\t\t\$(\"#DefaultCurrency\").focus();
\t\t\t\t\t\$(\"#DefaultCurrency\").select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t}

\t\tfunction ConfirmSetAsDefault(currencyId)
\t\t{
\t\t\t\$(\"#";
        // line 308
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "ButtonYes\").click(function() { location.href = \"index.php?ToDo=settingsSetAsDefaultCurrency&currencyId=\" + currencyId + \"&updatePrice=0\" });
\t\t\t\$(\"#";
        // line 309
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "ButtonYesPrice\").click(function() { location.href = \"index.php?ToDo=settingsSetAsDefaultCurrency&currencyId=\" + currencyId + \"&updatePrice=1\" });
\t\t\t\$(\"#";
        // line 310
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "ButtonNo\").click(function() { \$(\"#";
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").hide(\"slow\"); });

\t\t\tif (!PopupPositioned)
\t\t\t{
\t\t\t\t\$(\"#";
        // line 314
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").css(\"left\", ((\$(window).width() - \$(\"#";
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").width()) / 2) + \"px\");
\t\t\t\t\$(\"#";
        // line 315
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").css(\"top\", ((\$(window).height() - \$(\"#";
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").height()) / 2) + \"px\");
\t\t\t\tPopupPositioned = true;
\t\t\t}

\t\t\t\$(\"#";
        // line 319
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\").show(\"slow\", function() { \$(\"#";
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "ButtonYes\").focus(); });
\t\t}

\t\t\$(document).ready(function() {
\t\t\tShowTab(";
        // line 323
        echo twig_safe_filter((isset($context['DefaultTab']) ? $context['DefaultTab'] : null));
        echo ");
\t\t});

\t</script>

\t<div class=\"Popup\" id=\"";
        // line 328
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "\" style=\"display:";
        echo twig_safe_filter((isset($context['PopupDisplay']) ? $context['PopupDisplay'] : null));
        echo ";\">
\t\t<div class=\"PopupToolbar\">
\t\t\t<div class=\"PopupToolbarLeftCorner\"></div>
\t\t\t<div class=\"PopupToolbarRightCorner\"></div>
\t\t\t<div class=\"PopupToolbarTools\">
\t\t\t\t<ul>
\t\t\t\t\t<li><img src=\"images/popupbuttonclose.gif\" alt=\"\" border=\"0\" onclick=\"\$('#";
        // line 334
        echo twig_safe_filter((isset($context['PopupID']) ? $context['PopupID'] : null));
        echo "').hide('slow');\" /></li>
\t\t\t\t\t";
        // line 335
        echo twig_safe_filter((isset($context['PopupTools']) ? $context['PopupTools'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"PopupDocument\">
\t\t\t<div class=\"PopupDocumentImg\" style=\"display:";
        // line 340
        echo twig_safe_filter((isset($context['PopupImgDisplay']) ? $context['PopupImgDisplay'] : null));
        echo "\">
\t\t\t\t<img src=\"";
        // line 341
        echo twig_safe_filter((isset($context['PopupImgSrc']) ? $context['PopupImgSrc'] : null));
        echo "\" />
\t\t\t</div>
\t\t\t<div class=\"PopupDocumentBody\">
\t\t\t\t<p><h2>";
        // line 344
        echo twig_safe_filter((isset($context['PopupHeader']) ? $context['PopupHeader'] : null));
        echo "</h2></p>
\t\t\t\t<p>";
        // line 345
        echo twig_safe_filter((isset($context['PopupContent']) ? $context['PopupContent'] : null));
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

}
