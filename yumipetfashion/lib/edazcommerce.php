<?php

	function getCategoriaDoProdutoVejaMaisHtml($codProduto){
		$query = "
		SELECT c.categoryid, c.catname
		FROM [|PREFIX|]categoryassociations ca
		LEFT JOIN [|PREFIX|]categories c ON (ca.categoryid = c.categoryid)
		WHERE ca.productid = " . $codProduto;
		
		$result 	= $GLOBALS['ISC_CLASS_DB']->Query($query);
		$categorias = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
		
		/* RETORNA A PRIMEIRA CATEGORIA ASSOCIADA AO PRODUTO FORMATADA EM HTML */
		$retornoHtml = '';
		if(isset($categorias) && count($categorias) > 0){
			$retornoHtml = "
				<div class='wrapperVejaMaisCategoriaProduto'>
					<div class='labelVejaMais'>+ Veja mais:</div>
					<div class='wrapperVejaMais'>
						<div class='imgVejaMais'></div>
						<a href='" . CatLink($categorias['categoryid'], $categorias['catname'], false) . "'>
							<div class='nomeCategoria floatLeft'>" . ucwords(strtolower($categorias['catname'])) . "</div>
						</a>
					</div>
				</div>
			";
		}
		
		return $retornoHtml;
	}
	
	/**
	 *  Esta função retorna uma data escrita da seguinte maneira:
	 *  Exemplo: Terça-feira, 17 de Abril de 20074. 
	 *  @param string $strDate data a ser analizada; por exemplo: 2007-04-17 15:10:596. 
	 *  @return string7. 
	 */
	 function getFormataDataExtenso($strDate){
	 	date_default_timezone_set("Brazil/East");
	 	
	 	// Array com os dia da semana em português;
	 	$arrDaysOfWeek = array('Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado');
	 	// Array com os meses do ano em português;
	 	$arrMonthsOfYear = array(1 => 'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
	 	// Dia da semana
	 	$intDayOfWeek = date('w',$strDate);
	 	// Dia do mês
	 	$intDayOfMonth = date('d',$strDate);
	 	// Mês
	 	$intMonthOfYear = date('n',$strDate);
	 	// Ano
	 	$intYear = date('Y',$strDate);
		// Hora
		$intHora = date('H',$strDate);
		// Minuto
		$intMinuto = date('i',$strDate);
		// Segundo
		$intSegundo = date('s',$strDate);
		
	 	// Formato a ser retornado
	 	return $arrDaysOfWeek[$intDayOfWeek] . ', ' . $intDayOfMonth . ' de ' . $arrMonthsOfYear[$intMonthOfYear] . ' de ' . $intYear . ' - as ' . $intHora . ':' .  $intMinuto . ':' . $intSegundo;
	 }
	 
	 /**
	  * Retorna as Propriedades Globais Setadas do Endereço de Fatura do Pedido
	  */
	 function getEnderecoDeFaturaDoPedido($codPedido, $billingAddressId=null){
	 	
	 	/* PEGA O ID DO ENDEREÇO DE FATURA NO PEDIDO */
	 	if(!isset($billingAddressId) || $billingAddressId == ''){
	 		$query 			  = " SELECT billing_address_id FROM [|PREFIX|]orders WHERE orderid = $codPedido ";
	 		$result 		  = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$billingAddressId = $GLOBALS['ISC_CLASS_DB']->FetchOne($result);
	 	}
	 	
	 	/* PEGA UM ENDEREÇO PELO ID E SETA PROPRIEDADES GLOBAIS */
	 	getEnderecoPeloId($billingAddressId);
	 	
	 }
	 
	 /**
	  * Retorna as Propriedades Globais Setadas do Endereço de Entrega do Pedido
	  */
	 function getEnderecoDeEntregaDoPedido($codPedido, $shippingAddressId=null){
	 	
	 	/* PEGA O ID DO ENDEREÇO DE ENTREGA NO PEDIDO */
	 	if(!isset($shippingAddressId) || $shippingAddressId == ''){
	 		$query 			  = " SELECT shipping_address_id FROM [|PREFIX|]order_addresses where order_id = $codPedido ";
	 		$result 		  = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$shippingAddressId = $GLOBALS['ISC_CLASS_DB']->FetchOne($result);
	 	}
	 	
	 	/* PEGA UM ENDEREÇO PELO ID E SETA PROPRIEDADES GLOBAIS */
	 	getEnderecoPeloId($shippingAddressId);
	 	
	 }
	 
	 /**
	  * Pega um Endreço Pelo Id e Seta Propriedades Globais
	  */
	 function getEnderecoPeloId($addressId){
	 	
	 	/* PEGA O ENDEREÇO DE FATURA PELO ID E SETA AS VARIÁVEIS GLOBAIS */
		if(isset($addressId)){
			$query   = "SELECT * FROM [|PREFIX|]shipping_addresses WHERE shipid = $addressId ";
			$result  = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$address = $GLOBALS['ISC_CLASS_DB']->fetch($result);
			
			/* VARIÁVEIS GLOBAIS */
			$GLOBALS['ShipNome'] 			= isc_html_escape(ucwords(strtolower($address['shipfirstname'])));
			$GLOBALS['ShipSobrenome'] 		= isc_html_escape(ucwords(strtolower($address['shiplastname'])));
			$GLOBALS['ShipFullName'] 		= isc_html_escape(ucwords(strtolower($address['ordbillfirstname'].' '.$address['ordbilllastname'])));
			$GLOBALS['ShipCompany'] 		= isc_html_escape(ucwords(strtolower($address['shipcompany'])));
			$GLOBALS['ShipAddressLines'] 	= isc_html_escape(ucwords(strtolower($address['shipaddress1'])));
			$GLOBALS['ShipSuburb'] 			= isc_html_escape(ucwords(strtolower($address['shipcity'])));
			$GLOBALS['ShipState'] 			= isc_html_escape(ucwords(strtolower($address['shipstate'])));
			$GLOBALS['ShipZip'] 			= isc_html_escape(ucwords(strtolower($address['shipzip'])));
			$GLOBALS['ShipCountry'] 		= isc_html_escape(ucwords(strtolower($address['shipcountry'])));
			$GLOBALS['ShipPhone'] 			= isc_html_escape(ucwords(strtolower($address['shipphone'])));
			$GLOBALS['ShipDataNascimento'] 	= isc_html_escape(ucwords(strtolower($address['shipdatanascimento'])));
			$GLOBALS['ShipNumero'] 			= isc_html_escape(ucwords(strtolower($address['shipnumero'])));
			$GLOBALS['ShipComplemento'] 	= isc_html_escape(ucwords(strtolower($address['shipcomplemento'])));
			$GLOBALS['ShipBairro'] 			= isc_html_escape(ucwords(strtolower($address['shipbairro'])));
			$GLOBALS['ShipCpf'] 			= isc_html_escape(ucwords(strtolower($address['shipcpf'])));
		}
	 	
	 }












?>
