<?php
	$Funcionario[] = array (0=>"João Paulo ",1=>"4000",2=>"550");
	$Funcionario[] = array (0=>"Andréa Soares",1=>"2820",2=>"420");
	$Funcionario[] = array (0=>"Vinicius Almeida",1=>"1500",2=>"126");
	$Funcionario[] = array (0=>"Francisco Sampaio",1=>"3426",2=>"510");
	
	for($indice=0; $indice < sizeof($funcionario); $indice++) {
		
		$nome = $funcionario[$indice][0];
		$salario = $funcionario[$indice][1];
		$desconto = $funcionario[$indice][2];
		#calculo liquido
		$liquido = $salario - $desconto ;
	
    echo "$nome - $salario - $desconto - $liquido <br>";
	$valor1= $valor1 + $salario ;
	$valor2= $valor2 + $desconto ;
	$valor3 = $valor3 + $liquido ;
	}
echo "Totais - $valor1 - $valor2 - $valor3" ;


?>