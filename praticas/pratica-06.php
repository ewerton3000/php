<?php

/*Ler um número inteiro entre 1 e 12 e escrever 
o mês correspondente. Caso o número seja 
fora desse intervalo, informar que não existe 
mês com este número*/
$condicao=true;

while ($condicao) {
	$numero = rand(1,13);
	if ($numero ===1) {
		echo"$numero == mês de JANEIRO";
	}
	elseif ($numero ===2) {
		echo"$numero == mês de FEVEREIRO !";
	}
elseif ($numero ===3) {
		echo"$numero == mês de MARÇO ! ";
	}
	elseif ($numero ===4) {
		echo"$numero == mês de ABRIL ! ";
	}
	elseif ($numero === 5) {
		echo"$numero == mês de MAIO !";
	}
	elseif ($numero ===6) {
		echo"$numero == mês de JUNHO !";
	}
	elseif ($numero === 7) {
		echo"$numero == mês de JULHO !";
	}
	elseif ($numero ===8) {
		echo"$numero == mês de AGOSTO !";
	}
	elseif ($numero ===9) {
		echo"$numero == mês de SETEMBRO !";
	}
	elseif ($numero ===10) {
		echo"$numero == mês de OUTUBRO !";
	}
	elseif ($numero ===11) {
		echo"$numero == mês de NOVEMBRO !";
	}
	elseif ($numero ===12) {
		echo"$numero == mês de DEZEMBRO !";
	}
	else{
		echo"Sinto Muito números de 1 a 12 por favor";
	}
	break;
	echo $numero." ";
}
?>