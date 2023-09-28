<?php
 session_start();
 include '../../includes/head.php';
 include '../../includes/conecta.php';

 $chave = $_SESSION['chave'];

 $sqlequipe = "SELECT * FROM `servico` WHERE `chave_equipe` = '$chave'";
 $resultequipe = mysqli_query($conn, $sqlequipe);
 while( $row = $resultequipe->fetch_assoc() ){
   $banco = $row['banco_de_dados'];
   $criacao = $row['criacao_de_sites'];
   $analise = $row['analise_de_sistemas'];
   $desenvolvimento = $row['desenvolvimento_de_sistemas'];
   $montagem = $row['montagem_e_manutencao'];
   $sites = $row['criacao_de_sites'];
 }

 ?>

 <body class="blue">

   <header>
     <?php include "equinav.php"; ?>
   </header>

   <main>
     <form class="box cadastro" action="../../app/adicionarintegrantes.app.php" enctype='multipart/form-data' method="post">
       <!-- <h2>Cadastro de integrantes da equipe:</h2> -->
       <p class="wider" style="text-align:center;">Adicione as informações do novo integrante </p>
       <?php

         echo "
         <div class='integrante'>
         <h3> Informações do integrante </h3>
           <p>
             <label>Nome completo:</label><br/>
         <input type='text' name='nomei'/></p>
           <p>
             <label>CPF:</label><br/>
         <input type='text' class='cpf' name='cpfi'/></p>
           <p>
             <label>Cargo na empresa:</label><br/>
         <input type='text' name='cargoi'/></p>
           <p>
             <label>E-mail:</label><br/>
         <input type='text' name='email'/></p>
           <p>
             <label>Telefone:</label><br/>
         <input type='text' name='telefone' class='tel'/></p>
           <p>
             <label>Currículo:</label><br/>
         <input type='file' name='curriculoi'/></p> <br>
         <h3 class='h3especial'> Apto para realizar serviços de:</h3><br>
         <div class='especial'>";

           for ($j=0; $j < count($especialtru); $j++) {
             if($especialtru[$j]){
                if($j % 2 != 0){
                  echo"<br>";
                }
                echo "<input type='checkbox' class='check' name='$especialiunder[$j]' value='1'><p>$especializacoes[$j]</p> ";
          }
           }
           echo" </div> ";
           if ($banco) { echo "<input type='checkbox' class='check' name='banco_de_dados' value='1'><p>Banco de dados</p> <br> "; }
           if ($criacao) { echo "<input type='checkbox' class='check' name='criacao_de_redes' value='1'><p>Criação de sites</p>  <br>"; }
           if ($analise) { echo "<input type='checkbox' class='check' name='analise_de_sistemas' value='1'><p>Analise de sistemas</p> <br> "; }
           if ($desenvolvimento) { echo "<input type='checkbox' class='check' name='desenvolvimento_de_sistemas' value='1'><p>Desenvolvimento de sistemas</p> <br> "; }
           if ($montagem) { echo "<input type='checkbox' class='check' name='montagem_e_manutencao' value='1'><p>Montagem e manutenção</p> <br> "; }
           if ($sites) { echo "<input type='checkbox' class='check' name='criacao_de_sites' value='1'><p>Criação de sites</p> <br> "; }

       ?>


       <button type='submit'>CONCLUIR CADASTRO</button>
     </form>

   </main>
   <script src="../../JS/main.js" charset="utf-8"></script>
 </body>
