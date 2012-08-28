<?php

/* coupon.form.tpl */
class __TwigTemplate_0be79d0f1fbbdef02a3e1de728277731 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckCouponForm)\" id=\"frmNews\" method=\"post\">
\t<input type=\"hidden\" id=\"couponId\" name=\"couponId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CouponId']) ? $context['CouponId'] : null));
        echo "\">
\t<input type=\"hidden\" id=\"couponexpires\" name=\"couponexpires\" value=\"\">
\t<input type=\"hidden\" id=\"couponCode\" name=\"couponcode\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['CouponCode']) ? $context['CouponCode'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 9
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 15
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
        // line 22
        echo getLang("NewCouponDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 26
        echo getLang("CouponCode");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponcode\" name=\"couponcode\" class=\"Field250\" value=\"";
        // line 29
        echo twig_safe_filter((isset($context['CouponCode']) ? $context['CouponCode'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 30
        echo getLang("CouponCode");
        echo "', '";
        echo getLang("CouponCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 36
        echo getLang("CouponName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponname\" name=\"couponname\" class=\"Field250\" value=\"";
        // line 39
        echo twig_safe_filter((isset($context['CouponName']) ? $context['CouponName'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 40
        echo getLang("CouponName");
        echo "', '";
        echo getLang("CouponNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 46
        echo getLang("DiscountAmount");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponamount\" name=\"couponamount\" class=\"Field50\" value=\"";
        // line 49
        echo twig_safe_filter((isset($context['DiscountAmount']) ? $context['DiscountAmount'] : null));
        echo "\">
\t\t\t\t\t\t<select type=\"text\" id=\"coupontype\" name=\"coupontype\">
\t\t\t\t\t\t\t<option ";
        // line 51
        if ($this->getAttribute((isset($context['coupon']) ? $context['coupon'] : null), "coupontype", array(), "any") == 2) {
            echo "selected=\"selected\"";
        }
        echo " value=\"2\">";
        echo twig_escape_filter($this->env, (isset($context['CurrencyToken']) ? $context['CurrencyToken'] : null), "1");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OffTheTotal", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option ";
        // line 52
        if ($this->getAttribute((isset($context['coupon']) ? $context['coupon'] : null), "coupontype", array(), "any") == 0) {
            echo "selected=\"selected\"";
        }
        echo " value=\"0\">";
        echo twig_escape_filter($this->env, (isset($context['CurrencyToken']) ? $context['CurrencyToken'] : null), "1");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OffEachItem", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option ";
        // line 53
        if ($this->getAttribute((isset($context['coupon']) ? $context['coupon'] : null), "coupontype", array(), "any") == 1) {
            echo "selected=\"selected\"";
        }
        echo " value=\"1\">% ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OffEachItem", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 55
        echo getLang("DiscountAmount");
        echo "', '";
        echo getLang("DiscountAmountHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 61
        echo getLang("ExpiryDate");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input class=\"plain\" id=\"dc1\" value=\"";
        // line 64
        echo twig_safe_filter((isset($context['ExpiryDate']) ? $context['ExpiryDate'] : null));
        echo "\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t&nbsp;<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 65
        echo getLang("ExpiryDate");
        echo "', '";
        echo getLang("ExpiryDateHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 71
        echo getLang("MinimumPurchase");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 74
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" id=\"couponminpurchase\" name=\"couponminpurchase\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['MinPurchase']) ? $context['MinPurchase'] : null));
        echo "\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 75
        echo getLang("MinimumPurchase");
        echo "', '";
        echo getLang("MinimumPurchaseHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 81
        echo getLang("Enabled");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"couponenabled\" name=\"couponenabled\" value=\"ON\" ";
        // line 84
        echo twig_safe_filter((isset($context['Enabled']) ? $context['Enabled'] : null));
        echo "> <label for=\"couponenabled\">";
        echo getLang("YesCouponEnabled");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 90
        echo getLang("CouponMaxUses");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponmaxuses\" name=\"couponmaxuses\" class=\"Field50\" value=\"";
        // line 93
        echo twig_safe_filter((isset($context['MaxUses']) ? $context['MaxUses'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 94
        echo getLang("CouponMaxUses");
        echo "', '";
        echo getLang("CouponMaxUsesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 101
        echo getLang("CouponAppliesTo");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 105
        echo getLang("AppliesTo");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"padding-bottom: 3px;\">
\t\t\t\t\t\t<input onclick=\"ToggleUsedFor(0)\" type=\"radio\" id=\"usedforcat\" name=\"usedfor\" value=\"categories\" ";
        // line 108
        echo twig_safe_filter((isset($context['UsedForCat']) ? $context['UsedForCat'] : null));
        echo "> <label for=\"usedforcat\">";
        echo getLang("CouponAppliesToCategories");
        echo "</label><br />
\t\t\t\t\t\t<div id=\"usedforcatdiv\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t<select multiple=\"multiple\" size=\"12\" name=\"catids[]\" id=\"catids\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 111
        echo twig_safe_filter((isset($context['AllCategoriesSelected']) ? $context['AllCategoriesSelected'] : null));
        echo ">";
        echo getLang("AllCategories");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 112
        echo twig_safe_filter((isset($context['CategoryList']) ? $context['CategoryList'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 114
        echo getLang("ChooseCategories");
        echo "', '";
        echo getLang("ChooseCategoriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"clear: left;\" />
\t\t\t\t\t\t<input onclick=\"ToggleUsedFor(1)\" type=\"radio\" id=\"usedforprod\" name=\"usedfor\" value=\"products\"> <label for=\"usedforprod\">";
        // line 118
        echo getLang("CouponAppliesToProducts");
        echo "</label><br />
\t\t\t\t\t\t<div id=\"usedforproddiv\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t<select size=\"12\" name=\"products\" id=\"ProductSelect\" class=\"Field250\" onchange=\"\$('#ProductRemoveButton').attr('disabled', false);\">
\t\t\t\t\t\t\t\t";
        // line 121
        echo twig_safe_filter((isset($context['SelectedProducts']) ? $context['SelectedProducts'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"Field250\" style=\"text-align: left;\">
\t\t\t\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 125
        echo getLang("CouponRemoveSelected");
        echo "\" id=\"ProductRemoveButton\" disabled=\"disabled\" class=\"FormButton\" style=\"width: 125px;\" onclick=\"removeFromProductSelect('ProductSelect', 'prodids');\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 127
        echo getLang("CouponAddProduct");
        echo "\" class=\"FormButton\" style=\"width: 125px;\" onclick=\"openProductSelect('coupon', 'ProductSelect', 'prodids');\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prodids\" id=\"prodids\" class=\"Field250\" value=\"";
        // line 128
        echo twig_safe_filter((isset($context['ProductIds']) ? $context['ProductIds'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
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
        // line 141
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 142
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t</td>
\t\t</tr>
\t</table>

\t</div>
\t</form>

\t<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t<input type=\"text\" id=\"dc2\" name=\"dc2\" style=\"display:none\">

\t<script type=\"text/javascript\">

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 161
        echo getLang("ConfirmCancelCoupon");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewCoupons\";
\t\t}

\t\tfunction CheckCouponForm()
\t\t{
\t\t\tvar couponname = document.getElementById(\"couponname\");
\t\t\tvar usedforcatdiv = document.getElementById(\"usedforcatdiv\");
\t\t\tvar usedforproddiv = document.getElementById(\"usedforproddiv\");
\t\t\tvar catids = document.getElementById(\"catids\");
\t\t\tvar prodids = document.getElementById(\"prodids\");
\t\t\tvar da = document.getElementById(\"couponamount\");
\t\t\tvar mp = document.getElementById(\"couponminpurchase\");
\t\t\tvar dc1 = document.getElementById(\"dc1\");
\t\t\tvar ce = document.getElementById(\"couponexpires\");

\t\t\tce.value = dc1.value;

\t\t\tif(\$('#couponcode').val() == '') {
\t\t\t\talert('";
        // line 180
        echo getLang("EnterCouponCode");
        echo "');
\t\t\t\t\$('#couponcode').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(couponname.value == \"\") {
\t\t\t\talert(\"";
        // line 186
        echo getLang("EnterCouponName");
        echo "\");
\t\t\t\tcouponname.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(usedforcatdiv.style.display == \"\") {
\t\t\t\tif(catids.selectedIndex == -1) {
\t\t\t\t\talert(\"";
        // line 193
        echo getLang("ChooseCouponCategory");
        echo "\");
\t\t\t\t\tcatids.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(usedforproddiv.style.display == \"\") {
\t\t\t\tif(prodids.value == \"\") {
\t\t\t\t\talert(\"";
        // line 201
        echo getLang("EnterCouponProductId");
        echo "\");
\t\t\t\t\tprodids.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(isNaN(parseInt(da.value)))
\t\t\t{
\t\t\t\talert(\"";
        // line 209
        echo getLang("EnterValidAmount");
        echo "\");
\t\t\t\tda.focus();
\t\t\t\tda.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tm = mp.value.replace(\"";
        // line 215
        echo twig_safe_filter((isset($context['CurrencyToken']) ? $context['CurrencyToken'] : null));
        echo "\", \"\");

\t\t\tif(isNaN(m) && m != \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 219
        echo getLang("EnterValidMinPrice");
        echo "\");
\t\t\t\tmp.focus();
\t\t\t\tmp.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}

\t\tfunction ToggleUsedFor(Which) {
\t\t\tvar usedforcatdiv = document.getElementById(\"usedforcatdiv\");
\t\t\tvar usedforproddiv = document.getElementById(\"usedforproddiv\");
\t\t\tvar usedforcat = document.getElementById(\"usedforcat\");
\t\t\tvar usedforprod = document.getElementById(\"usedforprod\");

\t\t\tif(Which == 0) {
\t\t\t\tusedforcat.checked = true;
\t\t\t\tusedforcatdiv.style.display = \"\";
\t\t\t\tusedforproddiv.style.display = \"none\";
\t\t\t}
\t\t\telse {
\t\t\t\tusedforprod.checked = true;
\t\t\t\tusedforcatdiv.style.display = \"none\";
\t\t\t\tusedforproddiv.style.display = \"\";
\t\t\t}
\t\t}

\t\t";
        // line 247
        echo twig_safe_filter((isset($context['ToggleUsedFor']) ? $context['ToggleUsedFor'] : null));
        echo "

\t</script>
";
    }

}
