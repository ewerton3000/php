<?php

/*Veja na passagem de parametro por referencia se não tiver a variavel $salariofilho o script identifica ela como variavel indefinida(Troque a variavel pra uma das tres existentes e execcute para ver!)*/
//Este é um dos exemplos de usar uma condição dentro da função!
function condicao(&$salariofilho){
$salariopai=600;
$salariomae=800;
$salariofilho=700;
	
if($salariopai > $salariomae){
	echo"O pai e o que tem mais dinheiro";
}
elseif($salariomae > $salariopai){
	echo"<br>";
echo"A mãe esta ganhando bem ";
}
elseif($salariofilho > $salariopai ){
	echo"<br>";
echo"O filho esta ganhando bem. ";
}
elseif($salariofilho > $salariomae){
	echo"<br>";
echo"O filho está ganhado mais que a mae :D";
}
elseif($salariopai > $salariofilho){
	echo"<br>";
	echo"O pai esta ganhando do mais que o filho";
}
if($salariomae > $salariofilho){
	echo"<br>";
	echo"A mãe está ganhando mais que o filho!";

}
else{
	echo"são equivalentes";
}
}
echo condicao($salariofilho);


?>