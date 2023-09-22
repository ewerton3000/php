<?php
function incluirClasses($nomeClasse){
	//criando uma condição se o arquivo que puxaremos a informação se o arquivo existe com as respostas true(sim) ou false(não).
	if(file_exists($nomeClasse.".php")=== true){
		require_once($nomeClasse.".php");
	}


}
/*spl_autoload_register :s=standard p=php l=library são conjuntos de funções de conjuntos nativos do php que são usadas para facilitar lacunas() com classes ou funções anonimas exemplo abaixo: */
//criando autoload para classe
spl_autoload_register("incluirClasses");
//criando autoload para o método da classe abstrata(automóvel).
spl_autoload_register(function($nomeClasse){
	//Uma condição para confimar se o arquivo existe ou não. 
	//abaixo colocamos o nome da pasta escolhida(isso só serve para o windows se for para o linux isso não vai funcionar e dará erro)
	//DIRECTORY_SEPARATOR:É uma constante que se usa como se fosse uma barra(/) de abrir pasta na hora de usar um link para um arquivo específico.
	//OBS:e ele muda automáticamente para cada sistema opracional(no caso das barras para abrir pastas)!!!
	if(file_exists("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php")=== true){
		require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php");
	}
});
$carro = new DelRey();
$carro->freiar(80);
?>