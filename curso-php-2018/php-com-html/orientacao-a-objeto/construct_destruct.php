<?php

//Método construtor(__construct) = É chamando automaticamente quando um novo objeto é criado,sendo possível definir informações iniciais necessárias ao objeto

class Pessoa{

	public function correr(){

		echo $this->nome . "correndo <br>";
	}
function __construct($parametro_nome){
	echo"Construct iniciado <br>";
	$this->nome = $parametro_nome;
	echo $this->nome;
}

//Método destrutor(__desturct) = É chamado automaticamente quando um objeto é deslocado da memória (a execução é finalizada)

function __destruct(){
	echo"Objeto removido <br>"; 
}
}

$pessoa = new Pessoa("Jamilton");
echo"<br>";
$pessoa->correr();




?>