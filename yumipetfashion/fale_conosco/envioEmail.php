<?php

$nome 	    = (isset($_POST['nome']))       ? $_POST['nome']       : "";
$empresa    = (isset($_POST['empresa']))    ? $_POST['empresa']    : "";
$assunto    = (isset($_POST['assunto']))    ? $_POST['assunto']    : "";
$email 	    = (isset($_POST['email']))      ? $_POST['email']      : "";
$telefone   = (isset($_POST['telefone']))   ? $_POST['telefone']   : "";
$mensagem   = (isset($_POST['mensagem']))   ? $_POST['mensagem']   : "";
$urlWebsite = (isset($_POST['urlWebsite'])) ? $_POST['urlWebsite'] : "";

$stylecss  = "<style>";
$stylecss .= 	".classTD1{ width: 100px; height: 30px; font-family: Arial; font-size: 12px; color: #000000; font-weight: bold; text-transform: uppercase; }";
$stylecss .= 	".classTD2{ width: 600px; height: 30px; font-family: Arial; font-size: 12px; color: #000000; }";
$stylecss .= "</style>";

$mensagemEmail  = "";
$mensagemEmail .= $stylecss;
$mensagemEmail .= "<table border='0' style='width:700px;'>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Nome:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$nome&nbsp;</td>";
$mensagemEmail .= 	"</tr>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Empresa:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$empresa&nbsp;</td>";
$mensagemEmail .= 	"</tr>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Assunto:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$assunto&nbsp;</td>";
$mensagemEmail .= 	"</tr>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Email:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$email&nbsp;</td>";
$mensagemEmail .= 	"</tr>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Telefone:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$telefone&nbsp;</td>";
$mensagemEmail .= 	"</tr>";
$mensagemEmail .= 	"<tr>";
$mensagemEmail .= 		"<td class='classTD1'>Mensagem:</td>";
$mensagemEmail .= 		"<td class='classTD2'>$mensagem&nbsp;</td>";
$mensagemEmail .= 	"</tr>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: 'edazcommerce'\r\n";

$enviou = mail("atendimento@yumipetfashion.com.br", "Contato Site - Yumi Pet Fashion", "$mensagemEmail", $headers);

if ($enviou){
	$resetForm 		 = true;
	$mensagemRetorno = "Obrigado!<p style='margin-top: 20px;'>Sua mensagem foi enviada com sucesso.<br>Entraremos em contato em até 48 horas.";
}else {
	$resetForm 		 = false;
	$mensagemRetorno = "Desculpe!<p style='margin-top: 20px;'>Houve um erro no envio.<br>Tente novamente mais tarde!";
}

$retorno  = "<div class='mensagem_envio_email'>";
$retorno .= 	$mensagemRetorno;
$retorno .= 	"<p style='margin-top: 20px;'>";
$retorno .=		"<div class='underline' onclick='voltarMensagem(" . $resetForm . ");' style='width: 100%; font-size: 12px;'>"; 	
$retorno .= 		"<img src='".$urlWebsite."/templates/default/img/fale_conosco/back_arrow.png' width='20' height='20'>&nbsp;Voltar";
$retorno .=		"</div>";
$retorno .=		"</p>";
$retorno .=	"</div>";

echo $retorno;

?>
