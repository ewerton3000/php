<?php
 session_start();
 include '../../includes/head.php';
 ?>

  <body class="blue">

    <header>
      <?php include "cadnav.php"; ?>
    </header>

    <main>
      <form class="box cadastro" action="../../app/cadfuncionario.app.php" method="post">
        <h2>Cadastro de Funcionario Nanotec:</h2>
        <p>
          <label>Nome: </label><br>
        <input type="text" name="nomec"  autocomplete="off" placeholder="" required>
      </p>

      <p>
        <label>CPF: </label><br>
        <input type="text" class="cpf" name="cpfcnpj"  autocomplete="off" placeholder="" required>
      </p>

      <p>
        <label>Usuario: </label><br>
        <input type="text" name="usuario"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>E-mail: </label><br>
        <input type="email" name="email"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Senha: </label><br>
        <input type="text" name="senha"  autocomplete="off" placeholder="" required>
      </p>

        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="../../JS/main.js"></script>
  </body>

  </html>
