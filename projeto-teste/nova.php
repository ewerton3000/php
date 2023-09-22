<?php
// Verificador de sessão
require "verifica.php";

// Verifica se usuário tem permissão para postar notícia
if($_SESSION["permissao"] !== "S")
{
    echo "Você não tem permissão para postar notícias!";
    exit;
}


// Se o script continuar aqui, é que o usuário tem permissão
// Então.. seu formulário de postagem abaixo
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registre seu Chamado</title>
<style type="text/css">
<!--
.style1 {
color: #FF0000;
font-size: x-small;
}
</style>
</head>
<body bgcolor="gray">
<form name="comentario" action="titulo.php" method="post">
<table align="center">
<tr>
<td>Titulo:</td>
      <td><select name="titulo" id="titulo">
        <option>Selecione...</option>
        <option value="Pc nao liga">PC nao liga</option>
        <option value="Windows com problema">Windows com problema</option>
        <option value="Problema na rede">Problema na rede</option>
        <option value="Configuracao de rede">Configuracao de rede</option>
        <option value="Rotear Modem">Rotear Modem</option>
        <option value="Fonte Queimada">Fonte Queimada</option>
        <option value="Instalacao de Programas">Instalacao de Programas</option>
        <option value="Instalacao de Pecas">Instalacao de Pecas</option>
        <option value="Instalacao de Jogos">Instalacao de Jogos</option>
        <option value="Gravacao de CDs e DVDs">Gravacao de CDs e DVDs</option>
        <option value="Outros">Outros</option>
          </select>
        <span class="style1">*</span></td>
</td>
</tr>
<tr>
<td><font size="2" color="#000000" face="comic sans ms">Detalhe do Chamado:</td>
<td>
<textarea id="conteudo" name="conteudo" rows=5 cols=20 wrap="off"></textarea>
</td>
</tr>
</table>
<div align="center"><input type="submit" value="Enviar"><input type="reset" value="Limpar">
</form>
</body>
</html>