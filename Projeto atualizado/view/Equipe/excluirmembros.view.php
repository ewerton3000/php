<?php
  include "../../includes/head.php";
  include "../../includes/conecta.php";
  session_start();

 $chave_equipe = $_SESSION['chave'];

 $sql = "SELECT * FROM `integrantes` WHERE chave_equipe = '$chave_equipe'";
 if( $result = $conn -> query($sql) ){
   echo "puxou";
 }else{
    echo  "não puxou";
    echo $chave_equipe;
    echo $conn->error;
    error_log($conn->error);
 }
 ?>
 <body class="blue">
   <header>
    <nav>
      <?php include "equinav.php"; ?>
    </nav>
  </header>
  <main>
    <form class="box painel" action="../../app/excluirintegrante.app.php" method="post">

        <h2> Escolha um integrante de sua equipe para excluir </h2>
    <?php

      while ( $row = $result-> fetch_assoc() ) {
        $nome = $row['nomei'];
        $idi = $row['idi'];

        // echo $nome;
        echo " <button type='submit' name='integrante' value='$idi'>$nome</button> ";
      }
     ?>
      </form>
    </main>
</body>
