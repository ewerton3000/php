<?php
function __autoload($nomeClasse){
	//var_dump($nomeClasse):Dira de onde está puxando a informação(no caso nome da classe);
	//require_once("$nomeClasse.php");
	var_dump($nomeClasse);

}
$carro = new DelRey();

$carro->acelerar(80);
?>