<?php
Class Pai{
	//criando as variaveis publicas
	public $cpf;
	public $nome;
	public $conta;
//Criando uma função construct
	public function __construct($a,$b,$c){
//Apontando as variavies com os parametros
    $this->cpf=$a;
    $this->nome=$b;
    $this->conta=$c;

	}
	//Criando uma funçaõ tostring
	public function __toString(){
		return $this->cpf.",".$this->nome.",".$this->conta;

	}
	
//Na hora dem mostrarmos as informações de duas classes pai e filha nunca deixe a instancia da classe pai antes da filha porque senão a classe pai vai deixar de existir e a informação da classe pai não será mostrada!
//Exemplo do erro:
	//$pai = new Pai("CPF: 245.878.924-52 <br>","NOME : Ademar Silva Freitas <br>","CONTA : 00524-8");
	//Apague a 46 e tire a tag de comentário da linha de cima e veja como acontece o erro!
}

//Criando uma classe filha
class Filha extends Pai{
	//Criando as variaveis publicas da classe
	//são as mesmas variaveis da classe pai mas elas não tem os das substituidos!
	public $cpf;
	public $nome;
	public $conta;

//criando a função construct
	public function __construct($a,$b,$c){
		//Apontando as variaveis para os parâmetros 
    $this->cpf=$a;
    $this->nome=$b;
    $this->conta=$c;

	}
	//criando a função to string
	public function __toString(){
		return $this->cpf.",".$this->nome.",".$this->conta;


}
}

//Criando a instacia da classe filha e usar os parametros($a,$b,$c)em sua respectiva ordem paraa ser mostrado na tela com a variavel $filha!

$filha = new Filha("<br>CPF: 274.156.724-12 <br>","NOME : Filomena Dos Santos <br>","CONTA : 00789-11");


//Criando a instacia da classe filha e usar os parametros($a,$b,$c)em sua respectiva ordem paraa ser mostrado na tela com a variavel $pai

$pai = new Pai("CPF: 245.878.924-52 <br>","NOME : Ademar Silva Freitas <br>","CONTA : 00524-8");

echo $pai;
echo $filha;

?>