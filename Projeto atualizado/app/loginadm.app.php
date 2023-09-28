<?php
 session_start();
 include "../includes/conecta.php";
 include "../includes/alerthead.php";

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];


 //verificando login e senha
  $sql = "SELECT * FROM `funcionario` WHERE usuario_adm='$usuario' && senha_adm='$senha'";

 //puxnado os dados
  $result=mysqli_query($conn, $sql);

  //guardados os dados do adm na sessao
  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_adm'];
  $_SESSION['nome'] = $row['nome_adm'];
  $_SESSION['email'] = $row['email_adm'];
  $_SESSION['administrador'] = true;
  
  // enviando o adm pro painel
  header("Location:../view/Admin/painelAdm.view.php");

  }
  else{ ?>
      <div class="box alert">
        <h2>CPF/CNPJ ou Senha incorretos!</h2>
        <a href="../view/Login/logadm.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
    </main>
    <script src="../JS/main.js" charset="utf-8"></script>
    </body>
<?php };

 ?>
