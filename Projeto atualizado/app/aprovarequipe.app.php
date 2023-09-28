<?php
 session_start();
 include '../includes/conecta.php';

//pegando o id da equipe que esta na sessao//
 $essa = $_SESSION['essaequipe'];

//selecionando as equipes temporarias//
 $sql = "SELECT * FROM `equipetemp` WHERE chave_equipe = '$essa';";

 //executando a query//
 $polvora = $conn -> query($sql);
 
 //puxando os dados da equipe temporaria//
 if($row = $polvora->fetch_assoc()){
     $nomee = $row['nome_da_equipe'];
     $cnpje = $row['cnpj_equipe'];
     $integrantese = $row['numero_integrantes'];
     $enderecoe = $row['endereco_equipe'];
     $telefonee = $row['telefone_equipe'];
     $emaile = $row['email_equipe'];
     $senhae = $row['senha_equipe'];
     $uide = $row['chave_equipe'];
     $data_cadastro = date("Y-m-d");
 }
 //inserindo os dados da equipe temporaria para equipes aceitas//
  $sql="INSERT INTO `nanotec`.`equipe` (`nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`, `data_cadastro`)
  VALUES ('$nomee', '$cnpje', '$integrantese', '$enderecoe', '$telefonee', '$emaile', '$senhae', '$uide', '$data_cadastro');";

  $result = $conn->query($sql);

//Deletar a equipe temp após passar pra equipe //
  $sql = "DELETE FROM `nanotec`.`equipetemp` WHERE `equipetemp`.`chave_equipe` = '$uide'";
  $result = $conn -> query($sql);

  header("Location: ../../view/Admin/equipestemp.view.php");
 ?>
