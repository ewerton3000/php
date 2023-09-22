<?php
/*Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/

$valor=0;
$resultado="";
echo"valor escolhido = ".$valor;
if($valor>0){
	echo$resultado."<br>valor positivo !<br>";
}
elseif($valor<0){
	echo$resultado."<br>valor negativo";
}
else{
echo"<br>Valor igual a zero!";
}
echo$resultado;
?>