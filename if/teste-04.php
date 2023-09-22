<?php
$num1=55;
$num2=5;
$opção=2;
$num3;
if($opção==1){
	echo"A soma de  ".$num1." com ".$num2."<br>";
$num3=$num1 + $num2;
echo"O resultado é =  ".$num3;
}
if($opção==2){
	echo"A subtração de  ".$num1." por ".$num2."<br>";
$num3=$num1 - $num2;
echo"O resultado é =  ".$num3;
}
if($opção==3){
	echo"A multiplicação de  ".$num1." por ".$num2."<br>";
$num3=$num1 * $num2;
echo"O resultado da é = ".$num3;
}
if($opção==4){
	echo"A divisão de ".$num1." por ".$num2."<br>";
$num3=$num1 / $num2;
echo"O resultado é =  ".$num3;
}


?>