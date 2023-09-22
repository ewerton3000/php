<?php
  if (!isset($_SESSION['id']) || $_SESSION['administrador'] != true) {
    header("Location: ../../");
  }
 ?>

 <nav>
   <a href="../../" class="nanotec">NANOTEC</a>
   <a onclick="menui()"><i class="fas fa-bars"></i></a>
   <ul id="menul">
     <a href="paineladm.view.php">PAINEL</a>
     <a href="../../">SOBRE NÓS</a>
   </ul>
 </nav>
