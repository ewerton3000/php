<?php
for($i=1,$m=0; $i<11;$m++ ){
	if($m==11){$i++;
	$m=0;}
	if($i==11)break;
	echo"$i*$m =".$i*$m."<br>";

}
//Lição das tentativas:A multiplicação até 10 funcionou por causa da segunda condição do for pq está >11 e no if nao adianta colocar ==10 pq ele vai até o 9 ou seja ele diminuir duas vezes em vez de igualar e o if foi obrigatorio ter parenteses pq não executava como desejado de 1 ate 10!
?> 