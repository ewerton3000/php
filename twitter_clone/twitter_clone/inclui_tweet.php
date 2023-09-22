<?php
session_start();//iniciando a sessão 

 //Se o a sessão do usuário não existir
   if(!isset($_SESSION['usuario'])){
   	//Se não existir será redirecionado para uma página
   	header('Location: index.php?erro=1');
   }

require_once('db.class.php');
//echo "O scrip está funcionando"; <- Para teste 


$texto_tweet = $_POST['texto_tweet']; //Puxando o valor texto_tweet lá do arquivo home.php do ajax

$id_usuario = $_SESSION['id_usuario'];//Pegando a super global e criando uma variavel para recebe-lá


//Se o texto do tweet for igual a vazio ou o id do usuario for igual a vazio
if ($texto_tweet == '' || $id_usuario == '') {
	
	die(); //O Script para de ser rodado aqui
}


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "INSERT INTO tweet(id_usuario, tweet)values('$id_usuario' , '$texto_tweet')";//Inserindo o tweet no SQL


//echo $texto_tweet; Para teste de receber informação

mysqli_query($link,$sql);
?>