<?php

/* customers.group.form.tpl */
class __TwigTemplate_f9fd95975979ea9651f29ead39939df3 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" id=\"frmCustomerGroup\" onsubmit=\"return ValidateForm(CheckCustomerGroupForm)\" method=\"post\">
\t<input type=\"hidden\" name=\"groupId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['GroupId']) ? $context['GroupId'] : null));
        echo "\">

\t<div id=\"hiddenDiscountFields\" style=\"display:none;\">
\t\t";
        // line 6
        echo twig_safe_filter((isset($context['HiddenDiscounts']) ? $context['HiddenDiscounts'] : null));
        echo "
\t</div>

\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 12
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 16
        echo getLang("CustomerGroupsIntro");
        echo "</p>
\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 18
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
        // line 25
        echo getLang("CustomerGroupDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 29
        echo getLang("CustomerGroupName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"groupname\" name=\"groupname\" class=\"Field400\" value=\"";
        // line 32
        echo twig_safe_filter((isset($context['GroupName']) ? $context['GroupName'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 33
        echo getLang("CustomerGroupName");
        echo "', '";
        echo getLang("GroupNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t<div style=\"padding-top:5px; font-style:italic; color:gray\">";
        // line 35
        echo getLang("CustomerGroupNameSuggestion");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 40
        echo getLang("CustomerGroupAccess");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"accesscategories\" id=\"accesscategories\" ";
        // line 43
        echo twig_safe_filter((isset($context['AccessAllCategories']) ? $context['AccessAllCategories'] : null));
        echo " /> <label for=\"accesscategories\">";
        echo getLang("CustomerGroupAllAccess");
        echo "</label>
\t\t\t\t\t\t<span id=\"accesscatssel\" style=\"display:";
        // line 44
        echo twig_safe_filter((isset($context['HideAccessCatLinks']) ? $context['HideAccessCatLinks'] : null));
        echo "\">(<a href=\"#\" id=\"selectAllCats\">";
        echo getLang("SelectAll");
        echo "</a> / <a href=\"#\" id=\"unselectAllCats\">";
        echo getLang("UnselectAll");
        echo "</a>)</span>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 45
        echo getLang("CustomerGroupAccess");
        echo "', '";
        echo getLang("CustomerGroupAccessHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div><br />
\t\t\t\t\t\t<div style=\"padding-top:5px; display:";
        // line 47
        echo twig_safe_filter((isset($context['HideAccessCategories']) ? $context['HideAccessCategories'] : null));
        echo "\" id=\"accesscategorylist\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" width=\"20\" height=\"20\" style=\"float:left; margin-right: 5px\"/>
\t\t\t\t\t\t\t<select size=\"5\" id=\"accesscategorieslist\" name=\"accesscategorieslist[]\" class=\"Field400 ISSelectReplacement\" multiple=\"multiple\" style=\"height: 140px\">
\t\t\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['AccessCategoryOptions']) ? $context['AccessCategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"isdefault\" name=\"isdefault\" value=\"ON\" ";
        // line 60
        echo twig_safe_filter((isset($context['IsDefault']) ? $context['IsDefault'] : null));
        echo "> <label for=\"isdefault\">";
        echo getLang("YesMakeCustomerGroupDefault");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 61
        echo getLang("CustomerGroupDefault");
        echo "', '";
        echo getLang("CustomerGroupDefaultHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t <br />
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 69
        echo getLang("CategoryLevelDiscounts");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-left:10px\">
\t\t\t\t\t\t<div class=\"GridContainer\" id=\"categoryGridContainer\" style=\"display:";
        // line 73
        echo twig_safe_filter((isset($context['HideCategoryGridContainer']) ? $context['HideCategoryGridContainer'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 74
        echo twig_safe_filter((isset($context['CategoryDataGrid']) ? $context['CategoryDataGrid'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"nocategoryrules\" style=\"padding-top:5px; font-style:italic; color:gray; display:";
        // line 76
        echo twig_safe_filter((isset($context['HideNoCatgeory']) ? $context['HideNoCatgeory'] : null));
        echo "\">";
        echo getLang("NoCategoryLevelDiscounts");
        echo " <a href=\"#\" onclick=\"addDiscountRule('category'); return false;\">";
        echo getLang("CreateOneNow");
        echo "</a></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t <br />
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 83
        echo getLang("ProductLevelDiscounts");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-left:10px\">
\t\t\t\t\t\t<div class=\"GridContainer\" id=\"productGridContainer\" style=\"display:";
        // line 87
        echo twig_safe_filter((isset($context['HideProductGridContainer']) ? $context['HideProductGridContainer'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 88
        echo twig_safe_filter((isset($context['ProductDataGrid']) ? $context['ProductDataGrid'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"noproductrules\" style=\"padding-top:5px; font-style:italic; color:gray; display:";
        // line 90
        echo twig_safe_filter((isset($context['HideNoProduct']) ? $context['HideNoProduct'] : null));
        echo "\">";
        echo getLang("NoProductLevelDiscounts");
        echo " <a href=\"#\" onclick=\"addDiscountRule('product'); return false;\">";
        echo getLang("CreateOneNow");
        echo "</a></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t <br />
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 97
        echo getLang("StorewideDiscount");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding-left:10px\">
\t\t\t\t\t\t<div style=\"padding-top:5px\">
\t\t\t\t\t\t\t";
        // line 102
        echo getLang("CustomerGroupsOtherProductsDiscount");
        echo "

\t\t\t\t\t\t\t<span id=\"storeDiscountRulesAmountPrefix\">\$</span>
\t\t\t\t\t\t\t<input type=\"text\" id=\"discount\" name=\"discount\" class=\"Field50\" style=\"width:30px\" value=\"";
        // line 106
        echo twig_safe_filter((isset($context['Discount']) ? $context['Discount'] : null));
        echo "\">
\t\t\t\t\t\t\t<span id=\"storeDiscountRulesAmountPostfix\"></span>

\t\t\t\t\t\t\t<select id=\"storeDiscountMethod\" name=\"storeDiscountMethod\" class=\"Field120\" onchange=\"ToggleDiscountRateValueType('', 'store');\">
\t\t\t\t\t\t\t\t<option value=\"price\" ";
        // line 110
        echo twig_safe_filter((isset($context['StoreDiscountMethodPrice']) ? $context['StoreDiscountMethodPrice'] : null));
        echo ">";
        echo getLang("PriceDiscount");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"percent\" ";
        // line 111
        echo twig_safe_filter((isset($context['StoreDiscountMethodPercent']) ? $context['StoreDiscountMethodPercent'] : null));
        echo ">";
        echo getLang("PercentageDiscount");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"fixed\" ";
        // line 112
        echo twig_safe_filter((isset($context['StoreDiscountMethodFixed']) ? $context['StoreDiscountMethodFixed'] : null));
        echo ">";
        echo getLang("FixedPrice");
        echo "</option>
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 115
        echo getLang("StorewideDiscount");
        echo "', '";
        echo getLang("StorewideDiscountHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 124
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t</div>
\t</form>

\t<script type=\"text/javascript\">

\tvar discountsPerPage = ";
        // line 130
        echo twig_safe_filter((isset($context['DiscountsPerPage']) ? $context['DiscountsPerPage'] : null));
        echo ";
\tvar currentPage = 1;
\tvar amountPrefix = \"";
        // line 132
        echo twig_safe_filter((isset($context['AmountPrefix']) ? $context['AmountPrefix'] : null));
        echo "\";
\tvar amountPostfix = \"";
        // line 133
        echo twig_safe_filter((isset($context['AmountPostfix']) ? $context['AmountPostfix'] : null));
        echo "\";

\tlang.CustomerGroupsInvalid_category = \"";
        // line 135
        echo getLang("CustomerGroupsInvalidCatgeory");
        echo "\";
\tlang.CustomerGroupsInvalid_product = \"";
        // line 136
        echo getLang("CustomerGroupsInvalidProduct");
        echo "\";
\tlang.CustomerGroupMultiDiscount_category = \"";
        // line 137
        echo getLang("CustomerGroupMultiCatDiscount");
        echo "\";
\tlang.CustomerGroupMultiDiscount_product = \"";
        // line 138
        echo getLang("CustomerGroupMultiProdDiscount");
        echo "\";
\tlang.CustomerGroupsInvalidAmount_category = \"";
        // line 139
        echo getLang("CustomerGroupsInvalidCategoryAmount");
        echo "\";
\tlang.CustomerGroupsInvalidAmount_product = \"";
        // line 140
        echo getLang("CustomerGroupsInvalidProductAmount");
        echo "\";

\tfunction getGroupDiscountDataBlock(page, url)
\t{
\t\tif (typeof(page) == 'undefined' || page < 1) {
\t\t\tpage = 1;
\t\t}

\t\tcurrentPage = page;

\t\tvar type, typeMatch = url.match(/[\\?|\\&]type=([^&\$]+)/);

\t\tif (typeMatch !== null && typeof(typeMatch[1]) !== 'undefined') {
\t\t\ttype = typeMatch[1];
\t\t} else {
\t\t\treturn '';
\t\t}

\t\tvar startId = ((page - 1) * discountsPerPage) + 1;
\t\tvar endId = page * discountsPerPage;
\t\tvar items = getHiddenDiscounts(type, true);
\t\tvar i = 0;
\t\tvar data = {
\t\t\t'type': type,
\t\t\t'total': items.length
\t\t}

\t\tfor (var i=0; i<items.length; i++) {
\t\t\tif (items[i].discountid >= startId && items[i].discountid <= endId) {
\t\t\t\tdata['items[' + i + '][discountid]'] = items[i].discountid;
\t\t\t\tdata['items[' + i + '][discounttype]'] = items[i].discounttype;
\t\t\t\tdata['items[' + i + '][catorprodid]'] = items[i].catorprodid;
\t\t\t\tdata['items[' + i + '][discountpercent]'] = items[i].discountpercent;
\t\t\t\tdata['items[' + i + '][appliesto]'] = items[i].appliesto;
\t\t\t\tdata['items[' + i + '][discountmethod]'] = items[i].discountmethod;
\t\t\t}
\t\t}

\t\treturn data;
\t}

\tfunction remapHiddenDiscounts(type, id)
\t{
\t\tif (type !== 'product' && type !== 'category') {
\t\t\treturn;
\t\t}

\t\tvar search;

\t\tif (typeof(id) !== 'undefined') {
\t\t\tsearch = '#' + type + '_discountid_' + id;
\t\t} else {
\t\t\tsearch = '.hidden' + type + 'RecordId';
\t\t}

\t\t\$(search).each(
\t\t\tfunction()
\t\t\t{
\t\t\t\tvar id = \$(this).val();

\t\t\t\t\$('#' + type + '_catorprodid_' + id).val(\$('#' + type + 'RuleValue' + id).val());
\t\t\t\t\$('#' + type + '_discountpercent_' + id).val(\$('#' + type + 'RuleDiscount' + id).val());
\t\t\t\t\$('#' + type + '_appliesto_' + id).val(\$('#' + type + 'RuleAppliesTo' + id).val());
\t\t\t\t\$('#' + type + '_discountmethod_' + id).val(\$('#' + type + 'DiscountMethod' + id).val());
\t\t\t}
\t\t);
\t}

\tfunction getHiddenDiscounts(type, reload)
\t{
\t\tif (type !== 'product' && type !== 'category') {
\t\t\treturn false;
\t\t}

\t\tif (typeof(reload) !== 'undefined' && reload) {
\t\t\tremapHiddenDiscounts(type);
\t\t}

\t\tvar data = [];

\t\t\$('.hidden' + type + 'RecordId').each(
\t\t\tfunction()
\t\t\t{
\t\t\t\tvar id = \$(this).val();

\t\t\t\tdata[data.length] = {
\t\t\t\t\t'discountid': id,
\t\t\t\t\t'discounttype': type,
\t\t\t\t\t'catorprodid': \$('#' + type + '_catorprodid_' + id).val(),
\t\t\t\t\t'discountpercent': \$('#' + type + '_discountpercent_' + id).val(),
\t\t\t\t\t'appliesto': \$('#' + type + '_appliesto_' + id).val(),
\t\t\t\t\t'discountmethod': \$('#' + type + '_discountmethod_' + id).val()
\t\t\t\t}
\t\t\t}
\t\t);

\t\treturn data;
\t}

\tfunction ShowProductSelector(id, hiddenId, qtyInput) {
\t\topenProductSelect('group', id, hiddenId, 1, qtyInput);
\t}

\tfunction ToggleDiscountRateValueType(id, ruleType)
\t{
\t\tif (\$('#'+ruleType+'DiscountMethod' + id).val() == 'percent') {
\t\t\t\$('#'+ruleType+'DiscountRulesAmountPrefix' + id).html('');
\t\t\t\$('#'+ruleType+'DiscountRulesAmountPostfix' + id).html('%');
\t\t} else {
\t\t\t\$('#'+ruleType+'DiscountRulesAmountPrefix' + id).html(amountPrefix);
\t\t\t\$('#'+ruleType+'DiscountRulesAmountPostfix' + id).html(amountPostfix);
\t\t}

\t\tif(ruleType=='category') {
\t\t\tif (\$('#'+ruleType+'DiscountMethod' + id).val() == 'fixed') {
\t\t\t\t\$('#'+ruleType+'DiscountRulesLineEnding' + id).html(' ";
        // line 255
        echo getLang("For");
        echo " ');
\t\t\t} else {
\t\t\t\t\$('#'+ruleType+'DiscountRulesLineEnding' + id).html(' ";
        // line 257
        echo getLang("OffSmall");
        echo " ');
\t\t\t}
\t\t}

\t\tif (ruleType !== 'store') {
\t\t\tremapHiddenDiscounts(ruleType, id);
\t\t}
\t}

\tfunction addDiscountRule(type)
\t{
\t\tif (type !== 'product' && type !== 'category') {
\t\t\treturn;
\t\t}

\t\tvar total = \$('.hidden' + type + 'RecordId').size();

\t\t\$.ajax({
\t\t\t'url': 'remote.php',
\t\t\t'type': 'post',
\t\t\t'data': {
\t\t\t\t'w': 'adddiscountrule',
\t\t\t\t'remoteSection': 'customers',
\t\t\t\t'discountId': total+1,
\t\t\t\t'type': type
\t\t\t\t},
\t\t\t'success': addDiscountRuleCallback
\t\t});
\t}

\tfunction addDiscountRuleCallback(data)
\t{
\t\tvar type = \$('type', data).text();
\t\tvar hidden = \$('hidden', data).text();
\t\tvar newPage = currentPage;

\t\tif (\$('status', data).text() == '0') {
\t\t\treturn;
\t\t}

\t\t\$('#hiddenDiscountFields').append(hidden);
\t\tremapHiddenDiscounts(type);

\t\tvar total = \$('.hidden' + type + 'RecordId').size();

\t\t/**
\t\t * Are we in a new page now?
\t\t */
\t\tif (total > (discountsPerPage * currentPage)) {
\t\t\tnewPage = Math.ceil(total / discountsPerPage);
\t\t}

\t\tif (total == 1) {
\t\t\t\$('#no' + type + 'rules').hide('slow');
\t\t\t\$('#' + type + 'GridContainer').show('slow', function() {navToDiscountPage(type, newPage)});
\t\t} else {
\t\t\tnavToDiscountPage(type, newPage)
\t\t};
\t}

\tfunction removeDiscountRule(type, id)
\t{
\t\tif ((type !== 'product' && type !== 'category') || id == '') {
\t\t\talert(type + ' ' + id);
\t\t\treturn;
\t\t}

\t\t\$('#' + type + '_discountid_' + id).remove();
\t\t\$('#' + type + '_discounttype_' + id).remove();
\t\t\$('#' + type + '_catorprodid_' + id).remove();
\t\t\$('#' + type + '_discountpercent_' + id).remove();
\t\t\$('#' + type + '_appliesto_' + id).remove();
\t\t\$('#' + type + '_discountmethod_' + id).remove();
\t\t\$('#' + type + 'Rule' + id).remove();

\t\tvar total = \$('.hidden' + type + 'RecordId').size();
\t\tvar newPage = currentPage;
\t\tvar hiddenNames = ['discountid', 'discounttype', 'catorprodid', 'discountpercent', 'appliesto', 'discountmethod'];
\t\tvar frontNames = ['Rule','RuleValue','RuleDiscount','DiscountMethod','RuleAppliesTo'];

\t\t/**
\t\t * Decrement the IDs
\t\t */
\t\t\$('.hidden' + type + 'RecordId').each(
\t\t\tfunction()
\t\t\t{
\t\t\t\tvar thisId = \$(this).val();

\t\t\t\tif (thisId > id) {
\t\t\t\t\tfor (var i=0; i<hiddenNames.length; i++) {
\t\t\t\t\t\t\$('#' + type + '_' + hiddenNames[i] + '_' + thisId).attr('name', 'discountlist[' + type + '][' + (thisId-1) + '][' + hiddenNames[i] + ']');
\t\t\t\t\t\t\$('#' + type + '_' + hiddenNames[i] + '_' + thisId).attr('id', type + '_' + hiddenNames[i] + '_' + (thisId-1));
\t\t\t\t\t}

\t\t\t\t\t\$('#' + type + '_discountid_' + (thisId-1)).val(thisId-1);

\t\t\t\t\tfor (var i=0; i<frontNames.length; i++) {
\t\t\t\t\t\t\$('#' + type + frontNames[i] + thisId).attr('id', type + frontNames[i] + (thisId-1));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t);

\t\tremapHiddenDiscounts(type);

\t\t/**
\t\t * Have we deleted all the records for that page?
\t\t */
\t\tif (total < (discountsPerPage * currentPage)) {
\t\t\tnewPage = currentPage-1;
\t\t}

\t\tif (total == 0) {
\t\t\t\$('#' + type + 'GridContainer').hide('slow', function() {navToDiscountPage(type, newPage)});
\t\t\t\$('#no' + type + 'rules').show('slow');
\t\t} else {
\t\t\tnavToDiscountPage(type, newPage);
\t\t}
\t}

\tfunction navToDiscountPage(type, navToPage)
\t{
\t\tif (\$('#discountHiddenNavLink').size() == 0) {
\t\t\t\$('#' + type + 'GridContainer td.PagingNav:first').append('<a href=\"#\" id=\"discountHiddenNavLink\" style=\"display:none\"></a>');
\t\t\t\$('#discountHiddenNavLink').click(AjaxSortClick);
\t\t}

\t\t\$('#discountHiddenNavLink').attr('href', 'index.php?ToDo=viewCustomerGroupDiscounts&page=' + navToPage + '&type=' + type + '&precall=getGroupDiscountDataBlock');
\t\t\$('#discountHiddenNavLink').click();
\t}

\tfunction ConfirmCancel() {
\t\tif(confirm(\"";
        // line 389
        echo getLang("ConfirmCancelCustomerGroup");
        echo "\")) {
\t\t\tdocument.location.href = \"index.php?ToDo=viewCustomerGroups\";
\t\t}
\t}

\tfunction getGroupAccessCategories()
\t{
\t\tvar access = \$('#accesscategorieslist input:checked');
\t\tvar cats = [];

\t\tfor (var i=0; i<access.length; i++) {
\t\t\tcats[cats.length] = access[i].value;
\t\t}

\t\treturn cats;
\t}

\tfunction CheckCustomerGroupForm() {
\t\tif(\$('#groupname').val() == '') {
\t\t\talert(\"";
        // line 408
        echo getLang("CustomerGroupEnterName");
        echo "\");
\t\t\t\$('#groupname').select();
\t\t\treturn false;
\t\t}

\t\tif (!\$('#accesscategories').attr('checked') && getGroupAccessCategories().length < 1) {
\t\t\talert(\"";
        // line 414
        echo getLang("CustomerGroupsEmptyCategoryList");
        echo "\");
\t\t\t\$('#accesscategories').select();
\t\t\treturn false;
\t\t}

\t\tif (isNaN(priceFormat(\$('#discount').val())) || \$('#discount').val() == '') {
\t\t\t\$('#discount').focus().select();
\t\t\talert('";
        // line 421
        echo getLang("CustomerGroupEnterDiscount");
        echo "');
\t\t\treturn false;
\t\t} else if ( \$('#storeDiscountMethod').val() == 'percent' && (parseInt(\$('#discount').val()) < 0 || parseInt(\$('#discount').val()) > 100)) {
\t\t\t\$('#discount').focus().select();
\t\t\talert(\"";
        // line 425
        echo getLang("CustomerGroupEnterValidDiscount");
        echo "\");
\t\t\treturn false;
\t\t}

\t\tvar discounts = {
\t\t\t'category': getHiddenDiscounts('category', true),
\t\t\t'product': getHiddenDiscounts('product', true)
\t\t};

\t\tfor (var type in discounts) {
\t\t\tif (type !== 'category' && type !== 'product') {
\t\t\t\tcontinue;
\t\t\t}

\t\t\tvar newPage, cache = [];
\t\t\tvar errStatus = false;
\t\t\tvar errMsg = '';

\t\t\tfor (var i=0; i<discounts[type].length; i++) {
\t\t\t\tif (discounts[type][i].catorprodid == '' || isNaN(discounts[type][i].catorprodid)) {
\t\t\t\t\terrStatus = true;
\t\t\t\t\terrMsg = lang['CustomerGroupsInvalid_' + type];
\t\t\t\t}

\t\t\t\tif (!errStatus && cache.in_array(discounts[type][i].catorprodid)) {
\t\t\t\t\terrStatus = true;
\t\t\t\t\terrMsg = lang['CustomerGroupMultiDiscount_' + type];
\t\t\t\t}

\t\t\t\tcache[cache.length] = discounts[type][i].catorprodid;

\t\t\t\tif (!errStatus && parseInt(discounts[type][i].discountpercent) < 0 || isNaN(discounts[type][i].discountpercent)) {
\t\t\t\t\terrStatus = true;
\t\t\t\t\terrMsg = lang['CustomerGroupsInvalidAmount_' + type];
\t\t\t\t}

\t\t\t\tif (!errStatus && discounts[type][i].discountmethod == 'percent' && (parseInt(discounts[type][i].discountpercent) < 0 || parseInt(discounts[type][i].discountpercent) > 100)) {
\t\t\t\t\terrStatus = true;
\t\t\t\t\terrMsg = lang['CustomerGroupsInvalidAmount_' + type];
\t\t\t\t}

\t\t\t\tif (errStatus) {
\t\t\t\t\tnewPage = Math.ceil(discounts[type][i].discountid / discountsPerPage)
\t\t\t\t\tnavToDiscountPage(type, newPage);
\t\t\t\t\talert(errMsg.replace(/\\%d/, discounts[type][i].discountid));
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn true;
\t}

\t// Show or hide the access categories list as required
\t\$('#accesscategories').click(function() {
\t\tif((this).checked) {
\t\t\t\$('#accesscategorylist').hide();
\t\t\t\$('#accesscatssel').hide();
\t\t}
\t\telse {
\t\t\t\$('#accesscategorylist').show();
\t\t\t\$('#accesscatssel').show();
\t\t}
\t});

\t// Select all access categories
\t\$('#selectAllCats').click(function() {
\t\tif(g('accesscategorieslist_old')) {
\t\t\tif(g('accesscategorieslist_old').disabled != true) {
\t\t\t\t\$('#accesscategorieslist input').attr('checked', false);
\t\t\t\t\$('#accesscategorieslist li').trigger('click');
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$('#accesscategorieslist option').attr('selected', true);
\t\t}
\t\treturn false;
\t});

\t\$('#unselectAllCats').click(function() {
\t\tif(g('accesscategorieslist_old')) {
\t\t\tif(g('accesscategorieslist_old').disabled != true) {
\t\t\t\t\$('#accesscategorieslist input').attr('checked', true);
\t\t\t\t\$('#accesscategorieslist li').trigger('click');
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$('#accesscategorieslist option').attr('selected', false);
\t\t}
\t\treturn false;
\t});

\t\$(document).ready(function() {
\t\t\$('#groupname').focus();

\t\tvar StoreDiscountMethod = '";
        // line 520
        echo twig_safe_filter((isset($context['StoreDiscountMethod']) ? $context['StoreDiscountMethod'] : null));
        echo "';
\t\t\$(\"#storeDiscountMethod_ option[value='\"+StoreDiscountMethod+\"']\").attr(\"selected\",\"selected\");;
\t\tToggleDiscountRateValueType('', 'store');
\t});

\t</script>
";
    }

}
