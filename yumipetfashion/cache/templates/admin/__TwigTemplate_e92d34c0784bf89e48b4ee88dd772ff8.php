<?php

/* config.file.tpl */
class __TwigTemplate_e92d34c0784bf89e48b4ee88dd772ff8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t\$GLOBALS['ISC_CFG'][\"isSetup\"] = true;
\t\$GLOBALS['ISC_CFG'][\"Language\"] = ";
        // line 3
        echo twig_safe_filter((isset($context['Language']) ? $context['Language'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"AllowPurchasing\"] = ";
        // line 4
        echo twig_safe_filter((isset($context['AllowPurchasing']) ? $context['AllowPurchasing'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"serverStamp\"] = ";
        // line 5
        echo twig_safe_filter((isset($context['serverStamp']) ? $context['serverStamp'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"HostingProvider\"] = ";
        // line 6
        echo twig_safe_filter((isset($context['HostingProvider']) ? $context['HostingProvider'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"UseWYSIWYG\"] = ";
        // line 7
        echo twig_safe_filter((isset($context['UseWYSIWYG']) ? $context['UseWYSIWYG'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbType\"] = ";
        // line 8
        echo twig_safe_filter((isset($context['dbType']) ? $context['dbType'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbEncoding\"] = ";
        // line 9
        echo twig_safe_filter((isset($context['dbEncoding']) ? $context['dbEncoding'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbServer\"] = ";
        // line 10
        echo twig_safe_filter((isset($context['dbServer']) ? $context['dbServer'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbUser\"] = ";
        // line 11
        echo twig_safe_filter((isset($context['dbUser']) ? $context['dbUser'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbPass\"] = ";
        // line 12
        echo twig_safe_filter((isset($context['dbPass']) ? $context['dbPass'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"dbDatabase\"] = ";
        // line 13
        echo twig_safe_filter((isset($context['dbDatabase']) ? $context['dbDatabase'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"tablePrefix\"] = ";
        // line 14
        echo twig_safe_filter((isset($context['tablePrefix']) ? $context['tablePrefix'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"StoreName\"] = ";
        // line 15
        echo twig_safe_filter((isset($context['StoreName']) ? $context['StoreName'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"StoreAddress\"] = ";
        // line 16
        echo twig_safe_filter((isset($context['StoreAddress']) ? $context['StoreAddress'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"LogoType\"] = ";
        // line 17
        echo twig_safe_filter((isset($context['LogoType']) ? $context['LogoType'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"StoreLogo\"] = ";
        // line 18
        echo twig_safe_filter((isset($context['StoreLogo']) ? $context['StoreLogo'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ShopPath\"] = ";
        // line 19
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CharacterSet\"] = ";
        // line 20
        echo twig_safe_filter((isset($context['CharacterSet']) ? $context['CharacterSet'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"HomePagePageTitle\"] = ";
        // line 21
        echo twig_safe_filter((isset($context['HomePagePageTitle']) ? $context['HomePagePageTitle'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"MetaKeywords\"] = ";
        // line 22
        echo twig_safe_filter((isset($context['MetaKeywords']) ? $context['MetaKeywords'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"MetaDesc\"] = ";
        // line 23
        echo twig_safe_filter((isset($context['MetaDesc']) ? $context['MetaDesc'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DownloadDirectory\"] = ";
        // line 24
        echo twig_safe_filter((isset($context['DownloadDirectory']) ? $context['DownloadDirectory'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ImageDirectory\"] = ";
        // line 25
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"template\"] = ";
        // line 26
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"SiteColor\"] = ";
        // line 27
        echo twig_safe_filter((isset($context['SiteColor']) ? $context['SiteColor'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CurrencyToken\"] = ";
        // line 28
        echo twig_safe_filter((isset($context['CurrencyToken']) ? $context['CurrencyToken'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CurrencyLocation\"] = ";
        // line 29
        echo twig_safe_filter((isset($context['CurrencyLocation']) ? $context['CurrencyLocation'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DecimalToken\"] = ";
        // line 30
        echo twig_safe_filter((isset($context['DecimalToken']) ? $context['DecimalToken'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DecimalPlaces\"] = ";
        // line 31
        echo twig_safe_filter((isset($context['DecimalPlaces']) ? $context['DecimalPlaces'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ThousandsToken\"] = ";
        // line 32
        echo twig_safe_filter((isset($context['ThousandsToken']) ? $context['ThousandsToken'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"InstallDate\"] = ";
        // line 33
        echo twig_safe_filter((isset($context['InstallDate']) ? $context['InstallDate'] : null));
        echo ";

\t// SSL Settings
\t\$GLOBALS['ISC_CFG'][\"UseSSL\"] = ";
        // line 36
        echo twig_safe_filter((isset($context['UseSSL']) ? $context['UseSSL'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"SharedSSLPath\"] = ";
        // line 37
        echo twig_safe_filter((isset($context['SharedSSLPath']) ? $context['SharedSSLPath'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"SubdomainSSLPath\"] = ";
        // line 38
        echo twig_safe_filter((isset($context['SubdomainSSLPath']) ? $context['SubdomainSSLPath'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ForceControlPanelSSL\"] = ";
        // line 39
        echo twig_safe_filter((isset($context['ForceControlPanelSSL']) ? $context['ForceControlPanelSSL'] : null));
        echo ";

\t// Physical Dimensions Settings
\t\$GLOBALS['ISC_CFG'][\"WeightMeasurement\"] = ";
        // line 42
        echo twig_safe_filter((isset($context['WeightMeasurement']) ? $context['WeightMeasurement'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"LengthMeasurement\"] = ";
        // line 43
        echo twig_safe_filter((isset($context['LengthMeasurement']) ? $context['LengthMeasurement'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DimensionsDecimalToken\"] = ";
        // line 44
        echo twig_safe_filter((isset($context['DimensionsDecimalToken']) ? $context['DimensionsDecimalToken'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DimensionsDecimalPlaces\"] = ";
        // line 45
        echo twig_safe_filter((isset($context['DimensionsDecimalPlaces']) ? $context['DimensionsDecimalPlaces'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DimensionsThousandsToken\"] = ";
        // line 46
        echo twig_safe_filter((isset($context['DimensionsThousandsToken']) ? $context['DimensionsThousandsToken'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"DisplayDateFormat\"] = ";
        // line 48
        echo twig_safe_filter((isset($context['DisplayDateFormat']) ? $context['DisplayDateFormat'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ExportDateFormat\"] = ";
        // line 49
        echo twig_safe_filter((isset($context['ExportDateFormat']) ? $context['ExportDateFormat'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ExtendedDisplayDateFormat\"] = ";
        // line 50
        echo twig_safe_filter((isset($context['ExtendedDisplayDateFormat']) ? $context['ExtendedDisplayDateFormat'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"HomeFeaturedProducts\"] = ";
        // line 51
        echo twig_safe_filter((isset($context['HomeFeaturedProducts']) ? $context['HomeFeaturedProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"HomeNewProducts\"] = ";
        // line 52
        echo twig_safe_filter((isset($context['HomeNewProducts']) ? $context['HomeNewProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"HomeBlogPosts\"] = ";
        // line 53
        echo twig_safe_filter((isset($context['HomeBlogPosts']) ? $context['HomeBlogPosts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CategoryProductsPerPage\"] = ";
        // line 54
        echo twig_safe_filter((isset($context['CategoryProductsPerPage']) ? $context['CategoryProductsPerPage'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CategoryListDepth\"] = ";
        // line 55
        echo twig_safe_filter((isset($context['CategoryListDepth']) ? $context['CategoryListDepth'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ProductReviewsPerPage\"] = ";
        // line 56
        echo twig_safe_filter((isset($context['ProductReviewsPerPage']) ? $context['ProductReviewsPerPage'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"TagCloudsEnabled\"] = ";
        // line 57
        echo twig_safe_filter((isset($context['TagCloudsEnabled']) ? $context['TagCloudsEnabled'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ShowAddToCartQtyBox\"] = ";
        // line 58
        echo twig_safe_filter((isset($context['ShowAddToCartQtyBox']) ? $context['ShowAddToCartQtyBox'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CaptchaEnabled\"] = ";
        // line 59
        echo twig_safe_filter((isset($context['CaptchaEnabled']) ? $context['CaptchaEnabled'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ShowCartSuggestions\"] = ";
        // line 60
        echo twig_safe_filter((isset($context['ShowCartSuggestions']) ? $context['ShowCartSuggestions'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"AdminEmail\"] = ";
        // line 61
        echo twig_safe_filter((isset($context['AdminEmail']) ? $context['AdminEmail'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"OrderEmail\"] = ";
        // line 62
        echo twig_safe_filter((isset($context['OrderEmail']) ? $context['OrderEmail'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['LowInventoryNotificationAddress'] = ";
        // line 63
        echo twig_safe_filter((isset($context['LowInventoryNotificationAddress']) ? $context['LowInventoryNotificationAddress'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ShowThumbsInCart\"] = ";
        // line 64
        echo twig_safe_filter((isset($context['ShowThumbsInCart']) ? $context['ShowThumbsInCart'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"AutoApproveReviews\"] = ";
        // line 65
        echo twig_safe_filter((isset($context['AutoApproveReviews']) ? $context['AutoApproveReviews'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"SearchSuggest\"] = ";
        // line 66
        echo twig_safe_filter((isset($context['SearchSuggest']) ? $context['SearchSuggest'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"QuickSearch\"] = ";
        // line 67
        echo twig_safe_filter((isset($context['QuickSearch']) ? $context['QuickSearch'] : null));
        echo ";

\t// Shipping Settings
\t\$GLOBALS['ISC_CFG'][\"CompanyName\"] = ";
        // line 70
        echo twig_safe_filter((isset($context['CompanyName']) ? $context['CompanyName'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CompanyAddress\"] = ";
        // line 71
        echo twig_safe_filter((isset($context['CompanyAddress']) ? $context['CompanyAddress'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CompanyCity\"] = ";
        // line 72
        echo twig_safe_filter((isset($context['CompanyCity']) ? $context['CompanyCity'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CompanyCountry\"] = ";
        // line 73
        echo twig_safe_filter((isset($context['CompanyCountry']) ? $context['CompanyCountry'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CompanyState\"] = ";
        // line 74
        echo twig_safe_filter((isset($context['CompanyState']) ? $context['CompanyState'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CompanyZip\"] = ";
        // line 75
        echo twig_safe_filter((isset($context['CompanyZip']) ? $context['CompanyZip'] : null));
        echo ";

\t// Checkout Settings
\t\$GLOBALS['ISC_CFG'][\"CheckoutMethods\"] = ";
        // line 78
        echo twig_safe_filter((isset($context['CheckoutMethods']) ? $context['CheckoutMethods'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CheckoutType'] = ";
        // line 79
        echo twig_safe_filter((isset($context['CheckoutType']) ? $context['CheckoutType'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GuestCheckoutEnabled'] = ";
        // line 80
        echo twig_safe_filter((isset($context['GuestCheckoutEnabled']) ? $context['GuestCheckoutEnabled'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GuestCheckoutCreateAccounts'] = ";
        // line 81
        echo twig_safe_filter((isset($context['GuestCheckoutCreateAccounts']) ? $context['GuestCheckoutCreateAccounts'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"EmailIntegrationMethods\"] = ";
        // line 83
        echo twig_safe_filter((isset($context['EmailIntegrationMethods']) ? $context['EmailIntegrationMethods'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EmailIntegrationNewsletterDoubleOptin\"] = ";
        // line 84
        echo twig_safe_filter((isset($context['EmailIntegrationNewsletterDoubleOptin']) ? $context['EmailIntegrationNewsletterDoubleOptin'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EmailIntegrationNewsletterSendWelcome\"] = ";
        // line 85
        echo twig_safe_filter((isset($context['EmailIntegrationNewsletterSendWelcome']) ? $context['EmailIntegrationNewsletterSendWelcome'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EmailIntegrationOrderDoubleOptin\"] = ";
        // line 86
        echo twig_safe_filter((isset($context['EmailIntegrationOrderDoubleOptin']) ? $context['EmailIntegrationOrderDoubleOptin'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EmailIntegrationOrderSendWelcome\"] = ";
        // line 87
        echo twig_safe_filter((isset($context['EmailIntegrationOrderSendWelcome']) ? $context['EmailIntegrationOrderSendWelcome'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"ShowThumbsInControlPanel\"] = ";
        // line 89
        echo twig_safe_filter((isset($context['ShowThumbsInControlPanel']) ? $context['ShowThumbsInControlPanel'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EnableSEOUrls\"] = ";
        // line 90
        echo twig_safe_filter((isset($context['EnableSEOUrls']) ? $context['EnableSEOUrls'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowInventory'] = ";
        // line 91
        echo twig_safe_filter((isset($context['ShowInventory']) ? $context['ShowInventory'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowPreOrderInventory'] = ";
        // line 92
        echo twig_safe_filter((isset($context['ShowPreOrderInventory']) ? $context['ShowPreOrderInventory'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['DefaultPreOrderMessage'] = ";
        // line 93
        echo twig_safe_filter((isset($context['DefaultPreOrderMessage']) ? $context['DefaultPreOrderMessage'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['StoreTimeZone'] = ";
        // line 94
        echo twig_safe_filter((isset($context['StoreTimeZone']) ? $context['StoreTimeZone'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['StoreDSTCorrection'] = ";
        // line 95
        echo twig_safe_filter((isset($context['StoreDSTCorrection']) ? $context['StoreDSTCorrection'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowDownloadTemplates'] = ";
        // line 96
        echo twig_safe_filter((isset($context['ShowDownloadTemplates']) ? $context['ShowDownloadTemplates'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['TagCartQuantityBoxes'] = ";
        // line 97
        echo twig_safe_filter((isset($context['TagCartQuantityBoxes']) ? $context['TagCartQuantityBoxes'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"RSSNewProducts\"] = ";
        // line 99
        echo twig_safe_filter((isset($context['RSSNewProducts']) ? $context['RSSNewProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSPopularProducts\"] = ";
        // line 100
        echo twig_safe_filter((isset($context['RSSPopularProducts']) ? $context['RSSPopularProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSFeaturedProducts\"] = ";
        // line 101
        echo twig_safe_filter((isset($context['RSSFeaturedProducts']) ? $context['RSSFeaturedProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSCategories\"] = ";
        // line 102
        echo twig_safe_filter((isset($context['RSSCategories']) ? $context['RSSCategories'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSProductSearches\"] = ";
        // line 103
        echo twig_safe_filter((isset($context['RSSProductSearches']) ? $context['RSSProductSearches'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSLatestBlogEntries\"] = ";
        // line 104
        echo twig_safe_filter((isset($context['RSSLatestBlogEntries']) ? $context['RSSLatestBlogEntries'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSItemsLimit\"] = ";
        // line 105
        echo twig_safe_filter((isset($context['RSSItemsLimit']) ? $context['RSSItemsLimit'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSCacheTime\"] = ";
        // line 106
        echo twig_safe_filter((isset($context['RSSCacheTime']) ? $context['RSSCacheTime'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"RSSSyndicationIcons\"] = ";
        // line 107
        echo twig_safe_filter((isset($context['RSSSyndicationIcons']) ? $context['RSSSyndicationIcons'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['BackupsLocal'] = ";
        // line 109
        echo twig_safe_filter((isset($context['BackupsLocal']) ? $context['BackupsLocal'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsRemoteFTP'] = ";
        // line 110
        echo twig_safe_filter((isset($context['BackupsRemoteFTP']) ? $context['BackupsRemoteFTP'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsRemoteFTPHost'] = ";
        // line 111
        echo twig_safe_filter((isset($context['BackupsRemoteFTPHost']) ? $context['BackupsRemoteFTPHost'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsRemoteFTPUser'] = ";
        // line 112
        echo twig_safe_filter((isset($context['BackupsRemoteFTPUser']) ? $context['BackupsRemoteFTPUser'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsRemoteFTPPass'] = ";
        // line 113
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPass']) ? $context['BackupsRemoteFTPPass'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsRemoteFTPPath'] = ";
        // line 114
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPath']) ? $context['BackupsRemoteFTPPath'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsAutomatic'] = ";
        // line 115
        echo twig_safe_filter((isset($context['BackupsAutomatic']) ? $context['BackupsAutomatic'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsAutomaticMethod'] = ";
        // line 116
        echo twig_safe_filter((isset($context['BackupsAutomaticMethod']) ? $context['BackupsAutomaticMethod'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsAutomaticDatabase'] = ";
        // line 117
        echo twig_safe_filter((isset($context['BackupsAutomaticDatabase']) ? $context['BackupsAutomaticDatabase'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsAutomaticImages'] = ";
        // line 118
        echo twig_safe_filter((isset($context['BackupsAutomaticImages']) ? $context['BackupsAutomaticImages'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BackupsAutomaticDownloads'] = ";
        // line 119
        echo twig_safe_filter((isset($context['BackupsAutomaticDownloads']) ? $context['BackupsAutomaticDownloads'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"GoogleMapsAPIKey\"] = ";
        // line 121
        echo twig_safe_filter((isset($context['GoogleMapsAPIKey']) ? $context['GoogleMapsAPIKey'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"NotificationMethods\"] = ";
        // line 122
        echo twig_safe_filter((isset($context['NotificationMethods']) ? $context['NotificationMethods'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"CurrencyMethods\"] = ";
        // line 123
        echo twig_safe_filter((isset($context['CurrencyMethods']) ? $context['CurrencyMethods'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DefaultCurrencyID\"] = ";
        // line 124
        echo twig_safe_filter((isset($context['DefaultCurrencyID']) ? $context['DefaultCurrencyID'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DefaultCurrencyRate\"] = ";
        // line 125
        echo twig_safe_filter((isset($context['DefaultCurrencyRate']) ? $context['DefaultCurrencyRate'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"MailAutomaticallyTickNewsletterBox\"] = ";
        // line 127
        echo twig_safe_filter((isset($context['MailAutomaticallyTickNewsletterBox']) ? $context['MailAutomaticallyTickNewsletterBox'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"MailAutomaticallyTickOrderBox\"] = ";
        // line 128
        echo twig_safe_filter((isset($context['MailAutomaticallyTickOrderBox']) ? $context['MailAutomaticallyTickOrderBox'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowMailingListInvite'] = ";
        // line 129
        echo twig_safe_filter((isset($context['ShowMailingListInvite']) ? $context['ShowMailingListInvite'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"AnalyticsMethods\"] = ";
        // line 131
        echo twig_safe_filter((isset($context['AnalyticsMethods']) ? $context['AnalyticsMethods'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['SystemLogging'] = ";
        // line 133
        echo twig_safe_filter((isset($context['SystemLogging']) ? $context['SystemLogging'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['HidePHPErrors'] = ";
        // line 134
        echo twig_safe_filter((isset($context['HidePHPErrors']) ? $context['HidePHPErrors'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SystemLogTypes'] = ";
        // line 135
        echo twig_safe_filter((isset($context['SystemLogTypes']) ? $context['SystemLogTypes'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SystemLogSeverity'] = ";
        // line 136
        echo twig_safe_filter((isset($context['SystemLogSeverity']) ? $context['SystemLogSeverity'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SystemLogMaxLength'] = ";
        // line 137
        echo twig_safe_filter((isset($context['SystemLogMaxLength']) ? $context['SystemLogMaxLength'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['AdministratorLogging'] = ";
        // line 138
        echo twig_safe_filter((isset($context['AdministratorLogging']) ? $context['AdministratorLogging'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['AdministratorLogMaxLength'] = ";
        // line 139
        echo twig_safe_filter((isset($context['AdministratorLogMaxLength']) ? $context['AdministratorLogMaxLength'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['DebugMode'] = ";
        // line 140
        echo twig_safe_filter((isset($context['DebugMode']) ? $context['DebugMode'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['EnableReturns'] = ";
        // line 142
        echo twig_safe_filter((isset($context['EnableReturns']) ? $context['EnableReturns'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ReturnReasons'] = ";
        // line 143
        echo twig_safe_filter((isset($context['ReturnReasons']) ? $context['ReturnReasons'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ReturnActions'] = ";
        // line 144
        echo twig_safe_filter((isset($context['ReturnActions']) ? $context['ReturnActions'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ReturnCredits'] = ";
        // line 145
        echo twig_safe_filter((isset($context['ReturnCredits']) ? $context['ReturnCredits'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ReturnInstructions'] = ";
        // line 146
        echo twig_safe_filter((isset($context['ReturnInstructions']) ? $context['ReturnInstructions'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EmailOwnerOnReturn'] = ";
        // line 147
        echo twig_safe_filter((isset($context['EmailOwnerOnReturn']) ? $context['EmailOwnerOnReturn'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SendReturnConfirmation'] = ";
        // line 148
        echo twig_safe_filter((isset($context['SendReturnConfirmation']) ? $context['SendReturnConfirmation'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['NotifyOnReturnStatusChange'] = ";
        // line 149
        echo twig_safe_filter((isset($context['NotifyOnReturnStatusChange']) ? $context['NotifyOnReturnStatusChange'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['EnableGiftCertificates'] = ";
        // line 151
        echo twig_safe_filter((isset($context['EnableGiftCertificates']) ? $context['EnableGiftCertificates'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateAmounts'] = ";
        // line 152
        echo twig_safe_filter((isset($context['GiftCertificateAmounts']) ? $context['GiftCertificateAmounts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateCustomAmounts'] = ";
        // line 153
        echo twig_safe_filter((isset($context['GiftCertificateCustomAmounts']) ? $context['GiftCertificateCustomAmounts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateMinimum'] = ";
        // line 154
        echo twig_safe_filter((isset($context['GiftCertificateMinimum']) ? $context['GiftCertificateMinimum'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateMaximum'] = ";
        // line 155
        echo twig_safe_filter((isset($context['GiftCertificateMaximum']) ? $context['GiftCertificateMaximum'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateExpiry'] = ";
        // line 156
        echo twig_safe_filter((isset($context['GiftCertificateExpiry']) ? $context['GiftCertificateExpiry'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['GiftCertificateThemes'] = ";
        // line 157
        echo twig_safe_filter((isset($context['GiftCertificateThemes']) ? $context['GiftCertificateThemes'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['UpdateInventoryLevels'] = ";
        // line 159
        echo twig_safe_filter((isset($context['UpdateInventoryLevels']) ? $context['UpdateInventoryLevels'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['UpdateInventoryOnOrderEdit'] = ";
        // line 160
        echo twig_safe_filter((isset($context['UpdateInventoryOnOrderEdit']) ? $context['UpdateInventoryOnOrderEdit'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['UpdateInventoryOnOrderDelete'] = ";
        // line 161
        echo twig_safe_filter((isset($context['UpdateInventoryOnOrderDelete']) ? $context['UpdateInventoryOnOrderDelete'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['OrderStatusNotifications'] = ";
        // line 162
        echo twig_safe_filter((isset($context['OrderStatusNotifications']) ? $context['OrderStatusNotifications'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['AddonModules'] = ";
        // line 164
        echo twig_safe_filter((isset($context['AddonModules']) ? $context['AddonModules'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['AKBIsConfigured'] = ";
        // line 166
        echo twig_safe_filter((isset($context['AKBIsConfigured']) ? $context['AKBIsConfigured'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['AKBPath'] = ";
        // line 167
        echo twig_safe_filter((isset($context['AKBPath']) ? $context['AKBPath'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ARSPageIds'] = ";
        // line 168
        echo twig_safe_filter((isset($context['ARSPageIds']) ? $context['ARSPageIds'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ARSIntegrated'] = ";
        // line 169
        echo twig_safe_filter((isset($context['ARSIntegrated']) ? $context['ARSIntegrated'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['ShowProductPrice'] = ";
        // line 171
        echo twig_safe_filter((isset($context['ShowProductPrice']) ? $context['ShowProductPrice'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowProductSKU'] = ";
        // line 172
        echo twig_safe_filter((isset($context['ShowProductSKU']) ? $context['ShowProductSKU'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowProductWeight'] = ";
        // line 173
        echo twig_safe_filter((isset($context['ShowProductWeight']) ? $context['ShowProductWeight'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowProductBrand'] = ";
        // line 174
        echo twig_safe_filter((isset($context['ShowProductBrand']) ? $context['ShowProductBrand'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowProductShipping'] = ";
        // line 175
        echo twig_safe_filter((isset($context['ShowProductShipping']) ? $context['ShowProductShipping'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ShowProductRating'] = ";
        // line 176
        echo twig_safe_filter((isset($context['ShowProductRating']) ? $context['ShowProductRating'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImageMode'] = ";
        // line 177
        echo twig_safe_filter((isset($context['ProductImageMode']) ? $context['ProductImageMode'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['ShowAddThisLink'] = ";
        // line 179
        echo twig_safe_filter((isset($context['ShowAddThisLink']) ? $context['ShowAddThisLink'] : null));
        echo ";

\t// DO NOT CHANGE THIS VARIABLE OR YOU WILL BREAK ORDERS
\t\$GLOBALS['ISC_CFG'][\"EncryptionToken\"] = ";
        // line 182
        echo twig_safe_filter((isset($context['EncryptionToken']) ? $context['EncryptionToken'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG'][\"EnableWishlist\"] = ";
        // line 184
        echo twig_safe_filter((isset($context['EnableWishlist']) ? $context['EnableWishlist'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EnableAccountCreation\"] = ";
        // line 185
        echo twig_safe_filter((isset($context['EnableAccountCreation']) ? $context['EnableAccountCreation'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EnableProductComparisons'] = ";
        // line 186
        echo twig_safe_filter((isset($context['EnableProductComparisons']) ? $context['EnableProductComparisons'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EnableOrderComments\"] = ";
        // line 187
        echo twig_safe_filter((isset($context['EnableOrderComments']) ? $context['EnableOrderComments'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"EnableOrderTermsAndConditions\"] = ";
        // line 188
        echo twig_safe_filter((isset($context['EnableOrderTermsAndConditions']) ? $context['EnableOrderTermsAndConditions'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"OrderTermsAndConditionsType\"] = ";
        // line 189
        echo twig_safe_filter((isset($context['OrderTermsAndConditionsType']) ? $context['OrderTermsAndConditionsType'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"OrderTermsAndConditionsLink\"] = ";
        // line 190
        echo twig_safe_filter((isset($context['OrderTermsAndConditionsLink']) ? $context['OrderTermsAndConditionsLink'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"OrderTermsAndConditions\"] = ";
        // line 191
        echo twig_safe_filter((isset($context['OrderTermsAndConditions']) ? $context['OrderTermsAndConditions'] : null));
        echo ";

\t// Logo Settings
\t\$GLOBALS['ISC_CFG'][\"LogoFields\"] = ";
        // line 194
        echo twig_safe_filter((isset($context['LogoFields']) ? $context['LogoFields'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"ForceWebsiteTitleText\"] = ";
        // line 195
        echo twig_safe_filter((isset($context['ForceWebsiteTitleText']) ? $context['ForceWebsiteTitleText'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['UseAlternateTitle'] = ";
        // line 196
        echo twig_safe_filter((isset($context['UseAlternateTitle']) ? $context['UseAlternateTitle'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['AlternateTitle'] = ";
        // line 197
        echo twig_safe_filter((isset($context['AlternateTitle']) ? $context['AlternateTitle'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['UsingLogoEditor'] = ";
        // line 198
        echo twig_safe_filter((isset($context['UsingLogoEditor']) ? $context['UsingLogoEditor'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['UsingTemplateLogo'] = ";
        // line 199
        echo twig_safe_filter((isset($context['UsingTemplateLogo']) ? $context['UsingTemplateLogo'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['AffiliateConversionTrackingCode'] = ";
        // line 201
        echo twig_safe_filter((isset($context['AffiliateConversionTrackingCode']) ? $context['AffiliateConversionTrackingCode'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['GuestCustomerGroup'] = ";
        // line 203
        echo twig_safe_filter((isset($context['GuestCustomerGroup']) ? $context['GuestCustomerGroup'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ForwardInvoiceEmails'] = ";
        // line 204
        echo twig_safe_filter((isset($context['ForwardInvoiceEmails']) ? $context['ForwardInvoiceEmails'] : null));
        echo ";

\t// Mail Settings
\t\$GLOBALS['ISC_CFG']['MailUseSMTP'] = ";
        // line 207
        echo twig_safe_filter((isset($context['MailUseSMTP']) ? $context['MailUseSMTP'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['MailSMTPServer'] = ";
        // line 208
        echo twig_safe_filter((isset($context['MailSMTPServer']) ? $context['MailSMTPServer'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['MailSMTPUsername'] = ";
        // line 209
        echo twig_safe_filter((isset($context['MailSMTPUsername']) ? $context['MailSMTPUsername'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['MailSMTPPassword'] = ";
        // line 210
        echo twig_safe_filter((isset($context['MailSMTPPassword']) ? $context['MailSMTPPassword'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['MailSMTPPort'] = ";
        // line 211
        echo twig_safe_filter((isset($context['MailSMTPPort']) ? $context['MailSMTPPort'] : null));
        echo ";

\t// Curl Proxy Settings
\t\$GLOBALS['ISC_CFG']['HTTPProxyServer'] = ";
        // line 214
        echo twig_safe_filter((isset($context['HTTPProxyServer']) ? $context['HTTPProxyServer'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['HTTPProxyPort'] = ";
        // line 215
        echo twig_safe_filter((isset($context['HTTPProxyPort']) ? $context['HTTPProxyPort'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['HTTPSSLVerifyPeer'] = ";
        // line 216
        echo twig_safe_filter((isset($context['HTTPSSLVerifyPeer']) ? $context['HTTPSSLVerifyPeer'] : null));
        echo ";

\t// Digital Download Settings
\t\$GLOBALS['ISC_CFG']['DigitalOrderHandlingFee'] = ";
        // line 219
        echo twig_safe_filter((isset($context['DigitalOrderHandlingFee']) ? $context['DigitalOrderHandlingFee'] : null));
        echo ";

\t// Accounting Settings
\t\$GLOBALS['ISC_CFG']['AccountingMethods'] = ";
        // line 222
        echo twig_safe_filter((isset($context['AccountingMethods']) ? $context['AccountingMethods'] : null));
        echo ";

\t// Live Chat Modules
\t\$GLOBALS['ISC_CFG']['LiveChatModules'] = ";
        // line 225
        echo twig_safe_filter((isset($context['LiveChatModules']) ? $context['LiveChatModules'] : null));
        echo ";

\t//Category and Brand image dimensions
\t\$GLOBALS['ISC_CFG']['CategoryPerRow'] = ";
        // line 228
        echo twig_safe_filter((isset($context['CategoryPerRow']) ? $context['CategoryPerRow'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CategoryImageWidth'] = ";
        // line 229
        echo twig_safe_filter((isset($context['CategoryImageWidth']) ? $context['CategoryImageWidth'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CategoryImageHeight'] = ";
        // line 230
        echo twig_safe_filter((isset($context['CategoryImageHeight']) ? $context['CategoryImageHeight'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CategoryDefaultImage'] = ";
        // line 231
        echo twig_safe_filter((isset($context['CategoryDefaultImage']) ? $context['CategoryDefaultImage'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BrandPerRow'] = ";
        // line 232
        echo twig_safe_filter((isset($context['BrandPerRow']) ? $context['BrandPerRow'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BrandImageWidth'] = ";
        // line 233
        echo twig_safe_filter((isset($context['BrandImageWidth']) ? $context['BrandImageWidth'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BrandImageHeight'] = ";
        // line 234
        echo twig_safe_filter((isset($context['BrandImageHeight']) ? $context['BrandImageHeight'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['BrandDefaultImage'] = ";
        // line 235
        echo twig_safe_filter((isset($context['BrandDefaultImage']) ? $context['BrandDefaultImage'] : null));
        echo ";

\t// Product Images
\t\$GLOBALS['ISC_CFG']['DefaultProductImage'] = ";
        // line 238
        echo twig_safe_filter((isset($context['DefaultProductImage']) ? $context['DefaultProductImage'] : null));
        echo ";

\t//Display the 'Add to Cart' link on all the product panels
\t\$GLOBALS['ISC_CFG']['ShowAddToCartLink'] = ";
        // line 241
        echo twig_safe_filter((isset($context['ShowAddToCartLink']) ? $context['ShowAddToCartLink'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['CategoryListingMode'] = ";
        // line 243
        echo twig_safe_filter((isset($context['CategoryListingMode']) ? $context['CategoryListingMode'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CategoryDisplayMode'] = ";
        // line 244
        echo twig_safe_filter((isset($context['CategoryDisplayMode']) ? $context['CategoryDisplayMode'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['TagCloudMinSize'] = ";
        // line 245
        echo twig_safe_filter((isset($context['TagCloudMinSize']) ? $context['TagCloudMinSize'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['TagCloudMaxSize'] = ";
        // line 246
        echo twig_safe_filter((isset($context['TagCloudMaxSize']) ? $context['TagCloudMaxSize'] : null));
        echo ";

\t// Bulk Discounts
\t\$GLOBALS['ISC_CFG']['BulkDiscountEnabled'] = ";
        // line 249
        echo twig_safe_filter((isset($context['BulkDiscountEnabled']) ? $context['BulkDiscountEnabled'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['EnableProductTabs'] = ";
        // line 251
        echo twig_safe_filter((isset($context['EnableProductTabs']) ? $context['EnableProductTabs'] : null));
        echo ";

\t\$GLOBALS['ISC_CFG']['MultipleShippingAddresses'] = ";
        // line 253
        echo twig_safe_filter((isset($context['MultipleShippingAddresses']) ? $context['MultipleShippingAddresses'] : null));
        echo ";

\t// Vendor Edition Settings
\t\$GLOBALS['ISC_CFG']['VendorLogoSize'] = ";
        // line 256
        echo twig_safe_filter((isset($context['VendorLogoSize']) ? $context['VendorLogoSize'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['VendorPhotoSize'] = ";
        // line 257
        echo twig_safe_filter((isset($context['VendorPhotoSize']) ? $context['VendorPhotoSize'] : null));
        echo ";

\t// The factoring dimension for a shipping quote (depth, height or width with default of depth)
\t\$GLOBALS['ISC_CFG']['ShippingFactoringDimension'] = ";
        // line 260
        echo twig_safe_filter((isset($context['ShippingFactoringDimension']) ? $context['ShippingFactoringDimension'] : null));
        echo ";

\t// Array of the getting started steps that have been completed
\t\$GLOBALS['ISC_CFG']['GettingStartedCompleted'] = ";
        // line 263
        echo twig_safe_filter((isset($context['GettingStartedCompleted']) ? $context['GettingStartedCompleted'] : null));
        echo ";

\t// The favicon file
\t\$GLOBALS['ISC_CFG']['Favicon'] = ";
        // line 266
        echo twig_safe_filter((isset($context['Favicon']) ? $context['Favicon'] : null));
        echo ";

\t// Session settings
\t\$GLOBALS['ISC_CFG']['SessionSavePath'] = ";
        // line 269
        echo twig_safe_filter((isset($context['SessionSavePath']) ? $context['SessionSavePath'] : null));
        echo ";

\t// Optimizer Settings
\t\$GLOBALS['ISC_CFG']['OptimizerMethods'] = ";
        // line 272
        echo twig_safe_filter((isset($context['OptimizerMethods']) ? $context['OptimizerMethods'] : null));
        echo ";

\t// Advance Search format (search all)
\t\$GLOBALS['ISC_CFG']['SearchDefaultProductSort'] = ";
        // line 275
        echo twig_safe_filter((isset($context['SearchDefaultProductSort']) ? $context['SearchDefaultProductSort'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SearchDefaultContentSort'] = ";
        // line 276
        echo twig_safe_filter((isset($context['SearchDefaultContentSort']) ? $context['SearchDefaultContentSort'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SearchProductDisplayMode'] = ";
        // line 277
        echo twig_safe_filter((isset($context['SearchProductDisplayMode']) ? $context['SearchProductDisplayMode'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SearchResultsPerPage'] = ";
        // line 278
        echo twig_safe_filter((isset($context['SearchResultsPerPage']) ? $context['SearchResultsPerPage'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['SearchOptimisation'] = ";
        // line 279
        echo twig_safe_filter((isset($context['SearchOptimisation']) ? $context['SearchOptimisation'] : null));
        echo ";

\t// Abandon Orders
\t\$GLOBALS['ISC_CFG']['AbandonOrderLifetime'] = ";
        // line 282
        echo twig_safe_filter((isset($context['AbandonOrderLifetime']) ? $context['AbandonOrderLifetime'] : null));
        echo ";

\t// Product Image Settings
\t\$GLOBALS['ISC_CFG']['ProductImagesStorewideThumbnail_width'] = ";
        // line 285
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_width']) ? $context['ProductImagesStorewideThumbnail_width'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesStorewideThumbnail_height'] = ";
        // line 286
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_height']) ? $context['ProductImagesStorewideThumbnail_height'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesProductPageImage_width'] = ";
        // line 287
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_width']) ? $context['ProductImagesProductPageImage_width'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesProductPageImage_height'] = ";
        // line 288
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_height']) ? $context['ProductImagesProductPageImage_height'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesGalleryThumbnail_width'] = ";
        // line 289
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_width']) ? $context['ProductImagesGalleryThumbnail_width'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesGalleryThumbnail_height'] = ";
        // line 290
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_height']) ? $context['ProductImagesGalleryThumbnail_height'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesZoomImage_width'] = ";
        // line 291
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_width']) ? $context['ProductImagesZoomImage_width'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesZoomImage_height'] = ";
        // line 292
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_height']) ? $context['ProductImagesZoomImage_height'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesTinyThumbnailsEnabled'] = ";
        // line 293
        echo twig_safe_filter((isset($context['ProductImagesTinyThumbnailsEnabled']) ? $context['ProductImagesTinyThumbnailsEnabled'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['ProductImagesImageZoomEnabled'] = ";
        // line 294
        echo twig_safe_filter((isset($context['ProductImagesImageZoomEnabled']) ? $context['ProductImagesImageZoomEnabled'] : null));
        echo ";

\t// Variable used to force browsers to re-download already cached
\t// stylesheets/Javascript. Set to a random value during the upgrade.
\t\$GLOBALS['ISC_CFG']['JSCacheToken'] = ";
        // line 298
        echo twig_safe_filter((isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null));
        echo ";

\t// Shopping Comparison
\t\$GLOBALS['ISC_CFG']['ShoppingComparisonModules'] = ";
        // line 301
        echo twig_safe_filter((isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null));
        echo ";

\t// Maintenance
\t\$GLOBALS['ISC_CFG'][\"DownForMaintenance\"] = ";
        // line 304
        echo twig_safe_filter((isset($context['DownForMaintenance']) ? $context['DownForMaintenance'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG'][\"DownForMaintenanceMessage\"] = ";
        // line 305
        echo twig_safe_filter((isset($context['DownForMaintenanceMessage']) ? $context['DownForMaintenanceMessage'] : null));
        echo ";

\t// Starting Order Number
\t\$GLOBALS['ISC_CFG'][\"StartingOrderNumber\"] = ";
        // line 308
        echo twig_safe_filter((isset($context['StartingOrderNumber']) ? $context['StartingOrderNumber'] : null));
        echo ";

\t// Shipping Manager Settings
\t\$GLOBALS['ISC_CFG']['ShippingManagerModules'] = ";
        // line 311
        echo twig_safe_filter((isset($context['ShippingManagerModules']) ? $context['ShippingManagerModules'] : null));
        echo ";

\t// 'Customers who viewed this product also viewed' Settings
\t\$GLOBALS['ISC_CFG']['EnableCustomersAlsoViewed'] = ";
        // line 314
        echo twig_safe_filter((isset($context['EnableCustomersAlsoViewed']) ? $context['EnableCustomersAlsoViewed'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['CustomersAlsoViewedCount'] = ";
        // line 315
        echo twig_safe_filter((isset($context['CustomersAlsoViewedCount']) ? $context['CustomersAlsoViewedCount'] : null));
        echo ";

\t// Ebay Settings
\t\$GLOBALS['ISC_CFG']['EbayDevId'] = ";
        // line 318
        echo twig_safe_filter((isset($context['EbayDevId']) ? $context['EbayDevId'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayAppId'] = ";
        // line 319
        echo twig_safe_filter((isset($context['EbayAppId']) ? $context['EbayAppId'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayCertId'] = ";
        // line 320
        echo twig_safe_filter((isset($context['EbayCertId']) ? $context['EbayCertId'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayUserToken'] = ";
        // line 321
        echo twig_safe_filter((isset($context['EbayUserToken']) ? $context['EbayUserToken'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayDefaultSite'] = ";
        // line 322
        echo twig_safe_filter((isset($context['EbayDefaultSite']) ? $context['EbayDefaultSite'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayStore'] = ";
        // line 323
        echo twig_safe_filter((isset($context['EbayStore']) ? $context['EbayStore'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbayTestMode'] = ";
        // line 324
        echo twig_safe_filter((isset($context['EbayTestMode']) ? $context['EbayTestMode'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['EbaySettingsValid'] = ";
        // line 325
        echo twig_safe_filter((isset($context['EbaySettingsValid']) ? $context['EbaySettingsValid'] : null));
        echo ";

\t// Comment System Settings
\t\$GLOBALS['ISC_CFG']['CommentSystemModule'] = ";
        // line 328
        echo twig_safe_filter((isset($context['CommentSystemModule']) ? $context['CommentSystemModule'] : null));
        echo ";

\t// Redirect to www or no www
\t\$GLOBALS['ISC_CFG']['RedirectWWW'] = ";
        // line 331
        echo twig_safe_filter((isset($context['RedirectWWW']) ? $context['RedirectWWW'] : null));
        echo ";

\t// Tax Settings
\t\$GLOBALS['ISC_CFG']['taxLabel'] = ";
        // line 334
        echo twig_safe_filter((isset($context['taxLabel']) ? $context['taxLabel'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxEnteredWithPrices'] = ";
        // line 335
        echo twig_safe_filter((isset($context['taxEnteredWithPrices']) ? $context['taxEnteredWithPrices'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxCalculationBasedOn'] = ";
        // line 336
        echo twig_safe_filter((isset($context['taxCalculationBasedOn']) ? $context['taxCalculationBasedOn'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultTaxDisplayCatalog'] = ";
        // line 337
        echo twig_safe_filter((isset($context['taxDefaultTaxDisplayCatalog']) ? $context['taxDefaultTaxDisplayCatalog'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultTaxDisplayProducts'] = ";
        // line 338
        echo twig_safe_filter((isset($context['taxDefaultTaxDisplayProducts']) ? $context['taxDefaultTaxDisplayProducts'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultTaxDisplayCart'] = ";
        // line 339
        echo twig_safe_filter((isset($context['taxDefaultTaxDisplayCart']) ? $context['taxDefaultTaxDisplayCart'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultTaxDisplayOrders'] = ";
        // line 340
        echo twig_safe_filter((isset($context['taxDefaultTaxDisplayOrders']) ? $context['taxDefaultTaxDisplayOrders'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxChargesOnOrdersBreakdown'] = ";
        // line 341
        echo twig_safe_filter((isset($context['taxChargesOnOrdersBreakdown']) ? $context['taxChargesOnOrdersBreakdown'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxChargesInCartBreakdown'] = ";
        // line 342
        echo twig_safe_filter((isset($context['taxChargesInCartBreakdown']) ? $context['taxChargesInCartBreakdown'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultCountry'] = ";
        // line 343
        echo twig_safe_filter((isset($context['taxDefaultCountry']) ? $context['taxDefaultCountry'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultState'] = ";
        // line 344
        echo twig_safe_filter((isset($context['taxDefaultState']) ? $context['taxDefaultState'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxDefaultZipCode'] = ";
        // line 345
        echo twig_safe_filter((isset($context['taxDefaultZipCode']) ? $context['taxDefaultZipCode'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxPendingChanges'] = ";
        // line 346
        echo twig_safe_filter((isset($context['taxPendingChanges']) ? $context['taxPendingChanges'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxShippingTaxClass'] = ";
        // line 347
        echo twig_safe_filter((isset($context['taxShippingTaxClass']) ? $context['taxShippingTaxClass'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxGiftWrappingTaxClass'] = ";
        // line 348
        echo twig_safe_filter((isset($context['taxGiftWrappingTaxClass']) ? $context['taxGiftWrappingTaxClass'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['taxPendingChanges'] = ";
        // line 349
        echo twig_safe_filter((isset($context['taxPendingChanges']) ? $context['taxPendingChanges'] : null));
        echo ";

\t// PCI config
\t\$GLOBALS['ISC_CFG']['PCIPasswordMinLen'] = ";
        // line 352
        echo twig_safe_filter((isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCIPasswordHistoryCount'] = ";
        // line 353
        echo twig_safe_filter((isset($context['PCIPasswordHistoryCount']) ? $context['PCIPasswordHistoryCount'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCIPasswordExpiryTimeDay'] = ";
        // line 354
        echo twig_safe_filter((isset($context['PCIPasswordExpiryTimeDay']) ? $context['PCIPasswordExpiryTimeDay'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCILoginAttemptCount'] = ";
        // line 355
        echo twig_safe_filter((isset($context['PCILoginAttemptCount']) ? $context['PCILoginAttemptCount'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCILoginLockoutTimeMin'] = ";
        // line 356
        echo twig_safe_filter((isset($context['PCILoginLockoutTimeMin']) ? $context['PCILoginLockoutTimeMin'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCILoginIdleTimeMin'] = ";
        // line 357
        echo twig_safe_filter((isset($context['PCILoginIdleTimeMin']) ? $context['PCILoginIdleTimeMin'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['PCILoginInactiveTimeDay'] = ";
        // line 358
        echo twig_safe_filter((isset($context['PCILoginInactiveTimeDay']) ? $context['PCILoginInactiveTimeDay'] : null));
        echo ";

\t// Mobile/Portable Template
\t\$GLOBALS['ISC_CFG']['enableMobileTemplate'] = ";
        // line 361
        echo twig_safe_filter((isset($context['enableMobileTemplate']) ? $context['enableMobileTemplate'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['enableMobileTemplateDevices'] = ";
        // line 362
        echo twig_safe_filter((isset($context['enableMobileTemplateDevices']) ? $context['enableMobileTemplateDevices'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['mobileTemplateLogo'] = ";
        // line 363
        echo twig_safe_filter((isset($context['mobileTemplateLogo']) ? $context['mobileTemplateLogo'] : null));
        echo ";

\t// Facebook Like Button
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonEnabled'] = ";
        // line 366
        echo twig_safe_filter((isset($context['FacebookLikeButtonEnabled']) ? $context['FacebookLikeButtonEnabled'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonStyle'] = ";
        // line 367
        echo twig_safe_filter((isset($context['FacebookLikeButtonStyle']) ? $context['FacebookLikeButtonStyle'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonPosition'] = ";
        // line 368
        echo twig_safe_filter((isset($context['FacebookLikeButtonPosition']) ? $context['FacebookLikeButtonPosition'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonVerb'] = ";
        // line 369
        echo twig_safe_filter((isset($context['FacebookLikeButtonVerb']) ? $context['FacebookLikeButtonVerb'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonShowFaces'] = ";
        // line 370
        echo twig_safe_filter((isset($context['FacebookLikeButtonShowFaces']) ? $context['FacebookLikeButtonShowFaces'] : null));
        echo ";
\t\$GLOBALS['ISC_CFG']['FacebookLikeButtonAdminIds'] = ";
        // line 371
        echo twig_safe_filter((isset($context['FacebookLikeButtonAdminIds']) ? $context['FacebookLikeButtonAdminIds'] : null));
        echo ";";
    }

}
