<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Foreach utilizando $key</title>
</head>
<body>
<?php
/**PHP Foreach: utilizando o valor da chave
 Além da sintaxe básica, também possuímos outras formas de utilizar o PHP Foreach. Dentre elas, existe uma forma onde para cada valor do array, também podemos utilizar a chave dela para trabalhar o nosso código. Para isso basta usar a seguinte sintaxe:
foreach($variavel as $key => $value){
#codigo
}
*/
$cores =array("Azul","Amarelo","Vermelho","Rosa","Verde");
foreach ($cores as $key => $value) {
	echo"Minha cor indice ".$key."  é:   ".$value."</br>";
}


?>
</body>
</html>