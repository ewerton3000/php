<?php
  include "../includes/conecta.php";
  include "../includes/alerthead.php";//Cabeçalho de paginas que dao alerta

  session_start();

 //puxando as informaçoes da chave
  $chave_equipe = $_SESSION['chave'];
  

 //pegando as informaçoes do novo integrante
  $nomei = $_POST['nomei'];
  $cpfo = $_POST["cpfi"];
  $cpfi = preg_replace("/[^0-9]/", "", "$cpfo" );//limpando a mascara
  $cargoi = $_POST['cargoi'];
  $emaili = $_POST['email'];
  $telefonei = $_POST['telefone'];
  $curriculoi = $_FILES['curriculoi'];
  $chave_integrante = uniqid("", true);


  //CHECA PARA VER SE O CPF OU CNPJ JA FOI CADASTRADO:-----------------
  $check = "SELECT * FROM `integrantes` WHERE cpfi='$cpfi'";
  $jatem = mysqli_query($conn, $check);

  if($row = $jatem->fetch_assoc()){
  ?>

  <div class="box alert">
    <h2>Este CPF ja está cadastrado em nosso sistema!</h2>
    <a href="../view/Equipe/painelequipe.view.php">Voltar ao painel</a>
    <a href="../">Pagina inicial</a>
  </div>
</body>

<?php

} else {



  //Serviços que o membro pode exercer: -----------
  $bancoi = isset($_POST["banco_de_dados"])? 1 : 0;
  $redesi = isset($_POST["redes_administrativas"])? 1 : 0;
  $analisei = isset($_POST["analise_de_sistemas"])? 1 : 0;
  $desenvolvimentoi = isset($_POST["desenvolvimento_de_sistemas"])? 1 : 0;
  $montagemi = isset($_POST["montagem_e_manutencao"])? 1 : 0;
  $criacaoi = isset($_POST["criacao_de_sites"])? 1 : 0;


  // echo "$nomei, $cpfi, $cargoi, $email, $telefone, <br>" ;
  echo $curriculoi['name'];
  // echo "<br> $bancoi, $redesi, $analisei, $desenvolvimentoi, $montagemi, $criacaoi";


  //Curriculo de cada membro: -----------------
   $fileName = htmlentities($curriculoi['name']);
   $fileTmpName = htmlentities($curriculoi['tmp_name']);
   $fileSize = $curriculoi['size'];
   $fileError = $curriculoi['error'];
   $fileType = htmlentities($curriculoi['type']);

   $fileExt = explode('.', $fileName);
   $fileActualExt = strtolower(end($fileExt));

   $allowed = array('pdf', 'doc', 'docx', 'dot', 'wbk', 'xlxs','txt');
      if (in_array($fileActualExt, $allowed)) {
          if ($fileError === 0 ) {
              if ($fileSize < 3000000) {
                  $horagora = time();



                  $curriculonomei = "$cpfi." . $fileActualExt;
                  $fileNameNew = $curriculonomei;
                  $fileDestination = "../curriculos/$chave_equipe/".$fileNameNew;
                  move_uploaded_file($fileTmpName, $fileDestination);
                  $diahoje = date("d/m/Y");


                  echo "Enviado com sucesso!";

             }else{
                echo "Arquivo grande demais";
             }
         }else{
        echo "Houve um erro no envio do arquivo";
        error_log($fileError);
         }
     }else{
       echo "Esta extensão de arquivo não é permitida";
     } //FIM upload curriculo;


  //Registra na Tabela integrantes ---------------------------
  $sqli = "INSERT INTO `integrantes` (`chave_integrante`, `nomei`, `cpfi`, `cargoi`, `emaili`, `telefonei`, `chave_equipe`, `curriculoi`)
  VALUES ('$chave_integrante', '$nomei', '$cpfi', '$cargoi', '$emaili', '$telefonei', '$chave_equipe', '$curriculonomei')";

  // echo "('$chave_integrante', '$nomei', '$cpfi', '$cargoi', '$emaili', '$telefonei', '$chave_equipe', '$curriculonomei')";

  if($resulti = $conn -> query($sqli)){
   echo "<br> Registro na tabela integrantes realizado com sucesso! <br>";
  }else{
   echo "<br> houve um problema no registro da tabela integrantes <br>";
     echo $conn->error;
     error_log($conn->error);
  }


  // Puxa infos sobre a equipe  ----------------------------------------

  $sqle = "SELECT * FROM `equipe` WHERE `chave_equipe` = '$chave_equipe'";
  if($resulte = $conn -> query($sqle)){
   echo "<br> puxou da equipe";
   if($rowe = $resulte->fetch_assoc()){
     $integrantes = $rowe['numero_integrantes'];
   }
   $integrantesplus = $integrantes + 1;
   echo $integrantesplus;

  }else{
   echo "<br> nem puxou";
     echo $conn->error;
     error_log($conn->error);
  }

  $sqlupdate = "UPDATE `equipe` SET `numero_integrantes` = '$integrantesplus' WHERE `chave_equipe` = '$chave_equipe'";
  if($resultupdate = $conn -> query($sqlupdate)){
    echo "<br> updatou da equipe";
  }else{
   echo "<br> nem updatou";
     echo $conn->error;
     error_log($conn->error);
  }
 header("Location: ../view/Equipe/painelequipe.view.php");
}
