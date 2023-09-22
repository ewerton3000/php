<?php

interface numero{
	public function num($a,$b);



}
Abstract class resul implements numero{
	public function num($a,$b)
	{
		echo"Os numeros escolhidos foram: ".$a."  e  ".$b;

	}
	
}
 public function soma($c)
	{

$c=$a+$b;
			echo"A soma entre os dois é ".$c;
}

class resu extends resul{
	

}
$resultado = new resu();
$resultado->num(10,12);
echo"<br>";
$resultado->soma($c);
