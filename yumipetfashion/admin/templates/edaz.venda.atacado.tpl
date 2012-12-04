<div id="wrapperTelaAdminDiv">
	<form name="formVendaAtacadoEdaz" method="POST">
		<div class="tituloAdminFundo">
			<div class="novaLinha Heading1">
				{% lang 'ConfigVendaAtacado' %}
			</div>
			<div class="novaLinha Intro">
				{% lang 'ConfigVendaAtacadoHelp' %}
			</div>
		</div>
		
		<div class="marginVertical20">
			<div class="novaLinha" style="margin-bottom: 15px;">
				<input type="button" class="submit" value="Salvar" onclick="salvarFormulario('save');">
				<input type="button" class="submit" value="Cancelar" onclick="salvarFormulario('cancel');">
			</div>
			<div class="novaLinha">
				<label class="width310">Habilitar Vendas por Atacado?</label>
				<input type="checkbox" name="habilitar_modulo" {{habilitar_modulo|safe}}>
			</div>
			<div class="camposVendaAtacado" style="display: {{ModuloAtacadoCamposDisplay|safe}};">
				<div class="novaLinha">
					<label class="width310">Ativar venda por atacado a partir da compra de</label>
					<input type="text" name="qtde_produto_atacado" size="5" maxlength="3" value="{{qtde_produto_atacado|safe}}" onkeypress="Formato('NUMEROS', event, this);">
					<label> unidades do produto</label>
				</div>
				<div class="novaLinha">
					<label class="width310">Porcentagem de desconto no valor do produto</label>
					<input type="text" name="porcentagem_desconto" size="5" maxlength="3" value="{{porcentagem_desconto|safe}}" onkeypress="Formato('NUMEROS', event, this);">
					<label> %</label>
				</div>
			</div>
		</div>
	</form>
	<div class="separadorHorizontal"></div>
</div>

<script>
	
	$('[name=habilitar_modulo]').click(function(){
		if($(this).attr('checked')){
			$('.camposVendaAtacado').show();
		}else{
			$('.camposVendaAtacado').hide();
		}
	});
	
	function salvarFormulario(acao){
		var form,
			action,
			valida = true;
		
		form   = $('[name=formVendaAtacadoEdaz]');
		
		if(acao == 'save'){
			action = 'index.php?ToDo=saveConfigVendaAtacadoEdaz';
			valida = validaCampos();
			
		}else if(acao == 'cancel'){
			action = 'index.php?ToDo=configVendaAtacadoEdaz';
		}
		
		if(valida){
			$(form).attr('action', action);
			$(form).submit();
		}
	}
	
	function validaCampos(){
		var valida = true;
		
		if($('[name=habilitar_modulo]').attr('checked')){
			if($('[name=qtde_produto_atacado]').val() == ''){
				alert('Informe a quantidade mínima de produtos comprados para ativar o preço de atacado');
				$('[name=qtde_produto_atacado]').focus();
				valida = false;
				return false;
			}
			if($('[name=porcentagem_desconto]').val() == ''){
				alert('Informe a porcentagem de desconto a ser aplicado aos produtos de atacado');
				$('[name=porcentagem_desconto]').focus();
				valida = false;
				return false;
			}
			if($('[name=porcentagem_desconto]').val() <= 0){
				alert('Informe uma porcentagem de desconto válida');
				$('[name=porcentagem_desconto]').focus();
				valida = false;
				return false;
			}
			if($('[name=porcentagem_desconto]').val() > 100){
				alert('A porcentagem não pode ser superior a 100%');
				$('[name=porcentagem_desconto]').focus();
				valida = false;
				return false;
			}
		}
		
		return valida;
	}
	
</script>