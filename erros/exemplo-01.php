<?php
//Criando uma função chamada erro_handler
//criando os parametros
function error_handler($code,$message,$file,$line){
	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"line"=>$line,
		"file"=>$file

	));

}
//Usando a função set_error_handler para inserir a função nomeada(function)error_handler
set_error_handler("error_handler");

//Forçando o erro no php  com 100/0
echo 100/0;
?>