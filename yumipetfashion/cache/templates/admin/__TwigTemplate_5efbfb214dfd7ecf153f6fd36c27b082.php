<?php

/* total_range_header.tpl */
class __TwigTemplate_5efbfb214dfd7ecf153f6fd36c27b082 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
<script type=\"text/javascript\" charset=\"utf-8\">

\tfunction AddTotalRange(node)
\t{
\t\tvar newNode = \$(node).clone();
\t\tvar newVal = \$(newNode).find('input:eq(1)').val();

\t\t\$(newNode).find('input:first').val(newVal);
\t\t\$(newNode).find('input:gt(0)').val('');

\t\tvar oldName = \$('.TotalRanges:last input:first').attr('name');
\t\tvar oldParts = oldName.replace(/^.*_/, '');
\t\tvar oldParts = oldParts.replace(/\\]/, '');
\t\tvar newNum = parseInt(oldParts)+1;

\t\t\$(newNode).find('input').each(function() {
\t\t\tparts = \$(this).attr('name').split(/[_|\\[|\\]]/);
\t\t\t\$(this).attr('name', parts[0] + '_' + parts[1] + '[' + parts[2] + '_' + newNum + ']');
\t\t\t\$(this).attr('id', parts[2] + '_' + newNum);
\t\t});

\t\t\$(node.parentNode).append(newNode);

\t\tShowCorrectLinks();
\t}

\tfunction RemoveTotalRange(node)
\t{
\t\tif (ConfirmRemove(node)) {
\t\t\t\$(node).remove();
\t\t\tShowCorrectLinks();
\t\t}
\t}
\tfunction ShowCorrectLinks()
\t{
\t\t\$('.TotalRanges:first a.remove').hide();
\t\t\$('.TotalRanges:gt(0) a.remove').show();
\t}

\tfunction ConfirmRemove(node)
\t{
\t\tvar canRemove = true;
\t\t\$(node).find('input').each(function() {
\t\t\tif (\$(this).val() != '') {
\t\t\t\tif (confirm(\"%%LNG_ConfirmRemoveTotalRange%%\")) {
\t\t\t\t\tcanRemove = true;
\t\t\t\t} else {
\t\t\t\t\tcanRemove = false;
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t}
\t\t});

\t\treturn canRemove;
\t}

\t\$(document).ready(function () {
\t\tShowCorrectLinks();
\t});

</script>

";
    }

}
