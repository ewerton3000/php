<?php
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
?>