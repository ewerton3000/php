<?php
class Pessoa {
	public $nome = "Ramus Lerdorf";
	protected $idade = 48;
	private $senha ="123456";
	public function verDados(){
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}

}
$objeto = new Pessoa();
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";
$objeto->verDados();
//OBS:Se vc usar o atributo idade para ser mostrado irá acontecer um erro fatal dentro do script porque ele é um atributo privado!
//A diferença entre private e o protected é que o private ele não pode ser mostrado fora da classe dele.
/*
Public:todo mundo vê(ele não tem limites para classe)!
privado:ninguem vê só e mostrado quando é chamada com um método criado(como no exemplo acima) e só pode ser usado na mesma classe!
protected=(Ele pode ficar na mesma classe e classe extendida) um atributo protegido!
private*/
?> > 