<HTML><HEAD><TITLE>.: Formulário de Contato :.</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="../javascript/jquery.js"></script>
<script type="text/javascript" src="../javascript/jquery.maskedinput-1.1.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../templates/default/Styles/fale_conosco.css"/> 
</HEAD>

<BODY> 
<DIV align=center>
	<div id="fale_conosco_div" style="width: 610px; border: 1px solid black;">
		<div class="tituloDiv">Contato Yumi Pet Fashion.</div>
		<div style="padding: 20px; position: relative;">
			<div style="width: 100%; overflow: auto;">
				<!--<div style="text-align: justify;">Sobre a Yumi Pet Fashion...</div>-->
				<div style="float: left; width: 100%; margin-top: 5px;">
					<div class="texto_contato">
						<div style="clear: left; float: left; overflow: auto;">
							<div style="margin: 5px 0 15px;">
								<strong>Entre em contato conosco:</strong>
							</div>
							<div style="width: 100%; clear: left;">
								<div id="contato_emailDiv" class="contato_div_img"></div>
								<div class="left top1"><strong>E-mail:</strong> <a href="mailto:atendimento@yumipetfashion.com.br?subject=Formulario - Contato Site">atendimento@yumipetfashion.com.br</a></div>
							</div>
							<div style="width: 100%; clear: left;">
								<div id="contato_telefoneDiv" class="contato_div_img"></div>
								<div class="left top1"><strong>Tel:</strong> (13) 3307-2645</div>
							</div>
							<div style="width: 100%; clear: left;">
								<div id="contato_celularDiv" class="contato_div_img"></div>
								<div class="left top1">
									<strong>Cel:</strong> (13)7806-1231&nbsp;/&nbsp;
									<strong>ID:</strong> 80*186939</div>
								</div>
							</div>
							
							<!-- CAMPOS -->
							<div style="clear: left; width: 330px; float: left; margin-top: 20px;">
								<div id="emailForm">
									<div class="divCampo">
										<div class="label">Nome</div>
										<div class="clearLeft">
											<input class="inputbox" type="text" id="nome" name="nome" value=""/>
											<div class="left seta_obrigatorio"></div>
										</div>	
									</div>
									<div class="divCampo">
										<div class="label">Empresa</div>
										<div class="clearLeft">
											<input class="inputbox" type="text" id="empresa" name="empresa" value=""/>
											<div class="left seta_obrigatorio"></div>
										</div>	
									</div>
									<div class="divCampo">
										<div class="label">Assunto</div>
										<div class="clearLeft">
											<input class="inputbox" type="text" id="assunto" name="assunto" value=""/>
											<div class="left seta_obrigatorio"></div>
										</div>	
									</div>
									<div class="divCampo">
										<div class="label">Email <span class="label_obrigatorio">*</span></div>
										<div class="clearLeft">
											<input class="inputbox" type="text" id="email" name="email" value=""/>
											<div class="left seta_obrigatorio"></div>
										</div>	
									</div>
									<div class="divCampo">
										<div class="label">Telefone</div>
										<div class="clearLeft">
											<input class="inputbox" type="text" id="telefone" name="telefone" value=""/>
											<div class="left seta_obrigatorio"></div>
										</div>	
									</div>
									<div class="divCampo">
										<div class="label">Mensagem <span class="label_obrigatorio">*</span></div>
										<div class="left area-bg">
											<textarea class="textarea" id="mensagem" name="mensagem" style="width: 270px;"></textarea>
											<div class="left seta_obrigatorio"></div>
										</div>
									</div>
									<div class="espace"></div>
									<div class="divCampo">
										<div id="btnEnviar" class="button" type="submit" onclick="enviaForm();" style="float: left;">Enviar</div>
										<div id="mensagemErro"></div>
										<div id="carregandoAjaxDiv" style="display: none; float: right; margin-top: 5px; position: relative; right: 65px; text-align: right; width: 36%;">
											<img src="../templates/1x/img/fale_conosco/ajax-loader.gif">
										</div>
									</div>
								</div>
								<div id="retornoEnvioDiv" style="display: none;"></div>
							</div>
						</div>
					</div>
				<div class="imagem_contato"></div>
			</div>
		</div>
	</div>
</div>

<script>
	
	$('#telefone').mask("(99) 9999-9999");
	
	function enviaForm(){
		var nome,
			empresa,
			email,
			telefone,
			assunto,
			mensagem,
			divForm,
			divRetorno,
			validado,
			mensagemErro;
			
		validado     = validaForm();
		
		if(validado){
			divForm	   = $('#emailForm');
			divRetorno = $('#retornoEnvioDiv');
			
			nome 	   = $('#nome').val();
			empresa	   = $('#empresa').val();
			assunto    = $('#assunto').val();
			email 	   = $('#email').val();
			telefone   = $('#telefone').val();
			mensagem   = $('#mensagem').val();
			
			$('#btnEnviar').attr('disabled','disabled');
			$('#carregandoAjaxDiv').fadeIn('slow');
			$.post("envioEmail.php", 
				{
				nome:nome, 
				empresa:empresa,
				assunto:assunto,
				email:email, 
				telefone:telefone, 
				mensagem:mensagem 
				}, function(data){
					complete:
						$(divForm).hide();
						$(divRetorno).html(data);
						$(divRetorno).fadeIn(1500);
						$('#carregandoAjaxDiv').hide();
				});
		}
		
		mensagemErro = (!validado) ? "Informe os campos corretamente!" : "";
		$('#mensagemErro').html(mensagemErro);
	}
	
	function validaForm(){
		var campo,
			validado,
			arrayCampos;
			
		validado 	= true;
		arrayCampos = new Array("nome", "email","mensagem");
		
		var tamanhoArray = arrayCampos.length;
		for(var i=tamanhoArray-1; i>=0; i--){
			campo = arrayCampos[i];
			
			/* Limpando os Campos */
			$('#' + campo).removeClass('campo_obrigatorio');
			$('#' + campo).next().css('visibility','hidden');
			
			/* Verificando Campos */
			if($.trim($('#' + campo).val()) == ''){
				validado = false;
				$('#' + campo).addClass('campo_obrigatorio');
				$('#' + campo).next().css('visibility','visible');
			}
		}
		
		return validado;
	}
	
	function voltarMensagem(resetForm){
		if(resetForm){
			$('#nome').val('');
			$('#empresa').val('');
			$('#assunto').val('');
			$('#email').val('');
			$('#telefone').val('');
			$('#mensagem').val('');
		}
		
		$('#retornoEnvioDiv').hide();
		$('#btnEnviar').removeAttr('disabled');
		$('#emailForm').fadeIn(1500);
	}
	
</script>

</BODY>
</HTML>
