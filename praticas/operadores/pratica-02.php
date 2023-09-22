<?php
//Operador identico:=== e parecido com == mais ele é mais direto sua ação 
$a=7;
$b=5;
$c=$a+$b;
if ($c===12) {
	echo "Meu numero favorito é ".$c."<br>";
	# code...
}
else{
	echo"Este não é o meu número favorito"."<br>";
}

//
$d=7;
$e=7;
if ($d===$e) {
	Echo"Os numeros são iguais"."<br>";
}

else{
	echo"Os números não são iguais"."<br>";
}

$f=6;
$j=6;
if ($f==$j) {
	echo"Os números $f e $j são iguais"."<br>";
}
else{
	echo"Os números $f e $j não não iguais!"."<br>";
}

//Como vc pode ver os resultados são parecidos mas lembre-se um é igual == e o outro é identico ===
?>