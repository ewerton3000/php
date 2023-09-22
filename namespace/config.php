<?php
spl_autoload_register(function($nameclass){
	//var_dump($nameclass);
	//Criando um atributo de diretório de classes
$dirClass = "class"	;
//$filename:Traduzindo pode se dizer que filename é um nome de um arquivo mas é usado para dizer o caminho do arquivo inclusive suas pastas(como o path ou src do html)
$filename ="$dirClass".DIRECTORY_SEPARATOR. $nameclass. ".php";
//OBS:Quando este caminho termina com .php($filename ="$dirClass".DIRECTORY_SEPARATOR. $nameclass. ".php";)significa que a extensão do arquivo será de php.
if(file_exists($filename)){
require_once($filename);

}


})
?>
