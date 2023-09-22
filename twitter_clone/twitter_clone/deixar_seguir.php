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
$deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];

//Se o texto do tweet for igual a vazio ou o id do usuario for igual a vazio
if ($id_usuario == '' || $deixar_seguir_id_usuario == '') {
	
	die(); //O Script para de ser rodado aqui
}


$objDb = new db();
$link = $objDb->conecta_mysql();

//Deletando  o id_usuario e seguindo_id_usuario para deixar de seguir a pessoa 
$sql = "DELETE FROM usuarios_seguidores WHERE id_usuario = $id_usuario AND seguindo_id_usuario = $deixar_seguir_id_usuario";


//echo $texto_tweet; Para teste de receber informação

//echo $sql; <-para teste de query
mysqli_query($link,$sql);
?>