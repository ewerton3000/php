<?php
$a = 10;
function trocavalor(&$b){
$b+=50;
return $b;	
}
echo trocavalor($a);
echo"<br>";
echo trocavalor($a);
echo"<br>";
echo $a;
/*&Passagem de parametro por referencia:Acima vemos duas variaveis $a=10 e $b=+=50 que está dentro do parametro da function e se voce usar o &(e-comercial) voce 
*/
?>