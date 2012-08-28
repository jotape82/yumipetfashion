<?php

/* order.form.items.tpl */
class __TwigTemplate_252d6e3cbefc02f7e48c8c6544c1614d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['orderform'] = $this->env->loadTemplate("macros/orderform.tpl", true);
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['orderform']) ? $context['orderform'] : null), "quoteItemsGrid", array((isset($context['quote']) ? $context['quote'] : null), (isset($context['config']) ? $context['config'] : null), ), "method"), "1");
        echo "
";
    }

}
