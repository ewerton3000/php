<?php
spl_autoload_register(function($class_name){

//Redirecionando para carrgar as classes
$filename ="class".DIRECTORY_SEPARATOR.$class_name.".php";

//Se o arquivo existir ele fará o require_once dele
if (file_exists(($filename))) {
	require_once($filename);
	
}
});
?>