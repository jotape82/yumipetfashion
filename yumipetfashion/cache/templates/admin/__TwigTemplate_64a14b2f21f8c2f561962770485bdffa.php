<?php

/* stats.customers.tpl */
class __TwigTemplate_64a14b2f21f8c2f561962770485bdffa extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=viewCustStats\" name=\"frmStats\" id=\"frmStats\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("CustomerStatistics");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("CustomerStatsIntro");
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
        echo getLang("CustomersByDate");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 19
        echo getLang("RevenuePerCustomer");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<br />
\t\t\t<div id=\"introText\" style=\"padding:0px 0px 5px 10px\" class=\"Text\"></div>
\t\t\t<div style=\"padding:5px 0px 5px 10px\" class=\"Text FloatLeft\">
\t\t\t\t<table border=0 cellspacing=0 cellpadding=0>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">Date Range:</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t<select name=\"Calendar[DateType]\" id=\"Calendar\" class=\"CalendarSelect\" onchange=\"doCustomDate(this, 7)\">
\t\t\t\t\t\t\t\t<option value=\"Today\">";
        // line 36
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Yesterday\">";
        // line 37
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last24Hours\">";
        // line 38
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last7Days\">";
        // line 39
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Last30Days\">";
        // line 40
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ThisMonth\">";
        // line 41
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"LastMonth\">";
        // line 42
        echo getLang("LastMonth");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"AllTime\" SELECTED>";
        // line 43
        echo getLang("AllTime");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"Custom\">";
        // line 44
        echo getLang("Custom");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee;\">
\t\t\t\t\t\t\t<span id=customDate7 style=\"display:none\">&nbsp;
\t\t\t\t\t\t\t<select name=\"Calendar[From][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['OverviewFromDays']) ? $context['OverviewFromDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 53
        echo twig_safe_filter((isset($context['OverviewFromMonths']) ? $context['OverviewFromMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[From][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 56
        echo twig_safe_filter((isset($context['OverviewFromYears']) ? $context['OverviewFromYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<span class=body>";
        // line 58
        echo getLang("To1");
        echo "</span>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 60
        echo twig_safe_filter((isset($context['OverviewToDays']) ? $context['OverviewToDays'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_safe_filter((isset($context['OverviewToMonths']) ? $context['OverviewToMonths'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"Calendar[To][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['OverviewToYears']) ? $context['OverviewToYears'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</span>&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\"><input type=\"submit\" value=\"Go\" class=\"Text\" /></td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div0\" style=\"padding-top:10px\" class=\"text\">
\t\t\t\t<center>
\t\t\t\t\t<strong><span style=\"display:";
        // line 76
        echo twig_safe_filter((isset($context['HideNoAdvancedStatsMessage']) ? $context['HideNoAdvancedStatsMessage'] : null));
        echo "; color:#CACACA\"><br />(";
        echo getLang("NoOrderData2Days");
        echo ")</span></strong>
\t\t\t\t</center>
\t\t\t\t<div id=\"flashcontent\" style=\"width: 100%; clear: both;\">
\t\t\t\t</div>
\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/swfobject.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 83
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/amline/amline.swf\", \"amline\", \"98%\", \"430\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 84
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 85
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/customersbydate.xml\"));
\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 86
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=custStatsByDateData&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "\"));
\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#000000\");
\t\t\t\t\t\tso.write(\"flashcontent\");
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t<div id=\"customersByDateGrid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top:10px; padding-left:10px\" class=\"text\">
\t\t\t\t<div id=\"revenuePerCustomerGrid\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\tvar customersPerPage = 20;

\tvar customersByDateFromLink = false;
\tvar customersByDateCurrentPage = 1;
\tvar customersByDateSortField = '';
\tvar customersByDateSortOrder = '';

\tvar revenuePerCustomerLoaded = false;
\tvar revenuePerCustomerFromLink = false;
\tvar revenuePerCustomerCurrentPage = 1;
\tvar revenuePerCustomerSortField = '';
\tvar revenuePerCustomerSortOrder = '';

\tfunction ShowTab(T) {

\t\ti = 0;

\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\tdocument.getElementById(\"currentTab\").value = T;

\t\t// What should the intro text be?
\t\tswitch(T) {
\t\t\tcase 0: {
\t\t\t\t\$('#introText').html('";
        // line 137
        echo getLang("CustomersByDateIntro");
        echo "');
\t\t\t\tbreak;
\t\t\t}
\t\t\tcase 1: {
\t\t\t\t\$('#introText').html('";
        // line 141
        echo getLang("RevenuePerCustomerIntro");
        echo "');

\t\t\t\tif(!revenuePerCustomerLoaded) {
\t\t\t\t\tLoadRevenuePerCustomerGrid();
\t\t\t\t\trevenuePerCustomerLoaded = true;
\t\t\t\t}
\t\t\t\tbreak;

\t\t\t}
\t\t}
\t}

\tfunction ChangeCustomersByDatePerPage(CustomersPerPage) {
\t\t// Change how many customers are shown per page
\t\tcustomersPerPage = CustomersPerPage;
\t\tcustomersByDateCurrentPage = 1;
\t\tcustomersByDateFromLink = true;
\t\tLoadCustomersByDateGrid();
\t}

\tfunction ChangeCustomersByDatePage(Page) {
\t\t// Change which page of customers we're viewing
\t\tcustomersByDateCurrentPage = Page;
\t\tcustomersByDateFromLink = true;
\t\tLoadCustomersByDateGrid();
\t}

\tfunction SortCustomersByDate(field, order) {
\t\tcustomersByDateSortField = field;
\t\tcustomersByDateSortOrder = order;
\t\tcustomersByDateFromLink = true;
\t\tLoadCustomersByDateGrid();
\t}

\tfunction LoadCustomersByDateGrid() {
\t\t// Load the customers and jump to a specific page
\t\tjQuery.ajax({url: 'index.php?ToDo=custStatsByDateGrid&FromLink='+customersByDateFromLink+'&From=";
        // line 177
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+customersByDateCurrentPage+'&Show='+customersPerPage+'&SortBy='+customersByDateSortField+'&SortOrder='+customersByDateSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#customersByDateGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction LoadRevenuePerCustomerGrid() {
\t\t// Load revenue per customer
\t\tjQuery.ajax({url: 'index.php?ToDo=custStatsByRevenueGrid&FromLink='+revenuePerCustomerFromLink+'&From=";
        // line 187
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&To=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "&Page='+revenuePerCustomerCurrentPage+'&Show='+customersPerPage+'&SortBy='+revenuePerCustomerSortField+'&SortOrder='+revenuePerCustomerSortOrder,
\t\t\t     success: function(data) {
\t\t\t\t\$('#revenuePerCustomerGrid').html(data)
\t\t\t     }
\t\t\t}
\t\t);
\t}

\tfunction SortRevenuePerCustomer(field, order) {
\t\trevenuePerCustomerSortField = field;
\t\trevenuePerCustomerSortOrder = order;
\t\trevenuePerCustomerFromLink = true;
\t\tLoadRevenuePerCustomerGrid();
\t}

\tfunction ChangeRevenuePerCustomerPage(Page) {
\t\t// Change which page of orders we're viewing
\t\trevenuePerCustomerCurrentPage = Page;
\t\trevenuePerCustomerFromLink = true;
\t\tLoadRevenuePerCustomerGrid();
\t}


\tfunction ChangeCustomersByRevenuePerPage(CustomersPerPage) {
\t\t// Change how many customers are shown per page
\t\tcustomersPerPage = CustomersPerPage;
\t\trevenuePerCustomerCurrentPage = 1;
\t\trevenuePerCustomerFromLink = true;
\t\tLoadRevenuePerCustomerGrid();
\t}

\t\$(document).ready(function() {

\t\tShowTab(";
        // line 220
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t// Which date range is selected?
\t\tvar current_date = '";
        // line 223
        echo twig_safe_filter((isset($context['CurrentDate']) ? $context['CurrentDate'] : null));
        echo "';
\t\tvar Calendar = g('Calendar');

\t\tfor(i = 0; i < Calendar.options.length; i++) {
\t\t\tif(Calendar.options[i].value == current_date) {
\t\t\t\tCalendar.options[i].selected = true;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Is it custom? If so, show the custom date ranges
\t\tif(current_date == 'Custom') {
\t\t\tdoCustomDate(g('Calendar'), 7);
\t\t}
\t\t// Load the customers table for the selected date range
\t\tLoadCustomersByDateGrid();

\t});

\t</script>
";
    }

}
