<?php
//error_reporting():Esta função permite que vc escreva o erro ou seja ele sobrescrever o error_reporting no php.ini
//No parentese está escrito E_ALL:todos os erros serão mostrados e(&:e)  não aparece o erro notice E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$nome = $_GET["nome"];

echo $nome;
//Como vc pode ver na hora de executar o arquivo não aparece nada mas se vc colocar o nome na url(ou link) do arquivo faça-o assim :http://127.0.0.1/erros/exemplo-02.php?nome= 
//depois do igual(=) vc coloca a informação escolhida que vc ativará o elemento get do codigo colocando no final(? nome) nome é o nome da variavel e vc insere dados pela url 
?>