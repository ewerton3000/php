<?php


require_once("funcoes_desconto.php");//Chamando o arquivo funcoes_desconto ele irá a função deste arquivo pra cá e exibirá na tela

$valor_total = 800;
$desconto = 10;

$valor_total_com_desconto = calcula_desconto($valor_total, $desconto);

?>
<!--Exibindo o valor com  o php abrindo no meio de um html simples(sé e que pode se chamar html isso né rs)-->
Valor Total : R$<?php echo $valor_total ?><br>
Valor Desconto: <?php echo $desconto ?>%<br> 
Valor total com desconto: R$ <?php  echo $valor_total_com_desconto ?>