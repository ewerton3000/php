<?php
/*Entrar com um número e informar se ele é 
divisível por 10, por 5, por 2 ou se não é 
divisível por nenhum destes*/
$a=2;
$c=1;





for ($b=5,$c=1;; $c++) { 

	echo"$b x $c = ".$f=$b*$c."<br>";
	if($c==10){break;}
	
	if($a==$f){
		$z=5;
		$d=5;
			$e=$a/$d;
		echo"Este número é divisivel por 5 A divisão $a/$d é igual a  $e";
		echo"<br>";
			
			
			echo"<br>";}
			else{
				$z=6;
			}
		

}



for ($b=10,$c=1;; $c++) { 

	echo"$b x $c = ".$f=$b*$c."<br>";
	if($c==10)break;
		


			elseif($a==$f){
				$t=10;
				$d=10;
			$e=$a/$d;
			echo"Este número é divisivel por 10 $a/$d é igual a  $e";
			echo"<br>";
		
		echo"<br>";
			}
			else{
				$t=9;
			}

}


	for ($b=2,$c=1;; $c++) { 

	echo"$b x $c = ".$f=$b*$c."<br>";
	if($c==10)break;
elseif($a==$f){
	$s=2;
	$d=2;
			$e=$a/$d;
		echo"Este número é divisivel por 2 $a/$d é igual a  $e";
		echo"<br>";
			
			}
		else{
			$s=3;
		}
			}
			if ($a=0) {
				echo"ok";
			}
			elseif($s==2){
				echo"Este número é divisivel por $s";
			}
			elseif($z==5){
			echo"Este número é divisivel por $z";	
			}
			elseif ($t==10) {
				echo"Este número é divisivel por $t";
			}
			else{
				echo"Este número não é divisivel por nenhuma das opções";
			}

			

?>