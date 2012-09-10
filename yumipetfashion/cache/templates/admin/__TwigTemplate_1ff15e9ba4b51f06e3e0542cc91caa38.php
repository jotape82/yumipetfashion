<?php

/* exporttemplates.form.grid.tpl */
class __TwigTemplate_1ff15e9ba4b51f06e3e0542cc91caa38 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<ul class=\"SortableList\" id=\"";
        echo twig_safe_filter((isset($context['TypeName']) ? $context['TypeName'] : null));
        echo "FieldList\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['GridData']) ? $context['GridData'] : null));
        echo "
</ul>";
    }

}
