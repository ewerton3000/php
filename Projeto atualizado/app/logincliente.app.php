<?php
 session_start();
 include "../includes/conecta.php";
 include "../includes/alerthead.php";

  //puxando as informaçoes do formulario
  $cpf = $_POST['cpf'];
  $senha = $_POST['senha'];

 //verificando se a conta esta no banco
  $sql = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpf' && senha='$senha'";
  //puxando os dados
  $result = mysqli_query($conn, $sql);
 //guardados os dados do adm na sessao
  if($row = $result->fetch_assoc()){

  $nome = $row['nome_cliente'];
  $_SESSION['id'] = $row['id_cliente'];
  $_SESSION['nome'] = $row['nome_cliente'];
  $_SESSION['email'] = $row['email_cliente'];
  $_SESSION['tipologin'] = 'cliente';
  // enviando o cliente par ao painel cliente
  header("Location:../view/Cliente/painelcliente.view.php");

  }
  else{ ?>
      <div class="box alert">
        <h2>CPF/CNPJ ou Senha incorretos!</h2>
        <a href="../view/Login/logcliente.view.php">Tentar novamente</a>
        <a href="../">Pagina inicial.</a>
      </div>
    </main>
    <script src="../JS/main.js" charset="utf-8"></script>
  </body>
<?php };

 ?>
