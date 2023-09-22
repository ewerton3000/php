<?php
echo"Seu processador é:  " .$_POST["processador"]."<BR>";
//Verifica se o usuario escolheu os livros
if(isset($_POST["livros"]))
{
	echo"O(s) livro(s) que você deseja comprar:<br>";
	//Fazz loop para os livros 
	foreach($_POST["livros"]as $livro)
	{
		echo"- " . $livro . "<br>";

	}
}
else
{
	echo"Você não escolheu nenhum livro!";

}
?>