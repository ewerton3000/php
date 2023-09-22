<?php
class Cadastro{//Criando a classe

	//Criando os atributos 
	private $nome;
	private$email;
	private $senha;
	//criando um método
	public function getNome():string{
		return $this->nome;
	}
	public function getEmail():string{
		return $this->email;
	}
	public function getSenha():string{
		return $this->senha;

	}
	public function setNome($nome){
		$this->nome=$nome;

	}
	public function setEmail($email){
		$this->email=$email;

	}public function setSenha($senha){
		$this->senha=$senha;

	}
	public function __tostring(){
		//Usamos o json_encode para mostra as informações em um array
		return json_encode(array(
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));

	}
}
?>