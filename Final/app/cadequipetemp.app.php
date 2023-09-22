<?php
 session_start();
 include "../includes/conecta.php";






 //DADOS DA EQUIPE --------------------------------

 $nomee = $_POST['nomee'];
 $cnpjet = $_POST['cnpje'];
 $cnpje = preg_replace("/[^0-9]/", "", "$cnpjet" );
 $integrantese = $_POST['integrantese'];
 $enderecoe = $_POST['enderecoe'];
 $refaz = $_POST['telefonee'];
 $telefonee = preg_replace("/[^0-9]/", "", "$refaz" );
 $emaile = $_POST['emaile'];
 $senhae = $_POST['senhae'];
 $chave_equipe = uniqid("", true);




 // INFORMAÇOES DOS MEMBROS DA EQUIPE ---------------

   if (!file_exists("../curriculos/$nomee")) {
       mkdir("../curriculos/$chave_equipe", 0700);
   }


 for ($i=1; $i <= $integrantese; $i++) {
   $nomei[$i] = $_POST["nomei$i"];
   $cpfo[$i] = $_POST["cpfi$i"];
   $cpfi[$i] = preg_replace("/[^0-9]/", "", "$cpfo[$i]" );
   $cargoi[$i] = $_POST["cargoi$i"];
   $emaili[$i] = $_POST["email$i"];
   $replacei[$i] = $_POST["telefone$i"];
   $telefonei[$i] = preg_replace("/[^0-9]/", "", "$replacei[$i]" );
   $curriculoi[$i] = $_FILES["curriculoi$i"];
   $chave_integrante[$i] = uniqid("", true);


   //Serviços que o membro pode exercer: -----------
   $bancoi[$i] = isset($_POST["banco_de_dados$i"])? true : false;
   $redesi[$i] = isset($_POST["redes_administrativas$i"])? true : false;
   $analisei[$i] = isset($_POST["analise_de_sistemas$i"])? true : false;
   $desenvolvimentoi[$i] = isset($_POST["desenvolvimento_de_sistemas$i"])? true : false;
   $montagemi[$i] = isset($_POST["montagem_e_manutencao$i"])? true : false;
   $criacaoi[$i] = isset($_POST["criacao_de_sites$i"])? true : false;





   //Curriculo de cada membro: -----------------
    $fileName = htmlentities($curriculoi[$i]['name']);
    $fileTmpName = htmlentities($curriculoi[$i]['tmp_name']);
    $fileSize = $curriculoi[$i]['size'];
    $fileError = $curriculoi[$i]['error'];
    $fileType = htmlentities($curriculoi[$i]['type']);

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf', 'doc', 'docx', 'dot', 'wbk', 'xlxs');
       if (in_array($fileActualExt, $allowed)) {
           if ($fileError === 0 ) {
               if ($fileSize < 1000000) {
                   $horagora = time();

                   $curriculonomei[$i] = "$cpfi[$i]." . $fileActualExt;
                   $fileDestination = "../curriculos/$chave_equipe/".$curriculonomei[$i];
                   move_uploaded_file($fileTmpName, $fileDestination);
                   $diahoje = date("d/m/Y");

                   $sql = "INSERT INTO `documents`(`nome`, `dia`, `path`, `userid`) VALUES ('$fileNameNew', '$diahoje', '$fileDestination', '$imgID')";
                   $result = mysqli_query($conn, $sql);
                   echo "Enviado com sucesso!";

              }else{
                 echo "Arquivo grande demais";
              }
          }else{
         echo "Houve um erro no envio do arquivo";
          }
      }else{
        echo "Esta extensão de arquivo não é permitida";
      } //FIM upload curriculo;


 }//FIM for integrantes;




 // Especializaçao:--------------------------------

   $especialtru = unserialize($_POST['especialtru']);



 // Registra no banco de dados 'equipetemp':--------------------------------------
  $sqle="INSERT INTO `equipetemp` (`nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`)
   VALUES ('$nomee', '$cnpje', '$integrantese', '$enderecoe', '$telefonee', '$emaile', '$senhae', '$chave_equipe');";

   if($resulte = $conn->query($sqle)){
     echo "<br> Registro na tabela equipetemp realizado com sucesso!";
   }else{
     echo "<br> houve um problema no registro da tabela equipetemp";
   }





// Registra na tabela servico: ------------------------------

    $sqls="INSERT INTO `servico` (`chave_equipe`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
    VALUES ('$chave_equipe', '$especialtru[0]', '$especialtru[1]', '$especialtru[2]', '$especialtru[3]', '$especialtru[4]', '$especialtru[5]'); ";

    if($results = $conn->query($sqls)){
      echo "<br> Registro na tabela servico realizado com sucesso!";
    }else{
      echo "<br> houve um problema no registro da tabela servico";
    }







  //Registra na Tabela integrantes ---------------------------

for ($i=1; $i <= $integrantese; $i++) {

   $sqli = "INSERT INTO `integrantes` (`chave_integrante`, `nomei`, `cpfi`, `cargoi`, `emaili`, `telefonei`, `chave_equipe`, `curriculoi`)
  VALUES ('$chave_integrante[$i]', '$nomei[$i]', '$cpfi[$i]', '$cargoi[$i]', '$emaili[$i]', '$telefonei[$i]', '$chave_equipe', '$curriculonomei[$i]')";

  if($resulti = $conn -> query($sqli)){
    echo "<br> Registro na tabela integrantes realizado com sucesso!";
  }else{
    echo "<br> houve um problema no registro da tabela integrantes";
  }

  $sqlsi = "INSERT INTO `servicointegrantes` (`chave_integrante`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
   VALUES ('$chave_integrante[$i]', '$bancoi[$i]', '$redesi[$i]', '$analisei[$i]', '$desenvolvimentoi[$i]', '$montagemi[$i]', '$criacaoi[$i]')";

   if($resultsi = $conn ->query($sqlsi)){
     echo "<br> Registro na tabela servicointegrantes realizado com sucesso!";
   }else{
     echo "<br> houve um problema no registro da tabela servicointegrantes";
   }

}//FIM integrantes e servicointegrantes;

    // header("Location: ../view/Equipe/registrandolhe.php");





 ?>
