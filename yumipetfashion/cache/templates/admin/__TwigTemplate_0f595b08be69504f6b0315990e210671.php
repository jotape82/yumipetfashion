<?php

/* settings.emailintegration.manage.tpl */
class __TwigTemplate_0f595b08be69504f6b0315990e210671 extends Twig_Template
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
lang.EmailIntegrationGetListsFailed = \"";
        // line 8
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegrationGetListsFailed"), "'");
        echo "\";
lang.EmailIntegrationGetListFieldsFailed = \"";
        // line 9
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegrationGetListFieldsFailed"), "'");
        echo "\";
lang.NoneString = \"";
        // line 10
        echo Interspire_Template_Extension::jsFilter(getLang("NoneString"), "'");
        echo "\";
lang.EmailIntegrationIncompleteRuleError = \"";
        // line 11
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegrationIncompleteRuleError"), "'");
        echo "\";
lang.EmailIntegrationChooseAListToSync = \"";
        // line 12
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegrationChooseAListToSync"), "'");
        echo "\";
lang.EmailIntegrationFieldSyncNotRequired = \"";
        // line 13
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegrationFieldSyncNotRequired"), "'");
        echo "\";
lang.EmailIntegration_ConfirmRefreshLists = \"";
        // line 14
        echo Interspire_Template_Extension::jsFilter(getLang("EmailIntegration_ConfirmRefreshLists"), "'");
        echo "\";
//]]></script>

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['modules']) ? $context['modules'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t";
            // line 18
            if ((($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any")) && ($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getSettingsJavaScript", array(), "any"))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getLists", array(), "any")))) {
                echo "\t\t<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\t\t\t\$(function(){
\t\t\t\tif (Interspire_EmailIntegration_ProviderModel.modules[\"";
                // line 21
                echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"));
                echo "\"]) {
\t\t\t\t\t// load some commong language for each module
\t\t\t\t\tlang.";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
                echo "_name = \"";
                echo Interspire_Template_Extension::jsFilter(getLang(($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) . ("_name")), "'");
                echo "\";

\t\t\t\t\t// preload this module's list information
\t\t\t\t\tvar provider = Interspire_EmailIntegration_ProviderModel.modules[\"";
                // line 26
                echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"));
                echo "\"];
\t\t\t\t\tprovider.lists.result = [];
\t\t\t\t\t";
                // line 28
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getLists", array(), "any"));
                $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
                $length = $countable ? count($context['_seq']) : null;
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if ($countable) {
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context['_key'] => $context['list']) {
                    echo "\t\t\t\t\t\tprovider.lists.result.push(new Interspire_EmailIntegration_ListModel(provider, \"";
                    // line 29
                    echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['list']) ? $context['list'] : null), "provider_list_id", array(), "any"));
                    echo "\", \"";
                    echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['list']) ? $context['list'] : null), "provider_list_id", array(), "any"));
                    echo "\", \"";
                    echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['list']) ? $context['list'] : null), "name", array(), "any"));
                    echo "\"));
\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if ($countable) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "\t\t\t\t}
\t\t\t});
\t\t//]]></script>
\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
(function(\$){
\t\$(function(){
\t\t\$('#emailIntegrationSettingsForm').submit(function(event){
\t\t\t\$.each(Interspire_EmailIntegration_ProviderModel.modules, function(moduleId, module){
\t\t\t\tif (!module.isSelected()) {
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (!module.validateSettingsForm()) {
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\$('#tabs').tabs('select', module.id);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t});
\t});
})(jQuery);
//]]></script>

<form action=\"index.php?ToDo=saveUpdatedEmailIntegrationSettings\" id=\"emailIntegrationSettingsForm\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context['tab']) ? $context['tab'] : null), "1");
        echo "\" type=\"hidden\" />
\t<div id=\"content\">
\t\t<h1>";
        // line 60
        echo getLang("EmailMarketing");
        echo "</h1>

\t\t<p class=\"intro\">";
        // line 62
        echo getLang("EmailIntegrationSettingsIntro");
        echo "</p>

\t\t<div id=\"Status\">";
        // line 64
        echo twig_safe_filter((isset($context['message']) ? $context['message'] : null));
        echo "</div>

\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "saveButton", array(), "any"), "1");
        echo "
\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "cancelButton", array(), "any"), "1");
        echo "
\t\t";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "

\t\t";
        // line 71
        echo "

\t\t<div id=\"tabs\" class=\"tabs\">
\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tabs", array((isset($context['tabs']) ? $context['tabs'] : null), ), "method"), "1");
        echo "

\t\t\t<div id=\"modules\" class=\"";
        // line 76
        if (((isset($context['tab']) ? $context['tab'] : null)) && ((isset($context['tab']) ? $context['tab'] : null) != "modules")) {
            echo "ui-tabs-hide";
        }
        echo "\">
\t\t\t\t";
        // line 77
        $this->env->loadTemplate("settings.emailintegration.general.tpl")->display($context);
        echo "\t\t\t</div>

\t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['modules']) ? $context['modules'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t\t\t";
            // line 81
            if ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "enabled", array(), "any")) {
                echo "\t\t\t\t\t<input type=\"hidden\" name=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
                echo "[isconfigured]\" value=\"";
                echo twig_default_filter(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any"), "1"), 0);
                echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
                echo "[rules]\" value=\"\" />
\t\t\t\t\t<div id=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
                echo "\" class=\"";
                if ((isset($context['tab']) ? $context['tab'] : null) != $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) {
                    echo "ui-tabs-hide";
                }
                echo "\">
\t\t\t\t\t\t";
                // line 85
                if ($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getSettingsTemplate", array(), "any")) {
                    echo "\t\t\t\t\t\t\t";
                    // line 86
                    $template = $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getSettingsTemplate", array(), "any");
                    if (!$template instanceof Twig_Template) {
                        $template = $this->env->loadTemplate($template);
                    }
                    $template->display($context);
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    // line 88
                    $this->env->loadTemplate("settings.emailintegration.common.tpl")->display($context);
                    echo "\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 91
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "\t\t</div>
\t</div>
</form>

<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
(function(\$){

\t\$(function(){
\t\t\$('#tabs').tabs({
\t\t\tselect: function(event, ui){
\t\t\t\t\$('#currentTab').val(ui.panel.id);
\t\t\t}
\t\t});

\t\t";
        // line 107
        if ((isset($context['tab']) ? $context['tab'] : null)) {
            echo "\$('#tabs').tabs('select', '";
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter((isset($context['tab']) ? $context['tab'] : null));
            echo "');";
        }
        echo "
\t\t\$('.cancelButton').click(function(event){
\t\t\tevent.preventDefault();

\t\t\tif (confirm(\"";
        // line 112
        echo getLang("ConfirmCancel");
        echo "\")) { ";
        echo "
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewEmailIntegrationSettings\";
\t\t\t}
\t\t});
\t});

})(jQuery);
//]]></script>
";
    }

}
