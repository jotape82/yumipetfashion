<?php

/* shipments.manage.tpl */
class __TwigTemplate_aea3d6de6d0abbc5f670633aae4157d1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"BodyContainer\">
\t<table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td class=\"Heading1\">
\t\t\t";
        // line 5
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color: #005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo "
\t\t\t\t<img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" />
\t\t\t</a>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\" colspan=\"2\">
\t\t\t<p>";
        // line 12
        echo getLang("ShipmentsIntro");
        echo "</p>
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>
\t\t\t\t<input type=\"button\" value=\"";
        // line 19
        echo getLang("DeleteSelected");
        echo "\" onclick=\"return Shipments.DeleteSelected();\" class=\"SmallButton\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t<input type=\"button\" value=\"";
        // line 20
        echo getLang("ExportTheseShipments");
        echo "\" onclick=\"Shipments.Export()\" class=\"SmallButton\" ";
        echo twig_safe_filter((isset($context['DisableExport']) ? $context['DisableExport'] : null));
        echo " />
\t\t\t</p>
\t\t</td>
\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t<form action=\"index.php?ToDo=viewShipments";
        // line 24
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\">
\t\t\t\t<table style=\"";
        // line 25
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\" nowrap align=\"right\">
\t\t\t\t\t\t\t<input name=\"ToDo\" id=\"ToDo\" type=\"hidden\" value=\"viewShipments\" />
\t\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 29
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\" id=\"SearchQuery\" class=\"SearchBox\" style=\"width:150px\" />&nbsp;
\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\"  style=\"padding-left: 10px; vertical-align: top;\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t\t\t<a href=\"index.php?ToDo=searchShipments\">";
        // line 35
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t\t<span style=\"";
        // line 36
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">
\t\t\t\t\t\t\t\t| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewShipments\">";
        // line 37
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</form>
\t\t</td>
\t</tr>
\t<tr style=\"";
        // line 45
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t<td colspan=\"2\">
\t\t\t<form method=\"post\" id=\"shipmentsForm\" action=\"index.php?ToDo=deleteShipments\">
\t\t\t\t<div class=\"GridContainer\" id=\"GridContainer\">
\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['ShipmentDataGrid']) ? $context['ShipmentDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
</div>

<!-- Begin Custom Views Menu -->
<div id=\"ViewsMenu\" class=\"DropDownMenu DropShadow\" style=\"display: none; width:200px\">
\t<ul>
\t\t";
        // line 60
        echo twig_safe_filter((isset($context['CustomViews']) ? $context['CustomViews'] : null));
        echo "
\t</ul>
\t<hr />
\t<ul>
\t\t<li>
\t\t\t<a href=\"index.php?ToDo=createShipmentView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">
\t\t\t\t";
        // line 66
        echo getLang("CreateANewView");
        echo "\t\t\t</a>
\t\t</li>
\t\t<li style=\"";
        // line 69
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\">
\t\t\t<a onclick=\"\$('#ViewsMenu').hide(); Shipments.DeleteView('";
        // line 70
        echo twig_safe_filter((isset($context['CustomViewId']) ? $context['CustomViewId'] : null));
        echo "'); return false;\" href=\"#\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">
\t\t\t\t";
        // line 71
        echo getLang("DeleteThisView");
        echo "\t\t\t</a>
\t\t</li>
\t</ul>
</div>
<!-- End Custom Views Menu -->

<!-- Begin Export Shipments Box -->
<div id=\"exportBox\" style=\"display: none\">
\t<div class=\"ModalTitle\">
\t\t";
        // line 81
        echo getLang("Export");
        echo " ";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo "
\t</div>
\t<div class=\"ModalContent\">
\t\t<p>";
        // line 84
        echo getLang("ExportThickBoxIntro");
        echo "</p>
\t\t<p>";
        // line 85
        echo getLang("ChooseAFileFormat");
        echo "</p>

\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td><img width=\"16\" height=\"16\" hspace=\"5\" src=\"images/exportCsv.gif\" /></td>
\t\t\t\t<td><a onclick=\"\$.modal.close()\" href=\"index.php?ToDo=exportShipments&amp;format=csv";
        // line 90
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" style=\"color:#005FA3; font-weight:bold\">";
        echo getLang("ExportCSV");
        echo "</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><img width=\"16\" height=\"16\" hspace=\"5\" src=\"images/exportXml.gif\" /></td>
\t\t\t\t<td><a onclick=\"\$.modal.close()\" href=\"index.php?ToDo=exportShipments&amp;format=xml";
        // line 94
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" style=\"color:#005FA3; font-weight:bold\">";
        echo getLang("ExportXML");
        echo "</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<input type=\"button\" class=\"Submit\" value=\"";
        // line 99
        echo getLang("Cancel");
        echo "\" onclick=\"\$.modal.close()\" />
\t</div>
</div>
<!-- End Export Shipments Box -->

<script type=\"text/javascript\" src=\"script/shipments.js?";
        // line 104
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
\tlang.ConfirmDeleteCustomSearch = '";
        // line 106
        echo getLang("ConfirmDeleteCustomSearch");
        echo "';
\tlang.ConfirmDeleteShipments = \"";
        // line 107
        echo getLang("ConfirmDeleteShipments");
        echo "\";
\tlang.SelectOneMoreShipmentsDelete = \"";
        // line 108
        echo getLang("SelectOneMoreShipmentsDelete");
        echo "\";
</script>";
    }

}
