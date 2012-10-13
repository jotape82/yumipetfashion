<?php

require_once(dirname(__FILE__).'/../lib/edazcommerce.php');

$nome 	     = (isset($_POST['nome']))       ? utf8_decode($_POST['nome'])        : "";
$empresa     = (isset($_POST['empresa']))    ? utf8_decode($_POST['empresa'])     : "";
$assunto     = (isset($_POST['assunto']))    ? utf8_decode($_POST['assunto'])     : "";
$email 	     = (isset($_POST['email']))      ? utf8_decode($_POST['email'])       : "";
$mensagem    = (isset($_POST['mensagem']))   ? utf8_decode($_POST['mensagem'])    : "";
$nomeProduto = (isset($_POST['nomeProduto']))? utf8_decode($_POST['nomeProduto']) : "";
$telefone    = (isset($_POST['telefone']))   ? $_POST['telefone'] : "";

$imagemProduto		= (isset($_POST['imagemProduto'])) 		?  $_POST['imagemProduto'] : "";
$descricaoAtributos = (isset($_POST['descricaoAtributos'])) ?  utf8_decode($_POST['descricaoAtributos']) : "";
$solicitarOrcamento = (isset($_POST['solicitarOrcamento'])  && $_POST['solicitarOrcamento'] == '1') ? true : false;
$emailDestino 		= (isset($_POST['emailDestino'])) 		? utf8_decode($_POST['emailDestino']) : "";
$nomeLoja	  		= (isset($_POST['nomeLoja'])) 			? utf8_decode($_POST['nomeLoja']) : "";
$urlWebsite			= (isset($_POST['urlWebsite'])) 		? utf8_decode($_POST['urlWebsite']) : "";
$urlImageWebsite   	= (isset($_POST['urlImageWebsite']))    ? $_POST['urlImageWebsite'] : "";

$stylecss  = "<style>";
$stylecss .= 	".classTD1{ width: 100px; height: 30px; font-family: Arial; font-size: 12px; color: #404040; font-weight: bold; text-transform: uppercase; }";
$stylecss .= 	".classTD2{ width: 600px; height: 30px; font-family: Arial; font-size: 12px; color: #404040; }";
$stylecss .= 	".classData{ font-family: Arial; font-size: 12px; color: #707070; text-align: right; }";
$stylecss .= 	".classTitulo{ background-color: #F9F9F9; color: #909090; font-family: Arial; font-size: 22px; font-weight: bold; padding: 15px 5px; }";
$stylecss .= 	".classNomeProduto{ font-family: Arial; font-size: 18px; color: #909090; font-weight: bold; }";
$stylecss .= 	".classDescricaoProduto{ font-family: Arial; font-size: 12px; color: #404040; font-weight: normal; }";
$stylecss .= 	".classRodapeNomeLoja{ font-family: Arial; font-size: 14px; color: #404040; font-weight: bold; font-style: italic; text-align: right; padding-right: 10px; }";
$stylecss .= 	".divisorRodape{ width: 550px; float: right; color: #E5E5E5; }";
$stylecss .= "</style>";

$dataExtenso	= getFormataDataExtenso(time());
$tituloEmail	= ($solicitarOrcamento)  ? 'Solicitação de Orçamento' : $nomeLoja . ' (Fale Conosco)';

$mensagemEmail   = array();
$mensagemEmail[] = $stylecss . "#NEWLINE#";
$mensagemEmail[] = "<table border='0' style='width:700px;'>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTitulo' colspan='2'>" . $tituloEmail . "</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classData' colspan='2'>" . $dataExtenso . "</td>";
$mensagemEmail[] = 	"</tr>";
if($solicitarOrcamento){
	$mensagemEmail[] = 	"<tr>";
	$mensagemEmail[] = 		"<td colspan='2'>";
	$mensagemEmail[] = 			"<table>";
	$mensagemEmail[] = 				"<tr>";
	$mensagemEmail[] = 					"<td class='classTD1'>#NEWLINE#<img src='".$imagemProduto."'>#NEWLINE#</td>";
	$mensagemEmail[] = 					"<td class='classNomeProduto' style='padding-left: 5px;'>
											$nomeProduto<br>
											<span class='classDescricaoProduto'>$descricaoAtributos</span>
										</td>";
	$mensagemEmail[] = 				"</tr>";
	$mensagemEmail[] = 			"</table>";
	$mensagemEmail[] = 		"</td>";
	$mensagemEmail[] = 	"</tr>";
	$mensagemEmail[] = 	"<tr>";
	$mensagemEmail[] = 		"<td colspan='2'>&nbsp;</td>";
	$mensagemEmail[] = 	"</tr>";
	$mensagemEmail[] =  "#NEWLINE#";
}
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Nome:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$nome&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Empresa:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$empresa&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Assunto:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$assunto&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Email:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$email&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Telefone:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$telefone&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] =  "#NEWLINE#";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td class='classTD1'>Mensagem:</td>";
$mensagemEmail[] = 		"<td class='classTD2'>$mensagem&nbsp;</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = "</table>";
$mensagemEmail[] = "<p>&nbsp;</p>";
$mensagemEmail[] = "<div style='width: 700px;'><hr class='divisorRodape' style='float: right;'></div>";
$mensagemEmail[] = "<table style='width:700px;'>";
$mensagemEmail[] = 	"<tr>";
$mensagemEmail[] = 		"<td width='550' class='classRodapeNomeLoja'>$nomeLoja</td>";
$mensagemEmail[] = 		"<td width='150'>#NEWLINE#<a href='".$urlWebsite."'><img src='".$urlImageWebsite."/../img/layout/email/logo_rodape_email.png' width='150' border='0'></a>#NEWLINE#</td>";
$mensagemEmail[] = 	"</tr>";
$mensagemEmail[] = "</table>";

$mensagemEmailHtml = '';
foreach($mensagemEmail as $indice => $linha){
	$mensagemEmailHtml .= trim($linha);
}
$mensagemEmailHtml = str_replace('#NEWLINE#', chr(10), $mensagemEmailHtml);

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=uft-8\r\n";
$headers .= "From: 'webmail'\r\n";

$enviou = false;
if($emailDestino != ''){
	$enviou = mail($emailDestino, "Contato Site - " . $nomeLoja, $mensagemEmailHtml, $headers);	
}

if ($enviou){
	$resetForm 		 = true;
	$mensagemRetorno = "Obrigado!<p style='margin-top: 20px;'>Sua mensagem foi enviada com sucesso.<br>Entraremos em contato em atÃ© 48 horas.";
}else {
	$resetForm 		 = false;
	$mensagemRetorno = "Desculpe!<p style='margin-top: 20px;'>Houve um erro no envio.<br>Tente novamente mais tarde!";
}

$retorno  = "<div class='mensagem_envio_email'>";
$retorno .= 	$mensagemRetorno;
$retorno .= 	"<p style='margin-top: 20px;'>";
$retorno .=		"<div class='underline' onclick='voltarMensagem(" . $resetForm . ");' style='width: 100%; font-size: 12px;'>"; 	
$retorno .= 		"<img src='".$urlImageWebsite."/../img/fale_conosco/back_arrow.png' width='20' height='20'>&nbsp;Voltar";
$retorno .=		"</div>";
$retorno .=		"</p>";
$retorno .=	"</div>";

echo $retorno;

?>
