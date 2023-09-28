<?php
 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 }
 $nome = $_SESSION['nome'];
 $id = $_SESSION['id'];
 $email = $_SESSION['email'];


 include "../../includes/head.php";
 ?>

  <body class="blue">

    <header>
      <nav>
      <a href="#" class="nanotec">NANOTEC</a>
      <a onclick="menui()"><i class="fas fa-bars"></i></a>
      <ul id="menul">
        <a href="painelcliente.view.php" class="onthis">PAINEL</a>
        <a href="../../">SOBRE NÓS</a>
      </ul>
    </nav>
    </header>
    <main>
    <div class="box painel">

      <h2>Bem vindo a <span>NANOTEC</span>: <?php echo"$nome"; ?> </h2>

    <a class="col" href="fazerpedido.view.php">Fazer pedido</a>
    <a class="col" href="acompanharpedido.view.php">Acompanhamento de pedidos</a>
    <a class="col" href="altcliente.view.php">Configurações de conta</a>
    <a class="col" href="listapedidosfeitos.php" target="_blank">Relatório de pedidos</a>
    <a class="col" href="../../app/logout.app.php">Log Out</a>
    </div>

  </main>
  <script src="../..JS/main.js" charset="utf-8"></script>
  </body>
</html>
