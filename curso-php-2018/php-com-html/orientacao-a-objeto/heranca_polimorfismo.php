<?php

//Classe mãe ou superclasse
class Felino{
	var $mamifero = 'sim';

	function correr(){
		echo 'corre como felino';

	}

}

//Classe filha ou subclasse
class Chita extends Felino{

	//Polimorfismo É vc usar o mesmo método (ou variavel ou sei lá rs) e sobrescrever o método

	function correr(){

		echo'Correr como chita 100KM/H';
	}
}

$chita = new Chita();//Chamando a classe Chita
echo $chita->mamifero.'<br>';
$chita->correr();//Chamando o método correr
?>