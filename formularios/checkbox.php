<?php
//Verifica se usuario escolhei algum número
if(isset($_POST["numeros"]))
{
	echo"Os números de sua preferência são:<BR>";
	//Faz loop pelo array dos números
	foreach($_POST["numeros"] as $numero)
	{
		echo"" .$numero ."<BR>";

	}
}
elseif($numero==30){
	echo"Você não escolheu meu número preferido!<br>";

}
else
{
	echo"VocÊ não escolheu nenhum numero!";
}
//Verifica se o usuário quer receber newssletter
if(isset($_POST["news"]))
{
	echo"Você deseja receber as novidades por email!";
}
else{
	echo"Você não quer receber novidades por email...";
}

?>