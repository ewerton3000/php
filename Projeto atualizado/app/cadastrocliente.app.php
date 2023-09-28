

<?php include "../includes/conecta.php";
      include "../includes/alerthead.php";//Cabeçalho de paginas que dao alerta

//Pegandos as informaçoes vindas do Formulario Html//
 $nome = $_POST['nomec'];
 $cpfcnpj = $_POST['cpfcnpj'];
 $cpj = preg_replace("/[^0-9]/", "", "$cpfcnpj" );
 $tipopessoa = 1;

 // $empresa = $_POST['empresac'];
 if( $_POST['empresac'] == ''){ $empresa = 'Domestico'; }
 else{ $empresa = $_POST['empresac'];}

 $endereco = $_POST['enderecoc'];
 $telefono = $_POST['telefonec'];
 $telefone = preg_replace("/[^0-9]/", "", "$telefono" );
 $email = $_POST['emailc'];
 $senha = $_POST['senhac'];
 $data_cadastro = date("Y-m-d");

//Checando se o cpf já esta cadastrado no banco de dados//
 $check = "SELECT * FROM `cliente` WHERE cpf_cnpj='$cpj'";
 $jatem = mysqli_query($conn, $check);

//CHECA PARA VER SE O CPF OU CNPJ JA FOI CADASTRADO:-----------------
 if(!$row = $jatem->fetch_assoc()){
   //Registra o cliente caso não tenha um CPF igual cadastrado:
     $sql = "INSERT INTO `nanotec`.`cliente` (`nome_cliente`, `cpf_cnpj`, `tipopessoa`, `empresa_cliente`, `endereco_cliente`,
        `telefone_cliente`, `email_cliente`, `senha`, `data_cadastro`)
      VALUES ('$nome', '$cpj', '$tipopessoa', '$empresa', '$endereco', '$telefone', '$email', '$senha', '$data_cadastro');
   ;";
     $result = $conn->query($sql);
     ?>
     <div class="box alert">
       <h2>Cadastro realizado com sucesso!</h2>
       <a href="../view/Login/logcliente.view.php">Acessar conta</a>
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
