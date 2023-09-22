Nome completo<?php
 session_start();
 include '../../includes/head.php';



 //DADOS DA EQUIPE --------------------------------
  $nomee = $_POST['nomee'];
  $cnpje = $_POST['cnpje'];
  $integrantese = $_POST['integrantese'];
  $complementoe = isset($_POST['complementoe'])?  ", " . $_POST['complementoe'] : "" ;
  $enderecoe = $_POST['cidadee'] . ', ' . $_POST['estadoe'] . ', '. $_POST['enderecoe'] . ', '. $_POST['numeroe'] . $complementoe;
  $telefonee = $_POST['telefonee'];
  $emaile = $_POST['emaile'];
  $senhae = $_POST['senhae'];


 // Especializaçao:--------------------------------
   $banco = isset($_POST['bancodedados'])? true : false;
   $rede = isset($_POST['redesadm'])? true : false;
   $analise = isset($_POST['analisesistemas'])? true : false;
   $desenvolvimento = isset($_POST['desenvolvimentosistemas'])? true : false;
   $montagem = isset($_POST['montagemmanutencao'])? true : false;
   $sites = isset($_POST['criacaosites'])? true : false;

   $especialtru = [$banco, $rede, $analise, $desenvolvimento, $montagem, $sites];


   $especializacoes = ['banco de dados', 'redes administrativas',
   'analise de sistemas', 'desenvolvimento de sistemas',
   'montagem e manutenção', 'criação de sites'];
   $especialiunder = ['banco_de_dados', 'redes_administrativas', 'analise_de_sistemas', 'desenvolvimento_de_sistemas', 'montagem_e_manutencao', 'criacao_de_sites'];


   $especializacao = serialize($especialtru);
 ?>

 <body class="blue">

   <header>
     <?php include "cadnav.php"; ?>
   </header>

   <main>
     <form class="box cadastro" enctype='multipart/form-data' action="../../app/cadequipetemp.app.php" method="post">
       <h2>Cadastro de integrantes da equipe:</h2>
       <p class="wider">Para concluir o cadastro pedimos que cadastre as informações dos membros que compõem a equipe <?php echo "<b>$nomee</b>"; ?></p>
       <?php
        echo" <input type='hidden' name='integrantese' value='$integrantese'/>";

       for ($i=1; $i<=$integrantese;$i++) {
         echo "
         <div class='integrante'>
         <h3> Informações do integrante $i </h3>
           <p>
             <label>Nome completo:</label><br/>
         <input type='text' name='nomei$i'/></p>
           <p>
             <label>CPF:</label><br/>
         <input type='text' class='cpf' name='cpfi$i'/></p>
           <p>
             <label>Cargo na empresa:</label><br/>
         <input type='text' name='cargoi$i'/></p>
           <p>
             <label>E-mail:</label><br/>
         <input type='text' name='email$i'/></p>
           <p>
             <label>Telefone:</label><br/>
         <input type='text' name='telefone$i' class='tel'/></p>
           <p>
             <label>Currículo:</label><br/>
         <input type='file' name='curriculoi$i'/></p> <br>
         <h3 class='h3especial'> Apto para realizar serviços de:</h3><br>
         <div class='especial'>";

           for ($j=0; $j < count($especialtru); $j++) {
             if($especialtru[$j]){
                if($j % 2 != 0){
                  echo"<br>";
                }
                echo "<input type='checkbox' class='check' name='$especialiunder[$j]$i' value='1'><p>$especializacoes[$j]</p> ";
          }
           }
           echo" </div>
         ";
       }
       echo "<input type='hidden' name='nomee' value='$nomee'>
       <input type='hidden' name='cnpje' value='$cnpje'>
       <input type='hidden' name='integrantese' value='$integrantese'>
       <input type='hidden' name='enderecoe' value='$enderecoe'>
       <input type='hidden' name='telefonee' value='$telefonee'>
       <input type='hidden' name='emaile' value='$emaile'>
       <input type='hidden' name='senhae' value='$senhae'>
       <input type='hidden' name='especialtru' value='$especializacao'>";
       ?>


       <button type='submit'>CONCLUIR CADASTRO</button>
     </form>

   </main>
   <script src="../../JS/main.js" charset="utf-8"></script>
 </body>
