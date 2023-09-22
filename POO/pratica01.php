<?php
Class Pessoa{
	public $cpf;
	public $nome;
	public $conta;

	public function __construct($a,$b,$c){
    $this->cpf=$a;
    $this->nome=$b;
    $this->conta=$c;

	}
	public function __toString(){
		return $this->cpf.",".$this->nome.",".$this->conta;

	}
	

}
$pessoa = new Pessoa("CPF: 245.878.924-52 <br>","NOME : Ademar Silva Freitas <br>","CONTA : 00524-8");

	echo $pessoa;
?>