<?php
//do while:essa estrutura se chama:pelo menos faça uma vez mesmo a condição sendo falsa!OBS:Se voce usar ele com números ele precisa de um contador senão ele vira um loop infinito
$total =150;
$desconto =0.9;
do{
	$total *=$desconto;
}
while($total >100);
echo$total;
?>
