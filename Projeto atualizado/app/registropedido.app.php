<?php

include "../includes/conecta.php";
 session_start();

//verificando o login do cliente
 if (!isset($_SESSION["id"]) || $_SESSION['tipologin'] != 'cliente'){
   header("Location: ../");
 }

 //
 $id_cliente = $_SESSION['id'];
 isset($_POST['complementop'])? $complementop = ", " . $_POST['complementop'] : $complementop = "" ;

 $endereco = $_POST['cidadep'] . ', ' . $_POST['estadop']. ', ' . $_POST['ruap'] . ', ' . $_POST['numerop'] . $complementop;
 $tipopedido = $_POST['tipop'];
 $observacao = $_POST['observacaop'];
 $data_pedido = date("Y-m-d");

//inserindo os dados do PEDIDO NA TABELA
 $sql="INSERT INTO `nanotec`.`pedido` (`cidade`, `endereco`, `tipo_pedido`, `orcamento`, `observacao`, `data_pedido`, `status_p`, `id_cliente`, `id_equipe`)
 VALUES ('$cidade', '$endereco', '$tipopedido', NULL, '$observacao', '$data_pedido', 'aberto', '$id_cliente', NULL);";
 ?>


   <!DOCTYPE html>
   <html lang="pt" dir="ltr">
     <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
       <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
       <link rel="stylesheet" href="../CSS/styles.css">
     </head>

     <body class="black">

   <header>
     <nav>
       <a href="#" class="nanotec">NANOTEC</a>
       <a onclick="menui()"><i class="fas fa-bars"></i></a>
       <ul id="menul">
         <a href="../view/Cliente/painelcliente.view.php">Painel</a>
         <a href="#">SOBRE NÓS</a>
       </ul>
     </nav>
      </nav>
       </header>
       <main>

 <?php  if ($result= $conn->query($sql)) { ?>

        <div class="box alert">
          <h2>Pedido realizado com sucesso!</h2>
          <a href="../view/Cliente/fazerpedido.view.php">Fazer outro pedido</a>
          <a href="../view/Cliente/painelcliente.view.php">Voltar ao painel</a>
          <a href="../view/Cliente/acompanharpedido.view.php">Lista de pedidos</a>
        </div>
      </main>
      </body>
  <?php } else { ?>

        <div class="box alert">
          <h2>Houve um erro com seu pedido!</h2>
          <a href="../view/Cliente/fazerpedido.view.php">Tentar novamente</a>
          <a href="../view/Cliente/painelcliente.view.php">Voltar ao painel</a>
          <a href="../view/Cliente/acompanharpedido.view.php">Lista de pedidos</a>
        </div>
      </main>
      </body>

  <?php } ?>
