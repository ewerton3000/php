<?php

 include "../../includes/conecta.php";

 session_start();

   if (!isset($_SESSION['id'])) {
      header("Location: ../../");
   } else{
     if ($_SESSION['administrador']){
       $id = $_POST['cliente'];
     } else{
       $id = $_SESSION['id'];
     }
   }


 include "../../includes/head.php";
 ?>

  <body class="blue">
    <header>
    <?php  include "clinav.php"; ?>
    </header>
    <main>
      <div class="box painel">
    <?php

      $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id;";

      $result = $conn -> query($sql);


      while( $row = $result->fetch_assoc()){
        $nome = $row['nome_cliente'];
        $cpf = $row['cpf_cnpj'];

        if ($row['tipopessoa'] == '1') {
          $tipopessoa = 'pessoa fisica';
        }
        else{
          $tipopessoa = 'pessoa juridica';
        }
        $empresa = $row['empresa_cliente'];
        $endereco = $row['endereco_cliente'];
        $telefone = $row['telefone_cliente'];
        $email = $row['email_cliente'];
        $senha = $row['senha'];

        echo"


        <form action='../../app/altcliente.app.php' method='POST'>
        <input type='hidden' name='cliente' value='$id'/>
        <input type='text' name='nome' value='$nome' placeholder='Nome'/>
        <p><b>CPF:</b> $cpf</p>
        <input type='text' name='empresa' value='$empresa' placeholder='Empresa'/>
        <input type='text' name='endereco' value='$endereco' placeholder='Endereço'/>
        <input type='text' name='telefone' value='$telefone' placeholder='Telefone'/>
        <input type='text' name='email' value='$email' placeholder='E-mail'/>
        <input type='text' name='senha' value='$senha' placeholder='Senha'/>
        <button type='submit'>Alterar</button>
        </form>


        ";

      }
     ?>
      <a href="painelcliente.view.php">Voltar</a>
           </div>
   </main>
   <style media="screen">
     .box{
       max-width: 450px;
     }
     input{
       width: 80%;
       max-width: 800px;
       display: inline-block;
     }
   </style>
  <script src="../../JS/main.js" charset="utf-8"></script>
  </body>
</html>
