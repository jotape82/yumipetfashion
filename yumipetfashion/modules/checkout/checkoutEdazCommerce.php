<?php

class checkoutEdazCommerce {

	public function getTokenByOrderId($orderid){
		$tokenOrder = '';
		$query 		= "	SELECT ordtoken
						FROM [|PREFIX|]orders
						WHERE orderid=".$orderid;
		
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
		$order  = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
		$tokenOrder = $order['ordtoken'];
		return $tokenOrder;
	}

}


?>