<?php
class Curso{//Criando a Classe

	//Criando atributos
	public $tipo="Informatica";
	public $ano="2099";
	private $codigo="142568246";


//criando método
public function Verdados(){
	//criando atributos do método!
echo $this->tipo."<br/>";
echo $this->ano."<br/>";
echo $this->codigo."<br/>";

}//fechando o método

}//fechando a classe


Class Aluno extends Curso{//Criando uma classe extendida(Poliorfismo)

	//Criando os atributos
	Public $nome="Ewerton Da Silva Tota";
	Public $bairro="Deodoro";
	Public $genero="Masculino";
	Private $cpf="5181614646494";

//Criando o método
	public function Dados(){
		//Criando os atributos do método
		echo get_class($this)."<br/>";//Puxando informações da classe Curso(classe pai)
	    echo $this->tipo."<br/>";
        echo $this->ano."<br/>";
        echo $this->codigo."<br/>";
        echo $this->nome."<br/>";
        echo $this->bairro."<br/>";
        echo $this->genero."<br/>";
        echo $this->cpf."<br/>";        
        


	}//fechando o método


}
//mostrando os dados
$Aluno = new Aluno();//instanciando a classe
$curso = new Curso();//instanciando a classe
echo"Dados do Curso";
echo"<br/>";
echo $curso->Verdados();//Puxando os dados inseridos no método
echo"<br/>";
echo"====================================================";
echo"<br/>";
echo"Dados do Aluno" .$Aluno->Dados();//Puxando os dados inseridos no método
?>