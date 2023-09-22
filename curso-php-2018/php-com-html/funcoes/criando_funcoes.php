<?php
//Funções

//Esquema da função
/*
function nome_da_função(parâmetros){codigo da função}

sintaxe de função sem parâmetros
function nome_da_função(){código da função}

funções sem retorno
function exibir_boas_vindas(){
	echo"Bem vindo ao curso de php";
}

exibir_boas_vindas();


//Funções com retorno

function calcular_soma(){
	return 2+3;
}

echo "A soma de 2 + 3  : ".calcular)soma();
*/

//Função sem retorno e usando o parâmetro $nome
//Abaixo veja que o parametro está com um caracter "indefinido" isto serve se não tiver um caracter ou número definido no parâmetro o "indefinido aparecerá no lugar"
function primeira_funcao($nome = 'indefinido'){
	echo"Bem vindo ao Curso de php  ".$nome;//O caraceter do parâmetro será exibido aqui

}
primeira_funcao("");//O nome do parâmetro ganha o caracter "Paulo"


//Com retorno
function calcular_soma($numero1,$numero2){
	return $numero1+$numero2;//Usando o return para mostrar o código da função
}

echo"<br>";
//Para exbir a função com retorno podemos usar o echo ou uma variavel


echo calcular_soma(7,9);//OS números ao lado estão representados os parâmetros $numero1=7 e $numero2=9 pela posição deles no inicio da função

//Exibindo o código escrito na função
//Não pode iniciar uma função com caracteres especiais com exceção do "_"(underline)
//Nunca inicie o nome da funçãp com um número


?>