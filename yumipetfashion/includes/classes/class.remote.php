<?php
	if (!defined('ISC_BASE_PATH')) {
		die();
	}

	require_once(ISC_BASE_PATH.'/lib/class.xml.php');

	class ISC_REMOTE extends ISC_XML_PARSER
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function HandleToDo()
		{
			/**
			 * Convert the input character set from the hard coded UTF-8 to their
			 * selected character set
			 */
			convertRequestInput();

			$what = isc_strtolower(@$_REQUEST['w']);
			
			switch  ($what) {
				case "countrystates": {
					$this->GetCountryStates();
					break;
				}
				case "getstates": {
					$this->GetStateList();
					break;
				}
				case "getcountries": {
					$this->GetCountryList();
					break;
				}
				case "getexchangerate": {
					$this->GetExchangeRate();
					break;
				}
				case "expresscheckoutlogin":
					$this->ExpressCheckoutLogin();
					break;
				case "expresscheckoutgetaddressfields":
					$this->GetExpressCheckoutAddressFields();
					break;
				case 'getexpresscheckoutconfirmation':
					$this->GetExpressCheckoutConfirmation();
					break;
				case "expresscheckoutloadpaymentform":
					$this->GetExpressCheckoutPaymentForm();
					break;
				case 'saveexpresscheckoutbillingaddress':
					$this->saveExpressCheckoutBillingAddress();
					break;
				case 'saveexpresscheckoutshippingaddress':
					$this->saveExpressCheckoutShippingAddress();
					break;
				case 'saveexpresscheckoutshippingprovider':
					$this->saveExpressCheckoutShippingProvider();
					break;
				case "getshippingquotes":
					$this->GetShippingQuotes();
					break;
				case 'selectgiftwrapping':
					$this->SelectGiftWrapping();
					break;
				case 'editconfigurablefieldsincart':
					$this->EditConfigurableFieldsInCart();
					break;
				case 'deleteuploadedfileincart':
					$this->DeleteUploadedFileInCart();
					break;
				case 'addproducts':
					$this->AddProductsToCart();
					break;
				case 'paymentprovideraction':
					$this->ProcessRemoteActions();
					break;
				case 'doadvancesearch':
					$this->doAdvanceSearch();
					break;
				case 'sortadvancesearch':
					$this->sortAdvanceSearch();
					break;
				case 'getvariationoptions':
					$this->GetVariationOptions();
					break;
				case "updatelanguage":
					$this->UpdateLanguage();
					break;
				case 'disabledesignmode':
					$this->DisableDesignMode();
					break;
				// Modificacao
			    case 'simularfrete':
					$this->SimularFrete();
					break;
				case 'simularparcelas':
					$this->SimularParcelas('popup');
					break;
				case 'scroll':
					$this->Scroll();
					break;
				case 'recomendar':
					$this->Recomendar();
					break;
				case 'tags1':
					$this->Tags1();
					break;
				case 'tipopagamento':
					$this->FormasdePagamento();
					break;
				case 'discountmethodpaymentedaz':
					$this->GetDiscountMethodPaymentEdaz();
					break;
			}
		}
		
		/** INICIO - MODIFICAÇÕES (NOVAS FUNÇÕES) **/
		public function FormasdePagamento()
		{
		$ler = "select * from [|PREFIX|]module_vars where modulename = 'addon_parcelas' and variablename = 'tipos' order by variableval asc";
		$resultado = $GLOBALS['ISC_CLASS_DB']->Query($ler);
		$i = 1;
		$GLOBALS['HTMLFormas'] = "";
		while ($s = $GLOBALS['ISC_CLASS_DB']->Fetch($resultado)) {
		//echo $s['variableval'];
		
		$GLOBALS['HTMLFormas'] .= "<img src='modificacoes/meios/".$s['variableval'].".jpg' border='0' alt='".$s['variableval']."'>";
		
		if($i%2==0) {
		$GLOBALS['HTMLFormas'] .= "<br>";
		}
		
		$i++;
		}
		}
		
				
		public function Tags1()
			{
			$url = GetConfig('ShopPath');
			$query = "
				SELECT *
				FROM [|PREFIX|]product_tags";
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			echo '<tags>';
			while($tag = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
			echo "<a herf='".$url."/tags/".$tag['tagfriendlyname']."'>".$tag['tagname']."</a>";
			}
			echo '</tags>';
		}
				
		public function EmailRE($denome,$emailde,$paranome,$paraemail,$produto,$men)
		{
			$emails = array();
			$store_name = GetConfig('StoreName');
			$url = GetConfig('ShopPath');	
			$ler = "select * from [|PREFIX|]products where productid = '".$produto."'";
			$resultado = $GLOBALS['ISC_CLASS_DB']->Query($ler);
			$linhas = $GLOBALS['ISC_CLASS_DB']->Fetch($resultado);
			$image = "select * from [|PREFIX|]product_images where imageprodid = '".$linhas['productid']."' and imageisthumb = '1'";
			$im = $GLOBALS['ISC_CLASS_DB']->Query($image);
			$img = $GLOBALS['ISC_CLASS_DB']->Fetch($im);
			
			if(strlen($linhas['proddesc']) > 400){
				$descricaoProduto = substr($linhas['proddesc'], 0, 400) . "...&nbsp;<a href='".GetConfig("ShopPath").'/productRemote.php?is='.$linhas['productid']."' target='_blank'>Veja mais!</a>";
			}else{
				$descricaoProduto = $linhas['proddesc'];
			}

			$this->_message = "
			<table width='700'>
				<colgroup>
					<col width='150'></col>
					<col width='550'></col>
				</colgroup>
				<tr>
					<td colspan='2' style='font-family: Tahoma, Arial; font-size: 12px;'>
						Olá, <b>".$paranome."!</b><p>
						Um amigo lhe recomendou o seguinte produto:<p>
					</td>
				</tr>
				<tr>
					<td>
						<a href='".GetConfig("ShopPath").'/productRemote.php?is='.$linhas['productid']."' target='_blank'>
							<img src='".GetConfig("ShopPath").'/product_images/'.$img['imagefile']."' width='280' height='180' border='0'>
						</a>
					</td>
					<td style='font-family: Tahoma, Arial; font-size: 12px; vertical-align: top; padding-left: 15px; line-height: 20px; text-align: justify;'>
						<span style='font-weight: bold; font-size: 18px; color: #666666;'>".$linhas['prodname']."</span>
						<hr><p>
						".$descricaoProduto."
					</td>
				</tr>
				<tr>
					<td colspan='2' style='font-family: Tahoma, Arial; font-size: 12px; padding: 10px 0;'>
						<p><i>\"".$men."\"</i>
					</td>
				</tr>
				<tr>
					<td colspan='2' style='font-family: Tahoma, Arial; font-size: 12px; padding: 10px 0;'>
						<p>
						<b>Link do produto:</b><br>
						<a href='".GetConfig("ShopPath").'/productRemote.php?is='.$linhas['productid']."' target='_blank'>
							".$url."/productRemote.php?is=".$linhas['productid']."
						</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan='2' align='right' style='padding: 10px 0;'>
						<b>".$store_name."</b>&nbsp;&nbsp;
						<a href='".GetConfig("ShopPath")."'><img src='".GetConfig("ShopPath")."/templates/default/img/layout/header/header_logo.jpg' width='150' border='0'></a>
					</td>
				</tr>
			</table>";
			
			$this->_email = $paraemail;
			if (empty($this->_email)) {
				return;
			}

			$emails = preg_split('#[,\s]+#si', $this->_email, -1, PREG_SPLIT_NO_EMPTY);

			// Create a new email object through which to send the email
			require_once(ISC_BASE_PATH . "/lib/email.php");
			$obj_email = GetEmailClass();
			$obj_email->Set('CharSet', GetConfig('CharacterSet'));
			$obj_email->From($emailde, $denome);
			$obj_email->Set("Subject", 'Produto Recomendado por um Amigo - '.$store_name);
			$obj_email->AddBody("html", $this->_message);

			// Add all recipients
			foreach($emails as $email) {
				$obj_email->AddRecipient($email, "", "h");
			}

			$email_result = $obj_email->Send();

			if($email_result['success']) {
				$result = array("outcome" => "success",
								"message" => '<div class="floatLeft">Obrigado!</div><div class="idiqueProdutoEnvioOK"></div>'
				);
			}
			else {
				$result = array("outcome" => "fail",
								"message" => 'Falha no envio da mensagem!'
				);
			}

			return $result;
		}
		
		public function Recomendar()
		{
			$id = $_GET['id'];
			//ler dados do produto
			$ler = "select * from [|PREFIX|]products where productid = '".$id."'";
			$resultado = $GLOBALS['ISC_CLASS_DB']->Query($ler);
			$linhas = $GLOBALS['ISC_CLASS_DB']->Fetch($resultado);
			$GLOBALS['Produton'] = $linhas['prodname'];
			$GLOBALS['ProdutoIdn'] = $linhas['productid'];
			//pega imagem
			$image = "select * from [|PREFIX|]product_images where imageprodid = '".$linhas['productid']."' and imageisthumb = '1'";
			$im = $GLOBALS['ISC_CLASS_DB']->Query($image);
			$img = $GLOBALS['ISC_CLASS_DB']->Fetch($im);
			$GLOBALS['ImagemG'] = $img['imagefile'];
			
			if(empty($_GET['acao'])) {
				$select = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('Indique');
				echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($select, true);
			}else{
				if(!empty($_REQUEST['nomede']) and !empty($_REQUEST['emailde']) and !empty($_REQUEST['nomepara']) and !empty($_REQUEST['emailpara']) and !empty($_REQUEST['mensagempara'])) {
					$dados = $this->EmailRE($_REQUEST['nomede'],$_REQUEST['emailde'],$_REQUEST['nomepara'],$_REQUEST['emailpara'],$_REQUEST['id'],$_REQUEST['mensagempara']);
					echo '<b>'.$dados['message'].'</b>';
				} else {
					echo 'Informe os campos acima corretamente!';
				}
			}
		}
				
		public function Scroll()
		{
			$GLOBALS['ScrollHTML'] =""; 
			$lers = "select * from [|PREFIX|]module_vars where modulename = 'addon_parcelas' and variablename = 'scroll'";
			$resultados = $GLOBALS['ISC_CLASS_DB']->Query($lers);
			$ss = $GLOBALS['ISC_CLASS_DB']->Fetch($resultados);
			switch($ss['variableval']) {
			case 'html';
			$GLOBALS['ScrollHTML'] .=  '<script type="text/javascript" src="modificacoes/jquery-1.2.2.pack.js"></script>
			<link rel="stylesheet" type="text/css" href="modificacoes/featuredcontentglider.css" />
			<script type="text/javascript" src="modificacoes/featuredcontentglider.js"></script>
			<script type="text/javascript">
			featuredcontentglider.init({
				gliderid: "canadaprovinces", //ID of main glider container
				contentclass: "glidecontent", //Shared CSS class name of each glider content
				togglerid: "p-select", //ID of toggler container
				remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
				selected: 0, //Default selected content index (0=1st)
				persiststate: false, //Remember last content shown within browser session (true/false)?
				speed: 700, //Glide animation duration (in milliseconds)
				direction: "rightleft", //set direction of glide: "updown", "downup", "leftright", or "rightleft"
				autorotate: true, //Auto rotate contents (true/false)?
				autorotateconfig: [3000, 20000] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
			})
			</script>
			<div id="canadaprovinces" class="glidecontentwrapper">';
			
			$query = sprintf("select * from [|PREFIX|]products where prodfeatured = '1' ORDER BY rand() LIMIT 0,10");
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$i = 1;
			while ($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
			
			$GLOBALS['ScrollHTML'] .= '<div class="glidecontent"><table><tr align=center>';
			
			$image = sprintf("select * from [|PREFIX|]product_images where imageprodid = '".$row['productid']."' and imageisthumb = '1'");
			$im = $GLOBALS['ISC_CLASS_DB']->Query($image);
			$img = $GLOBALS['ISC_CLASS_DB']->Fetch($im);
			
			$url = ProdLink($row['prodname']);
			
			$GLOBALS['ScrollHTML'] .= "<td width=200 valign=middle><center><img src='miniatura.php?w=120&img=product_images/".$img['imagefile']."'></center></td><td width=100% align=center valign=middle><font face=arial size=5><a href='".$url."' target='_parent'>".$row['prodname']."</font></a><br><font face=arial size=4>Por Apenas: ".CurrencyConvertFormatPrice($row['prodcalculatedprice'], 1, 0)."</font></td>";
			
			
			$GLOBALS['ScrollHTML'] .= "</tr></table></div>";
			$i++;
			}
			
			$GLOBALS['ScrollHTML'] .=  '</div><div id="p-select" class="glidecontenttoggler"><a href="#" class="prev"><<</a>';
			
			for($j=1;$j<$i;$j++) {
			$GLOBALS['ScrollHTML'] .=  '<a href="#" class="toc">'.$j.'</a>';
			}
			
			$GLOBALS['ScrollHTML'] .= '<a href="#" class="next">>></a></div>';
			
			break;
			case 'flash';
			$GLOBALS['ScrollHTML'] .= '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" data="scroll.swf" type="application/x-shockwave-flash" height="100%" width="100%">
			<param name="movie" value="modificacoes/scroll.swf">
			<param value="false" name="menu">
			<param value="FFFFFF" name="bgcolor">
			<param value="host=modificacoes/feed.php" name="flashvars">
			<embed src="modificacoes/scroll.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="host=modificacoes/feed.php" type="application/x-shockwave-flash" wmode="transparent" height="100%" width="100%">
			</object>';
			break;
			case 'nao';
			break;
			
			}
			//imprime no html
			$select = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('Scroll');
			echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($select, true);
		}
		
		public function SimularFrete(){
			//pega o produto	
			$id = $_GET['id'];
			//ler dados do produto
			$ler = "select * from [|PREFIX|]products where productid = '".$id."'";
			$resultado = $GLOBALS['ISC_CLASS_DB']->Query($ler);
			$linhas = $GLOBALS['ISC_CLASS_DB']->Fetch($resultado);
			
			//pega as propriedades do produto para webservice
			$GLOBALS['Produto'] = $linhas['prodname'];
			$GLOBALS['ProdutoId'] = $linhas['productid'];
			$GLOBALS['Valor'] = number_format($linhas['prodcalculatedprice'], 2, '.', '');
			$GLOBALS['Peso'] = number_format(max(ConvertWeight($linhas['prodweight'], 'kgs'), 0.1), 1);
			$GLOBALS['Largura']  = number_format($linhas['prodwidth'], 0);
			$GLOBALS['Altura']       = number_format($linhas['prodheight'], 0); 
			$GLOBALS['Profundidade'] = number_format($linhas['proddepth'], 0); //Comprimento
			
			//pega imagem
			$image = "select * from [|PREFIX|]product_images where imageprodid = '".$linhas['productid']."' and imageisthumb = '1'";
			$im = $GLOBALS['ISC_CLASS_DB']->Query($image);
			$img = $GLOBALS['ISC_CLASS_DB']->Fetch($im);
			$GLOBALS['Imagem'] = $img['imagefile'];
			//pega a localizacao do cep
			$GLOBALS['CepOrigem'] = GetConfig('CompanyZip');
			$url = "http://www.mdconline.com.br/Webservices/WSCEP/servicoCEP.asp?txtCEPEnviado=".$GLOBALS['CepOrigem'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 2);
			$html1 = curl_exec ($ch);
			curl_close ($ch);
			$html = explode('<CIDADE>', $html1);
			$html2 = explode('</CIDADE>', $html[1]);
			$htmld = explode('<UF>', $html1);
			$htmld2 = explode('</UF>', $htmld[1]);
			$GLOBALS['Origem'] = $html2[0]." - ".$htmld2[0];
			//aplica no template
			$select = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('SimularFrete');
			echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($select, true);
		}
				
		public function ValorProduto($produto) {
			$query = "SELECT * FROM [|PREFIX|]products where productid=".$produto;
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$a = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
			$GLOBALS['ISC_CLASS_CUSTOMER'] = GetClass('ISC_CUSTOMER');
			$g = $GLOBALS['ISC_CLASS_CUSTOMER']->GetCustomerGroup();
			$valor = $a['prodcalculatedprice']-(($a['prodcalculatedprice']/100)*$g['discount']);
			return $valor;
		}
				
		public function jurosSimples($valor, $taxa, $parcelas) {
		$taxa = $taxa/100;
		$m = $valor * (1 + $taxa * $parcelas);
		$valParcela = $m/$parcelas;
		return $valParcela;
		}
		
		public function jurosComposto($valor, $taxa, $parcelas) {
		$taxa = $taxa/100;
		$valParcela = $valor * pow((1 + $taxa), $parcelas);
		$valParcela = $valParcela/$parcelas;
		return $valParcela;
		}
				
		public function SimularParcelas($type, $productId='')
		{
			//inicio da funcao
			$produto = ($productId != '') ? $productId : $_GET['id'];
			$ler = "select * from [|PREFIX|]module_vars where modulename = 'addon_parcelas' and variablename = 'tipos' order by variableval asc";
			$resultado = $GLOBALS['ISC_CLASS_DB']->Query($ler);
			$i 		   = 1;
			$countEdaz = 1;
			
			$GLOBALS['HTMLPOPUP'] = "";
			$GLOBALS['HTMLBODY']  = "";
			$bandeirasFormasPagamentoHtml = '';
			$parcelasFormasPagamentoHtml  = '';
				
			while ($s = $GLOBALS['ISC_CLASS_DB']->Fetch($resultado)) {
				
				//inicio do switch
				switch($s['variableval']) {
					case 'deposito': //deposito
					$ativo = GetModuleVariable('checkout_deposito','is_setup');
					$desc = GetModuleVariable('checkout_deposito','desconto');
					$nome = GetModuleVariable('checkout_deposito','displayname');
					if(!empty($ativo)) {
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					if($desc<=0 OR empty($desc)){
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg = "<b> ".$preco." a vista.</b>";
					} else {
					$valven = ($pro/100)*$desc;
					$preco = CurrencyConvertFormatPrice($pro-$valven, 1, 0);
					$msg = "<b> ".$preco."</b> a vista com <b>".$desc."%</b> de desconto.";
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/deposito.gif" /></td>
					<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Depósito"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/deposito.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break; // fim deposito
					
					case 'cheque':
					$ativo = GetModuleVariable('checkout_cheque','is_setup');
					$juros = GetModuleVariable('checkout_cheque','juros');
					$nome = GetModuleVariable('checkout_cheque','displayname');
					$div = GetModuleVariable('checkout_cheque','dividir');
					$jde = GetModuleVariable('checkout_cheque','jurosde');
					$pmin = GetModuleVariable('checkout_cheque','parmin');
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					if($juros<=0 OR empty($juros)){
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg = "<b> ".$preco."</b> a vista.";
					} else {
					$msg = '';
					$msg1 = '';
					$splits = (int) ($pro/$pmin);
					if($splits<=$div){
					$div = $splits;
					}else{
					$div = $div;
					}
					for ($j=1;$j<=$div;$j++) {
					if ($jde<=$j and $jde<='50') {
					$valven = ($pro/100)*$juros;
					$msg1 .= $j."x de <b>".CurrencyConvertFormatPrice(($pro+$valven)/$j, 1, 0)."</b> com juros.<br>";
					}else{
					$msg .= $j."x de <b>".CurrencyConvertFormatPrice($pro/$j, 1, 0)."</b> sem juros.<br>";
					}
					}
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/cheque.gif" /></td>
					<td width="40%"><font size="2">'.$msg.'</font></td>
					<td width="40%"><font size="2">'.$msg1.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Cheque"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/cheque.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
							<div class="label">'.$msg1.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'boleto': //boleto
					$desc = GetModuleVariable('addon_parcelas','descboleto');
					
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					if($desc<=0){
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg = "<b> ".$preco."</b> a vista.";
					} else {
					$valven = ($pro/100)*$desc;
					$preco = CurrencyConvertFormatPrice($pro-$valven, 1, 0);
					$msg = "<b> ".$preco."</b> a vista com <b>".$desc."%</b> de desconto.";
					}
					
					/* EdazCommerce - Pega os Métodos de Boleto Configurados */
					$arrayNomeBanco = array("boletobradesco" => "Bradesco", "boletobancodobrasil" => "Banco do Brasil", "boletoitau" => "Itaú");
					$query  = "SELECT modulename FROM [|PREFIX|]module_vars	WHERE modulename like '%boleto%' AND variablename = 'is_setup' AND variableval  = 1 ORDER BY modulename";
					$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
					while ($method = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
						$nomeMetodo 		   		   = substr($method['modulename'], strpos($method['modulename'], 'boleto'), strlen($method['modulename']));
						$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Boleto '.$arrayNomeBanco[$nomeMetodo].'"><img src="'.$GLOBALS['ShopPathNormal'].'/templates/__master/images/bandeiras/'.$nomeMetodo.'.png" class="height28"/></li>';
						$parcelasFormasPagamentoHtml  .= '
							<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
								<div class="label first">'.$msg.'</div>
							</div>
						';
						$countEdaz++;
						
						$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>Boleto '.$arrayNomeBanco[$nomeMetodo].'</div>
						<div id="faq'.$i.'" class="icongroup1">
						<table width="100%" border="0">
						<tr>
						<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/templates/__master/images/bandeiras/'.$nomeMetodo.'.png" /></td>
						<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
						</tr>
						</table>
						</div>';
						$i++;
					}
					break; // fim boleto
					
					case 'pagseguro':
					$ativo = GetModuleVariable('checkout_pagseguro','is_setup');
					$juross = GetModuleVariable('checkout_pagseguro','acrecimo');
					$nome = GetModuleVariable('checkout_pagseguro','displayname');
					$taxa = 0.0199;
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					$valor = $pro;
					if($juross<=0 OR empty($juross)){
					$valor = $valor;
					} else {
					$valor = (($valor/100)*$juross)+$valor;
					}
					
					$msg = '';
					$msg1 = '';
					$splitss = (int) ($valor/5);
					if($splitss<=12){
					$div = $splitss;
					}else{
					$div = 12;
					}
					//echo $div."<br>";
					for($j=1; $j<=$div;$j++) {
					$cf = pow((1 + $taxa), $j);
					$cf = (1 / $cf);
					$cf = (1 - $cf);
					$cf = ($taxa / $cf);
					//echo $cf."<br>";
					$parcelas = ($valor*$cf);
					//echo $parcela."<br>";
					$parcelas = number_format($parcelas, 2, '.', '');
					//echo $parcela."<br>";
					$valors = number_format($valor, 2, '.', '');
					$op = GetModuleVariable('checkout_pagseguro','jurosde');
					if($j==1 OR $op>=$j) {
					$msg .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($valors/$j, 1, 0)."</b> sem juros.<br>";
					}else{
					$msg1 .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($parcelas, 1, 0)."</b> com juros.<br>";
					}
					
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/pagseguro.gif" /></td>
					<td width="40%"><font size="2">'.$msg.'</font></td>
					<td width="40%"><font size="2">'.$msg1.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="PagSeguro"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/pagseguro.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
							<div class="label">'.$msg1.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'pagdigital':
					$ativo = GetModuleVariable('checkout_pagamentodigital','is_setup');
					$juross = GetModuleVariable('checkout_pagamentodigital','acrecimo');
					$nome = GetModuleVariable('checkout_pagamentodigital','displayname');
					$taxa = 0.0199;
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					$valor = $pro;
					if($juross<=0 OR empty($juross)){
					$valor = $valor;
					} else {
					$valor = (($valor/100)*$juross)+$valor;
					}
					
					$msg = '';
					$msg1 = '';
					$splitss = (int) ($valor/5);
					if($splitss<=12){
					$div = $splitss;
					}else{
					$div = 12;
					}
					
					for($j=1; $j<=$div;$j++) {
					
					
					$parcelas = $this->jurosComposto($valor, 1.99, $j);
					
					$parcelas = number_format($parcelas, 2, '.', '');
					$valors = number_format($valor, 2, '.', '');
					
					$op = GetModuleVariable('checkout_pagamentodigital','jurosde');
					if($j==1 OR $op>=$j) {
					$msg .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($valors/$j, 1, 0)."</b> sem juros.<br>";
					}else{
					$msg1 .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($parcelas, 1, 0)."</b> com juros.<br>";
					}
					
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/pagdigital.gif" /></td>
					<td width="40%"><font size="2">'.$msg.'</font></td>
					<td width="40%"><font size="2">'.$msg1.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Pagamento Digital"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/pagdigital.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
							<div class="label">'.$msg1.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'moip':
					$ativo = GetModuleVariable('checkout_moip','is_setup');
					$juross = GetModuleVariable('checkout_moip','acrecimo');
					$nome = GetModuleVariable('checkout_moip','displayname');
					$taxa = 0.0199;
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					$valor = $pro;
					if($juross<=0 OR empty($juross)){
					$valor = $valor;
					} else {
					$valor = (($valor/100)*$juross)+$valor;
					}
					
					$msg = '';
					$msg1 = '';
					$splitss = (int) ($valor/5);
					if($splitss<=12){
					$div = $splitss;
					}else{
					$div = 12;
					}
					//echo $div."<br>";
					for($j=1; $j<=$div;$j++) {
					$cf = pow((1 + $taxa), $j);
					$cf = (1 / $cf);
					$cf = (1 - $cf);
					$cf = ($taxa / $cf);
					//echo $cf."<br>";
					$parcelas = ($valor*$cf);
					//echo $parcela."<br>";
					$parcelas = number_format($parcelas, 2, '.', '');
					//echo $parcela."<br>";
					$valors = number_format($valor, 2, '.', '');
					$op = GetModuleVariable('checkout_moip','jurosde');
					if($j==1 OR $op>=$j) {
					$msg .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($valors/$j, 1, 0)."</b> sem juros.<br>";
					}else{
					$msg1 .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($parcelas, 1, 0)."</b> com juros.<br>";
					}
					
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/moip.gif" /></td>
					<td width="40%"><font size="2">'.$msg.'</font></td>
					<td width="40%"><font size="2">'.$msg1.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Moip"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/moip.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
							<div class="label">'.$msg1.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'dinheiromail':
					$ativo = GetModuleVariable('checkout_dinheiromail','is_setup');
					$juross = GetModuleVariable('checkout_dinheiromail','acrecimo');
					$nome = GetModuleVariable('checkout_dinheiromail','displayname');
					$taxa = 0.0199;
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					$valor = $pro;
					if($juross<=0 OR empty($juross)){
					$valor = $valor;
					} else {
					$valor = (($valor/100)*$juross)+$valor;
					}
					
					$msg = '';
					$msg1 = '';
					$splitss = (int) ($valor/5);
					if($splitss<=12){
					$div = $splitss;
					}else{
					$div = 12;
					}
					
					for($j=1; $j<=$div;$j++) {
					
					
					$parcelas = $this->jurosSimples($valor, 1.99, $j);
					
					$parcelas = number_format($parcelas, 2, '.', '');
					$valors = number_format($valor, 2, '.', '');
					
					$op = GetModuleVariable('checkout_dinheiromail','jurosde');
					if($j==1 OR $op>=$j) {
					$msg .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($valors/$j, 1, 0)."</b> sem juros.<br>";
					}else{
					$msg1 .="<b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($parcelas, 1, 0)."</b> com juros.<br>";
					}
					
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/dinmail.png" /></td>
					<td width="40%"><font size="2">'.$msg.'</font></td>
					<td width="40%"><font size="2">'.$msg1.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="DinheiroMail"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/dinmail.png" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
							<div class="label">'.$msg1.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'paypal':
					$ativo = GetModuleVariable('checkout_paypal','is_setup');
					$desc = GetModuleVariable('checkout_paypal','desconto');
					$nome = GetModuleVariable('checkout_paypal','displayname');
					if(!empty($ativo)) {
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					if($desc<=0 OR empty($desc)){
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg = "<b> ".$preco." a vista.</b>";
					} else {
					$valven = ($pro/100)*$desc;
					$preco = CurrencyConvertFormatPrice($pro-$valven, 1, 0);
					$msg = "<b> ".$preco."</b> a vista com <b>".$desc."%</b> de desconto.";
					}
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/paypal.gif" /></td>
					<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Paypal"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/paypal.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'sps':
					$ativo = GetModuleVariable('checkout_spsbradesco','is_setup');
					$nome = GetModuleVariable('checkout_spsbradesco','displayname');
					$boleto = GetModuleVariable('checkout_spsbradesco','pagboletos');
					$facil = GetModuleVariable('checkout_spsbradesco','pagfacil');
					$finan = GetModuleVariable('checkout_spsbradesco','pagfinan');
					$trans = GetModuleVariable('checkout_spsbradesco','pagtrans');
					if(!empty($ativo)) {
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					$msg = "";
					if($boleto=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista no boleto.<br>";
					}
					if($facil=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por cartão de debito.<br>";
					}
					if($finan=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> financiado em até <b>24x</b> (com juros do banco).<br>";
					}
					if($trans=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por transferência bancaria.<br>";
					}
					
					
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/spsbradesco.gif" /></td>
					<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Sps"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/spsbradesco.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					
					case 'bbofice':
					$ativo = GetModuleVariable('checkout_bbcomercio','is_setup');
					$nome = GetModuleVariable('checkout_bbcomercio','displayname');
					$boleto = '';
					$facil = '';
					$finan = '';
					$trans = '';
					if(!empty($ativo)) {
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					$msg = "";
					if($boleto=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista no boleto.<br>";
					}
					if($facil=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por cartão de debito.<br>";
					}
					if($trans=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por transferência bancaria.<br>";
					}
					
					
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/bb_commerce.gif" /></td>
					<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="BBOfice"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/bb_commerce.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'shopline':
					$ativo = GetModuleVariable('checkout_itaushopline','is_setup');
					$nome = GetModuleVariable('checkout_itaushopline','displayname');
					$boleto = '';
					$facil = '';
					$finan = '';
					$trans = '';
					if(!empty($ativo)) {
					//verifica o desconto
					$pro = $this->ValorProduto($produto);
					$msg = "";
					if($boleto=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista no boleto.<br>";
					}
					if($facil=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por cartão de debito.<br>";
					}
					if($trans=="") {
					$preco = CurrencyConvertFormatPrice($pro, 1, 0);
					$msg .= "<b> ".$preco."</b> a vista por transferência bancaria.<br>";
					}
					
					//inicio do codigo do parcelamento
					$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$nome.'</div>
					<div id="faq'.$i.'" class="icongroup1">
					<table width="100%" border="0">
					<tr>
					<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/itau_shopline.gif" /></td>
					<td width="80%" colspan="2"><font size="2">'.$msg.'</font></td>
					</tr>
					</table>
					</div>';
					
					$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="Shopline"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/itau_shopline.gif" /></li>';
					$parcelasFormasPagamentoHtml  .= '
						<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
							<div class="label first">'.$msg.'</div>
						</div>
					';
					//fim do codigo de parcelamento
					}
					break;
					
					case 'zCielo':
					$ativo = GetModuleVariable('checkout_cielo','is_setup');
					$nome = GetModuleVariable('checkout_cielo','displayname');
					$div = GetModuleVariable('checkout_cielo','div');
					$juross = '0';
					$taxa = GetModuleVariable('checkout_cielo','juros');
					$jt = GetModuleVariable('checkout_cielo','tipojuros');
					
					$pm = GetModuleVariable('checkout_cielo','parcelamin');
					
					if(!empty($ativo)) {
					//verifica o juros
					$pro = $this->ValorProduto($produto);
					$valor = $pro;
					if($juross<=0 OR empty($juross)){
					$valor = $valor;
					} else {
					$valor = (($valor/100)*$juross)+$valor;
					}
					
					$msg = '';
					$msg1 = '';
					$splitss = (int) ($valor/$pm);
					if($splitss<=$div){
					$div = $splitss;
					}else{
					$div = $div;
					}
					
					for($j=1; $j<=$div;$j++) {
						if($jt==0)
						$parcelas = $this->jurosSimples($valor, $taxa, $j);
						else
						$parcelas = $this->jurosComposto($valor, $taxa, $j);
						
						$parcelas = number_format($parcelas, 2, '.', '');
						$valors = number_format($valor, 2, '.', '');
						
						$op = GetModuleVariable('checkout_cielo','jurosde');
						if($op>=$j) {
						$msg .="<font size='2'><b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($valors/$j, 1, 0)."</b> sem juros.</font><br>";
						}else{
						$msg1 .="<font size='2'><b>".$j."x</b> de <b>".CurrencyConvertFormatPrice($parcelas, 1, 0)."</b> <!--(<u>R$".$parcelas*$j."</u>)--> com juros.</font><br>";
						}
					}
					
					/* EdazCommerce - Pega os Métodos de Boleto Configurados */
					$arrayBandeiras    = array("v" => "visa", "m" => "master_card", "e" => "visa_electron", "el" => "elo", "din" => "diners", "dis" => "discover", "am" => "american_express");
					$query  = "SELECT variableval FROM [|PREFIX|]module_vars WHERE modulename = 'checkout_cielo' AND variablename = 'meios'";
					$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
					while ($method  = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
						$bandeira   = $arrayBandeiras[strtolower($method['variableval'])];
						$descricao  = 'Cartão de Crédito ' . ucwords(str_replace("_", " ", $bandeira));
						
						$bandeirasFormasPagamentoHtml .= '<li count="'.$countEdaz.'" descricao="'.$descricao.'"><img src="'.$GLOBALS['ShopPathNormal'].'/templates/__master/images/bandeiras/'.$bandeira.'.png" class="height25"/></li>';
						$parcelasFormasPagamentoHtml  .= '
							<div class="ConteudoFormaPagamento" count="'.$countEdaz.'">
								<div class="label first">'.$msg.'</div>
								<div class="label">'.$msg1.'</div>
							</div>
						';
						$countEdaz++;
						
						$GLOBALS['HTMLPOPUP'] .= '<div class="eg-bar"><span id="faq'.$i.'-title" class="iconspan"><img src="'.$GLOBALS['ShopPathNormal'].'/modificacoes/minus.gif" /></span>'.$descricao.'</div>
						<div id="faq'.$i.'" class="icongroup1">
						<table width="100%" border="0">
						<tr>
						<td width="10%"><img src="'.$GLOBALS['ShopPathNormal'].'/templates/__master/images/bandeiras/'.$bandeira.'.png" /></td>
						<td width="40%">'.$msg.'</td>
						<td width="50%">'.$msg1.'</td>
						</tr>
						</table>
						</div>';
						$i++;
					}

					}
					break;
				}
				//fim do switch
				
				$i++;
				$countEdaz++;
			}
			
			//aplica no template
			if($type == 'popup'){
				$template = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('SimularParcelaPopup');
				echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($template, true);
					
			}else if($type == 'body'){
				$GLOBALS['BandeirasFormasPagamento'] 		= $bandeirasFormasPagamentoHtml;
				$GLOBALS['ParcelasFormasPagamento'] 		= $parcelasFormasPagamentoHtml;
				$GLOBALS['SNIPPETS']['FormasPagamentoBody'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('SimularParcelaBody');
			} 
		}
		
		public function DisableDesignMode()
		{
			isc_unsetCookie('designModeToken');
			exit;
		}

		public function DeleteUploadedFileInCart()
		{
			if(!isset($_REQUEST['item']) || !isset($_REQUEST['field'])) {
				return false;
			}

			$itemId = $_REQUEST['item'];

			$quote = getCustomerQuote();
			$item = $quote->getItemById($itemId);
			if(!$item) {
				return false;
			}

			$item->deleteConfigurableFile($_REQUEST['field']);
		}

		public function EditConfigurableFieldsInCart()
		{
			$quote = getCustomerQuote();
			if(!isset($_REQUEST['itemid']) || !$quote->hasItem($_REQUEST['itemid'])) {
				return false;
			}

			$output = '';

			$item = $quote->getItemById($_REQUEST['itemid']);
			$existingConfiguration = $item->getConfiguration();

			$GLOBALS['ItemId'] = $item->getId();

			$GLOBALS['ISC_CLASS_PRODUCT'] = GetClass('ISC_PRODUCT');
			$GLOBALS['CartProductName'] = isc_html_escape($item->getName());

			$fields = $item->getConfigurableOptions();
			foreach($fields as $field) {
				$GLOBALS['ProductFieldType'] = isc_html_escape($field['fieldtype']);
				$GLOBALS['ProductFieldId'] = (int)$field['productfieldid'];
				$GLOBALS['ProductFieldName'] = isc_html_escape($field['fieldname']);
				$GLOBALS['ProductFieldRequired'] = '';
				$GLOBALS['FieldRequiredClass'] = '';
				$GLOBALS['ProductFieldValue'] = '';
				$GLOBALS['ProductFieldFileValue'] = '';
				$GLOBALS['HideCartFileName'] = 'display: none';
				$GLOBALS['CheckboxFieldNameLeft'] = '';
				$GLOBALS['CheckboxFieldNameRight'] = '';
				$GLOBALS['HideDeleteFileLink'] = 'display: none';
				$GLOBALS['HideFileHelp'] = "display:none";

				$configurableField = array(
					'type'				=> '',
					'name'				=> '',
					'fileType'			=> '',
					'fileOriginalName'	=> '',
					'value'				=> '',
					'selectOptions'		=> '',
				);

				if(isset($existingConfiguration[$field['productfieldid']])) {
					$configurableField = $existingConfiguration[$field['productfieldid']];
				}

				$snippetFile = 'ProductFieldInput';
				switch ($field['fieldtype']) {
					case 'textarea': {
						$GLOBALS['ProductFieldValue'] = isc_html_escape($configurableField['value']);
						$snippetFile = 'ProductFieldTextarea';
						break;
					}
					case 'file': {
						$fieldValue = isc_html_escape($configurableField['fileOriginalName']);
						$GLOBALS['HideDeleteCartFieldFile'] = '';
						$GLOBALS['CurrentProductFile'] = $fieldValue;
						$GLOBALS['ProductFieldFileValue'] = $fieldValue;
						$GLOBALS['HideFileHelp'] = "";
						$GLOBALS['FileSize'] = Store_Number::niceSize($field['fieldfilesize']*1024);

						if($fieldValue != '') {
							$GLOBALS['HideCartFileName'] = '';
						}

						if(!$field['fieldrequired']) {
							$GLOBALS['HideDeleteFileLink'] = '';
						}
						$GLOBALS['FileTypes'] = isc_html_escape($field['fieldfiletype']);
						break;
					}
					case 'checkbox': {
						$GLOBALS['CheckboxFieldNameLeft'] = $GLOBALS['ProductFieldName'];
						if($configurableField['value'] == 'on') {
							$GLOBALS['ProductFieldValue'] = 'checked';
						}
						$snippetFile = 'ProductFieldCheckbox';
						break;
					}
					case 'select':
						$options = explode(',', $configurableField['selectOptions']);
						$optionStr = '<option value="">' . GetLang('PleaseChooseAnOption') . '</option>';
						foreach ($options as $option) {
							$option = trim($option);

							$selected = '';
							if ($option == $configurableField['value']) {
								$selected = 'selected="selected"';
							}

							$optionStr .= "<option value=\"" . isc_html_escape($option) . "\" " . $selected . ">" . isc_html_escape($option) . "</option>\n";
						}
						$GLOBALS['SelectOptions'] = $optionStr;
						$snippetFile = 'ProductFieldSelect';
						break;
					default: {
						$GLOBALS['ProductFieldValue'] = isc_html_escape($configurableField['value']);
						break;
					}
				}

				if($field['fieldrequired']) {
					$GLOBALS['ProductFieldRequired'] = '<span class="Required">*</span>';
					$GLOBALS['FieldRequiredClass'] = 'FieldRequired';
				}
				$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('Cart'.$snippetFile);
			}
			$GLOBALS['SNIPPETS']['ProductFieldsList'] = $output;

			$editProductFields = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartEditProductFieldsForm');
			echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($editProductFields, $GLOBALS['SNIPPETS']);
		}

		public function SelectGiftWrapping()
		{
			$quote = getCustomerQuote();
			if(!isset($_REQUEST['itemId']) || !$quote->hasItem($_REQUEST['itemId'])) {
				exit;
			}

			$item = $quote->getItemById($_REQUEST['itemId']);

			$GLOBALS['GiftWrappingTitle'] = sprintf(GetLang('GiftWrappingForX'), isc_html_escape($item->getName()));
			$GLOBALS['ProductName'] = $item->getName();
			$GLOBALS['ItemId'] = $item->getId();

			// Get the available gift wrapping options for this product
			$wrappingOptions = $item->getGiftWrappingOptions();
			if($wrappingOptions === false) {
				exit;
			}

			if(empty($wrappingOptions) || in_array(0, $wrappingOptions)) {
				$giftWrapWhere = "wrapvisible='1'";
			}
			else {
				$wrappingOptions = implode(',', array_map('intval', $wrappingOptions));
				$giftWrapWhere = "wrapid IN (".$wrappingOptions.")";
			}
			$query = "
				SELECT *
				FROM [|PREFIX|]gift_wrapping
				WHERE ".$giftWrapWhere."
				ORDER BY wrapname ASC
			";
			$wrappingOptions = array();
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			while($wrap = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
				$wrappingOptions[$wrap['wrapid']] = $wrap;
			}

			// This product is already wrapped, select the existing value
			$GLOBALS['GiftWrapMessage'] = '';

			$selectedWrapping = 0;
			$existingWrapping = $item->getGiftWrapping();
			if($existingWrapping !== false) {
				$selectedWrapping = $existingWrapping['wrapid'];
				$GLOBALS['GiftWrapMessage'] = isc_html_escape($existingWrapping['wrapmessage']);
			}

			$GLOBALS['HideGiftWrapMessage'] = 'display: none';

			// Build the list of wrapping options
			$GLOBALS['WrappingOptions'] = '';
			$GLOBALS['GiftWrapPreviewLinks'] = '';
			foreach($wrappingOptions as $option) {
				$sel = '';
				if($selectedWrapping == $option['wrapid']) {
					$sel = 'selected="selected"';
					if($option['wrapallowcomments']) {
						$GLOBALS['HideGiftWrapMessage'] = '';
					}
				}
				$classAdd = '';
				if($option['wrapallowcomments']) {
					$classAdd = 'AllowComments';
				}

				if($option['wrappreview']) {
					$classAdd .= ' HasPreview';
					$previewLink = GetConfig('ShopPath').'/'.GetConfig('ImageDirectory').'/'.$option['wrappreview'];
					if($sel) {
						$display = '';
					}
					else {
						$display = 'display: none';
					}
					$GLOBALS['GiftWrapPreviewLinks'] .= '<a id="GiftWrappingPreviewLink'.$option['wrapid'].'" class="GiftWrappingPreviewLinks" target="_blank" href="'.$previewLink.'" style="'.$display.'">'.GetLang('Preview').'</a>';
				}

				$GLOBALS['WrappingOptions'] .= '<option class="'.$classAdd.'" value="'.$option['wrapid'].'" '.$sel.'>'.isc_html_escape($option['wrapname']).' ('.CurrencyConvertFormatPrice($option['wrapprice']).')</option>';
			}

			$quantity = $item->getQuantity();
			if($quantity > 1) {
				$GLOBALS['ExtraClass'] = 'PL40';
				$GLOBALS['GiftWrapModalClass'] = 'SelectGiftWrapMultiple';
				$GLOBALS['SNIPPETS']['GiftWrappingOptions'] = '';
				for($i = 1; $i <= $quantity; ++$i) {
					$GLOBALS['GiftWrappingId'] = $i;
					$GLOBALS['SNIPPETS']['GiftWrappingOptions'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('GiftWrappingWrapOptions');
				}
			}
			else {
				$GLOBALS['HideSplitWrappingOptions'] = 'display: none';
			}

			$GLOBALS['HideWrappingTitle']		= 'display: none';
			$GLOBALS['HideWrappingSeparator']	= 'display: none';
			$GLOBALS['GiftWrappingId'] = 'all';
			$GLOBALS['SNIPPETS']['GiftWrappingOptionsSingle'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('GiftWrappingWrapOptions');

			$selectWrapping = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('SelectGiftWrapping');
			echo $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($selectWrapping, $GLOBALS['SNIPPETS']);
		}

		/**
		 * Check a customers entered credentials when logging in via the express checkout.
		 */
		private function ExpressCheckoutLogin()
		{
			// Attempt to log the customer in
			$GLOBALS['ISC_CLASS_CUSTOMER'] = GetClass('ISC_CUSTOMER');
			if(!$GLOBALS['ISC_CLASS_CUSTOMER']->CheckLogin(true)) {
				$loginLink = '#';
				$onClick = '$("#checkout_type_register").click(); $("#CreateAccountButton").click(); return false;';
				$errorMessage = sprintf(GetLang('CheckoutBadLoginDetails'), $loginLink, $onClick);
				$response = array(
					'status' => 0,
					'errorMessage' => $errorMessage,
					'errorContainer' => '#CheckoutLoginError',
				);
				echo isc_json_encode($response);
				exit;
			}

			$response = array(
				'status' => 1,
				'resetSteps' => true,
				'changeStep' => 'BillingAddress',
				'completedSteps' => array(
					array(
						'id' => 'AccountDetails',
						'message' => getLang('CheckingOutAs').' '.$_POST['login_email']
					),
				),
				'stepContent' => array(
					array(
						'id' => 'BillingAddress',
						'content' => getClass('ISC_CHECKOUT')->expressCheckoutChooseAddress('billing', true)
					),
					array(
						'id' => 'ShippingAddress',
						'content' => getClass('ISC_CHECKOUT')->expressCheckoutChooseAddress('shipping', true)
					),
				)
			);
			echo isc_json_encode($response);
			exit;
		}

		/**
		 * Generate the payment form for a payment provider (credit card manual, etc) and display it for the express checkout.
		 */
		private function GetExpressCheckoutPaymentForm()
		{
			// Attempt to create the pending order with the selected details
			$pendingResult = getClass('ISC_CHECKOUT')->savePendingOrder();

			// There was a problem creating the pending order
			if(!is_array($pendingResult)) {
				$response = array(
					'status' => 0,
					'errorMessage' => getLang('ProblemCreatingOrder'),
					'changeStep' => 'Confirmation'
				);
				echo isc_json_encode($response);
				exit;
			}

			// There was a problem creating the pending order but we have an actual error message
			if(isset($pendingResult['error'])) {
				$response = array(
					'status' => 0,
					'errorMessage' => $pendingResult['error'],
					'changeStep' => 'Confirmation'
				);
				echo isc_json_encode($response);
				exit;
			}

			// Otherwise, the gateway want's to do something
			if($pendingResult['provider']->GetPaymentType() == PAYMENT_PROVIDER_ONLINE || method_exists($pendingResult['provider'], 'ShowPaymentForm')) {
				if($pendingResult['provider']->GetPaymentType() !== PAYMENT_PROVIDER_ONLINE) {
					$pendingResult['showPaymentForm'] = $pendingResult['provider']->ShowPaymentForm();
				}

				// If we have a payment form to show then show that
				if(isset($pendingResult['showPaymentForm']) && $pendingResult['showPaymentForm']) {
					$response = array(
						'status' => 1,
						'stepContent' => array(
							array(
								'id' => 'PaymentDetails',
								'content' => $pendingResult['provider']->showPaymentForm()
							),
						),
						'changeStep' => 'PaymentDetails',
						'completeSteps' => array(
							array(
								'id' => 'Confirmation',
								'message' => $pendingResult['provider']->getDisplayName()
							),
						),
					);
					echo isc_json_encode($response);
				}
			}
			exit;
		}

		/**
		 * Generate the order confirmation message and save the pending order for a customer checking out via the
		 * express checkout
		 */
		private function GetExpressCheckoutConfirmation($completedSteps = array())
		{


			$confirmation = getClass('ISC_CHECKOUT')->GenerateExpressCheckoutConfirmation();
			if(!$confirmation) {
				$response = array(
					'status' => 0,
					'changeStep' => 'BillingAddress',
				);
				echo isc_json_encode($response);
				exit;
			}

			$response = array(
				'status' => 1,
				'changeStep' => 'Confirmation',
				'resetSteps' => true,
				'stepContent' => array(
					array(
						'id' => 'Confirmation',
						'content' => $confirmation
					),
				),
				'completedSteps' => $completedSteps,
			);
			echo isc_json_encode($response);
			exit;
		}

		public function getCheckoutAddressPreview(ISC_QUOTE_ADDRESS $address)
		{
			$addressPieces = array(
				$address->getFirstName().' '.$address->getLastName(),
				$address->getCompany(),
				$address->getAddress1(),
				$address->getAddress2(),
				$address->getCity(),
				$address->getStateName(),
				$address->getCountryName(),
				$address->getZip()
			);
			foreach($addressPieces as $k => $piece) {
				if(!trim($piece)) {
					unset($addressPieces[$k]);
				}
			}

			$addressString = implode(', ', $addressPieces);
			if(isc_strlen($addressString) > 60) {
				$addressString = substr($addressString, 0, 57).'...';
			}

			return $addressString;
		}

		/**
		 * Save the billing address for a customer checking out via express checkout.
		 */
		public function saveExpressCheckoutBillingAddress()
		{
			// If the customer is not logged in and guest checkout is enabled, then don't go any further
			if(!customerIsSignedIn() && !getConfig('GuestCheckoutEnabled') &&
				empty($_POST['createAccount'])) {
					$response = array(
						'status' => 0,
						'changeStep' => 'AccountDetails',
						'errorMessage' => getLang('GuestCheckoutDisabledError')
					);
					echo isc_json_encode($response);
					exit;
			}

			$addressDetails =  null;
			$shipToBilling = false;

			// If the customer isn't signed in then they've just entered an address that we need to validate
			if(isset($_REQUEST['BillingAddressType']) && $_REQUEST['BillingAddressType'] == 'new') {
				$errors = array();
				// An invalid address was entered, show the form again
				$addressDetails = getClass('ISC_CHECKOUT')->validateGuestCheckoutAddress('billing', $errors);
				if(!$addressDetails) {
					$response = array(
						'status' => 0,
						'changeStep' => 'BillingAddress',
						'errorMessage' => implode("\n", $errors)
					);
					echo isc_json_encode($response);
					exit;
				}

				// Make sure the email address isn't already in use if the customer is
				// creating a new account.
				// Plus if it's guess checkout and creation of account after the checkout process is enabled
				if(!customerIsSignedIn() && (!empty($_POST['createAccount']) || (getConfig('GuestCheckoutEnabled') && getConfig('GuestCheckoutCreateAccounts')))) {
					$emailField = $GLOBALS['ISC_CLASS_FORM']->getFormField(FORMFIELDS_FORM_ACCOUNT, '1', '', true);
					$email = $emailField->getValue();

					// Check that this email address isn't already in use by a customer
					$customer = GetClass('ISC_CUSTOMER');
					if($customer->AccountWithEmailAlreadyExists($email)) {
						$response = array(
							'status' => 0,
							'changeStep' => 'BillingAddress',
							'errorMessage' => getLang('CheckoutEmailAddressInUseAjax'),
							'focus' => '#'.$emailField->getFieldId(),
						);
						echo isc_json_encode($response);
						exit;
					}
				}

				if(!empty($_POST['ship_to_billing_new'])) {
					$shipToBilling = true;
				}
			}
			else {
				// We've just selected an address
				if(isset($_POST['sel_billing_address'])) {
					$addressDetails = (int)$_POST['sel_billing_address'];
				}

				if(!empty($_POST['ship_to_billing_existing'])) {
					$shipToBilling = true;
				}
			}

			// There was a problem saving the selected billing address
			if(!getClass('ISC_CHECKOUT')->setOrderBillingAddress($addressDetails)) {
				$response = array(
					'status' => 0,
					'changeStep' => 'BillingAddress',
					'errorMessage' => getLang('UnableSaveOrderBillingAddress'),
				);

				echo isc_json_encode($response);
				exit;
			}

			if(!empty($_POST['save_billing_address'])) {
				getCustomerQuote()->getBillingAddress()->setSaveAddress(true);
			}

			$completedSteps = array(
				array(
					'id' => 'BillingAddress',
					'message' => $this->getCheckoutAddressPreview(
						getCustomerQuote()->getBillingAddress()
					),
				)
			);

			// If creating an account, store the account creation fields
			unset($_SESSION['CHECKOUT']['CREATE_ACCOUNT']);
			if(!empty($_POST['createAccount'])) {
				$accountFields = $GLOBALS['ISC_CLASS_FORM']->getFormFields(FORMFIELDS_FORM_ACCOUNT, true);
				$accountSession = array(
					'customFields' => array()
				);
				foreach($accountFields as $fieldId => $formField) {
					if($formField->record['formfieldprivateid'] == 'Password') {
						$accountSession['password'] = $formField->getValue();
					}
					// Apart from the password, only interested in CUSTOM fields
					else if(!$formField->record['formfieldprivateid']) {
						$accountSession['customFields'][$fieldId] = $formField->getValue();
					}
				}
				$_SESSION['CHECKOUT']['CREATE_ACCOUNT'] = $accountSession;
			}

			// If a digital order, skip right to the order confirmation
			if(getCustomerQuote()->isDigital()) {
				$this->getExpressCheckoutConfirmation($completedSteps);
				exit;
			}

			// Otherwise, proceed with shipping

			// Shipping to the billing address so save it as well
			if($shipToBilling) {
				if(!getClass('ISC_CHECKOUT')->setOrderShippingAddress($addressDetails, true)) {
					$response = array(
						'status' => 0,
						'changeStep' => 'ShippingAddress',
						'errorMessage' => getLang('UnableSaveOrderShippingAddress'),
					);

					echo isc_json_encode($response);
					exit;
				}

				// If we're shipping to the billing address, then reload the shipping address
				// quote block, because it could contain updated values.
				$stepContent = array(array(
					'id' => 'ShippingAddress',
					'content' => getClass('ISC_CHECKOUT')->expressCheckoutChooseAddress('shipping', true),
				));
				$this->getExpressCheckoutShippers($completedSteps, $stepContent);
				exit;
			}

			$response = array(
				'status' => 1,
				'changeStep' => 'ShippingAddress',
				'completedSteps' => $completedSteps,
				'resetSteps' => true,
			);
			echo isc_json_encode($response);
			exit;
		}

		public function saveExpressCheckoutShippingAddress()
		{
			$quote = getCustomerQuote();
			if($quote->isDigital()) {
				exit;
			}

			$addressDetails = null;

			if(isset($_REQUEST['ShippingAddressType']) && $_REQUEST['ShippingAddressType'] == 'new') {
				$errors = array();
				// An invalid address was entered, show the form again
				$addressDetails = getClass('ISC_CHECKOUT')->validateGuestCheckoutAddress('shipping', $errors);
				if(!$addressDetails) {
					$response = array(
						'status' => 0,
						'changeStep' => 'ShippingAddress',
						'errorMessage' => implode("\n", $errors)
					);
					echo isc_json_encode($response);
					exit;
				}
			}
			else {
				// We've just selected an address
				if(isset($_POST['sel_shipping_address'])) {
					$addressDetails = (int)$_POST['sel_shipping_address'];
				}
			}

			if(!getClass('ISC_CHECKOUT')->setOrderShippingAddress($addressDetails)) {
				$response = array(
					'status' => 0,
					'changeStep' => 'ShippingAddress',
					'errorMessage' => getLang('UnableSaveOrderShippingAddress'),
				);

				echo isc_json_encode($response);
				exit;
			}
			
			$this->getExpressCheckoutShippers();
		}

		public function saveExpressCheckoutShippingProvider()
		{
			$quote = getCustomerQuote();
			if($quote->isDigital()) {
				exit;
			}

			// If the shipping provider couldn't be saved with the order show an error message
			// For each shipping address in the order, the shipping provider now needs to be saved
			$success = true;
			$shippingAddresses = getClass('ISC_CHECKOUT')->getQuote()->getShippingAddresses();
			foreach($shippingAddresses as $shippingAddress) {
				$shippingAddressId = $shippingAddress->getId();
				if(!isset($_POST['selectedShippingMethod'][$shippingAddressId])) {
					$success = false;
					break;
				}

				$id = $_POST['selectedShippingMethod'][$shippingAddressId];
				$cachedShippingMethod = $shippingAddress->getCachedShippingMethod($id);
				if(empty($cachedShippingMethod)) {
					$success = false;
					break;
				}

				$shippingAddress->setShippingMethod(
					$cachedShippingMethod['price'],
					$cachedShippingMethod['description'],
					$cachedShippingMethod['module']
				);
				$shippingAddress->setHandlingCost($cachedShippingMethod['handling']);
			}

			if(!$success) {
				$response = array(
					'success' => 0,
					'changeStep' => 'ShippingProvider',
					'errorMessage' => getLang('UnableSaveOrderShippingMethod'),
				);
				echo isc_json_encode($response);
				exit;
			}

			$completedSteps = array(
				array(
					'id' => 'ShippingProvider',
					'message' =>
						$shippingAddress->getShippingProvider() . ' ' .
						getLang('ExpressCheckoutFor') . ' ' .
						currencyConvertFormatPrice($shippingAddress->getShippingCost())
				)
			);
			$this->getExpressCheckoutConfirmation($completedSteps);
		}

		/**
		 * Fetch the address entry fields for a guest when using the express checkout.
		 */
		private function GetExpressCheckoutAddressFields()
		{
			// Make sure the customer is logged out. This is a guest checkout
			getClass('ISC_CUSTOMER')->logout(true);

			if(!empty($_POST['type']) && $_POST['type'] != 'guest') {
				$addressType = 'account';
				$accountDetailsMessage = getLang('ExpressCheckoutCreatingAnAccount');
			}
			else {
				$addressType = 'billing';
				$accountDetailsMessage = getLang('ExpressCheckoutCheckingOutAsGuest');
			}

			$response = array(
				'status' => 1,
				'completedSteps' => array(
					array(
						'id' => 'AccountDetails',
						'message' => $accountDetailsMessage,
					),
				),
				'stepContent' => array(
					array(
						'id' => 'BillingAddress',
						'content' => getClass('ISC_CHECKOUT')->expressCheckoutChooseAddress($addressType, true),
					),
					array(
						'id' => 'ShippingAddress',
						'content' => getClass('ISC_CHECKOUT')->expressCheckoutChooseAddress('shipping', true),
					),
				),
				'changeStep' => 'BillingAddress',
				'resetSteps' => 1,
			);

			echo isc_json_encode($response);
			exit;
		}

		/**
		 * Generate a list of shipping methods/providers for a customer checking out via the express checkout.
		 */
		private function GetExpressCheckoutShippers($completedSteps = array(), $stepContent = array())
		{
			$quote = getCustomerQuote();
			if($quote->isDigital()) {
				exit;
			}

			$shippingAddress = $quote->getShippingAddress();
			
			if(!$shippingAddress->hasCompleteAddress()) {
				$response = array(
					'status' => 0,
					'changeStep' => 'ShippingAddress',
					'resetSteps' => true,
					'errorMessage' => getLang('UnableToShipToAddressSingle'),
					'stepContent' => $stepContent,
				);
				echo isc_json_encode($response);
				exit;
			}

			$availableMethods = $shippingAddress->getAvailableShippingMethods();
			if(empty($availableMethods)) {
				$response = array(
					'status' => 0,
					'changeStep' => 'ShippingAddress',
					'resetSteps' => true,
					'errorMessage' => getLang('UnableToShipToAddressSingle'),
					'stepContent' => $stepContent,
				);
				echo isc_json_encode($response);
				exit;
			}

			// Keeping for legacy reasons for now
			$GLOBALS['HideVendorTitle'] = 'display: none';
			$GLOBALS['HideVendorItems'] = 'display: none';

			// Because split shipping isn't supported on express checkout:
			$GLOBALS['HideItemList'] = 'display: none';
			$GLOBALS['HideHorizontalRule'] = 'display: none';
			$GLOBALS['HideAddressLine'] = 'display: none';

			$hasTransit = false;
			$GLOBALS['ShippingQuotes'] = '';

			// Now build a list of the actual available quotes
			$GLOBALS['ShippingProviders'] = '';
			$GLOBALS['AddressId'] = $shippingAddress->getId();
			foreach($availableMethods as $quoteId => $method) {
				$price = getClass('ISC_TAX')->getPrice(
					$method['price'],
					getConfig('taxShippingTaxClass'),
					getConfig('taxDefaultTaxDisplayCart'),
					$shippingAddress->getApplicableTaxZone()
				);
				$GLOBALS['ShipperName'] = isc_html_escape($method['description']);
				$GLOBALS['ShippingPrice'] = CurrencyConvertFormatPrice($price);
				$GLOBALS['ShippingQuoteId'] = $quoteId;
				$GLOBALS['ShippingData'] = $GLOBALS['ShippingQuoteId'];

				if(isset($method['transit'])) {
					$hasTransit = true;

					$days = $method['transit'];

					if ($days == 0) {
						$transit = GetLang("SameDay");
					}
					else if ($days == 1) {
						$transit = GetLang('NextDay');
					}
					else {
						$transit = sprintf(GetLang('Days'), $days);
					}

					$GLOBALS['TransitTime'] = $transit;
					$GLOBALS['TransitTime'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartShippingTransitTime');
				}
				else {
					$GLOBALS['TransitTime'] = "";
				}
				$GLOBALS['ShippingProviders'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("ExpressCheckoutShippingMethod");
			}
			// Add it to the list
			$GLOBALS['ShippingQuotes'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('ShippingQuote');

			if ($hasTransit) {
				$GLOBALS['DeliveryDisclaimer'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartShippingDeliveryDisclaimer');
			}

			$methodList = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('ExpressCheckoutChooseShipper');

			$response = array(
				'status' => 1,
				'changeStep' => 'ShippingProvider',
				'resetSteps' => true,
				'stepContent' => array_merge($stepContent, array(array(
					'id' => 'ShippingProvider',
					'content' => $methodList
				))),
				'completedSteps' => array_merge($completedSteps, array(array(
					'id' => 'ShippingAddress',
					'message' => $this->getCheckoutAddressPreview($shippingAddress),
				))),
			);
			echo isc_json_encode($response);
			exit;
		}

		/**
		 * Retrieve a list of shipping quotes for a customer estimating their shipping on the 'View Cart' page.
		 */
		private function GetShippingQuotes()
		{
			if(empty($_POST['countryId']) || empty($_POST['zipCode'])) {
				exit;
			}

			$statesList = GetStateListAsIdValuePairs((int)$_POST['countryId']);
			if (!empty($statesList) && empty($_POST['stateId'])) {
				exit;
			}

			// Cart page shipping quotes don't support split shipping
			$quote = getCustomerQuote();
			$quote->setIsSplitShipping(false);

			$shippingAddress = $quote->getShippingAddress();
			$billingAddress = $quote->getBillingAddress();

			$shippingAddress->setCountryById($_POST['countryId']);
			$billingAddress->setCountryById($_POST['countryId']);
			if(!empty($_POST['stateId'])) {
				$shippingAddress->setStateById($_POST['stateId']);
				$billingAddress->setStateById($_POST['stateId']);
			}
			if(!empty($_POST['zipCode'])) {
				$shippingAddress->setZip($_POST['zipCode']);
				$billingAddress->setZip($_POST['zipCode']);
			}

			$quote->addShippingAddress($shippingAddress);
			$shippingMethods = $shippingAddress->getAvailableShippingMethods();
			if(empty($shippingMethods)) {
				echo getLang('UnableEstimateShipping');
				exit;
			}

			// Keeping this for legacy purposes for now
			$GLOBALS['HideVendorDetails'] = 'display: none';
			$GLOBALS['ShippingQuotesListNote'] = '';
			$GLOBALS['HideShippingQuotesListNote'] = 'display: none';
			$GLOBALS['VendorShippingQuoteClass'] = '';
			$GLOBALS['HideShippingItemList'] = 'display: none';

			$hasTransit = false;
			$GLOBALS['ShippingQuoteRow'] = '';
			foreach($shippingMethods as $quoteId => $method) {
				$price = getClass('ISC_TAX')->getPrice(
					$method['price'],
					getConfig('taxShippingTaxClass'),
					getConfig('taxDefaultTaxDisplayCart'),
					$shippingAddress->getApplicableTaxZone()
				);
				$GLOBALS['ShipperName'] = isc_html_escape($method['description']);
				$GLOBALS['ShippingPrice'] = CurrencyConvertFormatPrice($price);
				$GLOBALS['ShippingQuoteId'] = $quoteId;

				$GLOBALS['TransitTime'] = "";
				if(isset($method['transit'])) {
					$hasTransit = true;
					$days = $method['transit'];
					if ($days == 0) {
						$transit = GetLang("SameDay");
					}
					else if ($days == 1) {
						$transit = GetLang('NextDay');
					}
					else {
						$transit = sprintf(GetLang('Days'), $days);
					}

					$GLOBALS['TransitTime'] = $transit;
					$GLOBALS['TransitTime'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartShippingTransitTime');
				}

				$GLOBALS['ShippingQuoteRow'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartShippingQuoteRow');
			}

			$GLOBALS['ShippingQuotes'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('EstimatedShippingQuote');

			if ($hasTransit) {
				$GLOBALS['DeliveryDisclaimer'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('CartShippingDeliveryDisclaimer');
			}

			echo $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('EstimatedShippingQuoteList');
		}

		private function GetCountryStates()
		{
			$country = $_REQUEST['c'];
			echo GetStateList($country);
		}

		private function GetExchangeRate()
		{
			if (!array_key_exists("currencyid", $_REQUEST)
				|| !($result = $GLOBALS['ISC_CLASS_DB']->Query("SELECT * FROM [|PREFIX|]currencies WHERE currencyid = " . (int)$_REQUEST['currencyid']))
				|| !($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result))) {
				exit;
			}

			print $row['currencyexchangerate'];
			exit;
		}

		public function GetStateList()
		{
			if (!array_key_exists('countryName', $_POST) || $_POST['countryName'] == '') {
				$tags[] = $this->MakeXMLTag('status', 0);
				$this->SendXMLHeader();
				$this->SendXMLResponse($tags);
				exit;
			}

			$tags[] = $this->MakeXMLTag('status', 1);
			$tags[] = '<options>';

			$query = "SELECT statename
						FROM [|PREFIX|]countries c
							JOIN [|PREFIX|]country_states s ON c.countryid = s.statecountry
						WHERE c.countryname='" . $GLOBALS['ISC_CLASS_DB']->Quote($_POST['countryName']) . "'
						ORDER BY statename ASC";

			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			while ($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
				$tags[] = '<option>';
				$tags[] = $this->MakeXMLTag('name', $row['statename'], true);
				$tags[] = '</option>';
			}

			$tags[] = '</options>';
			$this->SendXMLHeader();
			$this->SendXMLResponse($tags);
			exit;
		}

		private function GetCountryList()
		{
			$tags[] = $this->MakeXMLTag('status', 1);
			$tags[] = '<options>';

			$result = $GLOBALS['ISC_CLASS_DB']->Query("SELECT * FROM [|PREFIX|]countries ORDER BY countryname ASC");
			while ($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
				$tags[] = '<option>';
				$tags[] = $this->MakeXMLTag('name', $row['countryname'], true);
				$tags[] = '</option>';
			}

			$tags[] = '</options>';
			$this->SendXMLHeader();
			$this->SendXMLResponse($tags);
			exit;
		}

		/**
		* Handles adding products from the list display mode
		*
		*/
		private function AddProductsToCart()
		{
			$response = array();

			if (isset($_REQUEST['products'])) {
				/** @var ISC_CART */
				$cart = GetClass('ISC_CART');

				$products = explode("&", $_REQUEST["products"]);

				foreach ($products as $product) {
					list($id, $qty) = explode("=", $product);
					if (!$cart->AddSimpleProductToCart($id, $qty)) {
						$response["error"] = $_SESSION['AddProductErrorMessage'];
					}
				}
			}

			echo isc_json_encode($response);
			exit;
		}


		public function ProcessRemoteActions()
		{

			if(!isset($_REQUEST['provider'])) {
				$tags[] = $this->MakeXMLTag('errorMsg', GetLang('ExpressCheckoutLoadError')."1");
				$this->SendXMLHeader();
				$this->SendXMLResponse($tags);
				exit;
			}
			if(!GetModuleById('checkout', $provider, $_REQUEST['provider'])) {
				$tags[] = $this->MakeXMLTag('errorMsg', GetLang('ExpressCheckoutLoadError')."2");
				$this->SendXMLHeader();
				$this->SendXMLResponse($tags);
				exit;
			}

			// This gateway doesn't support remote actions
			if(!method_exists($provider, 'ProcessRemoteActions')) {
				$tags[] = $this->MakeXMLTag('errorMsg', GetLang('ExpressCheckoutLoadError')."3");
				$this->SendXMLHeader();
				$this->SendXMLResponse($tags);
				exit;
			}

			$result = $provider->ProcessRemoteActions();
			$tags[] = $this->MakeXMLTag('errorMsg', $result['error']);
			$tags[] = $this->MakeXMLTag('data', isc_html_escape($result['data']));
			$this->SendXMLHeader();
			$this->SendXMLResponse($tags);
			exit;
		}

		private function sortAdvanceSearch()
		{
			if (!array_key_exists("section", $_REQUEST) || trim($_REQUEST["section"]) == "") {
				exit;
			}

			if (!array_key_exists("sortBy", $_REQUEST) || trim($_REQUEST["sortBy"]) == "") {
				exit;
			}

			$this->doAdvanceSearch();
		}


		public function GetVariationOptions()
		{
			$productId = (int)$_GET['productId'];
			$optionIds = $_GET['options'];
			$optionIdsArray = array_map('intval', explode(',', $optionIds));

			// We need to find the next type of option that's selectable, so what we do
			// is because the vcoptionids column is in the order that the customer selects
			// the options, we just find a single matching option and then look up values
			// according to the voname.

			$query = "
				SELECT prodvariationid, vnumoptions
				FROM [|PREFIX|]products p
				JOIN [|PREFIX|]product_variations v ON (v.variationid=p.prodvariationid)
				WHERE p.productid='".$productId."'
			";
			$result =$GLOBALS['ISC_CLASS_DB']->query($query);
			$product = $GLOBALS['ISC_CLASS_DB']->fetch($result);

			// Invalid product variation, or product doesn't have a variation
			if(empty($product)) {
				exit;
			}

			// If we received the number of options the variation has in, then the customer
			// has selected an entire row. Find that row.
			if(count($optionIdsArray) == $product['vnumoptions']) {
				$setMatches = array();
				foreach($optionIdsArray as $optionId) {
					$setMatches[] = 'FIND_IN_SET('.$optionId.', vcoptionids)';
				}
				$query = "
					SELECT *
					FROM [|PREFIX|]product_variation_combinations
					WHERE
						vcproductid='".$productId."' AND
						vcenabled=1 AND
						".implode(' AND ', $setMatches)."
					LIMIT 1
				";
				$result = $GLOBALS['ISC_CLASS_DB']->query($query);
				$combination = $GLOBALS['ISC_CLASS_DB']->fetch($result);


				$productClass = new ISC_PRODUCT($productId);
				$combinationDetails = $productClass->getCombinationDetails($combination);
				$combinationDetails['comboFound'] = true;

				if ($combinationDetails['sku'] == null) {
					// prevent a blank sku on details page
					$combinationDetails['sku'] = '';
				}

				echo isc_json_encode($combinationDetails);
				exit;
			}

			// Try to find a combination row with the incoming option ID string, to determine
			// which set of options is next.
			$query = "
				SELECT DISTINCT voname
				FROM [|PREFIX|]product_variation_options
				WHERE
					vovariationid='".$product['prodvariationid']."'
				ORDER BY vooptionsort ASC
				LIMIT ".count($optionIdsArray).", 1
			";
			$optionName = $GLOBALS['ISC_CLASS_DB']->fetchOne($query);

			$hasOptions = false;
			$valueHTML = '';

			$setMatches = array();
			foreach($optionIdsArray as $optionId) {
				$setMatches[] = 'FIND_IN_SET('.$optionId.', vcoptionids)';
			}

			$query = "
				SELECT *
				FROM [|PREFIX|]product_variation_options
				WHERE
					vovariationid='".$product['prodvariationid']."' AND
					voname='".$GLOBALS['ISC_CLASS_DB']->quote($optionName)."'
				ORDER BY vovaluesort ASC
			";
			$result = $GLOBALS['ISC_CLASS_DB']->query($query);
			while($option = $GLOBALS['ISC_CLASS_DB']->fetch($result)) {
				$query = "
					SELECT combinationid
					FROM [|PREFIX|]product_variation_combinations
					WHERE
						vcproductid='".$productId."' AND
						vcenabled=1 AND
						FIND_IN_SET(".$option['voptionid'].", vcoptionids) > 0 AND
						".implode(' AND ', $setMatches)."
					LIMIT 1
				";
				// Ok, this variation option isn't in use for this product at the moment. Skip it
				if(!$GLOBALS['ISC_CLASS_DB']->fetchOne($query)) {
					continue;
				}

				$GLOBALS['OptionId'] = (int)$option['voptionid'];
				$GLOBALS['OptionValue'] = isc_html_escape($option['vovalue']);
				$valueHTML .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("ProductVariationListMultipleItem");
				$hasOptions = true;
			}

			$return = array(
				'hasOptions' 	=> $hasOptions,
				'options'		=> $valueHTML
			);

			echo isc_json_encode($return);
			exit;
		}



		/**
		* Updates the language file. Used by design mode
		*
		* @return void
		*/
		private function UpdateLanguage()
		{
			if(!getClass('ISC_ADMIN_AUTH')->isDesignModeAuthenticated()) {
				exit;
			}

			$name	= str_replace("lang_", "", $_REQUEST['LangName']);
			$value	= $_REQUEST['NewValue'];
			/*$value = str_replace(array("\n","\r"), "", $value);*/
			$value = str_replace('"', "&quot;", $value);

			$content = file_get_contents(ISC_BASE_PATH."/language/".GetConfig('Language')."/front_language.ini");
			$frontLang = parse_ini_file(ISC_BASE_PATH."/language/".GetConfig('Language')."/front_language.ini");

			$replacement = $name . ' = "' . str_replace('$', '\$', $value) . '"';
			$replace = preg_replace("#^\s*".preg_quote($name, "#")."\s*=\s*\"".preg_quote(@$frontLang[$name], "#").'"\s*$#im', $replacement, $content);

			if(file_put_contents(ISC_BASE_PATH."/language/".GetConfig('Language')."/front_language.ini", $replace)) {
				$tags[] = $this->MakeXMLTag('status',1);
				$tags[] = $this->MakeXMLTag('newvalue', $value, true);
			}else {
				$langFile = ISC_BASE_PATH.'/language/'.GetConfig('Language').'/admin/common.ini';
				ParseLangFile($langFile);
				$tags[] = $this->MakeXMLTag('status',0);
				$tags[] = $this->MakeXMLTag('message', GetLang('UpdateLanguage'));
			}

			$this->SendXMLHeader();
			$this->SendXMLResponse($tags);
			die();
		}
		
		/**
		 * EDAZCOMMERCE - Calcula o desconto configurado para o método de pagamento selecionado
		 */
		private function GetDiscountMethodPaymentEdaz(){
			$total	  			= '';
			$totalDesconto		= '';
			$variableName       = '';
			$descontoPercentual = 0;
			$metodoPagamento    = $_POST['metodoPagamento'];
			
			/* PEGA O DESCONTO CADASTRADO PARA O MÉTODO SELECIONADO */
			if(isset($metodoPagamento)){
				/* BOLETO */
				if(strpos($metodoPagamento, "boleto")){ $variableName = 'descboleto'; }
				
				if($variableName != ''){
					$query = "
						SELECT variableval FROM [|PREFIX|]module_vars
						WHERE modulename = 'addon_parcelas'
						AND variablename = '" . $variableName . "'";
					
					$descontoPercentual = $GLOBALS['ISC_CLASS_DB']->FetchOne($query);
				}
			}
			
			$quote = getCustomerQuote();
			$arrayValoresQuote = getClass('ISC_CHECKOUT')->getQuoteTotalRows($quote);
			if(isset($arrayValoresQuote['total']['value'])){
				$total 		   = $arrayValoresQuote['total']['value'];
				$totalDesconto = $total * ($descontoPercentual/100);
				$totalDesconto = number_format($totalDesconto, 2);
			}
			
			/* SETA OS VALORES NA QUOTE */
			$quote->setDescontoMetodoPagamentoEdaz($totalDesconto);
			$quote->addDiscount('boleto', $totalDesconto);
			
			$return = array(
				'total'   	 		 => 'R$' . number_format($total-$totalDesconto, 2, ',', '.'),
				'totalDesconto'		 => 'R$' . number_format($totalDesconto, 2, ',', '.'),
				'descontoPercentual' => $descontoPercentual
			);
			
			echo isc_json_encode($return);
			exit;
		}
		
	}
