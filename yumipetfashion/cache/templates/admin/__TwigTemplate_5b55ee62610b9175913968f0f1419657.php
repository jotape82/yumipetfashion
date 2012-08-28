<?php

/* Snippets/MessageBox.html */
class __TwigTemplate_5b55ee62610b9175913968f0f1419657 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"MessageBox MessageBox";
        echo twig_safe_filter((isset($context['MsgBox_Type']) ? $context['MsgBox_Type'] : null));
        echo "\">
\t\t";
        // line 2
        echo twig_safe_filter((isset($context['MsgBox_Message']) ? $context['MsgBox_Message'] : null));
        echo "
\t</div>";
    }

}
