<?php

/* emailintegration.export.javascript.tpl */
class __TwigTemplate_49249b3a69cf36981c241bebd9307229 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
if (typeof lang == 'undefined') { lang = {}; }
lang.EmailIntegration_ExportMachine_FailedToLoadDialog = \"";
        // line 3
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegration_ExportMachine_FailedToLoadDialog"), "'");
        echo "\";
//]]></script>
";
    }

}
