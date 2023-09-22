<?php
function soma(){
	 return 4+3;
	 echo"<br>";

}
echo"A soma é:".soma();
echo"<br>";
$b=10;
$c=20;
if(soma()==7){
	echo"Primeira opção:A soma é".(soma()+$b);
}
else{echo "Segunda solução:A soma é".(soma()+$c);}
/*Fatal error: Uncaught Error: Call to undefined function A soma é
Este erro acima mostra que está faltando um ponto atras da variavel da função no caso acima se faltar um ponto atras do soma!*/
/*Acima temos um exemplo de como podemos usar uma função com condição este é uma das soluções para o caso!*/

?>