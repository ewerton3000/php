<?php
function soma(int ...$valores){
	return array_sum($valores);

}
echo soma (2,2);
echo"<br>";
echo soma (25,33);
echo"<br>";
echo soma (1.5,3.2);
echo"<br>";
/*Na função acima o tipo de valor com int(inteiro) ele pode ser dito por todos com o simbolo de tres pontos(...)isso se chama: declaração do tipo escalares! que ele conta todos os numeros forem do mesmo tipo.*/
?>