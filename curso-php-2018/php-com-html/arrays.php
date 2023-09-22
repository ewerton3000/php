<?php
//array

/*$mensagens_divertidas[1] = 'Estou fazendo as contas aqui e este mês não tem jeito, vou ter que ganhar na loteria.<br>';
$mensagens_divertidas[2] ='As 3 coisas qua as mulheres mais gostam de ouvir :Eu te amo,50% de desconto e como você emagreceu <br>';
$mensagens_divertidas[3] ='Cara feia pra min é espelho <br>';
$mensagens_divertidas[4] = 'Estou tão carente que o churrasqueiro chega e diz:"Coração?" e eu respondo:"Oque foi amor?"<br>';
$mensagens_divertidas[5]= 'O casamento é um relacionamento a dois ,no qual uma das pessoas está sempre certa e a outra é o marido <br>';
*/
/*
Abaixo não tem como mostra o array transformando em string

echo $mensagens_divertidas;//O echo só sera impresso se aponta qual é a posição do array ($mensagens_divertidas[1]);
print $mensagens divertidas;O print só sera impresso se aponta qual é a posição do array ($mensagens_divertidas[1]);

os tipos de impressão a serem usados são var_dump e print_r

var_dump($variavel-de-array);
print_r($variavel-de-array);*/

/*var_dump($mensagens_divertidas);
echo'<br/>';
print_r($mensagens_divertidas);

echo'<br>';
//Apenas o array 3 será imprimido
echo $mensagens_divertidas[3];
echo'<br/>';
*/

//Os arrays tbm podem ter suas posições como alfa númericos e textuais
/*$mensagens_divertidas['a'] = 'Estou fazendo as contas aqui e este mês não tem jeito, vou ter que ganhar na loteria.<br>';
$mensagens_divertidas['b'] ='As 3 coisas qua as mulheres mais gostam de ouvir :Eu te amo,50% de desconto e como você emagreceu <br>';

echo $mensagens_divertidas['b'];
*/
//Passando os valores por parametro
$mensagens_divertidas = array(
'a' =>'Estou fazendo as contas aqui e este mês não tem jeito, vou ter que ganhar na loteria.<br>',
'b' => 'As 3 coisas qua as mulheres mais gostam de ouvir :Eu te amo,50% de desconto e como você emagreceu <br>',
'c' => 'Cara feia pra min é espelho <br>',
'd' => 'Estou tão carente que o churrasqueiro chega e diz:"Coração?" e eu respondo:"Oque foi amor?"<br>',
'e' =>  'O casamento é um relacionamento a dois ,no qual uma das pessoas está sempre certa e a outra é o marido <br>');
var_dump($mensagens_divertidas);

//usando números booleanos e valores fracionados e caracteres
$teste= 'teste com varivavel';
$numeros= array(
'a' =>2,
'b' =>true,
'c' =>7.15,
'd' =>$teste);
var_dump($numeros);
?>