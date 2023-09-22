<?php
class Pessoa{
	var $nome;//atributo

	//métodos   
	function setNome ($nome_definido){
		$this->nome = $nome_definido;//Usando o this para puxar a variavel $nome pra dentro do método  
	}

	function getNome(){//Método para retornar a variavel
   return $this->nome;
	}
}

$pessoa = new Pessoa();

$pessoa->setNome('Jamilton');//Setando o método e inserindo o caracter nele
echo $pessoa->getNome();//Mostrando o conteudo da variavel $nome pelo método getNome
?>