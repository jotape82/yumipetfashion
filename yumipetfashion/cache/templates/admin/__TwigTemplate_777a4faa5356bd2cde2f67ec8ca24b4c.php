<?php

/* settings.emailintegration.customerrules.tpl */
class __TwigTemplate_777a4faa5356bd2cde2f67ec8ca24b4c extends Twig_Template
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
        echo getLang("Interspire_EmailIntegration_Rule_OrderCompleted_Name_Plural");
        echo "\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("Interspire_EmailIntegration_Rule_OrderCompleted_Name_Plural", "NewCustomerSubscriptionRulesHelp", ), "method"), "1");
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endHeading", array(), "any"), "1");
        echo "

";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "method"), "1");
        echo "

\t<table class=\"emailIntegrationRuleBuilder newCustomerSubscriptionRuleBuilder\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "WhenSomeoneOrders", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseCategoryBrandProduct", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TakeThisAction", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseAList", array(), "any"), "1");
        echo "</th>
\t\t\t\t<th>&nbsp;</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t</tbody>
\t\t<tfoot>
\t\t\t";
        // line 26
        echo "
\t\t\t<tr class=\"rule\">
\t\t\t\t<td class=\"order\">
\t\t\t\t\t<input type=\"hidden\" class=\"customerrules_id\" />
\t\t\t\t\t<select class=\"Field150 customerrules_order\" class=\"Field150\">
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t<option value=\"any\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AnythingInMyStore", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t<option value=\"category\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FromThisCategory", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t<option value=\"brand\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FromThisBrand", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t<option value=\"product\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ASpecificProduct", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"orderCriteria\">
\t\t\t\t\t<input type=\"hidden\" class=\"customerrules_ordercriteria\" />
\t\t\t\t\t<div class=\"orderCriteriaContainer orderCriteriaNone orderCriteriaAny\">
\t\t\t\t\t\t<input type=\"text\" class=\"Field150\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NotRequired", array(), "any"), "1");
        echo "\" disabled=\"disabled\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"orderCriteriaContainer orderCriteriaCategory orderCriteriaBrand orderCriteriaProduct\" style=\"display:none;\">
\t\t\t\t\t\t<input type=\"text\" class=\"Field150 orderCriteriaDisplay\" readonly=\"readonly\" /><a class=\"orderCriteriaLinker\" href=\"#\"><img src=\"images/find.gif\" width=\"16\" height=\"16\" /></a>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t<td class=\"action\">
\t\t\t\t\t<select class=\"Field150 customerrules_action\" disabled=\"disabled\">
\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t<option value=\"listAdd\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AddToList", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t<option value=\"listRemove\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RemoveFromList", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"list\">
\t\t\t\t\t<select class=\"customerrules_list Field160\" disabled=\"disabled\"></select>
\t\t\t\t</td>
\t\t\t\t<td class=\"ruleBuilderActions\">
\t\t\t\t\t<input type=\"hidden\" class=\"customerrules_map\" />
\t\t\t\t\t<span class=\"ruleListMapEnabledContainer\" style=\"display:none;\">
\t\t\t\t\t\t<a href=\"#\" class=\"ruleListMap\"><span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SyncOrderFields", array(), "any"), "1");
        echo "</span></a>
\t\t\t\t\t</span>

\t\t\t\t\t<span class=\"ruleListMapDisabledContainer\">
\t\t\t\t\t\t<span class=\"Disabled\">";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SyncOrderFields", array(), "any"), "1");
        echo "</span>
\t\t\t\t\t</span>

\t\t\t\t\t<a href=\"#\" class=\"ruleAdd\" title=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Add", array(), "any"), "1");
        echo "\"><img src=\"images/addicon.png\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Add", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"ruleDelete\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
        echo "\"><img src=\"images/delicon.png\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t\t<a href=\"#\" class=\"ruleCopy\" title=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Copy", array(), "any"), "1");
        echo "\"><img class=\"ruleCopy\" src=\"images/page.gif\" width=\"16\" height=\"16\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Copy", array(), "any"), "1");
        echo "\" /></a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>

";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "

<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\$(function(\$){

\t";
        // line 82
        echo "

\tvar ACTION_ADD = 1;
\tvar ACTION_REMOVE = 2;

\tvar moduleId = \"";
        // line 87
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"));
        echo "\";
\tvar module = Interspire_EmailIntegration_ProviderModel.modules[moduleId];
\tvar moduleContainer = \$('#' + moduleId);
\tvar builder = moduleContainer.find('.newCustomerSubscriptionRuleBuilder');
\tvar ruleContainer = builder.find('tbody');

\tvar getFieldSelector = function (field) {
\t\treturn '.customerrules_' + field;
\t};

\tvar bindEvents = function (newRule) {
\t\t// this exists because for some reason .live and .delegate for change events are NOT working for these fields in IE
\t\tnewRule.find(getFieldSelector('order')).change(function(event){
\t\t\tvar \$\$ = \$(this);
\t\t\tvar val = \$\$.val();
\t\t\tvar rule = \$\$.closest('.rule');

\t\t\trule.find('.orderCriteriaContainer').hide();
\t\t\tif (!val) {
\t\t\t\tvar nextContainer = rule.find('.orderCriteriaNone');
\t\t\t} else {
\t\t\t\tvar nextContainer = rule.find('.orderCriteria' + val.ucfirst());
\t\t\t}
\t\t\tnextContainer.show();
\t\t\trule.find(getFieldSelector('ordercriteria')).val('');
\t\t\trule.find('.orderCriteriaDisplay').val('');

\t\t\tnext = rule.find(getFieldSelector('action'));
\t\t\tif (val) {
\t\t\t\tnext.removeAttr('disabled');
\t\t\t} else {
\t\t\t\tnext.val('');
\t\t\t\tnext.change();
\t\t\t\tnext.attr('disabled', 'disabled');
\t\t\t}
\t\t});

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
\t\t\t\t\tnext[0].options[i+1] = option;
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
\t\t\t\t\tnext[0].options[0] = option;
\t\t\t\t\tnext.attr('selectedIndex', 0).trigger('change');
\t\t\t\t}
\t\t\t});
\t\t});

\t\tnewRule.find(getFieldSelector('list')).change(function(event){
\t\t\tvar \$\$ = \$(this);
\t\t\tvar listId = \$\$.val();
\t\t\tvar previous = \$\$.data('previousListId');
\t\t\t\$\$.data('previousListId', listId);
\t\t\tvar rule = \$\$.closest('.rule');

\t\t\tvar ruleListMapEnabled = true;
\t\t\tvar disabledReason = '';
\t\t\tvar ruleAction = rule.find(getFieldSelector('action')).val();

\t\t\tif (ruleAction == 'listRemove') {
\t\t\t\truleListMapEnabled = false;
\t\t\t\tdisabledReason = lang.EmailIntegrationFieldSyncNotRequired;
\t\t\t} else if (!listId) {
\t\t\t\truleListMapEnabled = false;
\t\t\t\tdisabledReason = lang.EmailIntegrationChooseAListToSync;
\t\t\t}

\t\t\tif (ruleListMapEnabled) {
\t\t\t\trule.find('.ruleListMapEnabledContainer').show();
\t\t\t\trule.find('.ruleListMapDisabledContainer').hide().data('disabledReason', disabledReason);
\t\t\t} else {
\t\t\t\trule.find('.ruleListMapEnabledContainer').hide();
\t\t\t\trule.find('.ruleListMapDisabledContainer').show().data('disabledReason', disabledReason);
\t\t\t}

\t\t\tif (previous && ruleListMapEnabled) {
\t\t\t\t// when switching between valid 'add' actions, attempt to re-map rules

\t\t\t\ttry {
\t\t\t\t\tvar existingMap = JSON.parse(rule.find(getFieldSelector('map')).val());
\t\t\t\t} catch (ex) {
\t\t\t\t\tvar existingMap = false;
\t\t\t\t}

\t\t\t\tif (existingMap) {
\t\t\t\t\tmodule.getList(listId, function(list){
\t\t\t\t\t\tlist.fields.get(function(fields){
\t\t\t\t\t\t\t// examine our current map and drop any mappings that have no equivalent in the new list's fields
\t\t\t\t\t\t\tvar newMap = {};
\t\t\t\t\t\t\t\$.each(existingMap, function(provider, local){
\t\t\t\t\t\t\t\t\$.each(fields, function(index, field){
\t\t\t\t\t\t\t\t\tif (field.provider_field_id == provider) {
\t\t\t\t\t\t\t\t\t\tnewMap[provider] = local;
\t\t\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\trule.find(getFieldSelector('map')).val(JSON.stringify(newMap));
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t});
\t};

\t\$(function(){
\t\tbuilder.delegate('.ruleListMapDisabledContainer', 'click', function(event){
\t\t\tevent.preventDefault();
\t\t\tvar \$\$ = \$(this);
\t\t\tvar message = \$\$.data('disabledReason');
\t\t\tif (message) {
\t\t\t\talert(message);
\t\t\t}
\t\t});

\t\tbuilder.delegate('.ruleListMap', 'click', function(event){
\t\t\tevent.preventDefault();
\t\t\tvar \$\$ = \$(this);
\t\t\tvar rule = \$\$.closest('.rule');
\t\t\tvar list = rule.find(getFieldSelector('list')).val();
\t\t\tif (!list) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$('.newCustomerSubscriptionRuleBuilder').data('syncingFieldsFor', rule);

\t\t\tvar urlData = {
\t\t\t\tremoteSection: 'settings_emailintegration',
\t\t\t\tw: 'providerAction',
\t\t\t\tprovider: module.provider,
\t\t\t\tproviderAction: 'getFieldSyncForm',
\t\t\t\tlistId: list,
\t\t\t\tmap: rule.find('.customerrules_map').val()
\t\t\t};

\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\tmethod: 'post',
\t\t\t\twidth: 520,
\t\t\t\turl: 'remote.php',
\t\t\t\turlData: urlData
\t\t\t});
\t\t});

\t\tbuilder.delegate('.rule .ruleCopy, .rule .ruleAdd', 'click', function(event){
\t\t\tevent.preventDefault();

\t\t\tvar \$\$ = \$(this);
\t\t\tvar rule = \$\$.closest('.rule');
\t\t\tvar copy = rule.clone();
\t\t\trule.after(copy);
\t\t\tbindEvents(copy);

\t\t\tvar fields = ['order', 'orderCriteria', 'action', 'list'];
\t\t\tif (\$\$.hasClass('ruleAdd')) {
\t\t\t\t// if we're adding a rule, reset the new row
\t\t\t\tcopy.find(getFieldSelector('order')).attr('selectedIndex', 0).trigger('change');
\t\t\t\tcopy.find(getFieldSelector('action')).attr('selectedIndex', 0).trigger('change');
\t\t\t\tcopy.find(getFieldSelector('map')).val('');
\t\t\t} else {
\t\t\t\t// otherwise, select the copied row's values
\t\t\t\tfor (var i = 0; i < fields.length; i++) {
\t\t\t\t\tvar field = copy.find(getFieldSelector(fields[i]));
\t\t\t\t\tfield.attr('selectedIndex', rule.find(getFieldSelector(fields[i])).attr('selectedIndex'));
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
\t\t\t\trule.find(getFieldSelector('order') + ', ' + getFieldSelector('action') + ', ' + getFieldSelector('list')).attr('selectedIndex', 0).trigger('change');
\t\t\t\trule.find(getFieldSelector('map') + ', ' + getFieldSelector('ordercriteria')).val('');
\t\t\t} else {
\t\t\t\trule.remove();
\t\t\t}
\t\t});

\t\tbuilder.delegate('.rule .orderCriteriaLinker, .rule .orderCriteriaDisplay', 'click', function(event){
\t\t\tevent.preventDefault();

\t\t\tvar \$\$ = \$(this);
\t\t\tvar rule = \$\$.closest('.rule');
\t\t\tbuilder.linkerRule = rule;
\t\t\tStoreLinker.openModal(0, rule.find(getFieldSelector('order')).val());
\t\t});

\t\tvar rules = [];
\t\t";
        // line 323
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "object", array(), "any"), "getOrderCompletedRules", array(), "any"));
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
            // line 324
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
        // line 325
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

\t\t\tcopy.find(getFieldSelector('order')).val(rule.eventCriteria.orderType).trigger('change');

\t\t\tcopy.find(getFieldSelector('ordercriteria')).val(rule.eventCriteria.orderCriteria).trigger('change');
\t\t\tcopy.find('.orderCriteriaDisplay').val(rule.eventCriteria.orderCriteriaName);

\t\t\tswitch (rule.action) {
\t\t\t\tcase ACTION_ADD:
\t\t\t\t\tvar action = 'listAdd';
\t\t\t\t\tbreak;

\t\t\t\tcase ACTION_REMOVE:
\t\t\t\t\tvar action = 'listRemove';
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tcopy.find(getFieldSelector('action')).val(action).trigger('change');

\t\t\t// make sure lists are downloaded
\t\t\tmodule.lists.get(function(lists){
\t\t\t\tcopy.find(getFieldSelector('list')).val(rule.listId).trigger('change');
\t\t\t\tcopy.find(getFieldSelector('map')).val(JSON.stringify(rule.fieldMap));
\t\t\t});
\t\t});

\t\tbuilder.find('tfoot .rule').remove();
\t});

\t// override the default storelinker behaviour, which is tied to redirects
\tStoreLinker.onModalClose = function () {
\t\tif (typeof StoreLinker.selectedItem.id == 'undefined') {
\t\t\treturn;
\t\t}

\t\tvar rule = builder.linkerRule;
\t\tdelete builder.linkerRule;

\t\trule.find(getFieldSelector('ordercriteria')).val(StoreLinker.selectedItem.id);
\t\trule.find('.orderCriteriaDisplay').val(StoreLinker.selectedItem.title);
\t};

});
//]]></script>
";
    }

}
