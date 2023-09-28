<?php
 session_start();

 include '../../includes/head.php';
 ?>

  <body class="blue">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <div class="box escolha">
        <h2>Entrar como:</h2> <br>
        <a class="col" href="logcliente.view.php">Cliente</a>
        <a class="col" href="logequipe.view.php">Equipe</a>
        <a class="col" href="logadm.view.php">Administrador</a>
      </div>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
