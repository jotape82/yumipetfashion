<?php

	define(VENDA_ATACADO, 'venda_atacado'); 
	
	class ISC_ADMIN_VENDA_ATACADO
	{
		protected $habilitadoModulo;
		protected $qtdeProdutoAtacado;
		protected $descontoPorcentagem;
		
		public function __construct()
		{
			if(defined('ISC_ADMIN_CP')) {
				$this->template = Interspire_Template::getInstance('admin');
			}

			if(!empty($GLOBALS['ISC_CLASS_DB'])) {
				$this->db = $GLOBALS['ISC_CLASS_DB'];
			}
			
			$this->setVariaveisConfiguracaoModulo();
		}

		/**
		 * Retorna Tela de Configuração de Campos de Venda por Atacado
		 */
		public function getConfigVendaAtacado(){
			$query  = " SELECT nm_variable, value FROM [|PREFIX|]variables_edazcommerce ";
			$query .= " WHERE nm_module = '". VENDA_ATACADO ."' ";
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
				'qtde_produto_atacado' => (int) $_POST['qtde_produto_atacado'],
				'porcentagem_desconto' => (int) $_POST['porcentagem_desconto']
			);
			
			$query  = " DELETE FROM [|PREFIX|]variables_edazcommerce ";
			$query .= " WHERE nm_module = '". VENDA_ATACADO ."' "; 
			$GLOBALS['ISC_CLASS_DB']->Query($query);
			
			if($arrayCampos['habilitar_modulo'] == 'on'){
				foreach($arrayCampos as $campo => $valor){
					$query  = " INSERT INTO [|PREFIX|]variables_edazcommerce (nm_module, nm_variable, value) ";
					$query .= " VALUES ('". VENDA_ATACADO ."', '".$campo."', '".$valor."') ";
					
					$GLOBALS['ISC_CLASS_DB']->Query($query);
				}
			}
			
			$this->getConfigVendaAtacado();
		}
		
		/**
		 * Seta as Variáveis de Configuração do Módulo de Atacado
		 */
		public function setVariaveisConfiguracaoModulo(){
			$arrayVariablesModule = array();
			
			/* Pega a Configuração no Banco */
			$query  = " SELECT nm_module, nm_variable, value FROM isc_variables_edazcommerce ";
			$query .= " WHERE nm_module = '". VENDA_ATACADO ."' ";
			$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
			
			while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
				$arrayVariablesModule[$row['nm_variable']] = $row['value'];
			}
			
			$this->setHabilitadoModulo($arrayVariablesModule['habilitar_modulo']);
			$this->setQtdeProdutoAtacado($arrayVariablesModule['qtde_produto_atacado']);
			$this->setDescontoPorcentagem($arrayVariablesModule['porcentagem_desconto']);
		}
		
		/**
		 * Atualiza o Preço por Atacado nos Produtos do Carrinho
		 */
		public function atualizaPrecoAtacadoProdutosCarrinho($arrayItems){
			$precoProdutoGeral 	  = 0;
			$precoEspecialAtacado = 0;
			
			if($this->isHabilitadoModulo()){
				$qtdeProdutosTotalCarrinho = 0;
				$qtdeProdutosAtacado 	   = $this->getQtdeProdutoAtacado();
				$descontoPorcentagem 	   = $this->getDescontoPorcentagem();
				
				foreach($arrayItems as $item){
					$qtdeProdutosTotalCarrinho += $item->getQuantity();
				}
				
				foreach($arrayItems as $item){
					$productData = $item->getProductData();
					
					/* Verifica se Produto Usa Variação */
					if(isset($productData['variation']) && !empty($productData['variation'])){
						$descontoValor 						= (string) ($productData['variation']['vcprice'] * $descontoPorcentagem / 100);
						$precoProdutoGeral					= $productData['variation']['vcprice'];
						$precoEspecialAtacado				= $precoProdutoGeral - $descontoValor;
						//$productData['variation']['vcprice']= $precoEspecialAtacado;
					}else{
						$descontoValor 						= (string) ($productData['prodcalculatedprice'] * $descontoPorcentagem / 100);
						$precoProdutoGeral					= $productData['prodcalculatedprice'];
						$precoEspecialAtacado				= $precoProdutoGeral - $descontoValor;
						//$productData['prodcalculatedprice'] = $precoEspecialAtacado;
					}
					
					// Setando Valores
					$productData['PrecoProdutoGeral']			= $precoProdutoGeral;
					if($qtdeProdutosTotalCarrinho >= $qtdeProdutosAtacado){
						$productData['ProdutoVendaAtacado']		= true;
						$productData['PrecoEspecialAtacado']	= $precoEspecialAtacado;
						$productData['PorcentagemVendaAtacado'] = $descontoPorcentagem;
					}
					$item->setProductData($productData);
				}
			}

			return $arrayItems;
		}
		
		/**
		 * Atualiza o Preço por Atacado no Produto
		 */
		public function atualizaPrecoAtacadoProduto($produtoClass){
			if($this->isHabilitadoModulo()){
				$qtdeProdutosAtacado = $this->getQtdeProdutoAtacado();
				$descontoPorcentagem = $this->getDescontoPorcentagem();
				$productData 		 = $produtoClass->getProduct();
				
				$descontoValor 							= (string) ($productData['prodcalculatedprice'] * $descontoPorcentagem / 100);
				$productData['prodcalculatedprice'] 	= $productData['prodcalculatedprice'] - $descontoValor;
				$produtoClass->setProductVendaAtacado($productData);
			}
			
			return $produtoClass;
		}
		
		public function setHabilitadoModulo($habilitadoModulo){
			$this->habilitadoModulo = $habilitadoModulo;
		}
		
		public function isHabilitadoModulo(){
			return (isset($this->habilitadoModulo) && $this->habilitadoModulo == 'on') ? true : false;
		}
		
		public function setQtdeProdutoAtacado($qtdeProdutoAtacado){
			$this->qtdeProdutoAtacado = $qtdeProdutoAtacado;
		}
		
		public function getQtdeProdutoAtacado(){
			return $this->qtdeProdutoAtacado;
		}
		
		public function setDescontoPorcentagem($descontoPorcentagem){
			$this->descontoPorcentagem = $descontoPorcentagem;
		}
		
		public function getDescontoPorcentagem(){
			return $this->descontoPorcentagem;
		}
		
	}
