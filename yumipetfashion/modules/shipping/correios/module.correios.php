<?php
	class SHIPPING_CORREIOS extends ISC_SHIPPING
	{

		private $_deliverytype = "";

		private $_destzip = "";

		private $_deliverytypes = array();
		

		public function __construct()
		{

			parent::__construct();
			$this->_name = 'Correios';
			$this->_image = "images.jpg";
			$this->_description = 'Correios';
			$this->_help = 'Correios';
			$this->_height = 315;
			$this->_countries = array("all");
			$this->_showtestlink = false;
		}

public function SetCustomVars()
		{
		
			$this->_variables['displayname'] = array(
		'name'			=> 'Correios do Brasil',
		'type'		=> 'textbox',
		'help'		=> 'Modulo de Envio Correios',
		'default'	=> $this->GetName(),
		'savedvalue'	=> array(),
		'required'	=> true);
		
			$this->_variables['id'] = array("name" => 'ID',
			   "type" => "textbox",
			   "help" => 'Obs apenas para clientes afiliados aos correios',
			   "default" => "",
			   "required" => false
			);
			
		$this->_variables['senha'] = array("name" => 'Senha',
			   "type" => "textbox",
			   "help" => 'Obs apenas para clientes afiliados aos correios',
			   "default" => "",
			   "required" => false
			);

			$this->_variables['meios'] = array("name" => 'Meios',
			   "type" => "dropdown",
			   "help" => 'Meios de Entrega Ultilizados - Sem Senha: PAC, Sedex - Com Senha: Todos',
			   "default" => "no",
				"savedvalue" => array(),
			   "required" => true,
			   "options" => array('PAC' => '41106',
							  'Sedex' => '40010',
							  'Sedex 10' => '40215',
							  'Sedex Hoje' => '40290',
							  'Sedex a Cobrar' => '40045',
							  'e-Sedex' => '81019',
							  'Malote' => '44105',
				),
				"multiselect" => true
			);
			
		}
		
		

		private function GetQuote()
		{

        $this->SetCustomVars();
		/*
		$this->_id = $this->GetValue("id");
		$this->_senha = $this->GetValue("senha");
		*/
		$this->_id = '09119132';
		$this->_senha = '08677327';
		
        $this->_origem = GetConfig('CompanyZip');
		$sCepOrigem = preg_replace("/([^0-9])/i","",$this->_origem);
		$this->_destino = $this->_destination_zip;
		$sCepDestino = preg_replace("/([^0-9])/i","",$this->_destino);
		$this->_peso = number_format(max(ConvertWeight($this->_weight, 'kgs'), 0.1), 1);
		
		switch($this->_deliverytype){
		       case'41106':
		$tipo = "PAC";
		break;
				case'40010':
		$tipo = "Sedex";
		break;
				case'40215':
		$tipo = "Sedex 10";
		break;
				case'40290':
		$tipo = "Sedex Hoje";
		break;
				case'40045':
		$tipo = "Sedex a Cobrar";
		break;
				case'81019':
		$tipo = "e-Sedex";
		break;
				case'44105':
		$tipo = "Malote";
		break;
		
		}

$total = $count = 0;

/* EDAZCOMMERCE - Retorna Array com as Dimensões dos Produtos do Carrinho */
$arrayDimensoesProduto = $this->getDimensoesProdutosCarrinho();

/*
if (isset($_SESSION['CART']['ITEMS'])) {
	foreach ($_SESSION['CART']['ITEMS'] as $item) {
		$total += $item['product_price'] * $item['quantity'];
	}
}
$total = str_replace('.',',',$total);
*/
$correios ="http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?"
."nCdEmpresa=".$this->_id."&"
."sDsSenha=".$this->_senha."&"
."sCepOrigem=".$sCepOrigem."&"
."sCepDestino=".$sCepDestino."&"
."nVlPeso=".$arrayDimensoesProduto['weight']."&"
."nCdFormato=1&"
."nVlComprimento=".$arrayDimensoesProduto['width']."&"
."nVlAltura=".$arrayDimensoesProduto['height']."&"
."nVlLargura=".$arrayDimensoesProduto['depth']."&"
."sCdMaoPropria=N&"
."nVlValorDeclarado=".$arrayDimensoesProduto['price']."&"
."sCdAvisoRecebimento=N&"
."nCdServico=".$this->_deliverytype."&"
."nVlDiametro=0&"
."StrRetorno=xml";

//inicia o curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $correios);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 2);
$html1 = curl_exec ($ch);
curl_close ($ch);
//pega o valor
$html = explode('<Valor>', $html1);
$html2 = explode('</Valor>', $html[1]);
$this->_shippingcost = str_replace(',','.',$html2[0]);
//pega o prazo
$pra = explode('<PrazoEntrega>', $html1);
$prazo = explode('</PrazoEntrega>', $pra[1]);

if($this->_shippingcost > "0") { 
$newQuote = new ISC_SHIPPING_QUOTE($this->GetId(), $this->GetName(), $this->_shippingcost, $tipo, $prazo[0]);
return $newQuote;
}else{
return false;
}
}

		public function GetServiceQuotes()
		{
			$this->ResetErrors();
			$QuoteList = array();

			// Get the selected delivery types
			$delivery_types = $this->GetValue("meios");

			if(!is_array($delivery_types) && $delivery_types != "") {
				$delivery_types = array($delivery_types);
			}

			foreach($delivery_types as $delivery_type) {

				$this->_deliverytype = $delivery_type;

				// Next actually retrieve the quote
				$err = "";
				$result = $this->GetQuote($err);

				// Was it a valid quote?
				if(is_object($result)) {
					$QuoteList[] = $result;
				// Invalid quote, log the error
				} else {
					foreach($this->GetErrors() as $error) {
						$GLOBALS['ISC_CLASS_LOG']->LogSystemError(array('shipping', $this->GetName()), $this->_deliverytypes[$delivery_type].": " .GetLang('ShippingQuoteError'), $error);
					}
				}
			}

			return $QuoteList;
		}
		
		/**
		 * EDAZCOMMERCE - Retorna um Array com as Dimensões do Maior Produto do Carrinho e a Soma dos Pesos e Preços de Todos os Produtos, para Cálculo do Frete
		 */
		public function getDimensoesProdutosCarrinho(){
			$width  = 0;
			$height = 0;
			$depth  = 0;
			$weight = 0;
			$price  = 0;
			$qtde   = 0;
			
			/* EDAZCOMMERCE - Pega Lista dos Produtos do Carrinho */
			$arrayProductItems = $_SESSION['CART']['ITEMS'];
			
			foreach($arrayProductItems as $arrayTemp){
				$arrayProduto = $arrayTemp->getProductData();
				
				$width   = ($arrayProduto['prodwidth']  > $width)  ? $arrayProduto['prodwidth']  : $width;
				$height  = ($arrayProduto['prodheight'] > $height) ? $arrayProduto['prodheight'] : $height;
				$depth   = ($arrayProduto['proddepth']  > $depth)  ? $arrayProduto['proddepth']  : $depth;
				$qtde    = $arrayTemp->getQuantity();
				$weight += $arrayProduto['prodweight'] * $qtde;
				$price  += $arrayProduto['prodcalculatedprice'];
			}
			
			/* Caso Necessário, Setar Valores Padrão */
			$width  = ($width  < 20) ? 20 : $width;
			$height = ($height < 20) ? 20 : $height;
			$depth  = ($depth  < 20) ? 20 : $depth;
			$weight = ($weight < 20) ? 20 : $weight;
			
			/* EDAZCOMMERCE - Adiciona a Porcentagem do Seguro Sobre o Valor Declarado */
			$valorDeclarado = false;
			$price = ($valorDeclarado) ? $price : 1;
			
			/* EDAZCOMMERCE - Se os Produtos da Loja foram Maleáveis/Dobráveis, fixar a Largura/Profundidade de 20cm */
			$depth = 20;
			
			$arrayDimensoes = array(
				"width"  => number_format($width,  0), 
				"height" => number_format($height, 0), 
				"depth"  => number_format($depth,  0), 
				"weight" => number_format(max(ConvertWeight($weight, 'kgs'), 0.1), 1),
				"price"  => $price
			);
			
			return $arrayDimensoes;
		} 

		public function GetTrackingLink($trackingLink = "")
		{
			return 'http://websro.correios.com.br/sro_bin/txect01$.QueryList?P_LINGUA=001&P_TIPO=001&P_COD_UNI=' . urlencode($trackingLink);
		}
	}