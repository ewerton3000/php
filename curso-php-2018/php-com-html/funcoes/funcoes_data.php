<?php
//date   Y=2010 y=10   D=segunda feira d=8(dia do mes)  M=setembro m=9(numero do mês) H=00:00 até 23:59 h=00:00 até 12:00
echo $data = date("Y/m/d H:i:s");



//strtotime
$data_inicial = '2015-04-02';
$data_final = '2015-04-03';

echo"<br>";
$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;

$diaSegundos = 24*60*60;
$diferenca_dias = $diferenca_times / $diaSegundos;


echo $time_inicial;
echo"<br>";
echo $time_final;
echo"<br>";
echo"$diferenca_times";
echo"<br>";
echo $diaSegundos;
echo"<br>";
echo $diferenca_dias;
?>