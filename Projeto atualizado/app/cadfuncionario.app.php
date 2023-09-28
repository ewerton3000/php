

<?php include "../includes/conecta.php";
      include "../includes/alerthead.php";
//puxando as informaçoes do novo funcionario 
 $nome = $_POST['nomec'];
 $cpfcnpj = $_POST['cpfcnpj'];
 $email = $_POST['email'];
 $usuario = $_POST['usuario'];
 $senha = $_POST['senha'];
//checando o cpf_cnpj //
 $check = "SELECT * FROM `funcionario` WHERE cpf_adm='$cpfcnpj'";
 $jatem = mysqli_query($conn, $check);

//CHECA PARA VER SE O CPF OU CNPJ JA FOI CADASTRADO:-----------------
 if(!$row = $jatem->fetch_assoc()){
   //Registra o cliente caso não tenha um CPF igual cadastrado:
     $sql = "INSERT INTO `funcionario` (`nome_adm`, `cpf_adm`, `email_adm`, `usuario_adm`, `senha_adm`)
      VALUES ('$nome', '$cpfcnpj', '$email', '$usuario', '$senha')";
     $result = $conn->query($sql);
     ?>
     <div class="box alert">
       <h2>Cadastro realizado com sucesso!</h2>
       <a href="../view/Login/logadm.view.php">Acessar conta</a>
       <a href="../">Pagina inicial</a>
     </div>
   </main>
   </body>
  <?php }  else{
    // Gera um erro informando que o CPF informado já foi cadastrado;
   ?>
       <div class="box alert">
         <h2>Este CPF ja está cadastrado em nosso sistema!</h2>
         <a href="../view/Cadastro/cadcliente.view.php">Tentar novamente</a>
         <a href="../">Pagina inicial</a>
       </div>
     </body>
 <?php }

  ?>
