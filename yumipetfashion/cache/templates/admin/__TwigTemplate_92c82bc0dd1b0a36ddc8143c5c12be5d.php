<?php

/* numberonly.frontend.html */
class __TwigTemplate_92c82bc0dd1b0a36ddc8143c5c12be5d extends Twig_Template
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
