<?php
  include "../../includes/conecta.php";
  session_start();

  $id = $_SESSION['id'];
  $pedido = $_POST['idpedido'];
  $chave = $_SESSION['chave'];

  $tipopedido = $_POST['tipopedido'];

  // echo "$tipopedido";

  switch($tipopedido){
    case 'bancodedados':
      echo "é banco de dados";
      $tipo_do_pedido = 'banco_de_dados';
    break;
    case 'redes':
     echo "é redes";
     $tipo_do_pedido = 'criacao_de_redes';
    break;
    case 'analise':
     echo "é analise";
     $tipo_do_pedido = 'analise_de_sistemas';
    break;
    case 'desenvolvimento':
     echo "é desenvolvimento";
     $tipo_do_pedido = 'desenvolvimento_de_sistemas';
    break;
    case 'montagem':
     echo "é montagem";
     $tipo_do_pedido = 'montagem_e_manutencao';
    break;
    case 'sites':
     echo "é sites";
     $tipo_do_pedido = 'criacao_de_sites';
    break;
    default:
    echo "é nenhum";
    break;
  }

  $sql = "SELECT * FROM `integrantes` WHERE chave_equipe = '$chave'";
  $result = $conn -> query($sql);
  // else{
  //   echo 'n achou';
  //   echo $conn->error;
  //   error_log($conn->error);
  // }
  include "../../includes/head.php";
 ?>

 <body class="blue">
   <header> <?php include "equinav.php"; ?> </header>
   <main>
     <div class='box pedidos'>
       <h2>Selecione os membros de sua equipe que realizarão o serviço:</h2>
       <form action="../../app/aceitarpedido.app.php" method="post">

       <?php
       while($row = $result-> fetch_assoc()){
         $ocupado = $row['status'];
         $nome = $row['nomei'];
         $chave_integrante = $row['chave_integrante'];

         if (!$ocupado) {
           // echo "<br> o integrante $nome não esta ocupado";
           $sql2 = "SELECT * FROM `servicointegrantes` WHERE chave_integrante = '$chave_integrante' && $tipo_do_pedido = '1'";

           if($result2 = $conn -> query($sql2)){
             // echo "<br>o integrante $nome pode realizar serviços de $tipopedido";
             ?>
             <?php echo "<label for='$nome'>"; ?>
             <div class="check-member">
               <?php echo " <input type='checkbox' name='integrantes_list[]' value='$chave_integrante'> "; ?>
               <p><?php echo "$nome" ?></p>
             </div>
           </label>
             <?php
           } } }
           echo "<input type='hidden' name='idpedido' value='$pedido'>";
       ?>
      <br> <button type="submit" name="button">Selecionar</button>
     </form>
     </div>
   </main>

  <script src="../../JS/main.js" charset="utf-8"></script>
</body>
<style media="screen">
 .check-member{
   text-align: left;
   float:left;
   width: 49%;
   display: inline-block;

 }
</style>
