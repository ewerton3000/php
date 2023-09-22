<?php
//Estrutura de repetição

/* ESQUEMA

do{
	//código
}while(condição);
*/

$num = 1;
/*
do {
echo"teste: ".$num;
$num = $num + 1;

//Tbm os comandos "break;" e "continue;" neste do while
}while($num < 10);//Aqui é a condição igual no while 
*/

$num2 = 11;
do {
echo"teste: ".$num2;
$num2 = $num2 + 1;

//Tbm os comandos "break;" e "continue;" neste do while
}while($num2 < 10);//Se num for maior que 10 ele imprime o número


//A diferença entre o while e o do while é que a condição do do-while é feita depois de ter o código executado e o while é ao contrario só que tem mais controle

?>