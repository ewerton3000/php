<?php
  if (!isset($_SESSION["id"])) {
    header("Location: ../../");
  } else if($_SESSION['tipologin'] != 'equipe'){
    header("Location: ../../");
  }
 ?>

     <nav>
     <a href="#" class="nanotec">NANOTEC</a>
     <a onclick="menui()"><i class="fas fa-bars"></i></a>
     <ul id="menul">
       <a href="painelequipe.view.php">PAINEL</a>
       <a href="../../">SOBRE NÓS</a>
     </ul>
   </nav>
