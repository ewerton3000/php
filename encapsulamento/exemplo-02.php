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
/*Class extendida:As classes podem ser extentidas e aumentar o tamanho e informações delas com o comando class extends exemplo:
class Programador extends Pessoa{
}
No caso a classe Pessoa será a classe pai e a classe programador será a classe filha(Como vc criasse uma pasta dentro da outra).
*/
class Programador extends Pessoa{//extendendo a classe
public function verDados(){
/*echo get_class= É um comando que vc pode usar para ver de qual classse as informações ou atributos estão localizadas! exemplo:
echo get_class($this) ."<br/>";
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";
*/
//OBS o echo get_class($this); não pode ficar fora de um método(teste depois)!
	echo get_class($this) ."<br/>";
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}
$objeto = new Programador();
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";
$objeto->verDados();
//OBS:Se vc usar o atributo idade para ser mostrado irá acontecer um erro fatal dentro do script porque ele é um atributo privado!
//A diferença entre private e o protected é que o private ele não pode ser mostrado fora da classe dele.
/*
Public:todo mundo vê(ele não tem limites para classe)!
private:ninguem vê só e mostrado quando é chamada com um método criado(como no exemplo acima) e só pode ser usado na mesma classe!
protected=(Ele pode ficar na mesma classe e classe extendida) um atributo protegido!
*/
?> > 