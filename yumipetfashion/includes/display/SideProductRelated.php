<?php
class ISC_SIDEPRODUCTRELATED_PANEL extends PRODUCTS_PANEL
{
	public function SetPanelSettings()
	{
		if (!isset($GLOBALS['ISC_CLASS_PRODUCT'])) {
			$GLOBALS['ISC_CLASS_PRODUCT'] = GetClass('ISC_PRODUCT');
		}

		$relatedProducts = $GLOBALS['ISC_CLASS_PRODUCT']->GetRelatedProducts();

		if (!$relatedProducts) {
			$this->DontDisplay = true;
			return;
		}

		$output 		  = "";
		$outputSliderEdaz = "";

		if(!getProductReviewsEnabled()) {
			$GLOBALS['HideProductRating'] = "display: none";
		}

		$query = $this->getProductQuery('p.productid IN ('.$relatedProducts.')', 'prodsortorder ASC');
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

		$GLOBALS['AlternateClass'] = '';
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
			$this->setProductGlobals($row);
			
			//modificacao parcelamento
			$GLOBALS['FreteDestaques'] = FreteTipo($row['productid']);
			$GLOBALS['ProDestaques']   = simulador_de_rodape($row['productid']);
			
			$output 		  .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("SideRelatedProducts");
			$outputSliderEdaz .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("SideRelatedProductsSliderEdaz");
		}

		$GLOBALS['SNIPPETS']['SideProductsRelated'] 		  = $output;
		$GLOBALS['SNIPPETS']['SideProductsRelatedSliderEdaz'] = $outputSliderEdaz;

		if(!$output) {
			$this->DontDisplay = true;
		}
	}
}