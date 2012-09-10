<?php

/* exporttemplates.settings.csv.tpl */
class __TwigTemplate_c750a95eeadd55502ad17ad089f0c1fe extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr>
\t<td class=\"Heading2\" colspan=\"2\">";
        // line 2
        echo getLang("CSVSettingsTitle");
        echo "</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 6
        echo getLang("FieldSeparator");
        echo ":
\t</td>
\t<td>
\t\t<input type=\"text\" id=\"FieldSeparator\" name=\"CSV[FieldSeparator]\" style=\"width: 50px;\" maxlength=\"3\" value=\"";
        // line 9
        echo twig_safe_filter((isset($context['SettingFieldSeparator']) ? $context['SettingFieldSeparator'] : null));
        echo "\" />
\t\t<img onmouseout=\"HideHelp('dfieldSeparator');\" onmouseover=\"ShowHelp('dfieldSeparator', '";
        // line 10
        echo getLang("FieldSeparator");
        echo "', '";
        echo getLang("FieldSeparatorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t<div style=\"display: none;\" id=\"dfieldSeparator\"></div>
\t</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;";
        // line 16
        echo getLang("FieldEnclosure");
        echo ":
\t</td>
\t<td>
\t\t<input type=\"text\" id=\"FieldEnclosure\" name=\"CSV[FieldEnclosure]\" style=\"width: 50px;\" maxlength=\"1\" value=\"";
        // line 19
        echo twig_safe_filter((isset($context['SettingFieldEnclosure']) ? $context['SettingFieldEnclosure'] : null));
        echo "\" />
\t\t<img onmouseout=\"HideHelp('dfieldEnclosure');\" onmouseover=\"ShowHelp('dfieldEnclosure', '";
        // line 20
        echo getLang("FieldEnclosure");
        echo "', '";
        echo getLang("FieldEnclosureHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t<div style=\"display: none;\" id=\"dfieldEnclosure\"></div>
\t</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;";
        // line 26
        echo getLang("IncludeHeader");
        echo "\t</td>
\t<td>
\t\t<label><input type=\"checkbox\" id=\"IncludeHeader\" name=\"CSV[IncludeHeader]\" value=\"1\" ";
        // line 29
        echo twig_safe_filter((isset($context['SettingIncludeHeader']) ? $context['SettingIncludeHeader'] : null));
        echo " />";
        echo getLang("YesIncludeHeader");
        echo "</label>&nbsp;
\t\t<img onmouseout=\"HideHelp('dincludeHeader');\" onmouseover=\"ShowHelp('dincludeHeader', '";
        // line 30
        echo getLang("IncludeHeader");
        echo "', '";
        echo getLang("IncludeHeaderHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t<div style=\"display: none;\" id=\"dincludeHeader\"></div>
\t</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;";
        // line 36
        echo getLang("BlankLine");
        echo "\t</td>
\t<td>
\t\t<label><input type=\"checkbox\" id=\"BlankLine\" name=\"CSV[BlankLine]\" value=\"1\" ";
        // line 39
        echo twig_safe_filter((isset($context['SettingBlankLine']) ? $context['SettingBlankLine'] : null));
        echo " />";
        echo getLang("YesBlankLine");
        echo "</label>&nbsp;
\t</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;";
        // line 44
        echo getLang("SubItems");
        echo "\t</td>
\t<td>
\t\t<select id=\"SubItems\" name=\"CSV[SubItems]\">
\t\t\t<option value=\"combine\" ";
        // line 48
        echo twig_safe_filter((isset($context['SettingcombineSelected']) ? $context['SettingcombineSelected'] : null));
        echo ">";
        echo getLang("CombineSubItems");
        echo "</option>
\t\t\t<option value=\"expand\" ";
        // line 49
        echo twig_safe_filter((isset($context['SettingexpandSelected']) ? $context['SettingexpandSelected'] : null));
        echo ">";
        echo getLang("ExpandSubItems");
        echo "</option>
\t\t\t<option value=\"rows\" ";
        // line 50
        echo twig_safe_filter((isset($context['SettingrowsSelected']) ? $context['SettingrowsSelected'] : null));
        echo ">";
        echo getLang("RowsSubItems");
        echo "</option>
\t\t</select>
\t\t<img onmouseout=\"HideHelp('dsubItems');\" onmouseover=\"ShowHelp('dsubItems', '";
        // line 52
        echo getLang("SubItems");
        echo "', '";
        echo getLang("CombineSubItemsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t<div style=\"display: none;\" id=\"dsubItems\"></div>
\t\t<div style=\"margin-top: 3px; ";
        // line 54
        echo twig_safe_filter((isset($context['DisplaySubItems']) ? $context['DisplaySubItems'] : null));
        echo "\" id=\"SubItemToggle\">
\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t";
        // line 56
        echo getLang("SubItemSeparator");
        echo ": <input type=\"text\" id=\"SubItemSeparator\" name=\"CSV[SubItemSeparator]\" style=\"width: 50px;\" maxlength=\"1\" value=\"";
        echo twig_safe_filter((isset($context['SettingSubItemSeparator']) ? $context['SettingSubItemSeparator'] : null));
        echo "\" />
\t\t\t<img onmouseout=\"HideHelp('dsubItemSep');\" onmouseover=\"ShowHelp('dsubItemSep', '";
        // line 57
        echo getLang("SubItemSeparator");
        echo "', '";
        echo getLang("SubItemSeparatorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t<div style=\"display: none;\" id=\"dsubItemSep\"></div>
\t\t</div>
\t</td>
</tr>
<tr>
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;";
        // line 64
        echo getLang("LineEnding");
        echo ":
\t</td>
\t<td>
\t\t<select class=\"Field100\" name=\"CSV[LineEnding]\" id=\"LineEnding\">
\t\t\t<option value=\"Windows\" ";
        // line 68
        echo twig_safe_filter((isset($context['SettingWindowsSelected']) ? $context['SettingWindowsSelected'] : null));
        echo ">Windows</option>
\t\t\t<option value=\"Unix\" ";
        // line 69
        echo twig_safe_filter((isset($context['SettingUnixSelected']) ? $context['SettingUnixSelected'] : null));
        echo ">Mac/Unix</option>
\t\t</select>
\t</td>
</tr>

<script type=\"text/javascript\">
\t\$(\"#SubItems\").change(function() {
\t\tif (\$(\"#SubItems\").val() == \"combine\") {
\t\t\t\$(\"#SubItemToggle\").show();
\t\t}
\t\telse {
\t\t\t\$(\"#SubItemToggle\").hide();
\t\t}
\t});
\t\$(\"#SubItems\").change();

\tfunction ValidateCSV() {
\t\tif (\$('#FieldSeparator').val().length == 0 || (\$('#FieldSeparator').val().length > 1 && \$('#FieldSeparator').val().toLowerCase() != 'tab')) {
\t\t\talert('";
        // line 87
        echo getLang("FieldSeparatorValidate");
        echo "');
\t\t\t\$('#FieldSeparator').focus();
\t\t\treturn false;
\t\t}

\t\tif (\$('#FieldEnclosure').val().length == 0) {
\t\t\talert('";
        // line 93
        echo getLang("FieldEnclosureValidate");
        echo "');
\t\t\t\$('#fieldEnclosure').focus();
\t\t\treturn false;
\t\t}

\t\tif (\$('#SubItemSeparator').val().length == 0) {
\t\t\talert('";
        // line 99
        echo getLang("SubItemSeparatorValidate");
        echo "');
\t\t\t\$('#SubItemSeparator').focus();
\t\t\treturn false;
\t\t}
\t\telse if (\$('#SubItemSeparator').val() == \$('#FieldSeparator').val()) {
\t\t\talert('";
        // line 104
        echo getLang("SubItemSeparatorIsSame");
        echo "');
\t\t\t\$('#SubItemSeparator').focus();
\t\t\treturn false;
\t\t}

\t\treturn true;
\t}
</script>
";
    }

}
