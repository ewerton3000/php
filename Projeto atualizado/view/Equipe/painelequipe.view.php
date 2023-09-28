<?php
 session_start();
 $nome = $_SESSION['nome'];
 include "../../includes/head.php";
 ?>

  <body class="blue">

    <header>
        <nav>
        <a href="#" class="nanotec">NANOTEC</a>
        <a onclick="menui()"><i class="fas fa-bars"></i></a>
        <ul id="menul">
          <a href="painelequipe.view.php" class="onthis">PAINEL</a>
          <a href="../../">SOBRE NÓS</a>
        </ul>
      </nav>
    </header>

    <main>
    <div class="box painel">
      <?php echo"
      <h2>Bem vindo $nome</h2>
      "; ?>

    <a class="col" href="pedidosabertos.view.php">Lista de pedidos</a>
    <a class="col" href="pedidosaceitos.view.php">Pedidos em andamento</a>
    <a class="col" href="pedidosfinalizados.view.php">Pedidos finalizados</a>
    <a class="col" href="altequipe.view.php">Configurações da equipe</a>
    <a class="col" href="gerarpedidoscompletos.php" target="_blank">Relatório de pedidos</a>
    <a class="col" href="../../app/logout.app.php">Log Out</a>

    </div>
  </main>
  <script src="../../JS/main.js" charset="utf-8"></script>
  </body>
</html>
