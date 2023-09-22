<?php
 session_start();
 include '../../includes/head.php';
 ?>

  <body class="blue">

    <header>
      <?php include "cadnav.php"; ?>
    </header>

    <main>
      <form class="box cadastro" action="cadintegrantes.view.php" method="post">
        <h2>Cadastro de equipe:</h2>
      <div class="">
        <p>
          <label>Nome da equipe:</label><br/>
        <input type="text" name="nomee"  autocomplete="off"  required>
      </p>
        <p>
          <label>CNPJ:</label><br/>
        <input type="text" name="cnpje" class="cnpj" autocomplete="off"  required></p>
          <p>
            <label>Numero de integrantes:</label><br/>
        <input type="text" name="integrantese"  autocomplete="off"  required></p>
          <p>
            <label>Cidade:</label><br/>
        <input type="text" name="cidadee"  autocomplete="off" maxlength="2" placeholder="Ex:RJ" required></p>
          <p>
            <label>Estado:</label><br/>
        <input type="text" name="estadoe"  autocomplete="off" placeholder="Ex:Rio de Janeiro" required></p>
          <p>
            <label>Endereço:</label><br/>
        <input type="text" name="enderecoe"  autocomplete="off" placeholder="Ex: Rua Guilherme Tel"  required></p>
          <p>
            <label>Numero:</label><br/>
        <input type="text" name="numeroe"  autocomplete="off" placeholder="Ex: 1015"  required></p>
          <p>
            <label>Complemento <span>(Opcional)</span>:</label><br/>
        <input type="text" name="complementoe"  autocomplete="off" ></p>
          <p>
            <label>Telefone:</label><br/>
        <input type="text" name="telefonee" class="tel" autocomplete="off" required></p>
          <p>
            <label>E-mail:</label><br/>
        <input type="email" name="emaile"  autocomplete="off"  required></p>
          <p>
            <label>Senha:</label><br/>
        <input type="text" name="senhae"  autocomplete="off"  required></p>
      </div>

      <label> <h3> Especialização: </h3> </label> <br>
    <div class="especial">
      <input type="checkbox" class="check" name="bancodedados" value="1"><p> Criação de banco de dados </p>
      <input type="checkbox" class="check" name="redesadm" value="1"><p> Criação de Redes Administrativas </p> <br>
      <input type="checkbox" class="check" name="analisesistemas" value="1"><p> Análise de Sistemas </p>
      <input type="checkbox" class="check" name="desenvolvimentosistemas" value="1"><p> Desenvolvimento de Sistemas </p> <br>
      <input type="checkbox" class="check" name="montagemmanutencao" value="1"><p> Montagem e manutenção <br> de computadores </p>
      <input type="checkbox" class="check" name="criacaosites" value="1"><p> Criação de sites </p> <br>
    </div>
        <br>
        <button type="submit" name="button">Cadastrar-se</button>
      </form>
    </main>

<script type="text/javascript" src="../../JS/main.js"></script>
  </body>

  </html>
