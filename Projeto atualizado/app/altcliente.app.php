<?php
 session_start();
 include "../includes/conecta.php";

//Ve se esta logado como cliente//
 if (!isset($_SESSION["id"]) || $_SESSION['tipologin'] != 'cliente'){
   header("Location: ../");
 }

//Puxando as informaçoes da conta//
 $id = $_POST['cliente'];

 $nome = $_POST['nome'];
 $cpjet = $_POST['cpf'];
 $cnpj = preg_replace("/[^0-9]/", "", "$cnpjet" );

 $cpf = preg_replace("/[^0-9]/", "", "$cpj" );
 $tipopessoa = $_POST['tipopessoa'];
 $empresa = $_POST['empresa'];
 $endereco = $_POST['endereco'];
 $telefono = $_POST['telefone'];
 $telefone = preg_replace("/[^0-9]/", "", "$telefono" );
 $email = $_POST['email'];
 $senha = $_POST['senha'];

   //alterando as informaçoes da conta//
 $sql = "UPDATE `nanotec`.`cliente` SET `nome_cliente` = '$nome',
  `empresa_cliente` = '$empresa',
  `endereco_cliente` = '$endereco',
  `telefone_cliente` = '$telefone',
  `email_cliente` = '$email',
  `senha` = '$senha'
  WHERE `cliente`.`id_cliente` = $id";

  // $result = $conn -> query($sql);
  if( $result = $conn->query($sql) ){
    echo "aconteceu";
  }
  else{
    echo 'nao aconteceu';
    echo $conn->error;
    error_log($conn->error);

    echo "$cnpj";
  }

  header('Location: ../');

 ?>
