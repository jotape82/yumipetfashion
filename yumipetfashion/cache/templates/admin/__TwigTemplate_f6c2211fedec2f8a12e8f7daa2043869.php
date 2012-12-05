<?php

/* stats.orders.tpl */
class __TwigTemplate_f6c2211fedec2f8a12e8f7daa2043869 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=viewOrdStats\" name=\"frmStats\" id=\"frmStats\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("OrderStatistics");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("OrderStatsIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 18
        echo getLang("OrdersByDate");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 19
        echo getLang("OrdersByNumSold");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        // line 20
        echo getLang("OrdersByRevenue");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab3\" onclick=\"ShowTab(3)\">";
        // line 21
        echo getLang("SalesTaxReport");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab4\" onclick=\"ShowTab(4)\">";
        // line 22
        echo getLang("OrdersByAbandon");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<br />
\t\t\t<div id=\"exportbutton\" style=\"float: right; overflow: hidden; display: none;\">
\t\t\t\t<input type=\"button\" value=\"";
        // line 30
        echo getLang("Export");
        echo "\" />
\t\t\t</div>
\t\t\t<div id=\"introText\" style=\"padding:0px 0px 5px 10px\" class=\"Text\"></div>
\t\t\t<div id=\"taxTotals\" style=\"display: none; padding:5px 0px 5px 10px\">
\t\t\t\t<div class=\"MessageBox MessageBoxInfo\">
\t\t\t\t\t";
        // line 35
        echo twig_safe_filter((isset($context['SalesTaxSummary']) ? $context['SalesTaxSummary'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"abandonedTotals\" style=\"display:none; padding:5px 0px 5px 10px\">
\t\t\t\t<div class=\"MessageBox MessageBoxInfo\" style=\"display:none;\">
\t\t\t\t\t<!-- to be populated by js -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"padding:5px 0px 5px 10px\" class=\"Text FloatLeft\">
\t\t\t\t<table border=0 cellspacing=0 cellpadding=0>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">";
        // line 49
        echo getLang("DateRange");
        echo ":</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"Calendar[DateType]\" id=\"Calendar\" class=\"CalendarSelect\" onchange=\"doCustomDate(this, 7)\">
\t\t\t\t\t\t\t\t<option value=\"Today\">";
        // line 52
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Yesterday\">";
        // line 53
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last24Hours\">";
        // line 54
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last7Days\">";
        // line 55
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last30Days\">";
        // line 56
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ThisMonth\">";
        // line 57
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"LastMonth\">";
        // line 58
        echo getLang("LastMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"AllTime\" SELECTED>";
        // line 59
        echo getLang("AllTime");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Custom\">";
        // line 60
        echo getLang("Custom");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">
\t\t\t\t\t\t\t<span id=customDate7 style=\"display:none\">&nbsp;
\t\t\t\t\t\t\t<select name=\"Calendar[From][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['OverviewFromDays']) ? $context['OverviewFromDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_safe_filter((isset($context['OverviewFromMonths']) ? $context['OverviewFromMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 72
        echo twig_safe_filter((isset($context['OverviewFromYears']) ? $context['OverviewFromYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<span class=body>";
        // line 74
        echo getLang("To1");
        echo "</span>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 76
        echo twig_safe_filter((isset($context['OverviewToDays']) ? $context['OverviewToDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 79
        echo twig_safe_filter((isset($context['OverviewToMonths']) ? $context['OverviewToMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 82
        echo twig_safe_filter((isset($context['OverviewToYears']) ? $context['OverviewToYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"ListByCol\" style=\"background: #eee; padding: 3px 5px; display: none;\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t<td class=\"ListByCol\" style=\"background: #eee; display: none;\">List by:</td>
\t\t\t\t\t\t<td class=\"ListByCol\" style=\"background: #eee; padding: 3px 5px; display: none;\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"TaxListBy\" id=\"TaxListBy\">
\t\t\t\t\t\t\t\t<option value=\"Day\" ";
        // line 91
        echo twig_safe_filter((isset($context['TaxListByDay']) ? $context['TaxListByDay'] : null));
        echo ">";
        echo getLang("Day");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Month\" ";
        // line 92
        echo twig_safe_filter((isset($context['TaxListByMonth']) ? $context['TaxListByMonth'] : null));
        echo ">";
        echo getLang("Month");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Year\" ";
        // line 93
        echo twig_safe_filter((isset($context['TaxListByYear']) ? $context['TaxListByYear'] : null));
        echo ">";
        echo getLang("Year");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px; ";
        // line 96
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/vendor.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; ";
        // line 99
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\">";
        echo getLang("Vendor");
        echo ":</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px; ";
        // line 100
        echo twig_safe_filter((isset($context['HideVendorList']) ? $context['HideVendorList'] : null));
        echo "\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"vendorId\">
\t\t\t\t\t\t\t\t";
        // line 102
        echo twig_safe_filter((isset($context['VendorSelect']) ? $context['VendorSelect'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\"><input type=\"submit\" value=\"Go\" class=\"Text\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div0\" style=\"padding-top:10px\" class=\"text\">
\t\t\t\t<center>
\t\t\t\t\t<strong>";
        // line 111
        echo twig_safe_filter((isset($context['ByDateChartTitle']) ? $context['ByDateChartTitle'] : null));
        echo " <span style=\"display:";
        echo twig_safe_filter((isset($context['HideNoAdvancedStatsMessage']) ? $context['HideNoAdvancedStatsMessage'] : null));
        echo "; color:#CACACA\"><br />(";
        echo getLang("NoOrderData2Days");
        echo ")</span></strong>
\t\t\t\t</center>
\t\t\t\t<div id=\"flashcontent\" style=\"width: 100%; clear: both;\">

\t\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\" src=\"includes/amcharts/swfobject.js?";
        // line 116
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 119
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/amline/amline.swf\", \"amline\", \"98%\", \"430\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 120
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 121
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/overviewgeneral.xml\"));
\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 122
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=overviewStatsData&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "&vendorId=";
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "\"));
\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#000000\");
\t\t\t\t\t\tso.write(\"flashcontent\");
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t<div id=\"ordersByDateGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"ordersByItemsSoldGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div2\" style=\"padding-top:10px; padding-left:10px; clear: both;\" class=\"text\">
\t\t\t\t<table width=\"100%\" border=\"0\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"30%\" valign=\"top\" class=\"text\">
\t\t\t\t\t\t\t<div id=\"ordersByRevenueGrid\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td width=\"70%\" valign=\"top\" nowrap style=\"padding-left:10px\" class=\"text\">
\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t<strong>";
        // line 143
        echo twig_safe_filter((isset($context['ByRevenueChartTitle']) ? $context['ByRevenueChartTitle'] : null));
        echo "</strong>
\t\t\t\t\t\t\t</center>
\t\t\t\t\t\t\t<div id=\"flashcontent1\" style=\"width: 100%; clear: both;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\tvar so = new SWFObject(\"includes/amcharts/ampie.swf\", \"ampie\", \"100%\", \"600\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"path\", \"includes/amcharts/\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"includes/amcharts/ordersbyrevenue.xml\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"index.php?ToDo=ordStatsByRevenueData&from=";
        // line 152
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "&vendorId=";
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#000000\");
\t\t\t\t\t\t\t\t\tso.write(\"flashcontent1\");
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div3\" style=\"padding-top:10px; padding-left:10px; clear: both;\" class=\"text\">
\t\t\t\t<div id=\"taxByDateGrid\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"div4\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"ordersByAbandonGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tvar ordersPerPage = 20;

\t\tvar ordersByDateCurrentPage = 1;
\t\tvar ordersByDateFromLink = false;
\t\tvar ordersByDateSortField = '';
\t\tvar ordersByDateSortOrder = '';

\t\tvar ordersByItemsSoldCurrentPage = 1;
\t\tvar ordersByItemsSoldFromLink = false;
\t\tvar ordersByItemsSoldLoaded = false;
\t\tvar ordersByItemsSoldSortField = '';
\t\tvar ordersByItemsSoldSortOrder = '';

\t\tvar ordersByRevenueLoaded = false;

\t\tvar ordersByAbandonCurrentPage = 1;
\t\tvar ordersByAbandonFromLink = true;
\t\tvar ordersByAbandonLoaded = false;
\t\tvar ordersByAbandonSortField = '';
\t\tvar ordersByAbandonSortOrder = '';

\t\tvar taxPerPage = 20;
\t\tvar taxByDateLoaded = false;
\t\tvar taxByDateFromLink = false;
\t\tvar taxByDateCurrentPage = 1;
\t\tvar taxByDateSortField = '';
\t\tvar taxByDateSortOrder = '';

\t\tfunction ShowTab(T) {

\t\t\ti = 0;

\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;

\t\t\t\$(\".ListByCol\").hide();
\t\t\t\$(\"#exportbutton\").hide();
\t\t\t\$(\"#taxTotals\").hide();
\t\t\t\$(\"#abandonedTotals\").hide();

\t\t\t// What should the intro text be?
\t\t\tswitch(T) {
\t\t\t\tcase 0: {
\t\t\t\t\t\$('#introText').html('";
        // line 228
        echo getLang("OrdersByDateIntro");
        echo "');
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 1: {
\t\t\t\t\t\$('#introText').html('";
        // line 232
        echo getLang("OrdersByItemsSoldIntro");
        echo "');

\t\t\t\t\tif(!ordersByItemsSoldLoaded) {
\t\t\t\t\t\tLoadOrdersByItemsSoldGrid();
\t\t\t\t\t\tordersByItemsSoldLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;

\t\t\t\t}
\t\t\t\tcase 2: {
\t\t\t\t\t\$('#introText').html('";
        // line 242
        echo getLang("OrdersByRevenueIntro");
        echo "');

\t\t\t\t\tif(!ordersByRevenueLoaded) {
\t\t\t\t\t\tLoadOrdersByRevenueGrid();
\t\t\t\t\t\tordersByRevenueLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 3: {
\t\t\t\t\t\$('#introText').html('";
        // line 251
        echo getLang("SalesTaxIntro");
        echo "');
\t\t\t\t\t\$(\".ListByCol\").show();
\t\t\t\t\t\$(\"#exportbutton\").show();
\t\t\t\t\t\$(\"#taxTotals\").show();

\t\t\t\t\tif(!taxByDateLoaded) {
\t\t\t\t\t\tLoadTaxByDateGrid();
\t\t\t\t\t\ttaxByDateLoaded = true;
\t\t\t\t\t}

\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase 4: {
\t\t\t\t\t\$('#introText').html('";
        // line 264
        echo getLang("OrdersByAbandonIntro");
        echo "');
\t\t\t\t\t\$('#exportbutton').show();
\t\t\t\t\t\$(\"#abandonedTotals\").show();

\t\t\t\t\tif(!ordersByAbandonLoaded) {
\t\t\t\t\t\tLoadOrdersByAbandonGrid();
\t\t\t\t\t\tordersByAbandonLoaded = true;
\t\t\t\t\t}
\t\t\t\t\tbreak;

\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction ChangeOrdersByDatePerPage(OrdersPerPage) {
\t\t\t// Change how many orders are shown per page
\t\t\tordersPerPage = OrdersPerPage;
\t\t\tordersByDateCurrentPage = 1;
\t\t\tordersByDateFromLink = true;
\t\t\tLoadOrdersByDateGrid();
\t\t}

\t\tfunction ChangeOrdersByDatePage(Page) {
\t\t\t// Change which page of orders we're viewing
\t\t\tordersByDateCurrentPage = Page;
\t\t\tordersByDateFromLink = true;
\t\t\tLoadOrdersByDateGrid();
\t\t}

\t\tfunction SortOrdersByDate(field, order) {
\t\t\tordersByDateSortField = field;
\t\t\tordersByDateSortOrder = order;
\t\t\tordersByDateFromLink = true;
\t\t\tLoadOrdersByDateGrid();
\t\t}

\t\tfunction LoadOrdersByDateGrid() {
\t\t\t// Load the orders and jump to a specific page
\t\t\tjQuery.ajax({url: 'index.php?ToDo=ordStatsByDateGrid&FromLink='+ordersByDateFromLink+'&vendorId=";
        // line 302
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+ordersByDateCurrentPage+'&Show='+ordersPerPage+'&SortBy='+ordersByDateSortField+'&SortOrder='+ordersByDateSortOrder,
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$('#ordersByDateGrid').html(data);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction LoadOrdersByItemsSoldGrid() {
\t\t\t// Load orders by items sold
\t\t\tjQuery.ajax({url: 'index.php?ToDo=ordStatsByItemsSoldGrid&FromLink='+ordersByItemsSoldFromLink+'&vendorId=";
        // line 312
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+ordersByItemsSoldCurrentPage+'&Show='+ordersPerPage+'&SortBy='+ordersByItemsSoldSortField+'&SortOrder='+ordersByItemsSoldSortOrder,
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$('#ordersByItemsSoldGrid').html(data);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction LoadOrdersByRevenueGrid() {
\t\t\t// Load orders by revenue
\t\t\tjQuery.ajax({url: 'index.php?ToDo=ordStatsByRevenueGrid&vendorId=";
        // line 322
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "',
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$('#ordersByRevenueGrid').html(data);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction ChangeOrdersByItemsSoldPerPage(OrdersPerPage) {
\t\t\t// Change how many orders are shown per page
\t\t\tordersPerPage = OrdersPerPage;
\t\t\tordersByItemsSoldCurrentPage = 1;
\t\t\tordersByItemsSoldFromLink = true;
\t\t\tLoadOrdersByItemsSoldGrid();
\t\t}

\t\tfunction ChangeOrdersByItemsSoldPage(Page) {
\t\t\t// Change which page of orders we're viewing
\t\t\tordersByItemsSoldCurrentPage = Page;
\t\t\tordersByItemsSoldFromLink = true;
\t\t\tLoadOrdersByItemsSoldGrid();
\t\t}

\t\tfunction SortOrdersByItemsSold(field, order) {
\t\t\tordersByItemsSoldSortField = field;
\t\t\tordersByItemsSoldSortOrder = order;
\t\t\tordersByItemsSoldFromLink = true;
\t\t\tLoadOrdersByItemsSoldGrid();
\t\t}

\t\tfunction ChangeOrdersByAbandonPerPage(PerPage) {
\t\t\t// Change how many abandon records are shown per page
\t\t\tordersPerPage = PerPage;
\t\t\tordersByAbandonCurrentPage = 1;
\t\t\tordersByAbandonFromLink = true;
\t\t\tLoadOrdersByAbandonGrid();
\t\t}

\t\tfunction ChangeOrdersByAbandonPage(Page) {
\t\t\t// Change which page of abandon we're viewing
\t\t\tordersByAbandonCurrentPage = Page;
\t\t\tordersByAbandonFromLink = true;
\t\t\tLoadOrdersByAbandonGrid();
\t\t}

\t\tfunction LoadOrdersByAbandonGrid() {
\t\t\t// Load orders by items sold
\t\t\tjQuery.ajax({url: 'index.php?ToDo=ordStatsByAbandonGrid&FromLink='+ordersByAbandonFromLink+'&vendorId=";
        // line 369
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+ordersByAbandonCurrentPage+'&Show='+ordersPerPage+'&SortBy='+ordersByAbandonSortField+'&SortOrder='+ordersByAbandonSortOrder,
\t\t\t\t\tsuccess: function(data) {
\t\t\t\t\t\t\$('#ordersByAbandonGrid').html(data);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction SortOrdersByAbandon(field, order) {
\t\t\tordersByAbandonSortField = field;
\t\t\tordersByAbandonSortOrder = order;
\t\t\tordersByAbandonFromLink = true;
\t\t\tLoadOrdersByAbandonGrid();
\t\t}

\t\t// ======================

\t\tfunction ChangeTaxByDatePerPage(PerPage) {
\t\t\t// Change how many tax records are shown per page
\t\t\ttaxPerPage = PerPage;
\t\t\ttaxByDateCurrentPage = 1;
\t\t\ttaxByDateFromLink = true;
\t\t\tLoadTaxByDateGrid();
\t\t}

\t\tfunction ChangeTaxByDatePage(Page) {
\t\t\t// Change which page of tax we're viewing
\t\t\ttaxByDateCurrentPage = Page;
\t\t\ttaxByDateFromLink = true;
\t\t\tLoadTaxByDateGrid();
\t\t}

\t\tfunction LoadTaxByDateGrid() {
\t\t\t// Load the orders and jump to a specific page
\t\t\tjQuery.ajax({url: 'index.php?ToDo=taxStatsByDateGrid&FromLink='+taxByDateFromLink+'&vendorId=";
        // line 403
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+taxByDateCurrentPage+'&Show='+taxPerPage+'&TaxListBy=";
        echo twig_safe_filter((isset($context['TaxListBy']) ? $context['TaxListBy'] : null));
        echo "&SortBy='+taxByDateSortField+'&SortOrder='+taxByDateSortOrder,
\t\t\t\t\t success: function(data) {
\t\t\t\t\t\t\$('#taxByDateGrid').html(data);
\t\t\t\t\t }
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction SortTaxStats(field, order)\t{
\t\t\ttaxByDateCurrentPage = 1;
\t\t\ttaxByDateSortField = field;
\t\t\ttaxByDateSortOrder = order;
\t\t\ttaxByDateFromLink = true;
\t\t\tLoadTaxByDateGrid();
\t\t}

\t\t\$(\"#exportbutton input:button\").click(function() {
\t\t\tvar currentTab = \$(\"#currentTab\").val();
\t\t\tswitch(currentTab) {
\t\t\t\tcase '3': {
\t\t\t\t\tdocument.location = 'index.php?ToDo=startExport&t=salestax&vendorId=";
        // line 423
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&TaxListBy=";
        echo twig_safe_filter((isset($context['TaxListBy']) ? $context['TaxListBy'] : null));
        echo "';
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tcase '4': {
\t\t\t\t\tdocument.location = 'index.php?ToDo=startExport&t=abandonorder&vendorId=";
        // line 427
        echo twig_safe_filter((isset($context['VendorId']) ? $context['VendorId'] : null));
        echo "&From=";
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "';
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t});

\t\t\$(document).ready(function() {

\t\t\tShowTab(";
        // line 435
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t\t// Which date range is selected?
\t\t\tvar current_date = '";
        // line 438
        echo twig_safe_filter((isset($context['CurrentDate']) ? $context['CurrentDate'] : null));
        echo "';
\t\t\tvar Calendar = g('Calendar');

\t\t\tfor(i = 0; i < Calendar.options.length; i++) {
\t\t\t\tif(Calendar.options[i].value == current_date) {
\t\t\t\t\tCalendar.options[i].selected = true;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}

\t\t\t// Is it custom? If so, show the custom date ranges
\t\t\tif(current_date == 'Custom') {
\t\t\t\tdoCustomDate(g('Calendar'), 7);
\t\t\t}

\t\t\t// Load the orders table for the selected date range
\t\t\tLoadOrdersByDateGrid();
\t\t});

\t</script>
";
    }

}
