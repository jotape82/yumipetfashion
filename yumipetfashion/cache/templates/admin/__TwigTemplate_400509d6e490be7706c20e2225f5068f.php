<?php

/* banner.form.tpl */
class __TwigTemplate_400509d6e490be7706c20e2225f5068f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" id=\"frmBanner\" method=\"post\">
\t<input type=\"hidden\" name=\"bannerId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['BannerId']) ? $context['BannerId'] : null));
        echo "\">
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
        echo getLang("BannerIntro");
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
        echo getLang("NewBannerDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 24
        echo getLang("BannerName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"bannername\" name=\"bannername\" class=\"Field400\" value=\"";
        // line 27
        echo twig_safe_filter((isset($context['BannerName']) ? $context['BannerName'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 28
        echo getLang("BannerName");
        echo "', '";
        echo getLang("BannerNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 34
        echo getLang("BannerContent");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['WYSIWYG']) ? $context['WYSIWYG'] : null));
        echo "
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 38
        echo getLang("BannerContent");
        echo "', '";
        echo getLang("BannerContentHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 44
        echo getLang("BannerPage");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"bannerpage\" id=\"bannerpage1\" value=\"home_page\" ";
        // line 47
        echo twig_safe_filter((isset($context['IsHomePage']) ? $context['IsHomePage'] : null));
        echo " /> <label for=\"bannerpage1\">";
        echo getLang("BannerHomePage");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 48
        echo getLang("BannerPage");
        echo "', '";
        echo getLang("BannerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<input type=\"radio\" name=\"bannerpage\" id=\"bannerpage2\" value=\"category_page\" ";
        // line 51
        echo twig_safe_filter((isset($context['IsCategory']) ? $context['IsCategory'] : null));
        echo " /> <label for=\"bannerpage2\">";
        echo getLang("BannerCategoryPage");
        echo "</label><br />
\t\t\t\t\t\t\t<div id=\"page_category\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t\t<select name=\"bannercat\" id=\"bannercat\" class=\"Field200\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 54
        echo getLang("ChooseACategory");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 55
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" name=\"bannerpage\" id=\"bannerpage3\" value=\"brand_page\" ";
        // line 58
        echo twig_safe_filter((isset($context['IsBrand']) ? $context['IsBrand'] : null));
        echo " /> <label for=\"bannerpage3\">";
        echo getLang("BannerBrandPage");
        echo "</label><br />
\t\t\t\t\t\t\t<div id=\"page_brand\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t\t<select name=\"bannerbrand\" id=\"bannerbrand\" class=\"Field200\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 61
        echo getLang("ChooseABrand");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 62
        echo twig_safe_filter((isset($context['BrandOptions']) ? $context['BrandOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" name=\"bannerpage\" id=\"bannerpage4\" value=\"search_page\" ";
        // line 65
        echo twig_safe_filter((isset($context['IsSearch']) ? $context['IsSearch'] : null));
        echo " /> <label for=\"bannerpage4\">";
        echo getLang("BannerSearchPage");
        echo "</label><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 70
        echo getLang("BannerDateRange");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" id=\"bannerdate1\" name=\"bannerdate\" value=\"always\" ";
        // line 73
        echo twig_safe_filter((isset($context['IsAlwaysDate']) ? $context['IsAlwaysDate'] : null));
        echo "> <label for=\"bannerdate1\">";
        echo getLang("BannerDisplayAlways");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 74
        echo getLang("BannerDateRange");
        echo "', '";
        echo getLang("BannerDateRangeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<input type=\"radio\" id=\"bannerdate2\" name=\"bannerdate\" value=\"custom\" ";
        // line 77
        echo twig_safe_filter((isset($context['IsCustomDate']) ? $context['IsCustomDate'] : null));
        echo "> <label for=\"bannerdate2\">";
        echo getLang("BannerDisplayBetween");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr id=\"trCustomDate\" style=\"display:none\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"padding-left:25px\">
\t\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 88
        echo getLang("BannerFrom");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"from_day\" id=\"from_day\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 92
        echo twig_safe_filter((isset($context['FromDayOptions']) ? $context['FromDayOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select name=\"from_month\" id=\"from_month\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 95
        echo twig_safe_filter((isset($context['FromMonthOptions']) ? $context['FromMonthOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select name=\"from_year\" id=\"from_year\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo twig_safe_filter((isset($context['FromYearOptions']) ? $context['FromYearOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td align=\"right\">
\t\t\t\t\t\t\t\t\t";
        // line 104
        echo getLang("BannerTo");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select name=\"to_day\" id=\"to_day\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo twig_safe_filter((isset($context['ToDayOptions']) ? $context['ToDayOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select name=\"to_month\" id=\"to_month\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 111
        echo twig_safe_filter((isset($context['ToMonthOptions']) ? $context['ToMonthOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<select name=\"to_year\" id=\"to_year\" class=\"Field70\">
\t\t\t\t\t\t\t\t\t\t";
        // line 114
        echo twig_safe_filter((isset($context['ToYearOptions']) ? $context['ToYearOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 123
        echo getLang("Visible");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"bannerstatus\" name=\"bannerstatus\" value=\"ON\" ";
        // line 126
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "> <label for=\"bannerstatus\">";
        echo getLang("YesBannerVisible");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 131
        echo getLang("BannerLocation");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"bannerloc\" id=\"bannerloc\" class=\"Field150\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 135
        echo getLang("ChooseALocation");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"top\" ";
        // line 136
        echo twig_safe_filter((isset($context['IsLocationTop']) ? $context['IsLocationTop'] : null));
        echo ">";
        echo getLang("TopOfPage");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"bottom\" ";
        // line 137
        echo twig_safe_filter((isset($context['IsLocationBottom']) ? $context['IsLocationBottom'] : null));
        echo ">";
        echo getLang("BottomOfPage");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 139
        echo getLang("BannerLocation");
        echo "', '";
        echo getLang("BannerLocationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 145
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Sep\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>

\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tvar selected_page = '';

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 164
        echo getLang("ConfirmCancelBanner");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewBanners\";
\t\t}

\t\tfunction CheckBannerForm() {
\t\t\treturn false;
\t\t}

\t\tfunction ToggleDate(DateType) {
\t\t\tif(DateType == \"custom\") {
\t\t\t\t\$(\"#trCustomDate\").css(\"display\", \"\");
\t\t\t}
\t\t\telse {
\t\t\t\t\$(\"#trCustomDate\").css(\"display\", \"none\");
\t\t\t}
\t\t}

\t\t// Hide the location options on page load
\t\t\$(document).ready(function() {
\t\t\t\$('#page_category').css('display', 'none');
\t\t\t\$('#page_brand').css('display', 'none');

\t\t\t// Do we need to show the custom date range?
\t\t\t";
        // line 187
        echo twig_safe_filter((isset($context['ShowCustomDate']) ? $context['ShowCustomDate'] : null));
        echo "

\t\t\t// Do we need to show the category dropdown?
\t\t\t";
        // line 190
        echo twig_safe_filter((isset($context['ShowCategory']) ? $context['ShowCategory'] : null));
        echo "

\t\t\t// Do we need to show the brand dropdown?
\t\t\t";
        // line 193
        echo twig_safe_filter((isset($context['ShowBrand']) ? $context['ShowBrand'] : null));
        echo "

\t\t\t";
        // line 195
        echo twig_safe_filter((isset($context['SelectedJS']) ? $context['SelectedJS'] : null));
        echo "
\t\t});

\t\t\$('#bannerpage1').click(function() {
\t\t\t\$('#page_category').css('display', 'none');
\t\t\t\$('#page_brand').css('display', 'none');
\t\t});

\t\t\$('#bannerpage2').click(function() {
\t\t\t\$('#page_category').css('display', '');
\t\t\t\$('#bannercat').focus();
\t\t\t\$('#page_brand').css('display', 'none');
\t\t});

\t\t\$('#bannerpage3').click(function() {
\t\t\t\$('#page_brand').css('display', '');
\t\t\t\$('#bannerbrand').focus();
\t\t\t\$('#page_category').css('display', 'none');
\t\t});

\t\t\$('#bannerpage4').click(function() {
\t\t\t\$('#page_category').css('display', 'none');
\t\t\t\$('#page_brand').css('display', 'none');
\t\t});

\t\t\$('#bannerdate1').click(function() {
\t\t\t\$('#trCustomDate').css('display', 'none');
\t\t});

\t\t\$('#bannerdate2').click(function() {
\t\t\t\$('#trCustomDate').css('display', '');
\t\t});

\t\t// Save the page type when it's changed
\t\t\$('#bannerpage1').click(function() {
\t\t\tselected_page = \$('#bannerpage1').val();
\t\t});

\t\t\$('#bannerpage2').click(function() {
\t\t\tselected_page = \$('#bannerpage2').val();
\t\t});

\t\t\$('#bannerpage3').click(function() {
\t\t\tselected_page = \$('#bannerpage3').val();
\t\t});

\t\t\$('#bannerpage4').click(function() {
\t\t\tselected_page = \$('#bannerpage4').val();
\t\t});

\t\t// Check the form when it's submitted
\t\t\$('#frmBanner').submit(function() {
\t\t\tif(\$('#bannername').val() == '') {
\t\t\t\talert('";
        // line 248
        echo getLang("EnterBannerName");
        echo "');
\t\t\t\t\$('#bannername').focus();
\t\t\t\t\$('#bannername').select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tswitch(selected_page) {
\t\t\t\tcase 'category_page': {
\t\t\t\t\tif(\$('#bannercat :selected').val() == '') {
\t\t\t\t\t\talert('";
        // line 257
        echo getLang("BannerChooseCat");
        echo "');
\t\t\t\t\t\t\$('#bannercat').focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 'brand_page': {
\t\t\t\t\tif(\$('#bannerbrand :selected').val() == '') {
\t\t\t\t\t\talert('";
        // line 265
        echo getLang("BannerChooseBrand");
        echo "');
\t\t\t\t\t\t\$('#bannerbrand').focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase '': {
\t\t\t\t\talert('";
        // line 272
        echo getLang("ChooseBannerShow");
        echo "');
\t\t\t\t\treturn false;

\t\t\t\t}
\t\t\t}

\t\t\tif(\$('#bannerloc :selected').val() == '') {
\t\t\t\talert('";
        // line 279
        echo getLang("ChooseBannerLocation");
        echo "');
\t\t\t\t\$('#bannerloc').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t});

\t</script>
";
    }

}
