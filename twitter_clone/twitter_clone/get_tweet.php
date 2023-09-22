<?php

//Iniciando a sessão
session_start();

//Se o usuario não estiver logado
if (!isset($_SESSION['usuario'])) {
	header('Location: index.php?erro=1');
}

//Requerimento do SQL no arquivo
require_once('db.class.php');

$id_usuario = $_SESSION['id_usuario'];

$objDb = new db();
$link = $objDb->conecta_mysql();

//Fazendo relação das tabelas com JOIN   
//Abaixo Selecionando a data,tweet e usuario da tabela usuario e renomeando a data_inclusao para data_inclusao_formatada
//OBS:%d=dia,%b=mes,%Y=ano,%T=hora minuto e segundo
$sql = "SELECT DATE_FORMAT(t.data_inclusao,'%d %b %Y %T') AS data_inclusao_formatada , t.tweet, u.usuario";
//u= para tabela usuario e t para tabea de tweet
$sql.= " FROM tweet AS t JOIN usuarios AS u ON(t.id_usuario = u.id) ";
$sql.= " WHERE id_usuario = $id_usuario";
$sql.= " OR id_usuario IN (SELECT seguindo_id_usuario FROM `usuarios_seguidores` WHERE id_usuario = $id_usuario)";//Mostrando os tweet do usuarios e da pessoa que está logada tbm pela id
$sql.= " ORDER BY data_inclusao DESC";//Fazendo uma consulta pela data de inclusão na ordem decrescente

//echo $sql; <- Para teste de inserção da query(OBS:irá aparecer o codigo da variavel $sql cru beleza)
//echo $texto_tweet; Para teste de receber informação

 $resultado_id = mysqli_query($link,$sql);//Armazenando a query dentro da variavel

 //Se a variavel existir
 if($resultado_id){
 	//Enquanto a query for executada  ira fazer uma associa-la a id selecionada
      while ($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
      	//var_dump($registro);
      	//echo'<br/><br/>';

      	//Aqui abaixo a consulta será exibida nas tags correspondentes da página home.php
      	echo'<a href="#" class="list-group-item">';

      	//Exibindo a data pela query($registro['data_inclusao']) usando as tags html
        echo'<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> - '.$registro['data_inclusao_formatada'].' </small> </h4>';
           
           //Exibindo o tweet pela query($registro['tweet'])usando as tags html
        echo'<p class="list-group-item-text">'.$registro['tweet'].'</p>';

        //
        echo"</a>";
      }
 }

//Senão
 else{

 	echo"Houve um erro na consulta de tweets no banco de dados";
 }

?>

<!--
small:
-->