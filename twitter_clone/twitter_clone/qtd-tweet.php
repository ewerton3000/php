<?php
   
   session_start();
   
   //Se o a sessão do usuário não existir
   if(!isset($_SESSION['usuario'])){
   	//Se não existir será redirecionado para uma página
   	header('Location: index.php?erro=1');
   }

   //Conexão com o banco de dados
   require_once('db.class.php');
   
   $objDb = new db();
   $link = $objDb->conecta_mysql();

   //Pegando a id do usuario que está logado
   $id_usuario = $_SESSION['id_usuario'];

   //Recuperar a quantidade de tweets 
   $sql ="SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario ";

   //echo $sql; <-Pra ver se a query está funcionando na página
  
  
  
  
  //Executando a query
  $resultado_id = mysqli_query($link,$sql);
 
 //Começa o número de tweets com 0
  $qtde_tweets = 0;
  //
  if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  //var_dump($resgitro); <- teste para ver o retorno do SQL
  //echo $registro['qtde_tweets'];
  $qtde_tweets = $registro['qtde_tweets'];
}
else{
	echo"Erro ao executar a query no SQL";
}

 //Recuperar a quantidade  de seguidores
  $sql ="SELECT COUNT(*) AS qtde_seguidores FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario ";

   //echo $sql; <-Pra ver se a query está funcionando na página
  
  
  
  
  //Executando a query
  $resultado_id = mysqli_query($link,$sql);
 
 //Começa o número de seguidores com 0
  $qtde_seguidores = 0;
  //
  if($resultado_id){
  $registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
  //var_dump($resgitro); <- teste para ver o retorno do SQL
  //echo $registro['qtde_tweets'];
  $qtde_seguidores = $registro['qtde_seguidores'];
}
else{
	echo"Erro ao executar a query no SQL";
}

?>