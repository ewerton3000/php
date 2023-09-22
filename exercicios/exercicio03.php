<?php
//3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1Saída: 6

$num = 8;

  if($num > 0){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      $valor = $valor * $i;
    }
  }else{
    $valor = 0;
  }

  echo "!{$num} = {$valor}";N

?>