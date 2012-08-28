<?php

/* category.form.tpl */
class __TwigTemplate_6b914ea870984ee28b8a858dc30ac32c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"Styles/categories.css\" type=\"text/css\" />
\t\t\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" name=\"frmAddCategory\" id=\"frmAddCategory\" method=\"post\">
\t\t\t";
        // line 3
        echo twig_safe_filter((isset($context['hiddenFields']) ? $context['hiddenFields'] : null));
        echo "
\t\t\t<div class=\"BodyContainer\">
\t\t\t<table class=\"OuterPanel\">
\t\t\t  <tr>
\t\t\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['CatTitle']) ? $context['CatTitle'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['CatIntro']) ? $context['CatIntro'] : null));
        echo "</p>
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t  <tr>
\t\t\t\t<td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 18
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 19
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"AddAnother\" class=\"FormButton\" style=\"width:130px\" />\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"CategoryCancelButton FormButton\">
\t\t\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"details\" type=\"hidden\">

\t\t\t\t\t\t<br /><img src=\"images/blank.gif\" width=\"1\" height=\"10\" />
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"CategoryFormTab active\" id=\"tab_details\">";
        // line 29
        echo getLang("Details");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"CategoryFormTab\" id=\"tab_optimizer\">";
        // line 30
        echo getLang("GoogleWebsiteOptimizer");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t<div id=\"div_details\" style=\"padding-top: 10px;\">
\t\t\t\t\t  <table class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 40
        echo getLang("CatDetails");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 44
        echo getLang("CatName");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"catname\" id=\"catname\" class=\"Field650\" value=\"";
        // line 47
        echo twig_safe_filter((isset($context['CategoryName']) ? $context['CategoryName'] : null));
        echo "\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 52
        echo getLang("CatDesc");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 55
        echo twig_safe_filter((isset($context['WYSIWYG']) ? $context['WYSIWYG'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 60
        echo getLang("CatParentCategory");
        echo ":
\t\t\t\t\t\t\t\t<br/>&nbsp;&nbsp;&nbsp;<small><a href=\"#\" id=\"expandCategoryList\">";
        // line 61
        echo getLang("ExpandCategory");
        echo "</a></small>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select size=\"10\" name=\"catparentid\" id=\"catparentid\" class=\"Field650\">
\t\t\t\t\t\t\t\t";
        // line 65
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 67
        echo getLang("CatParentCategory");
        echo "', '";
        echo getLang("CatParentCategoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 73
        echo getLang("TemplateLayoutFile");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"catlayoutfile\" id=\"catlayoutfile\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t";
        // line 77
        echo twig_safe_filter((isset($context['LayoutFiles']) ? $context['LayoutFiles'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('templatelayout');\" onmouseover=\"ShowHelp('templatelayout', '";
        // line 79
        echo getLang("TemplateLayoutFile");
        echo "', '";
        echo getLang("CategoryTemplateLayoutFileHelp1");
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo getLang("CategoryTemplateLayoutFileHelp2");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"templatelayout\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 85
        echo getLang("CatSort");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"catsort\" id=\"catsort\" class=\"Field\" size=\"5\" value=\"";
        // line 88
        echo twig_safe_filter((isset($context['CategorySort']) ? $context['CategorySort'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 89
        echo getLang("CatSort");
        echo "', '";
        echo getLang("CatSortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr id='CategoryImageRow' style=\"display:none\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 95
        echo getLang("CatImage");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"file\" id=\"catimagefile\" name=\"catimagefile\" class=\"Field\" ";
        // line 98
        echo twig_safe_filter((isset($context['DisableFileUpload']) ? $context['DisableFileUpload'] : null));
        echo " />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 99
        echo getLang("CatImage");
        echo "', '";
        echo getLang("CatImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 106
        echo getLang("SearchEngineOptimization");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 110
        echo getLang("PageTitle");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"catpagetitle\" name=\"catpagetitle\" class=\"Field650\" value=\"";
        // line 113
        echo twig_safe_filter((isset($context['CategoryPageTitle']) ? $context['CategoryPageTitle'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('pagetitlehelp');\" onmouseover=\"ShowHelp('pagetitlehelp', '";
        // line 114
        echo getLang("PageTitle");
        echo "', '";
        echo getLang("CategoryPageTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"pagetitlehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 120
        echo getLang("MetaKeywords");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"catmetakeywords\" name=\"catmetakeywords\" class=\"Field650\" value=\"";
        // line 123
        echo twig_safe_filter((isset($context['CategoryMetaKeywords']) ? $context['CategoryMetaKeywords'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('metataghelp');\" onmouseover=\"ShowHelp('metataghelp', '";
        // line 124
        echo getLang("MetaKeywords");
        echo "', '";
        echo getLang("MetaKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"metataghelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 130
        echo getLang("MetaDescription");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"catmetadesc\" name=\"catmetadesc\" class=\"Field650\" value=\"";
        // line 133
        echo twig_safe_filter((isset($context['CategoryMetaDesc']) ? $context['CategoryMetaDesc'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('metadeschelp');\" onmouseover=\"ShowHelp('metadeschelp', '";
        // line 134
        echo getLang("MetaDescription");
        echo "', '";
        echo getLang("MetaDescriptionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"metadeschelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 140
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"catsearchkeywords\" name=\"catsearchkeywords\" class=\"Field650\" value=\"";
        // line 143
        echo twig_safe_filter((isset($context['CategorySearchKeywords']) ? $context['CategorySearchKeywords'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('searchkeywords');\" onmouseover=\"ShowHelp('searchkeywords', '";
        // line 144
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"searchkeywords\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t </table>
\t\t\t\t\t";
        // line 149
        if (twig_length_filter($this->env, (isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null))) {
            echo "\t\t\t\t\t<table width=\"100%\" class=\"Panel\" id='comparisons'>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=2>
\t\t\t\t\t\t\t\t<span class=\"HelpText\" id=\"ShoppingComparisonCategoryMappingsHeading\">
\t\t\t\t\t\t\t\t";
            // line 154
            echo getLang("ShoppingComparisonCategoryMappings");
            echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            // line 158
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null));
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
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
                // line 161
                echo getLang("ShoppingComparisonFieldLabel", array("name" => $this->getEnvironment()->getExtension('interspire')->mTruncateSpliceFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "method"), 16)));
                echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"comparisoncategory\" name=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "_categoryid\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['AlternateCategoriesCache']) ? $context['AlternateCategoriesCache'] : null), $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), array(), "array"), "categoryid", array(), "any"), "1");
                echo "\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"comparisoncategory_path\" name=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "_categorypath\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"Field500 comparisoncategory_readonly categoryselect\" readonly='readonly' value=\"";
                // line 166
                echo twig_safe_filter($this->getAttribute($this->getAttribute((isset($context['AlternateCategoriesCache']) ? $context['AlternateCategoriesCache'] : null), $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), array(), "array"), "path", array(), "any"));
                echo "\" />
\t\t\t\t\t\t\t\t<a class='categoryselect' title=\"Browse Shopping Comparison Categories\" href='#'>
\t\t\t\t\t\t\t\t\t<img width=\"16\" height=\"16\" alt=\"Choose Category\" src=\"images/folder.gif\" border='0'>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"categoryclear\" href='#' title='Clear Shopping Comparison Category'>";
                // line 170
                echo getLang("Clear");
                echo "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
            // line 173
            echo "\t\t\t\t\t</table>
\t\t\t\t\t </div>
\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t <div id=\"div_optimizer\" style=\"padding-top: 10px; display:none;\">
\t\t\t\t\t\t<p class=\"InfoTip\">";
        // line 178
        echo twig_safe_filter((isset($context['GoogleWebsiteOptimizerIntro']) ? $context['GoogleWebsiteOptimizerIntro'] : null));
        echo "</p>

\t\t\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"";
        // line 180
        echo twig_safe_filter((isset($context['ShowEnableGoogleWebsiteOptimzer']) ? $context['ShowEnableGoogleWebsiteOptimzer'] : null));
        echo "\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 182
        echo getLang("GoogleWebsiteOptimizer");
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t\t";
        // line 186
        echo getLang("EnableGoogleWebsiteOptimizer");
        echo "?
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input ";
        // line 189
        echo twig_safe_filter((isset($context['DisableOptimizerCheckbox']) ? $context['DisableOptimizerCheckbox'] : null));
        echo " type=\"checkbox\" name=\"catenableoptimizer\" id=\"catenableoptimizer\" ";
        echo twig_safe_filter((isset($context['CheckEnableOptimizer']) ? $context['CheckEnableOptimizer'] : null));
        echo " />
\t\t\t\t\t\t\t\t\t<label for=\"catenableoptimizer\">";
        // line 190
        echo getLang("YesEnableGoogleWebsiteOptimizer");
        echo "</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t";
        // line 194
        echo twig_safe_filter((isset($context['OptimizerConfigForm']) ? $context['OptimizerConfigForm'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\" border=\"0\" id=\"SaveButtons\" class=\"PanelPlain\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 199
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 200
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"AddAnother\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 201
        echo getLang("Cancel");
        echo "\" class=\"CategoryCancelButton FormButton\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t\t </table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</form>

";
        // line 212
        $this->env->loadTemplate("category.select.modal.tpl")->display($context);
        echo "
<script type=\"text/javascript\" src=\"script/category.selector.js?";
        // line 214
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/categories.js?";
        // line 215
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

<script type=\"text/javascript\">
\t\$.extend(lang, {
\t\tCancelMessage\t\t: \"";
        // line 219
        echo twig_safe_filter((isset($context['CancelMessage']) ? $context['CancelMessage'] : null));
        echo "\",
\t\tNoCategoryName\t\t: \"";
        // line 220
        echo Interspire_Template_Extension::jsFilter(getLang("NoCategoryName"), "'");
        echo "\",
\t\tNoParentCategory\t: \"";
        // line 221
        echo Interspire_Template_Extension::jsFilter(getLang("NoParentCategory"), "'");
        echo "\",
\t\tNoCatSortOrder\t\t: \"";
        // line 222
        echo Interspire_Template_Extension::jsFilter(getLang("NoCatSortOrder"), "'");
        echo "\",
\t\tChooseValidImage\t: \"";
        // line 223
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseValidImage"), "'");
        echo "\",
\t\tCollapseCategory\t: \"";
        // line 224
        echo Interspire_Template_Extension::jsFilter(getLang("CollapseCategory"), "'");
        echo "\",
\t\tExpandCategory\t\t: \"";
        // line 225
        echo Interspire_Template_Extension::jsFilter(getLang("ExpandCategory"), "'");
        echo "\",
\t\tCategorySelectModalIntro\t\t\t: \"";
        // line 226
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingModalIntro"), "'");
        echo "\",
\t\tCategorySelectModalTitle\t\t\t: \"";
        // line 227
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingModalTitle"), "'");
        echo "\",
\t\tCategorySelectLeafCategorySelected\t: \"";
        // line 228
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingLeafCategorySelected"), "'");
        echo "\",
\t\tCategorySelectChooseLeafCategory\t: \"";
        // line 229
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingChooseLeafCategory"), "'");
        echo "\",
\t\tShoppingComparisonCategoryMappings\t: \"";
        // line 230
        echo Interspire_Template_Extension::jsFilter(getLang("ShoppingComparisonCategoryMappings"), "'");
        echo "\",
\t\tShoppingComparisonCategoryMappingsDesc : \"";
        // line 231
        echo Interspire_Template_Extension::jsFilter(getLang("ShoppingComparisonCategoryMappingsDesc"), "'");
        echo "\"
\t});

\tCategoryForm.skipOptimizerConfirmMsg = ";
        // line 234
        echo twig_safe_filter(twig_default_filter((isset($context['SkipOptimizerConfirmMsg']) ? $context['SkipOptimizerConfirmMsg'] : null), "false"));
        echo ";
\tCategoryForm.currentTab = '";
        // line 235
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "';

\tCategoryForm.shoppingComparisonModules = {};

\t";
        // line 239
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null));
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
            echo "\t\tCategoryForm.shoppingComparisonModules[\"";
            // line 240
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "any"));
            echo "\"] = {
\t\t\tname: \"";
            // line 241
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "any"));
            echo "\"
\t\t};
\t";
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
        // line 243
        echo "</script>

";
    }

}
