<?php
class Pessoa{//Criando uma classe
//Criando os atributos!
public $nome="Ewerton Da Silva Tota";
public $cor="Preto";
protected $senha="1234";
private $altura="1.80";

//Criando uma método!
public function mostrarDados(){
	echo $this->nome."<br/>";
	echo $this->cor."<br/>";
	echo $this->senha."</br/>";
	echo $this->altura."<br/>";
	//echo get_class($this) ."<br/>";
}

}
class Extra extends Pessoa{//Criando uma classe extendida!

public function mostrarDados(){
	echo get_class($this) ."<br/>";
	echo $this->nome."<br/>";
	echo $this->cor."<br/.>";
	echo $this->senha."<br/>";
	echo $this->altura."<br/>";


}	
}
//Lembrando que o atributo private não pode ser mostrado na classe Extra porque ela só pertence a classe(Explicação no exemplo-02.php).
$objeto = new Extra();
$objeto->mostrarDados();


?>