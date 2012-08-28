<?php

/* discount.form.tpl */
class __TwigTemplate_2e4eb9b527d3fb7ea3c7af86bc51b9e2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" id=\"frmNews\" method=\"post\" onSubmit=\"return CheckDiscountRuleForm()\">
\t<input type=\"hidden\" id=\"discountId\" name=\"discountId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['DiscountId']) ? $context['DiscountId'] : null));
        echo "\">
\t<div id=\"discountWrapper\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 13
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 20
        echo getLang("NewDiscountDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">* </span>";
        // line 24
        echo getLang("DiscountFormRuleName");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"discountname\" name=\"discountname\" class=\"Field250\" value=\"";
        // line 27
        echo twig_safe_filter((isset($context['DiscountName']) ? $context['DiscountName'] : null));
        echo "\" />
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<div class=\"aside\" style=\"color:Gray; margin-bottom:10px\">(Such as 'Free shipping on orders over \$200'. This name is for your reference only)</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 34
        echo getLang("DiscountFormEnabled");
        echo "\t\t\t\t\t</td>
\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"enabled\" id=\"enabled\" value=\"1\" ";
        // line 37
        echo twig_safe_filter((isset($context['DiscountEnabledCheck']) ? $context['DiscountEnabledCheck'] : null));
        echo ">";
        echo getLang("DiscountFormEnabledDescription");
        echo "</input></label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 42
        echo getLang("DiscountFormRuleExpires");
        echo "\t\t\t\t\t</td>
\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"discountruleexpires\" id=\"discountruleexpires\"  ";
        // line 45
        echo twig_safe_filter((isset($context['DiscountExpiryCheck']) ? $context['DiscountExpiryCheck'] : null));
        echo " onclick=\"if(this.checked) { \$('.DiscountExpiryFields').show(); } else { \$('.DiscountExpiryFields').hide(); }\" value=\"1\" /> ";
        echo getLang("DiscountFormRuleExpiresDescription");
        echo "</label>
\t\t\t\t\t\t<div style=\"display:none\" id=\"rulexpires\"></div>
\t\t\t\t\t\t<div style=\"margin-top: 3px; padding-left:20px; ";
        // line 47
        echo twig_safe_filter((isset($context['DiscountExpiryFields']) ? $context['DiscountExpiryFields'] : null));
        echo "\" class=\"DiscountExpiryFields\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle; float:left;\" /><div  style=\"float:left\">
\t\t\t\t\t\t\t<label><input name=\"discountruleexpiresuses\" id=\"discountruleexpiresuses\"  ";
        // line 49
        echo twig_safe_filter((isset($context['DiscountMaxUsesCheck']) ? $context['DiscountMaxUsesCheck'] : null));
        echo " type=\"checkbox\" onclick=\"\$('#discountruleexpiresusesamount').attr('readonly', !\$('#discountruleexpiresusesamount').attr('readonly'));\"></input> ";
        echo getLang("DiscountFormUsesExpire");
        echo "</label><input name=\"discountruleexpiresusesamount\" id=\"discountruleexpiresusesamount\" class=\"Field50\" ";
        echo twig_safe_filter((isset($context['DiscountMaxUsesDisabled']) ? $context['DiscountMaxUsesDisabled'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['DiscountMaxUses']) ? $context['DiscountMaxUses'] : null));
        echo "\" onclick=\"\$('#discountruleexpiresusesamount').attr('readonly', false);\$('#discountruleexpiresuses').attr('checked', true);\" /> ";
        echo getLang("DiscountFormUses");
        echo "<br />
\t\t\t\t\t\t\t<label><input id=\"discountruleexpiresdate\" name=\"discountruleexpiresdate\"  ";
        // line 50
        echo twig_safe_filter((isset($context['DiscountExpiryDateCheck']) ? $context['DiscountExpiryDateCheck'] : null));
        echo " type=\"checkbox\"></input> ";
        echo getLang("DiscountFormDateExpire");
        echo "<input name=\"discountruleexpiresdateamount\" id=\"discountruleexpiresdateamount\" class=\"Field70\" ";
        echo twig_safe_filter((isset($context['DiscountExpiryDateDisabled']) ? $context['DiscountExpiryDateDisabled'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['DiscountExpiryDate']) ? $context['DiscountExpiryDate'] : null));
        echo "\" onclick=\"\$('#discountruleexpiresdate').attr('checked', true);if(self.gfPop)gfPop.fStartPop(document.getElementById('discountruleexpiresdateamount'),document.getElementById('dc2'));return false;\" ></input></label><a href=\"javascript:void(0)\" onclick=\"\$('#discountruleexpiresdate').attr('checked', true);if(self.gfPop)gfPop.fStartPop(document.getElementById('discountruleexpiresdateamount'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/dateicon.gif\" border=\"0\" alt=\"\"></a></div>
<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"dc2\" name=\"dc2\" style=\"display:none\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr style=\"padding-bottom:10px;\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">* </span>";
        // line 59
        echo getLang("DiscountFormRuleType");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 62
        echo twig_safe_filter((isset($context['RuleList']) ? $context['RuleList'] : null));
        echo "
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
        // line 73
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 74
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t</td>
\t\t</tr>
\t</table>

\t</div>
\t</div>
\t</form>



\t<script type=\"text/javascript\">

\t\tvar previous = ";
        // line 91
        echo twig_safe_filter((isset($context['CurrentRule']) ? $context['CurrentRule'] : null));
        echo ";

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 95
        echo getLang("ConfirmCancelDiscount");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewDiscounts\";
\t\t}

\t\tfunction VendorSupport() {
\t\t\t\talert('";
        // line 100
        echo getLang("DiscountVendorWarning");
        echo "');
\t\t}

\t\tfunction UpdateModule(module, vendor) {

\t\t\tif (";
        // line 105
        echo twig_safe_filter((isset($context['Vendor']) ? $context['Vendor'] : null));
        echo " && !vendor) {
\t\t\t\t\$('#'+module).attr('checked', false);
\t\t\t\t\$('#'+previous).attr('checked', true);
\t\t\t\talert('";
        // line 108
        echo getLang("DiscountVendorWarning");
        echo "');
\t\t\t\treturn;
\t\t\t}

\t\t\tprevious = module;

\t\t\tif(module == '' || module == null) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\t'url': 'remote.php',
\t\t\t\t'method': 'post',
\t\t\t\t'data': {
\t\t\t\t\t'remoteSection': 'discounts',
\t\t\t\t\t'w': 'getRuleModuleProperties',
\t\t\t\t\t'module': module
\t\t\t\t},
\t\t\t\t'success': function(data) {
\t\t\t\t\t\$('.ruleWrapper').hide();
\t\t\t\t\t\$('.ruleSettings').html('');
\t\t\t\t\t\$('#ruleSettings'+module).html(data);
\t\t\t\t\t\$('#ruleWrapper'+module).show();
\t\t\t\t\t\$('.discountFirst').focus();

\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction CheckDiscountRuleForm()
\t\t{
\t\t\tvar discountname = document.getElementById(\"discountname\");
\t\t\tvar discountruleexpires = document.getElementById(\"discountruleexpires\");
\t\t\tvar discountruleexpiresuses = document.getElementById(\"discountruleexpiresuses\");
\t\t\tvar discountruleexpiresusesamount = document.getElementById(\"discountruleexpiresusesamount\");
\t\t\tvar discountruleexpiresdate = document.getElementById(\"discountruleexpiresdate\");
\t\t\tvar discountruleexpiresdateamount = document.getElementById(\"discountruleexpiresdateamount\");
\t\t\tvar enabled = document.getElementById(\"enabled\");

\t\t\tvar type = document.getElementsByName(\"RuleType\");

\t\t\tif(discountname.value == \"\") {
\t\t\t\talert(\"";
        // line 150
        echo getLang("EnterDiscountName");
        echo "\");
\t\t\t\tdiscountname.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (discountruleexpires.checked) {
\t\t\t\tif (discountruleexpiresuses.checked) {
\t\t\t\t\tif (isNaN(discountruleexpiresusesamount.value)) {
\t\t\t\t\t\talert(\"";
        // line 158
        echo getLang("EnterDiscountExpiresUsesAmount");
        echo "\");
\t\t\t\t\t\tdiscountruleexpiresusesamount.focus();
\t\t\t\t\t\tdiscountruleexpiresusesamount.select();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (discountruleexpiresdate.checked) {
\t\t\t\t\tif (discountruleexpiresdateamount.value == '' || new Date(discountruleexpiresdateamount.value) == 'Invalid Date') {
\t\t\t\t\t\talert(\"";
        // line 167
        echo getLang("EnterDiscountExpiresDateAmount");
        echo "\");
\t\t\t\t\t\tdiscountruleexpiresdateamount.focus();
\t\t\t\t\t\tdiscountruleexpiresdateamount.select();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tvar checked = false;
\t\t\tfor (var i = 0; i < type.length; i++) {
\t\t\t\tif (type[i].checked) {

\t\t\t\t\tvar response = this[type[i].id]();

\t\t\t\t\tif (response == true)
\t\t\t\t\t{
\t\t\t\t\t\tchecked = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif (!checked) {
\t\t\t\talert(\"";
        // line 191
        echo getLang("EnterDiscountSelectRule");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\t";
        // line 198
        echo twig_safe_filter((isset($context['DiscountJavascriptValidation']) ? $context['DiscountJavascriptValidation'] : null));
        echo "

\t</script>
";
    }

}
