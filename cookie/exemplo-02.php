<?php
//Agora nós usaremos um array super Global 

//Verificando se esse cookie ="NOME_DO_COOKIE" realmente existe
if(isset($_COOKIE["NOME_DO_COOKIE"])){

//Mostrar as informações contidas no array
// json_decode sem true:
//var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"],));
	$obj=json_decode($_COOKIE["NOME_DO_COOKIE"]);
	//Mostrar só o campo array empresa!
	echo $obj->empresa;

	
}
?>
