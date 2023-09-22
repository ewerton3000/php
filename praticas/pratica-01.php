
<?php
/*Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5*/

$a = 8;
$b = 11;
$c = $a+$b;
if ($c>20) {
	echo"O número é maior que 20 então número $c será somado com número 8";
	echo"<br>";
    $d=8;
    $e= $c+$d;
    echo"<br>";
    echo"O resultado foi ".$e;

}
elseif($c==20){ 
	echo"O número $c é igual a 20 então ele será subtraido por 5";
	echo"<br>";
	$d=5;
    $e=$c-$d;
    echo"<br>";
    echo"O resultado é ".$e;

}
else{
	echo"O número $c é menor que 20 então ele será subtraido por 5";
	echo"<br>";
	$d=5;
    $e=$c-$d;
    echo"<br>";
    echo"O resultado é ".$e;
}
?>