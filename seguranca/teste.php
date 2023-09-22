<?php
//isset()=Se existe.
//Se o usuário mandou alguma coisa ok se não passe 1 msm!
$id =(isset($_GET["id"]))?$_GET["id"]:1;
//Criando uma conexão com o banco de dados com a tabea=la dbphp7

//Condição:Se a id não for numérica então mostra a mensagem do echo ou se passar de 5 no get(barra de endereço) não mostra nada!

$conn = mysqli_connect("localhost","root","","fabrica");

//Selecionando a tabela com SELECT * FROM
$sql = "SELECT * FROM produto	WHERE id = $id";

$exec = mysqli_query($conn , $sql);


//Para vc ver as informações do banco de dados com informação abaixo desejada= http://127.0.0.1/seguranca/exemplo-02.php?id=(aqui coloque o número do 1 ao 5)
while ($resultado = mysqli_fetch_object($exec)){
	echo $resultado->id. "<br>";
	echo $resultado->nome. "<br>";
	echo $resultado->descricao."<br>";
}


//Para ver os dados pela barra de endereço no navegador
//http://127.0.0.1/seguranca/exemplo-02.php?id=4 or 1=1 -- 
//1=1=Significa uma condição sempre verdadeira(acho que só e possivel no get na barra de endereço!)
//or 1=1:traz esse número aqui caso não tenha mostre tudo o que você tem e isso cancela o WHERE que está acima!

?>