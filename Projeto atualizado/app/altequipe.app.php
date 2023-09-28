<?php
 include "../includes/conecta.php";


//Ve se esta logado como equipe//
 if (!isset($_SESSION["id"]) || $_SESSION['tipologin'] != 'equipe'){
   header("Location: ../");
 }
//puxando as informaçoes da equipe//
  $id_equipe = $_POST['equipe'];
  $nome = $_POST['nome'];
  $cnpjet = $_POST['cnpj'];
  $cnpj = preg_replace("/[^0-9]/", "", "$cnpjet" );
  $integrantes = $_POST['integrantes'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

//Alterando as informaçoes///
  $sql = "UPDATE `nanotec`.`equipe` SET
  `nome_da_equipe` = '$nome',
  `cnpj_equipe` = '$cnpj',
  `numero_integrantes` = '$integrantes',
  `endereco_equipe` = '$endereco',
  `telefone_equipe` = '$telefone',
  `email_equipe` = '$email',
  `senha_equipe` = '$senha'
  WHERE `equipe`.`id_equipe` = $id_equipe";

 //Vereficando o erro//
  if( $result = $conn->query($sql) ){
    echo "aconteceu";
  }
  else{
    echo 'nao aconteceu';
    echo $conn->error;
    error_log($conn->error);

    echo "$cnpj";
  }
//retornando a pagina//
  header("Location:../");


  ?>
