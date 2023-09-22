<?php
//for:É uma estrutura de repetição criada para fazer um loop de 1 até o infinito evitando do programmador digitar cem vezes o texto ficando mais pratico exemplo: for ($i =0; $i <10 ; $i++){echo"$i"."<br>";} o esquema é for<= inicio do laço,($o=0;)<=condição ;<=finaliza uma condição e pode fazer outra condição em seguida na ultima não precisa usar ponto e virgula.Setiver duvida veja o exemplo abaixo.
for($i = 0;  $i < 1000; $i+=5){
	if($i >= 200 && $i <= 800) continue;
	if($i === 900) break;
	echo $i . "<br>";
}
?>