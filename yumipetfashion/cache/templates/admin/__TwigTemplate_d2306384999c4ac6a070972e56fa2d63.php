<?php

/* shipments.create.tpl */
class __TwigTemplate_d2306384999c4ac6a070972e56fa2d63 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form method=\"post\" action=\"#\" onsubmit=\"Order.SaveShipment(); return false;\" id=\"ShipmentDetails\">
\t<input type=\"hidden\" name=\"orderId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"addressId\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "id", array(), "any"), "1");
        echo "\" />
\t<div id=\"ModalTitle\">
\t\t";
        // line 5
        echo getLang("CreateShipmentFromOrder");
        echo " #";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['OrderDate']) ? $context['OrderDate'] : null));
        echo ")
\t</div>
\t<div id=\"ModalContent\" style=\"min-height: 100px; max-height: 400px; overflow: auto;\">
\t\t<p class=\"MessageBox MessageBoxInfo\">";
        // line 8
        echo getLang("CreateShipmentIntro");
        echo "</p>
\t\t<br />
\t\t<table class=\"GridPanel ShipmentTable\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td>";
        // line 12
        echo getLang("ShipmentProduct");
        echo "</td>
\t\t\t\t<td style=\"width: 100px; text-align: center;\">";
        // line 13
        echo getLang("QtyToShip");
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['ProductList']) ? $context['ProductList'] : null));
        echo "
\t\t</table>
\t\t<br />
\t\t<strong style=\"color: #000\">";
        // line 18
        echo getLang("ShipmentOptions");
        echo "</strong>
\t\t<table cellspacing=\"5\" cellpadding=\"0\" border=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">";
        // line 21
        echo getLang("ShippingMethod");
        echo ":</td>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"shipping_module\" class=\"Field150\">
\t\t\t\t\t\t<option value=\"\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "xNone", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['shippingModules']) ? $context['shippingModules'] : null));
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
        foreach ($context['_seq'] as $context['module'] => $context['name']) {
            echo "\t\t\t\t\t\t\t<option value=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context['module']) ? $context['module'] : null), "1");
            echo "\" ";
            if ((isset($context['module']) ? $context['module'] : null) == $this->getAttribute((isset($context['shipping']) ? $context['shipping'] : null), "module", array(), "any")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "</option>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['module'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"text\" class=\"Field150\" name=\"shipmethod\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['shipping']) ? $context['shipping'] : null), "method", array(), "any"), "1");
        echo "\" />
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">";
        // line 34
        echo getLang("TrackingNumber");
        echo ":</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" class=\"Field300\" name=\"shiptrackno\" value=\"";
        // line 36
        echo twig_safe_filter((isset($context['TrackingNumber']) ? $context['TrackingNumber'] : null));
        echo "\" />
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">";
        // line 41
        echo getLang("ShipmentComments");
        echo ":</td>
\t\t\t\t<td>
\t\t\t\t\t<textarea name=\"shipcomments\" cols=\"10\" rows=\"4\" class=\"Field300\">";
        // line 43
        echo twig_safe_filter((isset($context['OrderComments']) ? $context['OrderComments'] : null));
        echo "</textarea>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">";
        // line 48
        echo getLang("OrderStatus");
        echo ":</td>
\t\t\t\t<td style=\"padding-top: 4px;\"><label><input type=\"checkbox\" name=\"ordstatus\" value=\"1\" checked=\"checked\" /> ";
        // line 49
        echo getLang("UpdateOrderStatus");
        echo "</label></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div id=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\"><input class=\"CloseButton\" type=\"button\" value=\"";
        // line 54
        echo getLang("Close");
        echo "\" onclick=\"\$.modal.close();\" /></div>
\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"display: none\" class=\"LoadingIndicator\" />
\t\t<input type=\"submit\" class=\"Submit SubmitButton\" value=\"";
        // line 56
        echo getLang("CreateShipment");
        echo "\" />
\t</div>
</form>";
    }

}
