<?php

/* settings.emailintegration.exportonly.tpl */
class __TwigTemplate_f7f25b6258746f8700337e534dc851ad extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
if (typeof lang == 'undefined') {
\tlang = {};
}
lang.EmailIntegration_ExportOnly_Delete_Confirm = \"";
        // line 8
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegration_ExportOnly_Delete_Confirm"), "'");
        echo "\";

//]]></script>


<div class=\"MessageBox MessageBoxInfo\">
\t";
        // line 14
        echo getLang("EmailIntegration_ExportOnly_Intro");
        echo "</div>

";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "

\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegration_ExportOnly_Header", array(), "any"), ), "method"), "1");
        echo "

\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegration_ExportOnly_Current_Label", array(), "any")) . (":"), "last" => true), ), "method"), "1");
        echo "

\t\t<input type=\"text\" id=\"emailintegration_exportonly_subscribercount\" class=\"chromeless Field50\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getSubscriptionCount", array(), "any"), "1");
        echo "\" readonly=\"readonly\" style=\"text-align:right;\" />

\t\t<span id=\"emailintegration_exportonly_subscriberactions\" style=\"";
        // line 25
        if ((!$this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getSubscriptionCount", array(), "any"))) {
            echo "display:none;";
        }
        echo "\">
\t\t\t(<a href=\"#\" class=\"exportSubscriptionsButton\">";
        // line 26
        echo getLang("EmailIntegration_ExportOnly_Export_Button");
        echo "</a>
\t\t\t";
        // line 27
        echo getLang("Or");
        echo "\t\t\t<a href=\"#\" class=\"deleteSubscriptionsButton\">";
        // line 28
        echo getLang("EmailIntegration_ExportOnly_Delete_Button");
        echo "</a>)
\t\t</span>

\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "
";
    }

}
