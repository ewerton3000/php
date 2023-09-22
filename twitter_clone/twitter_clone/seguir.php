<?php
session_start();//iniciando a sessão 

 //Se o a sessão do usuário não existir
   if(!isset($_SESSION['usuario'])){
   	//Se não existir será redirecionado para uma página
   	header('Location: index.php?erro=1');
   }

require_once('db.class.php');
//echo "O scrip está funcionando"; <- Para teste 

$id_usuario = $_SESSION['id_usuario'];//Pegando a super global e criando uma variavel para recebe-lá
$seguir_id_usuario = $_POST['seguir_id_usuario'];

//Se o texto do tweet for igual a vazio ou o id do usuario for igual a vazio
if ($id_usuario == '' || $seguir_id_usuario == '') {
	
	die(); //O Script para de ser rodado aqui
}


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "INSERT INTO usuarios_seguidores(id_usuario, seguindo_id_usuario)values('$id_usuario' , '$seguir_id_usuario')";//Inserindo os seguidores e o id usuario no SQL


//echo $texto_tweet; Para teste de receber informação

//echo $sql; <-para teste de query
mysqli_query($link,$sql);
?>