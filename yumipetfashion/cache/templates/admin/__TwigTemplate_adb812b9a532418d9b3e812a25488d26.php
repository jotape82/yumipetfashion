<?php

/* liveperson_form.tpl */
class __TwigTemplate_adb812b9a532418d9b3e812a25488d26 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div style=\"margin-top: -20px; height:85%\">
\t<h2>";
        // line 2
        echo getLang("LivePersonCreateAccount");
        echo "</h2>
\t<p class=\"Intro\">";
        // line 3
        echo getLang("LivePersonCreateAccountIntro");
        echo "</p>
\t<form method=\"get\" action=\"http://server.iad.liveperson.net/hc/\" onsubmit=\"return ValidateLivePersonForm();\">
\t\t<input type=\"hidden\" name=\"cmd\" value=\"oemRegisterNewUser\" />
\t\t<input type=\"hidden\" name=\"oem\" value=\"LA\" />
\t\t<input type=\"hidden\" name=\"varId\" value=\"4970\" />
\t\t<input type=\"hidden\" name=\"siteClass\" value=\"3\" />
\t\t<input type=\"hidden\" name=\"url\" value=\"";
        // line 9
        echo twig_safe_filter((isset($context['ShopPathNormal']) ? $context['ShopPathNormal'] : null));
        echo "\" />
\t\t<input type=\"hidden\" name=\"returnUrl\" value=\"";
        // line 10
        echo twig_safe_filter((isset($context['ShopPathNormal']) ? $context['ShopPathNormal'] : null));
        echo "/admin/index.php?ToDo=liveChatSettingsCallback&amp;module=livechat_liveperson&amp;func=PerformLivePersonRegistration\" />
\t\t<table class=\"Panel\">
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 14
        echo getLang("Username");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"user\" id=\"lp_username\" class=\"Field200\" value=\"";
        // line 17
        echo twig_safe_filter((isset($context['CurrentUser']) ? $context['CurrentUser'] : null));
        echo "\" autocomplete=\"off\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 22
        echo getLang("Password");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"lp_password\" class=\"Field200\" autocomplete=\"off\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 30
        echo getLang("EmailAddress");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"lp_email\" class=\"Field200\" value=\"";
        // line 33
        echo twig_safe_filter((isset($context['CurrentEmail']) ? $context['CurrentEmail'] : null));
        echo "\" autocomplete=\"off\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 38
        echo getLang("LivePersonPosition");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"lp_position\" id=\"lp_position\" class=\"Field200\">
\t\t\t\t\t\t<option value='panel'>";
        // line 42
        echo getLang("LivePersonPositionSide");
        echo "</option>
\t\t\t\t\t\t<option value='header'>";
        // line 43
        echo getLang("LivePersonPositionHeader");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<table class=\"PanelPlain\">
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t<td><input type=\"submit\" value=\"";
        // line 51
        echo getLang("LivePersonCreateAccount");
        echo "\" class=\"FormButton\" style=\"width:110px\" /> <input type=\"button\" value=\"";
        echo getLang("Cancel");
        echo "\" onclick=\"window.parent.tb_remove()\" class=\"FormButton\" /></td>
\t\t\t</tr>
\t\t</table>
\t</form>
</div>
<script type=\"text/javascript\">
function ValidateLivePersonForm()
{
\tif(!\$('#lp_username').val()) {
\t\talert('Please enter the username to use for your LivePerson account');
\t\t\$('#lp_username').focus();
\t\treturn false;
\t}

\tif(!\$('#lp_password').val()) {
\t\talert('Please enter the password to use for your LivePerson account');
\t\t\$('#lp_password').focus();
\t\treturn false;
\t}

\tif(\$('#lp_email').val().indexOf('@') == -1) {
\t\talert('Please enter the email address to use for your LivePerson account');
\t\t\$('#lp_email').focus();
\t\treturn false;
\t}
\twindow.parent.UpdatePosition(\$('#lp_position').val());
\treturn true;
}
</script>";
    }

}
