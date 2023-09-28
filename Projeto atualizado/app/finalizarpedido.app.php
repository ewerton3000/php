<?php
 session_start();
 include "../includes/conecta.php";

 if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
   header("Location:../../");
 }

    // Puxar dados da equipe ----------------------------------------
    $equipe = $_SESSION['id'];
    $chave_equipe = $_SESSION['chave'];

    // Puxar dados do pedido -----------------------------------------
    $pedido = $_POST['id_pedido'];
    $valor = $_POST['valortotal'];
    $servico = $_POST['servico'];


   // Puxar dados do cliente -----------------------------------------

   $cpj = $_POST['cpfcliente'];

   $check = "SELECT * FROM `cliente` WHERE cpf_cnpj = '$cpj'";
   $result = $conn ->query($check);

   if ($row = $result->fetch_assoc()) {
     $cliente = $row['id_cliente'];
   }

  //enviando para a tabela pedidos completos//
   $inserir = "INSERT INTO `nanotec`.`pedidos_completos` (`valor`, `servico_realizado`, `pedido_id`, `cliente_id`, `equipe_id`)
               VALUES ('$valor', '$servico', '$pedido', '$cliente', '$equipe')";

   $result = $conn -> query($inserir);
  //Mudando o status do pedido para conluido//
   $alterar = "UPDATE `nanotec`.`pedido` SET `status_p` = 'concluido' WHERE `id` = '$pedido'";
   $resulta = $conn -> query($alterar);

  // Libera os integrantes da equipe------------
    $sqliberar = "UPDATE `integrantes` SET `status` = '0', `id_pedido` = '0' WHERE `integrantes`.`id_pedido` = '$pedido'";
    if ( $resulta = $conn -> query($sqliberar) ) {
      echo "deu certo";
      echo "$pedido";
    } else{
      echo 'deu errado';
    }
     header("Location: ../view/Equipe/pedidosfinalizados.view.php");



 ?>
