<?php

//strtolower->string to lower case :Deixa todos os "caracteres" em minúsculo

$texto = "Curso completo de php 10 % #";
echo strtolower( $texto );

echo"<br>";
echo"<br>";

//strtoupper->String para upper case:Deixa todos os caracteres maiúsculos
$texto2 ="curso completo de java ";
echo strtoupper($texto2);

echo"<br>";
echo"<br>";
//ucfirst->upper case first:Deixa o primeiro caracter maiusculo
$texto3 = "curso de python";
$texto4 = " texto com espaço";//Repare que o ucfirst não consegue deixa o primeiro caracter daa frase  me maiusculo porque ele pega o espaço na frase se vc der um espaço e usar essa função ela não funciona
echo ucfirst($texto3);
echo"<br>";
echo"<br>";
echo ucfirst($texto4);
echo"<br>";
echo"<br>";

//strlen-> string lenght(comprimento) Essa função conta os números de caractereres e os espaços 
$texto5 = "curso de CNH";
echo strlen($texto5);

echo"<br>";
echo"<br>";


//Se existe um post de cpf estará setado senão estará vazio
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
echo $total_string_cpf = strlen( $cpf );//Mostrando o cpf e o total de caraceteres digitados no cpf

//Se o cpf for diferente de 11 caracteres e diferente de vazio
if ($total_string_cpf != 11 && $cpf != '') {
	echo"<br>";
    
	echo "ANTEÇÃO : CPF invalido";
}



//str_replace-> string-replace : É uma função que substitui um caractere por outro

//esquema : str_replace(procura, substitui por , variavel que será usada)


$texto6 = 12.40;

echo str_replace(".", ",", $texto6);

echo"<br>";
echo"<br>";
$texto7 ="345.332.456-40";

//Substituindo o ponto pelo nada

$cpf2 = str_replace(".", "", $texto7);
echo $cpf2;
echo "<br> <br>";
$cpf2 = str_replace("-", "", $cpf2);

echo $cpf2;

echo"<br>";
echo"<br>";

//substr->    Pega o número de caracteres escolhidos nos caracteres exemplo: substr(variavel,inicio,fim)

$texto8 = "Entenda porque seu smartphone esquenta tanto , se voce tem um smartphone.";

echo substr($texto8, 0,2);
echo"<br>";
echo substr($texto8, 2,5);
echo"<br>";
$noticia = substr($texto8, 0 ,44)  ;
$noticia2 = substr($texto8, 44,70) ;
echo $noticia."...";
echo $noticia2;

?>



<form method="post" action=""><!--Aqui deixamos o action vazio porque ele irá mandar os dados para o mesmo arquivo(página)-->
<label>CPF:
<input type="text" name="cpf">
</label>
	<input type="submit" value="cadastrar">
</form>



