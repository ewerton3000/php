<?php
$pessoa= array(
'nome'=>'joão',
'idade'=>20
);
foreach($pessoa as &$value){
	if(gettype($value)==='integer') $value+=10;
	echo $value.'<br>';
}
print_r($pessoa);
/*Acima podemos ver que o & está puxando ovalor do array e está puxando o valor com o if e o gettype(que pega o tipo de valor desejado como está acima ele detecctou um valor integer)e o fez somar com  10 no $value+=10 ou seja o & fez com que o $value(que recebeu o valor de $pessoa)se transformar em valor de referencia e se estiver em duvida ainda retire o & de $value e veja o resultado! */
?>