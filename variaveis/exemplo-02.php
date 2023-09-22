<?php
/* sou um comentario tbm prazer em conhece-lo me use tambem porque eu sou bem util
*/
//$anonascimento = 1990;
//$nomecompleto =" ";
//na linha de baixo temos uma variavel com numero no nome 
$nome1="joão";

$sobrenome="Rangel";

//Concatenação =é uma forma de voce juntar as variaveis dentro de outra variavel usando o ponto .(ponto final de frase)!exemplo abaixo! 
$nomecompleto =  $nome1 ." ". $sobrenome;
//OBS apos usar o ponto para dar espaço dos valores das variaveis voce pode usar as aspas " " e depois usar outro ponto .!

echo $nomecompleto;
exit;


echo "<br/>";

unset($nome1);
//O unset destroi a variavel escolhida apos ter ela ter sido criada!exemplo acima!!!!!!


if(isset($nome1)){
	echo $nome1;
}

?>