<?php
//variaveis pré definidas são variavais pre definidas do php que ja vem com alguns recursos,então algumas dessas variaveis elas vão desde informações externas até informações do ambiente.
//informações externas:São informações que o usuario forma como por exemplo no formulario,então o usuario prencheu o formulario e enviou pro php e temos do dollar_post e o dollar_get que são variaveis pré definidas que recuperam as informações de um formulario.
//No exemplo abaixo quando executar o codigo no navegador ele dará como nulo(null) e para mostrar o valor dentro do get usaremos na barra de endereço usando a ? no final(http://localhost/variaveis/exemplo-04.php?) depois voce pode inserir valores colocando a do $_GET e 123 por exemplo  (http://localhost/variaveis/exemplo-04.php?a=123) mostrando outro resultado!
$nome = (int) $_GET["a"];

//var_dump($nome);
//OBS:Atenção o $_SERVER e o ["REMOTE_ADDR"] é obrigatório serem letras maiusculas!
//OBS: O $serve ele pega informações do ambiente não só do servidor e o ambiente uqe nós entedemos é o usuario e o servidor que aonde está o seu site então see voce quiser o nome do arquivo na SCRIPT_NAME para saber qual pagina que ele está entrando na data e hora ou seja um log!
$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
?>
