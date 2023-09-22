<?php

/*Entrar com nome, sexo e idade de uma 
pessoa. Se a pessoa for do sexo feminino e 
tiver menos que 25 anos, imprimir nome e a 
a mensagem: ACEITA. Caso contrário, 
imprimir nome e a mensagem: NÃO ACEITA
*/
$nome="Julia";
$sexo="masculino";
$idade=18;

if ($idade < 25 && $sexo="feminino") {
	Echo" Resultado:Aceito";
	echo"<br>";
	echo"Nome :".$nome.",Sexo :".$sexo.",Idade :".$idade;
}
elseif($idade >= 40 && $sexo= "masculino"){
echo"Vc vai ter que fazer o exame de prostata !";
}
elseif($idade ==18 && $sexo="masculino" ){
	echo"Vc já pode fazer a auto escola";
}
else{
	echo " Resultado:Não Aceito";
}
?>