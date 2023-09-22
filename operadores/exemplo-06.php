<?php
$a = NULL;
$b = 8;
$c = 10;
//Neste caso os valores são ditos como null,8 ,10 so que na hora que voce executar só vai mostrar um valor que é o 8 porque se ele achar um valor ele indicará somente este valor como no caso abaixo le mostro u só o valor $b porque se ele achar um valor não mostrará os outros!
echo $a ?? $b ?? $c;
 ?>
