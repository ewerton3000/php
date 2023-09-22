<?php
class Carro{
	public $nome;
	public $placa;
	public $modelo;
	private $codigo;


	public function getnome(){
		return $this->nome;
	}
	public function setnome($nome){
		return $this->nome=$nome;
	}
	public function getplaca(){
		return $this->placa;
	}
	public function setplaca($placa){
		return $this->placa=$placa;
	}
	public function getmodelo(){
		return $this->modelo;

	}
	public function setmodelo($modelo){
		return $this->modelo=$modelo;
	}
	public function getcodigo(){
		return $this->codigo;
	}
	public function setcodigo($codigo){
		return $this->codigo=$codigo;
	}
	public function exibir(){
		return array(
		"modelo"=>$this->getmodelo(),
		"placa"=>$this->getplaca(),
		"nome"=>$this->getnome(),
		"codigo"=>$this->getcodigo()
);


	}
	


}
$carro = new Carro();
	$carro->setnome("GOL 2021");
	$carro->setcodigo("85416843681");
	$carro->setplaca("kwg892");
	$carro->setmodelo("Modelo = Corsa conversivel!");
print_r($carro->exibir());


?>