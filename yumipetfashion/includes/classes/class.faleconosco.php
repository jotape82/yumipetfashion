<?php
class ISC_FALECONOSCO
{

	public function __construct()
	{
		
	}
	
	public function HandlePage()
	{
		$solicitarOrcamento  = false;
		$codprod 			 = (isset($_REQUEST['codprod']) 		  && $_REQUEST['codprod'] 	 		!= '') ? $_REQUEST['codprod'] 	  		: "";
		$variacaoProdutoID   = (isset($_REQUEST['variacaoProdutoID']) && $_REQUEST['variacaoProdutoID'] != '') ? $_REQUEST['variacaoProdutoID'] : "";
		$tituloPagina		 = 'Entre em contato conosco';
		$emailRemetenteSite	 = GetConfig('OrderEmail');
		
		/* PEGA O PRODUTO */
		if($codprod != ''){
			$solicitarOrcamento = true;
			
			$query  = " SELECT p.productid, p.prodname, pi.imagefilestd ";
			$query .= " FROM [|PREFIX|]products p ";
			$query .= " LEFT JOIN [|PREFIX|]product_images pi ON (pi.imageprodid  = p.productid) ";
			$query .= " WHERE p.productid = $codprod ";
			$query .= " ORDER BY pi.imagesort ";
			$result  = $GLOBALS['ISC_CLASS_DB']->Query($query);
			$produto = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
			
			/* PEGA A VARIAÇÃO DO PRODUTO */
			$descricaoAtributosProduto = '';
			if($variacaoProdutoID != ''){
				$query = " SELECT vcoptionids FROM [|PREFIX|]product_variation_combinations WHERE combinationid = $variacaoProdutoID ";
				$result  			= $GLOBALS['ISC_CLASS_DB']->Query($query);
				$variationOptionIds = $GLOBALS['ISC_CLASS_DB']->FetchOne($result);
				
				if(isset($variationOptionIds)){
					
					$arrayOptionIds 		   = explode(",", $variationOptionIds);
					foreach($arrayOptionIds as $optionId){
						$query = " SELECT voname, vovalue FROM [|PREFIX|]product_variation_options WHERE voptionid = $optionId ";
						$result  		= $GLOBALS['ISC_CLASS_DB']->Query($query);
						$arrayAtributos = $GLOBALS['ISC_CLASS_DB']->Fetch($result);
						$descricaoAtributosProduto .= $arrayAtributos['voname'] . "<b> " . $arrayAtributos['vovalue'] . "</b> / ";
					}
					$descricaoAtributosProduto 			  = (strlen($descricaoAtributosProduto) > 0) ? substr($descricaoAtributosProduto, 0, strlen($descricaoAtributosProduto)-2) : '';
				}
			}
			
			/* FORMATA IMAGEM DO PRODUTO */
			$folderParentImage = substr($produto['imagefilestd'], 0, strrpos($produto['imagefilestd'], '/')+1); $produto['imagefilestd'];
			$imageName 		   = rawurlencode(substr($produto['imagefilestd'], strrpos($produto['imagefilestd'], '/')+1, strlen($produto['imagefilestd'])));
			$urlImagemProduto  = ($produto['imagefilestd'] != '') ? $GLOBALS['ShopPathNormal'] . "/product_images/" . $folderParentImage . $imageName : $GLOBALS['TPL_PATH'] . "/images/ProductDefault.gif";
			
			$tituloPagina									 = 'Solicitação de Orçamento';
			$GLOBALS['FaleConoscoSolicitoOrcamentoaAssunto'] = "Solicitação de Orçamento";
			$GLOBALS['FaleConoscoSolicitoOrcamentoMensagem'] = "Desejo receber orçamento e informações referentes ao produto " . $produto['prodname'] . " código(" . $produto['productid'] . ").";
			$GLOBALS['FaleConoscoDescricaoAtributosProduto'] = $descricaoAtributosProduto;
			$GLOBALS['FaleConoscoNomeProduto']   			 = $produto['prodname'];
			$GLOBALS['FaleConoscoImagemProduto'] 			 = $urlImagemProduto;
		}
		
		$GLOBALS['TituloPagina'] 		   = $tituloPagina;
		$GLOBALS['EmailRemetenteSite']     = $emailRemetenteSite;
		$GLOBALS['SolicitarOrcamento']	   = $solicitarOrcamento;
		$GLOBALS['HideSolicitarOrcamento'] = (!$solicitarOrcamento) ? "displayNone" : "";
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetPageTitle($tituloPagina);
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("faleconosco");
		$GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();
	}

}
