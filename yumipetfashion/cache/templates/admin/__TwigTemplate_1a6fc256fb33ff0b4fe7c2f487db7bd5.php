<?php

/* Snippets/DashboardGettingStarted.html */
class __TwigTemplate_1a6fc256fb33ff0b4fe7c2f487db7bd5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"Heading1\">";
        echo getLang("Home");
        echo "</div>
";
        // line 2
        echo twig_safe_filter((isset($context['Messages']) ? $context['Messages'] : null));
        echo "
<div class=\"DashboardRightColumn\">
\t<div class=\"DashboardPanel DashboardPanelCurrentNotifications\" style=\"";
        // line 4
        echo twig_safe_filter((isset($context['HideNotificationsList']) ? $context['HideNotificationsList'] : null));
        echo "\">
\t\t<div class=\"DashboardPanelContent\">
\t\t\t<h3>";
        // line 6
        echo getLang("PendingItems");
        echo "</h3>
\t\t\t<ul>
\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['NotificationsList']) ? $context['NotificationsList'] : null));
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
\t
\t<div class=\"DashboardPanel DashboardPanelVideoWalkthrough\" style=\"";
        // line 13
        echo twig_safe_filter((isset($context['HideVideoWalkthrough']) ? $context['HideVideoWalkthrough'] : null));
        echo "\">
\t\t<div class=\"DashboardPanelContent\">
\t\t\t<h3>";
        // line 15
        echo getLang("VideoWalkthroughIntro");
        echo "</h3>
\t\t\t<div class=\"VideoList\">
\t\t\t\t<ul>
\t\t\t\t\t<li></li>
\t\t\t\t</ul>
\t\t\t\t<br class=\"Clear\" />
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\tlang.VideosUnavailable = \"";
        // line 25
        echo getLang("VideosUnavailable");
        echo "\";
\t\tlang.VideosUnavailableLater = \"";
        // line 26
        echo getLang("VideosUnavailableLater");
        echo "\";
\t</script>
</div>
<div class=\"DashboardLeftColumn\">
\t<div class=\"DashboardPanel DashboardPanelFeatured DashboardPanelGettingStarted\">
\t\t<div class=\"DashboardPanelContent\">
\t\t\t<a href=\"#\" class=\"ToggleLink GettingStartedToggleLink\" style=\"";
        // line 32
        echo twig_safe_filter((isset($context['HideToggleGettingStartedAtGlance']) ? $context['HideToggleGettingStartedAtGlance'] : null));
        echo "\">";
        echo getLang("SwitchToCommonTasks");
        echo "</a>
\t\t\t<h3>";
        // line 33
        echo getLang("GettingStartedIntro");
        echo "</h3>
\t\t\t<table class=\"WizardContent\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"ConfigureStoreSettings ";
        // line 36
        echo twig_safe_filter((isset($context['CompletedStepSettingsClass']) ? $context['CompletedStepSettingsClass'] : null));
        echo "\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewSettings&wizard=1\">";
        // line 37
        echo getLang("GettingStartedStoreSettings");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 38
        echo getLang("GettingStartedStoreSettingsDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 39
        echo twig_safe_filter((isset($context['HideCompletedStepSettings']) ? $context['HideCompletedStepSettings'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"DesignYourStore ";
        // line 41
        echo twig_safe_filter((isset($context['CompletedStepDesignClass']) ? $context['CompletedStepDesignClass'] : null));
        echo "\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewTemplates&wizard=1\">";
        // line 42
        echo getLang("GettingStartedDesignStore");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 43
        echo getLang("GettingStartedDesignStoreDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 44
        echo twig_safe_filter((isset($context['HideCompletedStepDesign']) ? $context['HideCompletedStepDesign'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"AddProducts ";
        // line 46
        echo twig_safe_filter((isset($context['CompletedStepProductsClass']) ? $context['CompletedStepProductsClass'] : null));
        echo " Last\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=addProduct&wizard=1\">";
        // line 47
        echo getLang("GettingStartedAddProducts");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 48
        echo getLang("GettingStartedAddProductsDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 49
        echo twig_safe_filter((isset($context['HideCompletedStepProducts']) ? $context['HideCompletedStepProducts'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"Last\">
\t\t\t\t\t<td class=\"PaymentMethods ";
        // line 53
        echo twig_safe_filter((isset($context['CompletedStepPaymentMethodsClass']) ? $context['CompletedStepPaymentMethodsClass'] : null));
        echo "\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewCheckoutSettings&wizard=1\">";
        // line 54
        echo getLang("GettingStartedPaymentMethods");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 55
        echo getLang("GettingStartedPaymentMethodsDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 56
        echo twig_safe_filter((isset($context['HideCompletedStepPaymentMethods']) ? $context['HideCompletedStepPaymentMethods'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"TaxSettings  ";
        // line 58
        echo twig_safe_filter((isset($context['CompletedStepTaxSettingsClass']) ? $context['CompletedStepTaxSettingsClass'] : null));
        echo "\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewTaxSettings&wizard=1\">";
        // line 59
        echo getLang("GettingStartedTaxSettings");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 60
        echo getLang("GettingStartedTaxSettingsDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 61
        echo twig_safe_filter((isset($context['HideCompletedStepTaxSettings']) ? $context['HideCompletedStepTaxSettings'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"ShippingOptions  ";
        // line 63
        echo twig_safe_filter((isset($context['CompletedStepShippingOptionsClass']) ? $context['CompletedStepShippingOptionsClass'] : null));
        echo " Last\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewShippingSettings&wizard=1\">";
        // line 64
        echo getLang("GettingStartedShippingOptions");
        echo "</a>
\t\t\t\t\t\t<div>";
        // line 65
        echo getLang("GettingStartedShippingOptionsDesc");
        echo "</div>
\t\t\t\t\t\t<div style=\"";
        // line 66
        echo twig_safe_filter((isset($context['HideCompletedStepShippingOptions']) ? $context['HideCompletedStepShippingOptions'] : null));
        echo "\" class=\"Completed\">";
        echo getLang("StepCompleted");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</div>

\t<div class=\"DashboardPanel DashboardPanelHelpArticles\" style=\"";
        // line 73
        echo twig_safe_filter((isset($context['HidePopularHelpArticles']) ? $context['HidePopularHelpArticles'] : null));
        echo "\">
\t\t<div class=\"DashboardPanelContent\" style=\"overflow: auto\">
\t\t\t<form action=\"";
        // line 75
        echo twig_safe_filter((isset($context['SearchKnowledgeBaseUrl']) ? $context['SearchKnowledgeBaseUrl'] : null));
        echo "\" method=\"post\" class=\"DashboardHelpArticlesSearchForm\" style=\"";
        echo twig_safe_filter((isset($context['HideSearchKnowledgeBase']) ? $context['HideSearchKnowledgeBase'] : null));
        echo "\">
\t\t\t\t<input type=\"text\" name=\"q\" class=\"DashboardHelpSearchQuery DashboardHelpSearchHasImage\" />
\t\t\t\t<span class=\"DashboardActionButton\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span class=\"ButtonText\">";
        // line 79
        echo getLang("Go");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t</form>
\t\t\t<h3>";
        // line 83
        echo getLang("PopularHelpArticles");
        echo "</h3>
\t\t\t<div class=\"HelpArticlesList\">
\t\t\t\t<img src=\"images/ajax-loader.gif\" alt=\"\" />
\t\t\t</div>
\t\t\t<span class=\"DashboardActionButton DashboardBrowseAllHelpArticlesButton\">
\t\t\t\t<a href=\"";
        // line 88
        echo twig_safe_filter((isset($context['ViewKnowledgeBaseLink']) ? $context['ViewKnowledgeBaseLink'] : null));
        echo "\">
\t\t\t\t\t<span class=\"ButtonArrow\"></span>
\t\t\t\t\t<span class=\"ButtonText ButtonTextWithArrow\">";
        // line 90
        echo getLang("ViewKnowledgeBase");
        echo "</span>
\t\t\t\t</a>
\t\t\t</span>
\t\t</div>
\t</div>
</div>";
    }

}
