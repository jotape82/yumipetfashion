<?php

/* settings.emailintegration.common.tpl */
class __TwigTemplate_f73f8171b772748b9cf06f8372e32b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'notconfigured' => array(array($this, 'block_notconfigured')),
            'newsletterRuleBuilder' => array(array($this, 'block_newsletterRuleBuilder')),
            'customerRuleBuilder' => array(array($this, 'block_customerRuleBuilder')),
            'configured' => array(array($this, 'block_configured')),
            'common' => array(array($this, 'block_common')),
        );
    }

    public function display(array $context)
    {
        // line 1
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
<div class=\"apiNotConfiguredContainer\" ";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any")) {
            echo "style=\"display:none;\"";
        }
        echo ">
\t";
        // line 5
        $this->getBlock('notconfigured', $context);
        // line 9
        echo "</div>

";
        // line 12
        $this->getBlock('common', $context);
    }

    // line 5
    public function block_notconfigured($context, $parents)
    {
        echo "\t\t<div class=\"MessageBox MessageBoxInfo\">";
        // line 6
        echo getLang(($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) . ("_ConfigureEmailModuleFirst"), array("provider" => $this->getAttribute((isset($context['module']) ? $context['module'] : null), "name", array(), "any")));
        // line 8
        echo "</div>
\t";
    }

    // line 23
    public function block_newsletterRuleBuilder($context, $parents)
    {
        echo "\t\t\t\t<div class=\"newsletterRulesBuilderContainer\">";
        // line 24
        $this->env->loadTemplate("settings.emailintegration.newsletterrules.tpl")->display($context);
        echo "</div>
\t\t\t";
    }

    // line 27
    public function block_customerRuleBuilder($context, $parents)
    {
        echo "\t\t\t\t<div class=\"customerRulesBuilderContainer\">";
        // line 28
        $this->env->loadTemplate("settings.emailintegration.customerrules.tpl")->display($context);
        echo "</div>
\t\t\t";
    }

    // line 21
    public function block_configured($context, $parents)
    {
        echo "\t\t<div class=\"ruleBuildersContainer\">
\t\t\t";
        // line 23
        $this->getBlock('newsletterRuleBuilder', $context);
        // line 25
        echo "
\t\t\t";
        // line 27
        $this->getBlock('customerRuleBuilder', $context);
        // line 29
        echo "
\t\t\t<p class=\"note\">";
        // line 31
        echo getLang("EmailIntegrationRulesFooterNote", array("provider" => $this->getAttribute((isset($context['module']) ? $context['module'] : null), "name", array(), "any")));
        // line 33
        echo "</p>
\t\t</div>
\t";
    }

    // line 12
    public function block_common($context, $parents)
    {
        echo "
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\$(function(){
\tInterspire_EmailIntegration_ProviderModel.modules[\"";
        // line 16
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"));
        echo "\"].setConfigured(";
        if ($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ");
});
//]]></script>

<div class=\"apiConfiguredContainer\" ";
        // line 20
        if ((!$this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
\t";
        // line 21
        $this->getBlock('configured', $context);
        // line 35
        echo "</div>

";
    }

}
