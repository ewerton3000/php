<?php

include "../includes/conecta.php";
session_start();
//pegando informaçoes do intregrante//
$chave_equipe = $_SESSION['chave'];
$idintegrante = $_POST['integrante'];

//deletando o integrante da equipe//
$sql = "DELETE FROM `integrantes` WHERE `integrantes`.`idi` = '$idintegrante'";
$result = $conn -> query($sql);


// Puxa infos sobre a equipe ----------------------------------------
$sqle = "SELECT * FROM `equipe` WHERE `chave_equipe` = '$chave_equipe'";
if($resulte = $conn -> query($sqle)){
 if($rowe = $resulte->fetch_assoc()){
   $integrantes = $rowe['numero_integrantes'];
 }
//diminuindo a contagem de numeros de integrantes da equipe//
 $integrantesminus = $integrantes - 1;

}else{
 echo "<br> nem puxou";
   echo $conn->error;
   error_log($conn->error);
}

//diminuindo a contagem de numeros de integrantes da equipe//
$sqlupdate = "UPDATE `equipe` SET `numero_integrantes` = '$integrantesminus' WHERE `chave_equipe` = '$chave_equipe'";
if($resultupdate = $conn -> query($sqlupdate)){
  echo "<br> updatou da equipe";
}else{
 echo "<br> nem updatou";
   echo $conn->error;
   error_log($conn->error);
}


header("Location: ../view/Equipe/painelequipe.view.php");
?>
