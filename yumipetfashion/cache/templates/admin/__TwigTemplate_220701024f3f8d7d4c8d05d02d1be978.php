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
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 51
        echo getLang("OrderDate1");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 53
        echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddate", array(), "any"), "1"), "d M Y H:i:s");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 57
        echo getLang("IPAddress");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t<a href=\"http://ws.arin.net/cgi-bin/whois.pl?queryinput=";
        // line 59
        echo twig_safe_filter((isset($context['IPAddress']) ? $context['IPAddress'] : null));
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordipaddress", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 65
        if ((isset($context['vendor']) ? $context['vendor'] : null)) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Vendor", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t<td class=\"text\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['vendor']) ? $context['vendor'] : null), "vendorname", array(), "any"), "1");
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 70
        echo "
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentMethod", array(), "any"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t";
        // line 77
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") == false) {
            echo "\t\t\t\t\t\t\t";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") != "storecredit") && ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any") != "giftcertificate")) {
            // line 79
            echo "\t\t\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderpaymentmethod", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
        }
        // line 81
        echo "
\t\t\t\t\t\t";
        // line 83
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordstorecreditamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentStoreCredit", array(), "any"), "1");
            echo "
\t\t\t\t\t\t\t\t(";
            // line 86
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordstorecreditamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo ")
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t\t\t\t";
        // line 90
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordgiftcertificateamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 92
            echo getLang("PaymentGiftCertificates", array("orderId" => $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any")));
            // line 94
            echo "\t\t\t\t\t\t\t\t(";
            // line 95
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordgiftcertificateamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo ")
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 101
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpayproviderid", array(), "any")) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\" valign=\"top\">
\t\t\t\t\t\t\t";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TransactionId", array(), "any"), "1");
            echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpayproviderid", array(), "any"), "1");
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 110
        echo "
\t\t\t\t";
        // line 112
        if (($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any")) || ((isset($context['paymentMessage']) ? $context['paymentMessage'] : null))) {
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text\" valing=\"top\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentStatus", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t";
            // line 116
            if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any")) {
                echo "\t\t\t\t\t\t\t\t";
                // line 117
                echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordpaymentstatus", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 118
            echo "
\t\t\t\t\t\t\t<div>";
            // line 120
            echo twig_safe_filter((isset($context['paymentMessage']) ? $context['paymentMessage'] : null));
            echo "</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 123
        echo "\t\t\t</table>

\t\t\t";
        // line 126
        echo twig_safe_filter((isset($context['orderExtraInfo']) ? $context['orderExtraInfo'] : null));
        echo "

\t\t\t";
        // line 128
        if ((isset($context['billingCustomFields']) ? $context['billingCustomFields'] : null)) {
            echo "\t\t\t\t<div style=\"margin-top: 10px\">
\t\t\t\t\t<h5> ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BillingDetailsQuickView", array(), "any"), "1");
            echo "</h5>
\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t";
            // line 132
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
                // line 133
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
            // line 134
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 137
        echo "
\t\t\t";
        // line 139
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustmessage", array(), "any")) {
            echo "\t\t\t\t<h5 style=\"margin-top: 10px\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderComments", array(), "any"), "1");
            echo "</h5>
\t\t\t\t<div style=\"margin-left: 20px\">
\t\t\t\t\t";
            // line 142
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustmessage", array(), "any"), "1"));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 144
        echo "\t\t</td>

\t\t<td valign=\"top\" width=\"67%\" class=\"QuickViewPanel\" style=\"border: 0; padding-left: 15px; border-left: 3px solid #B8E6A6;\">
\t\t\t";
        // line 148
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
            // line 150
            if ((isset($context['addressId']) ? $context['addressId'] : null) == 0) {
                echo "\t\t\t\t\t\t<h5>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DigitalItemDetails", array(), "any"), "1");
                echo "</h5>
\t\t\t\t\t";
            } else {
                // line 152
                echo "\t\t\t\t\t\t<span class=\"orderQuickViewShipItemsLink\">
\t\t\t\t\t\t\t";
                // line 154
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "total_shipped", array(), "any") < $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "total_items", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.ShipItems(";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                    echo ", ";
                    echo twig_escape_filter($this->env, (isset($context['addressId']) ? $context['addressId'] : null), "1");
                    echo "); return false;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShipItems", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t";
                // line 157
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "total_shipped", array(), "any") > 0) {
                    echo "\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.viewShipments(";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                    echo "); return false\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ViewShipments", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h5>";
                // line 161
                echo getLang("ShippingDetails");
                echo "</h5>
\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t<div class=\"orderQuickViewShippingBlockDetails\">
\t\t\t\t\t\t";
            // line 164
            if ((isset($context['addressId']) ? $context['addressId'] : null) == 0) {
                echo "\t\t\t\t\t\t\t<p style=\"padding: 5px; background-color: lightyellow\" class=\"text\" colspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DigitalItemsNotice", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            } else {
                // line 168
                echo "\t\t\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\" width=\"120\">";
                // line 171
                echo getLang("CustomerDetails");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "address", array($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), ), "method"), "1");
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 178
                echo getLang("Email");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 180
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconemail", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any")) {
                    // line 182
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:";
                    // line 183
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "email", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 185
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 186
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 191
                echo getLang("PhoneNumber");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 193
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "phone", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "phone", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "custconphone", array(), "any")) {
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordcustconphone", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                // line 203
                if ($this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_name", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                    // line 205
                    echo getLang("ShippingZone");
                    echo ":</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?ToDo=editShippingZone&amp;zoneId=";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_id", array(), "any"), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "address", array(), "any"), "shipping_zone_name", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 213
                echo getLang("ShippingMethod");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "method", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 220
                echo getLang("ShippingCost");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 222
                echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "shipping", array(), "any"), "cost", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                // line 227
                echo getLang("ShippingDate");
                echo ":</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
                // line 229
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddateshipped", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 230
                    echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddateshipped", array(), "any"), "1"), "DisplayDateFormat");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 232
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                // line 237
                if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordtrackingno", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<!-- Kept for legacy reasons for orders that may still have a tracking number -->
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" valign=\"top\">";
                    // line 240
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrdTrackingNo", array(), "any"), "1");
                    echo ":</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\">";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordtrackingno", array(), "any"), "1");
                    echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 243
                echo "\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
                // line 246
                if ($this->getAttribute((isset($context['orderAddress']) ? $context['orderAddress'] : null), "customFields", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t<div style=\"margin-top: 10px\">
\t\t\t\t\t\t\t\t\t<h5> ";
                    // line 248
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingDetailsQuickView", array(), "any"), "1");
                    echo "</h5>
\t\t\t\t\t\t\t\t\t<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 250
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
                        // line 251
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
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 255
                echo "\t\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"orderQuickViewShippingBlockItems\">
\t\t\t\t\t\t<table width=\"95%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
\t\t\t\t\t\t\t";
            // line 260
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
                // line 263
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                    echo "<del>";
                }
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t\t\tx

\t\t\t\t\t\t\t\t\t\t";
                // line 268
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodname", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 269
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodlink", array(), "any"), "1");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodname", array(), "any"), "1");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 270
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 271
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodname", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 272
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 274
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                    echo "</del>";
                }
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 276
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodsku", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br /><em>";
                    // line 277
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodsku", array(), "any"), "1");
                    echo "</em>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 278
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 280
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "options", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<blockquote sty;e=\"padding-left: 10px; margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 282
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
                        // line 283
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
                    // line 284
                    echo "\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 286
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 288
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "preorder_message", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t<em>(";
                    // line 290
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "preorder_message", array(), "any"), "1");
                    echo ")</em>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 291
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text\" class=\"orderQuickViewPriceColumn\" align=\"right\">
\t\t\t\t\t\t\t\t\t\t";
                // line 294
                echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "total", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
                // line 298
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodwrapname", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"padding: 2px 0 2px 15px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 301
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrapping", array(), "any"), "1");
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodwrapname", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t[<a href=\"#\" onclick=\"\$.iModal({type: 'ajax', url: 'remote.php?remoteSection=orders&w=viewGiftWrappingDetails&orderprodid=";
                    // line 302
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "orderprodid", array(), "any"), "1");
                    echo "' }); return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 303
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ViewDetails", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</a>]
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 307
                echo "
\t\t\t\t\t\t\t\t";
                // line 309
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventdate", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"padding: 2px 0 2px 15px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 312
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventname", array(), "any"), "1");
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodeventdate", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 315
                echo "
\t\t\t\t\t\t\t\t";
                // line 317
                if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "configurable_fields", array(), "any")) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" colspan=\"2\" style=\"padding-left: 20px\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 320
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigurableFields", array(), "any"), "1");
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t<dl class=\"HorizontalFormContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 323
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
                        // line 324
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldname", array(), "any"), "1");
                        echo ":</dt>
\t\t\t\t\t\t\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 326
                        if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldtype", array(), "any") == "file") {
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 327
                            echo twig_escape_filter($this->env, (isset($context['ShopPath']) ? $context['ShopPath'] : null), "1");
                            echo "/viewfile.php?orderprodfield=";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "orderfieldid", array(), "any"), "1");
                            echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 328
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "originalfilename", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fieldtype", array(), "any") == "checkbox") {
                            // line 330
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 331
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Checked", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (twig_length_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "textcontents", array(), "any")) > 50) {
                            // line 332
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"Order.LoadOrderProductFieldData(";
                            // line 333
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orderid", array(), "any"), "1");
                            echo "); return false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em>";
                            // line 334
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "More", array(), "any"), "1");
                            echo "</em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 336
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 337
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "textcontents", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 338
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
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 344
                echo "
\t\t\t\t\t\t\t\t";
                // line 346
                if (($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")) || ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any"))) {
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text\" colspan=\"2\" style=\"padding-left: 20px\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 349
                    if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"Shipped\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 351
                        echo getLang("OrderProductsShippedX", array("quantity" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqtyshipped", array(), "any")));
                        // line 353
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 355
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 357
                    if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"Refunded\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 359
                        if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any") == $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodqty", array(), "any")) {
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 360
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderProductRefunded", array(), "any"), "1");
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 362
                            echo getLang("OrderProductsRefundedX", array("quantity" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "ordprodrefunded", array(), "any")));
                            // line 364
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 365
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 370
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
            // line 371
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
        // line 376
        echo "
\t\t\t<!-- Total Rows -->
\t\t\t<div class=\"orderQuickViewShippingBlockLast\">
\t\t\t\t<div class=\"orderQuickViewShippingBlockDetails\">
\t\t\t\t\t&nbsp;
\t\t\t\t</div>
\t\t\t\t<div class=\"orderQuickViewShippingBlockItems\">
\t\t\t\t\t<table width=\"95%\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
\t\t\t\t\t\t";
        // line 385
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
            // line 386
            echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1"));
            echo "\">
\t\t\t\t\t\t\t\t<td height=\"18\" class=\"text\" align=\"right\">";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "label", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t\t\t<td align=\"right\" class=\"orderQuickViewPriceColumn\">";
            // line 388
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
        // line 390
        echo "\t\t\t\t\t\t";
        // line 391
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordrefundedamount", array(), "any") > 0) {
            echo "\t\t\t\t\t\t\t<tr class=\"orderQuickViewTotal";
            // line 392
            echo twig_capitalize_string_filter($this->env, twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1"));
            echo "\">
\t\t\t\t\t\t\t\t<td height=\"18\" class=\"text\" align=\"right\" style=\"color: maroon\">";
            // line 393
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Refunded", array(), "any"), "1");
            echo ":</td>
\t\t\t\t\t\t\t\t<td align=\"right\" class=\"orderQuickViewPriceColumn\" style=\"color: maroon\">-";
            // line 394
            echo formatPriceInCurrency(twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "ordrefundedamount", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['order']) ? $context['order'] : null), "orddefaultcurrencyid", array(), "any"), "1"));
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        // line 396
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
