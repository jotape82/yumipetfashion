<?php

	class CHECKOUT_CHEQUE extends ISC_CHECKOUT_PROVIDER
	{

		/*
			Does this payment provider require SSL?
		*/
		var $_requiresSSL = false;

		/*
			The help text that will be displayed post-checkout
		*/
		var $_paymenthelp = "";

		var	$_id = "checkout_cheque";

		/*
			Checkout class constructor
		*/
		function CHECKOUT_CHEQUE()
		{
			// Setup the required variables for the cheque checkout module
			parent::__construct();
			$this->_name = GetLang('ChequeName');
			$this->_description = GetLang('ChequeDesc');
			$this->_help = GetLang('ChequeHelp');
			$this->_enabled = $this->CheckEnabled();
			$this->_height = 0;
			
			// This is an offline payment method
			$this->_paymenttype = PAYMENT_PROVIDER_OFFLINE;
		}

		/*
			Is cheque accessible by the customer? It depends on which
			"Available Countries" are setup by the administrator
		*/
		function isaccessible()
		{
			// If cheque is available for all countries then return true
			$available_countries = $this->GetValue("availablecountries");

			if( (!is_array($available_countries) && $available_countries == "all") || (is_array($available_countries) && in_array("all", $available_countries)) ) {
				return true;
			}
			else if(!isset($GLOBALS['ISC_CLASS_ACCOUNT'])) { // Always accessible to the Admin panel
				return true;
			}
			else {
				// Load the pending order
				$pendingOrder = LoadPendingOrderByToken();

				// Check the country in the billing address. If it's not set then assume true
				if(isset($pendingOrder['ordbillcountryid'])) {
					$billing_country_id = $pendingOrder['ordbillcountryid'];
					if(is_array($available_countries)) {
						if(in_array($billing_country_id, $available_countries)) {
							return true;
						} else {
							return false;
						}
					}
					else {
						if($billing_country_id == $available_countries) {
							return true;
						} else {
							return false;
						}
					}
				}
				else {
					return true;
				}
			}
		}

		function SetCustomVars()
		{

			$this->_variables['displayname'] = array("name" => "Nome",
			   "type" => "textbox",
			   "help" => GetLang('DisplayNameHelp'),
			   "default" => $this->GetName(),
			   "required" => true
			);

			$this->_variables['availablecountries'] = array("name" => "Paises Aceitos",
			   "type" => "dropdown",
			   "help" => GetLang('ChequeAvailableCountriesHelp'),
			   "default" => "all",
			   "required" => true,
			   "options" => GetCountryListAsNameValuePairs(),
				"multiselect" => true
			);
			
		   $this->_variables['parmin'] = array("name" => "Parcela Minima",
			   "type" => "textbox",
			   "help" => 'Ponha o Valor Minimo da Parcela a Ser Cobrada',
			   "default" => '50',
			   "required" => true
			);

			
			$this->_variables['dividir'] = array("name" => "Parcelar em ate",
			   "type" => "dropdown",
			   "help" => 'Quantidade de Vezes a Ser Dividido no Cheque.',
			   "default" => '3',
			   "options" => array("1x"=>"1","2x"=>"2","3x"=>"3","4x"=>"4","5x"=>"5","6x"=>"6","7x"=>"7","8x"=>"8","9x"=>"9","10x"=>"10","11x"=>"11","12x"=>"12","13x"=>"13","14x"=>"14","15x"=>"15"),
			   "required" => true
			);
		
			$this->_variables['juros'] = array("name" => "Com Juros de %",
			   "type" => "textbox",
			   "help" => 'Ponha o Juros em % se For Cobrado',
			   "default" => '0',
			   "required" => true
			);
			
			$this->_variables['jurosde'] = array("name" => "Apartir da Parcela",
			   "type" => "dropdown",
			   "help" => 'Quantidade de Vezes a Ser Dividido no Cheque.',
			   "default" => '99',
			   "options" => array("Nenhuma"=>"99","1x"=>"1","2x"=>"2","3x"=>"3","4x"=>"4","5x"=>"5","6x"=>"6","7x"=>"7","8x"=>"8","9x"=>"9","10x"=>"10","11x"=>"11","12x"=>"12","13x"=>"13","14x"=>"14","15x"=>"15"),
			   "required" => true
			);

			$this->_variables['helptext'] = array("name" => "Informações de Pagamento",
			   "type" => "textarea",
			   "help" => GetLang('ChequePaymentInformationHelp'),
			   "default" => "Ponha detalhes para pagamento por cheque.",
			   "required" => true,
			   "rows" => 7
			);
		}

		/**
		*	Return the delivery details needed to pay for the order
		*/
		function getofflinepaymentmessage($id) {
		    $order = LoadPendingOrderByToken($_COOKIE['SHOP_TOKEN']);
			$valorcerto = $order['ordtotalamount'];
		    $juros = trim($this->GetValue("juros"));
			$dividir = trim($this->GetValue("dividir"));
			$porcem = $valorcerto/100;

			$vezdes = $porcem*$juros;
			$totalmenos = $valorcerto+$vezdes;
			$port = @$totalmenos/$dividir;
			$valord =number_format($totalmenos, 2, ',', '');
			$valor =number_format($port, 2, ',', '');
			
		if($juros != "0") {
        $msg = "<h2>Pedido total de $valord em até $dividir vez(s) de $valor com juros de $juros%!</h2>";
		} else {
		$msg = "<h2>Pedido total de $valord em até $dividir Vezes de $valor!</h2>";
		}
		
		$help = $this->GetValue("helptext");
		
		$dados = "$msg<br>$help";
			return $dados;
		}
	}

?>