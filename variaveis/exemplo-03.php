<?php
////tipos basicos
$nome="hcode";

$site = "www.hcode.com.br";

$ano= 1990;

$salario=5500 . 99;

$bloqueado = false;
//////////////////////////////////////////////////////////////////////////
//tipos de variaveis compostas
$frutas = array("abacaxi" , "laranja" , "manga" ,"banana");

echo $frutas [2];
echo"<br/>";
$nascimento = new datetime();
var_dump($nascimento);
///////////////////////////////////////////////////////////////
//tipos de variaveis especiais
$arquivo =fopen("esemplo-03.php","r");

//var_dump($arquivo);
$nulo =null;
//Nulo é uma variavel que  não existe e pode ser usada para anular o valor de uma variavel ou seja destrui-la!!!!
$vazio="";

?>