<?php
$frase = "A repetição e a mãe da retenção.";
//strpos:É uma função que mostra quantos caracteres são necessários para chegar a uma palavra chave dentro do parentese no caso abaixo $q=strpos($frase,"mãe"); no caso faltará do 0 até 18 ára chegar na letra 18 para chegar na palavra mãe.
$palavra ="mãe";
$q=strpos($frase,$palavra);
//substr:É uma função que mostra uma parte de palavra ou frase até um número certo de strings no exemplo abaixo
$texto = substr($frase, 0, $q);
var_dump($q);
echo"<br>";
var_dump($texto);
echo"<br>";
//strlen:É uma função que mostra a frase ou palavras da string 8 pra frente pro exemplo: 
//$texto2=substr($frase,$q +strlen($palavra,strlen($frase));
// obs:nisso a função precisa ser dita duas vezes colocando a variavel da frase inteira para mostra-la por completo.
// neste caso eu estou puxando a parte da frase que esta com a palavra mãe em diante ou seja só essa parte da frase até o final vai aparecer.
$texto2 = substr($frase,$q +strlen($palavra),strlen($frase));
echo"<br>";
var_dump($texto2);
?>