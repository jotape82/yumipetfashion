<?php


	class ISC_ADMIN_VENDA_ATACADO
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

		/**
		 * Retorna Tela de Configuração de Campos de Venda por Atacado
		 */
		public function getConfigVendaAtacado(){
			$query  = " SELECT nm_variable, value FROM [|PREFIX|]variables_edazcommerce ";
			$query .= " WHERE nm_module = 'venda_atacado' ";
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
				$GLOBALS[$row['nm_variable']] = $row['value'];
			}
			
			$moduloHabilitado					   = ($GLOBALS['habilitar_modulo'] == 'on') ? true : false;
			$GLOBALS['habilitar_modulo']		   = ($moduloHabilitado) ? 'checked=checked' : '';
			$GLOBALS['ModuloAtacadoCamposDisplay'] = ($moduloHabilitado) ? 'block;' : 'none;';
			$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintHeader();
			$this->template->display('edaz.venda.atacado.tpl');
			$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->PrintFooter();
		}
		
		/**
		 * Salva a Configuração de Campos de Venda por Atacado
		 */
		public function saveConfigVendaAtacado(){
			$arrayCampos = array(
				'habilitar_modulo'     => $_POST['habilitar_modulo'],
				'qtde_produto_atacado' => $_POST['qtde_produto_atacado'],
				'porcentagem_desconto' => $_POST['porcentagem_desconto']
			);
			
			$query  = " DELETE FROM [|PREFIX|]variables_edazcommerce ";
			$query .= " WHERE nm_module = 'venda_atacado' "; 
			$GLOBALS['ISC_CLASS_DB']->Query($query);
			
			if($arrayCampos['habilitar_modulo'] == 'on'){
				foreach($arrayCampos as $campo => $valor){
					$query  = " INSERT INTO [|PREFIX|]variables_edazcommerce (nm_module, nm_variable, value) ";
					$query .= " VALUES ('venda_atacado', '".$campo."', '".$valor."') ";
					
					$GLOBALS['ISC_CLASS_DB']->Query($query);
				}
			}
			
			$this->getConfigVendaAtacado();
		}
		
	}
	
	
	
