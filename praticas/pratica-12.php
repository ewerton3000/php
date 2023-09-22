<?php
/*Criar um algoritmos que entre com uma 
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO 
◦ SONHO SONHO SONHO 
◦ SONHO SONHO SONHO SONHO
*/


echo $palavra ="sonho  ";
echo"<br>";
$palavra= strtoupper($palavra);
echo $palavra."<br>";
echo $palavra,"  $palavra"."<br>";
echo $palavra,"  $palavra ","  $palavra "."<br>";
echo $palavra,"  $palavra ","  $palavra  " ,"  $palavra"."<br>";

?>
<?php
echo"<br><br>";
echo"Método com for!! <br>";
for ($palavra,$i=1; $palavra=strtoupper($palavra) ; $i++) { 
	echo$palavra;
	if ($i==1) {
    echo"<br>";
	
}
if ($i==3) {
    echo"<br>";
	
}
elseif ($i==6) {
	echo"<br>";
}
	
	elseif ($i==10) {
		echo"<br>";
		break;
	}

}
?>
