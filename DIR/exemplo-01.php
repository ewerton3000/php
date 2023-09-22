<?php
//Criando uma Variavel com o nome do novo diretório(pasta)!
$name = "images";


//A exclamação(!) significa não como no exemplo abaixo diz:
//if=se !=não is_dir=existe diretório $name=nome de diretório.
if(!is_dir($name)){
	//mkdir:é uma função do php que permite criar diretórios(pastas).Abaixo vc pode ver que a variavel $name será o nome do diretório!
	mkdir($name);

	echo"Diretório $name criado com sucesso!";
}
else{
	//Caso crie um diretório com o mesmo nome
    //é uma função que apagua o diretório escolhido no caso $name
	rmdir($name);
	echo"já existe um diretório : $name foi removido!";
}
?>