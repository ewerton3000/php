<?php
//Estrutura de repetição while
/* esquema
while(condicao){


}*/


$num = 1;                      
/*
//$num é menor que 10?
while($num < 10){
//Se sim executa a ação :ELe irá imprimir até chegar perto de 10(no caso 9)
	echo $num;
	echo "<br>";
   $num = $num +1;

}
echo"<br>";
*/

/*
//$num é menor que 10?
while($num < 10){
//Se sim executa a ação :ELe irá imprimir até chegar perto de 10(no caso 9)
	echo $num;
	echo "<br>";
   $num = $num +1;

//Se $num for igual a 5 ele para de somar
   
   if ($num == 5) {
   	Break;
   }
}
*/
echo"<br>";
//$num é menor que 10?
while($num < 10){

	
//Se $num for igual a 5 ele para de somar
    $num = $num +1;//Somando
   if ($num == 3) { antes de aparefcer o 1 (pq o 1 já soma antes de aparecer ai vem o 2)
   	continue;
   }

   echo $num;
	echo "<br>";
  

}



?>