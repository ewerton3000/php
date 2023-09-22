<?php
$dt = new dateTime();

$periodo = new dateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo"<br>";

echo $dt->format("d/m/Y  H:i:s");
/*new = instancia uma classe ou seja ele puxa as informações da classe para uma variavel!
O format ele funciona exetamente igual a função date
exemplo:echo$dt->format("d/m/Y");*/

/*add = É um metodo que serve para adicionar uma data,subtrair uma data exemplo:
$dt->add($variavel) 
OBS:No caso do add acima ele puxa a variavel que serviu para instanciar o metodo usado e utiliza em cima da data anterior avançando 15 dias!;
dateInterval =É um metodo que serve para mostrar uma data mais a frente ou uma data anterior!
*/
?>
