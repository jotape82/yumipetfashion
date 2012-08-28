<?php

/* singleselect.frontend.html */
class __TwigTemplate_43cedd5466c5637597dc4f273e586162 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<select ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " size=\"1\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldOptions']) ? $context['FormFieldOptions'] : null));
        echo "
</select>";
    }

}
