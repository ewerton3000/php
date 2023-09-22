<?php
$salario=1300;
$salariobruto=15;
$funcionário="Ewerton";
$total;
$sal=1300;
if($salario==1300){
	$total=$salario*15/100;
}
else{
	echo"Seu salario não é o suficiente!";
}
echo"funcionário =".$funcionário."<br>";
echo"Seu salario e de =".$sal."por mes"."<br>";
echo"Seu salario bruto e de ".$total."<br>";
?>