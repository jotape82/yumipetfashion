<?php

/* order.form.summary.shipping.tpl */
class __TwigTemplate_943b5ef927ce63f476a539c55ac95bff extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 3
        $context['orderform'] = $this->env->loadTemplate("macros/orderform.tpl", true);
        echo "
";
        // line 5
        $context['itemCounter'] = 0;
        echo "
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "getAllAddresses", array(), "any"));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['address']) {
            echo "\t";
            // line 8
            if (twig_length_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "getItems", array(), "any"))) {
                echo "\t\t";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startForm", array(array("type" => "vertical", "class" => "orderFormSummaryShippingDetails"), ), "method"), "1");
                // line 12
                echo "

\t\t\t";
                // line 14
                ob_start();
                echo "\t\t\t\t";
                // line 15
                echo getLang(("ShippingDetails_") . ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "type", array(), "any")));
                echo ": ";
                echo getLang("ItemsXtoYofZ", array("x" => ((isset($context['itemCounter']) ? $context['itemCounter'] : null)) + (1), "y" => ((isset($context['itemCounter']) ? $context['itemCounter'] : null)) + ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "getItemCount", array(), "any")), "z" => $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "getItemCount", array(), "any")));
                // line 19
                echo "\t\t\t";
                $context['heading'] = ob_get_clean();
                // line 20
                echo "
\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "heading", array((isset($context['heading']) ? $context['heading'] : null), ), "method"), "1");
                echo "

\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("type" => "vertical"), ), "method"), "1");
                echo "
\t\t\t\t";
                // line 25
                if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "type", array(), "any") == "shipping") {
                    echo "\t\t\t\t\t<div class=\"detailsHeading\">";
                    // line 26
                    echo getLang("ShippingTo");
                    echo ": <a href=\"#\" class=\"orderFormChangeShippingDetailsLink\">";
                    echo getLang("Change");
                    echo "</a></div>

\t\t\t\t\t<div class=\"detailsAddress\">
\t\t\t\t\t\t";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "address", array((isset($context['address']) ? $context['address'] : null), ), "method"), "1");
                    echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"detailsHeading\">";
                    // line 32
                    echo getLang("ShippingMethod");
                    echo ": <a href=\"#\" class=\"orderFormChangeShippingDetailsLink\">";
                    echo getLang("Change");
                    echo "</a></div>

\t\t\t\t\t<div class=\"detailsShippingMethod\">
\t\t\t\t\t\t";
                    // line 35
                    $context['shippingMethod'] = $this->getAttribute((isset($context['address']) ? $context['address'] : null), "shippingMethod", array(), "any");
                    echo "\t\t\t\t\t\t";
                    // line 36
                    if (((!$this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "description", array(), "any"))) && ((!$this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "price", array(), "any")))) {
                        echo "\t\t\t\t\t\t\t";
                        // line 37
                        echo getLang("xNone");
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 38
                        echo "\t\t\t\t\t\t\t";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['address']) ? $context['address'] : null), "shippingMethod", array(), "any"), "description", array(), "any"), "1");
                        echo ": ";
                        echo formatPrice(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['address']) ? $context['address'] : null), "shippingMethod", array(), "any"), "price", array(), "any"), "1"));
                        echo "
\t\t\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t\t\t</div>
\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t<div class=\"detailsAddress\">
\t\t\t\t\t\t<div class=\"MessageBox MessageBoxInfo\">";
                    // line 44
                    echo getLang("DigitalItemsNotice");
                    echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 46
                echo "
\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['orderform']) ? $context['orderform'] : null), "quoteItemsGrid", array((isset($context['quote']) ? $context['quote'] : null), (isset($context['config']) ? $context['config'] : null), array("addresses" => array(0 => (isset($context['address']) ? $context['address'] : null)), "interactive" => false, "headerLang" => "ShippingDetailsColon", "headerItemCountLang" => "ItemsXtoYofZ"), ), "method"), "1");
                // line 53
                echo "

\t\t\t";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
                echo "
\t\t";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endForm", array(), "any"), "1");
                echo "

\t\t";
                // line 58
                $context['itemCounter'] = ((isset($context['itemCounter']) ? $context['itemCounter'] : null)) + ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "getItemCount", array(), "any"));
                echo "\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

}
