<?php
//array bidimensional:São arrays que são controlados como filas exemplo $fruta[0] [1]="maçã";  $fruta[1][1]"melão"; aqui o esquema é $variavel [0]=fila [1]=posição do array! 
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo$carros[0][3]."<br>";
//echo end ou end:Essa função mostra a ultima array escrita na fila desejada exemplo echo end1($carros[1]);
echo end($carros[1]);
?>