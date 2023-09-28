<?php
 include "../../includes/conecta.php";

 session_start();
 if(!isset($_SESSION['id'])){
   header("Location:../");
 } else{
 $nome = $_SESSION['nome'];
 $chave = $_SESSION['chave'];
 $email = $_SESSION['email'];

}
include "../../includes/head.php";
 ?>

 <body class="blue">

 <header>
   <?php include "equinav.php"; ?>
 </header>

 <main>
 <div class='box pedidos'>
   <?php
     $sql = "SELECT * FROM `servico` WHERE chave_equipe = '$chave'";

     $result = $conn -> query($sql);

   if($row = $result -> fetch_assoc()){
     $banco = $row['banco_de_dados'];
     $criacao = $row['criacao_de_redes'];
     $analise = $row['analise_de_sistemas'];
     $desenvolvimento = $row['desenvolvimento_de_sistemas'];
     $montagem = $row['montagem_e_manutencao'];
     $sites = $row['criacao_de_sites'];

     // echo "banco:$banco, criacao:$criacao, analise:$analise, desenvolvimento:$desenvolvimento, montagem:$montagem, sites:$sites";

   }else{
     echo "não puxou";
   }

   $sql = "SELECT * FROM `pedido` WHERE status_p = 'aberto' order by data_pedido desc";

      $result = $conn -> query($sql);

   while($row = $result -> fetch_assoc()){
     $id_pedido = $row['id'];
     $cidade = $row['cidade'];
     $endereco = $row['endereco'];
     $tipo = $row['tipo_pedido'];
     // $orcamento = $row['orcamento'];
     $obs = $row['observacao'];
     $data_pedido = $row['data_pedido'];
     $data = date("d / m / Y", strtotime($data_pedido));
     $id_cliente = $row['id_cliente'];

     // echo "$id_pedido, $cidade, $endereco, $tipo";

     $sol = "SELECT * from `cliente` WHERE id_cliente = '$id_cliente'";
     $resultado = $conn -> query($sol);

     if($col = $resultado ->fetch_assoc()){
       $cliente = $col['nome_cliente'];
     }

     switch ($tipo) {

       case 'bancodedados':
           if ($banco) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Bando de Dados</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
      <input type='hidden' name='idpedido' value='$id_pedido'>
      <input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'redes':
           if ($criacao) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Redes</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
<input type='hidden' name='idpedido' value='$id_pedido'>
<input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'analise':
           if ($analise) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> Analise e Desenvolvimento de Sistemas</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
<input type='hidden' name='idpedido' value='$id_pedido'>
<input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'desenvolvimento':
           if ($desenvolvimento) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
<input type='hidden' name='idpedido' value='$id_pedido'>
<input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'montagem':
           if ($montagem) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
<input type='hidden' name='idpedido' value='$id_pedido'>
<input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }
         break;
       case 'sites':
           if ($sites) {
             echo "
   <div class='pedido'>
     <p> <b>Tipo do pedido:<br></b> $tipo</p>
       <p> <b>Cliente:<br></b> $cliente</p>
       <p> <b>Data to pedido:<br></b> $data</p>
       <p> <b>Endereço:<br></b> $cidade <br> $endereco</p>
       <p> <b>Sobre o pedido:<br></b> $obs</p>
       <form action='escolhaintegrante.view.php' method='post'>
<input type='hidden' name='idpedido' value='$id_pedido'>
<input type='hidden' name='tipopedido' value='$tipo'>
  <button type='submit' name='button'>Aceitar</button>
</form>
   </div>";
           }

       default:
         break;
     }
   }//FIM where;




    ?>
    <a href="painelequipe.view.php">Voltar</a>
 </div>

 </main>
 <script src="../../JS/main.js" charset="utf-8"></script>
 </body>
