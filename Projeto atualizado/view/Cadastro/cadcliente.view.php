<?php
 session_start();
 include '../../includes/head.php';
 ?>

  <body class="blue">

    <header>
      <?php include "cadnav.php"; ?>
    </header>

    <main>
      <form class="box cadastro" action="../../app/cadastrocliente.app.php" method="post">
        <h2>Cadastro de cliente:</h2>
        <p>
          <label>Nome: </label><br>
        <input type="text" name="nomec"  autocomplete="off" placeholder="" required>
      </p>

      <p>
        <label>CPF: </label><br>
        <input type="text" class="cpf" name="cpfcnpj"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Empresa: <span>(opcional)</span></label><br>
        <input type="text" name="empresac"  autocomplete="off" placeholder="">
      </p>

      <p>
          <label>Cidade: </label><br>
        <input type="text" name="cidadec"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Estado: </label><br>
        <input type="text" name="estadoc"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Endereço: </label><br>
        <input type="text" name="enderecoc"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Numero: </label><br>
        <input type="text" name="numeroc"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Telefone: </label><br>
        <input type="text" class="tel" name="telefonec" autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>E-mail: </label><br>
        <input type="email" name="emailc"  autocomplete="off" placeholder="" required>
      </p>

      <p>
          <label>Senha: </label><br>
        <input type="text" name="senhac"  autocomplete="off" placeholder="" required>
      </p>

        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="../../JS/main.js"></script>
  </body>

  </html>
