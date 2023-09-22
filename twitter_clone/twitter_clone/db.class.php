<?php
//Classe do banco de dados
class db{

//host
private $host = 'localhost';

//usuario<- usuario do banco de dados
private $usuario = 'root';

//senha<- senha do banco de dados
private $senha = '';

//banco de dados<- nome da database que será usada pro projeto
private $database = 'twitter_clone';

public function conecta_mysql(){

	//Criando conexão com o banco de dados
	  //Usando o $this-> para puxar as variaveis para dentro da função fazendo referências
	$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
	
	//ajustar o charset de comunicação entre a aplicação e o banco de dados
	mysqli_set_charset($con,'utf8');

	//verificar se houver erro de conexão
	if (mysqli_connect_errno()) {
		echo 'Erro ao tentar se conectar com o Banco de Dados MySQL: '.mysqli_connect_errno();
	}
    

    /* Para testes
    else{

    	echo"Banco de Dados conectado com sucesso !!!";
    }*/
	return $con;
}

}
?>