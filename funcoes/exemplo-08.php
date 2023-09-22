<?php
function soma(float ...$valores):float{
	return array_sum($valores);

}
echo var_dump(soma (2,2));
echo"<br>";
echo soma (25,33);
echo"<br>";
echo soma (1.5,3.2);
echo"<br>";
/*Acima o parametro soma usou os numeros inteiros dentro da função,para isso acontecer deve ser dito o tipo de numero(integer,float...) dentro do parentese antes do parametro da função exemplo:
function soma(tipo de numero ...$valores):float{
	return array_sum($valores);

}
echo var_dump(soma (2,2));
echo"<br>";
echo soma (25,33);
echo"<br>";
echo soma (1.5,3.2);
echo"<br>"; */

?>