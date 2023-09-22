<?php
//Informações para conexão

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco ='frases';

$dsn ='mysql:host={$host};port=3306;dbname={$banco};charset=utf8';

try{
	//Conectando
	$pod = new PDO($dsn,$usuario , $senha);

}

catch(PDOException $e){

	//Se ocorrer algum erro na conexão
	die($e->getMessage());
}
?>