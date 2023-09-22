<?php
class Documento{
	private $numero;

	public function getNumero(){
		return $this->numero;

	}
	public function setNumero($n)
	{

	$this->numero = $n;	

	}


}
//A herança é simplismente vc fazer uma extensão de classe para uma segunda classe ela se chamará: classe filha.A primeira classe será a classe pai com isso lembre-se a classe filha pede as coisas para o pai e o pai não pede as coisas para os seus filhos.
class CPF extends Documento{

	public function validar():bool
	{


		//Validadção do cpf
		return true;

	}
}
$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo"<br/>";
echo $doc->getNumero();
?>