<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id']) || $_SESSION['tipologin'] != 'equipe'){
     header("Location:../../");
   }

   $id_equipe = $_SESSION['id'];


 include "../../includes/head.php";
 ?>

  <body class="blue">
    <header>
    <?php  include "equinav.php"; ?>
    </header>
    <main>
      <div class="box alter">
    <?php

      $sql = "SELECT * FROM `equipe` WHERE id_equipe = $id_equipe";
      $result = $conn -> query($sql);


      while( $row = $result->fetch_assoc()){
        $nome = $row['nome_da_equipe'];
        $cnpj = $row['cnpj_equipe'];
        $integrantes = $row['numero_integrantes'];
        $endereco = $row['endereco_equipe'];
        $telefone = $row['telefone_equipe'];
        $email = $row['email_equipe'];
        $senha = $row['senha_equipe'];

        echo"
        <form action='../../app/altequipe.app.php' method='POST'>
        <h2>Dados da equipe:</h2>
        <input type='hidden' name='equipe' value='$id_equipe'/>
        <p> <label>Nome:</label> <br>
        <input type='text' name='nome' value='$nome'/>
        <p> <label>CNPJ:</label> <br>
        <input type='text' name='cnpj' class='cnpj' value='$cnpj'/ readonly>
        <p> <label>Integrantes:</label> <br>
        <input type='text' name='integrantes' value='$integrantes'/>
        <p> <label>Endereço:</label> <br>
        <input type='text' name='endereco' value='$endereco'/>
        <p> <label>Telefone:</label> <br>
        <input type='text' name='telefone' value='$telefone'/>
        <p> <label>E-mail:</label> <br>
        <input type='text' name='email' value='$email'/>
        <p> <label>Senha:</label> <br>
        <input type='text' name='senha' value='$senha'/> <br>
        <button type='submit'>Alterar</button>
        <a href='painelequipe.view.php'>Voltar</a>
        </form>
        ";

      }
     ?>
     <a href="excluirmembros.view.php">Excluir membros</a>
     <a href="adicionarintegrantes.view.php">Adicionar membros</a>
           </div>
   </main>
   <script src="../../JS/main.js" charset="utf-8"></script>
  </body>
</html>
