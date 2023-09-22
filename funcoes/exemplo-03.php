<?php

function ola($texto="Mundo",$periodo="Bom,dia"){
	echo"ola $texto! $periodo<br>";
}
echo ola("","Bom dia");
echo ola("","Boa noite");
echo ola("Glaucio","Boa tarde");
echo ola("joão");
//Parametro é uma variavel dentro do function(pode funcionar em outras funções e outras aplicações)que usa um nome com cifrão $nome colocamos um valor dentro dele e usamos dentro da function para chamar o seu valor exemplo:
//function ola($texto="mundo"){
//	echo"ola $texto!<br>";
//}
//echo ola();
//echo ola("");
//echo ola("Glaucio");
//echo ola("joão");
//No exemplo abaixo temos dois parametros usados e o segundo será usado em todos os echo.exemplo:
	//echo"ola $texto! $periodo<br>";
/*
echo ola();
echo ola("");
echo ola("Glaucio");
echo ola("joão");*/
/*OBS:Lembre parametros que não tem valor padrão coloque sempre a esquerda(o primeiro parametro)
*/
?>