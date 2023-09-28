<?php
 session_start();
 include "../includes/conecta.php";

 $essaequipe = $_SESSION['essaequipe'];//puxando os dados da equipe

 //Deletando a equipe da tabela equipe temporaria
  $sql = "DELETE FROM `equipetemp` WHERE chave_equipe = '$essaequipe'";
  if( $result = $conn -> query($sql) ) {
    echo "<br> deletada a equipe da tabela equipetemp";
  }

 //Deletando os serviços da equipe
  $sqlo = "DELETE FROM `servico` WHERE chave_equipe = '$essaequipe'";
  if( $resulto = $conn -> query($sqlo) ){
    echo "<br> deletada o serviço da tabela servico";
  }

  //Selecionando os integrantes da equipe
  $sqls = "SELECT  * FROM `integrantes` WHERE chave_equipe = '$essaequipe'";

  if( $results = $conn -> query($sqls) ){

    while ($rows = $results -> fetch_assoc()){
      $chave = $rows['chave_integrante'];
    //excluindo os integrantes da equipe
      $sqlsi = "DELETE FROM `servicointegrantes` WHERE chave_integrante = '$chave'";
      if( $resultsi = $conn -> query($sqlsi) ){
        echo "<br> deletado o servico da tabela servicointegrantes";
      }

    }

  }
  else{
    echo $conn->error;
    error_log($conn->error);
    echo "Deu errado <br>";
  }

  $sqls = "DELETE FROM `integrantes` WHERE chave_equipe = '$essaequipe'";
  if( $results = $conn -> query($sqls) ){
    echo " <br> deletados os integrantes da tabela integrantes";
  }else{
    echo $conn->error;
    error_log($conn->error);
    echo "Deu erro na tabela integrantes <br>";
  }


 header("Location:../view/Admin/equipestemp.view.php");

 ?>
