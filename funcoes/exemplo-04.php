<?php
function ola(){
	$argumentos =func_get_args();
	return $argumentos;
}
var_dump (ola("Bom dia",10));
/*A função func_gets_args pode ser usado  para mostrar o  valor da function em array e para ser mostrado é obrigatório usar o var_dump desta maneira:
var_dump (ola("Bom dia",10)); 
Isso deve ser usado no lugar do echo senão não será mostrado o valor da fuction em array!exemplo:
function ola(){
	$argumentos =func_get_args();
	return $argumentos;
}
=>var_dump (ola("Bom dia",10));
*/

?>