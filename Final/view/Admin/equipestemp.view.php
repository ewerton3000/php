<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];

 if(!$adm){
   session_destroy();
   header("Location: ../../");
 }
 else{
  include '../../includes/head.php';
  include '../../includes/conecta.php';
}
 ?>

 <body class="blue">
   <header>
     <?php include "admnav.php"; ?>
   </header>

 <main>
   <div class="box painel">
     <h2>Equipes para registrar</h2>

     <form action="analiseequipe.view.php" method="post">
       <?php

       $sql = "SELECT * FROM `equipetemp`";

       $result = $conn -> query($sql);

    while ($row = $result->fetch_assoc()){
      $idequipe = $row['id_equipe'];
      $nomeequipe = $row['nome_da_equipe'];

      echo "<button class='equipo' name='queequipe' type='submit' value='$idequipe'>$nomeequipe</button>";
    }
        ?>
              <a href='paineladm.view.php'>VOLTAR</a>
     </form>
   </div>
 </main>
 <script src="../../JS/main.js" charset="utf-8"></script>
  </body>
