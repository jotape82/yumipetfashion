<?php

/* order.quickview.tpl */
class __TwigTemplate_220701024f3f8d7d4c8d05d02d1be978 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['helper'] = $this->env->loadTemplate("order.quickview.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
";
        // line 13
        echo "
<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t<tr>
\t\t<td valign=\"top\" width=\"33%\" class=\"QuickViewPanel\" style=\"border: 0\">
\t\t\t<h5>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BillingDetails", array(), "any"), "1");
        echo "</h5>
\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" width=\"120\" valign=\"top\">";
        // line 21
        echo getLang("CustomerDetails");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "address", array((isset($context['billingAddress']) ? $context['billingAddress'] : null), ), "method"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 27
        echo getLang("Email");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 29
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any")) {
            echo "\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
            echo "</a>
\t\t\t\t\t\t";
        } elseif ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordbillemail", array(), "any")) {
            // line 31
            echo "\t\t\t\t\t\t\t<a href=\"mailto:";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordbillemail", array(), "any"), "1");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordbillemail", array(), "any"), "1");
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 39
        echo getLang("PhoneNumber");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 41
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordbillphone", array(), "any")) {
            echo "\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordbillphone", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        } elseif ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconphone", array(), "any")) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustconphone", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">Data de Nascimento:</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 53
        if ($this->getAttribute((isset($context['billingAddress']) ? $context['billingAddress'] : null), "datanascimento", array(), "any")) {
            echo "\t\t\t\t\t\t\t";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['billingAddress']) ? $context['billingAddress'] : null), "datanascimento", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">CPF:</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 61
        if ($this->getAttribute((isset($context['billingAddress']) ? $context['billingAddress'] : null), "cpf", array(), "any")) {
            echo "\t\t\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['billingAddress']) ? $context['billingAddress'] : null), "cpf", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 67
        echo getLang("OrderDate1");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 69
        echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddate", array(), "any"), "1"), "d M Y H:i:s");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 73
        echo getLang("IPAddress");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t<a href=\"http://whois.arin.net/ui/query.do?q=";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordipaddress", array(), "any"), "1");
        echo "\" target=\"_blank\"><!--";
        echo twig_safe_filter((isset($context['IPAddress']) ? $context['IPAddress'] : null));
        echo "-->
\t\t\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordipaddress", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 81
        if ((isset($context['vendor']) ? $context['vendor'] : null)) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Vendor", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t<td class=\"text\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['vendor']) ? $context['vendor'] : null), "vendorname", array(), "any"), "1");
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 86
        echo "
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t\t";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentMethod", array(), "any"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 93
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") == false) {
            echo "\t\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") != "storecredit") && ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") != "giftcertificate")) {
            // line 95
            echo "\t\t\t\t\t\t\t";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 97
        echo "
\t\t\t\t\t\t";
        // line 99
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordstorecreditamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentStoreCredit", array(), "any"), "1");
            echo "
\t\t\t\t\t\t\t\t(";
            // line 102
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordstorecreditamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo ")
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 104
        echo "
\t\t\t\t\t\t";
        // line 106
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordgiftcertificateamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 108
            echo getLang("PaymentGiftCertificates", array("orderId" => $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any")));
            // line 110
            echo "\t\t\t\t\t\t\t\t(";
            // line 111
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordgiftcertificateamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo ")
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 117
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpayproviderid", array(), "any")) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t\t\t";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TransactionId", array(), "any"), "1");
            echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpayproviderid", array(), "any"), "1");
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 126
        echo "
\t\t\t\t";
        // line 128
        if (($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any")) || ((isset($context['paymentMessage']) ? $context['paymentMessage'] : null))) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\" valing=\"top\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentStatus", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t";
            // line 132
            if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any")) {
                echo "\t\t\t\t\t\t\t\t";
                // line 133
                echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 134
            echo "
\t\t\t\t\t\t\t<div>";
            // line 136
            echo twig_safe_filter((isset($context['paymentMessage']) ? $context['paymentMessage'] : null));
            echo "</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 139
        echo "\t\t\t</table>

\t\t\t";
        // line 142
        echo twig_safe_filter((isset($context['orderExtraInfo']) ? $context['orderExtraInfo'] : null));
        echo "

\t\t\t";
        // line 144
        if ((isset($context['billingCustomFields']) ? $context['billingCustomFields'] : null)) {
            echo "\t\t\t\t<div style=\"margin-top: 10px\">
\t\t\t\t\t<h5> ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BillingDetailsQuickView", array(), "any"), "1");
            echo "</h5>
\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t";
            // line 148
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['billingCustomFields']) ? $context['billingCustomFields'] : null));
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
            foreach ($context['_seq'] as $context['_key'] => $context['field']) {
                echo "\t\t\t\t\t\t\t";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['helper']) ? $context['helper'] : null), "customFormField", array((isset($context['field']) ? $context['field'] : null), ), "method"), "1");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 150
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 153
        echo "
\t\t\t";
        // line 155
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustmessage", array(), "any")) {
            echo "\t\t\t\t<h5 style=\"margin-top: 10px\">";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderComments", array(), "any"), "1");
            echo "</h5>
\t\t\t\t<div style=\"margin-left: 20px\">
\t\t\t\t\t";
            // line 158
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustmessage", array(), "any"), "1"));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 160
        echo "\t\t</td>

\t\t<td valign=\"top\" width=\"67%\" class=\"QuickViewPanel\" style=\"border: 0; padding-left: 15px; border-left: 3px solid #E9E9E9;\">
\t\t\t";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['orderAddresses']) ? $context['orderAddresses'] : null));
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
        foreach ($context['_seq'] as $context['addressId'] => $context['orderAddress']) {
            echo "\t\t\t\t<div class=\"orderQuickViewShippingBlock\">
\t\t\t\t\t";
            // line 166
            if ((isset($context['addressId']) ? $context['addressId'] : null) == 0) {
                echo "\t\t\t\t\t\t<h5>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DigitalItemDetails", array(), "any"), "1");
                echo "</h5>
\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t<span class=\"orderQuickViewShipItemsLink\">
\t\t\t\t\t\t\t";
                // line 170
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "total_shipped", array(), "any") < $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "total_items", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.ShipItems(";
                    // line 171
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context['addressId']) ? $context['addressId'] : null), "1");
                    echo "); return false;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShipItems", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t";
                // line 173
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "total_shipped", array(), "any") > 0) {
                    echo "\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.viewShipments(";
                    // line 174
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                    echo "); return false\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ViewShipments", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h5>";
                // line 177
                echo getLang("ShippingDetails");
                echo "</h5>
\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t<div class=\"orderQuickViewShippingBlockDetails\">
\t\t\t\t\t\t";
            // line 180
            if ((isset($context['addressId']) ? $context['addressId'] : null) == 0) {
                echo "\t\t\t\t\t\t\t<p style=\"padding: 5px; background-color: lightyellow\" class=\"text\" colspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DigitalItemsNotice", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            } else {
                // line 184
                echo "\t\t\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\" width=\"120\">";
                // line 187
                echo getLang("CustomerDetails");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "addressShipping", array($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), ), "method"), "1");
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 194
                echo getLang("Email");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 196
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
                    // line 197
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any")) {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 200
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 207
                echo getLang("PhoneNumber");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 209
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipphone", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipphone", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconphone", array(), "any")) {
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustconphone", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 213
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 215
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">Data de Nascimento:</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 222
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipdatanascimento", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 223
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipdatanascimento", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 224
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">CPF:</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 230
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipcpf", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 231
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipcpf", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 236
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_name", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                    // line 238
                    echo getLang("ShippingZone");
                    echo ":</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?ToDo=editShippingZone&amp;zoneId=";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_id", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_name", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 243
                echo "
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 246
                echo getLang("ShippingMethod");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 248
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "method", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 253
                echo getLang("ShippingCost");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 255
                echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "cost", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 260
                echo getLang("ShippingDate");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 262
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddateshipped", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 263
                    echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddateshipped", array(), "any"), "1"), "DisplayDateFormat");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 265
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                // line 270
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordtrackingno", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<!-- Kept for legacy reasons for orders that may still have a tracking number -->
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrdTrackingNo", array(), "any"), "1");
                    echo ":</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\">";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordtrackingno", array(), "any"), "1");
                    echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 276
                echo "\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
                // line 279
                if ($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "customFields", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t<div style=\"margin-top: 10px\">
\t\t\t\t\t\t\t\t\t<h5> ";
                    // line 281
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingDetailsQuickView", array(), "any"), "1");
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 283
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "customFields", array(), "any"));
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
                    foreach ($context['_seq'] as $context['_key'] => $context['field']) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        // line 284
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['helper']) ? $context['helper'] : null), "customFormField", array((isset($context['field']) ? $context['field'] : null), ), "method"), "1");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t\t\t";
            }
            // line 289
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"orderQuickViewShippingBlockItems\">
\t\t\t\t\t\t<table width=\"95%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
\t\t\t\t\t\t\t";
            // line 293
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "products", array(), "any"));
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
            foreach ($context['_seq'] as $context['_key'] => $context['product']) {
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"padding-left: 12px; padding-top: 5px\" width=\"70%\" class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 296
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                    echo "<del>";
                }
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 298
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t\t\tx

\t\t\t\t\t\t\t\t\t\t";
                // line 301
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodname", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 302
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodlink", array(), "any"), "1");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodname", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 303
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 304
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodname", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 305
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 307
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                    echo "</del>";
                }
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 309
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodsku", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br /><em>";
                    // line 310
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodsku", array(), "any"), "1");
                    echo "</em>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 311
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 313
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "options", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<blockquote sty;e=\"padding-left: 10px; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 315
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['product']) ? $context['product'] : null), "options", array(), "any"));
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
                    foreach ($context['_seq'] as $context['name'] => $context['value']) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div>";
                        // line 316
                        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
                        echo ": ";
                        echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 319
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 321
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "preorder_message", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t<em>(";
                    // line 323
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "preorder_message", array(), "any"), "1");
                    echo ")</em>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 324
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\" class=\"orderQuickViewPriceColumn\" align=\"right\">
\t\t\t\t\t\t\t\t\t\t";
                // line 327
                echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "total", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                // line 331
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodwrapname", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"padding: 2px 0 2px 15px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 334
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrapping", array(), "any"), "1");
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodwrapname", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t[<a href=\"#\" onclick=\"\$.iModal({type: 'ajax', url: 'remote.php?remoteSection=orders&w=viewGiftWrappingDetails&orderprodid=";
                    // line 335
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "orderprodid", array(), "any"), "1");
                    echo "' }); return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 336
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ViewDetails", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</a>]
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 340
                echo "
\t\t\t\t\t\t\t\t";
                // line 342
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventdate", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"padding: 2px 0 2px 15px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 345
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventname", array(), "any"), "1");
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventdate", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 348
                echo "
\t\t\t\t\t\t\t\t";
                // line 350
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "configurable_fields", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" colspan=\"2\" style=\"padding-left: 20px\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 353
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigurableFields", array(), "any"), "1");
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t<dl class=\"HorizontalFormContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 356
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['product']) ? $context['product'] : null), "configurable_fields", array(), "any"));
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
                    foreach ($context['_seq'] as $context['_key'] => $context['field']) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<dt>";
                        // line 357
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldname", array(), "any"), "1");
                        echo ":</dt>
\t\t\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 359
                        if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldtype", array(), "any") == "file") {
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 360
                            echo twig_escape_filter($this->env, (isset($context['ShopPath']) ? $context['ShopPath'] : null), "1");
                            echo "/viewfile.php?orderprodfield=";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "orderfieldid", array(), "any"), "1");
                            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 361
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "originalfilename", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldtype", array(), "any") == "checkbox") {
                            // line 363
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 364
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Checked", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_length_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "textcontents", array(), "any")) > 50) {
                            // line 365
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.LoadOrderProductFieldData(";
                            // line 366
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                            echo "); return false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>";
                            // line 367
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "More", array(), "any"), "1");
                            echo "</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 369
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 370
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "textcontents", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 371
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 377
                echo "
\t\t\t\t\t\t\t\t";
                // line 379
                if (($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")) || ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any"))) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" colspan=\"2\" style=\"padding-left: 20px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 382
                    if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"Shipped\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 384
                        echo getLang("OrderProductsShippedX", array("quantity" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")));
                        // line 386
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 388
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 390
                    if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"Refunded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 392
                        if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 393
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderProductRefunded", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 394
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 395
                            echo getLang("OrderProductsRefundedX", array("quantity" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any")));
                            // line 397
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 398
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 400
                    echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 403
                echo "\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 404
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t<br style=\"clear: both\" />
\t\t\t\t</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['addressId'], $context['orderAddress'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 409
        echo "
\t\t\t<!-- Total Rows -->
\t\t\t<div class=\"orderQuickViewShippingBlockLast\">
\t\t\t\t<div class=\"orderQuickViewShippingBlockDetails\">
\t\t\t\t\t&nbsp;
\t\t\t\t</div>
\t\t\t\t<div class=\"orderQuickViewShippingBlockItems\">
\t\t\t\t\t<table width=\"95%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
\t\t\t\t\t\t";
        // line 418
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['totalRows']) ? $context['totalRows'] : null));
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
        foreach ($context['_seq'] as $context['id'] => $context['total']) {
            echo "\t\t\t\t\t\t\t<tr class=\"orderQuickViewTotal";
            // line 419
            echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1"));
            echo "\">
\t\t\t\t\t\t\t\t<td height=\"18\" class=\"text\" align=\"right\">";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "label", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t\t\t<td align=\"right\" class=\"orderQuickViewPriceColumn\">";
            // line 421
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "value", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo "</td>
\t\t\t\t\t\t\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 423
        echo "\t\t\t\t\t\t";
        // line 424
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordrefundedamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<tr class=\"orderQuickViewTotal";
            // line 425
            echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1"));
            echo "\">
\t\t\t\t\t\t\t\t<td height=\"18\" class=\"text\" align=\"right\" style=\"color: maroon\">";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Refunded", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t\t\t<td align=\"right\" class=\"orderQuickViewPriceColumn\" style=\"color: maroon\">-";
            // line 427
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordrefundedamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 429
        echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<br style=\"clear: both\" />
\t\t\t</div>
\t\t</td>
\t</tr>
</table>";
    }

    // line 4
    public function getcustomFormField($field = null)
    {
        $context = array(
            "field" => $field,
        );

        echo "\t<tr>
\t\t<td class=\"text\" width=\"120\" valign=\"top\">
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "label", array(), "any"), "1");
        echo ":
\t\t</td>
\t\t<td class=\"text\">
\t\t\t";
        // line 10
        echo twig_join_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "value", array(), "any"), "1"), "<br />");
        echo "
\t\t</td>
\t</tr>
";
    }

}
