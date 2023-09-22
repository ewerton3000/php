<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<!--Formas de inserir o php dentro do html-->
        
        <!--Tag padrão:-->
		<?php   
          echo 'teste tag padrão';
		 ?>

		<?='teste de impressão'?>
		<?
         echo 'Teste tag curta';
		?>


		<!--Este método abaixo foi depreciado na versão do php 7 -->
		<%
         echo 'Asp tag';
		%>

		
	</body>
</html>

