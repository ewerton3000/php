<?php
//Criando uma função com parametro
function trataNome($name){

	//se o $name é vazio...
	if(!$name){
		throw new Exception("Nenhum nome foi informado.", 1);
		
	}
	echo ucfirst($name)."<br>";
}
try{
	//O trataNome("") será notificado como erro por não ter informações dentro dele
    //Puxando a função trataNome()
	trataNome("Joao");
	trataNome("Glauber");
	trataNome("");
}
catch(Exception $e){
	//Se a informação não foi inserida mostrará o erro do Exception
	echo $e->getMessage();
}
finally{
	//Finally:Independente se ele usar o try ou o catch ele sempre vai executar por ultimo a mensagem do bloco Finally.
	
	//Caso não haja nenhum erro mostrará essa mensagem do echo sem mostrar  a mensagem do catch!

	echo"Executou o Try!";
}
?>