<?php

/* settings.emailintegration.emailmarketer.tpl */
class __TwigTemplate_ab1afc2817ce0a07ee2eb2f4cc7b685c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'common' => array(array($this, 'block_common')),
        );
    }

    public function display(array $context)
    {
        if (null === $this->parent) {
            $this->parent = clone $this->env->loadTemplate("settings.emailintegration.common.tpl");
            $this->parent->pushBlocks($this->blocks);
        }
        $this->parent->display($context);
    }

    // line 3
    public function block_common($context, $parents)
    {
        echo "\t";
        // line 4
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "\t";
        // line 5
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startForm", array(), "method"), "1");
        echo "

\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailMarketerIntegrationSettings", array(), "any"), ), "method"), "1");
        echo "

\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailMarketerXMLApiUrl", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 13
        echo "

\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "input", array("text", ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) . ("[url]"), $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "GetValue", array("url", ), "method"), array("class" => "Field250"), ), "method"), "1");
        // line 17
        echo "
\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailMarketerXMLApiUrl", "EmailMarketerXMLApiUrlHelp", ), "method"), "1");
        echo "

\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailMarketerXMLApiUsername", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 24
        echo "

\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "input", array("text", ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) . ("[username]"), $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "GetValue", array("username", ), "method"), array("class" => "Field250"), ), "method"), "1");
        // line 28
        echo "
\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailMarketerXMLApiUsername", "EmailMarketerXMLApiUsernameHelp", ), "method"), "1");
        echo "

\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailMarketerXMLApiUsertoken", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 35
        echo "

\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "input", array("text", ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any")) . ("[usertoken]"), $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "GetValue", array("usertoken", ), "method"), array("class" => "Field250"), ), "method"), "1");
        // line 39
        echo "
\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EmailMarketerXMLApiUsertoken", "EmailMarketerXMLApiUsertokenHelp", ), "method"), "1");
        echo "

\t\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("label" => " "), ), "method"), "1");
        // line 46
        echo "
\t\t\t<input type=\"button\" class=\"button ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
        echo "_verifyApiKey\" style=\"width:120px;\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailMarketerVerifyApi", array(), "any"), "1");
        echo "\" />
\t\t\t&nbsp;
\t\t\t<a href=\"#\" class=\"EmailIntegration_EmailMarketer_ApiKeyHelp\">";
        // line 49
        echo getLang("WhereCanIFindMyApiDetails");
        echo "</a>

\t\t\t<span class=\"apiConfiguredContainer\" ";
        // line 51
        if ((!$this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any"))) {
            echo "style=\"display:none;\"";
        }
        echo ">
\t\t\t\t&nbsp;
\t\t\t\t<input type=\"button\" class=\"button ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
        echo "_refreshLists\" style=\"width:100px;\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationRefreshLists", array(), "any"), "1");
        echo "\" />
\t\t\t</span>

\t\t\t<span class=\"apiNotConfiguredContainer\" ";
        // line 56
        if ($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "isConfigured", array(), "any")) {
            echo "style=\"display:none;\"";
        }
        echo ">
\t\t\t\t&nbsp;
\t\t\t\t<input type=\"button\" class=\"button ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
        echo "_refreshLists\" style=\"width:100px;\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EmailIntegrationRefreshLists", array(), "any"), "1");
        echo "\" disabled=\"disabled\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "VerifyApiDetailsFirst", array(), "any"), "1");
        echo "\" />
\t\t\t</span>
\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
        echo "

\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endForm", array(), "method"), "1");
        echo "

\t";
        // line 64
        $this->getParent($context, $parents);
        echo "
\t<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "jslang", array(array(0 => "emailintegration_emailmarketer_name", 1 => "EmailMarketerXMLApiUrlRequired", 2 => "EmailMarketerXMLApiUsernameRequired", 3 => "EmailMarketerXMLApiUsertokenRequired", 4 => "EmailMarketerApiVerifyRequired"), ), "method"), "1");
        // line 73
        echo "
\t//]]></script>

";
    }

}
