<?php
 session_start();

 include '../../includes/head.php';

 ?>

  <body class="blue">

    <header>
      <?php include "lognav.php"; ?>
    </header>

    <main>
      <form class="box login" action="../../app/loginadm.app.php" method="post">
        <h2>Login Admin:</h2>
        <input type="text" name="usuario" placeholder="Usuario" autocomplete="off" required>
        <input type="text" name="senha" placeholder="Senha" autocomplete="off" required>
        <br>
        <button type="submit" name="button">Entrar</button>
      </form>
    </main>

<script type="text/javascript" src="JS/main.js"></script>
  </body>

  </html>
