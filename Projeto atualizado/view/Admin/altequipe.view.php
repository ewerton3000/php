<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id']) || !$_SESSION['administrador']){
     header("Location:../../");
   }

   $id_equipe = $_POST['equipe'];


 include "../../includes/head.php";
 ?>

  <body class="blue">
    <header>
    <?php  include "admnav.php"; ?>
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
        <input type='hidden' name='equipe' value='$id_equipe'/>
        <input type='text' name='nome' value='$nome' placeholder='Nome'/>
        <input type='text' name='cnpj' value='$cnpj' placeholder='CNPJ'/>
        <input type='text' name='integrantes' value='$integrantes' placeholder='Integrantes'/>
        <input type='text' name='endereco' value='$endereco' placeholder='Endereço'/>
        <input type='text' name='telefone' value='$telefone' placeholder='Telefone'/>
        <input type='text' name='email' value='$email' placeholder='E-mail'/>
        <input type='hidden' name='senha' value='$senha' placeholder='Senha'/>
        <button type='submit'>Alterar</button>
        </form>
        ";

      }
     ?>
           </div>
   </main>
   <script src="../../JS/main.js" charset="utf-8"></script>
  </body>
</html>
