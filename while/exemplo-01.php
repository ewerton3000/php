<?php
//while:essa estrutura se chama:Faça enquanto.ele permite que voce pegue informações do banco de dados
//rand:É uma função que mostra um resultado aleatorio como no exemplo abaixo nos temos rand(1,10)é igual a 1 até 10 e ele mostra qualquer numero dentro da condição.OBS:Se voce usar ele com números ele precisa de um contador senão ele vira um loop infinito
 $condicao =true;

 while($condicao){
$numero =rand(1, 10);
if($numero ===3){
	echo"TRÊS!!!";
	$condicao = false;
}
echo $numero . " ";
 }

 echo ""
 	?>
