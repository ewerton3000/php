<?php
//Multiplicação até 10 usando for!
// 
for($i=1,$m=1;$m<11;$m++){
;	echo"$i*$m =".$i * $m."<br>";
	if($m==10){
		$i++;
		$m=1;
		//abaixo o ultimo if foi de quando $i chegasse até 10($i==11 obs :não sei porque o ==10 vai até o 9 mas funcionou com ==11) ele dar break(descanso) para parar de incrementar a variavel
	if($i==11)break;
	
	echo"$i*$m =".$i * $m."<br>";
}
}
?>