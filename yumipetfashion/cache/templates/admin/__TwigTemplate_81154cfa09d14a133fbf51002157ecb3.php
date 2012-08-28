<?php

/* upgrade.welcome.tpl */
class __TwigTemplate_81154cfa09d14a133fbf51002157ecb3 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11\">
<html ";
        // line 2
        if ((isset($context['rtl']) ? $context['rtl'] : null)) {
            echo "dir=\"rtl\"";
        }
        echo " xml:lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\">
<head>
\t<title>";
        // line 4
        echo getLang("UpgradeInterspireShoppingCart");
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css\");
\t\t@import url('Styles/tabmenu.css');
\t\t@import url(\"Styles/iselector.css\");
\t</style>
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<style>
\t\th3 { font-size:13px; }
\t</style>
\t<script type=\"text/javascript\">
\t\tvar url = 'remote.php';
\t\tvar critical_errors = \"";
        // line 22
        echo twig_safe_filter((isset($context['CriticalErrors']) ? $context['CriticalErrors'] : null));
        echo "\";
\t</script>
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 24
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/menudrop.js?";
        // line 25
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/thickbox.js?";
        // line 26
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/common.js?";
        // line 27
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/install.js?";
        // line 28
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/iselector.js?";
        // line 29
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"Styles/thickbox.css?";
        // line 30
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" type=\"text/css\" media=\"screen\" />
</head>

<body>
\t<div id=\"box\">
\t\t<br /><br /><br /><br />
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:450px\">
\t\t<table>
\t\t  <tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t<img src=\"images/logo.jpg\" />
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td style=\"padding:10px 0px 5px 0px\">
\t\t\t\t<div style=\"display: ";
        // line 45
        echo twig_safe_filter((isset($context['HideUpgradeWelcome']) ? $context['HideUpgradeWelcome'] : null));
        echo "\">
\t\t\t\t\t<strong>";
        // line 46
        echo getLang("UpgradeInterspireShoppingCart");
        echo "</strong>
\t\t\t\t\t<div style=\"";
        // line 47
        echo twig_safe_filter((isset($context['HideUpgradeWarning']) ? $context['HideUpgradeWarning'] : null));
        echo "\" class=\"MessageBox MessageBoxInfo\">
\t\t\t\t\t\t";
        // line 48
        echo twig_safe_filter((isset($context['UpgradeWarning']) ? $context['UpgradeWarning'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<p>";
        // line 50
        echo twig_safe_filter((isset($context['UpgradeFromTo']) ? $context['UpgradeFromTo'] : null));
        echo "</p>
\t\t\t\t\t<p>";
        // line 51
        echo getLang("UpgradeWelcomeStart");
        echo "</p>
<!--\t\t\t\t\t<p>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"sendServerDetails\" id=\"sendServerDetails\" value=\"1\" checked=\"checked\" style=\"vertical-align: middle;\" /> ";
        // line 53
        echo getLang("SendServerDetails");
        echo "</label>
\t\t\t\t\t\t<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"alert('";
        // line 54
        echo getLang("ServerDetailsInfo");
        echo "')\" style=\"color:gray\">";
        echo getLang("WhatWillBeSent");
        echo "</a>
\t\t\t\t\t</p>
-->
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 57
        echo getLang("StartUpgrade");
        echo "\" onclick=\"RunUpgrade()\" class=\"FormButton Field100\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"display: ";
        // line 59
        echo twig_safe_filter((isset($context['HideUpgradeContinue']) ? $context['HideUpgradeContinue'] : null));
        echo "\">
\t\t\t\t\t<strong>";
        // line 60
        echo getLang("UpgradeInterspireShoppingCart");
        echo "</strong>
\t\t\t\t\t<p>";
        // line 61
        echo getLang("UpgradeContinueWelcome");
        echo "</p>
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 62
        echo getLang("ContinueUpgrade");
        echo "\" onclick=\"RunUpgrade()\" class=\"Field100\" />
\t\t\t\t</div>
\t\t\t\t<div style=\"display: ";
        // line 64
        echo twig_safe_filter((isset($context['HideUpgradeErrors']) ? $context['HideUpgradeErrors'] : null));
        echo "\">
\t\t\t\t\t<strong>";
        // line 65
        echo getLang("UpgradeInterspireShoppingCart");
        echo "</strong>
\t\t\t\t\t<p>";
        // line 66
        echo twig_safe_filter((isset($context['UpgradeFromTo']) ? $context['UpgradeFromTo'] : null));
        echo "</p>
\t\t\t\t\t<p><strong style=\"color: red;\">";
        // line 67
        echo getLang("OopsUpgradePreChecks");
        echo "</strong></p>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 69
        echo twig_safe_filter((isset($context['UpgradeErrors']) ? $context['UpgradeErrors'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<p>";
        // line 71
        echo getLang("UpgradePreChecksRetry");
        echo "</p>
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 72
        echo getLang("Retry");
        echo "\" onclick=\"document.location.reload()\" class=\"Field100\" />
\t\t\t\t</div>

\t\t\t</td>
\t\t  </tr>
\t\t</table>
\t\t</td></tr></table>
\t\t<div style=\"padding:10px; margin-bottom:20px; text-align:center\">";
        // line 79
        echo twig_safe_filter((isset($context['Copyright']) ? $context['Copyright'] : null));
        echo "</div>
\t</div>
\t<script type=\"text/javascript\">
\tfunction RunUpgrade() {
\t\tvar urlAppend = '';
/*
\t\tif(\$('#sendServerDetails:checked').val()) {
\t\t\turlAppend = '&sendServerDetails=1';
\t\t}
*/
\t\ttb_show('', 'index.php?ToDo=showUpgradeFrame'+urlAppend+'&keepThis=true&TB_iframe=true&height=230&width=400&modal=true&random='+new Date().getTime(), '');
\t}
\t</script>
\t";
        // line 92
        echo twig_safe_filter((isset($context['HiddenImage']) ? $context['HiddenImage'] : null));
        echo "
</body>
</html>";
    }

}
