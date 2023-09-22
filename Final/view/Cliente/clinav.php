<?php
  if (!isset($_SESSION["id"])) {
    header("Location: ../../");
  } else if($_SESSION['tipologin'] != 'cliente'){
    header("Location: ../../");
  }
 ?>

 <nav>
   <a href="#" class="nanotec">NANOTEC</a>
   <a onclick="menui()"><i class="fas fa-bars"></i></a>
   <ul id="menul">
     <a href="painelcliente.view.php">PAINEL</a>
     <a href="../../">SOBRE NÓS</a>
   </ul>
 </nav>
