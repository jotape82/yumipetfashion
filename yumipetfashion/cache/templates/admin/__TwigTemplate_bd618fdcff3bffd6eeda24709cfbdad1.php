<?php

/* googlesitemap.intro.tpl */
class __TwigTemplate_bd618fdcff3bffd6eeda24709cfbdad1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"ModalTitle\">
\t";
        // line 2
        echo getLang("GoogleSitemap");
        echo "</div>
<div class=\"ModalContent\">
\t<div id=\"exportIntro\">
\t\t<p>
\t\t\t";
        // line 7
        echo getLang("GoogleSitemapIntro");
        echo "\t\t</p>

\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td width=\"1\"><img src=\"images/froogle.gif\" height=\"16\" width=\"16\" hspace=\"5\" alt=\"\" /></td>
\t\t\t\t<td><a href=\"http://www.google.com/support/webmasters/bin/answer.py?hl=en&answer=156184\"  style=\"color:#005FA3; font-weight:bold\" target=\"_blank\">";
        // line 13
        echo getLang("GoogleSitemapLearnMore");
        echo "</a></td>
\t\t\t</tr>
\t\t</table>

\t\t<p>";
        // line 17
        echo getLang("GoogleSiteMapLocated");
        echo "</p>
\t\t<p style=\"padding-left: 25px\">
\t\t\t<input type=\"text\" class=\"Field300\" onclick=\"this.select()\" readonly=\"readonly\" value=\"";
        // line 19
        echo twig_safe_filter((isset($context['SiteMapUrl']) ? $context['SiteMapUrl'] : null));
        echo "\" />
\t\t</p>
\t</div>
</div>
<div class=\"ModalButtonRow\">
\t<input type=\"button\" value=\"";
        // line 24
        echo getLang("Close");
        echo "\" onclick=\"\$.iModal.close()\" class=\"SubmitButton\" />
</div>";
    }

}
