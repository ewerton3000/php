<?php
$qualasuaidade=125;

$idadecrianca =12;
$idademaior =18;
$idademelhor =65;

//if else:O if else são uma estrutura condicional aonde usamos condições para mostrarmos um resultado,como se 2 < 1 se for(if) eu digo e menor e senao (else) digo que é maior usando o parantese()para usar uma condição e chaves {} para escrever a resposta da condição. 
//OBS:O if pode ser usado depois do elseif não interfere em nada a unica diferença é que quando usamos if depois de elseif ele mostrará o resultado do if se estiver de acordo coma a condiçao dele, so usa elseif ele só mostrará  apenas uma condição!

if ($qualasuaidade < $idadecrianca){
echo"criança";
}

//elseif:E parecido com if e else só que ele deve ser usado antes do else porque o else serve para terminar a condição ou seja a ultima opção.
elseif($qualasuaidade < $idademaior){
echo"adolescente";
}
elseif ($qualasuaidade < $idademelhor){
echo"Adulto";
}
else{
	echo"idoso";
}
echo"<br>";
//Abaixo temos uma condição rapida executando de outra maneira echo (maior > menor)= condição, a ?=então(se ou if) e :=(senao ou else)!
echo($qualasuaidade < $idademaior)?"Menor de idade":"Maior de idade";
?>
