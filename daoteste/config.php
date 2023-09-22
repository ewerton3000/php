<?php
spl_autoload_register(function($class_name){

//$filename = $class_name.".php";->é para usar quando vc não separa os arquivos com pastas
	//O exemplo abaixo é usado quando temos arquivos separados em pastas 
$filename ="class".DIRECTORY_SEPARATOR. $class_name.".php";

if(file_exists(($filename))){
	require_once($filename);
}

});
?>