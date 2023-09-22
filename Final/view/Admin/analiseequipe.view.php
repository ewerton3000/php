<?php
 session_start();
 $nome = $_SESSION['nome'];
 $adm = $_SESSION['administrador'];

 if(!$adm){
   session_destroy();
   header("Location: ../../");
 }

  include '../../includes/head.php';
  include '../../includes/conecta.php';
  include '../../includes/mascara.php';


  $queequipe = $_POST['queequipe'];

  // Puxa as informaçoes da tabela equipetemp:---------------------
  $sqle="SELECT * FROM `equipetemp` WHERE id_equipe = '$queequipe';";

  $resulte = $conn -> query($sqle);

  if ($rowe = $resulte -> fetch_assoc()){
    $nomee = $rowe['nome_da_equipe'];
    $cnpjo = $rowe['cnpj_equipe'];
    $cnpje = Mask("##.###.###/####-##", $cnpjo);
    $integrantes = $rowe['numero_integrantes'];
    $enderecoe = $rowe['endereco_equipe'];
    $telefono = $rowe['telefone_equipe'];
    $telefonee = Mask("(##)####-####", $telefono);
    $emaile = $rowe['email_equipe'];
    $uide = $rowe['chave_equipe'];

    $_SESSION['essaequipe'] = $uide;

  }

 // Puxa informações da tabela servico: -----------------
  $sqls="SELECT * FROM `servico` WHERE chave_equipe = '$uide';";
  $results = $conn -> query($sqls);

  if($row = $results->fetch_assoc()){
    $banco = $row['banco_de_dados'];
    $redes = $row['criacao_de_redes'];
    $analise = $row['analise_de_sistemas'];
    $desenvolvimento = $row['desenvolvimento_de_sistemas'];
    $montagem = $row['montagem_e_manutencao'];
    $sites = $row['criacao_de_sites'];
  }


  // Puxa as informações dos integrantes da equipe: ------------

  $sqli = "SELECT * FROM `integrantes` WHERE chave_equipe = '$uide';";


 ?>


 <body class="blue">
   <header>
     <?php include "admnav.php"; ?>
   </header>
   <main>

   <div class="box visor">
     <h2>Detalhes da equipe:</h2>
     <div class="block">

     <?php
     echo "<p><b>Nome da equipe: <br></b> $nomee</p>
     <p><b>CNPJ da equipe: <br></b> $cnpje</p>
     <p><b>numero de integrantes: <br></b> $integrantes</p>
     <p><b>Endereço da equipe: <br></b> $enderecoe</p>
     <p><b>Telefone: <br></b> $telefonee</p>
     <p><b>Email de contato: <br></b> $emaile</p>"; ?>

     <div>
       <h3><b>Especializações:</b></h3>
       <ul>
         <?php
         if($banco){ echo"<li>Banco de dados</li>";}
         if($redes){ echo"<li>Criação de redes</li>";}
         if($analise){ echo"<li>Análise de sistemas</li>";}
         if($desenvolvimento){ echo"<li>Desenvolvimento de sistemas</li>";}
         if($montagem){ echo"<li>Montagem e manutenção de computadores</li>";}
         if($sites){ echo"<li>Criação de sites</li>";}
          ?>
       </ul>
     </div>
    </div>

 <?php
     echo " <br>  <br> <h3>MEMBROS:</h3> <br> ";

     $resulti = $conn -> query($sqli);
     while($rowi = $resulti -> fetch_assoc()){

       $nomei = $rowi['nomei'];
       $cpfi = $rowi['cpfi'];
       $cargoi = $rowi['cargoi'];
       $emaili = $rowi['emaili'];
       $telefonei = $rowi['telefonei'];
       $curriculoi = $rowi['curriculoi'];
       $chave_integrante = $rowi['beta'];
       $caminho_curriculo = $nomee . '/' . $nomei . '_' . $cpfi . '.pdf';

       echo "<div class='block'> <br>  <br> Integrante $nomei <br>";
       echo "CPF: $cpfi <br> Cargo na empresa: $cargoi <br> Telefone para contato: $telefonei <br> E-mail para contato: $emaili <br>";
       echo "Curriculo do integrante: <a href='../../curriculos/$uide/$curriculoi' target='_blank'>Link</a> </div>";
     }
      ?>
      <a href="../../app/aprovarequipe.app.php">Aprovar</a> <br> <br> <br>
      <a href="../../app/recusarequipe.app.php" class="red">Recusar</a>

    </div>
   </div>
 </main>
 <script src="../../JS/main.js" charset="utf-8"></script>
 </body>
