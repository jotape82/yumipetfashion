<?php


	class ISC_ADMIN_EDAZCOMMERCE
	{
		public function __construct()
		{
			if(defined('ISC_ADMIN_CP')) {
				$this->template = Interspire_Template::getInstance('admin');
			}

			if(!empty($GLOBALS['ISC_CLASS_DB'])) {
				$this->db = $GLOBALS['ISC_CLASS_DB'];
			}
		}

		public function HandleToDo($Do)
		{
			$GLOBALS['GoogleMapsAPIKey'] = isc_html_escape(GetConfig('GoogleMapsAPIKey'));
			$GLOBALS['BreadcrumEntries'] = array(GetLang('Home') => "index.php", GetLang('ConfigVendaAtacado') => "index.php?ToDo=configvendaatacadoedaz");
			
			switch (isc_strtolower($Do)) {
				case "configvendaatacadoedaz": {
					$GLOBALS['ISC_ADMIN_VENDA_ATACADO'] = GetClass('ISC_ADMIN_VENDA_ATACADO');
					$GLOBALS['ISC_ADMIN_VENDA_ATACADO']->getConfigVendaAtacado();
					break;
				}
				case "saveconfigvendaatacadoedaz": {
					$GLOBALS['ISC_ADMIN_VENDA_ATACADO'] = GetClass('ISC_ADMIN_VENDA_ATACADO');
					$GLOBALS['ISC_ADMIN_VENDA_ATACADO']->saveConfigVendaAtacado();
					break;
				}
			}
		}
		
	}