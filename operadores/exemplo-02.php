<?php
//Os operadores  + - / * podem ser usados no php no caso no exemplo abaixo voce usa o += que vai ser somado como o valor anterior da variavel assim podendo usar os outros operadores -= /= *=.
$valortotal = 0;
$valortotal +=100;
$valortotal +=25;
//$valortotal -=10;
//Neste caso se quiser fazer uma porcentagem voce pode usar *= .1 no caso seria 10% e .9 é 90%.
$valortotal *= .9;



echo $valortotal;
 ?>
 