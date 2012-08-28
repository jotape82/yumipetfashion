<?php

/* Snippets/MenuItem.html */
class __TwigTemplate_b5163117a2937cd65db42cc3e6f1dafc extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li id=\"";
        echo twig_safe_filter((isset($context['MenuTabId']) ? $context['MenuTabId'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['MenuActive']) ? $context['MenuActive'] : null));
        echo "\">
<a class=\"TopMenuItem\" href=\"";
        // line 2
        echo twig_safe_filter((isset($context['MenuURL']) ? $context['MenuURL'] : null));
        echo "\">
<span class=\"CornerLeft\"></span>
<span class=\"MenuImage ";
        // line 4
        echo twig_safe_filter((isset($context['MenuTabId']) ? $context['MenuTabId'] : null));
        echo "\"></span>
<span class=\"MenuText\">";
        // line 5
        echo twig_safe_filter((isset($context['MenuName']) ? $context['MenuName'] : null));
        echo "</span>
<span class=\"Arrow\"></span>
<span class=\"CornerRight\"></span>
</a>

";
        // line 10
        echo twig_safe_filter((isset($context['SubMenuList']) ? $context['SubMenuList'] : null));
        echo "

</li>";
    }

}
