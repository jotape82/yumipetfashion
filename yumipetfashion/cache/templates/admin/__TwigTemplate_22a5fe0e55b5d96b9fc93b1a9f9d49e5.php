<?php

/* settings.affiliates.manage.tpl */
class __TwigTemplate_22a5fe0e55b5d96b9fc93b1a9f9d49e5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedAffiliateSettings\" name=\"frmAffiliateSettings\" id=\"frmAffiliateSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckAffiliateSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("AffiliateSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("AffiliateSettingsIntro");
        echo "</p>
\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 13
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 14
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 21
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 32
        echo getLang("AffiliateConversionTrackingCode");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<textarea name=\"AffiliateConversionTrackingCode\" id=\"AffiliateConversionTrackingCode\" rows=\"10\" class=\"Field400 ISSelectReplacement\">";
        // line 35
        echo twig_safe_filter((isset($context['AffiliateConversionTrackingCode']) ? $context['AffiliateConversionTrackingCode'] : null));
        echo "</textarea>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 36
        echo getLang("AffiliateConversionTrackingCode");
        echo "', '";
        echo getLang("AffiliateConversionTrackingCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t\t<div style=\"padding-top:2px\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"LaunchHelp(805)\" style=\"color:gray\">";
        // line 39
        echo getLang("AffiliateHowPass");
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 48
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 49
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 62
        echo getLang("ConfirmCancelAffiliateSettings");
        echo "\")) {
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewAffiliateSettings\";
\t\t\t}
\t\t}

\t\tfunction CheckAffiliateSettingsForm() {
\t\t\t// Show an alert if the affiliate tracking code doesn't contain %%ORDER_AMOUNT%%
\t\t\tif(\$('#AffiliateConversionTrackingCode').val() != '' && \$('#AffiliateConversionTrackingCode').val().indexOf('%%ORDER_AMOUNT%%') == -1) {
\t\t\t\tif(confirm('--- Your Affiliate Tracking Code Is Invalid ---\\n\\nYou haven\\'t setup placeholders to pass back the order\\'s total amount. Without these your affiliate tracking program wont show correct order amounts for your affiliates. Click the \\'How do I pass order details back to my affiliate program?\\' link for a guide on how to do it.\\n\\nClick OK to save anyway or click Cancel to change your conversion tracking code.')) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\treturn true;
\t\t}

\t</script>
";
    }

}
