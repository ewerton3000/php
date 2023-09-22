<?php
$pessoas = array();
//array push:Um tipo de função do array que cria um array e insere o tipo de informação que pode ser inserida exemplo:array_push($array,do tipo=array('nome'=>'thomas','idade'=>22)) 
array_push($pessoas,array(
	'nome'=>'joão',
	'idade'=>20
));
array_push($pessoas,array(
	'nome'=>'Glaucio',
	'idade'=>25
));
//Abaixo temos o print_r para mostra a informação do array mas se voce tentar mostrar duas informações dentro do mesmo ´print_r a execução da erro  e por isso e obrigatório ter só uma informação do array para ser mostrado ser for mostra outro faça como no exemplo abaixo!
print_r($pessoas[0]['nome']."<br>");
print_r($pessoas[0]['idade']);
?>