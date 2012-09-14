<HTML><HEAD><TITLE>.: Formulário de Contato :.</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="../javascript/jquery.js"></script>
<script type="text/javascript" src="../javascript/jquery.maskedinput-1.1.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../templates/default/Styles/fale_conosco.css"/> 
</HEAD>

<?php
	$path = dirname(__FILE__);
	$posUltimaBarra = strrpos($path, "\\");
	$path = substr($path, 0, $posUltimaBarra);
	//include($path."/init.php");
	
	require_once("connectDB.php");
	
	$nomeProduto;
	$imagemProduto;
	$avisemeQuandoChegar = false;
	$codprod 	= (isset($_REQUEST['codprod']) 	  && $_REQUEST['codprod'] 	 != '') ? $_REQUEST['codprod'] 	  : "";
	$urlWebsite = (isset($_REQUEST['urlWebsite']) && $_REQUEST['urlWebsite'] != '') ? $_REQUEST['urlWebsite'] : "";
	
	if($codprod != ''){
		$query  = " SELECT p.prodname, pi.imagefilestd ";
		$query .= " FROM isc_products p, isc_product_images pi ";
		$query .= " WHERE p.productid   = $codprod ";
		$query .= " AND pi.imageprodid  = p.productid ";
		$query .= " AND pi.imageisthumb = 1 ";
		
		$result = mysql_query($query) or print(mysql_error());
		$row    = mysql_fetch_array($result);
		
		$avisemeQuandoChegar = true;
		$nomeProduto   	  	 = $row['prodname'];
		/*
		$pathSite		  = $_SERVER['HTTP_REFERER'];
		$posUltimaBarra   = strrpos($pathSite, "/");
		$pathSite 	      = substr($pathSite, 0, $posUltimaBarra);
		*/
		
		$pathProductImages = $urlWebsite . "/product_images/";
		$imagemProduto     = $pathProductImages . $row['imagefilestd'];
	}
	
?>

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
							
							<!-- SOLICITAR ORÇAMENTO DE PRODUTO -->
							<? if($avisemeQuandoChegar): ?>
							<div class="tituloDiv" style="clear: left; padding-top: 30px;">Solicite um orçamento para o produto abaixo:</div>
							<div style="clear: left; float: left; margin-top: 20px;">
								<div class="orcamentoImagemProduto"><img src="<? echo $imagemProduto ?>" width="150"></div>
								<div class="orcamentoNomeProduto"><? echo $nomeProduto ?></div>
							</div>
							<? endif; ?>
							
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
											<input class="inputbox" type="text" id="assunto" name="assunto" value="<? echo ($avisemeQuandoChegar) ? "Avise-me quando o produto chegar!" : "" ?>"/>
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
											<textarea class="textarea" id="mensagem" name="mensagem" style="width: 270px;"><? echo ($avisemeQuandoChegar) ? "Desejo ser informado quando estiver em estoque o produto " . $nomeProduto . "." : "" ?></textarea>
											<div class="left seta_obrigatorio"></div>
										</div>
									</div>
									<div class="espace"></div>
									<div class="divCampo">
										<input id="btnEnviar" type="submit" class="button" onclick="enviaForm();" style="float: left;" value="Enviar"/>
										<div id="mensagemErro"></div>
										<div id="carregandoAjaxDiv" style="display: none; float: right; margin-top: 5px; position: relative; right: 65px; text-align: right; width: 36%;">
											<img src="<?=$urlWebsite?>/templates/default/img/fale_conosco/ajax-loader.gif">
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
	
	$('#nome').focus();
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
				mensagem:mensagem,
				urlWebsite:'<?=$urlWebsite?>'
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
		
		/* Valida Campo Email */
		if(validado && !validaEmail($('#email').val())){
			alert('Digite um e-mail válido!');
			$('#email').addClass('campo_obrigatorio');
			$('#email').next().css('visibility','visible');
			$('#email').focus();
			return false;
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
	
	function validaEmail(email){
	    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/); 
	    if(typeof(email) == "string"){ 
	    	if(er.test(email)){ return true; } 
	    }else if(typeof(email) == "object"){ 
	    	if(er.test(email.value)){  
	        	return true;  
	    	} 
	    }else{ 
	    	return false; 
	    } 
	}
	
</script>

</BODY>
</HTML>
