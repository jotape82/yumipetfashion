<li style="background:url('images/package.gif') 7px 10px; background-repeat:no-repeat; padding-left:50px">
<a href="{{ ShopPath|safe }}/admin/index.php?ToDo=viewSingleOrder&amp;o={{ OrderId|safe }}" target="_self">
    {% lang 'Order' %} #{{ OrderId|safe }} <div style="display:{{ HideMessages|safe }}" class="newIcon">{{ NumMessages|safe }}</div>
    <div style="width:150px; font-size:13px; background-color:{{ StatusCol|safe }}">
	    {{ OrderStatusText|safe }}
    </div>
    <div style="font-size:11px; color:gray; font-weight:normal">
	{% lang 'OrderedOn' %} {{ Date|safe }}<br />
	{% lang 'ByWord' %} {{ Customer|safe }}<br />
	{% lang 'TotalIs' %} {{ Total|safe }}
    </div>
</a>
</li>
