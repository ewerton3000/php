<?php
//Percorrendo os array om estruturas de repetição

$noticias = array();//Criando um array

$noticias[1]['titulo'] = 'título da noticia 1';
$noticias[1]['conteudo'] = 'conteudo dessa noticia 1';

$noticias[2]['titulo'] = 'título da noticia 2';
$noticias[2]['conteudo'] = 'conteudo dessa noticia 2 ';


$noticias[3]['titulo'] = 'título da noticia 3';
$noticias[3]['conteudo'] = 'conteudo dessa noticia 3';

$noticias[4]['titulo'] = 'título da noticia 4';
$noticias[4]['conteudo'] = 'conteudo dessa noticia 4';


//var_dump($noticias);

$idx = 1;
/*
while($idx <= 4){//Nesta condição se vc aumenta o número de 4 pra 5 vai ter que inserir mais um array acima na variavel $noticias.
	//Aqui a variavel $idx será incrementada pela soma da repetição($idx = $idx + 1;)
	echo $noticias[$idx]['titulo'];
	echo'<br>';
	echo $noticias[$idx]['conteudo'];
    echo'<br>';
	$idx = $idx + 1;
}
*/
/*
do{

	echo $noticias[$idx]['titulo'];
	echo'<br>';
	echo $noticias[$idx]['conteudo'];
    echo'<br>';
	$idx = $idx + 1;

}while($idx <= 4);
*/

for ($idx = 1; $idx <= 4 ; $idx = $idx + 1) { 
	echo $noticias[$idx]['titulo'];
	echo'<br>';
	echo $noticias[$idx]['conteudo'];
    echo'<br>';
	
}
?>