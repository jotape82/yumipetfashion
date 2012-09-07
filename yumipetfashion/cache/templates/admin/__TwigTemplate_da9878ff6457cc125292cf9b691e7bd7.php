<?php

/* Snippets/DashboardVideoWalkthroughItem.html */
class __TwigTemplate_da9878ff6457cc125292cf9b691e7bd7 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li>
\t<a href=\"";
        // line 2
        echo twig_safe_filter((isset($context['URL']) ? $context['URL'] : null));
        echo "\" onclick=\"Dashboard.PlayVideo(this.href, ";
        echo twig_safe_filter((isset($context['Width']) ? $context['Width'] : null));
        echo ", ";
        echo twig_safe_filter((isset($context['Height']) ? $context['Height'] : null));
        echo "); return false;\">
\t\t<img src=\"";
        // line 3
        echo twig_safe_filter((isset($context['Preview']) ? $context['Preview'] : null));
        echo "\" alt=\"\" />
\t\t<span class=\"VideoOverlay\"></span>
\t\t";
        // line 5
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "
\t</a>
</li>";
    }

}
