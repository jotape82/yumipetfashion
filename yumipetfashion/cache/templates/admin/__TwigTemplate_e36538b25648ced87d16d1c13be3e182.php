<?php

/* modal.basic.tpl */
class __TwigTemplate_e36538b25648ced87d16d1c13be3e182 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div id=\"ModalTitle\">
\t";
        // line 2
        echo twig_escape_filter($this->env, (isset($context['title']) ? $context['title'] : null), "1");
        echo "
</div>
<div id=\"ModalContent\" style=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['style']) ? $context['style'] : null), "1");
        echo "\">
\t<p>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['message']) ? $context['message'] : null), "1");
        echo "</p>
</div>
<div id=\"ModalButtonRow\">
\t<div class=\"FloatLeft\"><input class=\"CloseButton\" type=\"button\" value=\"";
        // line 8
        echo getLang("Close");
        echo "\" onclick=\"\$.modal.close();\" /></div>
\t<div class=\"Clear\"></div>
</div>
";
    }

}
