<?php

/* edaz.venda.atacado.tpl */
class __TwigTemplate_ca2e233c403ca156e46bf137c41eee75 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div id=\"wrapperTelaAdminDiv\">
\t<form name=\"formVendaAtacadoEdaz\" method=\"POST\">
\t\t<div class=\"tituloAdminFundo\">
\t\t\t<div class=\"novaLinha Heading1\">
\t\t\t\t";
        // line 5
        echo getLang("ConfigVendaAtacado");
        echo "\t\t\t</div>
\t\t\t<div class=\"novaLinha Intro\">
\t\t\t\t";
        // line 8
        echo getLang("ConfigVendaAtacadoHelp");
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"marginVertical20\">
\t\t\t<div class=\"novaLinha\" style=\"margin-bottom: 15px;\">
\t\t\t\t<input type=\"button\" class=\"submit\" value=\"Salvar\" onclick=\"salvarFormulario('save');\">
\t\t\t\t<input type=\"button\" class=\"submit\" value=\"Cancelar\" onclick=\"salvarFormulario('cancel');\">
\t\t\t</div>
\t\t\t<div class=\"novaLinha\">
\t\t\t\t<label class=\"width310\">Habilitar Vendas por Atacado?</label>
\t\t\t\t<input type=\"checkbox\" name=\"habilitar_modulo\" ";
        // line 19
        echo twig_safe_filter((isset($context['habilitar_modulo']) ? $context['habilitar_modulo'] : null));
        echo ">
\t\t\t</div>
\t\t\t<div class=\"camposVendaAtacado\" style=\"display: ";
        // line 21
        echo twig_safe_filter((isset($context['ModuloAtacadoCamposDisplay']) ? $context['ModuloAtacadoCamposDisplay'] : null));
        echo ";\">
\t\t\t\t<div class=\"novaLinha\">
\t\t\t\t\t<label class=\"width310\">Ativar venda por atacado a partir de</label>
\t\t\t\t\t<input type=\"text\" name=\"qtde_produto_atacado\" size=\"5\" maxlength=\"3\" value=\"";
        // line 24
        echo twig_safe_filter((isset($context['qtde_produto_atacado']) ? $context['qtde_produto_atacado'] : null));
        echo "\" onkeypress=\"Formato('NUMEROS', event, this);\">
\t\t\t\t\t<label> produtos no carrinho</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"novaLinha\">
\t\t\t\t\t<label class=\"width310\">Porcentagem de desconto no valor do produto</label>
\t\t\t\t\t<input type=\"text\" name=\"porcentagem_desconto\" size=\"5\" maxlength=\"3\" value=\"";
        // line 29
        echo twig_safe_filter((isset($context['porcentagem_desconto']) ? $context['porcentagem_desconto'] : null));
        echo "\" onkeypress=\"Formato('NUMEROS', event, this);\">
\t\t\t\t\t<label> %</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
\t<div class=\"separadorHorizontal\"></div>
</div>

<script>
\t
\t\$('[name=habilitar_modulo]').click(function(){
\t\tif(\$(this).attr('checked')){
\t\t\t\$('.camposVendaAtacado').show();
\t\t}else{
\t\t\t\$('.camposVendaAtacado').hide();
\t\t}
\t});
\t
\tfunction salvarFormulario(acao){
\t\tvar form,
\t\t\taction,
\t\t\tvalida = true;
\t\t
\t\tform   = \$('[name=formVendaAtacadoEdaz]');
\t\t
\t\tif(acao == 'save'){
\t\t\taction = 'index.php?ToDo=saveConfigVendaAtacadoEdaz';
\t\t\tvalida = validaCampos();
\t\t\t
\t\t}else if(acao == 'cancel'){
\t\t\taction = 'index.php?ToDo=configVendaAtacadoEdaz';
\t\t}
\t\t
\t\tif(valida){
\t\t\t\$(form).attr('action', action);
\t\t\t\$(form).submit();
\t\t}
\t}
\t
\tfunction validaCampos(){
\t\tvar valida = true;
\t\t
\t\tif(\$('[name=habilitar_modulo]').attr('checked')){
\t\t\tif(\$('[name=qtde_produto_atacado]').val() == ''){
\t\t\t\talert('Informe a quantidade mínima de produtos comprados para ativar o preço de atacado');
\t\t\t\t\$('[name=qtde_produto_atacado]').focus();
\t\t\t\tvalida = false;
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('[name=porcentagem_desconto]').val() == ''){
\t\t\t\talert('Informe a porcentagem de desconto a ser aplicado aos produtos de atacado');
\t\t\t\t\$('[name=porcentagem_desconto]').focus();
\t\t\t\tvalida = false;
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('[name=porcentagem_desconto]').val() <= 0){
\t\t\t\talert('Informe uma porcentagem de desconto válida');
\t\t\t\t\$('[name=porcentagem_desconto]').focus();
\t\t\t\tvalida = false;
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('[name=porcentagem_desconto]').val() > 100){
\t\t\t\talert('A porcentagem não pode ser superior a 100%');
\t\t\t\t\$('[name=porcentagem_desconto]').focus();
\t\t\t\tvalida = false;
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\t
\t\treturn valida;
\t}
\t
</script>";
    }

}
