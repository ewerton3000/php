<?php
var_dump("funcionando!");
$opcao = 1;
$resultado;
function caso($a,$b){
	return;
if($opcao==1){
	
	echo"soma!";
	$resultado = $a + $b;
	return $resultado;

}
elseif($opcao==2){
	echo"subtração!";
	$resultado=$a - $b;
	echo $resultado;
}
    elseif($opcao==3){
	echo"multiplicação";
	$resultado=$a * $b;
	echo $resultado;
}
	elseif($opcao==4){
	echo"divisão!";
	$resultado=$a / $b;
	echo $resultado;
}
	
	else{
	echo"invalido!";
}
}



?>