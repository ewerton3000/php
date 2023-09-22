<?php
 session_start();
 include "../includes/conecta.php";

 if (!isset($_SESSION["id"]) || $_SESSION['tipologin'] != 'cliente'){
   header("Location: ../");
 }

 $id = $_POST['cliente'];
 echo "$id";

 $nome = $_POST['nome'];
 $cpj = $_POST['cpf'];
 $cpf = preg_replace("/[^0-9]/", "", "$cpj" );
 $tipopessoa = $_POST['tipopessoa'];
 $empresa = $_POST['empresa'];
 $endereco = $_POST['endereco'];
 $telefono = $_POST['telefone'];
 $telefone = preg_replace("/[^0-9]/", "", "$telefono" );
 $email = $_POST['email'];
 $senha = $_POST['senha'];

 $sql = "UPDATE `nanotec`.`cliente` SET `nome_cliente` = '$nome',
  `cpf_cnpj` = '$cpf', `tipopessoa` = '$tipopessoa',
  `empresa_cliente` = '$empresa',
  `endereco_cliente` = '$endereco',
  `telefone_cliente` = '$telefone',
  `email_cliente` = '$email',
  `senha` = '$senha'
  WHERE `cliente`.`id_cliente` = $id";

  $result = $conn -> query($sql);

  header('Location: ../');

 ?>
