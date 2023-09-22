<?php
//ATENÇÃO O TIPO DE ENDEREÇO QUE ESTÁ SENDO USADO TBM NESTE AQRUIVO É:meusite.com.br ou 127.0.0.1/website/
require_once("vendor/autoload.php");

$app = new \Slim\Slim();
//Criando a rota pela variavel $app

//Criando uma rota caso a pessoa não escreva nenhum endereço de site
$app->get('/',function(){
	//Mensagem que será exibida!
	//echo "Home Page";
echo json_encode(array(
	'date'=>date("Y-m-d H:i:s")
));
});
//A rota será direcionada neste ponto abaixo com  o get para enviar os dados que enviará pelo '/Hello/:name'  e uma função com parâmetro $name e usa o echo para mostra a saida do $name
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
//$app->run()É usado para finalizar o $app e executa-lo!


$app->run();

?>