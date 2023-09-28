<?php
 session_start();

 include '../../includes/head.php';

 ?>

  <body class="blue">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <form class="box login" action="../../app/logincliente.app.php" method="post">
        <h2>Login cliente:</h2>
        <input type="text" name="cpf" value="" placeholder="cpf(somente numeros)" autocomplete="off" required>
        <input type="password" name="senha" value="" placeholder="Senha" autocomplete="off" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
