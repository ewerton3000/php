<?php
function test($callback){
	//Processo lento
	$callback();

}
test(function(){
	echo"Terminou!";
});

//Funções anonimas:São funcões que podem ser usadas dentro de uma variavel em uma exucução de comando!
//OBS:Note que neste script a funçaõ anonima é usada como comando no qual a a chamou como test veja abaixo: 
/*test(function($nomedoparametro){
	echo"qualquer coisa";
});*/
?>
