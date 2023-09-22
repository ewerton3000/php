<?php

//isset()->Está função serve para ver se a ação é dita como true ou false se for tru ela mostra o conteudo da variavel e se for false não mostra nada
$valor =  '';
if (isset($valor)) {
	echo"Variavel iniciada";
}
else{
	echo"Não há conteúdo na variavel";
}

//empty->É uma função que retorna true sempre que uma vriavel estiver vazia como nestes exemplos('',0,'0',false,null,array()) se a variavel não estiver vazia então ela será dada como false 
/*$valor ='jamilton';
if (empty($valor) ) {
	echo"Variavel vazia";
}
else{
	echo"Não é uma variavel vazia";
}
*/


//is_numeric() Esta função ela testa se a variavel é um número comun ou uma string numérica (ou seja ele aceita os números com aspas '450')
/*
$valor = 'texto';
if(is_numeric($valor) ){

	echo"Valor numero";
}
else{
	echo"Não é um valor numérico";
}
*/
?>