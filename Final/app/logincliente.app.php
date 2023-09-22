<?php
 session_start();
 include "../includes/conecta.php";
 include "../includes/alerthead.php";

  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpf' && senha='$senha'";
  $result = mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_cliente'];
  $_SESSION['nome'] = $row['nome_cliente'];
  $_SESSION['email'] = $row['email_cliente'];
  $_SESSION['tipologin'] = 'cliente';

  header("Location:../view/Cliente/painelcliente.view.php");

  }
  else{ ?>
      <div class="box painel">
        <h2>CPF/CNPJ ou Senha incorretos!</h2>
        <a href="../view/login/logcliente.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
<?php };

 ?>
