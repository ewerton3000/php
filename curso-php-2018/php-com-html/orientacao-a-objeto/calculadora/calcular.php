<?php

//Requer a classe do arquivo calculadora.php
require_once 'classes/Calculadora.php';

//Abaixo usando o método post repare que ele pega os valores do name no arquivo index.php para corresponder os valores digitados
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
echo $operacao = $_POST['operacao'];

$calculadora = new Calculadora();

//Setando os valores
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ($operacao) {//Aqui a escolha será feita pelo value das opções escolhidas
	case 'somar':
		$calculadora->somar();
		break;
	
case'subtrair':
$calculadora->subtrair();
break;

case 'multiplicar':
$calculadora->multiplicar();
break;

case'dividir':
$calculadora->dividir();
break;


	
}


echo $calculadora->getTotal();
?>