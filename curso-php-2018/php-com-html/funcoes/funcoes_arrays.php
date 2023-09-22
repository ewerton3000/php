<?php
//Função is_array Ela verifica se uma variavel é um array no caso ele retorna true ou false

/*
$array = array('Notebook','teclado');
$retorno = is_array($array);

//Se a variavel $retorno tiver array é 
if ($retorno ) {
	echo"Verdadeiro";
}
else{
	echo"Falso";
}
*/

//Função in_array  Esta função procura um array que está na variavel exemplo: $array =array('bola','campo') in_array('campo',$array);
/*$array = array('mac','linux','Windows');
$retorno = in_array('solar',$array);

//Se a variavel $retorno tiver array é 
if ($retorno ) {
	echo"Verdadeiro";
}
else{
	echo"Falso";
}
*/
//array_keys É uma função que serve para pegar apenas as chaves de um array 
//var_export É uma função que exibe os valores de arrays
/*
$produtos = array(10=>'Notebook' , 11=>'Teclado');
$chaves_array = array_keys($produtos);

var_export($chaves_array);//Aqui os valores 10,11 ficaram em 10=0 11=1 como valores iniciais de um array
*/
//sort ´E uma função usada para uma ordenação de um array ele segue a ordem alfabetica ou seja a primeira letra da chave array será a primeira exemplo: $array(0=>'melão',1=>'laranja');  saída 0=>laranja, 1=>melão
/*$frutas = array(0=>'Notebook',1=>'Computador',2=>'Excel');

$retorno = sort($frutas);

var_export($frutas);
*/

//asort É uma função que mantem a chave valor(0=>"nome de array") e troca de acordo com a orde alfabética da letra inicial de um array  (repare que ela é parecida com a função sort só que mante a chave )

/*$frutas = array(0=>'Banana',1=>'Amora',2=>'Carambola');

$retorno = asort($frutas);

var_export($frutas);
*/

//count É uma função que contas os elementos de um array
/*
$frutas = array(0=>'Banana',1=>'Amora',2=>'Carambola');

$itens_array = count( $frutas );
echo $itens_array;
*/

//array_merge É uma função que serve para fundir dois arrays
/*
$array1 = array('mac','linux');
$array2 = array('windows');
$array3 = array('solaris');
$novo_array = array_merge($array1,$array2,$array3);
var_export($novo_array);
*/

//explode É uma função que elimina partes de uma string e transforma e um array
$string = "20/10/2020";
$retorno = explode("/", $string);

echo"explode = ";
var_export($retorno);


//implode É uma função que junta elementos de um array em uma string ou seja ela insere um elemento na string

$nova_string = implode("-", $retorno);
echo "implode = ".$nova_string;
?>