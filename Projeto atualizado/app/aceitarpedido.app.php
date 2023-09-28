<?php
  include "../includes/conecta.php";
  session_start();

  //Pegando o id da equipe e do pedido/
  $id_equipe = $_SESSION['id'];
  $pedido = $_POST['idpedido'];
  //

  //pega todos os integrantes da equipe
  foreach($_POST['integrantes_list'] as $integrante) {
    echo "<br> $integrante";
    echo "<br> $pedido";


  //Ocuoando os integrantes no pedido aceito
    $sqli = "UPDATE `integrantes` SET `status` = '1', `id_pedido` = '$pedido' WHERE `integrantes`.`chave_integrante` = '$integrante'";
    if($resulti = $conn -> query($sqli)){
      echo 'deu certo';
    }
    else{
      echo 'n deu certo';
      echo $conn->error;
      error_log($conn->error);
    }
}
 
 //dando update no pedido, botando o pedido como andamento e inserindo os dados da equipe que esta fazendo o pedido
  $sql = "UPDATE `nanotec`.`pedido` SET `status_p` = 'andamento', `id_equipe` = '$id_equipe' WHERE `pedido`.`id` = $pedido";
  if( $result = $conn -> query($sql) ){
    echo 'conseguiu fazer';
  }
  else{
    echo 'n deu certo';
    echo $conn->error;
    error_log($conn->error);
  }

  header("Location: ../view/Equipe/pedidosaceitos.view.php");
 ?>
