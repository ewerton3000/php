<?php

ini_set('memory_limit', '700M');//limitando as informaçoes//
ini_set('post_max_size', '10M');
ini_set('upload_max_filesize', '10M');
date_default_timezone_set('America/Sao_Paulo');

session_start();
 include "../includes/conecta.php";
 $mandarPara = '../view/Equipe/registrandolhe.php';
 $algumErro = false;



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

 //pegando as informaçoes de cada integrante//
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
   $bancoi[$i] = isset($_POST["banco_de_dados$i"])? 1 : 0;
   $redesi[$i] = isset($_POST["redes_administrativas$i"])? 1 : 0;
   $analisei[$i] = isset($_POST["analise_de_sistemas$i"])? 1 : 0;
   $desenvolvimentoi[$i] = isset($_POST["desenvolvimento_de_sistemas$i"])? 1 : 0;
   $montagemi[$i] = isset($_POST["montagem_e_manutencao$i"])? 1 : 0;
   $criacaoi[$i] = isset($_POST["criacao_de_sites$i"])? 1 : 0;


   //Curriculo de cada membro: -----------------
    $fileName = htmlentities($curriculoi[$i]['name']);
    $fileTmpName = htmlentities($curriculoi[$i]['tmp_name']);
    $fileSize = $curriculoi[$i]['size'];
    $fileError = $curriculoi[$i]['error'];
    $fileType = htmlentities($curriculoi[$i]['type']);

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf', 'doc', 'docx', 'dot', 'wbk', 'xlxs','txt');
       if (in_array($fileActualExt, $allowed)) {
           if ($fileError === 0 ) {
               if ($fileSize < 3000000) {
                   $horagora = time();



                   $curriculonomei[$i] = "$cpfi[$i]." . $fileActualExt;
                   $fileNameNew = $curriculonomei[$i];
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


 }//FIM for integrantes;

 // Verifica se há algum CPF repetido -------------------
   for ($i=1; $i <= $integrantese; $i++) {
   $indexes = array_keys($cpfi, $cpfi[$i]);
     if(count($indexes) >= 2){
       echo 'ta dando erro no de cima';
       $mandarPara = '../view/Equipe/errointegrantes.php';
       $algumErro = true;
    } else{
      echo "tudo ok";
    }
  };


    //CHECA PARA VER SE O CPF OU CNPJ JA FOI CADASTRADO NO BANCO:-----------------

  for ($i=1; $i <= $integrantese; $i++) {

  $cpfsql = "SELECT * FROM `integrantes` WHERE cpfi='$cpfi[$i]'";
  $jatem = mysqli_query($conn, $cpfsql);
   if($row = $jatem->fetch_assoc()){
      echo " Ta dando erro no de baixo!";
      $mandarPara = '../view/Equipe/errointegrantesjatem.php';
      $algumErro = true;
    }else{
      echo " não tem esse cpf";
        echo $conn->error;
        error_log($conn->error);
    }
  }

 if(!$algumErro){
 // Especializaçao:--------------------------------
   $especialtru = unserialize($_POST['especialtru']);




 // Registra na tabela 'equipetemp':--------------------------------------
  $sqle="INSERT INTO `equipetemp` (`nome_da_equipe`, `cnpj_equipe`, `numero_integrantes`, `endereco_equipe`, `telefone_equipe`, `email_equipe`, `senha_equipe`, `chave_equipe`)
   VALUES ('$nomee', '$cnpje', '$integrantese', '$enderecoe', '$telefonee', '$emaile', '$senhae', '$chave_equipe');";

   if($resulte = $conn->query($sqle)){
     echo "<br> Registro na tabela equipetemp realizado com sucesso! <br>";
   }else{
     echo "<br> houve um problema no registro da tabela equipetemp <br>";
   }




// Registra na tabela servico: ------------------------------
    $sqls="INSERT INTO `servico` (`chave_equipe`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
    VALUES ('$chave_equipe', '".($especialtru[0]?1:0)."', '".($especialtru[1]?1:0)."', '".($especialtru[2]?1:0)."', '".($especialtru[3]?1:0)."', '".($especialtru[4]?1:0)."', '".($especialtru[5]?1:0)."'); ";


    if($results = $conn->query($sqls)){
      echo "<br> Registro na tabela servico realizado com sucesso! <br>";
    }else{
      echo "<br> houve um problema no registro da tabela servico <br>";
      echo $conn->error;
      error_log($conn->error);
    }







  //Registra na Tabela integrantes ---------------------------
  //puxando cada informaçao do integrante
for ($i=1; $i <= $integrantese; $i++) {

   $sqli = "INSERT INTO `integrantes` (`chave_integrante`, `nomei`, `cpfi`, `cargoi`, `emaili`, `telefonei`, `chave_equipe`, `curriculoi`)
   VALUES ('$chave_integrante[$i]', '$nomei[$i]', '$cpfi[$i]', '$cargoi[$i]', '$emaili[$i]', '$telefonei[$i]', '$chave_equipe', '$curriculonomei[$i]')";


  if($resulti = $conn -> query($sqli)){
    echo "<br> Registro na tabela integrantes realizado com sucesso! <br>";
  }else{
    echo "<br> houve um problema no registro da tabela integrantes <br>";
      echo $conn->error;
      error_log($conn->error);
  }

}
 
 //Registra na Tabela serviços integrantes ---------------------------
  //puxando cada informaçao do serviço integrante
for ($i=1; $i <= $integrantese; $i++) {

  $sqlsi = "INSERT INTO `servicointegrantes` (`chave_integrante`, `banco_de_dados`, `criacao_de_redes`, `analise_de_sistemas`, `desenvolvimento_de_sistemas`, `montagem_e_manutencao`, `criacao_de_sites`)
                                     VALUES ('$chave_integrante[$i]', '$bancoi[$i]', '$redesi[$i]', '$analisei[$i]', '$desenvolvimentoi[$i]', '$montagemi[$i]', '$criacaoi[$i]')";

     if($resultsi = $conn -> query($sqlsi)){
       echo "<br> Registro na tabela servicointegrantes realizado com sucesso! <br>";
     }else{
       echo "<br> houve um problema no registro da tabela servicointegrantes <br>";
       echo "chave do integrante: $chave_integrante[$i], banco de dados: $bancoi[$i], criação de redes: $redesi[$i],
        Analise de sistemas: $analisei[$i], desenvolvimento de sistemas: $desenvolvimentoi[$i], montagem e manutenção: $montagemi[$i], criação: $criacaoi[$i]";
        echo $conn->error;
        error_log($conn->error);
     }

  }//FIM integrantes e servicointegrantes;
}
    header("Location: $mandarPara");


 ?>
