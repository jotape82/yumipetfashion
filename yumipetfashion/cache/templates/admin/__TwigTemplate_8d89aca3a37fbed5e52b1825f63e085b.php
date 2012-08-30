<?php

/* formfield.frontend.html */
class __TwigTemplate_8d89aca3a37fbed5e52b1825f63e085b extends Twig_Template
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
