<div class="BodyContainer">
	<table class="OuterPanel">
		<tr>
			<td class="Heading1">{% lang 'QuickSearch' %}</td>
		</tr>
		<tr>
			<td class="Intro">
				{{ Message|safe }}
			</td>
		</tr>
		<tr>
			<td>
				<ul>
					<li><a href="index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery={{ Query|safe }}">{{ OrdersLink|safe }}</a></li>
					<li><a href="index.php?ToDo=viewCustomers&amp;searchId=0&amp;searchQuery={{ Query|safe }}">{{ CustomersLink|safe }}</a></li>
					<li><a href="index.php?ToDo=viewProducts&amp;searchId=0&amp;searchQuery={{ Query|safe }}">{{ ProductsLink|safe }}</a></li>
				</ul>
			</td>
		</tr>
	</table>
</div>
