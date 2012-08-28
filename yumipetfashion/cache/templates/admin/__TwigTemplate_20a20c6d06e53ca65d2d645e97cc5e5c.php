<?php

/* order.form.summary.totals.tpl */
class __TwigTemplate_20a20c6d06e53ca65d2d645e97cc5e5c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table cellspacing=\"0\" class=\"orderFormSummaryTable\">
\t<tbody>
\t\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['totals']) ? $context['totals'] : null));
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
            echo "\t\t\t<tr class=\"orderFormSummaryTable-";
            // line 4
            echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
            echo " ";
            if ($this->getAttribute((isset($context['total']) ? $context['total'] : null), "type", array(), "any")) {
                echo "orderFormSummaryTable-type-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "type", array(), "any"), "1");
            }
            echo "\">
\t\t\t\t<th>
\t\t\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "label", array(), "any"), "1");
            echo "
\t\t\t\t\t";
            // line 7
            if ($this->getAttribute((isset($context['total']) ? $context['total'] : null), "type", array(), "any") == "coupon") {
                echo "\t\t\t\t\t\t<br /><small><a href=\"#\" onclick=\"Order_Form.removeCouponById(";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "id", array(), "any"), "1");
                echo "); return false;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SmallRemoveLink", array(), "any"), "1");
                echo "</a></small>
\t\t\t\t\t";
            } elseif ($this->getAttribute((isset($context['total']) ? $context['total'] : null), "type", array(), "any") == "giftCertificate") {
                // line 9
                echo "\t\t\t\t\t\t<br /><small><a href=\"#\" onclick=\"Order_Form.removeGiftCertificateById(";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "id", array(), "any"), "1");
                echo "); return false;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SmallRemoveLink", array(), "any"), "1");
                echo "</a></small>
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t</th>
\t\t\t\t<td valign=\"top\">";
            // line 13
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['total']) ? $context['total'] : null), "value", array(), "any"), "1"));
            echo "</td>
\t\t\t</tr>
\t\t";
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
        // line 15
        echo "\t</tbody>
</table>
";
    }

}
