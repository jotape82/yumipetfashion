
	<form enctype="multipart/form-data" action="index.php?ToDo={{ FormAction|safe }}" onsubmit="return ValidateForm(CheckCouponForm)" id="frmNews" method="post">
	<input type="hidden" id="couponId" name="couponId" value="{{ CouponId|safe }}">
	<input type="hidden" id="couponexpires" name="couponexpires" value="">
	<input type="hidden" id="couponCode" name="couponcode" value="{{ CouponCode|safe }}">
	<div class="BodyContainer">
	<table class="OuterPanel">
	  <tr>
		<td class="Heading1" id="tdHeading">{{ Title|safe }}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ Intro|safe }}</p>
			{{ Message|safe }}
			<p><input type="submit" name="SubmitButton1" value="{% lang 'Save' %}" class="FormButton">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="FormButton" onclick="ConfirmCancel()"></p>
		</td>
	  </tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'NewCouponDetails' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'CouponCode' %}:
					</td>
					<td>
						<input type="text" id="couponcode" name="couponcode" class="Field250" value="{{ CouponCode|safe }}" />
						<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'CouponCode' %}', '{% lang 'CouponCodeHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d1"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'CouponName' %}:
					</td>
					<td>
						<input type="text" id="couponname" name="couponname" class="Field250" value="{{ CouponName|safe }}">
						<img onmouseout="HideHelp('d6');" onmouseover="ShowHelp('d6', '{% lang 'CouponName' %}', '{% lang 'CouponNameHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d6"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'DiscountAmount' %}:
					</td>
					<td>
						<input type="text" id="couponamount" name="couponamount" class="Field50" value="{{ DiscountAmount|safe }}">
						<select type="text" id="coupontype" name="coupontype">
							<option {% if coupon.coupontype == 2 %}selected="selected"{% endif %} value="2">{{ CurrencyToken }} {{ lang.OffTheTotal }}</option>
							<option {% if coupon.coupontype == 0 %}selected="selected"{% endif %} value="0">{{ CurrencyToken }} {{ lang.OffEachItem }}</option>
							<option {% if coupon.coupontype == 1 %}selected="selected"{% endif %} value="1">% {{ lang.OffEachItem }}</option>
						</select>
						<img onmouseout="HideHelp('d2');" onmouseover="ShowHelp('d2', '{% lang 'DiscountAmount' %}', '{% lang 'DiscountAmountHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d2"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'ExpiryDate' %}:
					</td>
					<td>
						<input class="plain" id="dc1" value="{{ ExpiryDate|safe }}" size="12" onfocus="this.blur()" readonly><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;" HIDEFOCUS><img name="popcal" align="absmiddle" src="images/calbtn.gif" width="34" height="22" border="0" alt=""></a>
						&nbsp;<img onmouseout="HideHelp('d4');" onmouseover="ShowHelp('d4', '{% lang 'ExpiryDate' %}', '{% lang 'ExpiryDateHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d4"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'MinimumPurchase' %}:
					</td>
					<td>
						{{ CurrencyTokenLeft|safe }} <input type="text" id="couponminpurchase" name="couponminpurchase" class="Field50" value="{{ MinPurchase|safe }}"> {{ CurrencyTokenRight|safe }}
						<img onmouseout="HideHelp('d3');" onmouseover="ShowHelp('d3', '{% lang 'MinimumPurchase' %}', '{% lang 'MinimumPurchaseHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d3"></div>
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'Enabled' %}:
					</td>
					<td>
						<input type="checkbox" id="couponenabled" name="couponenabled" value="ON" {{ Enabled|safe }}> <label for="couponenabled">{% lang 'YesCouponEnabled' %}</label>
					</td>
				</tr>

				<tr>
					<td class="FieldLabel">
						&nbsp;&nbsp;&nbsp;{% lang 'CouponMaxUses' %}:
					</td>
					<td>
						<input type="text" id="couponmaxuses" name="couponmaxuses" class="Field50" value="{{ MaxUses|safe }}" />
						<img onmouseout="HideHelp('d5');" onmouseover="ShowHelp('d5', '{% lang 'CouponMaxUses' %}', '{% lang 'CouponMaxUsesHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
						<div style="display:none" id="d5"></div>
					</td>
				</tr>
			</table>
			<table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'CouponAppliesTo' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'AppliesTo' %}:
					</td>
					<td style="padding-bottom: 3px;">
						<input onclick="ToggleUsedFor(0)" type="radio" id="usedforcat" name="usedfor" value="categories" {{ UsedForCat|safe }}> <label for="usedforcat">{% lang 'CouponAppliesToCategories' %}</label><br />
						<div id="usedforcatdiv" style="padding-left:25px">
							<select multiple="multiple" size="12" name="catids[]" id="catids" class="Field250 ISSelectReplacement">
								<option value="0" {{ AllCategoriesSelected|safe }}>{% lang 'AllCategories' %}</option>
								{{ CategoryList|safe }}
							</select>
							<img onmouseout="HideHelp('d1');" onmouseover="ShowHelp('d1', '{% lang 'ChooseCategories' %}', '{% lang 'ChooseCategoriesHelp' %}')" src="images/help.gif" width="24" height="16" border="0">
							<div style="display:none" id="d1"></div>
						</div>
													<div style="clear: left;" />
						<input onclick="ToggleUsedFor(1)" type="radio" id="usedforprod" name="usedfor" value="products"> <label for="usedforprod">{% lang 'CouponAppliesToProducts' %}</label><br />
						<div id="usedforproddiv" style="padding-left:25px">
							<select size="12" name="products" id="ProductSelect" class="Field250" onchange="$('#ProductRemoveButton').attr('disabled', false);">
								{{ SelectedProducts|safe }}
							</select>
							<div class="Field250" style="text-align: left;">
								<div style="float: right;">
									<input type="button" value="{% lang 'CouponRemoveSelected' %}" id="ProductRemoveButton" disabled="disabled" class="FormButton" style="width: 125px;" onclick="removeFromProductSelect('ProductSelect', 'prodids');" />
								</div>
								<input type="button" value="{% lang 'CouponAddProduct' %}" class="FormButton" style="width: 125px;" onclick="openProductSelect('coupon', 'ProductSelect', 'prodids');" />
							<input type="hidden" name="prodids" id="prodids" class="Field250" value="{{ ProductIds|safe }}" />
						</div>
					</td>
				</tr>
			</table>


			<table border="0" cellspacing="0" cellpadding="2" width="100%" class="PanelPlain">
				<tr>
					<td width="200" class="FieldLabel">
						&nbsp;
					</td>
					<td>
						<input type="submit" value="{% lang 'Save' %}" class="FormButton" />
						<input type="reset" value="{% lang 'Cancel' %}" class="FormButton" onclick="ConfirmCancel()" />
					</td>
				</tr>
			</table>

			</td>
		</tr>
	</table>

	</div>
	</form>

	<iframe width=132 height=142 name="gToday:contrast:agenda.js" id="gToday:contrast:agenda.js" src="calendar/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;"></iframe>
	<input type="text" id="dc2" name="dc2" style="display:none">

	<script type="text/javascript">

		function ConfirmCancel()
		{
			if(confirm("{% lang 'ConfirmCancelCoupon' %}"))
				document.location.href = "index.php?ToDo=viewCoupons";
		}

		function CheckCouponForm()
		{
			var couponname = document.getElementById("couponname");
			var usedforcatdiv = document.getElementById("usedforcatdiv");
			var usedforproddiv = document.getElementById("usedforproddiv");
			var catids = document.getElementById("catids");
			var prodids = document.getElementById("prodids");
			var da = document.getElementById("couponamount");
			var mp = document.getElementById("couponminpurchase");
			var dc1 = document.getElementById("dc1");
			var ce = document.getElementById("couponexpires");

			ce.value = dc1.value;

			if($('#couponcode').val() == '') {
				alert('{% lang 'EnterCouponCode' %}');
				$('#couponcode').focus();
				return false;
			}

			if(couponname.value == "") {
				alert("{% lang 'EnterCouponName' %}");
				couponname.focus();
				return false;
			}

			if(usedforcatdiv.style.display == "") {
				if(catids.selectedIndex == -1) {
					alert("{% lang 'ChooseCouponCategory' %}");
					catids.focus();
					return false;
				}
			}

			if(usedforproddiv.style.display == "") {
				if(prodids.value == "") {
					alert("{% lang 'EnterCouponProductId' %}");
					prodids.focus();
					return false;
				}
			}

			if(isNaN(parseInt(da.value)))
			{
				alert("{% lang 'EnterValidAmount' %}");
				da.focus();
				da.select();
				return false;
			}

			m = mp.value.replace("{{ CurrencyToken|safe }}", "");

			if(isNaN(m) && m != "")
			{
				alert("{% lang 'EnterValidMinPrice' %}");
				mp.focus();
				mp.select();
				return false;
			}

			// Everything is OK
			return true;
		}

		function ToggleUsedFor(Which) {
			var usedforcatdiv = document.getElementById("usedforcatdiv");
			var usedforproddiv = document.getElementById("usedforproddiv");
			var usedforcat = document.getElementById("usedforcat");
			var usedforprod = document.getElementById("usedforprod");

			if(Which == 0) {
				usedforcat.checked = true;
				usedforcatdiv.style.display = "";
				usedforproddiv.style.display = "none";
			}
			else {
				usedforprod.checked = true;
				usedforcatdiv.style.display = "none";
				usedforproddiv.style.display = "";
			}
		}

		{{ ToggleUsedFor|safe }}

	</script>
