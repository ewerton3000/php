<?php
//Polimorfismo= É ter o mesmo nome de métodos na classe pai e na classes filhas que fazem coisas distintas!
Abstract class Animal{
	public function falar(){
return "Som";
	}
	public function mover(){
		return 	"Anda";
	}
}
class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}
Class Gato extends Animal{

	public function falar(){
		echo"Mia";
	}
}
class Passaro extends Animal{
	public function falar(){
		echo"Canta"."<br/>";
	}
	public function mover(){
		echo"Voa e " .parent::mover()."<br/>";
		//O comando parent chama um método da classe Pai(Neste exemplo da classe animal)  
	}
}
$pluto = new Cachorro();
echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/>";

echo"--------------------------------<br/>";
$garfield = new Gato();
echo $garfield->falar()."<br/>";
echo $garfield->mover()."<br/>";

echo"--------------------------------<br/>";
$ave = new Passaro();
echo $ave->falar()."<br/>";
echo $ave->mover()."<br/>";

?>