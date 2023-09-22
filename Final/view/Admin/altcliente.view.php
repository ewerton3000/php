<?php

 include "../../includes/conecta.php";

 session_start();

   if (!$_SESSION['administrador']){
     header("Location:../../");
   }
   $id_cliente = $_POST['cliente'];


 include "../../includes/head.php";
 ?>

  <body class="blue">
    <header>
    <?php  include "admnav.php"; ?>
    </header>
    <main>
      <div class="box painel">
    <?php

      $sql = "SELECT * FROM `cliente` WHERE id_cliente = $id_cliente;";

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
        <input type='hidden' name='cliente' value='$id_cliente'/>
        <p> <label>Nome:</label> <br>
        <input type='text' name='nome' value='$nome'/></p>
        <p> <label>CPF:</label> <br>
        <input type='text' name='cpf' class='cpf' value='$cpf' readonly/></p>
        <p> <label>Empresa:</label> <br>
        <input type='text' name='empresa' value='$empresa'/></p>
        <p> <label>Endereço:</label> <br>
        <input type='text' name='endereco' value='$endereco'/></p>
        <p> <label>Telefone:</label> <br>
        <input type='text' name='telefone' class='tel' value='$telefone'/></p>
        <p> <label>E-mail:</label> <br>
        <input type='text' name='email' value='$email'/></p>

        <input type='hidden' name='senha' value='$senha'/> <br>
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
