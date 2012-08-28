<?php
class ACCOUNTING_STONEEDGE_ORDERS
{
	 /**
	 * Count the number of orders in the database
	 *
	 * Method will process the post data and create text for display. Used by SEOM to determine how many times to run DownloadOrders().
	 *
	 * @access public
	 * @return string a response to the data to display on the page.
	 */

	public function ProcessOrderCount()
	{
		$response = '';
		if (isset($_REQUEST['lastorder'])) {
			/* either an order number or 'All' */
			if ($_REQUEST['lastorder'] == 'All') {
				/* return a count of all orders in the database */
				$count = StoneEdgeCount('orders','');
				$response = "SetiResponse: ordercount=$count";
			} else {
				/* return a count of all orders after the last order passed to SEOM to make sure that this isn't a SQL injection attempt. */
				if (is_numeric($_REQUEST['lastorder'])) {
					$previousend = $_REQUEST['lastorder'];
				} else {
					/* Stone Edge Order Manager will always send lastorder. If we get here, ignore their request and change the last order to 1. */
					$previousend = 1;
				}
				$count = StoneEdgeCount('orders','WHERE orderid > '. $previousend);
				$response = "SetiResponse: ordercount=$count";
			}
		} else {
			/* either a date in 10/Jun/2003 format or 'All' */
			if ($_REQUEST['lastdate'] == 'All') {
				/* return a count of all orders in the database */
				$count = StoneEdgeCount('orders','');
				$response = "SetiResponse: ordercount=$count";
			} else {
				/* return the orders after the last timestamp. */
				/* convert their date to our date structure */
				list($day,$month,$year) = explode('/',$_REQUEST['lastdate']);
				$date = strtotime("$day $month $year");
				/* make sure that this isn't a SQL injection attempt. */
				if (is_numeric($date)) {
					$count = StoneEdgeCount('orders','WHERE orddate >= '. $date);
				} else {
					/* then something went wrong so return all orders. Always return something. */
					$count = StoneEdgeCount('orders','');
				}
				$response = "SetiResponse: ordercount=$count";
			}
		}
		return $response;
	}

	/**
	 * Download orders in the database to SEOM
	 *
	 * Method will process the posted data and create XML to be displayed.
	 *
	 * @access public
	 * @return string XML response to display on the page for orders requested
	 */

	public function DownloadOrders()
	{
		$start = 0;
		$numresults = 0;
		$lastOrderCondition = '';
		$xml = new SimpleXMLElement('<?xml version="1.0"?><SETIOrders />');

		if (isset($_REQUEST['startnum']) && (int)$_REQUEST['startnum'] > 0 && isset($_REQUEST['batchsize']) && (int)$_REQUEST['batchsize']  > 0) {
			$start = (int)$_REQUEST['startnum'] - 1;
			$numresults = (int)$_REQUEST['batchsize'];
		}

		/* should we limit the number of results in this query? */
		$limitQuery = '';
		if($start >= 0 && $numresults > 0) {
			$limitQuery = ' LIMIT '. $start .', '. $numresults;
		}

		if (isset($_REQUEST['lastorder'])) {
			if (strtolower($_REQUEST['lastorder']) == 'all') {
				$previousend = 0;
			} else {
				$previousend = (int)$_REQUEST['lastorder'];
			}

			/* check to see if we should start the query from a particular order number */
			if (is_numeric($previousend) && $previousend > 0) {
				$lastOrderCondition = 'AND o.orderid > ' . $previousend;
			}
		} else {
			die('No lastorder field received');
		}

		/* build our query */
		$query = StoneEdgeOrderQuery("WHERE o.ordstatus IN('2', '3', '9', '10', '11') " . $lastOrderCondition . " ORDER BY o.orderid ASC" . $limitQuery);
		$queryCount = StoneEdgeOrderQueryCount("WHERE o.ordstatus IN('2', '3', '9', '10', '11') " . $lastOrderCondition . " ORDER BY o.orderid ASC");

		if ($GLOBALS['ISC_CLASS_DB']->FetchOne($queryCount) != 0) {
			/* then we have at least one result, so let's build the XML	header response */
			$responseNode = $xml->addChild('Response');
			$responseNode->addChild('ResponseCode', 1);
			$responseNode->addChild('ResponseDescription', 'Success');
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
				$orderNode = $xml->addChild('Order');
				$orderNode->addChild('OrderNumber', $row['orderid']);
				$orderNode->addChild('OrderDate', date('Y-m-d H:i:s', $row['orddate']));
				$BillingDetails = $orderNode->addChild('Billing');
				$BillingDetails->addChild('FullName', $row['ordbillfirstname'] . ' ' . $row['ordbilllastname']);
				if(isset($row['ordbillcompany']) && $row['ordbillcompany'] != ''){
					$BillingDetails->addChild('Company', $row['ordbillcompany']);
				}
				$BillingDetails->addChild('Phone', $row['ordbillphone']);
				$BillingDetails->addChild('Email', $row['ordbillemail']);
				$AddressBilling = $BillingDetails->addChild('Address');
				$AddressBilling->addChild('Street1', $row['ordbillstreet1']);
				if(isset($row['ordbillstreet2']) && $row['ordbillstreet2'] != ''){
					$AddressBilling->addChild('Street2', $row['ordbillstreet2']);
				}
				$AddressBilling->addChild('City', $row['ordbillsuburb']);
				$AddressBilling->addChild('State', $row['stateabbrv']);
				$AddressBilling->addChild('Code', $row['ordbillzip']);
				$AddressBilling->addChild('Country', $row['ordbillcountrycode']);
				$ShippingQuery = "SELECT * FROM order_addresses WHERE order_id = " . $row['orderid'] . " ORDER by id DESC LIMIT 1";
				$ShippingResult = $GLOBALS['ISC_CLASS_DB']->Query($ShippingQuery);
				while($ship = $GLOBALS['ISC_CLASS_DB']->Fetch($ShippingResult)){
					$ShippingDetails = $orderNode->addChild('Shipping');
					$ShippingDetails->addChild('FullName', $ship['first_name'] . ' ' . $ship['last_name']);
					if(isset($ship['company']) && $ship['company'] != ''){
						$ShippingDetails->addChild('Company', $ship['company']);
					}
					$ShippingDetails->addChild('Phone', $ship['phone']);
					$ShippingDetails->addChild('Email', $ship['email']);
					$AddressShipping = $ShippingDetails->addChild('Address');
					$AddressShipping->addChild('Street1', $ship['address_1']);
					if(isset($ship['address_2']) && $ship['address_2'] != ''){
						$AddressShipping->addChild('Street2', $ship['address_2']);
					}
					$AddressShipping->addChild('City', $ship['city']);
					/* new state query */
					$stateQuery = "SELECT stateabbrv FROM [|PREFIX|]country_states WHERE statename = '" . $ship['state'] . "'";
					$stateReturn = $GLOBALS['ISC_CLASS_DB']->Query($stateQuery);
					$shipstate = $GLOBALS['ISC_CLASS_DB']->Fetch($stateReturn);
					$AddressShipping->addChild('State', $shipstate['stateabbrv']);
					$AddressShipping->addChild('Code', $ship['zip']);
					$AddressShipping->addChild('Country', $ship['country_iso2']);
				}
				/* set fixed variables for later to save some server time */
				$OrderID = $row['orderid'];
				$OrderSubTotal = $row['subtotal_ex_tax'];
				$OrderDiscounts = '';
				if($row['orddiscountamount'] > 0 || $row['coupon_discount'] > 0){
					$OrderDiscounts = $row['orddiscountamount'] + $row['coupon_discount'];
					$SubTotalLessDiscounts = $OrderSubTotal - $OrderDiscounts;
				}else{
					$SubTotalLessDiscounts = $OrderSubTotal;
				}
				$OrderTaxTotal = $row['subtotal_inc_tax'];
				$TaxAmount = $row['total_tax'];
				$OrderShippingCost = $row['shipping_cost_ex_tax'] + $row['handling_cost_ex_tax'];
				$OrderShippingMethod = $row['method'];
				$OrderTotal = $row['total_inc_tax'];
				$OrderComments = $row['ordnotes']; /* not shown on invoice */
				$OrderMessage = $row['ordcustmessage']; /* shown on invoice */
				$OrderIP = $row['ordipaddress'];

				/* Time to get product information for this order from order_products and products tables */
				$productQuery = "SELECT op.*, p.prodweight, p.prodwidth, p.prodheight, p.proddepth FROM [|PREFIX|]order_products op
								 LEFT JOIN [|PREFIX|]products p ON op.ordprodid = p.productid
						 		 WHERE orderorderid = '" . $OrderID ."'";
				$products = $GLOBALS['ISC_CLASS_DB']->Query($productQuery);
				while($prodReturn = $GLOBALS['ISC_CLASS_DB']->Fetch($products)) {
					if (isset($prodReturn['total_tax']) && $prodReturn['total_tax'] > 0) {
						$taxable = 'Yes';
					} else {
						$taxable = 'No';
					}

					/* assign SKU for default product */
					$sku = $prodReturn['ordprodsku'];
					$prodType = $prodReturn['ordprodtype'];
					if ($prodType == 'physical') {
						$prodType = 'Tangible';
					} else {
						$prodType = 'Download';
					}
					$isVariation = 0;
					$isConfigurable = 0;

					if (isset($prodReturn['ordprodoptions']) && $prodReturn['ordprodoptions'] != '') {
						$isConfigurable = 1;
						/* configurable fields query is below in the ProductOptions XML string */
					}
					$productNode = $ShippingDetails->addChild('Product');
					if($sku != ''){
						$productNode->addChild('SKU', htmlentities($sku));
					} else {
						$productNode->addChild('SKU', htmlentities($ProductName));
					}
					$ProductName = htmlentities($prodReturn['ordprodname']);
					$productNode->addChild('Name', $ProductName);
					$productNode->addChild('Quantity', $prodReturn['ordprodqty']);
					$productNode->addChild('ItemPrice', number_format($prodReturn['price_ex_tax'],2));
					$productNode->addChild('Weight', number_format($prodReturn['ordprodweight'],2));
					$productNode->addChild('ProdType', $prodType);
					$productNode->addChild('Taxable', $taxable); //Yes or No
					$total = number_format($prodReturn['ordprodqty'] * $prodReturn['ordprodcost'],2);
					$productNode->addChild('Total', number_format($total,2));
					$dimension = $productNode->addChild('Dimension');
					$dimension->addChild('Length', number_format($prodReturn['prodwidth'],2));
					$dimension->addChild('Width', number_format($prodReturn['proddepth'],2));
					$dimension->addChild('Height', number_format($prodReturn['prodheight'],2));
					if (isset($prodReturn['ordprodvariationid']) && $prodReturn['ordprodvariationid'] != 0) {
						$isVariation = 1;
						$variationQuery = "SELECT * FROM [|PREFIX|]product_variation_combinations vc
										JOIN [|PREFIX|]product_variation_options vo WHERE
										vc.vcproductid = '" . $prodReturn['ordprodid'] . "' AND
										vc.combinationid = '" . $prodReturn['ordprodvariationid'] . "'";
						/* with this query, the vc fields will be the same every time. The vo fields will be different each time. 1 vc to many vo's. */
						$variations = $GLOBALS['ISC_CLASS_DB']->Query($variationQuery);
						$varOptions = array();
						$already = '';
						while ($varReturn = $GLOBALS['ISC_CLASS_DB']->Fetch($variations)) {
							$searchFor = array(); //initialize array
							$searchFor = explode(',',$varReturn['vcoptionids']);
							foreach ($searchFor as $check) {
								if ($varReturn['voptionid'] == $check) {
									/* then we've matched the id and can add that variation option's information into the option array */
									$varOptions = array($varReturn['voname'] => $varReturn['vovalue']);
									continue;
								}
							}
							if ($already == '') {
								/* then it's the first time, so let's set the fixed variables and save a few microseconds */
								if (isset($varReturn['vcsku']) && $varReturn['vcsku'] != '') {
									$sku = $varReturn['vcsku'];
								}
								$varprice = 0;
								if (isset($varReturn['vcpricediff']) && $varReturn['vcpricediff'] != '') {
									if ($varReturn['vcpricediff'] != 'fixed') {
										$varprice = $varReturn['vcprice'];
										if ($varReturn['vcpricediff'] == 'subtract') {
											$varprice = $varprice * -1;
										}
									}
								}
								$varweight = 0;
								if (isset($varReturn['vcweightdiff']) && $varReturn['vcweightdiff'] != '') {
									if ($varReturn['vcweightdiff'] != 'fixed') {
										$varweight = $varReturn['vcweight'];
									}
									if ($varReturn['vcweightdiff'] == 'subtract') {
											$varweight = $varweight * -1;
									}
								}
								/* we only want to set the fixed variables one time, so let's set a variable to keep it from happening again. */
								$already = 'done';
							}
						}
						$varcounter = 0;
						$countvar = count($varOptions);
						foreach($varOptions as $oName => $oValue) {
							$varcounter++;
							if ($varcounter < $countvar) {
								$variationNode = $orderNode->addChild('OrderOption');
								$variationNode->addChild('OptionName', $oName);
								$variationNode->addChild('SelectedOption', $oValue);
								$variationNode->addChild('OptionPrice', 0);
								$variationNode->addChild('OptionWeight', 0);
							} else {
								/* last one gets the weight and price changes, if we were able to find any */
								$variationNode = $orderNode->addChild('OrderOption');
								$variationNode->addChild('OptionName', $oName);
								$variationNode->addChild('SelectedOption', $oValue);
								$variationNode->addChild('OptionPrice', number_format($varprice,2));
								$variationNode->addChild('OptionWeight', number_format($varweight,2));
							}
						}
					}
					/* check for configurable fields */
					if ($isconfigurable == 1) {
						$configurableQuery = "SELECT * FROM [|PREFIX|]order_configurable_fields
													WHERE orderid = '" . $row['orderid'] . "'
													AND ordprodid = '" . $prodReturn['productid'] . "'";

						$fields = $GLOBALS['ISC_CLASS_DB']->Query($configurableQuery);
						/* build OrderOption XML for all configurable fields */
						while ($field = $GLOBALS['ISC_CLASS_DB']->Fetch($fields)) {
							$fieldFileType = $field['filetype'];
							$fieldName = $field['fieldname'];

							switch($fieldFileType) {
								case 'file': {
									$fieldValue = isc_html_escape($field['originalfilename']);
									break;
								}
								default: {
									if (isc_strlen($field['textcontents'])>50) {
										$fieldValue = isc_html_escape(isc_substr($field['textcontents'], 0, 50))." ..";
									} else {
										$fieldValue = isc_html_escape($field['textcontents']);
									}
									break;
								}
							}
							$configurableNode = $orderNode->addChild('OrderOption');
							$configurableNode->addChild('OptionName', $fieldName);
							$configurableNode->addChild('SelectedOption', $fieldValue);
						}
					}
				}
				$productExtraInfo = @unserialize($row['extrainfo']);

				if($row['orderpaymentmodule'] == 'checkout_creditcardmanually') {
					$paymentNode = $orderNode->addChild('Payment');
					$ccNode = $paymentNode->addChild('CreditCard');
						$ccNode->addChild('FullName', $productExtraInfo['cc_name']);
						$ccNode->addChild('Issuer', $productExtraInfo['cc_cctype']);
						$ccNode->addChild('ExpirationDate', $productExtraInfo['cc_ccexpm'].$productExtraInfo['cc_ccexpy']);
				} elseif ($row['orderpaymentmodule'] == 'checkout_cod') {
					$paymentNode = $orderNode->addChild('Payment');
					$paymentNode->addChild('COD'); /* has no children nodes */
				} else {

					$provider = null;
					if(GetModuleById('checkout', $provider, $row['orderpaymentmodule'])) {
						if(method_exists($provider, "GetName")) {
							$paymentNode = $orderNode->addChild('Payment');

							$specialGateways = array(
								'checkout_authorizenet',
								'checkout_paypalpaymentsprouk',
								'checkout_paypalpaymentsprous',
								'checkout_payflowpro',
							);

							if (in_array($row['orderpaymentmodule'],$specialGateways) && strtolower($row['ordpaymentstatus']) == 'authorized') {
								$creditcardNode = $paymentNode->addChild('CreditCard');
								$extraInfo = unserialize($row['extrainfo']);
								if(isset($extraInfo['cardtype']) && $extraInfo['cardtype'] != ''){
									$creditcardNode->addChild('Issuer', $extraInfo['cardtype']);
									$creditcardNode->addChild('TransID', $row['ordpayproviderid']);
									$creditcardNode->addChild('AuthCode', $row['ordpayproviderid']);
									$creditcardNode->addChild('Amount', number_format($OrderTotal,2));
								}
							}else{
								$genericNode = $paymentNode->addChild('Generic1');
								$genericNode->addChild('Name', 'Generic 1');
								$genericNode->addChild('Description', $provider->GetName());
							}
						}
					}
				}

				$totalNode = $orderNode->addChild('Totals');
				$totalNode->addChild('ProductTotal', number_format($OrderSubTotal,2));
				if(isset($OrderDiscounts) && $OrderDiscounts != ''){
					$discountNode = $totalNode->addChild('Discount');
					$discountNode->addChild('Amount', number_format($OrderDiscounts,2));
				}

				/* The Subtotal node below this comment should be subtotal - discounts but before adding in taxes, shipping, and handling. */
				$totalNode->addChild('SubTotal', number_format($SubTotalLessDiscounts,2));

				if ($OrderTaxTotal > $OrderSubTotal) {
					$taxNode = $totalNode->addChild('Tax');
					$taxNode->addChild('TaxAmount', number_format($TaxAmount,2));
				}

				$totalNode->addChild('GrandTotal', number_format($OrderTotal,2)); /* includes all shipping, handling, tax, and wrapping costs */
				$shipTotal = $totalNode->addChild('ShippingTotal');
				$shipTotal->addChild('Total', number_format($OrderShippingCost,2));
				$shipTotal->addChild('Description', $OrderShippingMethod);

				$otherNode = $orderNode->addChild('Other');
				if ($OrderInstructions != '') {
					$otherNode->addChild('OrderInstructions', $OrderMessage);
				}
				if ($OrderComments != '') {
					$otherNode->addChild('Comments', $OrderComments);
				}

				$otherNode->addChild('IpHostname', $OrderIP);

			}
		} else {
			//no results, give a response code of 2 to let SEOM know
			$responseNode = $xml->addChild('Response');
			$responseNode->addChild('ResponseCode', 2);
			$responseNode->addChild('ResponseDescription', 'Success');
		}

		return $xml->asXML();
	} //end function DownloadOrders
}
