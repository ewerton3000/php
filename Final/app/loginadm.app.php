<?php
 session_start();
 include "../includes/conecta.php";
 include "../includes/alerthead.php";

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM `funcionario` WHERE usuario_adm='$usuario' && senha_adm='$senha'";

  $result=mysqli_query($conn, $sql);

  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_adm'];
  $_SESSION['nome'] = $row['nome_adm'];
  $_SESSION['email'] = $row['email_adm'];
  $_SESSION['administrador'] = true;

  header("Location:../view/Admin/painelAdm.view.php");

  }
  else{ ?>
      <div class="box">
        <h2>CPF/CNPJ ou Senha incorretos!</h2>
        <a href="../view/login/logadm.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
    </body>
<?php };

 ?>
