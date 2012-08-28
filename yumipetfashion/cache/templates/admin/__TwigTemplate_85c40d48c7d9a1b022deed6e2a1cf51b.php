<?php

/* formfield.frontend.html */
class __TwigTemplate_85c40d48c7d9a1b022deed6e2a1cf51b extends Twig_Template
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
