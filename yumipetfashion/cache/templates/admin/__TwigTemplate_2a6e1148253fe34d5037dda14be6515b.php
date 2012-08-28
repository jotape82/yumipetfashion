<?php

/* settings.emailintegration.general.tpl */
class __TwigTemplate_2a6e1148253fe34d5037dda14be6515b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "

\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationSettings", array(), "any"), ), "method"), "1");
        echo "

\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationProviders", array(), "any")) . (":")), ), "method"), "1");
        echo "

\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("modules[]", (isset($context['selectableModules']) ? $context['selectableModules'] : null), (isset($context['selectedModules']) ? $context['selectedModules'] : null), array("multiple" => "multiple", "size" => 5, "class" => "Field300 ISSelectReplacement"), ), "method"), "1");
        // line 11
        echo "

\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNoProvidersNote", array(), "any"), ), "method"), "1");
        echo "

";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "

";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "

\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(), "any"), "1");
        echo "

\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NewsletterSettings", array(), "any"), ), "method"), "1");
        echo "

\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowMailingListDuringCheckout", array(), "any")) . ("?"), "for" => "ShowMailingListInvite"), ), "method"), "1");
        // line 26
        echo "

\t\t\t<input type=\"hidden\" name=\"ShowMailingListInvite\" value=\"0\" />
\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "ShowMailingListInvite", "id" => "ShowMailingListInvite", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesShowMailingListDuringCheckout", array(), "any"), "value" => 1, "checked" => $this->getAttribute((isset($context['config']) ? $context['config'] : null), "ShowMailingListInvite", array(), "any"), "class" => "CheckboxTogglesOtherElements"), ), "method"), "1");
        // line 36
        echo "

\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowMailingListDuringCheckout", "ShowMailingListDuringCheckout_Help", ), "method"), "1");
        echo "

\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "

\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "ShowIf_ShowMailingListInvite_Checked", "hidden" => (!$this->getAttribute((isset($context['config']) ? $context['config'] : null), "ShowMailingListInvite", array(), "any"))), ), "method"), "1");
        echo "

\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AutomaticallyTickDuringCheckout", array(), "any")) . ("?"), "for" => "MailAutomaticallyTickNewsletterBox"), ), "method"), "1");
        // line 49
        echo "

\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "nodeJoin", array(), "any"), "1");
        echo "

\t\t\t<input type=\"hidden\" name=\"MailAutomaticallyTickNewsletterBox\" value=\"0\" />
\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("id" => "MailAutomaticallyTickNewsletterBox", "name" => "MailAutomaticallyTickNewsletterBox", "value" => 1, "checked" => $this->getAttribute((isset($context['config']) ? $context['config'] : null), "MailAutomaticallyTickNewsletterBox", array(), "any"), "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesTickNewsletterBox", array(), "any")), ), "method"), "1");
        // line 60
        echo "

\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("AutomaticallyTickDuringCheckout", "AutomaticallyTickDuringCheckout_Help", ), "method"), "1");
        echo "

\t\t";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

\t\t";
        // line 66
        if ((isset($context['enabledSelectableModules']) ? $context['enabledSelectableModules'] : null)) {
            echo "
\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterDoubleOptin", array(), "any")) . (":"), "for" => "newsletterDoubleOptIn", "class" => "formRowIndent1"), ), "method"), "1");
            // line 72
            echo "

\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("newsletterDoubleOptIn", array(1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterDoubleOptin_yes", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterDoubleOptin_no", array(), "any")), $this->getAttribute((isset($context['config']) ? $context['config'] : null), "EmailIntegrationNewsletterDoubleOptin", array(), "any"), array("id" => "newsletterDoubleOptIn"), ), "method"), "1");
            // line 79
            echo "

\t\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailIntegrationNewsletterDoubleOptin", "EmailIntegrationDoubleOptInHelp", ), "method"), "1");
            echo "

\t\t\t";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
            echo "

\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterSendWelcome", array(), "any")) . (":"), "for" => "newsletterSendWelcome", "class" => "formRowIndent1"), ), "method"), "1");
            // line 89
            echo "

\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("newsletterSendWelcome", array(1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterSendWelcome_yes", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationNewsletterSendWelcome_no", array(), "any")), $this->getAttribute((isset($context['config']) ? $context['config'] : null), "EmailIntegrationNewsletterSendWelcome", array(), "any"), array("id" => "newsletterSendWelcome"), ), "method"), "1");
            // line 96
            echo "

\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailIntegrationNewsletterSendWelcome", "EmailIntegrationSendWelcomeHelp", ), "method"), "1");
            echo "

\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
            echo "

\t\t";
        }
        // line 102
        echo "
\t";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "

";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "

";
        // line 108
        if ((isset($context['enabledSelectableModules']) ? $context['enabledSelectableModules'] : null)) {
            echo "
\t";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
            echo "

\t\t";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NewCustomerSubscriptionSettings", array(), "any"), ), "method"), "1");
            echo "

\t\t";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationAutomaticallyTickOrderDuringCheckout", array(), "any")) . ("?"), "for" => "MailAutomaticallyTickOrderBox"), ), "method"), "1");
            // line 117
            echo "

\t\t\t<input type=\"hidden\" name=\"MailAutomaticallyTickOrderBox\" value=\"0\" />
\t\t\t";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("id" => "MailAutomaticallyTickOrderBox", "name" => "MailAutomaticallyTickOrderBox", "value" => 1, "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationAutomaticallyTickOrderDuringCheckoutYes", array(), "any"), "checked" => $this->getAttribute((isset($context['config']) ? $context['config'] : null), "MailAutomaticallyTickOrderBox", array(), "any")), ), "method"), "1");
            // line 126
            echo "

\t\t\t";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailIntegrationAutomaticallyTickOrderDuringCheckout", "EmailIntegrationAutomaticallyTickOrderDuringCheckoutHelp", ), "method"), "1");
            echo "

\t\t";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
            echo "

\t\t";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderDoubleOptin", array(), "any")) . (":"), "for" => "orderDoubleOptIn"), ), "method"), "1");
            // line 135
            echo "

\t\t\t";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("orderDoubleOptIn", array(1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderDoubleOptin_yes", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderDoubleOptin_no", array(), "any")), $this->getAttribute((isset($context['config']) ? $context['config'] : null), "EmailIntegrationOrderDoubleOptin", array(), "any"), array("id" => "orderDoubleOptIn"), ), "method"), "1");
            // line 142
            echo "

\t\t\t";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailIntegrationNewsletterDoubleOptin", "EmailIntegrationDoubleOptInHelp", ), "method"), "1");
            echo "

\t\t";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
            echo "

\t\t";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderSendWelcome", array(), "any")) . (":"), "for" => "orderSendWelcome"), ), "method"), "1");
            // line 151
            echo "

\t\t\t";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("orderSendWelcome", array(1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderSendWelcome_yes", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationOrderSendWelcome_no", array(), "any")), $this->getAttribute((isset($context['config']) ? $context['config'] : null), "EmailIntegrationOrderSendWelcome", array(), "any"), array("id" => "orderSendWelcome"), ), "method"), "1");
            // line 158
            echo "

\t\t\t";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailIntegrationNewsletterSendWelcome", "EmailIntegrationSendWelcomeHelp", ), "method"), "1");
            echo "

\t\t";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
            echo "

\t";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
            echo "

";
        }
    }

}
