<?php

/* formfield.frontend.html */
class __TwigTemplate_d7ef87edae01646dc87de4191bc0a56c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<dt>
\t<span class=\"Required FormFieldRequired\" style=\"visibility: ";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldRequiredVisable']) ? $context['FormFieldRequiredVisable'] : null));
        echo "\">*</span> <span class=\"FormFieldLabel\">";
        echo twig_safe_filter((isset($context['FormFieldLabel']) ? $context['FormFieldLabel'] : null));
        echo "</span>
</dt>
<dd>
\t";
        // line 5
        echo twig_safe_filter((isset($context['FormFieldExtraHidden']) ? $context['FormFieldExtraHidden'] : null));
        echo "
\t";
        // line 6
        echo twig_safe_filter((isset($context['FormFieldFieldData']) ? $context['FormFieldFieldData'] : null));
        echo "
</dd>";
    }

}
