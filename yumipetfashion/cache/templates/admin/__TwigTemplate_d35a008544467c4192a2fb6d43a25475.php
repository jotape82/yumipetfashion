<?php

/* settings.emailintegration.newsletterrules.tpl */
class __TwigTemplate_d35a008544467c4192a2fb6d43a25475 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startHeading", array(), "any"), "1");
        echo "
\t";
        // line 7
        echo getLang("Interspire_EmailIntegration_Rule_NewsletterSubscribed_Name_Plural");
        echo "\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("Interspire_EmailIntegration_Rule_NewsletterSubscribed_Name_Plural", "NewsletterSubscriptionRulesHelp", ), "method"), "1");
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endHeading", array(), "any"), "1");
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "method"), "1");
        echo "

\t<table class=\"emailIntegrationRuleBuilder newsletterSubscriptionRuleBuilder\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "WhenSomeoneSubscribes", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseAList", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SaveFirstNameTo", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>&nbsp;</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t</tbody>
\t\t<tfoot>
\t\t\t";
        // line 25
        echo "
\t\t\t<tr class=\"rule\">
\t\t\t\t<td class=\"action\">
\t\t\t\t\t<input type=\"hidden\" class=\"newsletterrules_id\" />
\t\t\t\t\t<select class=\"Field150 newsletterrules_action\">
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t<option value=\"listAdd\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AddToList", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t<option value=\"listRemove\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RemoveFromList", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"list\">
\t\t\t\t\t<select class=\"Field170 newsletterrules_list\" disabled=\"disabled\"></select>
\t\t\t\t</td>
\t\t\t\t<td class=\"map\">
\t\t\t\t\t<select class=\"Field150 newsletterrules_map_subfirstname\" disabled=\"disabled\"></select>
\t\t\t\t</td>
\t\t\t\t<td class=\"ruleBuilderActions\">
\t\t\t\t\t<a href=\"#\" class=\"ruleAdd\" title=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Add", array(), "any"), "1");
        echo "\"><img src=\"images/addicon.png\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Add", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"ruleDelete\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
        echo "\"><img src=\"images/delicon.png\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"ruleCopy\" title=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Copy", array(), "any"), "1");
        echo "\"><img class=\"ruleCopy\" src=\"images/page.gif\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Copy", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>

";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "

<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\$(function(\$){

\t";
        // line 57
        echo "

\tvar ACTION_ADD = 1;
\tvar ACTION_REMOVE = 2;

\tvar moduleId = \"";
        // line 62
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"));
        echo "\";
\tvar module = Interspire_EmailIntegration_ProviderModel.modules[moduleId];
\tvar moduleContainer = \$('#' + moduleId);
\tvar builder = moduleContainer.find('.newsletterSubscriptionRuleBuilder');
\tvar ruleContainer = builder.find('tbody');

\tvar getFieldSelector = function (field) {
\t\treturn '.newsletterrules_' + field;
\t};

\tvar bindEvents = function (newRule) {
\t\t// this exists because for some reason .live and .delegate for change events are NOT working for these fields in IE

\t\tnewRule.find(getFieldSelector('action')).change(function(event){
\t\t\tvar \$\$ = \$(this);
\t\t\tvar val = \$\$.val();
\t\t\tvar rule = \$\$.closest('.rule');

\t\t\tvar next = rule.find(getFieldSelector('list'));
\t\t\tvar oldValueOfNextField = next.val();
\t\t\tnext.empty();
\t\t\tnext.attr('disabled', 'disabled');

\t\t\tif (!val) {
\t\t\t\tnext.attr('selectedIndex', 0).trigger('change');
\t\t\t\treturn;
\t\t\t}

\t\t\tmodule.lists.get(function(lists, delayed){
\t\t\t\tnext.empty();

\t\t\t\tvar option = document.createElement('OPTION');
\t\t\t\toption.value = '';
\t\t\t\toption.text = '';
\t\t\t\tnext[0].options[0] = option;
\t\t\t\tnext.attr('selectedIndex', 0).trigger('change');

\t\t\t\tvar list;
\t\t\t\tfor (var i = 0; i < lists.length; i++) {
\t\t\t\t\tlist = lists[i];
\t\t\t\t\toption = document.createElement('OPTION');
\t\t\t\t\toption.value = list.provider_list_id;
\t\t\t\t\toption.text = list.name;
\t\t\t\t\tnext[0].options[next[0].options.length] = option;
\t\t\t\t}

\t\t\t\tnext.removeAttr('disabled');

\t\t\t\tif (!delayed && oldValueOfNextField) {
\t\t\t\t\t// see if we can re-select the next field's value
\t\t\t\t\tnext.val(oldValueOfNextField);
\t\t\t\t\tnext.trigger('change');
\t\t\t\t}

\t\t\t}, {
\t\t\t\tloading: function(){
\t\t\t\t\tvar option = document.createElement('OPTION');
\t\t\t\t\toption.value = '';
\t\t\t\t\toption.text = 'Loading, please wait...';
\t\t\t\t\tnext[0].options[next[0].options.length] = option;
\t\t\t\t\tnext.attr('selectedIndex', 0).trigger('change');
\t\t\t\t}
\t\t\t});
\t\t});

\t\tnewRule.find(getFieldSelector('list')).change(function(event){
\t\t\tvar \$\$ = \$(this);
\t\t\tvar val = \$\$.val();
\t\t\tvar rule = \$\$.closest('.rule');

\t\t\tvar next = rule.find(getFieldSelector('map_subfirstname'));
\t\t\tvar oldValueOfNextField = next.val();
\t\t\tnext.empty();
\t\t\tnext.attr('disabled', 'disabled');

\t\t\tif (!val) {
\t\t\t\treturn;
\t\t\t}

\t\t\tmodule.getList(val, function(list){
\t\t\t\tif (!list) {
\t\t\t\t\t// list was not found
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tif (rule.find(getFieldSelector('action')).val() == 'listRemove') {
\t\t\t\t\tvar option;
\t\t\t\t\toption = document.createElement('OPTION');
\t\t\t\t\toption.value = '';
\t\t\t\t\toption.text = '(Not Required)';
\t\t\t\t\tnext[0].options[next[0].options.length] = option;
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\tlist.fields.get(function(/** array of FieldModel instances */fields){
\t\t\t\t\tnext.empty();

\t\t\t\t\t// fields were ajax-loaded successfully, or fields available locally
\t\t\t\t\tvar option;
\t\t\t\t\toption = document.createElement('OPTION');
\t\t\t\t\toption.value = '';
\t\t\t\t\toption.text = '(' + lang.NoneString + ')';
\t\t\t\t\tnext[0].options[next[0].options.length] = option;

\t\t\t\t\tvar field;
\t\t\t\t\tfor (var i = 0; i < fields.length; i++) {
\t\t\t\t\t\tfield = fields[i];
\t\t\t\t\t\tif (field.provider_field_id == \"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getEmailProviderFieldId", array(), "any"), "1");
        echo "\") {
\t\t\t\t\t\t\tcontinue;
\t\t\t\t\t\t}

\t\t\t\t\t\toption = document.createElement('OPTION');
\t\t\t\t\t\toption.value = field.provider_field_id;
\t\t\t\t\t\toption.text = field.name;
\t\t\t\t\t\tnext[0].options[next[0].options.length] = option;
\t\t\t\t\t}

\t\t\t\t\tnext.removeAttr('disabled');
\t\t\t\t}, {
\t\t\t\t\tloading: function(){
\t\t\t\t\t\t// called if getFields() needs to do an ajax; we use it to indicate we're loading fields
\t\t\t\t\t\tvar option = document.createElement('OPTION');
\t\t\t\t\t\toption.value = '';
\t\t\t\t\t\toption.text = 'Loading, please wait...';
\t\t\t\t\t\tnext[0].options[next[0].options.length] = option;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t});
\t};

\t\$(function(){
\t\tbuilder.delegate('.rule .ruleAdd, .rule .ruleCopy', 'click', function(event){
\t\t\tevent.preventDefault();

\t\t\tvar \$\$ = \$(this);
\t\t\tvar rule = \$\$.closest('.rule');
\t\t\tvar copy = rule.clone();
\t\t\trule.after(copy);
\t\t\tbindEvents(copy);

\t\t\tvar fields = ['action', 'list', 'map_subfirstname'];

\t\t\tif (\$\$.hasClass('ruleAdd')) {
\t\t\t\t// if we're adding a rule, reset the new row
\t\t\t\tcopy.find(getFieldSelector(fields[0])).attr('selectedIndex', 0).trigger('change');
\t\t\t} else {
\t\t\t\t// otherwise, select the copied row's values
\t\t\t\tfor (var i = 0; i < fields.length; i++) {
\t\t\t\t\tcopy.find(getFieldSelector(fields[i])).attr('selectedIndex', rule.find(getFieldSelector(fields[i])).attr('selectedIndex'));
\t\t\t\t}
\t\t\t}

\t\t\t// in both cases, erase the copys id
\t\t\tcopy.find(getFieldSelector('id')).val('');
\t\t});

\t\tbuilder.delegate('.rule .ruleDelete', 'click', function(event){
\t\t\tevent.preventDefault();

\t\t\tvar \$\$ = \$(this);
\t\t\tvar rule = \$\$.closest('.rule');
\t\t\tvar ruleContainer = rule.closest('tbody');

\t\t\tif (ruleContainer.find('.rule').length <= 1) {
\t\t\t\t// reset the final rule instead of deleting it
\t\t\t\trule.find(getFieldSelector('action')).attr('selectedIndex', 0).trigger('change');
\t\t\t} else {
\t\t\t\trule.remove();
\t\t\t}
\t\t});

\t\tvar rules = [];
\t\t";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getNewsletterSubscribedRules", array(), "any"));
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
        foreach ($context['_seq'] as $context['_key'] => $context['rule']) {
            echo "\t\t\trules.push(";
            // line 236
            echo twig_safe_filter($this->getAttribute((isset($context['rule']) ? $context['rule'] : null), "toJavaScript", array(), "any"));
            echo ");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 237
        echo "
\t\tif (!rules.length) {
\t\t\t// if no rules exist, move the rule template in
\t\t\tbindEvents(builder.find('tfoot .rule').appendTo(ruleContainer));
\t\t\treturn;
\t\t}

\t\t// rules exist; introduce them by duplicating the template and amending
\t\tvar template = builder.find('tfoot .rule');

\t\t\$.each(rules, function(index, rule){
\t\t\tvar copy = template.clone();
\t\t\tcopy.appendTo(ruleContainer);
\t\t\tbindEvents(copy);

\t\t\tcopy.find(getFieldSelector('id')).val(rule.id);

\t\t\tswitch (rule.action) {
\t\t\t\tcase ACTION_ADD:
\t\t\t\t\tvar action = 'listAdd';
\t\t\t\t\tbreak;

\t\t\t\tcase ACTION_REMOVE:
\t\t\t\t\tvar action = 'listRemove';
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tcopy.find(getFieldSelector('action')).val(action).trigger('change');

\t\t\t// the above will trigger a load of list data, but the below requires that lists have been loaded to js - use ajaxdataprovider to enter the queue for this data

\t\t\tmodule.lists.get(function(lists){
\t\t\t\t// lists loaded
\t\t\t\tcopy.find(getFieldSelector('list')).val(rule.listId).trigger('change');

\t\t\t\t// the above will trigger a load of field data, but the below requires that fields for the list above have been loaded to js - use ajaxdataprovider to enter the queue for this data
\t\t\t\tmodule.getList(rule.listId, function(list){
\t\t\t\t\tif (!list) {
\t\t\t\t\t\treturn
\t\t\t\t\t}
\t\t\t\t\tlist.fields.get(function(fields){
\t\t\t\t\t\t// fields are now available locally; fill in the field map selects
\t\t\t\t\t\tvar providerFieldName;
\t\t\t\t\t\tfor (providerFieldName in rule.fieldMap) {
\t\t\t\t\t\t\tvar mapFieldTo = rule.fieldMap[providerFieldName];
\t\t\t\t\t\t\tcopy
\t\t\t\t\t\t\t\t.find(getFieldSelector('map_' + mapFieldTo))
\t\t\t\t\t\t\t\t.val(providerFieldName)
\t\t\t\t\t\t\t\t.trigger('change');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t});
\t\t});

\t\tbuilder.find('tfoot .rule').remove();
\t});

});
//]]></script>
";
    }

}
