<?php
require_once("vendor/autoload.php");

$app = new \Slim\Slim();
//Criando a rota pela variavel $app

//A rota será direcionada neste ponto abaixo com  o get para enviar os dados que enviará pelo '/Hello/:name'  e uma função com parâmetro $name e usa o echo para mostra a saida do $name
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
//$app->run()É usado para finalizar o $app e executa-lo!


$app->run();

?>