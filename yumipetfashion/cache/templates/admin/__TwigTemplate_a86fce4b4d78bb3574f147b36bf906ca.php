<?php

/* singleline.frontend.html */
class __TwigTemplate_a86fce4b4d78bb3574f147b36bf906ca extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"text\" ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['FormFieldValue']) ? $context['FormFieldValue'] : null));
        echo "\" />";
    }

}
