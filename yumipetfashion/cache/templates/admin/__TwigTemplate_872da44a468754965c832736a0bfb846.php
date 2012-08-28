<?php

/* settings.comments.manage.tpl */
class __TwigTemplate_872da44a468754965c832736a0bfb846 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "<div id=\"content\">
\t<form action=\"index.php?ToDo=saveCommentSystemSettings\" method=\"post\" id=\"commentSystemForm\" accept-charset=\"utf-8\">
\t\t<input type=\"hidden\" name=\"currentTab\" id=\"currentTab\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['currentTab']) ? $context['currentTab'] : null), "1");
        echo "\" />
\t\t<h1>";
        // line 6
        echo getLang("CommentSettings");
        echo "</h1>
\t\t<p class=\"intro\">
\t\t\t";
        // line 8
        echo getLang("CommentSettingsIntro");
        echo "\t\t</p>

\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "

\t\t<p class=\"intro\">
\t\t\t<input type=\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\tor <a href=\"#\" id=\"cancelComments\">";
        // line 15
        echo getLang("Cancel");
        echo "</a>
\t\t</p>

\t\t<div id=\"tabs\" class=\"tabs\">
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tabs", array((isset($context['tabs']) ? $context['tabs'] : null), ), "method"), "1");
        echo "

\t\t\t<div class=\"tabContent\" id=\"general\">
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseCommentSystem", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "UseCommentSystem", array(), "any"), "required" => true), ), "method"), "1");
        echo "
\t\t\t\t\t<div id=\"commentSystemList\" class=\"ISSelect\" style=\"height: 80px;\">
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['commentSystems']) ? $context['commentSystems'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['system']) {
            echo "\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"commentSystem\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['system']) ? $context['system'] : null), "value", array(), "any"), "1");
            echo "\" ";
            if ($this->getAttribute((isset($context['system']) ? $context['system'] : null), "selected", array(), "any")) {
                echo "checked=\"checked\"";
            }
            echo "/>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['system']) ? $context['system'] : null), "label", array(), "any"), "1");
            echo "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['system'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "\t\t\t\t\t</div>
\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t</div>

\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['moduleTabContent']) ? $context['moduleTabContent'] : null));
        echo "
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#tabs').tabs({
\t\t\t\tselect: function(event, ui){
\t\t\t\t\t\$('#currentTab').val(ui.panel.id);
\t\t\t\t}
\t\t\t});

\t\t\t";
        // line 49
        if ((isset($context['currentTab']) ? $context['currentTab'] : null)) {
            echo "\$('#tabs').tabs('select', '";
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter((isset($context['currentTab']) ? $context['currentTab'] : null));
            echo "');";
        }
        echo "
\t\t\t\$(\"#cancelComments\").click(function() {
\t\t\t\tif(confirm('";
        // line 52
        echo getLang("ConfirmCancel");
        echo "')) {
\t\t\t\t\twindow.location = 'index.php?ToDo=viewCommentSystemSettings';
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</div>";
    }

}
