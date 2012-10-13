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
							<div class='nomeCategoria floatLeft'>" . ucwords($categorias['catname']) . "</div>
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
	 	$strDate = date('Y-m-d', $strDate);
	 	
	 	// Array com os dia da semana em português;
	 	$arrDaysOfWeek = array('Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado');
	 	// Array com os meses do ano em português;
	 	$arrMonthsOfYear = array(1 => 'Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');
	 	// Descobre o dia da semana
	 	$intDayOfWeek = date('w',strtotime($strDate));
	 	// Descobre o dia do mês
	 	$intDayOfMonth = date('d',strtotime($strDate));
	 	// Descobre o mês
	 	$intMonthOfYear = date('n',strtotime($strDate));
	 	// Descobre o ano
	 	$intYear = date('Y',strtotime($strDate));
	 	// Formato a ser retornado
	 	
	 	return $arrDaysOfWeek[$intDayOfWeek] . ', ' . $intDayOfMonth . ' de ' . $arrMonthsOfYear[$intMonthOfYear] . ' de ' . $intYear;
	 }

?>
