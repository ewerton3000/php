<?php
/*Interface:Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.

Interfaces são definidas da mesma forma que classes, mas com a palavra-chave interface substituindo class e com nenhum dos métodos tendo seu conteúdo definido.

Todos os métodos declarados em uma interface devem ser públicos, essa é a natureza de uma interface.
exemplo:
interface Pessoa{
	
}
*/
interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}
class Civic implements Veiculo{
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
$carro = new Civic();
$carro->trocarMarcha(1)//Número de marchas(no caso dentro do parentese(1)!);
?>