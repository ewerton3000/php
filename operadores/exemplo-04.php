<?php
$a = 55.0;
$b = 55;
//Neste caso usamo os simbolos de maior > e menor < no var_dump para descobrir quem é o maior ou menor numero e na hora que executar ele mostrará se é true(verdadeiro) ou false(falso).
var_dump($a > $b);
echo"<br>";
var_dump($a < $b);
echo"<br>";
//No exemplo abaixo veremos que a variavel $a e a $b terão o mesmo valor porque $a recebe $b ou seja ele recebeu o valor de $b perdendo o seu valor anterior isso se chama atribuição usando o simbolo =.
//var_dump($a = $b);
echo"<br>";
//Abaixo temos o $a == $b neste operador ele esta igualando os valores se 10 == 9 o var_dump mostrará true ou false o operador igual é representado pelo simbolo ==.
//Obs:No caso de usar == voce compara os tipos de variaveis e se voce usar === vai comparar o valor e o tipo de variavel exmeplo abaixo.
var_dump($a == $b);
echo("<br>");

var_dump($a === $b);

echo"<br>";
//Abaixo temos o tipo diferente com o simbolo !=
var_dump($a != $b);
echo"<br>";
//Abaixo temos o tipo diferente que validar o tipo e o valor da variavel com o simbolo  !== 
var_dump($a !== $b);

?>