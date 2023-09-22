<?php
 session_start();

 include '../../includes/head.php';
 ?>

  <body class="blue">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <form class="box login" action="../../app/loginequipe.app.php" method="post">
        <h2>Login equipe:</h2>
        <input type="text" name="login" autocomplete="off" placeholder="Nome ou CNPJ (somente numeros)" required>
        <input type="text" name="senha" autocomplete="off" placeholder="Senha" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
