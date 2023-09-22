<?php
interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}
Abstract class Automovel implements Veiculo{
	public function acelerar($velocidade)
	{
		echo"O veiculo acelerou até ". $velocidade . "km/h";
	}
	public function freiar($velocidade)
	{
		echo "O veículo frenou até ". $velocidade . "km/h";

	}
	public function trocarMarcha($marcha)
	{
		echo"O veículo engatou a marcha" . $marcha;
	}

}

class DelRey extends Automovel{

	public function empurrar(){


	}
}
//$carro =new Automovel();
//=Teste este codigo no lugar do exemplo abaixo e veja a diferença das classes!
//No caso uma classe  vai herdar de uma classe abstrata,mas uma classe pode implementar varias interfaces!
$carro =new DelRey();
$carro->acelerar(200)//Número da velocidade (no caso dentro do parenteses(200));
?>